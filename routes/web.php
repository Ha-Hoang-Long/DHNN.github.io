<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SinhvienController;
use App\Http\Controllers\ListingController;

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

Route::prefix('admin')->group(function(){
    Route::get('/login',[AdminController::class,'index'])->name('admin.login');
    Route::post('/login',[AdminController::class,'account_verification'])->name('admin.account_verification');
    Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');
    
    Route::middleware(['admin'])->group(function() {
        Route::get('/dashboard',[AdminController::class,'show_dashboard'])->name('admin.show_dashboard');
        Route::get('/add-acount-user',[AdminController::class,'add_acount_user_form'])->name('admin.add_acount_user');
        Route::get('/import-sinhvien',[SinhvienController::class,'importForm'])->name('Sinhvien.import_sinhvien');
        Route::post('/import-sv',[SinhvienController::class,'importSv'])->name('Sinhvien.import_Sv');
        Route::get('/listing/{model}',[ListingController::class,'index'])->name('listing.index');
    });
    // Route::post('/Admin-dashboard',[AdminController::class,'dashboard']);
});
