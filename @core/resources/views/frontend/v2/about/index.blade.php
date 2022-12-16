@extends('frontend.v2.layout')
@section('content')
    @php
        $lang = get_user_lang();
    @endphp
    <main>
        <section class="introduce-about">
            <div class="container">
                <div class="introduce-about-title">{{option('about_title')}}</div>
                <div class="row introduce-row-mobile">
                    <div class="col-sm-6 col-xs-9 introduce-about-video">
                        <iframe width="100%" height="350"
                                src="https://www.youtube.com/embed/{{option('about_video', $lang)}}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div class="col-sm-6 col-xs-9 about-content">
                        <div class="introduce-about-desc">
                            {!! option('about_desc') !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="introduce-value">
            <div class="container">
                <div
                        class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-3 row-cols-xl-3 mb-4 justify-content-center">
                    <div class="col mb-4">

                        <div class="introduce-value-card">
                            <div class="introduce-value-card-img">
                                <img src="{{_IMG(option('about_vision_img'))}}" alt=""/>
                            </div>
                            <div class="introduce-value-card-title">
                                <div class="">{{option('about_vision_title')}}</div>
                                <svg width="100" height="3" viewBox="0 0 100 3" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect y="0.447998" width="100" height="2" fill="#79018C"/>
                                </svg>
                            </div>
                            <div class="introduce-value-card-desc">
                                {{option('about_vision_content')}}
                            </div>
                        </div>

                    </div>
                    <div class="col mb-4">
                        <div class="introduce-value-card">
                            <div class="introduce-value-card-img">
                                <img src="{{_IMG(option('about_mission_img'))}}" alt=""/>
                            </div>
                            <div class="introduce-value-card-title">
                                <div>{{option('about_mission_title')}}</div>
                                <svg width="100" height="3" viewBox="0 0 100 3" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect y="0.447998" width="100" height="2" fill="#79018C"/>
                                </svg>
                            </div>
                            <div class="introduce-value-card-desc">
                                {{option('about_mission_content')}}
                            </div>
                        </div>

                    </div>
                    <div class="col mb-4">
                        <div class="introduce-value-card">
                            <div class="introduce-value-card-img">
                                <img src="{{_IMG(option('about_value_img'))}}" alt=""/>
                            </div>
                            <div class="introduce-value-card-title">
                                <div>{{option('about_value_title')}}</div>
                                <svg width="100" height="3" viewBox="0 0 100 3" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect y="0.447998" width="100" height="2" fill="#79018C"/>
                                </svg>
                            </div>
                            <div class="introduce-value-card-desc">
                                {{option('about_value_content')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="introduce-partners">
            <div class="container">
                <div class="introduce-partners-wrap d-none d-lg-block">
                    <div class="row align-items-center">
                        <div class="col-sm-3">
                            <div class="introduce-partners-title">
                                WLIN PARTNERS - HỌ LÀ AI?
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="introduce-partners-content">
                                WLIN hiểu rằng phụ nữ đóng vai trò vô cùng quan trọng trong việc giữ gìn hạnh phúc gia
                                đình, trong
                                việc nuôi dạy con cái và đóng góp không nhỏ vào sự phát triển của cộng đồng trong nước
                                cũng như toàn
                                thế giới. Đối với phụ nữ điều họ quan tâm không chỉ là thành công trong công việc mà còn
                                phải cảm thấy
                                hạnh phúc trong cuộc sống và khi họ hạnh phúc họ sẽ làm cả thế giới hạnh phúc.<br/>
                                Do vậy WLIN luôn tạo ra một môi trường thân thiện, mang tính gắn kết cao giữa các thành
                                viên trong
                                mạng lưới để họ có khả năng phát triển được các mối quan hệ cho bản thân nhằm giúp cho
                                công việc được
                                thuận lợi và cuộc sống thêm thú vị.<br/>
                                Bạn sẽ không thể thành công nếu thiếu sự hỗ trợ của bạn bè và bạn sẽ không thể hạnh phúc
                                nếu đơn độc,
                                do vậy khi tham gia WLIN bạn sẽ chủ động kết nối với những người phụ nữ khác trong mạng
                                lưới để thành
                                công hơn và hạnh phúc hơn.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="introduce-partners-moblie mt-3 d-block d-sm-none">
            <div class="container ">
                <div class="introduce-partners-title">
                    WLIN PARTNERS - HỌ LÀ AI?
                </div>
                <div class="introduce-partners-content">
                    WLIN hiểu rằng phụ nữ đóng vai trò vô cùng quan trọng trong việc giữ gìn hạnh phúc gia đình, trong
                    việc nuôi
                    dạy con cái và đóng góp không nhỏ vào sự phát triển của cộng đồng trong nước cũng như toàn thế giới.
                    Đối với
                    phụ nữ điều họ quan tâm không chỉ là thành công trong công việc mà còn phải cảm thấy hạnh phúc trong
                    cuộc
                    sống và khi họ hạnh phúc họ sẽ làm cả thế giới hạnh phúc.<br/>
                    Do vậy WLIN luôn tạo ra một môi trường thân thiện, mang tính gắn kết cao giữa các thành viên trong
                    mạng lưới
                    để họ có khả năng phát triển được các mối quan hệ cho bản thân nhằm giúp cho công việc được thuận
                    lợi và
                    cuộc sống thêm thú vị.<br/>
                    Bạn sẽ không thể thành công nếu thiếu sự hỗ trợ của bạn bè và bạn sẽ không thể hạnh phúc nếu đơn
                    độc, do vậy
                    khi tham gia WLIN bạn sẽ chủ động kết nối với những người phụ nữ khác trong mạng lưới để thành công
                    hơn và
                    hạnh phúc hơn.
                </div>
            </div>
        </section>

        <section class="introduce-criteria">
            <div class="container">
                <div class="introduce-criteria-wrap">
                    <div class="row align-items-center introduce-criteria-row-mobile">
                        <div class="col-sm-6">
                            <div class="introduce-criteria-content">
                                <div class="introduce-criteria-content-title">
                                    TIÊU CHÍ TRỞ THÀNH HỘI VIÊN WLIN
                                </div>
                                <ul class="introduce-criteria-content-text"
                                    style="list-style: disc !important; margin-left: 30px !important;">
                                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                                    <li>Lectus sed sodales eget id commodo in venenatis.</li>
                                    <li>Enim mattis mauris quis nisl facilisis ac eget feugiat risus.</li>
                                    <li>Fames morbi pharetra id pellentesque est vitae lacus.</li>
                                    <li>Ipsum enim nunc varius quis.</li>
                                    <li>Cras justo ornare lectus purus maecenas ac dui.</li>
                                    <li>Velit mus interdum sagittis varius urna lectus eget.</li>
                                    <li>Magna suscipit sit gravida risus dignissim.</li>
                                    <li>Feugiat velit ultricies imperdiet bibendum sagittis non turpis.</li>
                                    <li>Nunc odio vulputate vitae enim eu posuere.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="introduce-criteria-img">
                                <img src="/image/introduce/criteria.svg" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="introduce-criteria">
            <div class="container">
                <div class="introduce-criteria-wrap">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="introduce-criteria-img">
                                <img src="/image/introduce/criteria.svg" alt=""/>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="introduce-criteria-content">
                                <div class="introduce-criteria-content-title">
                                    CÁC LỢI ÍCH KHI THAM GIA MẠNG LƯỚI
                                </div>
                                <ul class="introduce-criteria-content-text"
                                    style="list-style: disc !important; margin-left: 30px !important;">
                                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                                    <li>Lectus sed sodales eget id commodo in venenatis.</li>
                                    <li>Enim mattis mauris quis nisl facilisis ac eget feugiat risus.</li>
                                    <li>Fames morbi pharetra id pellentesque est vitae lacus.</li>
                                    <li>Ipsum enim nunc varius quis.</li>
                                    <li>Cras justo ornare lectus purus maecenas ac dui.</li>
                                    <li>Velit mus interdum sagittis varius urna lectus eget.</li>
                                    <li>Magna suscipit sit gravida risus dignissim.</li>
                                    <li>Feugiat velit ultricies imperdiet bibendum sagittis non turpis.</li>
                                    <li>Nunc odio vulputate vitae enim eu posuere.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="introduce-structure">
            <div class="container">
                <div class="introduce-structure-header">
                    <img class="introduce-structure-img" src="/image/introduce/line.svg" alt="">
                    <div class="introduce-structure-title">CƠ CẤU MẠNG LƯỚI WLIN</div>
                    <img class="introduce-structure-img" src="/image/introduce/line.svg" alt="">
                </div>
                <div class="introduce-structure-content-img">
                    <img class="mt-5" src="/image/introduce/structure.png" alt="">
                </div>
            </div>
        </section>

        <section class="introduce-role">
            <div class="container">
                <div class="introduce-role-header">
                    <img class="introduce-role-img" src="/image/introduce/line.svg" alt="">
                    <div class="introduce-role-title">VAI TRÒ VỊ TRÍ BAN ĐIỀU HÀNH</div>
                    <img class="introduce-role-img" src="/image/introduce/line.svg" alt="">
                </div>
                <div class="introduce-role-content-img">
                    <img class="mt-5" src="/image/introduce/role.png" alt="">
                </div>
            </div>
        </section>

        <section class="world introduce-world">
            <div>
                <label class="world-header introduce-world-header">CÁC NGÀNH HÀNG TRONG CƠ CẤU WLIN</label>
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

    </main>
@stop
