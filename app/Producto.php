<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = ['nombre','descripcion','foto','envio','condicion','precio_venta','proveedor_id'];

    public function proveedor(){
        return $this->belongsTo("App\Proveedor","proveedor_id")->select('id','nombre','estatus','pais','ciudad');
    }
}
