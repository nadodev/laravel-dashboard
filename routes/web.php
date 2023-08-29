<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\Backend\PropertyTypeController;
use App\Http\Controllers\Backend\AmenitiesController;


use Illuminate\Support\Facades\Route;

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

Route::get('/',  [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/user/logout', [UserController::class, 'logout'])->name('profile.user.destroy');
    Route::get('/user/profile', [UserController::class, 'profile'])->name('profile.user');
    Route::post('/user/profile/edit', [UserController::class, 'store'])->name('profile.user.store');
});

require __DIR__.'/auth.php';


Route::middleware(['auth', 'role:agent'])->group(function () {
    Route::get('/agent/dashboard', [AgentController::class, 'Agent'])->name('agent.dashboard');

});

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::controller(DashboardController::class)->group(function(){
        Route::get('/admin/dashboard',  'Dashboard')->name('admin.dashboard');
        Route::get('/admin/usuarios/listar','listarUsuarios')->name('admin.listar-usuarios');
    });

    Route::controller(PropertyTypeController::class)->group(function(){
        Route::get('/admin/all/types', 'allType')->name('all.type');
        Route::get('/admin/add/types', 'addType')->name('add.type');
        Route::post('/admin/add/types', 'storeType')->name('store.type');

        Route::get('/admin/edit/types/{id}', 'editType')->name('edit.type');
        Route::post('/admin/edit/types/{id}', 'updateType')->name('update.type');
        Route::get('/admin/delete/types/{id}', 'deleteType')->name('delete.type');

    });

    Route::controller(AmenitiesController::class)->group(function(){
        Route::get('/admin/all/amenities', 'allAmenities')->name('all.amenities');
        Route::get('/admin/add/amenities', 'indexAmenities')->name('index.amenities');
        Route::post('/admin/add/amenities', 'storeAmenities')->name('store.amenities');

        Route::get('/admin/edit/amenities/{id}', 'editAmenities')->name('edit.amenities');
        Route::post('/admin/edit/amenities/{id}', 'updateAmenities')->name('update.amenities');
        Route::get('/admin/delete/amenities/{id}', 'deleteAmenities')->name('delete.amenities');

    });

});
