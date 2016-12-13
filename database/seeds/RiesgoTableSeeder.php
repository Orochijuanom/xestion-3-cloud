<?php

use Illuminate\Database\Seeder;

class RiesgoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('riesgo')->insert([
            'riesgo' => 'Biologico'
        ]);

        DB::table('riesgo')->insert([
            'riesgo' => 'Fisico'
        ]);

        DB::table('riesgo')->insert([
            'riesgo' => 'Quimico'
        ]);

        DB::table('riesgo')->insert([
            'riesgo' => 'Condiciones de seguridad'
        ]);

        DB::table('riesgo')->insert([
            'riesgo' => 'Psicosocial'
        ]);

        DB::table('riesgo')->insert([
            'riesgo' => 'Biomecanico'
        ]);

        DB::table('riesgo')->insert([
            'riesgo' => 'Fenomenos naturales'
        ]);

        DB::table('riesgo')->insert([
            'riesgo' => 'Actividades recreativas'
        ]);
    }
}
