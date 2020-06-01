<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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
    $email = $faker->unique()->safeEmail;
    $image = 'https://www.gravatar.com/avatar/' . md5(strtolower($email)). '?d=mp';
    return [
        'firstname' => $faker->firstname,
        'lastname' => $faker->lastname,
        'telephone' => $faker->numerify($string = '0#########'),
        'username' => $faker->username,
        'email' => $email,
        'image' => $image,
        'email_verified_at' => now(),
        'password' => Hash::make('password'), // password
        'remember_token' => Str::random(10),
    ];
});
