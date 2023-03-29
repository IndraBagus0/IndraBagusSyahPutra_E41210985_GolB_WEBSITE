<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;
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
// Parameter pertama pada fungsi ini adalah URL yang akan diproses, yaitu /user.
//parameter kedua 1. mendefinisikan klo class ini yang dipanggil
//2. nama methodnya
Route::get('/user', [ManagementUserController::class, 'index']);

// variabel $nama dan $matkul akan dikirim ke view menggunakan fungsi compact.
Route::get('/', function () {
    $nama = "Indra Bagus Syah Putra";
    $matkul = ["Workshop Sistem Informasi Web Framework", "Workshop Mobile Applications", "Matematika"];
    return view('home', compact('nama', 'matkul'));
});
