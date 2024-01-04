<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/custom-register',[RegisterController::class, 'index'])->name('user.customRegister');
Route::post('/custom-register',[RegisterController::class, 'userRegister'])->name('user.userRegister');

Route::get('/otp-validate',[RegisterController::class,'otpValidate'])->name('user.email.validate');
Route::post('/otp-verification',[RegisterController::class,'verifyOtp'])->name('user.email.verify');
// Route::get('/resend-otp',[RegisterController::class,'resendOtp'])->name('resendOtp');

Route::get('/custom-login',[RegisterController::class, 'login'])->name('user.customLogin');
Route::post('/custom-login',[RegisterController::class, 'userLogin'])->name('user.userLogin');


Route::group([ 'middleware' => ['auth','verified'],'prefix'=>'admin'], function(){
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('admin.dashboard');

        //Start profile route
    Route::get('/profile',[ProfileController::class, 'index'])->name('admin.profile');
    Route::post('/profile',[ProfileController::class, 'updateProfile'])->name('admin.updateProfile');
    Route::get('/change-password',[ProfileController::class, 'changePassword'])->name('admin.changePassword');
    Route::post('/change-password',[ProfileController::class, 'updatePassword'])->name('admin.updatePassword');
    //End profile route


        });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
