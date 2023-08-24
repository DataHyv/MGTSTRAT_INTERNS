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
use App\Http\Controllers\MgtstratUController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\F2fEngagementController;
use App\Http\Controllers\MGTStratUWorkshop;
use App\Http\Controllers\MGTStratUWebinar;
use App\Http\Controllers\RedirectPages;
use App\Http\Controllers\CoachingController;


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

// Route::get('/', function () {
//     return view('auth.login');
// });
Route::get('/', [LoginController::class, 'login'])->name('/');
Route::post('/', [LoginController::class, '/']);

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
    // Route::get('home',function()
    // {
    //     return view('home');
    // });
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
    Route::post('maintenance/user-management/detail/update', [UserManagementController::class, 'update'])->name('maintenance/user-management/detail/update');
    Route::get('delete_user/{id}', [UserManagementController::class, 'delete'])->middleware('auth');
    // Route::get('maintenance/user-activity-log', [UserManagementController::class, 'activityLog'])->middleware('auth')->name('maintenance/user-activity-log');
    Route::get('maintenance/all-user-activity', [UserManagementController::class, 'activityLogInLogOut'])->middleware('auth')->name('maintenance/all-user-activity');

    Route::get('change/password', [UserManagementController::class, 'changePasswordView'])->middleware('auth')->name('change/password');
    Route::post('change/password/db', [UserManagementController::class, 'changePasswordDB'])->name('change/password/db');

// ----------------------------- Customized engagement form ------------------------------//
    Route::controller(CustomizedEngagementController::class)->group(function () {
    Route::get('form/customizedEngagement/new', [CustomizedEngagementController::class, 'index'])->middleware('auth')->name('form/customizedEngagement/new');
    Route::get('form/customizedEngagement/detail', [CustomizedEngagementController::class, 'viewRecord'])->middleware('auth')->name('form/customizedEngagement/detail');
    Route::get('form/customizedEngagement/detail/{cstmzd_eng_form_id}/{id}', [CustomizedEngagementController::class, 'updateRecord'])->middleware('auth')->name('form/customizedEngagement/detail/{cstmzd_eng_form_id}');

    Route::post('save', [CustomizedEngagementController::class, 'store'])->name('save');
    Route::put('update', [CustomizedEngagementController::class, 'ceUpdateRecord','ceAddDeleteRecord'])->middleware('auth')->name('update');
    // Route::post('deleteRecord', [CustomizedEngagementController::class, 'viewDelete'])->middleware('auth')->name('deleteRecord');
    Route::post('/viewDelete', [CustomizedEngagementController::class, 'viewDelete'])->middleware('auth')->name('customized_deleteRecord');
    Route::post('delete',[CustomizedEngagementController::class, 'deleteRow'])->name('delete');

    Route::put('/ce_UpdateRecord', [CustomizedEngagementController::class, 'ce_UpdateRecord'])->middleware('auth')->name('update_custom_eng');
    Route::get('/modify-sessions/{id}', [CustomizedEngagementController::class, 'modify_all_session'])->name('modify-sessions/{id}');
    Route::post('/save-modify-session', [CustomizedEngagementController::class, 'save_modified_sessions'])->name('savebatchsessions');
    // Route::get('/save-modify-session', [CustomizedEngagementController::class, 'save_modified_sessions'])->name('savebatchsessions');

    //-------SUB FEE-------//
    Route::get('form/customizedEngagement/sub-fee', [CustomizedEngagementController::class, 'formSubFee'])->middleware('auth')->name('form/customizedEngagement/sub-fee');
    Route::get('form/customizedEngagement/sub-fee', [CustomizedEngagementController::class, 'addBatch'])->middleware('auth')->name('form/customizedEngagement/sub-fee');
    Route::get('form/customizedEngagement/sub-fee/{id}', [CustomizedEngagementController::class, 'editSubForm'])->middleware('auth')->name('form/customizedEngagement/sub-fee/{id}');

    Route::put('updateBatch', [CustomizedEngagementController::class, 'saveBatchRecord','ceAddDeleteRecord'])->middleware('auth')->name('updateBatch');
    });
