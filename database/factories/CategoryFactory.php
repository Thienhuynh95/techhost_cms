<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
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

$factory->define(\App\Models\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'description' => $faker->text,
        'status' => 'active',
        'level' => 1,
        'is_featured' => 1,
        'ordering' => 1,
        'is_default' => 1,
        'created_by' => 1,
        'updated_by' => 1,
        'created_at' => now(),
        'updated_at' => now()
    ];
});
