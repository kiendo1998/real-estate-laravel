    <aside id="leftsidebar" class="sidebar">

        <!-- Menu -->
        <div class="menu">
            <ul class="list">

                <li class="header">DANH SÁCH CHỨC NĂNG</li>
                
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Tổng quan</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/sliders*') ? 'active' : '' }}">
                    <a href="{{ route('admin.sliders.index') }}">
                        <i class="material-icons">burst_mode</i>
                        <span>Slide</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/properties*') ? 'active' : '' }}">
                    <a href="{{ route('admin.properties.index') }}">
                        <i class="material-icons">home</i>
                        <span>Bất động sản</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/features*') ? 'active' : '' }}">
                    <a href="{{ route('admin.features.index') }}">
                        <i class="material-icons">star</i>
                        <span>Điểm nổi bật</span>
                    </a>
                </li>

                <li class="{{ Request::is('admin/services*') ? 'active' : '' }}">
                    <a href="{{ route('admin.services.index') }}">
                        <i class="material-icons">wb_sunny</i>
                        <span>Dịch vụ</span>
                    </a>
                </li>

                <li class="{{ Request::is('admin/testimonials*') ? 'active' : '' }}">
                    <a href="{{ route('admin.testimonials.index') }}">
                        <i class="material-icons">view_carousel</i>
                        <span>Nhận xét khách hàng</span>
                    </a>
                </li>

                <li class="header">Tin tức</li>
                <li class="{{ Request::is('admin/categories*') ? 'active' : '' }}">
                    <a href="{{ route('admin.categories.index') }}">
                        <i class="material-icons">category</i>
                        <span>Thể loại</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/tags*') ? 'active' : '' }}">
                    <a href="{{ route('admin.tags.index') }}">
                        <i class="material-icons">label</i>
                        <span>Tag</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/posts*') ? 'active' : '' }}">
                    <a href="{{ route('admin.posts.index') }}">
                        <i class="material-icons">library_books</i>
                        <span>Tin tức</span>
                    </a>
                </li>

                <li class="header"> </li>
                <li class="{{ Request::is('admin/galleries*') ? 'active' : '' }}">
                    <a href="{{ route('admin.album') }}">
                        <i class="material-icons">view_list</i>
                        <span>Bộ sưu tập</span>
                    </a>
                </li>
 
                <li class="{{ Request::is('admin/settings*') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">settings</i>
                        <span>Cài đặt</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{ Request::is('admin/settings') ? 'active' : '' }}">
                            <a href="{{ route('admin.settings') }}">
                                <span>Cài đặt</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/changepassword') ? 'active' : '' }}">
                            <a href="{{ route('admin.changepassword') }}">
                                <span>Đổi mật khẩu</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/profile') ? 'active' : '' }}">
                            <a href="{{ route('admin.profile') }}">
                                <span>Hồ sơ</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/message*') ? 'active' : '' }}">
                            <a href="{{ route('admin.message') }}">
                                <span>Tin nhắn</span>
                            </a>
                        </li>
                    </ul>
                </li>
                

            </ul>
        </div>
        <!-- #Menu -->
        
    </aside>