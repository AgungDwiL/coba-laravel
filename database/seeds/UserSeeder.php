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
        factory(User::class, 5)->create();

        User::create([
            'name' => 'Agung Dwi Laksana',
            'username' => 'agungdwilaksana',
            'email' => 'agungdwilaksana@email.com',
            'password' => Hash::make('Password123')
        ]);
    }
}
