@extends('backend.layouts.app')

@section('title', 'Cài đặt')

@push('styles')

@endpush


@section('content')

    <div class="block-header"></div>

    <div class="row clearfix">

        <div class="col-xs-12">
            <div class="card">
                <div class="header bg-indigo">
                    <h2>
                        CÀI ĐẶT CHUNG
                        <a href="{{route('admin.profile')}}" class="btn waves-effect waves-light right headerightbtn">
                            <i class="material-icons left">person</i>
                            <span>THÔNG TIN NGƯỜI DÙNG </span>
                        </a>
                    </h2>
                </div>
                <div class="body">
                    <form action="{{route('admin.settings.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="name" class="form-control" value="{{ $settings->name or null }}">
                                <label class="form-label">Tiêu đề trang web</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="email" name="email" class="form-control" value="{{ $settings->email or null }}">
                                <label class="form-label">Email</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" name="phone" class="form-control" value="{{ $settings->phone or null }}">
                                <label class="form-label">SĐT</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="address" class="form-control" value="{{ $settings->address or null }}">
                                <label class="form-label">Địa chỉ</label>
                            </div>
                            <small class="col-red font-italic">Có thể nhập mã HTML</small>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="footer" class="form-control" value="{{ $settings->footer or null }}">
                                <label class="form-label">Chân trang</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-line">
                                <textarea name="aboutus" rows="4" class="form-control no-resize">{{ $settings->aboutus or null }}</textarea>
                                <label class="form-label">Về chúng tôi</label>
                            </div>
                        </div>

                        <h6>Mạng xã hội</h6>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="facebook" class="form-control" value="{{ $settings->facebook or null }}">
                                <label class="form-label">Facebook</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="twitter" class="form-control" value="{{ $settings->twitter or null }}">
                                <label class="form-label">Twitter</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="linkedin" class="form-control" value="{{ $settings->linkedin or null }}">
                                <label class="form-label">LinkedIn</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-indigo btn-lg m-t-15 waves-effect">
                            <i class="material-icons">save</i>
                            <span>LƯU</span>
                        </button>

                    </form>
                    
                </div>
            </div>
        </div>

    </div>

@endsection


@push('scripts')


@endpush
