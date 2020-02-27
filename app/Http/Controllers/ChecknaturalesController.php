<?php

namespace App\Http\Controllers;

use App\Naturales;
use App\User;
use App\Naturales_ranking;
use Illuminate\Http\Request;

class ChecknaturalesController extends Controller
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
        $user = User::get();

        return view('naturales')->with([
            'user' => $user,
            'naturales' => $naturales
        ]);

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
     * Display the specified resource.
     *
     * @param  \App\Naturales  $naturales
     * @return \Illuminate\Http\Response
     */
    public function formSubmit(Request $request)
    {
        //
       // print_r($request->input('pista'));
      //  $naturales = Naturales::get();
        
       // $naturales = Naturales::where('nombre_idoneidad','LIKE', '%'.$request->input('pista').'%')->get(); //donde la colummna name sea igual a user
        $naturales = Naturales::where('nombre_idoneidad','LIKE', '%'.$request->input('pista').'%')
        ->orWhere('no_lic_pn', 'like', '%' . $request->input('pista') . '%')
        ->orWhere('status', 'like', '%' . $request->input('pista') . '%')
        ->orderBy('nombre_idoneidad', 'desc')
        ->get();
        $user = User::where('nombre_idoneidad','LIKE', '%'.$request->input('pista').'%')
        ->orWhere('no_lic_pn', 'like', '%' . $request->input('pista') . '%')
        ->orWhere('status', 'like', '%' . $request->input('pista') . '%')
        ->orderBy('nombre_idoneidad', 'desc')
        ->get();
      //  dd($naturales);
      return view('naturales')->with([
        'user' => $user,
        //'naturales' => $naturales
    ]);
      //  return($naturales);
        //  where('name','LIKE','%'.$variable.'%')
        //print_r($naturales->pluck('nombre_idoneidad'));
       // dd($naturales->pluck('nombre_idoneidad'));
    }

        /**
     * Display the specified resource.
     *
     * @param  \App\Naturales  $naturales
     * @return \Illuminate\Http\Response
     */
    public function verNatural(Request $request)
    {
       // dd($request);
      //  $naturales = Naturales::get();
      
        //$naturales = Naturales::where('id_natural', $request->input('elid'))->first();
        //$nolicnat = $naturales->no_lic_pn;
        $user = User::where('id', $request->elid)->get();
        //return $user;
        //$rankings = Naturales_ranking::where('no_lic_corredor', $nolicnat)->orderBy('created_at','desc')->get();
       //dd($naturales);
      //  $adminRole = Role::where('name','admin')->first();

        //return view('vernatural')->with('naturales', $naturales, 'rankings', $rankings); 
        return view('vernatural')->with([
            'user' => $user,
            //'naturales' => $naturales
        ]);
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
