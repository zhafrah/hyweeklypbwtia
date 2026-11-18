<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'nama' => 'Jehan',
                'nim' => 13242520008,
                'prodi' => 'Teknik Informatika',
                'email' => 'jehan@gmail.com',
                'nohp' => 8123456789,
                'foto' => 'foto.jpg',
            ],
            [
                'nama' => 'Yusuf',
                'nim' => 13242520009,
                'prodi' => 'Manajemen Informatika',
                'email' => 'yusuf@gmail.com',
                'nohp' => 8123456780,
                'foto' => 'foto2.jpg',
            ],
        ]);
    }
}
