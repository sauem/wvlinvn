@isset($categories)
    <section class="py-4 category-list">
        <div class="bg-main-purple py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-title mb-5 text-center text-white">{{$title ?? 'WLIN WORLD'}}</h2>
                    </div>
                </div>
            </div>
            <div class="row no-gutters row-cols-md-5">
                @foreach($categories as $key => $category)
                    <div class="col-md col-6">
                        <div class="category-item">
                            <div class="img">
                                <a href="{{linkCategory($category)}}">
                                    <img class="world-item-img" src="{{_IMG($category->image)}}" alt=""/>
                                </a>
                            </div>
                            <p class="text">
                                <a href="{{linkCategory($category)}}">{{$category->name}}</a>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endisset
