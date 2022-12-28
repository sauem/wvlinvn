@isset($about)
    <section class="py-md-5 pt-0 pb-5">
        <div class="bg-light-purple py-md-5 py-4 p-md-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 col-12">
                        <iframe width="100%" height="250"
                                src="{{Arr::get($about, "construction_about_section_video_url")}}"
                                title="{{Arr::get($about, "construction_about_section_{$lang}_title")}}"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div class="col-md-7 col-12">
                        <h1 class="section-title">{{Arr::get($about, "construction_about_section_{$lang}_title")}}</h1>
                        <p class="section-text mt-3">{!! Arr::get($about, "construction_about_section_{$lang}_description") !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endisset
