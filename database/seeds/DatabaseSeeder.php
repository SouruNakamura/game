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
        $this->call(GamesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(GraphicQuestionTableSeeder::class);
        $this->call(SystemQuestionTableSeeder::class);
        $this->call(StoryQuestionTableSeeder::class);
                    
    }
}
