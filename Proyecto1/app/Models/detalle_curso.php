<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalle_curso extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id',
        'anno',
        'periodo',
        'num_periodo',
        'curso_codigo',
        'tutor_id',
    ];

    public function curso()
    {
        return $this->belongsTo('App\Models\curso', 'foreign_key', 'codigo');
    }
    public function tutor()
    {
        return $this->belongsTo('App\Models\tutor');
    }
    public function clase()
    {
        return $this->hasMany('App\Models\clase');
    }
    public function lista_curso_estudiante()
    {
        return $this->hasMany('App\Models\lista_curso_estudiante');
    }
}
