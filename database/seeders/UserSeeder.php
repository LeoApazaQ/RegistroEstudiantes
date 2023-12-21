<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Edgar',
            'email' => 'edgar@gmail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Admin');

        User::factory(9)->create();
    }
}
