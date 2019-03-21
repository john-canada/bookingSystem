<?php

use Illuminate\Database\Seeder;

class examinerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $examiner = new App\examinerModel([  #1
              'lname'=>'Balase',
               'fname'=>'Liza',
               'course'=>'BSADM',
               ]);
        $examiner->save();
    }
}
