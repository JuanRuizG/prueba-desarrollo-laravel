<?php

use App\Producto;
use App\Venta;
use Illuminate\Database\Seeder;

class VentasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Producto::first();
        $product_second = Producto::find(2);
        $product_third = Producto::find(3);
        $product_four = Producto::find(4);
        $product_five = Producto::find(5);

        Venta::create(['fecha_venta' => now(),'monto' => $product->precio * $product->stock,
            'cantidad' => $product->stock,'producto_id' => $product->id,'categoria_id' => $product->categoria_id]);

        Venta::create(['fecha_venta' => now(),'monto' => $product_second->precio * $product_second->stock,
            'cantidad' => $product_second->stock,'producto_id' => $product_second->id,'categoria_id' => $product_second->categoria_id]);

        Venta::create(['fecha_venta' => now(),'monto' => $product_third->precio * $product_third->stock,
            'cantidad' => $product_third->stock,'producto_id' => $product_third->id,'categoria_id' => $product_third->categoria_id]);

        Venta::create(['fecha_venta' => now(),'monto' => $product_four->precio * $product_four->stock,
            'cantidad' => $product_four->stock,'producto_id' => $product_four->id,'categoria_id' => $product_four->categoria_id]);

        Venta::create(['fecha_venta' => now(),'monto' => $product_five->precio * $product_five->stock,
            'cantidad' => $product_five->stock,'producto_id' => $product_five->id,'categoria_id' => $product_five->categoria_id]);

    }
}
