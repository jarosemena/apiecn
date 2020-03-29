<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class solicitudes extends Model
{
    protected $fillable = ['novio','novia','fds_solicitado', 'fds_asistido', 'noche_id', 'fecha_boda', 'tiempo_novios', 'como_se_entero', 'como_se_entero_detalle'];
}
