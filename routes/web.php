<?php


use App\Http\Controllers\Documents\DocumentController;
use App\Http\Controllers\Documents\HistoryController;
use App\Http\Controllers\Education\EducationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Medicals\Medical_Specialties\MedicalSpecialtyController;
use App\Http\Controllers\Roles\RoleController;
use App\Http\Controllers\Appointments\AppointmentController;
use App\Http\Controllers\Territories\ContinentController;
use App\Http\Controllers\Territories\CountryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/auth/med_histories/form-wizard', function () {
    return view('auth.med_histories.form-wizard'); // Asegúrate de que el archivo está en resources/views/
});

Route::resource('appointments', AppointmentController::class)
    ->parameters(['appointment' => 'appointment'])
    ->names('appointment');

// Territories
// Continents
Route::resource('territories/continents', ContinentController::class)
    ->parameters(['continent' => 'continent'])
    ->names('continent');

// Countries
Route::resource('territories/countries', CountryController::class)
    ->parameters(['country' => 'country'])
    ->names('country');

// Document Types
// Document Types Trashed
Route::get('documents/trashed', [DocumentController::class, 'trashed'])
    ->name('document.trashed');

// Document Types Restore
Route::post('/documents/restore/{id}', [DocumentController::class, 'restore'])->name('document.restore');

// Document Types Resource
Route::resource('documents', DocumentController::class)
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




Route::prefix('medicals')->group(
    function () {
        // Medical Specialties
        // Medical Specialties Trashed
        Route::get('specialties/trashed', [MedicalSpecialtyController::class, 'trashed'])
            ->name('specialty.trashed');

        // Medical Specialties Restore
        Route::post('specialties/restore/{id}', [MedicalSpecialtyController::class, 'restore'])->name('specialty.restore');

        // Medical Specialties Resource
        Route::resource('specialties', MedicalSpecialtyController::class)
            ->parameters(['specialty' => 'specialty'])
            ->names('specialty');

        // Medical Histories
        // Medical Histories Trashed
        Route::get('histories/trashed', [HistoryController::class, 'trashed'])
            ->name('history.trashed');

        // Medical Histories Restore
        Route::post('/histories/restore/{id}', [HistoryController::class, 'restore'])->name('history.restore');

        // Medical Histories Resource
        Route::resource('histories', HistoryController::class)
            ->parameters(['history' => 'history'])
            ->names('history');
    }
);


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
