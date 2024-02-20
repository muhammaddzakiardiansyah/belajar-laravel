<?php

namespace Database\Seeders;

use App\Models\Vacancy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vacancy::create([
            "company_id" => 1,
            "main_vacancy" => "Telah dibuka lowongan pekerjaan di batik pekalongan bagi yang berminat silahkan kunjungi tautan ini",
            "vacancy_img" => "loker.jpg",
            "admin_id" => 5,
        ]);

        Vacancy::create([
            "company_id" => 2,
            "main_vacancy" => "Job vacancy for Frontend Developer",
            "vacancy_img" => "loker.jpg",
            "admin_id" => 2,
        ]);

        Vacancy::create([
            "company_id" => 2,
            "main_vacancy" => "Job vacancy for Backend Engginer",
            "vacancy_img" => "loker.jpg",
            "admin_id" => 2,
        ]);

        Vacancy::create([
            "company_id" => 3,
            "main_vacancy" => "Lowongan pekerjaan si ANBU",
            "vacancy_img" => "loker.jpg",
            "admin_id" => 4,
        ]);
    }
}
