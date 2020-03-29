<?php

namespace App\Http\Controllers;

use App\personasdetalles;
use Illuminate\Http\Request;

class PersonasdetallesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = personasdetalles::all();
        return $task;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\personasdetalles  $personasdetalles
     * @return \Illuminate\Http\Response
     */
    public function show(personasdetalles $personasdetalles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\personasdetalles  $personasdetalles
     * @return \Illuminate\Http\Response
     */
    public function edit(personasdetalles $personasdetalles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\personasdetalles  $personasdetalles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, personasdetalles $personasdetalles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\personasdetalles  $personasdetalles
     * @return \Illuminate\Http\Response
     */
    public function destroy(personasdetalles $personasdetalles)
    {
        //
    }
}
