<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="index-2.html">
                    <img src="{{ asset('assets/landing-page/images/logo.svg') }}" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            @foreach(menus() as $menu)

                                @if($menu->children->count())

                                    <li class="nav-item submenu">
                                        <a class="nav-link" href="{{ route($menu->msmnu_route) }}">
                                            {{ $menu->msmnu_name }}
                                        </a>

                                        <ul>
                                            @foreach($menu->children as $sub)
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route($sub->msmnu_route) }}">
                                                        {{ $sub->msmnu_name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>

                                    </li>

                                @else

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route($menu->msmnu_route) }}">
                                            {{ $menu->msmnu_name }}
                                        </a>
                                    </li>

                                @endif

                            @endforeach
                        </ul>
                    </div>

                    <!-- Header Button Box Start -->
                    <div class="header-button-box">
                        <!-- Header Btn Start -->
                        <div class="header-btn">
                            <a href="{{ route('admin.login') }}" class="btn-default btn-highlighted">Login</a>
                        </div>
                        <!-- Header Btn End -->
                    </div>     
                    <!-- Header Button Box End -->                   
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>