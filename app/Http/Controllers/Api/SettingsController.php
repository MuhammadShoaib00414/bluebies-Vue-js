<?php

namespace App\Http\Controllers\Api;
use App\Models\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function saveCoupon(Request $request)
    {
        // Validate the request data as needed
        $request->validate([
            'discount' => 'required',
        ]);
        $formattedDiscount = number_format($request->discount, 2, '.', '');
        // Save the coupon data in the settings table
        $couponSetting =  Settings::updateOrCreate(
            ['key' => 'coupon'],
            ['value' => $formattedDiscount]
        );

        return response()->json([
            'message' => 'success',
            'coupon' => $couponSetting,
        ]);
    
    }

    public function CouponSettings(Request $request)
    {
        // Validate the request data as needed
        $coupon = Settings::where('key', 'coupon')->value('value');

        return response()->json(['coupon' => $coupon]);
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
