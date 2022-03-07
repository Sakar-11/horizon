<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

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
//     return view('frontend.index');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::post('/contact', [App\Http\Controllers\Frontend\FrontendController::class, 'sendmail']);

Route::get('/success', [App\Http\Controllers\Frontend\FrontendController::class, 'success']);
Route::get('/contact', [App\Http\Controllers\Frontend\FrontendController::class, 'contact']);
Route::get('/about', [App\Http\Controllers\Frontend\FrontendController::class, 'about']);
Route::get('/gallery', [App\Http\Controllers\Frontend\FrontendController::class, 'gallery']);
Route::get('/courses', [App\Http\Controllers\Frontend\FrontendController::class, 'courses']);
Route::get('/course/{slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'singleCourse']);
Route::get('structural-design-consulting', [App\Http\Controllers\Frontend\FrontendController::class, 'structural']);
Route::get('safety-consulting-and-auditing', [App\Http\Controllers\Frontend\FrontendController::class, 'safety']);

Route::get('teachers', [App\Http\Controllers\Frontend\FrontendController::class, 'teachers']);
Route::get('teacher/{slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'singleteacher']);

Route::get('/bim-services', [App\Http\Controllers\Frontend\FrontendController::class, 'bim']);
Route::get('/bim-services/{slug1}', [App\Http\Controllers\Frontend\FrontendController::class, 'subbim']);
Route::get('/bim-services/{slug1}/{slug2}', [App\Http\Controllers\Frontend\FrontendController::class, 'singlebim']);

Route::get('/career', [App\Http\Controllers\Frontend\FrontendController::class, 'career']);

// Route::get('/category', [App\Http\Controllers\Frontend\FrontendController::class, 'category']);
// Route::get('/instructor', [App\Http\Controllers\Frontend\FrontendController::class, 'instructor']);
// Route::get('/instructor/{id}', [App\Http\Controllers\Frontend\FrontendController::class, 'instructorSingle']);

// Route::get('/cart', [App\Http\Controllers\Frontend\CartController::class, 'index']);
Route::middleware(['auth'])->group(function () {
    // Route::post('/home', [App\Http\Controllers\Frontend\FrontendController::class, 'myAccount']);

    Route::post('/approval/add', [App\Http\Controllers\Frontend\ApprovalController::class, 'sendApproval']);
    Route::put('/approval/update/{id}', 'Admin\ApprovalController@update');
});
Route::group(['middleware' => ['auth', 'isAdmin']], function () {

    Route::get('/dashboard', 'Admin\FrontendController@index');
    Route::get('/admin/approval', 'Admin\ApprovalController@index');


    // Route::get('/categories', 'Admin\CategoryController@index');
    // Route::get('/add-category', 'Admin\CategoryController@add');
    // Route::post('/insert-category', 'Admin\CategoryController@insert');
    // Route::get('/edit-category/{id}', 'Admin\CategoryController@edit');
    // Route::put('/update-category/{id}', 'Admin\CategoryController@update');

    // Route::get('/instructors', 'Admin\InstructorController@index');
    // Route::get('/add-instructor', 'Admin\InstructorController@add');
    // Route::post('/insert-instructor', 'Admin\InstructorController@insert');
});
