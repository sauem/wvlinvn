<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div>
                <ol class="breadcrumb">
                    <li class="px-2"><a href="/" title="" class="text_1">Trang chủ</a>
                    </li>
                    @if(isset($items) && !empty($items))
                        @foreach($items as $item)
                            <li class="li">
                                <a class="px-2 text_2" href="{{Arr::get($item, 'link')}}"
                                   title="{{Arr::get($item, 'title')}}">{{Arr::get($item, 'title')}}</a>
                            </li>
                        @endforeach

                    @endif
                </ol>
            </div>
        </div>
    </div>
</div>
