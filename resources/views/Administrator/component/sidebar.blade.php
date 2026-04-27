<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <!-- Dashboard -->
        <div class="pcoded-navigatio-lavel">Navigation</div>

        <ul class="pcoded-item pcoded-left-item">

            <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>

            <li class="">
                <a href="">
                    <span class="pcoded-micon"><i class="feather icon-package"></i></span>
                    <span class="pcoded-mtext">Product Management</span>
                </a>
            </li>

            <li class="">
                <a href="">
                    <span class="pcoded-micon"><i class="feather icon-activity"></i></span>
                    <span class="pcoded-mtext">Activity Management</span>
                </a>
            </li>

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
