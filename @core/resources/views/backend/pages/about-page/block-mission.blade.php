<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>Vission Title</label>
            <input value="{{option('about_vision_title',$lang)}}" class="form-control"
                   name="about_vision_title_{{$lang}}">
            <label>Vission Content</label>
            <textarea class="form-control" name="about_vision_content_{{$lang}}">
                {{option('about_vision_content', $lang)}}
            </textarea>
            @include('backend.partials.upload-button',
                    ['default'=> option('about_vision_img',$lang),
                    'label' => 'Icon','name' => 'about_vision_img_','lang' => $lang
                    ])
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Mission Title</label>
            <input value="{{option('about_mission_title', $lang)}}" class="form-control"
                   name="about_mission_title_{{$lang}}">
            <label>Mission Content</label>
            <textarea class="form-control" name="about_mission_content_{{$lang}}">
                     {{option('about_mission_content', $lang)}}
            </textarea>
            @include('backend.partials.upload-button',[
                        'default'=> option('about_mission_img',$lang),
                        'label' => 'Icon','name' => 'about_mission_img_','lang' => $lang
                        ])
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Value Title</label>
            <input class="form-control" value="{{option('about_value_title', $lang)}}"
                   name="about_value_title_{{$lang}}">
            <label>Value Content</label>
            <textarea class="form-control" name="about_value_content_{{$lang}}">
                                {{option('about_value_content', $lang)}}
            </textarea>
            @include('backend.partials.upload-button',[
                            'default'=> option('about_mission_img',$lang),
                            'label' => 'Icon','name' => 'about_value_img_','lang' => $lang
                            ])
        </div>
    </div>
</div>
