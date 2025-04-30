<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Models\User;

// Facade for successfull authentication
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginWithOtpController extends Controller
{
    //

    public function create(){
        return view('verify.login');
    }

    public function store(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    // Attempt to authenticate the user
    /* if (auth()->attempt($request->only(['email', 'password']), $request->filled('remember'))) {

        return redirect()->intended('dashboard');

    }
    */

    if (auth()->attempt($request->only(['email', 'password']), $request->filled('remember'))) {


        $usertype=Auth()->user()->usertype;
        $firstname=Auth()->user()->firstname;
        $lastname=Auth()->user()->lastname;

        if ($usertype == 'user') {
            return redirect()->route('dashboard')->with([
            'loginsuccess' => 'Welcome back,',
            'firstname' => $firstname,
            'lastname' => $lastname,
        ]);
        }

        elseif ($usertype == 'admin') {
            return redirect()->route('admin.index');
        }

        else {
            return redirect()->back();
        }

        // return redirect()->intended('dashboard');

    }




    // Handle the case where authentication fails
    return back()->withInput()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}





}
