<?php

namespace App\Http\Controllers;

use App\fds;
use Illuminate\Http\Request;

class FdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = fds::all();
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
     * @param  \App\fds  $fds
     * @return \Illuminate\Http\Response
     */
    public function show(fds $fds)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fds  $fds
     * @return \Illuminate\Http\Response
     */
    public function edit(fds $fds)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fds  $fds
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fds $fds)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fds  $fds
     * @return \Illuminate\Http\Response
     */
    public function destroy(fds $fds)
    {
        //
    }
}
