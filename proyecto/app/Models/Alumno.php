<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Alumno extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function notas()
    {
        return $this->hasMany(Nota::class);
    }

    public function criteriosEvaluacion()
    {
        return $this->belongsToMany(Ccee::class, 'notas')->withPivot('nota');
    }
}
