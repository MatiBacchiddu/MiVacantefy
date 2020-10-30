<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulado extends Model
{
    //
    protected $fillable = [
        'perfil_id', 'vacante_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function perfil()
    {
        return $this->belongsTo(Perfil::class);
    }

    public function vacante()
    {
       return $this->belongsTo(Vacantes::class);
    }
}
