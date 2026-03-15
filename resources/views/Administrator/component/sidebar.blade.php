<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <!-- Dashboard -->
        <div class="pcoded-navigatio-lavel">Navigation</div>
        {{-- <ul class="pcoded-item pcoded-left-item">
            <li class="">
                <a href="">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>

            <li class="pcoded-hasmenu active pcoded-trigger">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Menu SUb</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="active">
                        <a href="">
                            <span class="pcoded-mtext">Sub 1</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="">
                            <span class="pcoded-mtext">Sub 2</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="">
                            <span class="pcoded-mtext">Sub 3</span>
                            <span class="pcoded-badge badge bg-info">NEW</span>
                        </a>
                    </li>

                </ul>
            </li>

        </ul> --}}

        <ul class="pcoded-item pcoded-left-item">

            @foreach(adminMenus() as $menu)

                @if($menu->children->count())

                    <li class="pcoded-hasmenu">

                        <a href="javascript:void(0)">

                            <span class="pcoded-micon">
                                <i class="{{ $menu->msmnu_icon }}"></i>
                            </span>

                            <span class="pcoded-mtext">
                                {{ $menu->msmnu_name }}
                            </span>

                        </a>

                        <ul class="pcoded-submenu">

                            @foreach($menu->children as $sub)

                                <li>

                                    <a href="{{ route($sub->msmnu_route) }}">

                                        <span class="pcoded-mtext">
                                            {{ $sub->msmnu_name }}
                                        </span>

                                    </a>

                                </li>

                            @endforeach

                        </ul>

                    </li>

                @else

                    <li>

                        <a href="{{ route($menu->msmnu_route) }}">

                            <span class="pcoded-micon">
                                <i class="{{ $menu->msmnu_icon }}"></i>
                            </span>

                            <span class="pcoded-mtext">
                                {{ $menu->msmnu_name }}
                            </span>

                        </a>

                    </li>

                @endif

            @endforeach

        </ul>

    </div>
</nav>
