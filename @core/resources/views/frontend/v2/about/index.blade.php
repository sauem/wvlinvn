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

        <section class="introduce-partners py-5" style="background-image: url("{{_IMG(option('about_partner_bg'))}}")">
        <div class="container">
            <div class="introduce-partners-wrap">
                <img src="{{_IMG(option('about_partner_bg'))}}" class="img-fluid d-none d-md-block"/>
                <div class="row align-items-center">
                    <div class="col-sm-3">
                        <div class="introduce-partners-title">
                            {{option('about_partner_title')}}
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="introduce-partners-content">
                            {!! option('about_partner_content') !!}
                        </div>
                    </div>
                </div>
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
                                    {{option('about_criteria_right_title')}}
                                </div>
                                <ul class="introduce-criteria-content-text"
                                    style="list-style: disc !important; margin-left: 30px !important;">
                                    {!! option('about_criteria_right_content') !!}
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="introduce-criteria-img">
                                <img class="img-fluid" src="{{_IMG(option('about_criteria_right_bg'))}}" alt=""/>
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
                                <img class="img-fluid" src="{{_IMG(option('about_criteria_left_bg'))}}" alt=""/>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="introduce-criteria-content">
                                <div class="introduce-criteria-content-title">
                                    {!! option('about_criteria_left_title') !!}
                                </div>
                                <ul class="introduce-criteria-content-text"
                                    style="list-style: disc !important; margin-left: 30px !important;">
                                    {!! option('about_criteria_left_content') !!}
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
                    <div class="introduce-structure-title">{{option('about_structure_title')}}</div>
                </div>
                <div class="introduce-structure-content-img">
                    <img src="{{_IMG(option('about_structure_img'))}}" class="img-fluid">
                </div>
            </div>
        </section>

        <section class="introduce-role">
            <div class="container">
                <div class="introduce-role-header">
                    <div class="introduce-role-title">{{option('about_role_title')}}</div>
                </div>
                <div class="introduce-role-content-img">
                    <img src="{{_IMG(option('about_role_img'))}}" class="img-fluid">
                </div>
            </div>
        </section>

        @include('frontend.v2.block.section3', [
        'categories' => $blog_categories,
        'title' => 'CÁC NGÀNH HÀNG TRONG CƠ CẤU WLIN'])

    </main>
@stop
