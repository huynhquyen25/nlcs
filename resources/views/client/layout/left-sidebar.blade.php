<div class="col-md-3 order-1 mb-5 mb-md-0">
    <div class="border p-4 rounded mb-4">
      <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
      <ul class="list-unstyled mb-0">
        @foreach ($danhmucs as $danhmuc)
        <li class="mb-1"><a href="{{route('spDanhMuc',['id'=>$danhmuc->id])}}" class="d-flex"><span>{{$danhmuc->ten_danh_muc}}</span> <span class="text-black ml-auto">({{$danhmuc->sanphams->count()}})</span></a></li>
        @endforeach
      </ul>
    </div>

    <div class="border p-4 rounded mb-4">
      <div class="mb-4">
        <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
        <div id="slider-range" class="border-primary ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 15%; width: 45%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 15%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 60%;"></span></div>
        <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="">
      </div>

      <div class="mb-4">
        <h3 class="mb-3 h6 text-uppercase text-black d-block">Size</h3>
        <label for="s_sm" class="d-flex">
          <input type="checkbox" id="s_sm" class="mr-2 mt-1"> <span class="text-black">Small (2,319)</span>
        </label>
        <label for="s_md" class="d-flex">
          <input type="checkbox" id="s_md" class="mr-2 mt-1"> <span class="text-black">Medium (1,282)</span>
        </label>
        <label for="s_lg" class="d-flex">
          <input type="checkbox" id="s_lg" class="mr-2 mt-1"> <span class="text-black">Large (1,392)</span>
        </label>
      </div>

      <div class="mb-4">
        <h3 class="mb-3 h6 text-uppercase text-black d-block">Color</h3>
        <a href="#" class="d-flex color-item align-items-center">
          <span class="bg-danger color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Red (2,429)</span>
        </a>
        <a href="#" class="d-flex color-item align-items-center">
          <span class="bg-success color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Green (2,298)</span>
        </a>
        <a href="#" class="d-flex color-item align-items-center">
          <span class="bg-info color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Blue (1,075)</span>
        </a>
        <a href="#" class="d-flex color-item align-items-center">
          <span class="bg-primary color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Purple (1,075)</span>
        </a>
      </div>

    </div>
  </div>