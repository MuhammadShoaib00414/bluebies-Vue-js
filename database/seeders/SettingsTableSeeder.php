<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Settings;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Insert dummy data into the settings table
        Settings::create([
            'key' => 'coupon',
            'value' => '50.00',
        ]);

        // Settings::create([
        //     'key' => 'email',
        //     'value' => 'admin@example.com',
        // ]);

        // Settings::create([
        //     'key' => 'coupon',
        //     'value' => 'dummy_coupon_data',
        //     'coupon' => 'dummy_coupon_data',
        // ]);
    }
}
