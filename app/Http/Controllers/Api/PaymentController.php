<?php

namespace App\Http\Controllers\Api;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
       // Store a new payment
       public function store(Request $request)
       {
        // dd($request->all());
           $validatedData = $request->validate([
               'card_number' => 'required',
               'expiry_date' => 'required|date',
               'expiry_year' => 'required|integer',
               'cvv' => 'required|numeric',
           ]);
   
           // Create a new payment record in the database
           $payment = Payment::create([
               'card_number' => $validatedData['card_number'],
               'month' => $validatedData['expiry_date'],
               'date' => $validatedData['expiry_year'],
               'csv' => $validatedData['cvv'],
               // Add other fields as needed
           ]);
   
           return response()->json(['payment' => $payment], 201);
       }
   
       // Get all payments
       public function index()
       {
           $payments = Payment::all();
   
           return response()->json(['payments' => $payments], 200);
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
    public function destroy(Payment $payment)
    {
        // Delete the specified payment
        $payment->delete();

        return response()->json(['message' => 'Payment deleted successfully'], 200);
    }
}
