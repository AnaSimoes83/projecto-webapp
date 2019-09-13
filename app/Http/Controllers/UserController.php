<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	  public function index()
	    {
	        $users = User::paginate(10);
	        return view('users.index')->with('users',$users);
	    }   

	  public function edit(User $user)
	    {
	        return view('users.edit')->with('user',$user);
	    }

	  public function update(Request $request, User $user)
	    {
	        $user->fill($request->all());
	        $user->save();
	        return redirect()->route('users.index',$user); 
	    }

	  public function destroy(User $user)
	    {
	        $user->delete();
	        return redirect()->route('users.index');
	    }

}



