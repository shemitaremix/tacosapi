<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;
    protected $table = 'orden';
    protected $fillable = [
        "nombre_orden",
        "nombre_cliente",
        "tacos_sabor",
        "numero_tacos",
        "refresco_sabor",
        "numero_refresco"
    ];
    
}
