<footer class="page-footer indigo darken-2">
    <div class="container">
        <div class="row">
            <div class="col m4 s12">
                <h5 class="white-text uppercase">Giới thiệu</h5>
                @if(isset($footersettings[0]) && $footersettings[0]['aboutus'])
                    <p class="grey-text text-lighten-4">{{ $footersettings[0]['aboutus'] }}</p>
                @else
                    <p class="grey-text text-lighten-4">HOALACLAND là trang web chuyên đăng tin mua, bán cũng như cập nhật các tin tức về các dự án bất động
                    sản của khu công nghệ cao Hòa Lạc</p>
                @endif
            </div>
            <div class="col m6 s12">
                <h5 class="white-text uppercase">Bất động sản gần đây</h5>
                <ul class="collection border0">

                    @foreach($footerproperties as $property)
                    <li class="collection-item transparent clearfix p-0 border0">
                        <span class="card-image-bg m-r-10" style="background-image:url({{Storage::url('property/'.$property->image)}});width:60px;height:45px;float:left;"></span>
                        <div class="float-left">
                            <h5 class="font-18 m-b-0 m-t-5">
                                <a href="{{ route('property.show',$property->slug) }}" class="white-text">{{ str_limit($property->title,40) }}</a>
                            </h5>
                            <p class="m-t-0 m-b-5 grey-text text-lighten-1">Phòng ngủ: {{ $property->bedroom }} Phòng tắm: {{ $property->bathroom }} </p>
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>
            <div class="col m2 s12">
                <h5 class="white-text uppercase">Menu</h5>
                <ul>
                    <li class="uppercase {{ Request::is('batdongsan*') ? 'underline' : '' }}">
                        <a href="{{ route('batdongsan') }}" class="grey-text text-lighten-3">Bất động sản</a>
                    </li>

                    <li class="uppercase {{ Request::is('nhamoigioi*') ? 'underline' : '' }}">
                        <a href="{{ route('nhamoigioi') }}" class="grey-text text-lighten-3">Nhà môi giới</a>
                    </li>

                    <li class="uppercase {{ Request::is('bosuutap*') ? 'underline' : '' }}">
                        <a href="{{ route('bosuutap') }}" class="grey-text text-lighten-3">Bộ sưu tập</a>
                    </li>

                    <li class="uppercase {{ Request::is('tintuc*') ? 'underline' : '' }}">
                        <a href="{{ route('tintuc') }}" class="grey-text text-lighten-3">Tin tức</a>
                    </li>

                    <li class="uppercase {{ Request::is('lienhe') ? 'underline' : '' }}">
                        <a href="{{ route('lienhe') }}" class="grey-text text-lighten-3">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            @if(isset($footersettings[0]) && $footersettings[0]['footer'])
                {{ $footersettings[0]['footer'] }}
            @else
                © Bản quyền thuộc về kiendo
            @endif

            @if(isset($footersettings[0]) && $footersettings[0]['facebook'])
                <a class="grey-text text-lighten-4 right" href="{{ $footersettings[0]['facebook'] }}" target="_blank">FACEBOOK</a>
            @endif
            @if(isset($footersettings[0]) && $footersettings[0]['twitter'])
                <a class="grey-text text-lighten-4 right m-r-10" href="{{ $footersettings[0]['twitter'] }}" target="_blank">TWITTER</a>
            @endif
            @if(isset($footersettings[0]) && $footersettings[0]['linkedin'])
                <a class="grey-text text-lighten-4 right m-r-10" href="{{ $footersettings[0]['linkedin'] }}" target="_blank">LINKEDIN</a>
            @endif

        </div>
    </div>
</footer>