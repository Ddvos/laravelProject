<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Input;
use App\User;
class SearchController extends Controller
{
    //
   public function index()
   {
        $q = Input::get ( 'q' );
        $user = User::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->get ();
        if (count ( $user ) > 0)
            return view ( 'admin' )->withDetails ( $user )->withQuery ( $q );
        else
            return view ( 'admin' )->withMessage ( 'No Details found. Try to search again !' );
    }
}
