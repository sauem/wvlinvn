<div class="bg-light">
    <div class="container">
        <ol class="breadcrumb align-items-center bg-light" style="background-color: #f8f9fa!important;">
            <li class="px-2"><a href="/" title="" class="text_1">Trang chủ</a>
            </li>
            <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.70492 0L0.294922 1.41L4.87492 6L0.294922 10.59L1.70492 12L7.70492 6L1.70492 0Z"
                      fill="black" fill-opacity="0.8"/>
            </svg>
            @if(isset($items) && !empty($items))
                @foreach($items as $k => $item)
                    <li class="li">
                        <a class="px-2 text_2" href="{{Arr::get($item, 'link')}}"
                           title="{{Arr::get($item, 'title')}}">{{Arr::get($item, 'title')}}</a>
                    </li>
                    @if($k < sizeof($item) - 1)
                        <svg width="8" height="12" viewBox="0 0 8 12" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.70492 0L0.294922 1.41L4.87492 6L0.294922 10.59L1.70492 12L7.70492 6L1.70492 0Z"
                                  fill="black" fill-opacity="0.8"/>
                        </svg>

                    @endif
                @endforeach

            @endif
        </ol>
    </div>
</div>
