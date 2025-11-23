<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin Utama',
            'email' => 'admin1@example.com',
            'password' => Hash::make('password123')
        ]);

        User::create([
            'name' => 'Penulis Satu',
            'email' => 'penulis1@example.com',
            'password' => Hash::make('password123')
        ]);

        User::create([
            'name' => 'Penulis Dua',
            'email' => 'penulis2@example.com',
            'password' => Hash::make('password123')
        ]);

        User::create([
            'name' => 'Editor Satu',
            'email' => 'editor1@example.com',
            'password' => Hash::make('password123')
        ]);

        User::create([
            'name' => 'Editor Dua',
            'email' => 'editor2@example.com',
            'password' => Hash::make('password123')
        ]);
    }
}
