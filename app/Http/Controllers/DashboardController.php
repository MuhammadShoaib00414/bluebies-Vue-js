<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CouponCode;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupons = CouponCode::all(); // You can use different methods to retrieve coupons based on your requirements

        return response()->json($coupons); 
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
       
        $request->validate([
            'code' => 'required|unique:coupon_codes',
            'discount' => 'required|numeric',
        ]);

        $coupon =  CouponCode::create([
            'code' => $request->input('code'),
            'discount' => $request->input('discount'),
            'is_active' => $request->input('is_active'),
        ]);
        return response()->json([
            'message' => 'success',
            'coupon' => $coupon,
        ]);
        
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

       
        // Validate the incoming request data
        $this->validate($request, [
            'id' => 'required',
            'code' => 'required|string|max:255',
            'discount' => 'required|numeric|min:0|max:100',
            'is_active' => 'required|boolean',
        ]);

        // Find the coupon by ID
        $coupon = CouponCode::find($request->input('id'));

        if (!$coupon) {
            // Handle if the coupon is not found
            return response()->json(['error' => 'Coupon not found'], 404);
        }

        // Update the coupon details
        $coupon->code = $request->input('code');
        $coupon->discount = $request->input('discount');
        $coupon->is_active = $request->input('is_active');
        
        // Save the changes
        $coupon->save();

        // You can return a response indicating success
        return response()->json(['message' => 'Coupon updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
      
        try {
            // Find the coupon by its ID
            $coupon = CouponCode::find($id);
    
            if (!$coupon) {
                // Handle the case where the coupon does not exist
                return response()->json(['message' => 'Coupon not found'], 404);
            }
    
            // Delete the coupon
            $coupon->delete();
    
            return response()->json(['message' => 'Coupon deleted successfully']);
        } catch (\Exception $e) {
            // Handle any errors that may occur during deletion
            return response()->json(['message' => 'Coupon deletion failed'], 500);
        }
    }
    
}
