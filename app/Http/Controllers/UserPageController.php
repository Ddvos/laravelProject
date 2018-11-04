<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;



class UserPageController extends Controller
{
    //


    /**
     * only the admin is allowed to view the page.
     *
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * only the admin is allowed to view the page.
     *
     */


    public function index()
    {

    }

    public function create()
    {
        //
        return view('users.create');
    }

    public function store(Request $request)
    {

        //
        $this->validate($request,[
            'title' =>'required',
            'body' =>'required']);

        // create post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->save();


        return redirect('/admin')->with('succes','Post Created');

    }


    public function show($id)
    {
        //
        $posts = Post::where('user_id', $id)->orderBy('title','desc')->get();


        $user = User::find($id);

        return view('users.show')->with('user',$user)->with('posts', $posts);
    }


}
