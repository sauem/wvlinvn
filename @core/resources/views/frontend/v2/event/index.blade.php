@extends('frontend.v2.layout')
@section("content")
    @include('frontend.v2.inc.path', ['items' => [['title' => 'Events']]])
    <section class="container mt-5">
        <div class="all-events" id="EventGroup">
        </div>
    </section>
    <template id="event-cate">
        <div v-for="group in events">
            <div class="all-events-header">
                <span class="all-events-title">SỰ KIỆN THÁNG @{{group.monthYear}}</span>
                <svg width="949" height="2" viewBox="0 0 949 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="0.5" width="949" height="1" fill="#C70A80"/>
                </svg>

            </div>
            <div v-if="group.items.length > 0" class="">
                <div class="table mb-0">
                    <div class="all-events-wrap">
                        <div v-for="event in group.items" class="all-events-item">
                            <div>
                                <p class="all-events-item-date">@{{event.day}}</p>
                                <p class="all-events-item-month">Tháng @{{ event.month }}</p>
                            </div>
                            <div class="all-events-item-2">
                                <div class="all-events-item-2-img">
                                    <img style="width: 100%" :src="event.image" :alt="event.name"/>
                                </div>
                                <div class="all-events-item-wrap-content">
                                    <p v-if="event.timeTo" class="all-events-item-content">
                                        Diễn ra vào lúc <span v-if="event.timeTo">@{{event.timeTo}}</span>
                                        <span v-if="event.timeFrom">- @{{event.timeFrom}}</span>
                                    </p>
                                    <p class="all-events-item-desc">
                                       <a :href="`/event/${event.key}`">
                                           @{{event.name}}
                                       </a>
                                    </p>
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
