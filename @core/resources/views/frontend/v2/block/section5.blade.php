<section class="py-4 news-list">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="event-header d-flex p-2 bg-main-purple">
                    <svg width="28" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.2401 10.784L14.0001 0.11734L10.7601 10.784H0.666748L8.90675 16.664L5.77341 26.784L14.0001 20.5307L22.2401 26.784L19.1067 16.664L27.3334 10.784H17.2401Z"
                              fill="#FFC122"/>
                    </svg>
                    <h4 class="text-white text-uppercase ml-2">{{__('Upcoming events calendar')}}</h4>
                </div>
                <div id="list-event" class="list-event"></div>
                <a class="btn btn-link mt-4 mx-auto" href="/events">{{__('View all')}}</a>
            </div>
            <div class="col-md-5">
                <h5 class="text-main text-center line-bottom mt-5 mt-md-0 mb-md-0 mb-md-3">{{__('News')}}</h5>
                @if(!empty($blogs))
                    <div class="list-blog">
                        @foreach($blogs as $blog)

                            <div class="blog-item">
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
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
    <template id="event-item">
        <div v-for="event in events" class="event-item row align-items-center">
            <div class="col-2">
                <div class="time">
                    <p class="day">@{{event.day}}</p>
                    <p class="month">Tháng @{{event.month}}</p>
                </div>
            </div>
            <div class="col-10">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="img">
                            <a :href="`/events/wlin/${event.key}`">
                                <img class="img-fluid" :src="event.image" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <p v-if="event.timeTo"
                           class="duration">
                            Diễn ra vào lúc <span v-if="event.timeFrom">@{{  event.timeFrom }}</span> <span
                                    v-if="event.timeTo">- @{{ event.timeTo }}</span>
                        </p>
                        <p class="name">
                            <a :href="`/events/wlin/${event.key}`"> @{{event.name}}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </template>

</section>
