<?php

namespace App\Http\Controllers;

use App\noches;
use Illuminate\Http\Request;

class NochesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = noches::all();
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
     * @param  \App\noches  $noches
     * @return \Illuminate\Http\Response
     */
    public function show(noches $noches)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\noches  $noches
     * @return \Illuminate\Http\Response
     */
    public function edit(noches $noches)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\noches  $noches
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, noches $noches)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\noches  $noches
     * @return \Illuminate\Http\Response
     */
    public function destroy(noches $noches)
    {
        //
    }
}
