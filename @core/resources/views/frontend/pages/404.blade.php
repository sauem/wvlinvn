@extends('frontend.v2.layout')
@section('content')
    <div class="container">
        <div class="text-center my-5">
            <img class="img-fluid" width="300" src="/assets/frontend/img/404.webp" />
            <h1 class="text-center text-main">{{__('Page not found')}}</h1>
            <a href="/" class="btn mx-auto mt-4 btn-outline-primary">{{__('Go to home')}}</a>
        </div>
    </div>
@stop
