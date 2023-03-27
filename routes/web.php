<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogController;
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

// user routes
Route::get('/{lang?}', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class, 'about']);
Route::get('/contact-us', [HomeController::class, 'contact']);

//admin routes
Route::get('admin/login', function (){
    return view('admin.auth.login');
}); 
Route::get('admin/register', function (){
    return view('admin.auth.register');
}); 
Route::group(['middleware' => ['auth'],'prefix'=>'admin','as'=>'admin.'], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', function (){
        Auth::logout();
        return redirect('admin/login');
    }); 
    Route::resource('blogs', BlogController::class);
});


// 404 Route Handle
Route::any('{slug}',function(){
    return redirect()->to('/');
});
Route::any('/admin/{slug}',function(){
    return redirect()->to('/admin/dashboard');
});
