@extends('frontend.layouts.app')

@section('styles')

@endsection

@section('content')

    <section class="section">
        <div class="container">
            <div class="row">

                <div class="col s12 m3">
                    <div class="agent-sidebar">
                        @include('agent.sidebar')
                    </div>
                </div>

                <div class="col s12 m9">
                    <div class="agent-content">
                        <h4 class="agent-title">THÊM MỚI BẤT ĐỘNG SẢN</h4>

                        <form action="{{route('agent.properties.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">title</i>
                                    <input id="title" name="title" type="text" class="validate" data-length="200">
                                    <label for="title">Tiêu đề</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">monetization_on</i>
                                    <input id="price" name="price" type="number" class="validate">
                                    <label for="price">Giá mong muốn</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">business</i>
                                    <input id="area" name="area" type="number" class="validate">
                                    <label for="area">Diện tích sàn</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">airline_seat_flat</i>
                                    <input id="bedroom" name="bedroom" type="number" class="validate">
                                    <label for="bedroom">Số phòng ngủ</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">event_seat</i>
                                    <input id="bathroom" name="bathroom" type="number" class="validate">
                                    <label for="bathroom">Số phòng tắm</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s4">
                                    <i class="material-icons prefix">location_city</i>
                                    <input id="project" name="project" type="text" class="validate">
                                    <label for="project">Dự án</label>
                                </div>
                                <div class="input-field col s8">
                                    <i class="material-icons prefix">account_balance</i>
                                    <textarea id="address" name="address" class="materialize-textarea"></textarea>
                                    <label for="address">Địa chỉ</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s3">
                                    <p>
                                        <label>
                                            <input type="checkbox" name="featured" class="filled-in" checked="checked" />
                                            <span>Nổi bật</span>
                                        </label>
                                    </p>
                                </div>
                                <div class="input-field col s9">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea id="description" name="description" class="materialize-textarea"></textarea>
                                    <label for="description">Mô tả</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col s3">
                                    <label class="label-custom" for="type">Kiểu bất động sản</label>
                                    <p>
                                        <label>
                                            <input class="with-gap" name="type" value="Nhà đất" type="radio"  />
                                            <span>Nhà đất</span>
                                        </label>
                                    <p>
                                    </p>
                                        <label>
                                            <input class="with-gap" name="type" value="Căn hộ" type="radio"  />
                                            <span>Căn hộ</span>
                                        </label>
                                    </p>
                                </div>
                                <div class="col s3">
                                    <label class="label-custom" for="purpose">Mục đích BĐS</label>
                                    <p>
                                        <label>
                                            <input class="with-gap" name="purpose" value="Bán" type="radio"  />
                                            <span>Bán</span>
                                        </label>
                                    <p>
                                    </p>
                                        <label>
                                            <input class="with-gap" name="purpose" value="Cho thuê" type="radio"  />
                                            <span>Cho thuê</span>
                                        </label>
                                    </p>
                                </div>
                                <div class="input-field col s6">
                                    <select multiple name="features[]">
                                        <option value="" disabled selected>Chọn điểm nổi bật</option>
                                        @foreach($features as $feature)
                                            <option value="{{ $feature->id }}">{{ $feature->name }}</option>
                                        @endforeach
                                    </select>
                                    <label class="label-custom">Chọn điểm nổi bật</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="file-field input-field col s12">
                                    <div class="btn indigo">
                                        <span>Ảnh nổi bật</span>
                                        <input type="file" name="image">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">map</i>
                                    <input id="location_latitude" name="location_latitude" type="text" class="validate">
                                    <label for="location_latitude">Vĩ độ</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">map</i>
                                    <input id="location_longitude" name="location_longitude" type="text" class="validate">
                                    <label for="location_longitude">Kinh độ</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">voice_chat</i>
                                    <input id="video" name="video" type="text" class="validate">
                                    <label for="video">Link Youtube</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="file-field input-field col s12">
                                    <div class="btn indigo">
                                        <span>Bản vẽ sàn</span>
                                        <input type="file" name="floor_plan">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">place</i>
                                    <textarea id="nearby" name="nearby" class="materialize-textarea"></textarea>
                                    <label for="nearby">Gần với</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="file-field input-field col s12">
                                    <div class="btn indigo">
                                        <span>Tải ảnh lên bộ sưu tập ảnh</span>
                                        <input type="file" name="gallaryimage[]" multiple>
                                        <span class="helper-text" data-error="wrong" data-success="right">Tải thêm 1 ảnh nữa</span>
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Tải thêm 1 ảnh nữa">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col s12 m-t-30">
                                    <button class="btn waves-effect waves-light btn-large indigo darken-4" type="submit">
                                        Lưu lại
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </div>

                        </form>


                    </div>
                </div> <!-- /.col -->

            </div>
        </div>
    </section>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('input#title, textarea#nearby').characterCounter();
        $('select').formSelect();
    });

</script>
@endsection