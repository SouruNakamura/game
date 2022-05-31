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
  'id' => '1',
  'graphic_score_min' => '1',
  'graphic_score_max' => '2',
  'system_score_min' => '1',
  'system_score_max' => '3',
  'story_score_min' => '1',
  'story_score_max' => '2',
  'name' => 'スーパーマリオブラザーズ'
  ]);
  
    }
}
