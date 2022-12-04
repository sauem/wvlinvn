<div class="header-style-01  navbar-variant-01">
    <nav class="navbar navbar-area nav-absolute navbar-expand-lg nav-style-01">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <a href="{{url('/')}}" class="logo">
                        @if(!empty(filter_static_option_value('site_white_logo',$global_static_field_data)))
                            {!! render_image_markup_by_attachment_id(filter_static_option_value('site_white_logo',$global_static_field_data)) !!}
                        @else
                            <h2 class="site-title">{{filter_static_option_value('site_'.$user_select_lang_slug.'_title',$global_static_field_data)}}</h2>
                        @endif
                    </a>
                </div>
                <x-product-cart-mobile/>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                <ul class="navbar-nav">
                    {!! render_frontend_menu($primary_menu) !!}
                </ul>
            </div>
            <div class="nav-right-content">
                <div class="icon-part">
                    <ul>
                        <x-navbar-search/>
                        <x-product-cart/>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>



<header>
    <div class="header-top">
        <div class="input-group visible-s" style="width: 50%">
            <input class="form-control py-2 border-right-0 border" style="height: 30px" type="search"
                   placeholder="Tìm kiếm" id="example-search-input" />
            <span class="input-group-append">
            <button class="btn btn-outline-secondary border-left-0 border" style="background-color: #ffffff"
                    type="button">
              <i class="fa fa-search"></i>
            </button>
          </span>
        </div>
        <div class="logo visible-s">
            <a href="index.html">
                <img src="/image/homepage/logo_wlin.svg" style="width: 55px; height: 55px" alt="" />
            </a>
        </div>

        <div class="header-bar visible-s">
            <img src="/image/homepage/logo_bar.svg" alt="" />
        </div>
        <div class="header-fixed">
            <a href="index.html">
                <img src="/image/homepage/logo_wlin.svg" alt="" />
            </a>
            <ul class="menu">
                {!! render_frontend_menu($primary_menu) !!}

                <li class="menu-item menu-home visible-s">
                    <a href="" class="menu-link menu-active"></a>
                    <i class="fas fa-times close-header-fixed visible-s"></i>
                </li>
                <li class="menu-item">
                    <a href="index.html" class="menu-link menu-active actived">Thông tin
                    </a>
                </li>
                <li class="menu-item">
                    <a href="" class="menu-link menu-active">Mạng lưới wlin </a>
                </li>
                <li class="menu-item">
                    <a href="" class="menu-link menu-active">wlin partners </a>
                </li>
                <li class="menu-item">
                    <a href="" class="menu-link menu-active">Tin tức </a>
                </li>
                <li class="menu-item">
                    <a href="" class="menu-link menu-active">Hội viên wlin </a>
                </li>
                <li class="menu-item">
                    <a href="" class="menu-link menu-active">Liên hệ</a>
                </li>
                <li class="menu-item">
                    <div class="input-group" style="display: flex; flex-wrap: nowrap">
                        <input class="form-control py-2 border-right-0 border" style="height: 31px" type="search"
                               placeholder="Tìm kiếm" id="example-search-input" />
                        <span class="input-group-append">
                  <button class="btn btn-outline-secondary border-left-0 border" style="background-color: #ffffff"
                          type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>

