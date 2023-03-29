<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
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
    return view('welcome');
});


// Route::get('/tes', function(){
//     return view('test');
// });

Route::get('/guru', function(){
    return view('guru');
});

Route::get('/murid', function(){
    return view('murid');
});

Route::prefix('/siswa')->group(function () {
   
Route::get ('/', [StudentController::class, 'index'])->name('halaman_utama');
Route::get ('/buat', [StudentController::class, 'buat'])->name('buat');
Route::post ('/', [StudentController::class, 'store']);
Route::get('/{id}/edit',[StudentController::class, 'edit'])->name('halaman_edit');
Route::put('/{id}',[StudentController::class, 'update']);
Route::delete('/{id}',[StudentController::class,'destroy'])->name('hancur');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
