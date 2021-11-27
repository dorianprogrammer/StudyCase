<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'instrucciones',
        'id_ingredientes'
    ];

    public function recetas()
    {
        return $this->belongsTo(Receta::class);
    }
}
