@extends("frontend.v2.layout")
@section("content")
    <section class="container py-5">
        @if(!empty($categories))
            @foreach($categories as $category)
                <div class="mb-5">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="section-title mb-4 text-main text-uppercase">{{$category->name}}</h4>
                        </div>
                    </div>
                    <div class="row">
                        @if(!empty($category->children))
                            @foreach($category->children as $children)
                                <div class="col-md-2">
                                    <div class="network-item text-center">
                                        <a href="{{linkCategory($children)}}">
                                            <img class="img-fluid" src="{{_IMG($children->image)}}">
                                            <p class="text-main">{{$children->name}}</p>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    @if($category->blogs)
                        <div class="list-blog row">
                            @foreach($category->blogs as $blog)
                                <div class="col-md-6 col-12">
                                    <div class="blog-item blog-big-img">
                                        <div class="row align-items-center">
                                            <div class="col-md-5">
                                                <div class="img">
                                                    <a href="{{blogLink($blog)}}">
                                                        <img class="img-fluid" src="{{_IMG($blog->image)}}" alt=""/>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <small class="text-muted"><i class="fa fa-calendar-alt mr-2"></i>{{_DATE($blog->created_at)}}</small>
                                                <a class="name text-2" href="{{blogLink($blog)}}">{{$blog->title}}</a>

                                                <p class="desc text-3">
                                                    {{Str::limit($blog->excerpt, 200)}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        @endif
    </section>
@stop
