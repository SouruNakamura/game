<?php

use Illuminate\Database\Seeder;

class StoryQuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    \DB::table('story_question')->delete();
 
    \DB::table('story_question')->insert([
    'id' => '1',
    'question' => 'ストーリー＋１の質問'
    ]);
    }
}
