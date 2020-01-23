<?php

namespace App\Http\Controllers;

use App\Naturales;
use Illuminate\Http\Request;

class CorredornaturalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $naturales = Naturales::get();

        return view('admin.naturales.index', ['naturales' => $naturales]);

      //  return view('admin.naturales.index');
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
     * @param  \App\Naturales  $naturales
     * @return \Illuminate\Http\Response
     */
    public function show(Naturales $naturales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Naturales  $naturales
     * @return \Illuminate\Http\Response
     */
    public function edit(Naturales $naturales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Naturales  $naturales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Naturales $naturales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Naturales  $naturales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Naturales $naturales)
    {
        //
    }
}