// ----------------------------- F2F engagement form ------------------------------//
    Route::get('form/f2f_engagement/index', [F2fEngagementController::class, 'index'])->middleware('auth')->name('form/f2f_engagement/index');
    Route::get('form/f2f_engagement/new', [F2fEngagementController::class, 'newRecord'])->middleware('auth')->name('form/f2f_engagement/new');

    Route::post('ftf_record_save', [F2fEngagementController::class, 'insert_ftf_engagement_record'])->name('ftf_record_save');
    Route::get('ftf_record_save', [F2fEngagementController::class, 'insert_ftf_engagement_record'])->name('ftf_record_save');

    Route::post('ftf_record_delete', [F2fEngagementController::class, 'delete_ftf_engagement_record'])->middleware('auth')->name('ftf_deleteRecord');
    Route::get('update_ftf_eng/{id}', [F2fEngagementController::class, 'update_ftf_engagement_record'])->middleware('auth')->name('update_ftf_eng');

    Route::put('/ce_ftf_UpdateRecord', [F2fEngagementController::class, 'save_update_ftf_engagement_record'])->middleware('auth')->name('save_update_ftf_record');
    Route::get('/ce_ftf_UpdateRecord', [F2fEngagementController::class, 'save_update_ftf_engagement_record'])->middleware('auth')->name('ce_ftf_UpdateRecord');

    Route::get('form/ftfEngagement/sub-form/{id}', [F2fEngagementController::class, 'ftf_editSubForm'])->middleware('auth')->name('form/ftfEngagement/sub-form/{id}');
    Route::put('form/ftfEngagement/sub-form/save_editSubForm', [F2fEngagementController::class, 'ftf_save_editSubForm'])->middleware('auth')->name('form/ftfEngagement/sub-form/save_editSubForm');

    Route::get('form/ftfEngagement/sub-form/modify-sessions/{id}', [F2fEngagementController::class, 'modify_all_session'])->name('form/ftfEngagement/sub-form/modify-sessions/{id}');
    Route::post('form/ftfEngagement/sub-form/save-modify-session', [F2fEngagementController::class, 'save_modified_sessions'])->name('form/ftfEngagement/sub-form/savebatchsessions');

// ----------------------------- MGTSTRAT U WORKSHOPS ------------------------------//
    Route::get('form/mgtstratu_workshops/index', [MGTStratUWorkshop::class, 'index'])->middleware('auth')->name('form/mgtstratu_workshops/index');
    Route::get('form/mgtstratu_workshops/newrecord', [MGTStratUWorkshop::class, 'newRecord'])->middleware('auth')->name('form/mgtstratu_workshops/newrecord');
    Route::post('workshop_record_save', [MGTStratUWorkshop::class, 'insert_workshop_engagement_record'])->middleware('auth')->name('workshop_record_save');
    Route::post('workshop_record_delete', [MGTStratUWorkshop::class, 'delete_workshop_engagement_record'])->middleware('auth')->name('workshop_deleteRecord');
    Route::get('update_workshop_eng/{id}', [MGTStratUWorkshop::class, 'update_workshop_engagement_record'])->middleware('auth')->name('update_workshop_eng');
    Route::put('/save_update_workshop_record', [MGTStratUWorkshop::class, 'save_update_workshop_engagement_record'])->middleware('auth')->name('save_update_workshop_record');
    Route::get('form/workshopEngagement/sub-form/{id}', [MGTStratUWorkshop::class, 'workshop_editSubForm'])->middleware('auth')->name('form/workshopEngagement/sub-form/{id}');
    Route::put('form/workshopEngagement/sub-form/save_editSubForm', [MGTStratUWorkshop::class, 'workshop_save_editSubForm'])->middleware('auth')->name('form/workshopEngagement/sub-form/save_editSubForm');
    Route::get('form/workshopEngagement/sub-form/modify-sessions/{id}', [MGTStratUWorkshop::class, 'modify_all_session'])->name('form/workshopEngagement/sub-form/modify-sessions/{id}');
    Route::post('form/workshopEngagement/sub-form/save-modify-session', [MGTStratUWorkshop::class, 'save_modified_sessions'])->name('form/workshopEngagement/sub-form/savebatchsessions');
    Route::get('form/workshopEngagement/get_cluster_intelligence', [MGTStratUWorkshop::class, 'get_cluster_intelligence'])->name('form/workshopEngagement/get_cluster_intelligence');
