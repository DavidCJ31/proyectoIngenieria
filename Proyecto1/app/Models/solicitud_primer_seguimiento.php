<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitud_primer_seguimiento extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'estudiante_id',
        'materiaTutoria',
        'profesorCurso',
        'creditoCruso',
        'situacion',
        'tipoTutoria',
        'estado',
        'fechaSolicitud'
    ];

    public function estudiante()
    {
        return $this->belongsTo('App\Models\estudiante', 'id');
    }
}
