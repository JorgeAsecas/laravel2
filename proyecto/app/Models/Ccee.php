<?php

namespace App\Models;

use illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Ccee extends Model
{
    use HasFactory;

    public function notas()
    {
        return $this->hasMany(Nota::class);
    }

    public function alumnos()
    {
        return $this->belongsToMany(Ccee::class, 'notas')->withPivot('nota');
    }
}
