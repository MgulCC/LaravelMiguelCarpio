<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  
    public function __invoke($id)
    {
        //return view('usuarios', ['id' => $id]);
    }

    public function edit(Request $request){
        $id = $request->id;
        return view('usuarios', compact('id'));
    }
 
}