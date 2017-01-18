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
        $this->call(CapacitacionesTableSeeder::class);
        $this->call(CharlasTableSeeder::class);
        $this->call(ZonasTableSeeder::class);
        $this->call(EppsTableSeeder::class);
        $this->call(AfpTableSeeder::class);
        $this->call(CajaTableSeeder::class);
        $this->call(EpsTableSeeder::class);
        $this->call(ArlTableSeeder::class);
    }
}
