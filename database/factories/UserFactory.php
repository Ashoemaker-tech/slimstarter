<?php

/**
 * Define the defaults for the factory.
 * Defaults can be overwritten in the seeder.
 * We populate the model definitions with the Faker library by passing the faker instance into the callback
 */

Factory::define(App\Models\User::class, fn ($faker) => [
    'first_name' => $faker->firstName,
    'last_name' => $faker->lastName,
    'email' => $faker->unique()->email,
    'password' => sha1('secret'),
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s'),
]);
