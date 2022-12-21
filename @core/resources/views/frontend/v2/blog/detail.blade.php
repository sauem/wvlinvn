@extends('frontend.v2.layout')
@section("content")
    @include('frontend.v2.inc.path',['items' => [['title' => $blog_post->category->name, 'link' => linkCategory($blog_post->category)],['title' => $blog_post->title]]])

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="single-title text-main">{{$blog_post->title}}</h1>
                <div class="content mt-3">
                    {!! $blog_post->content !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="ads mb-4">
                    <img src="/assets/frontend/img/ads-sidebar.jpeg" class="img-fluid w-100"/>
                </div>
                <h5 class="text-main text-center line-bottom">CÓ THỂ BẠN QUAN TÂM</h5>

                <div class="list-blog">
                    @if(!empty($all_recent_blogs))
                        @foreach($all_recent_blogs as $blog)
                            @php
                                $img = get_attachment_image_by_id($blog->image,'full');
                            @endphp
                            <div class="blog-item">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="img">
                                            <a href="{{blogLink($blog)}}">
                                                <img class="img-fluid" src="{{Arr::get($img,'img_url')}}" alt=""/>
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
                        @endforeach

                    @endif
                </div>
            </div>
        </div>
    </div>
@stop
