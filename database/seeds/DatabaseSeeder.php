<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 3)->create()->each(function($user){
            $user->tasks()
                ->saveMany(
                    factory(App\Task::class, rand(1, 5))->make()
                );
        });

    }
}
