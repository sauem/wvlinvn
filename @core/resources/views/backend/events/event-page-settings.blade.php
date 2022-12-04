@extends('backend.admin-master')
@section('site-title')
    {{__('Events Page Settings')}}
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-12 mt-5">
                @include('backend.partials.message')
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__("Events Page Settings")}}</h4>
                        <form action="{{route('admin.events.page.settings')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="site_events_post_items">{{__('Events Items')}}</label>
                                <input type="text" name="site_events_post_items"  class="form-control" value="{{get_static_option('site_events_post_items')}}" id="site_events_post_items">
                            </div>

                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">{{__('Update Changes')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection