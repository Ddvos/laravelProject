<?php

namespace App\Http\Controllers;



class UserPageController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:admin');
    }



    public function index(){


        return view('userpage');
    }
}
