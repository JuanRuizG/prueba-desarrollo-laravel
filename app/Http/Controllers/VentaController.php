<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Http\Requests\StoreVentaRequest;
use App\Producto;
use App\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Venta::with('producto','categoria')->orderBy('id','DESC')->paginate(5);
        return view('ventas.index',compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::pluck('nombre','id');
        $productos = Producto::pluck('nombre','id');
        return view('ventas.create',compact('categorias','productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVentaRequest $request)
    {
        Venta::create($request->validated());

        return redirect()->route('ventas.index')->with('info','Venta creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        return view('ventas.show',compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta)
    {
        $categorias = Categoria::pluck('nombre','id');
        $productos = Producto::pluck('nombre','id');
        return view('ventas.edit',compact('venta','categorias','productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(StoreVentaRequest $request, Venta $venta)
    {
        $venta->update($request->validated());

        return redirect()->route('ventas.index')->with('info','Venta actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        $venta->delete();

        return back()->with('info','Venta eliminado con exito');
    }

    public function petition()
    {
        return view('ventas.petition');
    }

    public function petitionProcess(Request $request)
    {
        $datos = $request->validate(['producto_id' => 'required|integer','cantidad_producto' => 'required|integer']);

        if (Producto::where('id', $datos['producto_id'])->exists())
        {
            if ($datos['cantidad_producto'] == 0)
                return back()->with('warning','No es posible realizar la venta');
            else if (Producto::find($datos['producto_id'])->stock > 0 &&  $datos['cantidad_producto'] > 0 )
            {
                $productoExistente = Producto::find($datos['producto_id']);
                $productoActualizar = Producto::find($datos['producto_id']);

                if ($productoExistente->stock >= $datos['cantidad_producto'])
                {
                    $productoActualizar->stock = $productoActualizar->stock - $datos['cantidad_producto'];
                    $productoActualizar->save();

                    Venta::create(['fecha_venta' => now(), 'cantidad' => $datos['cantidad_producto'],
                        'monto' => $datos['cantidad_producto'] * $productoExistente->precio,
                        'producto_id' => $datos['producto_id'],'categoria_id' => $productoExistente->categoria_id]);
                    return back()->with('info','Venta realizada con exito');
                } else {
                    return back()->with('warning','No es posible realizar la venta no ahi suficientes articulos');
                }
            }
            else
                return back()->with('warning','No es posible realizar la venta');
        } else {
            return back()->with('warning','El producto no existe');
        }
    }
}
