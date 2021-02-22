<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.login');
    }

    public function signIn(Request $request)
    {
        // validate user
        $this->validate($request, [
            'email' => 'required|email',
            'password'=> 'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            // redirect back to the login page
            return back()->with('status', 'Invalid login details');
        }

        // redirecting to the dashboard page
        return redirect()->route('dashboard');
    }
}
