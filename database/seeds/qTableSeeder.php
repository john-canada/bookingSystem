<?php

use Illuminate\Database\Seeder;

class qTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exam = new App\questionModel([  #1
                'q'=>'What is Nginx ?',
                'a1'=>'Web server',
                'a2'=>'Database',
                'a3'=>'Programming language',
                'a4'=>'Software Application',
                'a5'=>'All of the above',
               'c_a'=>1,
    
        ]);
        $exam->save();

        $exam = new App\questionModel([ #2
                   'q'=>'What is Docker ?',
                  'a1'=>'Programming Language',
                  'a2'=>'Cloud container',
                  'a3'=>'Virtual machine',
                  'a4'=>'Service Provider',
                  'a5'=>'All of the above ',
                 'c_a'=>'2',
      
          ]);
          $exam->save();

          $exam = new App\questionModel([ #3
                   'q'=>'What is laravel ?',
                  'a1'=>'It is not programming language',
                  'a2'=>'It is PHP framework',
                  'a3'=>'It is programming language',
                  'a4'=>'It is desktop programming language',
                  'a5'=>'All of the above',
                  'c_a'=>'2',
      
          ]);
          $exam->save();
    }
   }

