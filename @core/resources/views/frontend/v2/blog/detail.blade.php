@extends('frontend.v2.layout')
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('frontend.v2.inc.path',['items' => [['title' => $blog_post->category->name, 'link' => linkCategory($blog_post->category)],['title' => $blog_post->title]]])
            </div>
            <div class="col-md-8">
                <h2>{{$blog_post->title}}</h2>
                <div class="content mt-3">
                    {!! $blog_post->content !!}
                </div>
            </div>
            <div class="col-md-4">
                <h5 class="text-main text-left line-bottom">TIN TỨC MỚI NHẤT</h5>

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
