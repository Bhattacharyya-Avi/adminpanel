<?php

use App\Http\Controllers\Backend\DashboardController;
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
*/

Route::get('/', function () {
    return view('backend/pages/dashboard/dashboard');
});

Route::controller(DashboardController::class,)->prefix('dashboard')->group(function(){
    Route::get('/','dashboard')->name('admin.dashboard');
    Route::get('/table','table')->name('admin.table');
});
