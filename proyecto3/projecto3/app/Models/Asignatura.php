<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    // Definir la tabla asociada (opcional si se sigue la convención de pluralización)
    protected $table = 'asignaturas';

    // Definir los atributos que son asignables en masa
    protected $fillable = [
        'codigo',
        'denominacion',
    ];

    // Relación con el modelo Nota (una asignatura puede tener muchas notas)
    public function puntos()
    {
        return $this->hasMany(Punto::class);
    }
}
