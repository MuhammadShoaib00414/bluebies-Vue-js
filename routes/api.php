<?php

use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\CoinPairController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\SettingsController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\Api\HomeController;

use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('payment/initiate', [StripeController::class, 'initiatePayment']);
Route::post('payment/complete', [StripeController::class, 'completePayment']);
Route::post('payment/failure', [StripeController::class, 'failPayment']);
Route::get('get-intent', [StripeController::class, 'getIntent']);


// routes/web.php
Route::post('/create-payment', 'PayPalController@createPayment');
Route::post('/capture-payment', 'PayPalController@capturePayment');


Route::controller(AuthController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::get('verify/{code}/{id}', 'verify');
    Route::post('forgot-password', 'forgotPassword');
    Route::post('reset-password', 'resetPassword');
});

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('user', [AuthController::class,'user'])->name('user');
    Route::put('/user/update', [UserController::class, 'update']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('all-pairs', [CoinPairController::class,'allPairs'])->name('all-pairs');
Route::get('coin-price/{pair}', [CoinPairController::class,'pairPrice'])->name('pairPrice');
Route::get('export', [ExportController::class,'export'])->name('export');
Route::get('mobile-export', [ExportController::class,'mobileExport'])->name('mobile-export');

Route::post('coupons', [DashboardController::class,'store'])->name('coupons');

Route::get('get-coupons', [DashboardController::class,'index'])->name('get-coupons');

Route::post('update-coupons', [DashboardController::class,'update'])->name('update-coupons');

Route::post('save-coupon', [SettingsController::class,'saveCoupon'])->name('save-coupon');


Route::get('coupon-settings', [SettingsController::class,'CouponSettings'])->name('coupon-settings');


Route::delete('delete-coupons/{id}', [DashboardController::class, 'delete'])->name('delete-coupons');

// HOME API
Route::get('get-faqs', [HomeController::class,'getFaqs'])->name('get-faqs');

Route::get('get-partners', [HomeController::class,'getPartners'])->name('get-partners');

Route::get('get-subscription', [HomeController::class,'getsubscription'])->name('get-subscription');


Route::get('save-token', [HomeController::class,'saveToken'])->name('save-token');
Route::get('send-notification', [HomeController::class,'sendNotification'])->name('send.notification');




Route::get('get-stripe-intent', function () {
    // Find the user by ID (Assuming you want to get a specific user, e.g., User with ID 1)
    $user = User::get();

    if ($user) {
        // Make hidden attributes visible
        $user->makeVisible(['verification_code']);

        // Perform the payment
        // $payment = $user->pay('400');

        // Convert user data to an array
        $userData = $user->toArray();

        // Return response with user data and payment intent client secret
        return response()->json(['user' => $userData]);
    } else {
        // User not found, return an error response
        return response()->json(['error' => 'User not found'], 404);
    }
});




// Route::get('coupon/create', 'DashboardController@create')->name('coupon.create');





