<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class primer_seguimiento extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id',
        'estudiante_id',
        'materiaTutoria',
        'profesorCurso',
        'creditoCruso',
        'situacion',
        'tipoTutoria',
        'estado'
    ];

    public function estudiante()
    {
        return $this->belongsTo('App\Models\estudiante', 'id');
    }
}
