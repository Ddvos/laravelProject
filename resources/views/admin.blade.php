@extends('layouts.app')

@section('content')
    <h1>Hello Admin</h1>
    <p>Op deze pagina kunt u nieuwe accounts voor klanten aanmaken. Ook kunt u hier nieuwe video's op het portfolio zetten</p>

<!-- Hieronder kan je nieuwe accounts voor klanten aanmaken -->



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Maak nieuw account voor klant aan') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- hieronder is het overzicht met alle klanten  -->

    <h1>Klanten</h1>
 <div class="row">
     <div class="col-md-12">
         <table class="table">
             <thead>
             <th>#</th>
             <th>Name</th>
             <th>Email</th>
             <th>Pagina</th>
             <th>Activatie</th>
             </thead>

             <tbody>

                @foreach($users as $user)
                    <tr>
                        <th>{{$user->id}}</th>
                        <th>{{$user->name}}</th>
                        <th>{{$user->email}}</th>
                        <th>
                            <a href="/admin/user/{{$user->id}}" class="btn btn-info" role="button">Persoonlijke pagina</a>
                        </th>
                        <th>
                            <label class="bs-switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </th>
                    </tr>
                @endforeach
             </tbody>
         </table>
     </div>
 </div>


@endsection




@section('sidebar')
    @parent
 <p>This is appended to the sidebar</p>
@endsection

