<?php

namespace App\Models;

use illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Nota extends Model
{
    use HasFactory;

    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }

    public function ccee()
    {
        return $this->belongsTo(Ccee::class);
    }
}
