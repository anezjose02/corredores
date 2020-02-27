<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Gate;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        //return view('admin.users.index')->with('users',$users);
        
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
    
        $roles = Role::all();

        return view('admin.users.edit')->with([
            'user' => $user,
            'roles' => $roles
        ]);
    }

    public function premiunrol(User $user)
    {
    
        $roles = Role::all();

        return view('admin.users.edit')->with([
            'user' => $user,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //return $request->no_lic_pn;
        if ($request->hasfile('profile_picture')) 
        {
            $user->profile_picture = $request->file('profile_picture')->store('public');
        }
        if ($request->id_admin == 99)
        {
            //return $request;
            $user->roles()->sync($request->roles);
            //$user->id_role = $request->roles;
        }
        if ($request->id_role == 4)
        {
           $user->id_role = $request->id_role;
        }
        if ($request->id_role == 5)
        {
           $user->id_role = $request->id_role;
        }
        
        //$user->id_role = $request->id_role;
        $user->no_lic_pn = $request->no_lic_pn;
        //$user->reputacion = $request->reputacion;
        $user->fecha_emision = $request->fecha_emision;
        $user->fecha_vencimiento = $request->fecha_vencimiento;
        $user->nombre_idoneidad = $request->nombre_idoneidad;
        $user->status = $request->status;
        $user->no_lic = $request->no_lic;
        $user->nombre_sociedad_anonima = $request->nombre_sociedad_anonima;
        $user->suspendidos_cancel_hasta_la_fecha = $request->suspendidos_cancel_hasta_la_fecha;
        $user->nombre_representante_legal = $request->nombre_representante_legal;
        $user->name = $request->name;
        $user->main_message = $request->main_message;
        $user->number_phone = $request->number_phone;
        $user->license_year = $request->license_year;
        $user->address = $request->address;
        
        if($user->save()){
            $request->session()->flash('success', $user->name . ' has been updated');
        }else{
            $request->session()->flash('error','There was an error updating the user');
        }
    
        //$user->user = $request->user;

        if ($request->id_admin == 99)
        {
            return redirect()->route('usuarios.index');
        }
        return redirect()->route('user.perfil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    
    {
        /*dd($user);
        if(Gate::denies('delete-users')){
            return redirect(route('admin.users.index'));
        }*/
        
        $user->roles()->detach();
        $user->delete();

        return redirect()->route('usuarios.index');
    }
}
