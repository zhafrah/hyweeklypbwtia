<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name"  => "Zhafirah Haya",
        "nim" => "12342520008",
        "prodi" => "Teknologi Informasi",
        "gambar" => "yushiha.jpg"
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Contact"
    ]);
});

Route::get('/berita', function () {
    return view('berita', [
        "title" => "Berita"
    ]);
});