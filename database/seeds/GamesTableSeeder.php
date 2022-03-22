<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  \DB::table('games')->delete();
 
  \DB::table('games')->insert([
  'game_id' => '1',
  'graphic_id' => '1',
  'system_id' => '1',
  'story_id' => '1',
  'game_name' => ''
  ]);
  
  \DB::table('games')->insert([
  'game_id' => '2',
  'graphic_id' => '1',
  'system_id' => '1',
  'story_id' => '1',
  'game_name' => ''
  ]);
  
  
    }
}
