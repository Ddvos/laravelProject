@extends('layouts.app')

@section('content')
    <h1>Hello Admin</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at aut, autem consequatur dicta earum enim exercitationem id nihil, quo quod repellat sint vero. Consequatur fuga illo nulla quo rem?</p>
@endsection

@section('sidebar')
    @parent
 <p>This is appended to the sidebar</p>
@endsection

