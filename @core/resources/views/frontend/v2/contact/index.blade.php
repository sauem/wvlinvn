@extends('frontend.v2.layout')
@section('content')
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <div class="my-4">
                    {!! render_embed_google_map(get_static_option('contact_page_map_section_location'),get_static_option('contact_page_map_section_zoom')) !!}
                </div>
            </div>
            <div class="col-md-6">
                <form action="{{route('frontend.contact.message')}}" method="post" class="contact-page-form"
                      enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="captcha_token" id="gcaptcha_token">
                    {!! render_form_field_for_frontend(get_static_option('contact_page_contact_form_fields')) !!}

                    <div class="btn-wrapper ">
                        <button type="submit"
                                class="btn m-auto btn-outline-primary text-main">SEND</button>
                    </div>

                </form>
            </div>
            <div class="col-md-5">
                <ul>
                @foreach($infos as $data)
                   <li>
                       <i class="{{$data->icon}}"></i>
                       <span>{{$data->title}}</span>
                       <span>{{$data->description}}</span>
                   </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop
