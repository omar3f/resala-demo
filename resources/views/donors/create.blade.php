@extends('main-b')
@section('title')
    Donate Now!
@endsection
@section('stylesheets')
    <link href='http://fonts.googleapis.com/css?family=Oswald&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Fjalla+One&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{!! URL::asset('my_css/donate_create.css') !!}">
    <link rel="shortcut icon" type="image/png" href="{!! URL::asset('favicon.png') !!}"/>

    <style>
        .alert-success {
            border-radius: 0.5em;
            background-color: #ac2925;
            color: white;
        }
        #note {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            background: #5e5e5e;
            color: white;
            text-align: center;
            line-height: 3;
            font-size: 1.5em;
            overflow: hidden;
            font-family: 'Fjalla One';
        }

    </style>
@endsection
@section('navbar')
    @include('includes.navbar-logged')
@endsection
@section('content')
    <div id="note">
Thanks <img src="{!! URL::asset('pictures/heart-shadow.png') !!}" alt="" width="15">. A confirmation email has been
        sent to you.
    </div>

    <div class="row">
        <div class="col-sm-6 col-sm-push-3 text-center">
            <h1 class="title">DONATE FOR US. <span style="color: #ac2925">SAVE A LIFE.</span></h1>
            <hr>
        </div>
    </div>




    @include('includes.donation_form', ['method' => 'sendMail'])
@endsection
@section('scripts')
    <link rel="stylesheet" href="{!! URL::asset('my_css/donate_create.css') !!}">
    <script src="{!! URL::asset('my_js/ajaxHelper.js') !!}"></script>
    <script src="{!! URL::asset('my_js/addToArrayElements.js') !!}"></script>
    <script src="{!! URL::asset('my_js/objectProperties.js') !!}"></script>
    <script src="{!! URL::asset('my_js/disappearWhenClicked.js') !!}"></script>
    {{--<script src="{!! URL::asset('my_js/donationAjaxResponseHandler.js') !!}"></script>--}}

@endsection