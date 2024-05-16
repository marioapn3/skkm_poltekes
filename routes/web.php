<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('index');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'authenticate')->name('auth.login');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'authRegister')->name('auth.register');
});
Route::get('/logout', [LogoutController::class, 'logout'])->name('auth.logout');
Route::middleware('auth')->put('password', [PasswordController::class, 'update'])->name('password.update');

Route::name('mhs.')->middleware('auth')->prefix('mahasiswa/dashboard')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'mhsDashboard')->name('dashboard');
    });

    Route::controller(DocumentController::class)->name('skkm.')->group(function () {
        // SKKM
        Route::get('skkm', 'index')->name('index');
        Route::get('skkm/search', 'searchIndex')->name('search');
        Route::post('skkm', 'uploadSKKM')->name('upload');
        Route::delete('skkm', 'deleteSKKM')->name('delete');
        Route::get('skkm/edit/{document}', 'editSKKM')->name('edit');
        Route::post('skkm/update', 'updateSKKM')->name('update');
        // Transcript SKKM
        Route::get('transcript', 'transcriptSKKM')->name('transcript');
        Route::get('transcript/search', 'searchTranscriptSKKM')->name('transcript.search');
    });

    Route::controller(StudentController::class)->group(function () {
        Route::get('profile', 'index')->name('profile');
        Route::post('profile', 'updateProfile')->name('profile.update');
    });
});

Route::name('dsn.')->middleware('auth')->prefix('dosen/dashboard')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'dsnDashboard')->name('dashboard');
    });

    Route::controller(DocumentController::class)->name('skkm.')->group(function () {
        Route::get('skkm', 'skkmDosen')->name('index');
        Route::post('skkm/validate', 'validateSKKM')->name('validate');
        Route::post('skkm/reject', 'rejectSKKM')->name('reject');
    });

    Route::controller(LectureController::class)->group(function () {
        Route::get('profile', 'index')->name('profile');
        Route::post('profile', 'updateProfile')->name('profile.update');
    });
});

Route::get('pdf', [PDFController::class, 'downloadPDF'])->name('pdf.download');


Route::name('admin.')->middleware('auth')->prefix('admin/dashboard')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard');
    });
    Route::controller(UserController::class)->prefix('users')->name('users.')->group(function () {
        Route::prefix('mahasiswa')->name('mahasiswa.')->group(function () {
            Route::get('/', 'mahasiswaIndex')->name('index');
            Route::get('search', 'searchMahasiswa')->name('search');
            Route::get('edit/{id}', 'editMahasiswa')->name('edit');
            Route::post('update/{id}', 'updateMahasiswa')->name('update');
        });
        Route::prefix('dosen')->name('dosen.')->group(function () {
            Route::get('/', 'dosenIndex')->name('index');
            Route::get('search', 'searchDosen')->name('search');
            Route::get('edit/{id}', 'editDosen')->name('edit');
            Route::post('update/{id}', 'updateDosen')->name('update');
        });
        Route::put('updatePassword/{id}', 'updatePassword')->name('updatePassword');
        Route::delete('delete', 'delete')->name('delete');
    });

    Route::resource('users', UserController::class);
});
