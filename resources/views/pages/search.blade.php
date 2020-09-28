@extends('frontend.layouts.app')

@section('styles')

@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row">

                <div class="col s12 m4 card">

                    <h2 class="sidebar-title">Tìm kiếm bất động sản</h2>

                    <form class="sidebar-search" action="{{ route('search')}}" method="GET">

                        <div class="searchbar">
                            <div class="input-field col s12">
                                <input type="text" name="project" id="autocomplete-input-sidebar" class="autocomplete custominputbox" autocomplete="off">
                                <label for="autocomplete-input-sidebar">Nhập dự án</label>
                            </div>
    
                            <div class="input-field col s12">
                                <select name="type" class="browser-default">
                                    <option value="" disabled selected>Chọn kiểu</option>
                                    <option value="Căn hộ">Căn hộ chung cư</option>
                                    <option value="Nhà đất">Nhà đất</option>
                                </select>
                            </div>
    
                            <div class="input-field col s12">
                                <select name="purpose" class="browser-default">
                                    <option value="" disabled selected>Chọn mục đích</option>
                                    <option value="Cho thuê">Cho thuê</option>
                                    <option value="Bán">Bán</option>
                                </select>
                            </div>
    
                            <div class="input-field col s12">
                                <select name="bedroom" class="browser-default">
                                    <option value="" disabled selected>Chọn số phòng ngủ</option>
                                    @foreach($bedroomdistinct as $bedroom)
                                        <option value="{{$bedroom->bedroom}}">{{$bedroom->bedroom}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="input-field col s12">
                                <select name="bathroom" class="browser-default">
                                    <option value="" disabled selected>Chọn số phòng tắm</option>
                                    @foreach($bathroomdistinct as $bathroom)
                                        <option value="{{$bathroom->bathroom}}">{{$bathroom->bathroom}}</option>
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="input-field col s12">
                                <input type="number" name="minprice" id="minprice" class="custominputbox">
                                <label for="minprice">Giá tối thiểu</label>
                            </div>
    
                            <div class="input-field col s12">
                                <input type="number" name="maxprice" id="maxprice" class="custominputbox">
                                <label for="maxprice">Giá tối đa</label>
                            </div>
    
                            <div class="input-field col s12">
                                <input type="number" name="minarea" id="minarea" class="custominputbox">
                                <label for="minarea">Diện tích sàn tối thiểu</label>
                            </div>
    
                            <div class="input-field col s12">
                                <input type="number" name="maxarea" id="maxarea" class="custominputbox">
                                <label for="maxarea">Diện tích sàn tối đa</label>
                            </div>
                            
                            <div class="input-field col s12">
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" name="featured">
                                        <span class="lever"></span>
                                        Featured
                                    </label>
                                </div>
                            </div>
                            <div class="input-field col s12">
                                <button class="btn btnsearch indigo" type="submit">
                                    <i class="material-icons left">search</i>
                                    <span>Tìm kiếm</span>
                                </button>
                            </div>
                        </div>
    
                    </form>

                </div>

                <div class="col s12 m8">

                    @foreach($properties as $property)
                        <div class="card horizontal">
                            <div>
                                <div class="card-content property-content">
                                    @if(Storage::disk('public')->exists('property/'.$property->image) && $property->image)
                                        <div class="card-image blog-content-image">
                                            <img src="{{Storage::url('property/'.$property->image)}}" alt="{{$property->title}}">
                                        </div>
                                    @endif
                                    <span class="card-title search-title" title="{{$property->title}}">
                                        <a href="{{ route('property.show',$property->slug) }}">{{ $property->title }}</a>
                                    </span>
                                    
                                    <div class="address">
                                        <i class="small material-icons left">location_city</i>
                                        <span>{{ ucfirst($property->project) }}</span>
                                    </div>
                                    <div class="address">
                                        <i class="small material-icons left">place</i>
                                        <span>{{ ucfirst($property->address) }}</span>
                                    </div>

                                    <h5>
                                        {{ $property->price }}đ
                                        <small class="right">{{ $property->type }} đang {{ $property->purpose }}</small>
                                    </h5>

                                </div>
                                <div class="card-action property-action clearfix">
                                    <span class="btn-flat">
                                        <i class="material-icons">check_box</i>
                                        Phòng ngủ: <strong>{{ $property->bedroom}}</strong>
                                    </span>
                                    <span class="btn-flat">
                                        <i class="material-icons">check_box</i>
                                        Phòng tắm: <strong>{{ $property->bathroom}}</strong>
                                    </span>
                                    <span class="btn-flat">
                                        <i class="material-icons">check_box</i>
                                        Diện tích: <strong>{{ $property->area}}</strong> m2
                                    </span>
                                    <span class="btn-flat">
                                        <i class="material-icons">comment</i>
                                        {{ $property->comments_count}}
                                    </span>

                                    @if($property->featured == 1)
                                        <span class="right featured-stars">
                                            <i class="material-icons">stars</i>
                                        </span>
                                    @endif                                    

                                </div>
                            </div>
                        </div>
                    @endforeach


                    <div class="m-t-30 m-b-60 center">
                        {{ 
                            $properties->appends([
                                'project'      => Request::get('project'),
                                'type'      => Request::get('type'),
                                'purpose'   => Request::get('purpose'),
                                'bedroom'   => Request::get('bedroom'),
                                'bathroom'  => Request::get('bathroom'),
                                'minprice'  => Request::get('minprice'),
                                'maxprice'  => Request::get('maxprice'),
                                'minarea'   => Request::get('minarea'),
                                'maxarea'   => Request::get('maxarea'),
                                'featured'  => Request::get('featured')
                            ])->links() 
                        }}
                    </div>
        
                </div>

            </div>
        </div>
    </section>

@endsection

@section('scripts')

@endsection