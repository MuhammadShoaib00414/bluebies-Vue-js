<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\DeviceToken;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\VerificationCode;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function register(Request $request) {

      
        $validatedData = $request->validate([
            'firstName' => 'required|max:55',
            'phonenumber' => 'required|max:55',
            'email' => 'email|required|unique:users',
            'password' => 'required|confirmed',
        ]);
    
        $validatedData['password'] = bcrypt($request->password);
    
        $verificationCode = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,6);
        $user = User::create([
            'uuid' =>  Str::random(10),
            'first_name' => $validatedData['firstName'],
            'phonenumber' => ($validatedData['phonenumber']),
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
            'verification_code' => $verificationCode,
            'is_admin' => 1
        ]);

        // generate 6 digit alpha numberic varification code
    
        $accessToken = $user->createToken('authToken');
        
        // send verification code email to user
        Mail::to($validatedData['email'])->send(new VerificationCode($verificationCode, 'register'));
        
        return response(['user' => $user, 'access_token' => $accessToken, 'status' => 'success']);
    }

    public function verify($code, $id) {
        $user = User::find($id);
      
        if($user->verification_code == $code) {
            $user->email_verified_at = now();
            // $user->verification_code = null;
            $user->save();
            return response(['message' => 'Email verified successfully', 'status' => 'success'], 200);
        } else {
            return response(['message' => 'Invalid code, please verify them and retry.', 'status' => 'error'], 400);
        }
    }

    
    public function login(Request $request) {


        $firebaseToken = DeviceToken::first();
        // dd($firebaseToken->device_token);
        $SERVER_API_KEY = 'AAAAvv1AMXk:APA91bE75aH3cloDazo2EAAJJMf5G1frycoUhTKMFG4j9W7Pc8rbvfO0FIn0igbblWK-xl8_iyYi4nAY6ym3l83Do1d_6wXVT87NooWfe0J4a-GrTjDHkxuANG7A45fR_aJyqB_DwuIz';
  
        $data = [
            "registration_ids" => [$firebaseToken->device_token],
            "notification" => [
                "title" => 'Your OTP Code is',
                "body" => '002211',  
            ]
        ];
        $dataString = json_encode($data);
        
        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];
    // dd($dataString);
        $ch = curl_init();
      
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
               
        $response = curl_exec($ch);
  
        dd($response);
        $loginData = $request->validate([
            'phonenumber' => 'required',
            // 'checkbox' => 'required',
        ]);
    
        $verificationCode = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 1, 6);
    
        $user = User::where('phonenumber', $loginData['phonenumber'])->first();
    
        if (!$user) {
            return response(['message' => 'Invalid credentials', 'status' => 'error'], 400);
        }
    
        // Associate verification code with the user
        $user->verification_code = $verificationCode;
        $user->save();
    
        // Assuming the 'email' field is present in the User model
        $userEmail = $user->email;
    
        // Log in the user by their email
        Auth::loginUsingId($user->id);
    
        $accessToken = auth()->user()->createToken('authToken');
        $token = $accessToken->plainTextToken;
    
        return response(['user' => auth()->user(), 'token' => $token, 'status' => 'success']);
    }
    

    public function user(Request $request) {
        return response(['user' => auth()->user(), 'status' => 'success']);
    }
    

    public function forgotPassword(Request $request) {
        $validatedData = $request->validate([
            'email' => 'email|required|exists:users',
        ], [
            'email.exists' => 'Email does not exist',
        ]);

        $verificationCode = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,6);
        $user = User::where('email', $validatedData['email'])->first();
        $user->verification_code = $verificationCode;
        $user->save();

        Mail::to($validatedData['email'])->send(new VerificationCode($verificationCode, 'forgot-password'));

        return response(['message' => 'Verification code sent to your email', 'status' => 'success', 'user' => $user]);
    }

    public function resetPassword(Request $request) {
        $validatedData = $request->validate([
            'id' => 'required|exists:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::where('id', $validatedData['id'])->first();
        $user->password = bcrypt($validatedData['password']);
        $user->save();

        return response(['message' => 'Password reset successfully', 'status' => 'success']);
    }

}
