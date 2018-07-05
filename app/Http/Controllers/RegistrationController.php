<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
    	$this->validate(request(), [
    	   'name'      => 'required',
    	   'email'     => 'required|email',
    	   'password'  => 'required|confirmed'
    	]);
    	$user = User::create(request(['name', 'email', 'password']));

    	auth()->login($user);
		return redirect()->route('home');    	
    }

    public function delete($id)
    {
        $user = User::find($id);

        if ($user && $user->id == auth()->id()) { 
            $user->delete();
        }
        return redirect()->route('home');
    }
}
