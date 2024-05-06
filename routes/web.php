<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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
    return view('auth.login');
});
Route::get('register', function () {
    return view('auth.register');
});

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware();


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::get('/datadosen', function () {
        return view('datadosen', [
            "title" => "Dosen"
        ]);
    });

    Route::get('/course', function () {
        return view('course', [
            "title" => "Course"
        ]);
    });

    Route::get('/datamahasiswa', function () {
        return view('datamahasiswa', [
            "title" => "Mahasiswa"
        ]);
    });



    Route::get('/datadosen', [App\Http\Controllers\DataDosenController::class, 'index']);
    Route::get('/course', [App\Http\Controllers\CourseController::class, 'index']);
    Route::get('/datamahasiswa', [App\Http\Controllers\DataMahasiswaController::class, 'index']);
    //tambah_data_Dosen
    Route::get('/tambahdosen', [App\Http\Controllers\DataDosenController::class, 'create']);
    Route::post('/simpandosen', [App\Http\Controllers\DataDosenController::class, 'store']);
    Route::get('/editdosen/{id}', [App\Http\Controllers\DataDosenController::class, 'edit']);
    Route::put('/updatedosen/{id}', [App\Http\Controllers\DataDosenController::class, 'update']);
    Route::delete('/hapusdosen/{id}', [App\Http\Controllers\DataDosenController::class, 'destroy']);
    //tambah_course
    Route::get('/tambahcourse', [App\Http\Controllers\CourseController::class, 'create']);
    Route::post('/simpancourse', [App\Http\Controllers\CourseController::class, 'store']);
    Route::get('/editcourse/{id}', [App\Http\Controllers\CourseController::class, 'edit']);
    Route::put('/updatecourse/{id}', [App\Http\Controllers\CourseController::class, 'update']);
    Route::delete('/hapuscourse/{id}', [App\Http\Controllers\CourseController::class, 'destroy']);
    //tambah_data_mahasiswa
    Route::get('/tambahmahasiswa', [App\Http\Controllers\DataMahasiswaController::class, 'create']);
    Route::post('/simpanmahasiswa', [App\Http\Controllers\DataMahasiswaController::class, 'store']);
    Route::get('/editmahasiswa/{id}', [App\Http\Controllers\DataMahasiswaController::class, 'edit']);
    Route::put('/updatemahasiswa/{id}', [App\Http\Controllers\DataMahasiswaController::class, 'update']);
    Route::delete('/hapusmahasiswa/{id}', [App\Http\Controllers\DataMahasiswaController::class, 'destroy']);
});

require __DIR__ . '/auth.php';
