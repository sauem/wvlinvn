@extends('frontend.v2.layout')
@section('content')
    @include('frontend.v2.inc.path',['items' => [['title' => __('WLIN WORLD')]]])

    <div class="container list-blog pb-5">
        <div class="row">
            @if(!empty($categories))
                @foreach($categories as $category)
                    @if(sizeof($category->blogs) > 0)
                        <div class="col-12">
                            <h4 class="my-4 text-main line-bottom fit text-uppercase">{{$category->name}} {{sizeof($category->blogs)}}</h4>
                        </div>
                        <div class="clearfix"></div>
                        @foreach($category->blogs as $key =>  $blog)
                            <div class="col-md-6">
                                <div class="blog-item blog-big-img">
                                    <div class="row align-items-center">
                                        <div class="col-md-5">
                                            <div class="img mb-3 mb-md-0">
                                                <a href="{{blogLink($blog)}}">
                                                    <img class="img-fluid" src="{{_IMG($blog->image)}}" alt=""/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <a class="name text-2" href="{{blogLink($blog)}}">{{$blog->title}}</a>

                                            <p class="desc text-3">
                                                {{Str::limit($blog->excerpt, 200)}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($key === 5)
                                @break
                            @endif
                        @endforeach
                        <a class="btn radius-2 btn-outline-primary small-btn" href="{{linkCategory($category)}}">{{__('View more')}}</a>
                        <div class="clearfix"></div>

                    @endif
                @endforeach
            @endif

        </div>
    </div>
@stop
