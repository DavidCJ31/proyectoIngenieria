<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;

    public $timestamps = false;
    protected $fillable = [
        'id',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','id');
    }
    public function lista_curso_estudiante()
    {
        return $this->hasMany('App\Models\lista_curso_estudiante', 'estudiante_id');
    }
    public function asistencia()
    {
        return $this->hasMany('App\Models\asistencia', 'estudiante_id');
    }
    public function seguimiento()
    {
        return $this->hasMany('App\Models\seguimiento','estudiante_id');
    }
        public function lista_asesor_estudiante()
    {
        return $this->hasMany('App\Models\lista_asesor_estudiante','estudiante_id');
    }
    public function listaAsesores()
    {
        return $this->belongsToMany('App\Models\asesor', 'lista_asesor_estudiantes','estudiante_id', 'asesor_id');
    }
    public function listaCursos()
    {
        return $this->belongsToMany('App\Models\detalle_curso', 'lista_curso_estudiante', 'estudiante_id', 'detalle_curso_id');
    }
    public function listaClases()
    {
        return $this->belongsToMany('App\Models\clase', 'asistencia', 'estudiante_id', 'clase_id');
    }
    public function estudianteDetalle()
    {
        return $this->hasOne('App\Models\estudiante_detalle', 'estudiante_id');
    }
}
