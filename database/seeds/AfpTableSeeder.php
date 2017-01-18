<?php

use Illuminate\Database\Seeder;

class AfpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('afp')->insert([
            'afp' => '230201-Protección (ING + Protección)',            
        ]);

        DB::table('afp')->insert([
            'afp' => '230301 - Porvenir',            
        ]);

        DB::table('afp')->insert([
            'afp' => '230901 Old Mutual',            
        ]);

        DB::table('afp')->insert([
            'afp' => '230904 - Old Mutual Alternativo',            
        ]);

        DB::table('afp')->insert([
            'afp' => '231001 - Colfondos',            
        ]);

        DB::table('afp')->insert([
            'afp' => '25 - 14 Administradora Colombiana de Pensiones',            
        ]);

        DB::table('afp')->insert([
            'afp' => '25 - 2 Caja de Auxilios y Prestaciones de la Asociación Colombiana de Aviadores Civiles Acdac Caxdac',            
        ]);

        DB::table('afp')->insert([
            'afp' => '25 - 3 Fondo de Previsión Social del Congreso de la República Fonprecon',            
        ]);

        DB::table('afp')->insert([
            'afp' => '25 - 7 Pensiones de Antioquia',            
        ]);

        DB::table('afp')->insert([
            'afp' => 'FSP001- Consorscio Colombia Mayor',            
        ]);
    }
}
