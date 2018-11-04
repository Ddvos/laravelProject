<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('admin');
    }

    /**
     * Show all de users in table
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $users = User::all();
        return view('admin')->with('users',$users);
    }
}
