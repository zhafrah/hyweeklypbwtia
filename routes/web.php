<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Models\Berita;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Zhafirah Haya",
        "nim" => "12342520008",
        "prodi" => "Teknologi Informasi",
        "gambar" => "yushiha.jpg"
    ]);
});

Route::get('/berita', [BeritaController::class, 'tampilberita']);
Route::get('berita/{slug}', [BeritaController::class, 'tampilberitatunggal']);

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Contact"
    ]);
});