<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRCodeController;

Route::get('/', function () {
    return view('qrcode.index'); // Menampilkan halaman awal
});

Route::get('/qrcode', [QRCodeController::class, 'index']); 
Route::get('/generate-qrcode', [QRCodeController::class, 'index']);
