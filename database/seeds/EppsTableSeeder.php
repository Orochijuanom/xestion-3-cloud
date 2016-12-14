<?php

use Illuminate\Database\Seeder;

class EppsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('epps')->insert([
            'epp' => 'Casco tipo I',
            'zona_id' => '1'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Casco tipo II',
            'zona_id' => '1'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Casco de motocicleta',
            'zona_id' => '1'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Casco ciclista',
            'zona_id' => '1'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Tapaoidos de isercion',
            'zona_id' => '1'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Tapaoidos de copa',
            'zona_id' => '1'
        ]);

        DB::table('epps')->insert([
            'epp' => 'otros',
            'zona_id' => '1'
        ]);

        ///////////////////////////
        DB::table('epps')->insert([
            'epp' => 'Chavito',
            'zona_id' => '2'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Gafa de seguridad oscura',
            'zona_id' => '2'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Gafa de seguridad clara',
            'zona_id' => '2'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Monogafa de seguridad',
            'zona_id' => '2'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Respirador desechable',
            'zona_id' => '2'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Filtro respiratorio',
            'zona_id' => '2'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Tapabocas',
            'zona_id' => '2'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Careta',
            'zona_id' => '2'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Respirador de media cara',
            'zona_id' => '2'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Careta de soldador',
            'zona_id' => '2'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Apliacion protector solar',
            'zona_id' => '2'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Otros',
            'zona_id' => '2'
        ]);

        ///////////////////////////
        DB::table('epps')->insert([
            'epp' => 'Camisa',
            'zona_id' => '3'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Jean',
            'zona_id' => '3'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Pantalon',
            'zona_id' => '3'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Chaqueta',
            'zona_id' => '3'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Peto de caucho',
            'zona_id' => '3'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Peto de carnaza',
            'zona_id' => '3'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Kit de motociclista',
            'zona_id' => '3'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Impermeable',
            'zona_id' => '3'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Arnes de seguridad',
            'zona_id' => '3'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Eslinga',
            'zona_id' => '3'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Tyvek',
            'zona_id' => '3'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Chaleco reflectivo',
            'zona_id' => '3'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Escafandra',
            'zona_id' => '3'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Patalon anticorte',
            'zona_id' => '3'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Kit de guadaña',
            'zona_id' => '3'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Pantalon con pechera PVC',
            'zona_id' => '3'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Traje antifluidos',
            'zona_id' => '3'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Otro',
            'zona_id' => '3'
        ]);

        ////////////////////////////
        DB::table('epps')->insert([
            'epp' => 'Guantes de latex',
            'zona_id' => '4'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Guantes de nitrilo',
            'zona_id' => '4'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Guante de carnaza corto',
            'zona_id' => '4'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Guante de carnaza largos',
            'zona_id' => '4'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Guate de neopreno corto',
            'zona_id' => '4'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Guante de neopreno largo',
            'zona_id' => '4'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Guante de vaqueta',
            'zona_id' => '4'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Guante de hilo con puntos de PVC',
            'zona_id' => '4'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Guante soldador',
            'zona_id' => '4'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Otros',
            'zona_id' => '4'
        ]);

        ///////////////////////////
        DB::table('epps')->insert([
            'epp' => 'Botas de seguridad',
            'zona_id' => '5'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Botas de caucho',
            'zona_id' => '5'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Botas de caucho con puntera',
            'zona_id' => '5'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Zapato antideslizante',
            'zona_id' => '5'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Canillera',
            'zona_id' => '5'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Polainas antiofidicas',
            'zona_id' => '5'
        ]);

        DB::table('epps')->insert([
            'epp' => 'Otros',
            'zona_id' => '5'
        ]);
    }
}