// ----------------------------- MGTSTRAT WEBINARS WORKSHOPS ------------------------------//
    Route::get('form/webinars', [MGTStratUWebinar::class, 'index'])->middleware('auth')->name('form/webinars');
    Route::get('form/mgtstratu_webinar/newrecord', [MGTStratUWebinar::class, 'newRecord'])->middleware('auth')->name('form/mgtstratu_webinar/newrecord');
    Route::post('webinar_record_save', [MGTStratUWebinar::class, 'insert_webinar_engagement_record'])->middleware('auth')->name('webinar_record_save');
    Route::post('webinar_record_delete', [MGTStratUWebinar::class, 'delete_webinar_engagement_record'])->middleware('auth')->name('webinar_deleteRecord');
    Route::get('update_webinar_eng/{id}', [MGTStratUWebinar::class, 'update_webinar_engagement_record'])->middleware('auth')->name('update_webinar_eng');
    Route::put('/save_update_webinar_record', [MGTStratUWebinar::class, 'save_update_webinar_engagement_record'])->middleware('auth')->name('save_update_webinar_record');
    Route::get('form/webinarEngagement/sub-form/{id}', [MGTStratUWebinar::class, 'webinar_editSubForm'])->middleware('auth')->name('form/webinarEngagement/sub-form/{id}');
    Route::put('form/webinarEngagement/sub-form/save_editSubForm', [MGTStratUWebinar::class, 'webinar_save_editSubForm'])->middleware('auth')->name('form/webinarEngagement/sub-form/save_editSubForm');
    Route::get('form/webinarEngagement/sub-form/modify-sessions/{id}', [MGTStratUWebinar::class, 'modify_all_session'])->name('form/webinarEngagement/sub-form/modify-sessions/{id}');
    Route::post('form/webinarEngagement/sub-form/save-modify-session', [MGTStratUWebinar::class, 'save_modified_sessions'])->name('form/webinarEngagement/sub-form/savebatchsessions');
    // ----------------------------- COACHING -----------------------//
    // Route::resource('form/coaching', 'App\Http\Controllers\CoachingController');
    Route::get('form/coaching', [CoachingController::class, 'index'])->middleware('auth')->name('form/coaching');
    Route::get('form/coaching/newrecord', [CoachingController::class, 'newRecord'])->middleware('auth')->name('form/coaching/newrecord');
    Route::post('coaching_record_save', [CoachingController::class, 'insert_coaching_engagement_record'])->middleware('auth')->name('coaching_record_save');
    Route::get('update_coaching_eng/{id}', [CoachingController::class, 'update_coaching_engagement_record'])->middleware('auth')->name('update_coaching_eng');
    Route::put('/save_update_coaching_record', [CoachingController::class, 'save_update_coaching_engagement_record'])->middleware('auth')->name('save_update_coaching_record');
    Route::post('coaching_record_delete', [CoachingController::class, 'delete_coaching_engagement_record'])->middleware('auth')->name('couching_deleteRecord');
    Route::get('form/coachingEngagement/sub-form/{id}', [CoachingController::class, 'coaching_editSubForm'])->middleware('auth')->name('form/coachingEngagement/sub-form/{id}');
    Route::put('form/coachingEngagement/sub-form/save_editSubForm', [CoachingController::class, 'coaching_save_editSubForm'])->middleware('auth')->name('form/coachingEngagement/sub-form/save_editSubForm');
    Route::get('form/coachingEngagement/sub-form/modify-sessions/{id}', [CoachingController::class, 'modify_all_session'])->name('form/coachingEngagement/sub-form/modify-sessions/{id}');
    Route::post('form/coachingEngagement/sub-form/save-modify-session', [CoachingController::class, 'save_modified_sessions'])->name('form/coachingEngagement/sub-form/savebatchsessions');
// ----------------------------- Client Management -----------------------//
    Route::get('clients', [App\Http\Controllers\ClientsController::class, 'index'])->middleware('auth')->name('clients');
    Route::post('client/add/save', [App\Http\Controllers\ClientsController::class, 'addNewClientSave'])->name('client/add/save');
    Route::get('deleteClients/{id}', [App\Http\Controllers\ClientsController::class, 'deleteClient'])->middleware('auth');
    Route::get('clients/view/detail/{id}', [App\Http\Controllers\ClientsController::class, 'viewDetailClient'])->middleware('auth');
    Route::post('update', [App\Http\Controllers\ClientsController::class, 'updateClient'])->name('update');

// ----------------------------- Client Management -----------------------//
Route::resource('consultant-fees', 'App\Http\Controllers\ConsultantFeesController');
Route::post('form/consultant-fees', [App\Http\Controllers\ConsultantFeesController::class, 'store'])->name('form/consultant-fees');
Route::post('form/consultant-fees/update', [App\Http\Controllers\ConsultantFeesController::class, 'updateConsultantFees'])->name('form/consultant-fees/update');
Route::get('deleteConsultantFees/{id}', [App\Http\Controllers\ConsultantFeesController::class, 'deleteConsultantFees'])->middleware('auth');

// ----------------------------- REDIRECT PAGES -----------------------//
Route::get('forms/no_record', [RedirectPages::class, 'noRecordFound'])->middleware('auth')->name('forms/no_record');