<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.table') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-seedling"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Flower Shop Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->routeIs('admin.table') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.table') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Management
            </div>

            <!-- Nav Item - Categories -->
            <li class="nav-item {{ request()->routeIs('admin.category.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.category.index') }}">
                    <i class="fas fa-fw fa-tags"></i>
                    <span>Categories</span></a>
            </li>

            <!-- Nav Item - Occasions -->
            <li class="nav-item {{ request()->routeIs('admin.occations.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.occations.index') }}">
                    <i class="fas fa-fw fa-gift"></i>
                    <span>Occasions</span></a>
            </li>

            <!-- Nav Item - Types -->
            <li class="nav-item {{ request()->routeIs('admin.types.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.types.index') }}">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Types</span></a>
            </li>

            <!-- Nav Item - Flowers -->
            <li class="nav-item {{ request()->routeIs('admin.flowers.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.flowers.index') }}">
                    <i class="fas fa-fw fa-flower"></i>
                    <span>Flowers</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Reports
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Sales Reports</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Order History</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Settings
            </div>

            <!-- Nav Item - Users -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Users</span></a>
            </li>

            <!-- Nav Item - Settings -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Settings</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
