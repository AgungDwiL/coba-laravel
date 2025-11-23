<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $name = $faker->name;
    return [
        'name' => $name,
        'username' => strtolower(str_replace(' ', '', $name)),
        'email' => strtolower(str_replace(' ', '', $name)) . '@' . $faker->safeEmailDomain(),
        'email_verified_at' => now(),
        'password' => Hash::make('Password123'), // password
        'remember_token' => Str::random(10),
    ];
});