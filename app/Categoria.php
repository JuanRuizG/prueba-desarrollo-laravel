<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = ['nombre'];

    public function productos()
    {
        return $this->hasMany(Producto::class,'categoria_id','id');
    }

    public function ventas()
    {
        return $this->hasMany(Venta::class,'categoria_id','id');
    }
}
