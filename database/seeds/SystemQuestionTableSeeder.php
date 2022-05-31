<?php

use Illuminate\Database\Seeder;

class SystemQuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    \DB::table('system_question')->delete();
 
    \DB::table('system_question')->insert([
    'id' => '1',
    'question' => 'システム＋１の質問'
    ]);
    }
}
