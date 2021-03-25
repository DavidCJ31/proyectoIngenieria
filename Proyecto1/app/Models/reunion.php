<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reunion extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id',
        'asesor_id',
        'estudiante_id',
        'inicio',
        'final',
        'descripcion',
        'tipo',
        'estado'
    ];


    public function estudiante()
    {
        return $this->belongsTo('App\Models\estudiante','estudiante_id');
    }
    public function asesor()
    {
        return $this->belongsTo('App\Models\asesor','id');
    }
}
