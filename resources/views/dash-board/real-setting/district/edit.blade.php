@extends('dash-board.layout.navabr&footer')

@section('content')
    @include('dash-board.layout.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">

                    <h6 class="font-weight-bolder mb-0">
                        <a href="{{ url('admin/real-setting/all') }}">اعدادات العقار</a>/    

                        <a href="{{ route('district.index') }}">الحي </a>/
                        <span> تعديل</span>
                    </h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">

                    <ul class="navbar-nav me-auto ms-0 justify-content-end">

                        <li class="nav-item d-xl-none pe-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a href="{{ route('admin.logout') }}" class="nav-link text-body font-weight-bold px-0 logout">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">تسجيل خروج</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <div class="container">
            @if ($message = Session::get('success'))
                <div class="alert alert-white" role="alert">
                    {{ $message }}
                </div>
            @endif
        </div>

        @if (count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $item)
                    <li class="text-danger">
                        {{ $item }}
                    </li>
                @endforeach
            </ul>
        @endif

        <div class="row backgroundW p-4 m-3">
            <div class="container">


                <br>


                <div class="list-sitess-search">

                    <h5 class="head-search-sitess">تعديل  </h5>
                    <div class="fetchD" style="display: contents;">
                        <form action="{{ route('district.update',$item->id) }}" method="POST" id="form-product"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="mb-3">
                                    <label for="name" class="form-label">الاسم  </label>
                                    <input type="text" class="site form-controll" id="name" name="name"
                                        value="{{ $item->name }}" aria-describedby="textHelp">
                                    <div id="name-error" class="invalid-feedback"></div>

                                </div>
                                <div class="mb-3">
                                    
                                    <label for="sequence" class="form-label">الترتيب </label>
                                    <input type="text" class="site form-controll" id="sequence" name="sequence"
                                        value="{{ $item->sequence }}" aria-describedby="textHelp">
                                    <div id="sequence-error" class="invalid-feedback"></div>
                                </div>  
                                  <!-- Map -->
                                  <br>
                                  <div class="mb-3" style="width: 200px ;margin: 0 10px;">
                                    <label for="name" class="form-label">المحافظة  </label>
                                  <select style="width: 200px" class="form-cdontrol mb-2" id="city_id" name="city_id">
                                      <option value="">أختر المحافظة</option>
                                      @foreach ($cities as $city)
                                      <option value="{{ $city->id }}" {{ $item->city_id == $city->id ? 'selected' : '' }}>
                                          {{ $city->name }}</option>
                                  @endforeach
                                  </select>
                                  <div id="city_id-error" class="invalid-feedback"></div>
                                  <br>
                                </div>
                                <div class="mb-3"  style="width: 200px ;margin: 0 10px;"> 
                                    <label for="name" class="form-label">المدينة  </label>
                                  <select style="width: 200px" class="form-cdontrol mb-2" id="subcity" name="subcity">
                                      <option value="">أختر المدينة</option>
                                  </select>
                                  <div id="subcity-error" class="invalid-feedback"></div>
                                  <br>
                                </div>

                <!-- خريطة Leaflet -->
                <div class="map-out-cls">
                    <div id="map" style="height: 400px; width: 100%;" class="map-cls"></div>
                </div>
                <div class="form-group mb-3" style="width: 200px">
                    <label>Latitude</label>
                    <input type="text" id="latitude" name="latitude" class="form-controll">
                </div>
                <div class="form-group mb-3" style="width: 200px">
                    <label>Longitude</label>
                    <input type="text" id="longitude" name="longitude" class="form-controll">
                </div>
                <!-- Map end -->

                         
                           
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary btn-submit"
                                        style="padding-left:40px;padding-right: 40px">حفظ</button>
                                    <button type="button" class="btn btn-secondary">الغاء الامر</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('script')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var subcityurl = "{{ url('subcity/ItemId') }}";
        var selsubcity = "{{ $item->subcity_id }}";
        $(document).ready(function() {
           
            // *****************************************************************//
            var option = $('#city_id').find(":selected").val();
            getcities(option);
            //Map
            $('#city_id').on('change', function(e) {
                var option = $(this).find(":selected").val();
                getcities(option);

            });

            function getcities(option) {
                var newurl = subcityurl;
                newurl = newurl.replace("ItemId", option);

                $.ajax({
                    url: newurl,
                    type: "GET",
                    //	contentType: false,
                    //	processData: false,
                    //contentType: 'application/json',
                    success: function(data) {
                        if (data.length == 0) {} else {
                            fillCities(data);
                        }

                    },
                    error: function(errorresult) {

                    }
                });
            }

            function fillCities(data) {
                var choose = "اختر المدينة ..."
                $("#subcity").html('<option title="" value="0" >' + choose + '</option>');
                $.each(data, function(key, value) {

                    if (selsubcity == value.id) {
                        $("#subcity").append('<option selected value="' + value.id + '">' + value.subname +
                            '</option>');

                    } else {
                        $("#subcity").append('<option value="' + value.id + '">' + value.subname +
                            '</option>');
                    }
                }); // close each()
            }

            //end map

        });
    </script>
@endsection
@section('map-js')
<script>
    var com_lat = {{ $item->latitude }};
    var com_lang = {{ $item->longitude }};
</script>
<script src="{{ url('public/js/add-location.js') }}"></script>
    <script src="{{ url('public/dashboard/js/real-setting/setting.js') }}"></script>

@endsection
 
