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
   $allquestion = [
            $question1 = [
                'user_id' => '1',
                'title' => '長命草を食べるとどうなるといわれている？',
                'correct' => '長生きできる',
                'uncorrect1' => '与那国馬になれる',
                'uncorrect2' => '空を飛べる',
                'explain_sentence' => '長命草には豊富な栄養素が含まれています。皆さんも摂取して健康長寿！',
                'category_id' => '2',
                'region_id' => '2',
            ],
            ];
    }
}
