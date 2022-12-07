@extends('frontend.v2.layout')
@section('content')
        <main>
            @include('frontend.v2.inc.path' , ['items' => [['title' => 'Sự kiện', 'href' => '/events'], ['title' => 'Chi tiết sự kiện']]])

            <section class="eventDetails-background mt-4">
                <div class="container">
                    <img class="img-fluid" src="https://api.wlin.com.vn{{Arr::get($detail, 'hinh_anh')}}" alt="{{Arr::get($detail, 'ten_su_kien')}}">
                </div>
            </section>

            <section class="eventDetails-info mt-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-3 eventDetails-info-background">
                            <div class="eventDetails-info-notify">
                                <span class="eventDetails-info-notify-text">Sắp diễn ra</span>
                            </div>
                            <div class="eventDetails-info-notify-details">
                                <div class="eventDetails-info-notify-details-text">Ngày diễn ra: 26/11/2022</div>
                                <div class="eventDetails-info-notify-details-text">Thời gian diễn ra: 8:00 - 14:00</div>
                                <div class="eventDetails-info-notify-details-text">Diễn ra tại: Lorem ipsum dolor sit
                                    amet - Địa chỉ ...</div>
                            </div>
                            <div class="eventDetails-info-notify-social">
                                <span class="eventDetails-info-notify-social-text">Chia sẻ: </span>
                                <img class="eventDetails-info-notify-social-icon"
                                    src="/image/event-details/facebook.svg" alt="">
                                <img class="eventDetails-info-notify-social-icon"
                                    src="/image/event-details/instagram.svg" alt="">
                                <img class="eventDetails-info-notify-social-icon" src="/image/event-details/twitter.svg"
                                    alt="">
                                <img class="eventDetails-info-notify-social-icon"
                                    src="/image/event-details/pinterest.svg" alt="">
                                <img class="eventDetails-info-notify-social-icon"
                                    src="/image/event-details/linkedin.svg" alt="">
                            </div>
                            <button class="eventDetails-info-notify-register">
                                <img class="eventDetails-info-notify-social-icon" src="/image/event-details/phone.svg"
                                    alt="">
                                <span class="eventDetails-info-notify-register-text">Đăng ký tham gia ngay</span>
                            </button>
                        </div>
                        <div class="col-sm-9 pl-sm-5">
                            <div class="eventDetails-info-title">
                                Tên sự kiện... NHÌN LẠI HÀNH TRÌNH 1 NĂM HOẠT ĐỘNG LIÊN MINH WLIN INTERCONTINENTAL
                            </div>
                            <div class="eventDetails-info-content mt-4">
                                Lorem ipsum dolor sit amet consectetur. Mi sit faucibus auctor vitae felis blandit
                                laoreet lacus. Eu ac vel tellus mauris justo.Lorem ipsum dolor sit amet consectetur. Mi
                                sit faucibus auctor vitae felis blandit laoreet lacus. Eu ac vel tellus mauris
                                justo.Lorem ipsum dolor sit amet consectetur. Mi sit faucibus auctor vitae felis blandit
                                laoreet lacus. Eu ac vel tellus mauris justo.Lorem ipsum dolor sit amet consectetur. Mi
                                sit faucibus auctor vitae felis blandit laoreet lacus Lorem ipsum dolor sit amet
                                consectetur. Mi sit faucibus auctor vitae felis blandit laoreet lacus. Eu ac vel tellus
                                mauris justo.Lorem ipsum dolor sit amet consectetur. Mi sit faucibus auctor vitae felis
                                blandit laoreet lacus. Eu ac vel tellus mauris justo.Lorem ipsum dolor sit amet
                                consectetur. Mi sit faucibus auctor vitae felis blandit laoreet lacus. Eu ac vel tellus
                                mauris justo.Lorem ipsum dolor sit amet consectetur. Mi sit faucibus auctor vitae felis
                                blandit laoreet lacus <br />
                                Lorem ipsum dolor sit amet consectetur. Mi sit faucibus auctor vitae felis blandit
                                laoreet lacus. Eu ac vel tellus mauris justo.Lorem ipsum dolor sit amet consectetur. Mi
                                sit faucibus auctor vitae felis blandit laoreet lacus. Eu ac vel tellus mauris
                                justo.Lorem ipsum dolor sit amet consectetur. Mi sit faucibus auctor vitae felis blandit
                                laoreet lacus. Eu ac vel tellus mauris justo.Lorem ipsum dolor sit amet consectetur. Mi
                                sit faucibus auctor vitae felis blandit laoreet lacus Lorem ipsum dolor sit amet
                                consectetur. Mi sit faucibus auctor vitae felis blandit laoreet lacus. Eu ac vel tellus
                                mauris justo.
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="eventDetails-other">
                <div class="container">
                    <div class="eventDetails-other-title">
                        <div>SỰ KIỆN LIÊN QUAN KHÁC</div>
                        <img src="/image/event-details/line.svg" alt="">
                    </div>
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-3 row-cols-xl-3">
                        <div class="col">
                            <div class="eventDetails-other-wrap">
                                <div class="eventDetails-other-img">
                                    <img style="width: 100%;" src="/image/homepage/img-events.svg" alt="" />
                                </div>
                                <div class="all-events-item mt-3    ">
                                    <div style="width: 100%;">
                                        <p class="all-events-item-date">26</p>
                                        <p class="all-events-item-month">Tháng 11</p>
                                    </div>
                                    <div class="eventDetails-other-content">
                                        <div class="eventDetails-other-content">
                                            <p class="all-events-item-desc eventDetails-other-desc">
                                                Goldsun Media Group đồng hành cùng sự thành công của giải thưởng Top 100
                                                Nữ lãnh đạo Việt Nam tỏa sáng toàn cầu 2022.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="eventDetails-other-wrap">
                                <div class="eventDetails-other-img">
                                    <img style="width: 100%;" src="/image/homepage/img-events.svg" alt="" />
                                </div>
                                <div class="all-events-item mt-3">
                                    <div style="width: 100%;">
                                        <p class="all-events-item-date">26</p>
                                        <p class="all-events-item-month">Tháng 11</p>
                                    </div>
                                    <div class="eventDetails-other-content">
                                        <div class="eventDetails-other-content">
                                            <p class="all-events-item-desc eventDetails-other-desc">
                                                Goldsun Media Group đồng hành cùng sự thành công của giải thưởng Top 100
                                                Nữ lãnh đạo Việt Nam tỏa sáng toàn cầu 2022.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="eventDetails-other-wrap">
                                <div class="eventDetails-other-img">
                                    <img style="width: 100%;" src="/image/homepage/img-events.svg" alt="" />
                                </div>
                                <div class="all-events-item mt-3    ">
                                    <div style="width: 100%;">
                                        <p class="all-events-item-date">26</p>
                                        <p class="all-events-item-month">Tháng 11</p>
                                    </div>
                                    <div class="eventDetails-other-content">
                                        <div class="eventDetails-other-content">
                                            <p class="all-events-item-desc eventDetails-other-desc">
                                                Goldsun Media Group đồng hành cùng sự thành công của giải thưởng Top 100
                                                Nữ lãnh đạo Việt Nam tỏa sáng toàn cầu 2022.
                                            </p>
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
            </section>

            <!-- <section class="container mt-5">
                <div class="all-events">
                    <div class="all-events-header">
                        <span class="all-events-title">SỰ KIỆN THÁNG 11/2022</span>
                        <img class="all-events-img" src="/image/all-events/line.svg" alt="">
                    </div>
                    <div class="">
                        <div class="table mb-0">
                            <div class="all-events-wrap">
                                <div class="all-events-item">
                                    <div>
                                        <p class="all-events-item-date">26</p>
                                        <p class="all-events-item-month">Tháng 11</p>
                                    </div>
                                    <div class="all-events-item-2">
                                        <div class="all-events-item-2-img">
                                            <img style="width: 100%" src="/image/homepage/img-events.svg" alt="" />
                                        </div>
                                        <div class="all-events-item-wrap-content">
                                            <p class="all-events-item-content">
                                                Diễn ra vào lúc 8:00 - 14:00
                                            </p>
                                            <p class="all-events-item-desc">
                                                Goldsun Media Group đồng hành cùng sự thành công của giải thưởng Top 100
                                                Nữ lãnh đạo Việt Nam tỏa sáng toàn cầu 2022.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="all-events-item">
                                    <div>
                                        <p class="all-events-item-date">26</p>
                                        <p class="all-events-item-month">Tháng 11</p>
                                    </div>
                                    <div class="all-events-item-2">
                                        <div class="all-events-item-2-img">
                                            <img style="width: 100%" src="/image/homepage/img-events.svg" alt="" />
                                        </div>
                                        <div class="all-events-item-wrap-content">
                                            <p class="all-events-item-content">
                                                Diễn ra vào lúc 8:00 - 14:00
                                            </p>
                                            <p class="all-events-item-desc">
                                                Goldsun Media Group đồng hành cùng sự thành công của giải thưởng Top 100
                                                Nữ lãnh đạo Việt Nam tỏa sáng toàn cầu 2022.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="all-events">
                    <div class="all-events-header">
                        <span class="all-events-title">SỰ KIỆN THÁNG 11/2022</span>
                        <img class="all-events-img" src="/image/all-events/line.svg" alt="">
                    </div>
                    <div class="">
                        <div class="table mb-0">
                            <div class="all-events-wrap">
                                <div class="all-events-item">
                                    <div>
                                        <p class="all-events-item-date">26</p>
                                        <p class="all-events-item-month">Tháng 11</p>
                                    </div>
                                    <div class="all-events-item-2">
                                        <div class="all-events-item-2-img">
                                            <img style="width: 100%" src="/image/homepage/img-events.svg" alt="" />
                                        </div>
                                        <div class="all-events-item-wrap-content">
                                            <p class="all-events-item-content">
                                                Diễn ra vào lúc 8:00 - 14:00
                                            </p>
                                            <p class="all-events-item-desc">
                                                Goldsun Media Group đồng hành cùng sự thành công của giải thưởng Top 100
                                                Nữ lãnh đạo Việt Nam tỏa sáng toàn cầu 2022.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="all-events-item">
                                    <div>
                                        <p class="all-events-item-date">26</p>
                                        <p class="all-events-item-month">Tháng 11</p>
                                    </div>
                                    <div class="all-events-item-2">
                                        <div class="all-events-item-2-img">
                                            <img style="width: 100%" src="/image/homepage/img-events.svg" alt="" />
                                        </div>
                                        <div class="all-events-item-wrap-content">
                                            <p class="all-events-item-content">
                                                Diễn ra vào lúc 8:00 - 14:00
                                            </p>
                                            <p class="all-events-item-desc">
                                                Goldsun Media Group đồng hành cùng sự thành công của giải thưởng Top 100
                                                Nữ lãnh đạo Việt Nam tỏa sáng toàn cầu 2022.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="all-events">
                    <div class="all-events-header">
                        <span class="all-events-title">SỰ KIỆN THÁNG 11/2022</span>
                        <img class="all-events-img" src="/image/all-events/line.svg" alt="">
                    </div>
                    <div class="">
                        <div class="table mb-0">
                            <div class="all-events-wrap">
                                <div class="all-events-item">
                                    <div>
                                        <p class="all-events-item-date">26</p>
                                        <p class="all-events-item-month">Tháng 11</p>
                                    </div>
                                    <div class="all-events-item-2">
                                        <div class="all-events-item-2-img">
                                            <img style="width: 100%" src="/image/homepage/img-events.svg" alt="" />
                                        </div>
                                        <div class="all-events-item-wrap-content">
                                            <p class="all-events-item-content">
                                                Diễn ra vào lúc 8:00 - 14:00
                                            </p>
                                            <p class="all-events-item-desc">
                                                Goldsun Media Group đồng hành cùng sự thành công của giải thưởng Top 100
                                                Nữ lãnh đạo Việt Nam tỏa sáng toàn cầu 2022.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="all-events-item">
                                    <div>
                                        <p class="all-events-item-date">26</p>
                                        <p class="all-events-item-month">Tháng 11</p>
                                    </div>
                                    <div class="all-events-item-2">
                                        <div class="all-events-item-2-img">
                                            <img style="width: 100%" src="/image/homepage/img-events.svg" alt="" />
                                        </div>
                                        <div class="all-events-item-wrap-content">
                                            <p class="all-events-item-content">
                                                Diễn ra vào lúc 8:00 - 14:00
                                            </p>
                                            <p class="all-events-item-desc">
                                                Goldsun Media Group đồng hành cùng sự thành công của giải thưởng Top 100
                                                Nữ lãnh đạo Việt Nam tỏa sáng toàn cầu 2022.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="all-events">
                    <div class="all-events-header">
                        <span class="all-events-title">SỰ KIỆN THÁNG 11/2022</span>
                        <img class="all-events-img" src="/image/all-events/line.svg" alt="">
                    </div>
                    <div class="">
                        <div class="table mb-0">
                            <div class="all-events-wrap">
                                <div class="all-events-item">
                                    <div>
                                        <p class="all-events-item-date">26</p>
                                        <p class="all-events-item-month">Tháng 11</p>
                                    </div>
                                    <div class="all-events-item-2">
                                        <div class="all-events-item-2-img">
                                            <img style="width: 100%" src="/image/homepage/img-events.svg" alt="" />
                                        </div>
                                        <div class="all-events-item-wrap-content">
                                            <p class="all-events-item-content">
                                                Diễn ra vào lúc 8:00 - 14:00
                                            </p>
                                            <p class="all-events-item-desc">
                                                Goldsun Media Group đồng hành cùng sự thành công của giải thưởng Top 100
                                                Nữ lãnh đạo Việt Nam tỏa sáng toàn cầu 2022.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="all-events-item">
                                    <div>
                                        <p class="all-events-item-date">26</p>
                                        <p class="all-events-item-month">Tháng 11</p>
                                    </div>
                                    <div class="all-events-item-2">
                                        <div class="all-events-item-2-img">
                                            <img style="width: 100%" src="/image/homepage/img-events.svg" alt="" />
                                        </div>
                                        <div class="all-events-item-wrap-content">
                                            <p class="all-events-item-content">
                                                Diễn ra vào lúc 8:00 - 14:00
                                            </p>
                                            <p class="all-events-item-desc">
                                                Goldsun Media Group đồng hành cùng sự thành công của giải thưởng Top 100
                                                Nữ lãnh đạo Việt Nam tỏa sáng toàn cầu 2022.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
        </main>
@stop
