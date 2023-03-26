<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:6']
            ]);
            $credentials = $request->only('email', 'password');
            if (Auth::guard('admin')->attempt($credentials)) {
                return redirect()->route('cms.home.index')->with(['alert-type'=>'success','message'=>'Login Successfully.']);
            } else {
                return redirect()->back()->withErrors(["email" => "Credentials doen't match our records"]);
            }
    }

    public function logout()
    {
        if (Auth::guard('admin')) {
            Auth::guard('admin')->logout();
        }
        return redirect()->route('login');
    }
}
