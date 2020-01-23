<?php

namespace App\Http\Controllers;

use App\Juridicos;
use Illuminate\Http\Request;

class CorredorjuridicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $juridicos = Juridicos::get();

        return view('admin.juridicos.index', ['juridicos' => $juridicos]);
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
     * @param  \App\Juridicos  $juridicos
     * @return \Illuminate\Http\Response
     */
    public function show(Juridicos $juridicos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Juridicos  $juridicos
     * @return \Illuminate\Http\Response
     */
    public function edit(Juridicos $juridicos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Juridicos  $juridicos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Juridicos $juridicos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Juridicos  $juridicos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Juridicos $juridicos)
    {
        //
    }
}
