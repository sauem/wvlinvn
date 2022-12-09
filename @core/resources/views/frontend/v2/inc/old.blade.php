
<header>
    <div class="container">
        @php($menus = bootstrapMenu($primary_menu))
        @if(!empty($menus))
            @foreach($menus as $menu)

                @if(isset($menu['children']))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            {{Arr::get($menu, 'pname')}}
                        </a>
                        <ul class="dropdown-menu" >
                            @foreach($menu['children'] as $children)
                                @if(isset($children['children']))
                                    <a class="nav-link dropdown-toggle" href="#">
                                        {{Arr::get($children, 'pname')}}
                                    </a>
                                    <ul class="dropdown-menu" >
                                        @foreach($children['children'] as $child)
                                            <li>
                                                <a class="dropdown-item" href="{{getLink($menu)}}">
                                                    {{Arr::get($child, 'pname')}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <li>
                                        <a class="dropdown-item" href="{{getLink($menu)}}">
                                            {{Arr::get($children, 'pname')}}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{getLink($menu)}}">
                            {{Arr::get($menu, 'pname')}}
                        </a>
                    </li>
                @endif
            @endforeach
        @endif
        @php($menus = bootstrapMenu($primary_menu))
        @if(!empty($menus))
            @foreach($menus as $menu)

                @if(isset($menu['children']))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            {{Arr::get($menu, 'pname')}}
                        </a>
                        <ul class="dropdown-menu" >
                            @foreach($menu['children'] as $children)
                                @if(isset($children['children']))
                                    <a class="nav-link dropdown-toggle" href="#">
                                        {{Arr::get($children, 'pname')}}
                                    </a>
                                    <ul class="dropdown-menu" >
                                        @foreach($children['children'] as $child)
                                            <li>
                                                <a class="dropdown-item" href="{{getLink($menu)}}">
                                                    {{Arr::get($child, 'pname')}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <li>
                                        <a class="dropdown-item" href="{{getLink($menu)}}">
                                            {{Arr::get($children, 'pname')}}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{getLink($menu)}}">
                            {{Arr::get($menu, 'pname')}}
                        </a>
                    </li>
                @endif
            @endforeach
        @endif
    </div>
</header>
