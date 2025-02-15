<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Jhonpabz',
            'email' => env('ADMIN_EMAIL'),
            'password' => Hash::make(env('ADMIN_PASSWORD')),
        ]);
    }
}
