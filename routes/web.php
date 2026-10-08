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
        "name" => "Zhafirah Haya",
        "nim" => "12342520008",
        "prodi" => "Teknologi Informasi",
        "gambar" => "yushiha.jpg"
    ]);
});

Route::get('/berita', function () {
    return view('berita', [
        "title" => "Berita",
        "data_berita" => Berita::all(),
    ]);
});

Route::get('berita/{slug}', function ($slug) {

$data_berita = [
    [
        "judul" => "Indonesia Juara ASEAN",
        "slug" => "indonesia-juara-asean",
        "penulis" => "Sakuya",
        "konten" => "Sakuya suka mengoleksi ganci"
    ],
    [
        "judul" => "Indonesia Juara Makan Pedas",
        "slug" => "indonesia-juara-makan-pedas",
        "penulis" => "Jaehee",
        "konten" => "Cabe Indonesia lebih pedas daripada cabe Korea"
    ]
];

$singlenews = [];
foreach ($data_berita as $berita) 
    {
        if($berita['slug'] == $slug) 
        {
            $singlenews = $berita;
        }
    }

    return view('beritatunggal', [
        "title" => "judul berita tunggal",
        "singlenews" => $singlenews
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Contact"
    ]);
});