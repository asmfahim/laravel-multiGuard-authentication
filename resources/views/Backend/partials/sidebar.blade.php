
@php
 $usr = Auth::guard('admin')->user();
@endphp

<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{route('admin.dashboard')}}"><img src="{{asset('public/Backend')}}/assets/images/icon/logo.png" alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    @if ($usr->can('dashboard.view'))
                    <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}">
                        <a href="javascript:void(0)" aria-expanded="true"><i
                                class="ti-dashboard"></i><span>dashboard</span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                        </ul>
                    </li>
                    @endif


                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i
                                class="ti-user"></i><span>User

                            </span></a>
                        <ul class="collapse">
                            <li><a href="{{route('admin.user.index')}}">User List</a></li>
                            <li><a href="{{route('admin.user.create')}}">User Create</a></li>
                            <li><a href="index3-horizontalmenu.html">Horizontal Sidebar</a></li>
                        </ul>
                    </li>

                    @if ($usr->can('role.create') || $usr->can('role.view') ||  $usr->can('role.edit') ||  $usr->can('role.delete') || $usr->can('permission.create'))
                    <li class="{{Route::is('admin.roles.index') || Route::is('admin.roles.create')||Route::is('admin.permission.create') || Route::is('admin.roles.edit') ? 'active' : '' }}">
                        <a href="javascript:void(0)" aria-expanded="true"><i
                                class="fa fa-lock"></i><span>Roles & Permissions
                            </span></a>
                        <ul class="collapse">
                            <li class="{{Route::is('admin.roles.index') ? 'active' : ''}}"><a href="{{route("admin.roles.index")}}">Roles List</a></li>
                            <li class="{{Route::is('admin.roles.create') ? 'active' : ''}}"><a href="{{route("admin.roles.create")}}">Roles Create</a></li>
                            <li class="{{Route::is('admin.permission.create') ? 'active' : ''}}"><a href="{{route("admin.permission.create")}}">Permission Create</a></li>
                        </ul>
                    </li>
                    @endif
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i
                                class="ti-layout-sidebar-left"></i><span>Sidebar
                                Types
                            </span></a>
                        <ul class="collapse">
                            <li><a href="index.html">Left Sidebar</a></li>
                            <li><a href="index3-horizontalmenu.html">Horizontal Sidebar</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>


