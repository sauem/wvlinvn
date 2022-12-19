
<div class="form-group">
    <label for="upload-image">{{$label ?? 'Chose image'}}</label>
    <div class="media-upload-btn-wrapper">
        <div class="img-wrap">
            @if (!empty($default))
                <div class="attachment-preview">
                    <div class="thumbnail">
                        <div class="centered">
                            <img class="avatar user-thumb" src="{{_IMG($default)}}">
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <input type="hidden" name="{{$name.$lang ?? "image_page_{$lang}"}}"
               value="{{option($name.$lang, $lang)}}">
        <button type="button" class="btn btn-info media_upload_form_btn" data-btntitle="{{__('Select Image')}}"
                data-modaltitle="{{__('Upload Image')}}"
                data-imgid="{{option($name.$lang,$lang)}}" data-toggle="modal"
                data-target="#media_upload_modal">
            {{__('Chose Image')}}
        </button>
    </div>
</div>

