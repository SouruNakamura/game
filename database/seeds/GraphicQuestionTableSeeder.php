<?php

use Illuminate\Database\Seeder;

class GraphicQuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    \DB::table('graphic_question')->delete();
 
    \DB::table('graphic_question')->insert([
    'id' => '1',
    'question' => 'グラフィック＋１の質問'
    ]);
    }
}
