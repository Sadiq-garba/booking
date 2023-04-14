<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\booking;
use Stripe\Exception\CardException;
use Stripe\Exception\InvalidRequestException;
use Stripe\PaymentIntent;
use Stripe\Stripe;
use App\Models\Payment;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\MainController::class, 'index']);
Route::get('/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit']);
Route::post('/info/edit/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::get('/book', [App\Http\Controllers\MainController::class, 'book']);
Route::post('/post', [App\Http\Controllers\MainController::class, 'store'])->name('store');
Route::get('/proceed-to-pay', [App\Http\Controllers\MainController::class, 'pay'])->name('pay');
Route::get('/payment-form', [App\Http\Controllers\MainController::class, 'payment']);
Route::get('/success', [App\Http\Controllers\MainController::class, 'success']);
//Route::post('/charge', [App\Http\Controllers\MainController::class, 'stripe'])->name('charge');
Route::post('/process-payment', function (Request $request) {
    try {
        // Set your Stripe API key
        Stripe::setApiKey(env('STRIPE_SECRET'));

        // Create a new PaymentIntent
        $intent = PaymentIntent::create([
            'amount' => $request->input('amount'),
            'currency' => 'usd',
        ]);

        // Save payment details to database if payment succeeded
        if ($intent->status === 'succeeded') {
            $payment = new Payment();
            $payment->amount = $intent->amount;
            $payment->currency = $intent->currency;
            $payment->status = $intent->status;
            $payment->stripe_id = $intent->id;
            $payment->save();
        }

        // Return the PaymentIntent client secret to the front-end
        return response()->json(['client_secret' => $intent->client_secret]);
   
   
    } catch (CardException $e) {
        // Handle card error
        return response()->json(['error' => $e->getMessage()]);
    } catch (InvalidRequestException $e) {
        // Handle invalid request error
        return response()->json(['error' => $e->getMessage()]);
    } catch (\Exception $e) {
        // Handle generic error
        return response()->json(['error' => 'An error occurred. Please try again later.']);
    }
});




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
