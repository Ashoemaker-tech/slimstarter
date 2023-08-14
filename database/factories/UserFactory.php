<?php

/**
 * Define the defaults for the factory.
 * Defaults can be overwritten in the seeder.
 * We populate the model definitions with the Faker library by passing the faker instance into the callback
 */

Factory::define(App\Models\User::class, fn ($faker) => [
    'username' => $faker->username,
    'email'      => $faker->unique()->email,
    'password'   => password_hash('secret', PASSWORD_BCRYPT),
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s'),
]);
