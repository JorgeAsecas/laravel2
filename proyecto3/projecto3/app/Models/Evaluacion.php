<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;

    // Definir la tabla asociada (opcional si se sigue la convención de pluralización)
    protected $table = 'evaluaciones';

    // Definir los atributos que son asignables en masa
    protected $fillable = [
        'evaluacion',
    ];

    // Relación con el modelo Nota (una evaluación puede tener muchas notas)
    public function puntos()
    {
        return $this->hasMany(Punto::class);
    }
}
