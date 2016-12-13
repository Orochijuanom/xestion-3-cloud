<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RiesgoTableSeeder::class);
        $this->call(RiesgoDescripcionTableSeeder::class);
        $this->call(EfectoTableSeeder::class);
        $this->call(DescripcionEfectoTableSeeder::class);
    }
}
