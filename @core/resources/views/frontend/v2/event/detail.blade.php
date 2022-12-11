@extends('frontend.v2.layout')
@section('content')
    <?php
    $fromTime = Arr::get(Arr::first($event['noi_dung']), 'thoi_gian');
    $fromTime = date('H:s', strtotime($fromTime));
    $toTime = Arr::get(Arr::last($event['noi_dung']), 'thoi_gian');
    $toTime = date('H:s', strtotime($toTime));
    ?>
    <section class="event-detail">
        @include('frontend.v2.inc.path' , ['items' => [['title' => 'Sự kiện', 'href' => '/events'], ['title' => 'Chi tiết sự kiện']]])

        <div class="eventDetails-background my-4">
            <div class="container">
                <img class="img-fluid" src="https://api.wlin.com.vn{{Arr::get($event, 'hinh_anh')}}"
                     alt="{{Arr::get($event, 'ten_su_kien')}}">
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="duration">
                        <span class="tag">Sắp diễn ra</span>
                        <ul>
                            <li>Ngày diễn ra: {!! date('d/m/Y',strtotime(Arr::get($event,'ngay_su_kien'))) !!}</li>
                            <li>Thời gian diễn ra: {{$fromTime}} {{$toTime ? " - $toTime" :  ''}}</li>
                            <li>Diễn ra tại: {!! Arr::get($event,'dia_diem') !!}</li>
                        </ul>
                        <div class="d-flex">
                            <span>Chi sẻ</span>
                            <a><i class="fa fa-facebook-square"></i></a>
                            <a><i class="fa fa-instagram"></i></a>
                            <a><i class="fa fa-twitter-square"></i></a>
                            <a><i class="fa fa-pinterest-square"></i></a>
                            <a><i class="fa fa-linkedin-square"></i></a>
                        </div>
                        <a class="btn btn-outline-primary"><i class="fa fa-phone"></i> Đăng kí tham gia ngay</a>
                    </div>
                </div>
                <div class="col-md-8">
                    <h1 class="event-name">{{Arr::get($event,'ten_su_kien')}}</h1>
                    <div class="content">{!! Arr::get($event,'dien_giai') !!}</div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-md-12">
                    <h2 class="event-related">
                        Sự kiện liên quan khác
                    </h2>
                </div>
                <div class="col-12">
                    <div class="row" id="list-event"></div>

                    <a href="/events" class="btn mt-5 mx-auto radius-0 btn-outline-primary"> Xem tất cả</a>

                </div>
            </div>

        </div>
        <template id="event-item">
            <div v-for="event in events" class="col-md-4">
                <div class="event-item">
                    <div class="img">
                        <a :href="`/events/wlin/${event.key}`">
                            <img class="img-fluid" :src="event.image" alt=""/>
                        </a>
                    </div>
                    <div class="content">
                        <div class="time">
                            <p class="day">@{{event.day}}</p>
                            <p class="month">Tháng @{{event.month}}</p>
                        </div>
                        <div class="name">
                            <a class="text-3" :href="`/events/wlin/${event.key}`"> @{{event.name}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </section>
@stop

@push('vue')

    <script>
        const app = Vue.createApp({
            template: '#event-item',
            data() {
                return {
                    events: [],
                    paginate: {},
                }
            },
            methods: {
                async onGetList(params = {page: 1}) {
                    try {
                        const response = await API.EVENT.LIST(params);
                        const events = response.data.map(item => {
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
                        this.events = events.slice(0, 3);
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
