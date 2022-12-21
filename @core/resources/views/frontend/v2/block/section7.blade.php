@isset($breakingNews)
    <section class="py-4 news-list">
        <div class="bg-white py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="text-main text-uppercase text-center line-bottom mt-5 mt-md-0">{{__('Breaking news')}}</h5>
                        @if(!empty($breakingNews))
                            <div class="list-blog">
                                <div class="row">
                                    @foreach($breakingNews as $blog)
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="blog-item">
                                                <div class="row align-items-center">
                                                    <div class="col-md-12">
                                                        <div class="img mb-3" style="height: 160px">
                                                            <a href="{{blogLink($blog)}}">
                                                                <img class="img-fluid" src="{{_IMG($blog->image)}}"
                                                                     alt=""/>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
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
                            </div>
                        @endif
                    </div>
                    @if(sizeof($breakingNews) > 4)
                        <div class="col-md-6">
                            <h5 class="text-main text-uppercase text-center line-bottom mt-5 mt-md-0">{{__('Breaking news')}}</h5>
                            @if(!empty($breakingNews))
                                <div class="list-blog">
                                    <div class="row">
                                        @foreach(array_slice($breakingNews, 4) as $blog)
                                            <div class="col-md-6 col-sm-6 col-12">
                                                <div class="blog-item">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-12">
                                                            <div class="img mb-3" style="height: 160px">
                                                                <a href="{{blogLink($blog)}}">
                                                                    <img class="img-fluid" src="{{_IMG($blog->image)}}"
                                                                         alt=""/>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <a class="name text-2"
                                                               href="{{blogLink($blog)}}">{{$blog->title}}</a>

                                                            <p class="desc text-3">
                                                                {{Str::limit($blog->excerpt, 200)}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </section>
@endisset
