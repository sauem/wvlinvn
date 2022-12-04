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

    <section class="talkshow">
        <div class="container">
            <div>
                <label class="talkshow-header">WLIN TV - WOMEN LEADER TALKSHOW</label>
            </div>
            <div class="row row-mobile">
                <div class="owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item">
                                <div class="slide-item">
                                    <img src="/image/homepage/img-talkshow.svg" alt=""/>
                                    <p class="talkshow-content">
                                        WOMEN LEADER TALK - NỮ LÃNH ĐẠO TÀI NĂNG - TIẾN SĨ
                                        NGUYỄN THU HƯƠNG
                                    </p>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="slide-item">
                                    <img src="/image/homepage/img-talkshow.svg" alt=""/>
                                    <p class="talkshow-content">
                                        WOMEN LEADER TALK - NỮ LÃNH ĐẠO TÀI NĂNG - TIẾN SĨ
                                        NGUYỄN THU HƯƠNG
                                    </p>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="slide-item">
                                    <img src="/image/homepage/img-talkshow.svg" alt=""/>
                                    <p class="talkshow-content">
                                        WOMEN LEADER TALK - NỮ LÃNH ĐẠO TÀI NĂNG - TIẾN SĨ
                                        NGUYỄN THU HƯƠNG
                                    </p>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="slide-item">
                                    <img src="/image/homepage/img-talkshow.svg" alt=""/>
                                    <p class="talkshow-content">
                                        WOMEN LEADER TALK - NỮ LÃNH ĐẠO TÀI NĂNG - TIẾN SĨ
                                        NGUYỄN THU HƯƠNG
                                    </p>
                                </div>
                            </div>
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
    <section class="world">
        <div>
            <label class="world-header">WLIN WORLD</label>
        </div>
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-5"
             style="justify-content: center">
            <div class="col mb-4">
                <a href="">
                    <div class="world-item">
                        <img class="world-item-img" src="/image/homepage/world/WLINWorld_education.svg" alt=""/>
                        <p class="world-item-content">GIÁO DỤC - ĐÀO TẠO</p>
                    </div>
                </a>
            </div>
            <div class="col mb-4">
                <a href="">
                    <div class="world-item">
                        <img class="world-item-img" src="/image/homepage/world/WLINWorld_commerce.svg" alt=""/>
                        <p class="world-item-content">THƯƠNG MẠI - XUẤT NHẬP KHẨU</p>
                    </div>
                </a>
            </div>
            <div class="col mb-4">
                <a href="">
                    <div class="world-item">
                        <img class="world-item-img" src="/image/homepage/world/WLINWorld_health.svg" alt=""/>
                        <p class="world-item-content">SỨC KHỎE - THỂ THAO</p>
                    </div>
                </a>
            </div>
            <div class="col mb-4">
                <a href="">
                    <div class="world-item">
                        <img class="world-item-img" src="/image/homepage/world/WLINWorld_travel.svg" alt=""/>
                        <p class="world-item-content">
                            DU LỊCH - NHÀ HÀNG - KHÁCH SẠN - ĐỒ UỐNG
                        </p>
                    </div>
                </a>
            </div>
            <div class="col mb-4">
                <a href="">
                    <div class="world-item">
                        <img class="world-item-img" src="/image/homepage/world/WLINWorld_realEstate.svg" alt=""/>
                        <p class="world-item-content">
                            BẤT ĐỘNG SẢN - XÂY DỰNG - NỘI NGOẠI THẤT
                        </p>
                    </div>
                </a>
            </div>
            <div class="col mb-4">
                <a href="">
                    <div class="world-item">
                        <img class="world-item-img" src="/image/homepage/world/WLINWorld_beautify.svg" alt=""/>
                        <p class="world-item-content">LÀM ĐẸP</p>
                    </div>
                </a>
            </div>
            <div class="col mb-4">
                <a href="">
                    <div class="world-item">
                        <img class="world-item-img" src="/image/homepage/world/WLINWorld_consulting.svg" alt=""/>
                        <p class="world-item-content">TƯ VẤN, HỖ TRỢ DOANH NGHIỆP</p>
                    </div>
                </a>
            </div>
            <div class="col mb-4">
                <a href="">
                    <div class="world-item">
                        <img class="world-item-img" src="/image/homepage/world/WLINWorld_fashion.svg" alt=""/>
                        <p class="world-item-content">THỜI TRANG - PHỤ KIỆN</p>
                    </div>
                </a>
            </div>
            <div class="col mb-4">
                <a href="">
                    <div class="world-item">
                        <img class="world-item-img" src="/image/homepage/world/WLINWorld_techonology.svg" alt=""/>
                        <p class="world-item-content">
                            CÔNG NGHỆ THÔNG TIN, TRUYỀN THÔNG - SỰ KIỆN, MAKETING
                        </p>
                    </div>
                </a>
            </div>
            <div class="col mb-4">
                <a href="">
                    <div class="world-item">
                        <img class="world-item-img" src="/image/homepage/world/WLINWorld_other.svg" alt=""/>
                        <p class="world-item-content">CÁC NGÀNH KHÁC</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="membership">
        <div class="container">
            <div>
                <label class="membership-header">HỘI VIÊN WLIN</label>
            </div>
            <div class="row row-mobile">
                <div class="owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item members">
                                <div class="slide-item">
                                    <img src="/image/homepage/img-section-members.svg" alt=""/>
                                    <p class="membership-content">
                                        Nữ lãnh đạo Nykky Đỗ - Giám đốc công ty TNHH JEJ: “Chú
                                        trọng đến uy tín ...
                                    </p>
                                </div>
                            </div>
                            <div class="owl-item members">
                                <div class="slide-item">
                                    <img src="/image/homepage/img-section-members.svg" alt=""/>
                                    <p class="membership-content">
                                        Nữ lãnh đạo Nykky Đỗ - Giám đốc công ty TNHH JEJ: “Chú
                                        trọng đến uy tín ...
                                    </p>
                                </div>
                            </div>
                            <div class="owl-item members">
                                <div class="slide-item">
                                    <img src="/image/homepage/img-section-members.svg" alt=""/>
                                    <p class="membership-content">
                                        Nữ lãnh đạo Nykky Đỗ - Giám đốc công ty TNHH JEJ: “Chú
                                        trọng đến uy tín ...
                                    </p>
                                </div>
                            </div>
                            <div class="owl-item members">
                                <div class="slide-item">
                                    <img src="/image/homepage/img-section-members.svg" alt=""/>
                                    <p class="membership-content">
                                        Nữ lãnh đạo Nykky Đỗ - Giám đốc công ty TNHH JEJ: “Chú
                                        trọng đến uy tín ...
                                    </p>
                                </div>
                            </div>
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

    <section class="section-news">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">
            <!-- <div class="events" style="height: 700px"> -->
            <div class="col col-news-1">
                <div class="events-left-header">
                    <i class="fa fa-star" style="color: #ffc122; font-size: 20px"></i>
                    <span class="events-left-title">LỊCH SỰ KIỆN SẮP TỚI</span>
                </div>
                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                    <div class="table mb-0">
                        <div>
                            <div class="events-left-item">
                                <div style="width: 10%">
                                    <p class="events-left-item-date">26</p>
                                    <p class="events-left-item-month">Tháng 11</p>
                                </div>
                                <div class="events-left-item-2">
                                    <div class="events-left-item-2-img">
                                        <img style="width: 100%" src="/image/homepage/img-events.svg" alt=""/>
                                    </div>
                                    <div>
                                        <div>
                                            <p class="events-left-item-content">
                                                Diễn ra vào lúc 8:00 - 14:00
                                            </p>
                                            <p class="events-left-item-desc">
                                                Goldsun Media Group đồng hành cùng sự thành công của
                                                giải thưởng Top 100 Nữ...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="events-left-item">
                                <div style="width: 10%">
                                    <p class="events-left-item-date">26</p>
                                    <p class="events-left-item-month">Tháng 11</p>
                                </div>
                                <div class="events-left-item-2">
                                    <div class="events-left-item-2-img">
                                        <img style="width: 100%" src="/image/homepage/img-events.svg" alt=""/>
                                    </div>
                                    <div>
                                        <div>
                                            <p class="events-left-item-content">
                                                Diễn ra vào lúc 8:00 - 14:00
                                            </p>
                                            <p class="events-left-item-desc">
                                                Goldsun Media Group đồng hành cùng sự thành công của
                                                giải thưởng Top 100 Nữ...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="events-left-item">
                                <div style="width: 10%">
                                    <p class="events-left-item-date">26</p>
                                    <p class="events-left-item-month">Tháng 11</p>
                                </div>
                                <div class="events-left-item-2">
                                    <div class="events-left-item-2-img">
                                        <img style="width: 100%" src="/image/homepage/img-events.svg" alt=""/>
                                    </div>
                                    <div>
                                        <div>
                                            <p class="events-left-item-content">
                                                Diễn ra vào lúc 8:00 - 14:00
                                            </p>
                                            <p class="events-left-item-desc">
                                                Goldsun Media Group đồng hành cùng sự thành công của
                                                giải thưởng Top 100 Nữ...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="events-left-item">
                                <div style="width: 10%">
                                    <p class="events-left-item-date">26</p>
                                    <p class="events-left-item-month">Tháng 11</p>
                                </div>
                                <div class="events-left-item-2">
                                    <div class="events-left-item-2-img">
                                        <img style="width: 100%" src="/image/homepage/img-events.svg" alt=""/>
                                    </div>
                                    <div>
                                        <div>
                                            <p class="events-left-item-content">
                                                Diễn ra vào lúc 8:00 - 14:00
                                            </p>
                                            <p class="events-left-item-desc">
                                                Goldsun Media Group đồng hành cùng sự thành công của
                                                giải thưởng Top 100 Nữ...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="text-align: center; margin-top: 45px">
                    <a class="button-all">Xem tất cả</a>
                </div>
            </div>
            <div class="col mt-sm-0 mt-5 col-news-2">
                <div class="events-header">TIN TỨC MỚI NHẤT</div>
                <div class="events-item">
                    <div class="events-img-wrap">
                        <img class="events-img" src="/image/homepage/img-news-new.svg" alt=""/>
                    </div>
                    <div>
                        <a class="events-item-title">Nữ lãnh đạo Trần Thị Yali: "Giải thưởng Top 100 Nữ lãnh đạo
                            Việt Nam tỏa sáng toàn cầ...</a>
                        <p class="events-item-desc">
                            Doanh nhân Trần Thị Yali là một trong những cái tên được
                            vinh danh tại giải thưởng “Top 100 Nữ lãnh đạo Việt Nam tỏa
                            sáng toàn cầu 2022”, trong...
                        </p>
                    </div>
                </div>
                <div class="events-item">
                    <div class="events-img-wrap">
                        <img class="events-img" src="/image/homepage/img-news-new.svg" alt=""/>
                    </div>
                    <div>
                        <a class="events-item-title">Nữ lãnh đạo Trần Thị Yali: "Giải thưởng Top 100 Nữ lãnh đạo
                            Việt Nam tỏa sáng toàn cầ...</a>
                        <p class="events-item-desc">
                            Doanh nhân Trần Thị Yali là một trong những cái tên được
                            vinh danh tại giải thưởng “Top 100 Nữ lãnh đạo Việt Nam tỏa
                            sáng toàn cầu 2022”, trong...
                        </p>
                    </div>
                </div>
                <div class="events-item">
                    <div class="events-img-wrap">
                        <img class="events-img" src="/image/homepage/img-news-new.svg" alt=""/>
                    </div>
                    <div>
                        <a class="events-item-title">Nữ lãnh đạo Trần Thị Yali: "Giải thưởng Top 100 Nữ lãnh đạo
                            Việt Nam tỏa sáng toàn cầ...</a>
                        <p class="events-item-desc">
                            Doanh nhân Trần Thị Yali là một trong những cái tên được
                            vinh danh tại giải thưởng “Top 100 Nữ lãnh đạo Việt Nam tỏa
                            sáng toàn cầu 2022”, trong...
                        </p>
                    </div>
                </div>
                <div class="events-item">
                    <div class="events-img-wrap">
                        <img class="events-img" src="/image/homepage/img-news-new.svg" alt=""/>
                    </div>
                    <div>
                        <a class="events-item-title">Nữ lãnh đạo Trần Thị Yali: "Giải thưởng Top 100 Nữ lãnh đạo
                            Việt Nam tỏa sáng toàn cầ...</a>
                        <p class="events-item-desc">
                            Doanh nhân Trần Thị Yali là một trong những cái tên được
                            vinh danh tại giải thưởng “Top 100 Nữ lãnh đạo Việt Nam tỏa
                            sáng toàn cầu 2022”, trong...
                        </p>
                    </div>
                </div>
            </div>
            <div class="col col-news-3">
                <div class="news-header">TIN TỨC NỔI BẬT</div>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 my-4">
                    <div class="col my-3">
                        <div class="news-item">
                            <img src="/image/homepage/img-news.svg" class="news-img" alt=""/>
                            <div style="padding: 10px 0px">
                                <a class="news-item-title">
                                    Nữ lãnh đạo Trần Thị Yali: "Giải thưởng Top 100 Nữ...
                                </a>
                            </div>
                            <div class="news-item-desc">
                                Doanh nhân Trần Thị Yali là một trong những cái tên được
                                vinh danh tại giải th...
                            </div>
                        </div>
                    </div>
                    <div class="col my-3">
                        <div class="news-item">
                            <img src="/image/homepage/img-news.svg" class="news-img" alt=""/>
                            <div style="padding: 10px 0px">
                                <a class="news-item-title">
                                    Nữ lãnh đạo Trần Thị Yali: "Giải thưởng Top 100 Nữ...
                                </a>
                            </div>
                            <div class="news-item-desc">
                                Doanh nhân Trần Thị Yali là một trong những cái tên được
                                vinh danh tại giải th...
                            </div>
                        </div>
                    </div>
                    <div class="col my-3">
                        <div class="news-item">
                            <img src="/image/homepage/img-news.svg" class="news-img" alt=""/>
                            <div style="padding: 10px 0px">
                                <a class="news-item-title">
                                    Nữ lãnh đạo Trần Thị Yali: "Giải thưởng Top 100 Nữ...
                                </a>
                            </div>
                            <div class="news-item-desc">
                                Doanh nhân Trần Thị Yali là một trong những cái tên được
                                vinh danh tại giải th...
                            </div>
                        </div>
                    </div>
                    <div class="col my-3">
                        <div class="news-item">
                            <img src="/image/homepage/img-news.svg" class="news-img" alt=""/>
                            <div style="padding: 10px 0px">
                                <a class="news-item-title">
                                    Nữ lãnh đạo Trần Thị Yali: "Giải thưởng Top 100 Nữ...
                                </a>
                            </div>
                            <div class="news-item-desc">
                                Doanh nhân Trần Thị Yali là một trong những cái tên được
                                vinh danh tại giải th...
                            </div>
                        </div>
                    </div>
                </div>
                <div style="text-align: center; margin-top: 45px">
                    <a class="button-all">Xem tất cả</a>
                </div>
            </div>
            <div class="col col-news-4">
                <div class="news-header">TIN TỨC NỔI BẬT</div>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 my-4">
                    <div class="col my-3">
                        <div class="news-item">
                            <img src="/image/homepage/img-news.svg" class="news-img" alt=""/>
                            <div style="padding: 10px 0px">
                                <a class="news-item-title">
                                    Nữ lãnh đạo Trần Thị Yali: "Giải thưởng Top 100 Nữ...
                                </a>
                            </div>
                            <div class="news-item-desc">
                                Doanh nhân Trần Thị Yali là một trong những cái tên được
                                vinh danh tại giải th...
                            </div>
                        </div>
                    </div>
                    <div class="col my-3">
                        <div class="news-item">
                            <img src="/image/homepage/img-news.svg" class="news-img" alt=""/>
                            <div style="padding: 10px 0px">
                                <a class="news-item-title">
                                    Nữ lãnh đạo Trần Thị Yali: "Giải thưởng Top 100 Nữ...
                                </a>
                            </div>
                            <div class="news-item-desc">
                                Doanh nhân Trần Thị Yali là một trong những cái tên được
                                vinh danh tại giải th...
                            </div>
                        </div>
                    </div>
                    <div class="col my-3">
                        <div class="news-item">
                            <img src="/image/homepage/img-news.svg" class="news-img" alt=""/>
                            <div style="padding: 10px 0px">
                                <a class="news-item-title">
                                    Nữ lãnh đạo Trần Thị Yali: "Giải thưởng Top 100 Nữ...
                                </a>
                            </div>
                            <div class="news-item-desc">
                                Doanh nhân Trần Thị Yali là một trong những cái tên được
                                vinh danh tại giải th...
                            </div>
                        </div>
                    </div>
                    <div class="col my-3">
                        <div class="news-item">
                            <img src="/image/homepage/img-news.svg" class="news-img" alt=""/>
                            <div style="padding: 10px 0px">
                                <a class="news-item-title">
                                    Nữ lãnh đạo Trần Thị Yali: "Giải thưởng Top 100 Nữ...
                                </a>
                            </div>
                            <div class="news-item-desc">
                                Doanh nhân Trần Thị Yali là một trong những cái tên được
                                vinh danh tại giải th...
                            </div>
                        </div>
                    </div>
                </div>
                <div style="text-align: center; margin-top: 45px">
                    <a class="button-all">Xem tất cả</a>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </section>

    <section class="system">
        <div class="system-header">Mạng lưới wlin</div>
        <div class="system-content slider">
            <div class="slide">
                <div style="text-align: center">
                    <img src="/image/homepage/wlin_item1.svg"
                         style="width: 130px !important; height: 130px !important"/>
                    <p class="system-content">WLIN MALAYSIA</p>
                </div>
            </div>
            <div class="slide">
                <div style="text-align: center">
                    <img src="/image/homepage/wlin_item2.svg"
                         style="width: 130px !important; height: 130px !important"/>
                    <p class="system-content">WLIN ROSE</p>
                </div>
            </div>
            <div class="slide">
                <div style="text-align: center">
                    <img src="/image/homepage/wlin_item3.svg"
                         style="width: 130px !important; height: 130px !important"/>
                    <p class="system-content">WLIN PIONEER EU+</p>
                </div>
            </div>
            <div class="slide">
                <div style="text-align: center">
                    <img src="/image/homepage/wlin_item2.svg"
                         style="width: 130px !important; height: 130px !important"/>
                    <p class="system-content">WLIN ROSE</p>
                </div>
            </div>
            <div class="slide">
                <div style="text-align: center">
                    <img src="/image/homepage/wlin_item4.svg"
                         style="width: 130px !important; height: 130px !important"/>
                    <p class="system-content">WLIN EMERALD</p>
                </div>
            </div>
            <div class="slide">
                <div style="text-align: center">
                    <img src="/image/homepage/wlin_item5.svg"
                         style="width: 130px !important; height: 130px !important"/>
                </div>
                <p class="system-content">WLIN SOCIAL CONNECT</p>
            </div>
            <div class="slide">
                <div style="text-align: center">
                    <img src="/image/homepage/wlin_item6.svg"
                         style="width: 130px !important; height: 130px !important"/>
                    <p class="system-content">WLIN HAPPY QUEEN</p>
                </div>
            </div>
        </div>
    </section>
@stop
