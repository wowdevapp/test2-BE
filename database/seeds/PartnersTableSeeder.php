<?php

use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                //generate cities 
                DB::table('partners')->insert([
        
                    [
                        'name' => 'Mohamed',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'name' => 'Hassan',
                        'created_at' => now(),
                        'updated_at' => now()
                    ],
                    [
                        'name' => 'Nada',
                        'created_at' => now(),
                        'updated_at' => now()
                    ]
                ]);
    }
}
