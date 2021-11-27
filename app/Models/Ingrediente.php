<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'porcion',
        'unidad_medida'
    ];

    public function recetas()
    {
        return $this->belongsTo(Receta::class);
    }
}
