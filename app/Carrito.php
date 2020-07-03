<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $table = 'carrito';
    protected $fillable = ['producto_id','cantidad'];

    public function producto(){
        return $this->belongsTo("App\Producto","producto_id")->select('id','nombre','foto','precio_venta');
    }
}
