<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Hakanium</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('counting.index') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ route('counting.index') }}">General Dashboard</a>
                    </li>
                    <li class='{{ Request::is('cctv.index') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ route('cctv.index') }}">CCTV List</a>
                    </li>
                </ul>
            </li>

            <li class="menu-header">Users</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Users</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('user.index') }}">All Users</a>
                    </li>
                </ul>
            </li>

        </ul>

    </aside>
</div>
