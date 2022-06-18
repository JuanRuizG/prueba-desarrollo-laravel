<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create(['nombre' => 'Tecnologia']);
        Categoria::create(['nombre' => 'Celulares']);
        Categoria::create(['nombre' => 'Electrodomestico']);
        Categoria::create(['nombre' => 'Dormitorios']);
        Categoria::create(['nombre' => 'Zapatos']);
        Categoria::create(['nombre' => 'Deportes']);
        Categoria::create(['nombre' => 'Jugueteria']);
        Categoria::create(['nombre' => 'Libros']);
        Categoria::create(['nombre' => 'Muebles']);
        Categoria::create(['nombre' => 'Comestibles']);
        Categoria::create(['nombre' => 'Bebidas']);
        Categoria::create(['nombre' => 'Empaquetados']);
        Categoria::create(['nombre' => 'Jugos']);

    }
}
