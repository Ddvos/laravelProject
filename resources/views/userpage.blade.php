@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">

                        <a href="/posts/create" class="btn btn-primary">Create Post</a>
                        <h3>Your blog Posts</h3>

                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
