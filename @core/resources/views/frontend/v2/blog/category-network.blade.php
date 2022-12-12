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
                </div>
            @endforeach
        @endif
    </section>
@stop
