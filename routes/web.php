<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/upload', [UploadController::class, 'createForm']);
Route::post('/upload', [UploadController::class, 'fileUpload'])->name('fileUpload');
