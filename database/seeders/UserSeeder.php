<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
         [
                'name' => "Admin",
                'email' => "admin@email.com",
                'email_verified_at' => now(),
                'is_admin' => 1,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => Str::random(10)
         ],
         [
            'name' => "First user",
            'email' => "firstuser@email.com",
            'email_verified_at' => now(),
            'is_admin' => 0,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10)
         ],
         [
            'name' => "second user",
            'email' => "seconduser@email.com",
            'email_verified_at' => now(),
            'is_admin' => 0,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
        ]
        ]);
    }
}
