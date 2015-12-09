@extends('main-b')

@section('title')
    Thank you.
    @endsection
@section('stylesheets')

    <link href='http://fonts.googleapis.com/css?family=Poiret+One&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <style>
        h1 {
            font-family: "Poiret One", SansSerif;

        }
    </style>
@endsection
@section('content')

    <div class="row text-center">
        <div class="col-sm-8 col-sm-push-2">
            <h1>
                Thank You. You have been confirmed.
            </h1>
        </div>
    </div>

    @endsection