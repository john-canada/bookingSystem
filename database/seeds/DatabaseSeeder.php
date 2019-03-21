<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(qTableSeeder::class);
        $this->call(examinerTableSeeder::class);
        $this->call(answerTableSeeder::class);
        $this->call(custLeadTableSeeder::class);
    }
}
