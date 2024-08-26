<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use PhpParser\Builder\Use_;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Manager',
            'role_id' => 1,
            'email' => "tojiqulov.nurullo@gmail.com",
            'password' => Hash::make('secret'),
        ]);

        User::create([
            'name' => 'Client',
            'role_id' => 2,
            'email' => "nurullo@gmail.com",
            'password' => Hash::make('secret'),
        ]);
    }
}
