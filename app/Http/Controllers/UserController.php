<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	  public function index()
	    {
	        $users = User::paginate(10);
	        return view('users.index');
	    }   

	  public function edit(User $user)
	    {
	        return view('users.edit')->with('users',$user);
	    }


	  public function destroy(User $user)
	    {
	        $user->delete();
	        return redirect()->route('users.index');
	    }

}



