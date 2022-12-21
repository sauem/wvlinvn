<hr>
<h4>WLIN PARTNERS</h4>
<div class="row">
    <div class="col-md-4">
        @include('backend.partials.upload-button',[
                       'default'=> option('about_partner_bg',$lang),
                       'label' => 'Icon','name' => 'about_partner_bg_','lang' => $lang
                       ])
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <label>Title</label>
            <input value="{{option('about_partner_title',$lang)}}" class="form-control"
                   name="about_partner_title_{{$lang}}">
            <label>Content</label>
            <input value="{{option('about_partner_content',$lang)}}" class="form-control"
                   name="about_partner_content_{{$lang}}">

        </div>
    </div>

</div>

<hr>
<h4>WLIN Member Criteria</h4>
<div class="row">
    <div class="col-md-4">
        @include('backend.partials.upload-button',[
                       'default'=> option('about_criteria_right_bg',$lang),
                       'label' => 'Image right','name' => 'about_criteria_right_bg_','lang' => $lang
                       ])
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <label>Title left</label>
            <input value="{{option('about_criteria_right_content',$lang)}}" class="form-control"
                   name="about_criteria_right_title_{{$lang}}"/>
            <label>Content</label>
            <textarea class="form-control" name="about_criteria_right_content_{{$lang}}">
                                {{option('about_criteria_right_content',$lang)}}

            </textarea>
        </div>
    </div>
    <div class="col-md-4">
        @include('backend.partials.upload-button',[
                       'default'=> option('about_criteria_left_bg',$lang),
                       'label' => 'Image Left','name' => 'about_criteria_left_bg_','lang' => $lang
                       ])
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <label>Title right</label>
            <input value="{{option('about_criteria_left_title',$lang)}}" class="form-control"
                   name="about_criteria_left_title_{{$lang}}"/>
            <label>Content</label>
            <textarea class="form-control" name="about_criteria_left_content_{{$lang}}">
                {{option('about_criteria_left_content',$lang)}}
            </textarea>
        </div>
    </div>

</div>

<hr>
<h4>WLIN NETWORK STRUCTURE AND
    ROLE & POSITIONS</h4>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Title</label>
            <input value="{{option('about_structure_title',$lang)}}" class="form-control"
                   name="about_structure_title_{{$lang}}"/>
            @include('backend.partials.upload-button',[
                         'default'=> option('about_structure_img',$lang),
                         'label' => 'Image','name' => 'about_structure_img_','lang' => $lang
                         ])
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Title</label>
            <input value="{{option('about_role_title',$lang)}}" class="form-control" name="about_role_title_{{$lang}}"/>
            @include('backend.partials.upload-button',[
                         'default'=> option('about_role_img',$lang),
                         'label' => 'Image','name' => 'about_role_img_','lang' => $lang
                         ])
        </div>
    </div>
</div>
