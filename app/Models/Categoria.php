<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $table="categorias";
    protected $fillable=["Nombre", "Descripcion", "Estado"];
    public $timestamps=false;

    //relacion con productos uno a muchos
    public function productos(){
        return this->hasMany(Producto::class, 'id');
    }
}
