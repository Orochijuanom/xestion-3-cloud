<?php

use Illuminate\Database\Seeder;

class RiesgoDescripcionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //biologico
        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Virus',
            'riesgo_id' => '1'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Bacterias',
            'riesgo_id' => '1'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Hongos',
            'riesgo_id' => '1'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Ricketsias',
            'riesgo_id' => '1'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Parasitos',
            'riesgo_id' => '1'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Picaduras',
            'riesgo_id' => '1'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Golpes y mordeduras',
            'riesgo_id' => '1'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Fluidos y excrementos',
            'riesgo_id' => '1'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Agua y alimentos',
            'riesgo_id' => '1'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Inmuno previnibles',
            'riesgo_id' => '1'
        ]);

        //fisico

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Presion atmosferica',
            'riesgo_id' => '2'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Iluminacion',
            'riesgo_id' => '2'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Ruido',
            'riesgo_id' => '2'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Radiaciones ionizantes',
            'riesgo_id' => '2'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Radiaciones no ionizantes',
            'riesgo_id' => '2'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Temperaturas extremas',
            'riesgo_id' => '2'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Vibracion',
            'riesgo_id' => '2'
        ]);

        //quimico

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Combustibles',
            'riesgo_id' => '3'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Polvos organicos e inorganicos',
            'riesgo_id' => '3'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Fibras',
            'riesgo_id' => '3'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Liquidos',
            'riesgo_id' => '3'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Gases y vapores',
            'riesgo_id' => '3'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Humos metalicos y no metalicos',
            'riesgo_id' => '3'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Material particulado',
            'riesgo_id' => '3'
        ]);

        //condiciones de seguridad

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Locativo',
            'riesgo_id' => '4'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Condiciones de orden y aseo',
            'riesgo_id' => '4'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Mecanico - elementos de oficina',
            'riesgo_id' => '4'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Mecanico - actividad con herramientas',
            'riesgo_id' => '4'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Mecanico - lineas presurisadas',
            'riesgo_id' => '4'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Mecanico - superficies calientes',
            'riesgo_id' => '4'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Mecanico - izage de cargas',
            'riesgo_id' => '4'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Mecanico - partes en movimiento',
            'riesgo_id' => '4'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Mecanico - operacion de maquinaria',
            'riesgo_id' => '4'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Elecrico - alta y baja tension',
            'riesgo_id' => '4'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Electrico - estatica',
            'riesgo_id' => '4'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Tecnologico - explocion, fuga y derrame',
            'riesgo_id' => '4'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Accidentes de transito - desplazamiento peatonal',
            'riesgo_id' => '4'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Accidentes de transito - transporte de personal y carga',
            'riesgo_id' => '4'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Publicos - robos, atracos, atentados, etc..',
            'riesgo_id' => '4'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Trabajo en alturas',
            'riesgo_id' => '4'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Espacios confinados',
            'riesgo_id' => '4'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Trabajos en caliente',
            'riesgo_id' => '4'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Tranajos con energias peligrosas',
            'riesgo_id' => '4'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Trabajo en excavaciones',
            'riesgo_id' => '4'
        ]);

        //psicosocial

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Gestion organizacional',
            'riesgo_id' => '5'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Caracteristicas de la organizacion del trabajo',
            'riesgo_id' => '5'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Caracteristicas del grupo social de trabajo',
            'riesgo_id' => '5'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Condiciones de la tarea',
            'riesgo_id' => '5'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Interfase persona tarea',
            'riesgo_id' => '5'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Jornada de trabajo',
            'riesgo_id' => '5'
        ]);

        //biomecanico

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Esfuerzo',
            'riesgo_id' => '6'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Movimiento repetitivo',
            'riesgo_id' => '6'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Sobreesfuerzo por uso de la voz',
            'riesgo_id' => '6'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Postura',
            'riesgo_id' => '6'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Manipulacion manual de cargas',
            'riesgo_id' => '6'
        ]);

        //fenomenos naturales

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Sismo',
            'riesgo_id' => '7'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Precipitaciones',
            'riesgo_id' => '7'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Vendabal',
            'riesgo_id' => '7'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Inundacion',
            'riesgo_id' => '7'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Terremoto',
            'riesgo_id' => '7'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Incendio',
            'riesgo_id' => '7'
        ]);

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Derrumbe',
            'riesgo_id' => '7'
        ]);

        //actividades recreativas

        DB::table('riesgo_descripcion')->insert([
            'descripcion' => 'Actividades varias',
            'riesgo_id' => '8'
        ]);
    }
}
