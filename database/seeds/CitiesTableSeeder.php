<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //generate cities 
        DB::table('cities')->insert([

            [
                'name' => 'Rabat',
                'partner_id'=> 1,
            ],
            [
                'name' => 'Casa',
                'partner_id'=> 2,
            ],
            [
                'name' => 'Tangier',
                'partner_id'=> 3,
            ]
        ]);


    }
}
