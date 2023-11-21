<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subscription;
class SubscriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Assuming plan and user IDs exist, replace these values with actual IDs
        $planId = 1;
        $userId = 1;

        // Add dummy values for testing
        Subscription::create([
            'plan_id' => $planId,
            'user_id' => $userId,
            'starts_at' => now(),
            'ends_at' => now()->addMonth(),
            'renewed_at' => now()->addMonth(),
            'renewed_subscription_id' => 2, // Assuming another subscription ID for renewal
            'subscription_id' => 1, // Assuming this is the first subscription
            'upgraded_at' => now()->addMonth(),
            'upgraded_to_plan_id' => 2, // Assuming another plan ID for upgrade
            'downgraded_at' => now()->addMonth(),
            'downgraded_to_plan_id' => 3, // Assuming another plan ID for downgrade
            'cancelled_at' => now()->addMonth(),
            // Add other dummy values
        ]);

        // Add more dummy values as needed
    }
}
