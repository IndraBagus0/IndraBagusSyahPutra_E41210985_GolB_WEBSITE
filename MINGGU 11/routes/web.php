<?php

use App\Http\Controllers\UploadController;
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
//untuk upload 
Route::get('/upload', [UploadController::class, 'upload']);
Route::post('/proses_upload', [UploadController::class, 'proses_upload']);
//untuk resize gambar
Route::Post('/upload/resize', [UploadController::class, 'resize_upload']);
//Upload image menggunakan Drag and drop
Route::get('/dropzone', [UploadController::class, 'dropzone']);
Route::post('/dropzone/store', [UploadController::class, 'dropzone_store']);
//Upload Pdf
Route::get('/upload_pdf', [UploadController::class, 'pdf_upload']);
Route::post('/pdf/store', [UploadController::class, 'pdf_store']);
