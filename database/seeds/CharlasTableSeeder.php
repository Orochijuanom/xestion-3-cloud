<?php

use Illuminate\Database\Seeder;

class CharlasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('charlas')->insert([
            'charla' => 'Pautas de autocuidado'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Riesgo biologico'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Pausas activas'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Procedimiento ante tormenta electrica'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Levantamiento de cargas'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Riesgo locativo'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Desplazamiento peatonal'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Desplazamiento en vehiculos'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Socializacion plan de emergencias'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Simulacro'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Induccion de riesgos de SST a visitantes'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Uso cinturon de seguridad'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'eso y mantenimiento de EPP'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Disponibilidad e intepretacion de hojas de seguridad'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Autoreporte de condiciones de trabajo'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Salud publica'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Procedimientos operativos'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Comunicacion y resolucion de conflictos'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Higiene personal'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Seguridad vial'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Uso cinturon de seguridad'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Limites de velocidad'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Pausas activas e hidratacion'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Cumplimiento areas señalizadas'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Boletin de desplazamiento aereo'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Socializacion plan de proteccion industrial'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Boletin el estres'
        ]);

        DB::table('charlas')->insert([
            'charla' => 'Otras'
        ]);


    }
}
