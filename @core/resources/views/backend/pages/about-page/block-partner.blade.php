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
            <input class="form-control" name="about_partner_title_{{$lang}}">
            <label>Content</label>
        </div>
    </div>

</div>

<hr>
<h4>WLIN Member Criteria</h4>
<div class="row">
    <div class="col-md-4">
        @include('backend.partials.upload-button',[
                       'default'=> option('about_partner_bg',$lang),
                       'label' => 'Image right','name' => 'about_partner_bg_','lang' => $lang
                       ])
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <label>Title left</label>
            <input class="form-control" name=""/>
            <label>Content</label>
            <textarea class="form-control" name="about_partner_title_{{$lang}}">
            </textarea>
        </div>
    </div>
    <div class="col-md-4">
        @include('backend.partials.upload-button',[
                       'default'=> option('about_partner_bg',$lang),
                       'label' => 'Image Left','name' => 'about_partner_bg_','lang' => $lang
                       ])
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <label>Title right</label>
            <input class="form-control" name=""/>
            <label>Content</label>
            <textarea class="form-control" name="about_partner_title_{{$lang}}">
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
            <input class="form-control" name=""/>
            @include('backend.partials.upload-button',[
                         'default'=> option('about_partner_bg',$lang),
                         'label' => 'Image','name' => 'about_partner_bg_','lang' => $lang
                         ])
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Title</label>
            <input class="form-control" name=""/>
            @include('backend.partials.upload-button',[
                         'default'=> option('about_partner_bg',$lang),
                         'label' => 'Image','name' => 'about_partner_bg_','lang' => $lang
                         ])
        </div>
    </div>
</div>
