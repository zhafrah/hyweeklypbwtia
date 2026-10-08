<?php

namespace App\Models;

use app\Models\Berita;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita = [
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
}
