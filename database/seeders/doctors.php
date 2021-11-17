<?php

namespace Database\Seeders;

use Database\Factories\doctorsFactory;
use Illuminate\Database\Seeder;
use DB;

class doctors extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*DB::table('doctors')->insert([
            'id' => '1',
            'name' => 'paco',
            'surname' => 'mer',
            'pacients' => '0',
        ]);

        DB::table('doctors')->insert([
            'id' => '2',
            'name' => 'joni',
            'surname' => 'melavo',
            'pacients' => '0',
        ]);*/

        doctorsFactory::factory(5)->create();
    }
}
