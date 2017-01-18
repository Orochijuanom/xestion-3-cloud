<?php

use Illuminate\Database\Seeder;

class ArlTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('arl')->insert([
            'arl' => '14-4 Axcacolpatria',            
        ]);

        DB::table('arl')->insert([
            'arl' => '14 -7 Bolivar',            
        ]);

        DB::table('arl')->insert([
            'arl' => '14-8 Aurora',            
        ]);

        DB::table('arl')->insert([
            'arl' => '14-17 Alfa',            
        ]);

        DB::table('arl')->insert([
            'arl' => '14-18 Liberty',            
        ]);

        DB::table('arl')->insert([
            'arl' => '14-23 Positiva',            
        ]);

        DB::table('arl')->insert([
            'arl' => '14-25 Colmena',            
        ]);

        DB::table('arl')->insert([
            'arl' => '14-28  Sura',            
        ]);

        DB::table('arl')->insert([
            'arl' => '14-29 Equidad',            
        ]);

    }
}
