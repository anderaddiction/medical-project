<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Roles\RoleController;
use App\Models\Roles\Role;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Roles
// Roles Trashed
Route::get('roles/trashed', [RoleController::class, 'trashed'])
    ->name('role.trashed');

// Roles Restore
Route::post('/roles/restore/{id}', [RoleController::class, 'restore'])->name('role.restore');

// Role Resource
Route::resource('roles', RoleController::class)
    ->parameters(['role' => 'role'])
    ->names('role');

//Language Translation
Route::get('index/{locale}', [HomeController::class, 'lang']);

Route::get('/', [HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [HomeController::class, 'index'])->name('index');
Route::get('dashboard-crypto', function () {
    return view('dashboard-crypto');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
