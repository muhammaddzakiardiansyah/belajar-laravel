<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            "username" => "abimantra123",
            "password" => bcrypt('abim321#'),
            "nama_admin" => "M Abimantra Ardiansyah"
        ]);

        Admin::create([
            "username" => "irianita",
            "password" => bcrypt('nita21'),
            "nama_admin" => "Iriana Nita"
        ]);

        Admin::create([
            "username" => "lionel_messi",
            "password" => bcrypt('syiuuu'),
            "nama_admin" => "Lionel Messi"
        ]);

        Admin::create([
            "username" => "hasiramasenju",
            "password" => bcrypt('hasirama'),
            "nama_admin" => "Hasirama Senju"
        ]);

        Admin::create([
            "username" => "bos_batik_pkl",
            "password" => bcrypt('batik'),
            "nama_admin" => "Bos Batik Pekalongan"
        ]);
    }
}
