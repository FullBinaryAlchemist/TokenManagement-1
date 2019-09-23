<?php

use Illuminate\Database\Seeder;
use App\Subjects;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sub= new Subjects();
        $sub->importCsv();
    }
}
