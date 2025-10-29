<?php

namespace Database\Seeders;

use App\Models\HomeImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeImage::create([
            'headline' => '10% off the entire website',
            'name' => 'Megah Marmer',
            'description' => 'with code SITE250',
            'hero_img' => ['/img/bg-hero.jpg']
        ]);
    }
}
