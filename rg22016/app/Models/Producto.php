<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    /** @use HasFactory<\Database\Factories\ProductoFactory> */
    use HasFactory;

    protected $table = 'tbl_productos';
    protected $fillable = [
        'nombre', 'precio', 'idCategoria','idProveedores'
    ];

    public function categoria(){
        return $this->hasMany("idCategoria");
    }

    public function proveeder(){
        return $this->hasMany('idProveedores');
    }

}
