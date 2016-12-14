<?php

use Illuminate\Database\Seeder;

class CapacitacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('capacitaciones')->insert([
            'capacitacion' => 'Trabajo en alturas'
        ]);

        DB::table('capacitaciones')->insert([
            'capacitacion' => 'Espacios confinados'
        ]);

        DB::table('capacitaciones')->insert([
            'capacitacion' => 'Uso y mantenimiento de epp'
        ]);

        DB::table('capacitaciones')->insert([
            'capacitacion' => 'Manipulacion y almacenamiento de sustancias quimicas'
        ]);

        DB::table('capacitaciones')->insert([
            'capacitacion' => 'Brigadista prevencion del fuego'
        ]);

        DB::table('capacitaciones')->insert([
            'capacitacion' => 'Brigadista primeros auxilios'
        ]);

        DB::table('capacitaciones')->insert([
            'capacitacion' => 'Brigadista evacuacion, busqueda y rescate'
        ]);

        DB::table('capacitaciones')->insert([
            'capacitacion' => 'Brigadista ambiental'
        ]);

        DB::table('capacitaciones')->insert([
            'capacitacion' => 'Manejo defensivo'
        ]);

        DB::table('capacitaciones')->insert([
            'capacitacion' => 'Riego biologico'
        ]);

        DB::table('capacitaciones')->insert([
            'capacitacion' => 'Higiene personal'
        ]);

        DB::table('capacitaciones')->insert([
            'capacitacion' => 'Riesgo psicosocial'
        ]);

        DB::table('capacitaciones')->insert([
            'capacitacion' => 'Identificacion de peligros, valoracion de riesgos'
        ]);

        DB::table('capacitaciones')->insert([
            'capacitacion' => 'Tecnicas de limpieza y desinfeccion'
        ]);

        DB::table('capacitaciones')->insert([
            'capacitacion' => 'Otras'
        ]);
    }
}
