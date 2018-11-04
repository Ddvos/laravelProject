@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2>Dit is de pagina van {{$user->name}}</h2>

                        <a href="/admin/user/create" class="btn btn-primary">Upload nieuwe video</a>
                        <h3>Overzicht video's</h3>

                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                    <th>#</th>
                                    <th>Name</th>
                                    </thead>

                                    <tbody>

                                    @foreach($posts as $post)
                                        <tr>
                                            <th>{{$post->id}}</th>
                                            <th>{{$post->title}}</th>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection