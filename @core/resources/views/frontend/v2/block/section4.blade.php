@isset($members)
    <section class="py-4 member-list">
        <div class="bg-light-purple py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-title mb-5 text-center text-main">{{__('WLIN MEMBERS')}}</h2>
                    </div>

                    <div class="col-12">
                        @if(!empty($members))
                            <div class="members-wrap">
                                <div class="members-carousel">
                                    @foreach($members as $member)
                                        @php
                                            $img = get_attachment_image_by_id($member->image, 'full');
                                        @endphp
                                        <div class="member-item">
                                            <div class="img">
                                                <a href="{{getMemberLink($member)}}">
                                                    <img src="{{Arr::get($img, 'img_url')}}"/>
                                                </a>
                                            </div>
                                            <p class="text">
                                                <a href="{{getMemberLink($member)}}">{{$member->title}}</a>
                                            </p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </section>
@endisset
