<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index ()
    {

         $users=User::all();
        // $users= User::where('age','>=',21)->get();
         // return $users;
        return view('users.index',compact('users'));

        // or u can type it this way : return view ('views/index'); \n  / same as .
    }

    public function store ()
    {
        $user= new User();
        $user->name=request ('name');
        $user->email= request('email');
        $user->password=bcrypt(request('password'));
        $user->save();
        // User::create(request->all());

        return back();
        // return redirect ('/');

    }
}
