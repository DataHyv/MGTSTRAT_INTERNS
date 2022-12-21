<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\LockScreen;
use App\Http\Controllers\CustomizedEngagementController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ConsultantFeesController;


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
    Route::get('/dashboard-report/sales-report', [HomeController::class, 'SalesReport'])->name('dashboard-report/sales-report');
    Route::get('/dashboard-report/people-and-culture', [HomeController::class, 'SalesReport'])->name('dashboard-report/people-and-culture');
    Route::get('/dashboard-report/cash-position-report', [HomeController::class, 'SalesReport'])->name('dashboard-report/cash-position-report');
    Route::get('/dashboard-report/consultant-revenue-report', [HomeController::class, 'SalesReport'])->name('dashboard-report/consultant-revenue-report');
    Route::get('/dashboard-report/peer-dope-report', [HomeController::class, 'SalesReport'])->name('dashboard-report/peer-dope-report');

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
    Route::get('maintenance/user-management', [UserManagementController::class, 'index'])->middleware('auth')->name('maintenance/user-management');
    Route::get('user/add/new', [UserManagementController::class, 'addNewUser'])->middleware('auth')->name('user/add/new');
    Route::post('user/add/save', [UserManagementController::class, 'addNewUserSave'])->name('user/add/save');
    Route::get('maintenance/user-management/detail/{id}', [UserManagementController::class, 'viewDetail'])->middleware('auth');
    Route::post('update', [UserManagementController::class, 'update'])->name('update');
    Route::get('delete_user/{id}', [UserManagementController::class, 'delete'])->middleware('auth');
    // Route::get('maintenance/user-activity-log', [UserManagementController::class, 'activityLog'])->middleware('auth')->name('maintenance/user-activity-log');
    Route::get('maintenance/all-user-activity', [UserManagementController::class, 'activityLogInLogOut'])->middleware('auth')->name('maintenance/all-user-activity');

    Route::get('change/password', [UserManagementController::class, 'changePasswordView'])->middleware('auth')->name('change/password');
    Route::post('change/password/db', [UserManagementController::class, 'changePasswordDB'])->name('change/password/db');

// ----------------------------- Customized engagement form ------------------------------//
    Route::controller(CustomizedEngagementController::class)->group(function () {
    Route::get('form/customizedEngagement/new', [CustomizedEngagementController::class, 'index'])->middleware('auth')->name('form/customizedEngagement/new');
    Route::get('form/customizedEngagement/detail', [CustomizedEngagementController::class, 'viewRecord'])->middleware('auth')->name('form/customizedEngagement/detail');
    Route::get('form/customizedEngagement/detail/{cstmzd_eng_form_id}{id}', [CustomizedEngagementController::class, 'updateRecord'])->middleware('auth')->name('form/customizedEngagement/detail/{cstmzd_eng_form_id}');

    Route::post('save', [CustomizedEngagementController::class, 'store'])->name('save');
    Route::put('update', [CustomizedEngagementController::class, 'ceUpdateRecord','ceAddDeleteRecord'])->middleware('auth')->name('update');
    Route::post('deleteRecord', [CustomizedEngagementController::class, 'viewDelete'])->middleware('auth')->name('deleteRecord');
    Route::post('delete',[CustomizedEngagementController::class, 'deleteRow'])->name('delete');

    //-------SUB FEE-------//
    // Route::get('form/customizedEngagement/sub-fee', [CustomizedEngagementController::class, 'formSubFee'])->middleware('auth')->name('form/customizedEngagement/sub-fee');
    Route::get('form/customizedEngagement/sub-fee', [CustomizedEngagementController::class, 'addBatch'])->middleware('auth')->name('form/customizedEngagement/sub-fee');
    Route::get('form/customizedEngagement/sub-fee/{id}', [CustomizedEngagementController::class, 'editSubForm'])->middleware('auth')->name('form/customizedEngagement/sub-fee/{id}');

    Route::put('updateBatch', [CustomizedEngagementController::class, 'saveBatchRecord','ceAddDeleteRecord'])->middleware('auth')->name('updateBatch');
    });
// ----------------------------- F2F engagement form ------------------------------//
    Route::get('form/f2f_engagement/index', [App\Http\Controllers\F2fEngagementController::class, 'index'])->middleware('auth')->name('form/f2f_engagement/index');
    Route::get('form/f2f_engagement/new', [App\Http\Controllers\F2fEngagementController::class, 'newRecord'])->middleware('auth')->name('form/f2f_engagement/new');
    Route::post('form/f2f_engagement/save', [App\Http\Controllers\F2fEngagementController::class, 'store'])->name('form/f2f_engagement/save');

// ----------------------------- MGTSTRAT U WORKSHOPS ------------------------------//
    Route::get('form/mgtstratu_workshops/index', [App\Http\Controllers\MgtstratUController::class, 'index'])->middleware('auth')->name('form/mgtstratu_workshops/index');
    Route::get('form/mgtstratu_workshops/new', [App\Http\Controllers\MgtstratUController::class, 'newRecord'])->middleware('auth')->name('form/mgtstratu_workshops/new');
    Route::post('form/mgtstratu_workshops/save', [App\Http\Controllers\MgtstratUController::class, 'store'])->name('form/mgtstratu_workshops/save');

// ----------------------------- MGTSTRAT WEBINARS WORKSHOPS ------------------------------//
    Route::resource('form/webinars', 'App\Http\Controllers\MgtstratWebinarsController');

// ----------------------------- COACHING -----------------------//
    Route::resource('form/coaching', 'App\Http\Controllers\CoachingController');

// ----------------------------- Client Management -----------------------//
    Route::get('clients', [App\Http\Controllers\ClientsController::class, 'index'])->middleware('auth')->name('clients');
    Route::post('client/add/save', [App\Http\Controllers\ClientsController::class, 'addNewClientSave'])->name('client/add/save');
    Route::get('deleteClients/{id}', [App\Http\Controllers\ClientsController::class, 'deleteClient'])->middleware('auth');
    Route::get('clients/view/detail/{id}', [App\Http\Controllers\ClientsController::class, 'viewDetailClient'])->middleware('auth');
    Route::post('update', [App\Http\Controllers\ClientsController::class, 'updateClient'])->name('update');

// ----------------------------- Client Management -----------------------//
Route::resource('consultant-fees', 'App\Http\Controllers\ConsultantFeesController');
