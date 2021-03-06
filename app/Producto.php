<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = [
        'nombre','referencia','precio','peso','categoria_id','stock','fecha_Creacion'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
    }

    public function ventas()
    {
        return $this->hasMany(Venta::class,'producto_id','id');
    }

}
