<?php

use Illuminate\Database\Seeder;

class ZonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zonas')->insert([
            'zona' => 'Cabeza y auditiva'
        ]);

        DB::table('zonas')->insert([
            'zona' => 'Facial'
        ]);

        DB::table('zonas')->insert([
            'zona' => 'Cuerpo'
        ]);

        DB::table('zonas')->insert([
            'zona' => 'Miembros superiores'
        ]);

        DB::table('zonas')->insert([
            'zona' => 'Miembros inferiores'
        ]);
    }
}
