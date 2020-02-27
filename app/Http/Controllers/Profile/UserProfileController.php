<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UserProfile;
use App\User;
use App\Role;
use App\Naturales;

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
        $roles = Role::all();
        //$perfils = Perfiles::all();
        $roles = Role::where('id','>=','4')->get();
        //return $roles;
        $user = User::where('id', $id)->get();
        return view('user.perfil.index')->with([
            'user' => $user,
            'roles' => $roles
        ]);
        
    }

    public function show(User $user)
    {
        $id =auth()->user()->id;
        
        //$perfils = Perfiles::all();
        $user = User::where('id', $id)->get();
        return view('user.perfil.show')->with([
            'user' =>$user
        ]);
       
    }

    
}
