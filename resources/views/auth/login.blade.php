@extends('main-b')

@section('title')
Admin Login
@endsection

@section('content')
<div class="row">
    <div class="col-sm-4 col-sm-push-4 text-center">
        <h1>Admin Login</h1>
        <hr>
    </div>

</div>
<div class="row">
    <div class="col-sm-4 col-sm-push-4">
        {!! Form::open(['method' => 'post', 'action' => 'Auth\AuthController@getLogin', "class" => "form-group"]) !!}
        <div class="form-group">
            {!! Form::text('name', null,  ["placeholder" => "Admin", "class" => "form-control"]) !!}
        </div>
        <div class="form-group">
            {!! Form::text('password', null,  ["placeholder" => "Password", "class" => "form-control"]) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Login', ['class' => 'form-control btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
