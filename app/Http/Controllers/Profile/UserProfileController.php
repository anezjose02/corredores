<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UserProfile;
use App\User;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id =auth()->user()->id;
        
        //$perfils = Perfiles::all();
        $perfils = UserProfile::where('id', $id)->get();
        return view('user.perfil.index')->with([
            'perfils' =>$perfils,
        ]);
        
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.perfil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Crete Perfiles
        $perfils = new UserProfile;
        $perfils->main_message = $request->input('main_message');
        $perfils->user_id = $request->input('user_id');
        $perfils->number_phone = $request->input('number_phone');
        $perfils->license_year = $request->input('license_year');
        $perfils->address = $request->input('address');
        $perfils->save();
        
        return redirect()->route('user.perfil.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perfils = UserProfile::find($id);
        return view('user.perfil.edit')->with('perfils',$perfils);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            //return $request;
        $perfils = UserProfile::find($id);
        $perfils->main_message = $request->main_message;
        $perfils->number_phone = $request->number_phone;
        $perfils->license_year = $request->license_year;
        $perfils->address = $request->address;
        $perfils->save();
        return redirect()->route('user.perfil.index');
    }

    
}
