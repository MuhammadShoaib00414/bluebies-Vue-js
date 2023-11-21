<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Stripe\StripeClient;
use Stripe\PaymentIntent;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Stripe\Stripe as StripeGateway;

class StripeController extends Controller
{
    public function initiatePayment(Request $request)
    {
        StripeGateway::setApiKey('STRIPE_SECRET_KEY');

        try {
            $paymentIntent = PaymentIntent::create([
                'amount' => $request->amount * 100, // Multiply as & when required
                'currency' => $request->currency,
                'automatic_payment_methods' => [
                    'enabled' => true,
                ],
            ]);

            // Save the $paymentIntent->id to identify this payment later
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 500);
        }

        return [
            'token' => (string) Str::uuid(),
            'client_secret' => $paymentIntent->client_secret
        ];
    }

    
    public function completePayment(Request $request)
    {
        $stripe = new StripeClient('STRIPE_SECRET_KEY');

        // Use the payment intent ID stored when initiating payment
        $paymentDetail = $stripe->paymentIntents->retrieve('PAYMENT_INTENT_ID');

        if ($paymentDetail->status != 'succeeded') {
            // throw error
        }

        // Complete the payment
    }

    public function failPayment(Request $request)
    {
        // Log the failed payment if you wish
    }

    public function getIntent() {
        $payment =  User::find(1)->pay(
           '400'
        );

        return $payment->client_secret;
    }
}
