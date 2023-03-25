<?php

namespace App\Http\Controllers;

use App\Models\figures;
use App\Http\Requests\StorefiguresRequest;
use App\Http\Requests\UpdatefiguresRequest;

class FiguresController extends Controller
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
     * @param  \App\Http\Requests\StorefiguresRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefiguresRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\figures  $figures
     * @return \Illuminate\Http\Response
     */
    public function show(figures $figures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\figures  $figures
     * @return \Illuminate\Http\Response
     */
    public function edit(figures $figures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefiguresRequest  $request
     * @param  \App\Models\figures  $figures
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatefiguresRequest $request, figures $figures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\figures  $figures
     * @return \Illuminate\Http\Response
     */
    public function destroy(figures $figures)
    {
        //
    }
}
