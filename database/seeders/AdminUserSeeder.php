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
            'name' => '333',
            'email' => env('ADMIN_EMAIL', '333@jhonpabz.com'),
            'password' => Hash::make(env('ADMIN_PASSWORD', '333')),
        ]);
    }
}
