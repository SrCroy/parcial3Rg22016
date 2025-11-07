<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    /** @use HasFactory<\Database\Factories\ProveedoresFactory> */
    use HasFactory;
    protected $table = 'tbl_proveedores';

    protected $fillable = [
        'nombreProveedor',
        'direccion',
        'codigo',
    ];

    public function producto(){
        return $this->belongsTo('idProductos');
    }
}
