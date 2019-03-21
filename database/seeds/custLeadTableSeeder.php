<?php

use Illuminate\Database\Seeder;

class custLeadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $examiner = new App\customerLeadModel([  #1
         'lname'=>'Balase',
         'fname'=>'Liza',
         'gender'=>'Male',
         'phone'=>'09150480717',
         'email'=>'lia@gmail.com'
         ]);
  $examiner->save();
    }
}
