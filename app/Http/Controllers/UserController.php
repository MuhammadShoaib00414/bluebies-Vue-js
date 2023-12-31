<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function update(Request $request)
    {
        $user = $request->user();

        // Validate the request data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Update the user's first name and last name
        $user->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
        ]);

        // Update the password if provided
        if ($request->filled('password')) {
            $user->update([
                'password' => Hash::make($request->input('password')),
            ]);
        }

        return response()->json(['message' => 'User updated successfully']);
    }

    public function updatesetting(Request $request)
    {

        $id = Auth::user()->id;
        
        
        // $id =  $request->input('id');
        // Find the subscription plan by ID
        $updateuser = User::findOrFail($id);
    
        // Update the attributes
        $updateuser->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'phonenumber' => $request->input('phonenumber'),
            'address' => $request->input('address'),
            'country' => $request->input('country'),
            'companyname' => $request->input('companyname'),
            'type' =>  $request->input('type'),
        ]);
    
        return response()->json([
            'message' => 'success',
            'updateuser' => $updateuser,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
