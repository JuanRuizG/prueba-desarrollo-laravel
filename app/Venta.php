<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';

    protected $fillable = [
        'fecha_venta','monto','cantidad','producto_id','categoria_id'
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class,'producto_id','id');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class,'categoria_id','id');
    }
}
