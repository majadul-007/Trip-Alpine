<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UsersLoginController;
use App\Http\Controllers\PagesController;

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

Route::get('/usershomepage', [UsersController::class, 'usersHomepage'])->name('userspage');
Route::get('/userregistration', [UsersController::class, 'userRegistration'])->name('userregistration');
// Route::get('/usercreate',[UsersController::class,"usercreate"])->name("usercreate");
Route::post('/userregistration', [UsersController::class, "userSubmitted"])->name("userregistrationsubmit");

Route::get('/userlogin', [UsersLoginController::class, "userLogin"])->name("userlogin");
Route::post('/userlogin', [UsersLoginController::class, "loginSubmit"])->name("userloginsubmit");


Route::get('/logout', [UsersLoginController::class, 'userLogout'])->name('logout');
Route::get('/userpanel', [UsersController::class, 'userPanel'])->name('userpanel');

Route::get('/studentslist', [UsersController::class, 'userList'])->name('studentslist');

Route::get('/myprofile/{id}', [UsersController::class, 'userProfile'])->name('myprofile');

Route::post('/myprofile', [UsersController::class, ' profileEditSubmitted'])->name ('myprofilesubmit');

Route::get('/studentslist', [UsersController::class, 'userList'])->name('studentslist');

// Route::get('/mypanel', [PagesController::class, 'myPanel'])->name('mypanel');





// Route::get('/services', function () {
//     return view('services');
// });

// Route::get('/elements', function () {
//     return view('elements');
// });
