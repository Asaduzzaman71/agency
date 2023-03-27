<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu left-side-menu-detached">

    <!--- Sidemenu -->
    <ul class="metismenu side-nav">

        <li class="side-nav-title side-nav-item">Dashboard</li>

        <li class="side-nav-item">
            <a href="{{ url('/admin/dashboard') }}" class="side-nav-link">
                <i class="uil-home-alt"></i>
                <span> Dashboards </span>
            </a>
        </li>       

        <li class="side-nav-item">
            <a href="javascript: void(0);" class="side-nav-link">
                <i class="uil-envelope"></i>
                <span> Blog </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li class="{{ Request::is('admin/blogs') ? 'active' : '' }}">
                    <a href="{{route('admin.blogs.index')}}">List</a>
                </li>
                <li class="{{ Request::is('admin/blogs/create') ? 'active' : '' }}">
                    <a href="{{route('admin.blogs.create')}}">Create</a>
                </li>
            </ul>
        </li>
         
    </ul>

    <div class="clearfix"></div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->