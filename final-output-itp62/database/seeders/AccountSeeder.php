<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Account;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Account::create([
        'name' => 'Admin',
        'email' => 'admin@test.com',
        'password' => bcrypt('123456'),
        ]);

        Account::create([
            'name' => 'User',
            'email' => 'user@test.com',
            'password' => bcrypt('123456'),
        ]);//
    }
}
