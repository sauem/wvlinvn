@extends('frontend.v2.layout')
@section("content")
    @include("frontend.v2.inc.slider",['sliders' => $sliders])
    @include("frontend.v2.block.section3",['categories' => $categories , 'title' => 'WLIN NEWS'])
@stop
