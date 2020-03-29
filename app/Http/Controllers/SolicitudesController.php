<?php

namespace App\Http\Controllers;

use App\solicitudes;
use Illuminate\Http\Request;

class SolicitudesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitud = solicitudes::all();
        return $solicitud;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $solicitud = new solicitudes();
        $solicitud->novio                   = $request->novio ;
        $solicitud->novia                   = $request->novia;
        $solicitud->fds_solicitado          = $request->fds_solicitado;
        $solicitud->fds_asistido            = $request->fds_asistido;
        $solicitud->noche_id                = $request->noche_id;
        $solicitud->fecha_boda              = $request->fecha_boda;
        $solicitud->tiempo_novios           = $request->tiempo_novios;
        $solicitud->como_se_entero          = $request->como_se_entero;
        $solicitud->como_se_entero_detalle  = $request->como_se_entero_detalle ;     
      

        $solicitud->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function show(solicitudes $solicitudes)
    {
        $solicitud = solicitudes::findOrFail($request->id);
        return $solicitud;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function edit(solicitudes $solicitudes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, solicitudes $solicitudes)
    {
        $task = Task::findOrFail($request->id);
        $solicitud->novio                   = $request->novio ;
        $solicitud->novia                   = $request->novia;
        $solicitud->fds_solicitado          = $request->fds_solicitado;
        $solicitud->fds_asistido            = $request->fds_asistido;
        $solicitud->noche_id                = $request->noche_id;
        $solicitud->fecha_boda              = $request->fecha_boda;
        $solicitud->tiempo_novios           = $request->tiempo_novios;
        $solicitud->como_se_entero          = $request->como_se_entero;
        $solicitud->como_se_entero_detalle  = $request->como_se_entero_detalle ;     
      

        $solicitud->save();

        return $solicitud;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function destroy(solicitudes $solicitudes)
    {
        $solicitud = solicitud::destroy($request->id);
        return $solicitud;
    }
}
