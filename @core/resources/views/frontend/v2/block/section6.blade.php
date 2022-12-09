@isset($brands)
    <section class="py-4">
        <div class="bg-white py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-title mb-5 text-center text-main">MẠNG LƯỚI WLIN</h2>
                    </div>

                    <div class="col-12">
                        @if(!empty($brands))
                           <div class="brands-wrap">
                               <div class="brands-carousel">
                                   @foreach($brands as $brand)
                                       @php
                                           $img = get_attachment_image_by_id($brand->image, 'full');
                                       @endphp
                                       <div class="brand-item">
                                           <div class="img">
                                               <a href="{{getMemberLink($brand)}}">
                                                   <img src="{{Arr::get($img, 'img_url')}}"/>
                                               </a>
                                           </div>
                                           <a class="name" href="{{getMemberLink($brand)}}">{{$brand->title}}</a>
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
