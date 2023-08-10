<?php


use App\Models\User;
use Phinx\Seed\AbstractSeed;

class UserTableSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run(): void
    {
        $users = factory(User::class, 10)->create([
            'first_name' => 'Joynny Jim Beam'
        ]);

        $users->each(function ($user) {
            var_dump($user);
        });

        dd('Created Users');
    }
}
