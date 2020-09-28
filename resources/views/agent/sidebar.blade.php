<ul class="collection with-header">

    <li class="collection-header center">
        <div class="m-t-10">
            <img src="{{Storage::url('users/'.auth()->user()->image)}}" alt="{{ auth()->user()->name }}" class="circle responsive-img">
        </div>
        <h5 class="truncate">
            {{ auth()->user()->name }}
        </h5>
        <h6 class="m-t-0"><small>{{ auth()->user()->email }}</small></h6>
    </li>

    <a href="{{ route('agent.dashboard') }}">
        <li class="collection-item {{ Request::is('agent/dashboard') ? 'active' : '' }}">
            <i class="material-icons left">dashboard</i>
            <span>Tổng quan<span>
        </li>
    </a>

    <a href="{{ route('agent.profile') }}">
        <li class="collection-item {{ Request::is('agent/profile') ? 'active' : '' }}">
            <i class="material-icons left">person</i>
            <span>Hồ sơ cá nhân</span>
        </li>
    </a>
    <a href="{{ route('agent.message') }}">
        <li class="collection-item {{ Request::is('agent/message*') ? 'active' : '' }}">
            <i class="material-icons left">mail</i>
            <span>Tin nhắn</span>
        </li>
    </a>

    <a href="{{ route('agent.properties.index') }}">
        <li class="collection-item {{ Request::is('agent/properties') ? 'active' : '' }}">
            <i class="material-icons left">view_list</i>
            <span>Bất động sản<span>
        </li>
    </a>
    <a href="{{ route('agent.properties.create') }}">
        <li class="collection-item {{ Request::is('agent/properties/create') ? 'active' : '' }}">
            <i class="material-icons left">create</i>
            <span>Tạo bất động sản<span>
        </li>
    </a>
    <a href="{{ route('agent.changepassword') }}">
        <li class="collection-item {{ Request::is('agent/changepassword') ? 'active' : '' }}">
            <i class="material-icons left">lock</i>
            <span>Đổi mật khẩu</span>
        </li>
    </a>
</ul>