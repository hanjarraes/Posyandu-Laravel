<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kabupaten;
use App\Models\Kecamatan;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Posyandu;
use App\Models\Provinsi;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Post::factory(20)->create();
        Kecamatan::factory(50)->create();
        Kabupaten::factory(50)->create();
        Provinsi::factory(34)->create();
        Posyandu::factory(5)->create();
    }
}
