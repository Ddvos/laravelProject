<?php
/*
|--------------------------------------------------------------------------
|Pagecontroller
|--------------------------------------------------------------------------
|
| Control every page model, view etc
*/
namespace App\Http\Controllers;

class PagesController extends Controller{

    public function getIndex(){
        return view('home');
    }

    public function getAbout(){
        return view('about');
    }

    public function getPortfolio(){
        return view('portfolio');
    }

    public function getAdvertenties(){
        return view('advertenties');
    }
}
