<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Dashboard</div>
        <!-- Dashboard -->
        <ul class="pcoded-item pcoded-left-item">

            <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>

        </ul>

        <div class="pcoded-navigatio-lavel">Manage Landing Page</div>

        <ul class="pcoded-item pcoded-left-item">

            <li class="{{ request()->routeIs('admin.mnghome') || request()->routeIs('admin.formhomeheader') ? 'active' : '' }}">
                <a href="{{ route('admin.mnghome') }}">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Home</span>
                </a>
            </li>

            <li class="">
                <a href="">
                    <span class="pcoded-micon"><i class="feather icon-align-justify"></i></span>
                    <span class="pcoded-mtext">About</span>
                </a>
            </li>

            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                    <span class="pcoded-mtext">Product Management</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="">
                            <span class="pcoded-mtext">Our Product</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="">
                            <span class="pcoded-mtext">Product Methods</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="pcoded-hasmenu {{ request()->routeIs('admin.mngevent') || request()->routeIs('admin.formevent') || request()->routeIs('admin.mngcsr') || request()->routeIs('admin.formcsr') ? 'active pcoded-trigger' : '' }}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-activity"></i></span>
                    <span class="pcoded-mtext">Activity Management</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="{{ request()->routeIs('admin.mngevent') || request()->routeIs('admin.formevent') ? 'active' : '' }}">
                        <a href="{{ route('admin.mngevent') }}">
                            <span class="pcoded-mtext">Event</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('admin.mngcsr') || request()->routeIs('admin.formcsr') ? 'active' : '' }}">
                        <a href="{{ route('admin.mngcsr') }}">
                            <span class="pcoded-mtext">CSR</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="">
                            <span class="pcoded-mtext">Outcomes</span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>

        <div class="pcoded-navigatio-lavel">General Management</div>

        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ request()->routeIs('admin.generalsetting') ? 'active' : '' }}">
                <a href="{{ route('admin.generalsetting') }}">
                    <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
                    <span class="pcoded-mtext">General Setting</span>
                </a>
            </li>

            <li class="{{ request()->routeIs('admin.users') ? 'active' : '' }}">
                <a href="{{ route('admin.users') }}">
                    <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                    <span class="pcoded-mtext">Users Manage</span>
                </a>
            </li>
        </ul>

    </div>
</nav>
