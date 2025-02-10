<?php

use App\Http\Controllers\Documents\DocumentTypeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Roles\RoleController;
use App\Http\Controllers\Documents\HistoryController;
use App\Http\Controllers\Education\EducationController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Document Types
// Document Types Trashed
Route::get('document_type/trashed', [DocumentTypeController::class, 'trashed'])
    ->name('document.trashed');

// Document Types Restore
Route::post('/document_type/restore/{id}', [DocumentTypeController::class, 'restore'])->name('document.restore');

// Document Types Resource
Route::resource('document_type', DocumentTypeController::class)
    ->parameters(['document' => 'document'])
    ->names('document');

// Education
// Education Trashed
Route::get('education/trashed', [EducationController::class, 'trashed'])
    ->name('education.trashed');

// Education Restore
Route::post('/education/restore/{id}', [EducationController::class, 'restore'])->name('education.restore');

// Education Resource
Route::resource('education', EducationController::class)
    ->parameters(['education' => 'education'])
    ->names('education');


// Medical Histories
// Medical Histories Trashed
Route::get('medical_histories/trashed', [HistoryController::class, 'trashed'])
    ->name('history.trashed');

// Medical Histories Restore
Route::post('/medical_histories/restore/{id}', [HistoryController::class, 'restore'])->name('history.restore');

// Medical Histories Resource
Route::resource('medical_histories', HistoryController::class)
    ->parameters(['history' => 'history'])
    ->names('history');

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
