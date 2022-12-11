@extends('frontend.v2.layout')
@section("content")
    @include('frontend.v2.inc.path', ['items' => [['title' => 'Events']]])
    <section class="container mt-5">
        <div class="all-events" id="EventGroup">
        </div>
    </section>
    <template id="event-cate">
        <div v-for="group in events">
            <div class="py-4">
                <div class="header d-flex">
                    <span class="title">SỰ KIỆN THÁNG @{{group.monthYear}}</span>
                </div>
                <div v-if="group.items.length > 0" class="row justify-content-center">
                    <div class="col-md-10">
                        <div v-for="event in group.items" class="event-item row align-items-center">
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
                    </div>
                </div>
            </div>
        </div>
    </template>
@stop
@push('vue')
    <script>
        const app = Vue.createApp({
            template: '#event-cate',
            data() {
                return {
                    events: {},
                    paginate: {}
                }
            },
            methods: {
                async onGetList(params = {page: 1}) {
                    try {
                        const response = await API.EVENT.LIST(params);
                        let events = response.data.map(item => {
                            const timeFrom = item.noi_dung.shift();
                            const timeTo = item.noi_dung.shift();
                            return {
                                key: item._id,
                                name: item.ten_su_kien,
                                day: getDay(item.ngay_su_kien, 'DD'),
                                month: getDay(item.ngay_su_kien, 'MM'),
                                monthYear: getDay(item.ngay_su_kien, 'MM/YYYY'),
                                timeFrom: timeFrom && getDay(timeFrom.thoi_gian, 'HH:ss'),
                                timeTo: timeTo && getDay(timeTo.thoi_gian, 'HH:ss'),
                                image: IMG(item.hinh_anh)
                            }
                        });
                        events = groupBy(events, 'monthYear');
                        this.events = Object.entries(events).map(item => ({
                            monthYear: item.shift(),
                            items: item.pop()
                        }));
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
        app.mount('#EventGroup')
    </script>
@endpush
