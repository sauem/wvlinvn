@extends('frontend.v2.layout')
@section("content")
    <section class="slide-top">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach($all_header_slider as $key => $data)
                        <?php
                        $image = get_attachment_image_by_id($data->image, 'full');
                        $url = Arr::get($image, 'img_url', '');
                        ?>
                    @if($url)
                        <div class="item {{$key == 0 ? 'active' : ''}}">
                            <img src="{{$url}}" style="width: 100%"/>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" style="font-size: 17px">
              <small> <i class="fa fa-chevron-left css-chevron"></i></small>
            </span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" style="font-size: 17px">
              <small><i class="fa fa-chevron-right css-chevron"></i></small>
            </span>
            </a>
        </div>
    </section>
    <?php
    $aboutStt = filter_static_option_value('home_page_about_us_section_status', $static_field_data);
    ?>
    @if($aboutStt)
        <section class="about">
            <div class="row row-mobile">
                <div class="col-sm-5 col-xs-9 about-video">
                    <iframe width="100%" height="300" frameborder="0"
                            src="{{filter_static_option_value('construction_about_section_video_url',$static_field_data)}}">
                    </iframe>
                </div>
                <div class="col-sm-6 col-xs-9 about-content">
                    <div>
                        <label class="about-title">
                            {{filter_static_option_value('construction_header_section_'.$user_select_lang_slug.'_title',$static_field_data)}}
                        </label>
                    </div>
                    <div class="about-desc">
                        {!! filter_static_option_value('construction_header_section_'.$user_select_lang_slug.'_description',$static_field_data) !!}
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if(!empty($all_videos))
        <section class="talkshow">
            <div class="container">
                <div>
                    <label class="talkshow-header">WLIN TV - WOMEN LEADER TALKSHOW</label>
                </div>
                <div class="row row-mobile">
                    <div class="owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                @foreach($all_videos as $video)
                                    <div class="owl-item">
                                        <div class="slide-item">
                                            <iframe width="100%" height="200"
                                                    src="{{$video->embed_code}}"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                            <p class="talkshow-content">
                                                {{$video->title}}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="owl-nav">
                            <button type="button" role="presentation" class="owl-prev">
                                <div class="nav-btn prev-slide">
                                    <i class="fa fa-chevron-left talkshow-chevron"></i>
                                </div>
                            </button>
                            <button type="button" role="presentation" class="owl-next">
                                <div class="nav-btn next-slide">
                                    <i class="fa fa-chevron-right talkshow-chevron"></i>
                                </div>
                            </button>
                        </div>
                        <div class="owl-dots">
                            <button role="button" class="owl-dot"><span></span></button>
                            <button role="button"
                                    class="owl-dot"><span></span></button>
                            <button role="button" class="owl-dot active">
                                <span></span></button>
                            <button role="button" class="owl-dot"><span></span></button>
                            <button
                                    role="button" class="owl-dot"><span></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if(!empty($blog_categories))
        <section class="world">
            <div>
                <label class="world-header">WLIN WORLD</label>
            </div>
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-5"
                 style="justify-content: center">
                @foreach($blog_categories as $category)
                        <?php
                        $urlImg = get_attachment_image_by_id($category->image, 'full');
                        ?>
                    <div class="col mb-4">
                        <a href="/">
                            <div class="world-item">
                                <img class="world-item-img" src="{{Arr::get($urlImg, 'img_url')}}" alt=""/>
                                <p class="world-item-content">{{$category->name}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    @endif
    @if(!empty($all_team_members))
        <section class="membership">
            <div class="container">
                <div>
                    <label class="membership-header">HỘI VIÊN WLIN</label>
                </div>
                <div class="row row-mobile">
                    <div class="owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                @foreach($all_team_members as $item)
                                        <?php
                                        $imgPath = get_attachment_image_by_id($item->image, 'full');
                                        $imgUrl = Arr::get($imgPath, 'img_url');
                                        ?>
                                    <div class="owl-item members">
                                        <div class="slide-item">
                                            <img src="{{$imgUrl}}" alt=""/>
                                            <p class="membership-content">
                                                {{$item->designation}}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="owl-nav">
                            <button type="button" role="presentation" class="owl-prev">
                                <div class="nav-btn prev-slide">
                                    <i class="fa fa-chevron-left membership-chevron" style="border-radius: 5px"></i>
                                </div>
                            </button>
                            <button type="button" role="presentation" class="owl-next">
                                <div class="nav-btn next-slide">
                                    <i class="fa fa-chevron-right membership-chevron" style="border-radius: 5px"></i>
                                </div>
                            </button>
                        </div>
                        <div class="owl-dots">
                            <button role="button" class="owl-dot"><span></span></button>
                            <button role="button"
                                    class="owl-dot"><span></span></button>
                            <button role="button" class="owl-dot active">
                                <span></span></button>
                            <button role="button" class="owl-dot"><span></span></button>
                            <button
                                    role="button" class="owl-dot"><span></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="section-news">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">
            <!-- <div class="events" style="height: 700px"> -->
            <div class="col col-news-1">
                <div class="events-left-header">
                    <i class="fa fa-star" style="color: #ffc122; font-size: 20px"></i>
                    <span class="events-left-title">LỊCH SỰ KIỆN</span>
                </div>
                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                    <div class="table mb-0">
                        <div id="list-event"></div>
                    </div>
                </div>
                <div style="text-align: center; margin-top: 45px">
                    <a class="button-all">Xem tất cả</a>
                </div>
            </div>
            <div class="col mt-sm-0 mt-5 col-news-2">
                <div class="events-header">TIN TỨC MỚI NHẤT</div>
                @if(!empty($all_blog))
                    @foreach($all_blog as $blog)
                            <?php $imgUrl = Arr::get(get_attachment_image_by_id($blog->image, 'full'), 'img_url');
                            ?>
                        <div class="events-item">
                            <div class="events-img-wrap">
                                <a href="{{route('frontend.blog.single',$blog->slug)}}">
                                    <img class="events-img" src="{{$imgUrl}}" alt=""/>
                                </a>
                            </div>
                            <div>
                                <a href="{{route('frontend.blog.single',$blog->slug)}}"
                                   class="events-item-title">{{$blog->title}}</a>
                                <p class="events-item-desc">
                                    {{$blog->excerpt}}
                                </p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            {{--            <div class="col col-news-3">--}}
            {{--                <div class="news-header">TIN TỨC NỔI BẬT</div>--}}
            {{--                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 my-4">--}}
            {{--                    <div class="col my-3">--}}
            {{--                        <div class="news-item">--}}
            {{--                            <img src="/image/homepage/img-news.svg" class="news-img" alt=""/>--}}
            {{--                            <div style="padding: 10px 0px">--}}
            {{--                                <a class="news-item-title">--}}
            {{--                                    Nữ lãnh đạo Trần Thị Yali: "Giải thưởng Top 100 Nữ...--}}
            {{--                                </a>--}}
            {{--                            </div>--}}
            {{--                            <div class="news-item-desc">--}}
            {{--                                Doanh nhân Trần Thị Yali là một trong những cái tên được--}}
            {{--                                vinh danh tại giải th...--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}

            {{--                </div>--}}
            {{--                <div style="text-align: center; margin-top: 45px">--}}
            {{--                    <a class="button-all">Xem tất cả</a>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <div class="col col-news-4">--}}
            {{--                <div class="news-header">TIN TỨC NỔI BẬT</div>--}}
            {{--                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 my-4">--}}
            {{--                    <div class="col my-3">--}}
            {{--                        <div class="news-item">--}}
            {{--                            <img src="/image/homepage/img-news.svg" class="news-img" alt=""/>--}}
            {{--                            <div style="padding: 10px 0px">--}}
            {{--                                <a class="news-item-title">--}}
            {{--                                    Nữ lãnh đạo Trần Thị Yali: "Giải thưởng Top 100 Nữ...--}}
            {{--                                </a>--}}
            {{--                            </div>--}}
            {{--                            <div class="news-item-desc">--}}
            {{--                                Doanh nhân Trần Thị Yali là một trong những cái tên được--}}
            {{--                                vinh danh tại giải th...--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="col my-3">--}}
            {{--                        <div class="news-item">--}}
            {{--                            <img src="/image/homepage/img-news.svg" class="news-img" alt=""/>--}}
            {{--                            <div style="padding: 10px 0px">--}}
            {{--                                <a class="news-item-title">--}}
            {{--                                    Nữ lãnh đạo Trần Thị Yali: "Giải thưởng Top 100 Nữ...--}}
            {{--                                </a>--}}
            {{--                            </div>--}}
            {{--                            <div class="news-item-desc">--}}
            {{--                                Doanh nhân Trần Thị Yali là một trong những cái tên được--}}
            {{--                                vinh danh tại giải th...--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="col my-3">--}}
            {{--                        <div class="news-item">--}}
            {{--                            <img src="/image/homepage/img-news.svg" class="news-img" alt=""/>--}}
            {{--                            <div style="padding: 10px 0px">--}}
            {{--                                <a class="news-item-title">--}}
            {{--                                    Nữ lãnh đạo Trần Thị Yali: "Giải thưởng Top 100 Nữ...--}}
            {{--                                </a>--}}
            {{--                            </div>--}}
            {{--                            <div class="news-item-desc">--}}
            {{--                                Doanh nhân Trần Thị Yali là một trong những cái tên được--}}
            {{--                                vinh danh tại giải th...--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="col my-3">--}}
            {{--                        <div class="news-item">--}}
            {{--                            <img src="/image/homepage/img-news.svg" class="news-img" alt=""/>--}}
            {{--                            <div style="padding: 10px 0px">--}}
            {{--                                <a class="news-item-title">--}}
            {{--                                    Nữ lãnh đạo Trần Thị Yali: "Giải thưởng Top 100 Nữ...--}}
            {{--                                </a>--}}
            {{--                            </div>--}}
            {{--                            <div class="news-item-desc">--}}
            {{--                                Doanh nhân Trần Thị Yali là một trong những cái tên được--}}
            {{--                                vinh danh tại giải th...--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div style="text-align: center; margin-top: 45px">--}}
            {{--                    <a class="button-all">Xem tất cả</a>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <!-- </div> -->
        </div>
    </section>
    @if(!empty(filter_static_option_value('home_page_brand_logo_section_status',$static_field_data)))
        <section class="system">
            <div class="system-header">Mạng lưới wlin</div>
            <div class="system-content slider">

                @foreach($all_brand_logo as $data)
                    <div class="slide">
                        <div style="text-align: center">
                            @if(!empty($data->url) )
                                    <?php
                                    $image_details = get_attachment_image_by_id($data->image, 'full');
                                    $urlLogo = Arr::get($image_details, 'img_url');
                                    ?>
                                <div style="height: 60px; display: flex; align-items: center">
                                    <a rel="canonical" href="{{$data->url}}">@endif
                                        <img style="display: flex; object-fit: contain" src="{{$urlLogo}}"
                                             width="100%"/>
                                        @if(!empty($data->url) )  </a>
                                </div>
                            @endif
                            <p class="system-content">{{$data->title}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif
    <template id="event-item">
        <div v-for="event in events" class="events-left-item">
            <div style="width: 10%">
                <p class="events-left-item-date">@{{event.day}}</p>
                <p class="events-left-item-month">Tháng @{{event.month}}</p>
            </div>
            <div class="events-left-item-2">
                <div class="events-left-item-2-img">
                    <img style="width: 100%" :src="event.image" alt=""/>
                </div>
                <div>
                    <div>
                        <p v-if="event.timeTo"
                           class="events-left-item-content">
                            Diễn ra vào lúc <span v-if="event.timeFrom">@{{  event.timeFrom }}</span> <span
                                    v-if="event.timeTo">- @{{ event.timeTo }}</span>
                        </p>
                        <p class="events-left-item-desc">
                            <a :href="`/events/${event.key}`"> @{{event.name}}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </template>
@stop
@push('vue')

    <script>
        const app = Vue.createApp({
            template: '#event-item',
            data() {
                return {
                    events: [],
                    paginate: {}
                }
            },
            methods: {
                async onGetList(params = {page: 1}) {
                    try {
                        const response = await API.EVENT.LIST(params);
                        this.events = response.data.map(item => {
                            const timeFrom = item.noi_dung.shift();
                            const timeTo = item.noi_dung.shift();
                            return {
                                key: item._id,
                                name: item.ten_su_kien,
                                day: getDay(item.ngay_su_kien, 'DD'),
                                month: getDay(item.ngay_su_kien, 'MM'),
                                timeFrom: timeFrom && getDay(timeFrom.thoi_gian, 'HH:ss'),
                                timeTo: timeTo && getDay(timeTo.thoi_gian, 'HH:ss'),
                                image: IMG(item.hinh_anh)
                            }
                        });
                    } catch (e) {
                        console.log("E", e);
                    }
                },
                async onChange(pageNum = 1) {
                    await this.onGetList({page: pageNum});
                }
            },
            async created() {
                await this.onGetList();
            },
        });
        app.mount('#list-event');
    </script>
@endpush
