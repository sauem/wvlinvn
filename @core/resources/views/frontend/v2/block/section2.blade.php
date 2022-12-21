@isset($videos)
    <section class="py-4">
        <div class="bg-white p-md-4 p-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-title text-center">WLIN TV - WOMEN LEADER TALKSHOW</h2>
                    </div>
                    <div class="col-12">
                        @if(!empty($videos))
                            <div class="videos-wrap">
                                <div class="videos-carousel">
                                    @foreach($videos as $video)
                                        <div class="video-item">
                                            <iframe width="100%" height="200"
                                                    src="{{$video->embed_code}}"
                                                    frameborder="0"
                                                    allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                            <p class="text">{{$video->title}}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endisset
