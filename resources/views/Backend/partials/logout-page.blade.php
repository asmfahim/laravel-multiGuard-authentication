<div class="col-sm-6 clearfix">
    <div class="user-profile pull-right">
        <img class="avatar user-thumb" src="{{asset('public/Backend')}}/assets/images/author/avatar.png" alt="avatar">
        <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <i
                class="fa fa-angle-down"></i></h4>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Message</a>
            <a class="dropdown-item" href="#">Settings</a>

            <a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Log Out</a>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
            class="d-none">
            @csrf
            </form>
        </div>
    </div>
</div>
