<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class changePasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function changePassword()
    {

        $user = Auth::guard('admin')->user('id');
        return view('cms.changePassword.index', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function passwordChange(Request $request, $id)
    {
        // dd($request);
        $validate = $request->validate([
            'email' => ['required', 'string', 'email','min:6', 'max:255', "unique:admins,email,$id"],
            'password' => ['required','confirmed', 'string', 'min:8','max:16'],
            ]);

            // dd($id);
        $password = Auth::guard('admin')->user();
        // $password->name = $request->name;
        $password->email = $request->email;
        // dd($password->email);
        $password->password = Hash::make($request->password);
        if ($password->save()) {
            return redirect()->back()->with([
                "message" => "Password Changed Successfully",
                "alert-type" => "success"
            ]);
        } else {
            return redirect()->back()->with([
                "message" => "Something went wrong. Contact admin.",
                "alert-type" => "error"
            ]);
        }
    }
}
