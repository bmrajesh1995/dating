<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
|
*/


Route::get('/',[App\Http\Controllers\LoginController::class,'login']);
 Route::get('/login',[App\Http\Controllers\LoginController::class,'login']);
 Route::get('/home',[App\Http\Controllers\LoginController::class,'home'])->name('login.home');
 Route::post('/homelog', [App\Http\Controllers\Auth\LoginController::class, 'homelog'])->name('login.homelog');
Route::get('/register',[App\Http\Controllers\LoginController::class,'register'])->name('login.register');
 Route::post('/store',[App\Http\Controllers\LoginController::class,'store'])->name('login.store');
Route::get('/forget-password',[App\Http\Controllers\LoginController::class,'forgetpassword']);
Route::get('/otp',[App\Http\Controllers\LoginController::class,'otpforlogin'])->name('login.otp_page');
Route::post('/verify_otp',[App\Http\Controllers\LoginController::class,'verifyotp'])->name('login.verify_otp');


Route::get('/account-setting',[App\Http\Controllers\LoginController::class,'accountsetting']);
Route::post('/dashboard',[App\Http\Controllers\LoginController::class,'dashboard']);
// Route::get('/loginUsingId',[App\Http\Controllers\LoginController::class,'loginUsingId'])->name('login.loginUsingId');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/discovery-setting',[App\Http\Controllers\LoginController::class,'discoverysetting']);
Route::get('/membership',[App\Http\Controllers\LoginController::class,'membership']);
Route::get('/onboarding',[App\Http\Controllers\LoginController::class,'onboarding']);


//admin
Route::group(['prefix'=> 'admin' ],function(){
    Route::get('/',[App\Http\Controllers\AdminLoginController::class,'login']);
});