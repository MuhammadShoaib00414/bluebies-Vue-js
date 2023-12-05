<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class IntrestSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        $sectors = ['Technology', 'Finance', 'Healthcare', 'Education', 'Hospitality', 'Real Estate', 'Automotive', 'Entertainment', 'Retail', 'Fashion', 'Sports', 'Telecommunications', 'Media', 'Transportation', 'Agriculture', 'Construction', 'Energy', 'Manufacturing', 'Pharmaceutical', 'Tourism'];

        for ($i = 0; $i < 20; $i++) {
            $randomSector = $sectors[array_rand($sectors)];
            $randomPlace = $faker->country; // Faker generates random country names

            DB::table('intrest_settings')->insert([
                'places' => $randomPlace,
                'sector' => $randomSector,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
