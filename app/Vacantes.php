<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacantes extends Model
{
    // relacion materias
    public function materia()
    {
       return $this->belongsTo(Materias::class);
    }

}
