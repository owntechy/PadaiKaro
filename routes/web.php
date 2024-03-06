<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DestroyController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ViewController;
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
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/AdminPanel/dashboard', function () {
        return view('AdminPanel.dashboard');
    })->name('dashboard');
    //View Routes
    Route::get('/viewmaster', [ViewController::class, 'viewmaster'])->name('viewmaster');
    Route::get('/viewsubmaster', [ViewController::class, 'viewsubmaster'])->name('viewsubmaster');
    Route::get('/viewaddcoursepage', [ViewController::class, 'viewaddcoursepage'])->name('viewaddcoursepage');
    Route::get('/viewaddcollege', [ViewController::class, 'viewaddcollege'])->name('viewaddcollege');
    Route::get('/viewallcourses', [ViewController::class, 'viewallcourses'])->name('viewallcourses');

    //Store Routes
    Route::post('/createmaster', [MasterController::class, 'createmaster'])->name('createmaster');
    Route::post('/createsubmaster', [MasterController::class, 'createsubmaster'])->name('createsubmaster');
    Route::post('/createcompanyregistration', [StoreController::class, 'createcompanyregistration'])->name('createcompanyregistration');
    Route::post('/createcourseregistration', [StoreController::class, 'createcourseregistration'])->name('createcourseregistration');
    Route::post('/createaddcollege', [StoreController::class, 'createaddcollege'])->name('createaddcollege');

    //Delete Routes
    Route::get('/deletemastercat/{id}/{type}', [MasterController::class, 'deletemastercat'])->name('deletemastercat');
    Route::get('/deletecourse/{id}', [DestroyController::class, 'deletecourse'])->name('deletecourse');

    //AJAX ROUTES
    Route::get('/getmastercatajax/{selectedCat}', [MasterController::class, 'getmastercatajax'])->name('getmastercatajax');
    Route::post('/updatestatus', [StoreController::class, 'updatestatus'])->name('updatestatus');

    //Edit Routes
    Route::get('/editcourse/{id}', [EditController::class, 'editcourse'])->name('editcourse');
    Route::post('/updatecourse', [EditController::class, 'updatecourse'])->name('updatecourse');
});
