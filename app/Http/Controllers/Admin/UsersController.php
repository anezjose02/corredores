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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if ($request->hasfile('profile_picture')) 
        {
            $user->profile_picture = $request->file('profile_picture')->store('public');
        }
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
        if(Gate::denies('delete-users')){
            return redirect(route('admin.users.index'));
        }
        
        $user->roles()->detach();
        $user->delete();

        return redirect()->route('admin.users.index');
    }
}
