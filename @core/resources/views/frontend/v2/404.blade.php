@extends('frontend.v2.layout')
@section('content')
    <div class="text-center">
        <h1 class="text-main">{{get_static_option('error_404_page_'.get_user_lang().'_title')}}</h1>
        <h2>{{get_static_option('error_404_page_'.get_user_lang().'_subtitle')}}</h2>
        <p>{{get_static_option('error_404_page_'.get_user_lang().'_paragraph')}}</p>
        <a href="{{route('homepage')}}">{{get_static_option('error_404_page_'.get_user_lang().'_button_text')}}</a>
    </div>
@stop
