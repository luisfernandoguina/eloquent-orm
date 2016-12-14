<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function eloquentAll(){
        $users = User::all();
        $title ="Todos los Usuarios (All)";
        return view('query.methods',compact('title','users'));
    }
    public function eloquentGet($gender){
        $users = User::where('gender',$gender)->get();
        $title ="Todos de Usuarios utilizando (Get)";
        return view('query.methods',compact('title','users'));
    }
}
