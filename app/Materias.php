<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
    //

    public function vacantes()
    {
        return $this->hasMany(Vacantes::class);
    }
}
