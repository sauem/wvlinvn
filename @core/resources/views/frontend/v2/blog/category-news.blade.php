@extends("frontend.v2.layout")
@section("content")
    @include("frontend.v2.inc.slider",['sliders' => $sliders])

    <section class="container py-5">
        @if(!empty($categories))
            <div class="mb-5">
                <div class="row">
                    <div class="col-12">
                        <h4 class="section-title mb-4 text-main text-uppercase">{{$categories->name}}</h4>
                    </div>
                </div>
                <div class="member-list">
                    <div class="members-wrap px-0">
                        <div class="row">
                            @if(!empty($blogs))
                                @foreach($blogs as $blog)
                                    <div class="col-md-3 col-12 col-sm-6">
                                        <div class="member-item p-0 m-0">
                                            <div class="img">
                                                <a href="{{blogLink($blog)}}">
                                                    <img class="img-fluid" src="{{_IMG($blog->image)}}"/>
                                                </a>
                                            </div>
                                            <p class="text">
                                                <a href="{{blogLink($blog)}}">{{$blog->title}}</a>
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="text-center">
                            {{$blogs->links()}}
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
@stop
