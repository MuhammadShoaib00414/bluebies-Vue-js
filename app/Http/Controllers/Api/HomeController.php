<?php

namespace App\Http\Controllers\Api;
use App\Models\FAQ;
use App\Models\User;
use App\Models\Contacts;
use App\Models\Features;
use App\Models\Packages;
use App\Models\Partners;
use App\Models\DeviceToken;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function getFaqs(Request $request)
    {
        // Validate the request data as needed
        $faqs = FAQ::get();
        $contacts = Contacts::first(); // Retrieve all contacts

        $data = [
            'faqs' => $faqs,
            'contacts' => $contacts,
        ];
      
        return response()->json(['data' => $data]);
    }
   

    public function getPartners(Request $request)
    {
        // Validate the request data as needed
        $partners = Partners::get();
      
      
        return response()->json($partners);
    }

    public function getsubscription(Request $request)
    {
        $packageData = Packages::all(); // Retrieve all packages records        
        $packageIds = Packages::pluck('id')->toArray(); // Get an array of all package IDs

        $features = Features::with(['packages' => function ($query) use ($packageIds) {
            $query->whereIn('package_id', $packageIds);
        }])->get();

        
        // dd( $features );
        // $features will contain the features with associated package_features that match the specified package_id
        
    
        return response()->json([
            'features' => $features,
            // 'packages' => $packageData,
        ]);  
    }


    public function saveToken(Request $request)
    {
        $token = $request->token;
       
        // Check if the user_id and token combination already exist
        // $existingDevice = DeviceToken::where('device_token', $token)
        //     ->first();
    
        // if ($existingDevice) {
        //     return response()->json([
        //         'message' => 'Token not saved. Device already exists.',
        //         'data' => $existingDevice,
        //         'status' => 500,
        //     ]);
        // }
    
        // Create the device record
        $device = DeviceToken::create([
            'device_token' => $token,
        ]);
       
        return response()->json([
            'message' => 'Token saved successfully.',
            'data' => $device,
            'status' => 200,
        ]);
    }

    public function sendNotification(Request $request)
    {
        $firebaseToken = User::whereNotNull('device_token')->pluck('device_token')->all();
          
        $SERVER_API_KEY = 'AAAAv4uFUS8:APA91bHzhmrgFqMHkeG0fi43JzCH5IatuLXG8YrFs4TokoNPaU-X656_2kp2_efHA-eaOiARx1qF7t5-3z_zCeKXUNOxWZ2Hk7OTwWY_9CBUZ1gig1EYCZ-N_MKgebTRauXGV3n9WSsY';
  
        $data = [
            "registration_ids" => $firebaseToken,
            "notification" => [
                "title" => $request->title,
                "body" => $request->body,  
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
  
        dd($response);
    }
   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
