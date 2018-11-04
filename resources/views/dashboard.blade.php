@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <h1>Hallo {{$user->name}}</h1>
                        <p>Hieronder kunt uw video's bekijken en er eventueel commentaar bij zetten </p>


                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Wijzig</th>
                                <th></th>
                            </tr>
                                @foreach($posts as $post)
                                <tr>
                                    <th>{{$post->title}}</th>
                                    <th><a href="/posts/{{$post->id}}/edit" class="btn btn-default">wijzig</a> </th>
                                    <th></th>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection


