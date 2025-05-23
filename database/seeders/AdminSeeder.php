<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin= User::create([
            'name' => 'Admin',
            'email' => 'info@mydopa.com',
            'password' => bcrypt('Admin@Mydopa'),
            'type' => 'Admin',

        ]);
    }
}
