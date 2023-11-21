<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    // Check if the user with the given email exists
    $existingUser = DB::table('users')->where('email', 'admin@admin.com')->first();

    // If the user exists, update the is_admin value
    if ($existingUser) {
        if ($existingUser->is_admin === 0) {
            // Update is_admin value only if it's currently 0
            DB::table('users')->where('email', 'admin@admin.com')->update(['is_admin' => 1]);
        }
    } else {
        // If the user doesn't exist, seed a new user
        DB::table('users')->insert([
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'is_admin' => 1,
        ]);
    }
}

}
