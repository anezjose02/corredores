<?php

namespace App\Http\Controllers;

use App\Naturales;
use App\users_profiles;
use App\User;
use Illuminate\Http\Request;

class GenericuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function index()
    {
       $user=auth()->user()->id;
        //$naturales = Naturales::all();
        //$users_profiles = users_profiles::all();
        //$users = User::all();
        //return view('genericuser.index')->with('users_profiles',$users_profiles)->with('users',$users); 
        //$naturales = Naturales::get();
        $users_profiles = users_profiles::where('profile_picture',$user)->get();
                            //return $users_profiles;
                            //dd($users_profiles);

        return view('perfil.index', ['users_profiles' => $users_profiles],['user' => $user]);

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
        $user=auth()->user()->id;
        //$naturales = Naturales::all();
        //$users_profiles = users_profiles::all();
        //$users = User::all();
        //return view('genericuser.index')->with('users_profiles',$users_profiles)->with('users',$users); 
        //$naturales = Naturales::get();
        $users_profiles = users_profiles::where('profile_picture',$user)->get();
                            //return $users_profiles;
                            //dd($users_profiles);

        return view('perfil.edit', ['users_profiles' => $users_profiles],['user' => $user]);
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
