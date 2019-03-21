<?php

use Illuminate\Database\Seeder;

class answerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exam = new App\answerModel([  #1     
            'e_id'=>'2',
             'qid'=>2,
           'e_answer'=>1, 
            ]);
        $exam->save();
    }
}

