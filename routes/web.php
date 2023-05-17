<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductAdController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    return view('test');
});

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);



Route::resource('guests',ProductController::class);


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::middleware(['auth'])->group(function () {
    Route::resource('customers', CustomerController::class);
    Route::resource('products', ProductAdController::class);
});


Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required','email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        request()->session()->regenerate();
        if ($request->user()) {
            // return redirect()->intended('/dashboard');
            return redirect('products');
        } 
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
    })->middleware('guest')->name('login');



Route::post('/logout', function () {
    auth()->logout();

    request()->session()->invalidate();

    request()->session()->regenerateToken();

    return redirect('/login');
})->name('logout');
Route::resource('invoices', InvoiceController::class);
Route::get('invoices/{invoice}/details', 'InvoiceController@details')->name('invoices.details');

