<?php

namespace App\Http\Controllers;

use App\persons;
use Illuminate\Http\Request;

class PersonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\persons  $persons
     * @return \Illuminate\Http\Response
     */
    public function show(persons $persons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\persons  $persons
     * @return \Illuminate\Http\Response
     */
    public function edit(persons $persons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\persons  $persons
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, persons $persons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\persons  $persons
     * @return \Illuminate\Http\Response
     */
    public function destroy(persons $persons)
    {
        //
    }
}
