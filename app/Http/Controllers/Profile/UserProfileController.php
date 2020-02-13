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
        
        $user = User::where('id', $id)->get();
        return view('user.perfil.index')->with([
            'user' =>$user
        ]);
        
    }

    
}
