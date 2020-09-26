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
        return $this->hasMany('App\Models\lista_curso_estudiante');
    }
    public function asistencia()
    {
        return $this->hasMany('App\Models\asistencia');
    }
    public function seguimiento()
    {
        return $this->hasMany('App\Models\seguimiento');
    }
        public function lista_asesor_estudiante()
    {
        return $this->hasMany('App\Models\lista_asesor_estudiante');
    }
}
