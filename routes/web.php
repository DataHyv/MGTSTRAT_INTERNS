<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\LockScreen;
use App\Http\Controllers\CustomizedEngagementController;
use App\Http\Controllers\ClientsController;


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
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
    Route::get('home',function()
    {
        return view('home');
    });
});

Auth::routes();

// ----------------------------- home dashboard ------------------------------//
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/sales-report', [HomeController::class, 'SalesReport'])->name('sales-report');
Route::get('/people-and-culture', [HomeController::class, 'SalesReport'])->name('people-and-culture');
Route::get('/cash-position-report', [HomeController::class, 'SalesReport'])->name('cash-position-report');
Route::get('/consultant-revenue-report', [HomeController::class, 'SalesReport'])->name('consultant-revenue-report');
Route::get('/peer-dope-report', [HomeController::class, 'SalesReport'])->name('peer-dope-report');

// -----------------------------login----------------------------------------//
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// ----------------------------- lock screen --------------------------------//
Route::get('lock_screen', [LockScreen::class, 'lockScreen'])->middleware('auth')->name('lock_screen');
Route::post('unlock', [LockScreen::class, 'unlock'])->name('unlock');

// ------------------------------ register ---------------------------------//
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'storeUser'])->name('register');

// ----------------------------- forget password ----------------------------//
Route::get('forget-password', [ForgotPasswordController::class, 'getEmail'])->name('forget-password');
Route::post('forget-password', [ForgotPasswordController::class, 'postEmail'])->name('forget-password');

// ----------------------------- reset password -----------------------------//
Route::get('reset-password/{token}', [ResetPasswordController::class, 'getPassword']);
Route::post('reset-password', [ResetPasswordController::class, 'updatePassword']);

// ----------------------------- user profile ------------------------------//
Route::get('profile_user', [UserManagementController::class, 'profile'])->name('profile_user');
Route::post('profile_user/store', [UserManagementController::class, 'profileStore'])->name('profile_user/store');

// ----------------------------- user userManagement -----------------------//
Route::get('userManagement', [UserManagementController::class, 'index'])->middleware('auth')->name('userManagement');
Route::get('user/add/new', [UserManagementController::class, 'addNewUser'])->middleware('auth')->name('user/add/new');
Route::post('user/add/save', [UserManagementController::class, 'addNewUserSave'])->name('user/add/save');
Route::get('view/detail/{id}', [UserManagementController::class, 'viewDetail'])->middleware('auth');
Route::post('update', [UserManagementController::class, 'update'])->name('update');
Route::get('delete_user/{id}', [UserManagementController::class, 'delete'])->middleware('auth');
Route::get('activity/log', [UserManagementController::class, 'activityLog'])->middleware('auth')->name('activity/log');
Route::get('activity/login/logout', [UserManagementController::class, 'activityLogInLogOut'])->middleware('auth')->name('activity/login/logout');

Route::get('change/password', [UserManagementController::class, 'changePasswordView'])->middleware('auth')->name('change/password');
Route::post('change/password/db', [UserManagementController::class, 'changePasswordDB'])->name('change/password/db');

// ----------------------------- Customized engagement form ------------------------------//
Route::controller(CustomizedEngagementController::class)->group(function () {
Route::get('form/customizedEngagement/new', [CustomizedEngagementController::class, 'index'])->middleware('auth')->name('form/customizedEngagement/new');
Route::get('form/customizedEngagement/detail', [CustomizedEngagementController::class, 'viewRecord'])->middleware('auth')->name('form/customizedEngagement/detail');
Route::get('form/customizedEngagement/detail/{cstmzd_eng_form_id}', [CustomizedEngagementController::class, 'updateRecord'])->middleware('auth');
// Route::get('delete/{id}', [CustomizedEngagementController::class, 'viewDelete'])->middleware('auth');
// Route::get("new",[CustomizedEngagementController::class,'index']);

Route::post('save', [CustomizedEngagementController::class, 'store'])->name('save');
Route::put('update', [CustomizedEngagementController::class, 'ceUpdateRecord','ceAddDeleteRecord'])->middleware('auth')->name('update');
Route::post('deleteRecord', [CustomizedEngagementController::class, 'viewDelete'])->middleware('auth')->name('deleteRecord');
Route::post('delete',[CustomizedEngagementController::class, 'deleteRow'])->name('delete');
});
// ----------------------------- F2F engagement form ------------------------------//
Route::get('form/f2f_engagement/new', [App\Http\Controllers\F2fEngagementController::class, 'index'])->middleware('auth')->name('form/f2f_engagement/new');
Route::post('form/f2f_engagement/save', [App\Http\Controllers\F2fEngagementController::class, 'store'])->name('form/f2f_engagement/save');

// ----------------------------- MGTSTRAT U WORKSHOPS ------------------------------//
Route::get('form/mgtstratu_workshops/new', [App\Http\Controllers\MgtstratUController::class, 'index'])->middleware('auth')->name('form/mgtstratu_workshops/new');
Route::post('form/mgtstratu_workshops/save', [App\Http\Controllers\MgtstratUController::class, 'store'])->name('form/mgtstratu_workshops/save');

// ----------------------------- Client Management -----------------------//
Route::get('form/clients/new', [App\Http\Controllers\ClientsController::class, 'index'])->middleware('auth')->name('form/clients/new');
Route::post('client/add/save', [App\Http\Controllers\ClientsController::class, 'addNewClientSave'])->name('client/add/save');
Route::get('deleteClients/{id}', [App\Http\Controllers\ClientsController::class, 'deleteClient'])->middleware('auth');
Route::get('form/view/detail/{id}', [App\Http\Controllers\ClientsController::class, 'viewDetailClient'])->middleware('auth');
Route::post('update', [App\Http\Controllers\ClientsController::class, 'updateClient'])->name('update');

// ----------------------------- WEBINAR form ------------------------------//
// Route::get('form/budget/new', [App\Http\Controllers\WebinarformController::class, 'index'])->middleware('auth')->name('form/budget/new');
// Route::post('form/save', [App\Http\Controllers\WebinarformController::class, 'saveRecord'])->name('form/save');
// Route::get('form/view/detail', [App\Http\Controllers\WebinarformController::class, 'viewRecord'])->middleware('auth')->name('form/view/detail');
// Route::get('form/view/detail/{id}', [App\Http\Controllers\WebinarformController::class, 'viewDetail'])->middleware('auth');
// Route::post('form/view/update', [App\Http\Controllers\WebinarformController::class, 'viewUpdate'])->name('form/view/update');
// Route::get('delete/{id}', [App\Http\Controllers\WebinarformController::class, 'viewDelete'])->middleware('auth');
