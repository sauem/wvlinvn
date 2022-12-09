<footer class="bg-main-purple py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @if(!empty(Arr::get($global_static_field_data, 'site_white_logo')))
                    {!! render_image_markup_by_attachment_id(Arr::get($global_static_field_data, 'site_white_logo')) !!}
                @else
                    <h2 class="site-title">{{filter_static_option_value('site_'.$user_select_lang_slug.'_title',$global_static_field_data)}}</h2>
                @endif
            </div>
            <div class="col-md-9">
                <h4 class="text-white text-uppercase">{{Arr::get($global_static_field_data,'site_'.$user_select_lang_slug.'_title')}}</h4>
               <div class="text-white">
                   {!! App\WidgetsBuilder\WidgetBuilderSetup::render_frontend_sidebar('footer',['column' => false]) !!}
               </div>
            </div>
        </div>

    </div>
</footer>
