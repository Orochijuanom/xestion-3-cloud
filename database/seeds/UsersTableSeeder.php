<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'admin' => 1,
            'celular' => null,
            'ver' => null,
            'estado' => null,
            'activo' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'alex',
            'email' => 'alex@gmail.com',
            'password' => bcrypt('alex1'),
            'admin' => 0,
            'celular' => 'tutela',
            'ver' => 'http://1drv.ms/1mswjXS',
            'estado' => 'vencido',
            'activo' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Mario Sierra',
            'email' => 'mario.sierra@xestion3.com',
            'password' => bcrypt('emailxestion31'),
            'admin' => 0,
            'celular' => null,
            'ver' => null,
            'estado' => null,
            'activo' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Miguel',
            'email' => 'm@gmail.com',
            'password' => bcrypt('123456'),
            'admin' => 0,
            'celular' => null,
            'ver' => null,
            'estado' => null,
            'activo' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'mario sierra',
            'email' => 'msierra@xestion3.com',
            'password' => bcrypt('mario123*'),
            'admin' => 0,
            'celular' => null,
            'ver' => null,
            'estado' => null,
            'activo' => 1,
        ]);
        
            
    }
}
