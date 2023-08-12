<?php


use App\Models\User;
use Phinx\Seed\AbstractSeed;

class UsersTableSeeder extends AbstractSeed
{

    /**
     * Run Method.
     * Write your database seeder using this method.
     */

    public function run(): void
    {
        factory(User::class, 10)->create([
            // example of overriding the default from the seeder
            'first_name' => 'Andrew'
        ]);
    }
}
