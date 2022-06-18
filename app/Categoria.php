<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use SoftDeletes;

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
