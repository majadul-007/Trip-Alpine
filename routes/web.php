<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UsersLoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BookingController;

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
// Route::get('/homepage', function () {
//     return view('homepage');
// });
Route::get('/about', function () {

    return view('about');
});

Route::get('/about', [PagesController::class, 'aboutPage'])->name('about');
Route::get('/services', [PagesController::class, 'servicePage'])->name('services');
Route::get('/contactus', [PagesController::class, 'contactPage'])->name('contactus');

Route::get('/usershomepage', [UsersController::class, 'usersHomepage'])->name('usershomepage');
Route::get('/userregistration', [UsersController::class, 'userRegistration'])->name('userregistration');
// Route::get('/usercreate',[UsersController::class,"usercreate"])->name("usercreate");
Route::post('/userregistration', [UsersController::class, "userSubmitted"])->name("userregistrationsubmit");

Route::get('/userlogin', [UsersLoginController::class, "userLogin"])->name("userlogin");
Route::post('/userlogin', [UsersLoginController::class, "loginSubmit"])->name("userloginsubmit");


Route::get('/logout', [UsersLoginController::class, 'userLogout'])->name('logout');
Route::get('/userpanel', [UsersController::class, 'userPanel'])->name('userpanel');

Route::get('/myprofileinfo', [UsersController::class, 'userList'])->name('myprofileinfo');

Route::get('/myprofileedit/{id}', [UsersController::class, 'userProfileEdit'])->name('myprofileedit');

Route::post('/myprofileedit', [UsersController::class, 'profileEditSubmitted'])->name('myprofileedit');
// Route::get('/myprofileedit/{id}', [UsersController::class, 'userProfileEdit'])->name('myprofileedit');

Route::get('/myprofiledelete/{id}', [UsersController::class, 'userProfileDelete'])->name('myprofiledelte');


//Booking



Route::get('/book', [BookingController::class, 'bookingPackage'])->name('book');
Route::post('/book', [BookingController::class, 'bookingSubmitted'])->name('booknow');
Route::get('/myporders', [BookingController::class, 'ordersList'])->name('myorders');

Route::get('/myorderupdate/{id}', [UsersController::class, 'OrderUpdate'])->name('myorderupdate');

Route::post('/myorderupdate', [UsersController::class, 'orderSubmitted'])->name('myorderupdate');

Route::get('/myordercancel/{id}', [UsersController::class, 'orderCancel'])->name('myordercancel');









