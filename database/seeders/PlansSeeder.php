<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;
class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Add dummy values for testing
        Plan::create([
            'name' => 'Basic Plan',
            'description' => 'This is the basic subscription plan',
            'price' => 19.99,
            'product_id' => 1,
            'price_id' => 1,
            // Add other dummy values
        ]);

        // Add more dummy values as needed
    }
}
