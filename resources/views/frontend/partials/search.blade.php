
<!-- SEARCH SECTION -->

<section class="indigo darken-2 white-text center">
    <div class="container">
        <div class="row m-b-0">
            <div class="col s12">

                <form action="{{ route('search')}} " method="GET">
                    <div class="searchbar">
                        <div class="input-field col s12 m2">
                            <input type="text" name="project" id="autocomplete-input" class="autocomplete custominputbox" autocomplete="off">
                            <label for="autocomplete-input">Nhập dự án</label>
                        </div>

                        <div class="input-field col s12 m3">
                            <select name="type" class="browser-default">
                                <option value="" disabled selected>Kiểu Bất Động Sản</option>
                                <option value="Căn hộ">Căn hộ chung cư</option>
                                <option value="Nhà đất">Nhà đất</option>
                            </select>
                        </div>

                        <div class="input-field col s12 m2">
                            <select name="purpose" class="browser-default">
                                <option value="" disabled selected>Mục đích</option>
                                <option value="Cho thuê">Cho Thuê</option>
                                <option value="Bán">Bán</option>
                            </select>
                        </div>

                        <div class="input-field col s12 m2">
                            <select name="bedroom" class="browser-default">
                                <option value="" disabled selected>Số phòng ngủ</option>
                                @if(isset($bedroomdistinct))
                                    @foreach($bedroomdistinct as $bedroom)
                                        <option value="{{$bedroom->bedroom}}">{{$bedroom->bedroom}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="input-field col s12 m2">
                            <input type="text" name="maxprice" id="maxprice" class="custominputbox">
                            <label for="maxprice">Giá tối đa</label>
                        </div>
                        
                        <div class="input-field col s12 m1">
                            <button class="btn btnsearch waves-effect waves-light w100" type="submit">
                                <i class="material-icons">search</i>
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</section>