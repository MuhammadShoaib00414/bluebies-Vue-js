<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Invitations;
use App\Models\DeviceToken;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\SendInvitation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

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
                "body" =>  $verificationCode,  
            ]
        ];
        $dataString = json_encode($data);
        
        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];

        $ch = curl_init();
      
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
               
        $response = curl_exec($ch);
        $verificationCode = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 1, 6);
    
        // dd($response);
        $loginData = $request->validate([
            'phonenumber' => 'required',
            // 'checkbox' => 'required',
        ]);
    
    
        $user = User::where('phonenumber', $loginData['phonenumber'])->first();
    
        if (!$user) {
            return response(['message' => 'Invalid credentials', 'status' => 'error'], 400);
        }
        
        // Associate verification code with the user
        $user->verification_code = $verificationCode;
        $user->save();
    
        // Assuming the 'email' field is present in the User model
        $userEmail = $user->email;

        Mail::to($user->email)->send(new VerificationCode($user->verification_code, 'login'));

    
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

    public function updatePassword(Request $request)
    {
     
        $localStorageData = json_decode($request->localStorageData, true);
        // $formData = $request->formData;

        // Handle your logic with the received data
        // For example, you can access $localStorageData and $formData here

        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|min:6|different:currentPassword',
            'confirmPassword' => 'required|same:newPassword',
        ]);

        // Example: Update the user's password
        // Retrieve the user based on the local storage data
        $user = User::find($localStorageData['id']);
        $localStorageData = json_decode($request->localStorageData, true);
        if (!Hash::check($request->currentPassword, $user->password)) {
          
            return response()->json(['message' => 'Current password is incorrect'], 422);
        }
        

        // Update the user's password
        $user->password = Hash::make($request->newPassword);
        $user->save();
         return response(['message' => 'Password updated successfully', 'status' => 'success']);
                                                                                            
    }

   
    public function sendInvitation(Request $request)
    {
        $localStorageData = json_decode($request->localStorageData, true);
        $user = User::find($localStorageData['id']);
    
        $request->validate([
            'email' => 'required|email',
        ]);
    
        // Extracting name from email
        $email = $request->input('email');
        $parts = explode('@', $email);
        $name = $parts[0]; // This gives you the name part before the @
    
        // Create a new Invitation instance
        $invitation = new Invitations();
        $invitation->user_id = $user->id;
        $invitation->receiver_email = $email;
        $invitation->receiver_name = $name;
        $invitation->invitation_date = now();
    
        // Save the invitation to the database
        $invitation->save();
    
        // Assuming you have the sender's name available in $user->name
        Mail::to($email)->send(new SendInvitation($email, $user->name));
    
        return response()->json(['message' => 'Invitation sent successfully']);
    }
    
    public function getinvitation(Request $request) {
        // Validate the request data as needed
        $invitations = Invitations::get();
        return response()->json($invitations);

       
    }
    public function deleteInvitation($id)
    {
        $invitation = Invitations::find($id);

        if (!$invitation) {
            return response()->json(['message' => 'Invitation not found'], 404);
        }

        $invitation->delete();

        return response()->json(['message' => 'Invitation deleted successfully']);
    }
}
