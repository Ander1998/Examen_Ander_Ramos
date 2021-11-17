<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class pacients extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pacients')->insert([
            'id' => '1',
            'name' => 'ander',
            'surname' => 'ramos',
            'dni' => '12345678A',
            'birthdate' => '1998/08/31',
            'vacinated' => '0',
            'doctor_id' => '',
        ]);

        DB::table('pacients')->insert([
            'id' => '2',
            'name' => 'ramos',
            'surname' => 'ander',
            'dni' => '12345678B',
            'birthdate' => '1998/08/30',
            'vacinated' => '0',
            'doctor_id' => '',
        ]);

        DB::table('pacients')->insert([
            'id' => '3',
            'name' => 'redna',
            'surname' => 'ramos',
            'dni' => '12345678C',
            'birthdate' => '1998/08/29',
            'vacinated' => '1',
            'doctor_id' => '',
        ]);

        DB::table('pacients')->insert([
            'id' => '4',
            'name' => 'ander',
            'surname' => 'somar',
            'dni' => '12345678D',
            'birthdate' => '1998/08/28',
            'vacinated' => '0',
            'doctor_id' => '',
        ]);
    }
}
