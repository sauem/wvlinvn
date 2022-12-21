@extends('frontend.v2.layout')
@section("content")
    @include('frontend.v2.inc.slider',['sliders' => $all_header_slider])
    @include('frontend.v2.block.section1', ['about' => $static_field_data, 'lang' => $user_select_lang_slug])
    @include('frontend.v2.block.section2', ['videos' => $all_videos, 'lang' => $user_select_lang_slug])
    @include('frontend.v2.block.section3', ['categories' => $blog_categories, 'lang' => $user_select_lang_slug])
    @include('frontend.v2.block.section4', ['members' => $members, 'lang' => $user_select_lang_slug])
    @include('frontend.v2.block.section5', ['blogs' => $all_blog, 'lang' => $user_select_lang_slug])
    @include('frontend.v2.block.section7', ['breakingNews' => $breakingNews ?? [], 'lang' => $user_select_lang_slug])
    @include('frontend.v2.block.section6', ['brands' => $all_brand_logo, 'lang' => $user_select_lang_slug])
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
