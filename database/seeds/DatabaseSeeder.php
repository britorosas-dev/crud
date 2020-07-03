<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Proveedor::class, 15)->create();
        factory(\App\Producto::class, 15)->create();
    }
}
