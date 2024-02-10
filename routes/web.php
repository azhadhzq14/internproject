<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\ContributorController;
use App\Http\Controllers\ModuleLearningController;
use App\Http\Controllers\LogoutController;


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

// 127.0.0.1:8000 / ==> view welcome
Route::get('/', function () {
  return view('auth.login');
})->name('home');



//login
Route::get('/login', [AuthController::class, 'login'])->name('login'); //read the url to access the login page
//get into dashboard from login form when user input user_id and password
Route::post('/login-admin', [AuthController::class, 'loginAdmin'])->name('login-admin');

//register
Route::get('/registration', [AuthController::class, 'registration'])->name('registration'); //read the url to access the registration page
//get into db from register form 
Route::post('/register-admin', [AuthController::class, 'registerAdmin'])->name('register-admin'); //post - store new data send the from form to create something on the server

Route::get('verify/{token}', [AuthController::class, 'verify']);

//link for logout from dashboard mms.Testpaper.com.my
Route::get('/logout', [LogoutController::class, 'logout']);




//route for dashboard mms.Testpaper.com.my
Route::prefix('/panel')->middleware(['authlogin'])->name('admin.')->group(function () {

  //panel controller
  Route::get('/dashboardmms', [PanelController::class, 'dashboardmms'])->name("dashboardmms");
});



Route::prefix('/panel')->middleware(['authlogin'])->name('admin.')->group(function () {
  Route::get('/modulelearning', [ModuleLearningController::class, 'modulelearning'])->name("modulelearning");
  Route::any('/prasekolah', [ModuleLearningController::class, 'prasekolah'])->name("prasekolah");
  Route::any('/sekren', [ModuleLearningController::class, 'sekren'])->name("sekren");
  Route::any('/sekmen', [ModuleLearningController::class, 'sekmen'])->name("sekmen");
});

Route::prefix('/panel')->middleware(['authlogin'])->name('admin.')->group(function () {

  Route::get('/contributor', [ContributorController::class, 'contributor'])->name("contributor");
  Route::get('/listcontributor', [ContributorController::class, 'listcontributor'])->name('listcontributor');
  Route::get('/addcontributor', [ContributorController::class, 'addcontributor'])->name("addcontributor");
  Route::post('/addcontributor', [ContributorController::class, 'registercontributor'])->name('addcontributor');
  Route::get('/detailcontributor/{id}', [ContributorController::class, 'detailcontributor'])->name("detailcontributor");
  Route::delete('/listcontributor/{id}', [ContributorController::class, 'destroycontributor'])->name('destroycontributor');
});





Route::group(['middleware' => ['auth']], function () {
  /**
   * Verification Routes
   */
  Route::get('/email/verify', 'VerificationController@show')->name('verification.notice');
  Route::get('/email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify')->middleware(['signed']);
  Route::post('/email/resend', 'VerificationController@resend')->name('verification.resend');
});
