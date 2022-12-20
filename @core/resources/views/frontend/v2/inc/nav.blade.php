<header class="theme-header">

    <div class="header-navigation navigation-style-v3">
        <div class="nav-overlay"></div>
        <div class="container">
            <div class="primary-menu">
                <div class="site-branding">
                    <a href="{{url('/')}}" class="brand-logo">
                        @if(!empty(filter_static_option_value('site_logo',$global_static_field_data)))
                            {!! render_image_markup_by_attachment_id(filter_static_option_value('site_logo',$global_static_field_data)) !!}
                        @else
                            <h2 class="site-title">{{filter_static_option_value('site_'.$user_select_lang_slug.'_title',$global_static_field_data)}}</h2>
                        @endif
                    </a>
                </div>
                <div class="nav-menu nav-auto">

                    <div class="navbar-close"><i class="far fa-times"></i></div>

                    <div class="nav-search">
                        <form>
                            <div class="form_group">
                                <input type="email" class="form_control" placeholder="Search Here" name="email"
                                       required>
                                <button class="search-btn"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>

                    <nav class="main-menu">
                        <ul>
                            @php($menus = bootstrapMenu($primary_menu))
                            @if(!empty($menus))
                                @foreach($menus as $menu)

                                    @if(isset($menu['children']) && !empty($menu['children']))
                                        <li class="menu-item has-children">
                                            <a href="#" class="nav-link">
                                                {{Arr::get($menu, 'pname')}}
                                            </a>
                                            <ul class="sub-menu">
                                                @foreach($menu['children'] as $children)

                                                    @if(isset($children['children']) && !empty($children['children']))
                                                        <li class="has-children">
                                                            <a href="#">{{Arr::get($children, 'pname')}}</a>
                                                            <ul class="sub-menu">
                                                                @foreach($children['children'] as $child)
                                                                    <li>
                                                                        <a href="{{getLink($child)}}">{{Arr::get($child,'pname')}}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <a href="{{getLink($children)}}">
                                                                {{Arr::get($children,'pname')}}
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>

                                    @else
                                        <li class="menu-item">
                                            <a href="{{getLink($menu)}}" class="nav-link">
                                                {{Arr::get($menu, 'pname')}}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            @endif
                        </ul>
                    </nav>
                </div>
                <div class="header-right-nav d-flex align-items-center">
                    <div class="lang-dropdown">
                        <select onchange="switchLang(this)" class="wide">
                            @if(!empty($all_language))
                                @foreach($all_language as $lang)
                                    <option {{userLang() === $lang->slug ? 'selected' : ''}} value="{{$lang->slug}}">{{$lang->symbol ?? $lang->slug}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="nav-search d-none d-md-block ml-3">
                        <form action="/tim-kiem">
                            <div class="form_group">
                                <input class="form_control" placeholder="Tìm kiếm" name="key">
                                <button class="search-btn"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="header-right-nav">
                        <ul>
                            <li class="navbar-toggle-btn">
                                <div class="navbar-toggler">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@push('script')
    <script>
        async function switchLang(element) {
            try {
                await $.ajax({
                    url: '{{route('system.switchLang')}}',
                    method: 'POST',
                    data: {
                        _token: '{{csrf_token()}}',
                        lang: $(element).val()
                    },
                });
                window.location.reload();
            } catch (e) {
                alert(e.message);
            }
        }
    </script>
@endpush
