@isset($brands)
    <section class="py-4">
        <div class="bg-white py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-title mb-5 text-center text-main">{{__('WLIN NETWORK')}}</h2>
                    </div>

                    <div class="col-12">
                        @if(!empty($brands))
                           <div class="brands-wrap">
                               <div class="brands-carousel">
                                   @foreach($brands as $brand)
                                       <div class="brand-item">
                                           <div class="img">
                                               <a href="{{getMemberLink($brand)}}">
                                                   <img src="{{_IMG($brand->image)}}"/>
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
