@extends('site.layouts.layout')

@section('content')


    <div class="container mt-2 box-category">
        <div   >
            <div class="title-breadcrumb m sec">              
                <h2 >
                 الاشتراكات
                </h2>
            </div>
        </div>
        <div id="success_store"></div>

        <div class="div-sites">




          
            <section class="u-clearfix u-container-align-center u-section-2 info-company-desc " id="sec-5d9c">
                <div class="row" style="width: 100%; margin-left: 0;margin-right: 0;margin-top:30px;">
                    <button type="button" class="btn btn-primary" id="test" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                        Vertically centered modal
                      </button>
                    @foreach ($packages as $package)
            
<div class="col-sm-12 col-md-4    " >
    <div class="u-list-item " style=" text-align: -webkit-center;margin:10px 5px;padding:15px 10px">
    <h5 class="  u-text   p-name">
        {{ $package->name }}</h5>
    <button type="button" id="detail-btn-{{ $package->id }}" style="margin-left:0 "
        class="u-active-white  u-btn-1 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-palette-1-base u-btn u-btn-round u-button-style u-hover-white u-palette-1-base u-radius u-text-active-black u-text-body-alt-color u-text-hover-black  sub-btn-detail">
       تفاصيل</button>

    </div>
</div>             
                @endforeach

            </div>
                <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1 ">
                     <div
                        class="u-container-style u-layout-cell u-size-32-xl u-size-60-lg u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-1">
                        <div class="u-container-layout u-container-layout-1">
                            <div
                                class="custom-expanded u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-list u-list-1">
                                <div class="u-repeater u-repeater-1">
                                    @foreach ($packages as $package)
                                        <div
                                            class="u-container-align-right-sm u-container-align-right-xs u-container-style u-list-item u-repeater-item u-list-item-1  ">
                                            <div
                                                class="u-container-layout u-similar-container u-valign-bottom-lg u-valign-bottom-md u-container-layout-2">
                                                <h5 class="u-align-right-sm u-align-right-xs u-text u-text-2 p-name">
                                                    {{ $package->name }}</h5>

                                                <ul style="text-align: right;"
                                                    class="u-align-right-sm u-align-right-xs u-custom-list u-file-icon u-text u-text-3">
                                                    <li>
                                                        @if ($package->href == 1)
                                                            <i class="bi bi-check-lg success"
                                                                style="padding-left:3px; color:#198754;"></i>
                                                        @else
                                                            <i class="bi bi-x-lg"
                                                                style="padding-left:3px;color:#DC3545;"></i>
                                                        @endif <span>رابط الشركة</span>
                                                    </li>
                                                    <li>
                                                        @if ($package->category == 1)
                                                            <i class="bi bi-check-lg success"
                                                                style="padding-left:3px; color:#198754;"></i>
                                                        @else
                                                            <i class="bi bi-x-lg"
                                                                style="padding-left:3px;color:#DC3545;"></i>
                                                        @endif <span>التصنيف</span>
                                                    </li>
                                                    <li>
                                                        @if ($package->subcategories == 1)
                                                            <i class="bi bi-check-lg success"
                                                                style="padding-left:3px; color:#198754;"></i>
                                                        @else
                                                            <i class="bi bi-x-lg"
                                                                style="padding-left:3px;color:#DC3545;"></i>
                                                        @endif <span>التصنيف الفرعي</span>
                                                    </li>
                                                    <li>
                                                        @if ($package->title == 1)
                                                            <i class="bi bi-check-lg success"
                                                                style="padding-left:3px; color:#198754;"></i>
                                                        @else
                                                            <i class="bi bi-x-lg"
                                                                style="padding-left:3px;color:#DC3545;"></i>
                                                        @endif <span>العنوان</span>
                                                    </li>
                                                    <li>
                                                        @if ($package->description == 1)
                                                            <i class="bi bi-check-lg success"
                                                                style="padding-left:3px; color:#198754;"></i>
                                                        @else
                                                            <i class="bi bi-x-lg"
                                                                style="padding-left:3px;color:#DC3545;"></i>
                                                        @endif <span>نبذة</span>
                                                    </li>
                                                    <li>
                                                        @if ($package->articale == 1)
                                                            <i class="bi bi-check-lg success"
                                                                style="padding-left:3px; color:#198754;"></i>
                                                        @else
                                                            <i class="bi bi-x-lg"
                                                                style="padding-left:3px;color:#DC3545;"></i>
                                                        @endif <span>مقال ذو صلة</span>
                                                    </li>
                                                    <li>
                                                        @if ($package->video == 1)
                                                            <i class="bi bi-check-lg success"
                                                                style="padding-left:3px; color:#198754;"></i>
                                                        @else
                                                            <i class="bi bi-x-lg"
                                                                style="padding-left:3px;color:#DC3545;"></i>
                                                        @endif <span>كود الفيديو</span>
                                                    </li>
                                                    <li>
                                                        @if ($package->keyword == 1)
                                                            <i class="bi bi-check-lg success"
                                                                style="padding-left:3px; color:#198754;"></i>
                                                        @else
                                                            <i class="bi bi-x-lg"
                                                                style="padding-left:3px;color:#DC3545;"></i>
                                                        @endif <span>كلمات مفتاحية</span>
                                                    </li>
                                                    <li>
                                                        @if ($package->logo == 1)
                                                            <i class="bi bi-check-lg success"
                                                                style="padding-left:3px; color:#198754;"></i>
                                                        @else
                                                            <i class="bi bi-x-lg"
                                                                style="padding-left:3px;color:#DC3545;"></i>
                                                        @endif <span>شعار الشركة</span>
                                                    </li>
                                                    <li>
                                                        @if ($package->mobile_number == 1)
                                                            <i class="bi bi-check-lg success"
                                                                style="padding-left:3px; color:#198754;"></i>
                                                        @else
                                                            <i class="bi bi-x-lg"
                                                                style="padding-left:3px;color:#DC3545;"></i>
                                                        @endif <span>رقم الجوال</span>
                                                    </li>
                                                    <li>
                                                        @if ($package->phone_number == 1)
                                                            <i class="bi bi-check-lg success"
                                                                style="padding-left:3px; color:#198754;"></i>
                                                        @else
                                                            <i class="bi bi-x-lg"
                                                                style="padding-left:3px;color:#DC3545;"></i>
                                                        @endif <span>رقم الهاتف</span>
                                                    </li>
                                                    <li>
                                                        @if ($package->social == 1)
                                                            <i class="bi bi-check-lg success"
                                                                style="padding-left:3px; color:#198754;"></i>
                                                        @else
                                                            <i class="bi bi-x-lg"
                                                                style="padding-left:3px;color:#DC3545;"></i>
                                                        @endif <span>روابط التواصل الاجتماعي</span>
                                                    </li>
                                                    <li>
                                                        @if ($package->android == 1)
                                                            <i class="bi bi-check-lg success"
                                                                style="padding-left:3px; color:#198754;"></i>
                                                        @else
                                                            <i class="bi bi-x-lg"
                                                                style="padding-left:3px;color:#DC3545;"></i>
                                                        @endif <span>رابط تطبيق الاندرويد</span>
                                                    </li>
                                                    <li>
                                                        @if ($package->ios == 1)
                                                            <i class="bi bi-check-lg success"
                                                                style="padding-left:3px; color:#198754;"></i>
                                                        @else
                                                            <i class="bi bi-x-lg"
                                                                style="padding-left:3px;color:#DC3545;"></i>
                                                        @endif <span>رابط تطبيق الايفون</span>
                                                    </li>
                                                    <li>
                                                        @if ($package->city == 1)
                                                            <i class="bi bi-check-lg success"
                                                                style="padding-left:3px; color:#198754;"></i>
                                                        @else
                                                            <i class="bi bi-x-lg"
                                                                style="padding-left:3px;color:#DC3545;"></i>
                                                        @endif <span>تحديد المحافظة والمدينة</span>
                                                    </li>
                                                    <li>
                                                        @if ($package->maploc == 1)
                                                            <i class="bi bi-check-lg success"
                                                                style="padding-left:3px; color:#198754;"></i>
                                                        @else
                                                            <i class="bi bi-x-lg"
                                                                style="padding-left:3px;color:#DC3545;"></i>
                                                        @endif <span>تحديد الاحداثيات على
                                                            الخريطة</span>
                                                    </li>
                                                    <li>
                                                        <span>عدد المواقع</span><span>/ {{ $package->sites_count }} /</span>
                                                    </li>
                                                    <li>
                                                        <span>عدد المنتجات لكل موقع</span><span>/
                                                            {{ $package->products_count }} /</span>
                                                    </li>
                                                </ul>
                                                <form action="{{ url('package/store') }}" method="POST"
                                                    id="form-{{ $package->id }}" name="form-{{ $package->id }}">
                                                    @csrf
                                                    @if ($package->is_free != 1)
                                                        <div style="text-align: right ;padding-top:10px;">
                                                            @php
                                                                $i = 0;
                                                            @endphp
                                                            @foreach ($package->durationspackages->sortBy('duration.duration') as $durationspackage)
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="year-{{ $package->id }}"
                                                                        value="{{ $durationspackage->id }}"
                                                                        @if ($i == 0) checked @endif>
                                                                    <label class="form-check-label">
                                                                        {{ $durationspackage->duration->duration }} سنة
                                                                        ({{ $durationspackage->price }} $)
                                                                    </label>
                                                                </div>

                                                                @php
                                                                    $i++;
                                                                @endphp
                                                            @endforeach

                                                        </div>
                                                    @else
                                                        <input class="form-check-input" type="radio"
                                                            style="display: none;" name="year-{{ $package->id }}"
                                                            value="0" checked>
                                                    @endif
                                                    <input type="hidden" name="package" value="{{ $package->id }}">
                                                    <button type="submit" id="sub-btn-{{ $package->id }}"
                                                        class="u-active-white u-align-right-sm u-align-right-xs u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-palette-1-base u-btn u-btn-round u-button-style u-hover-white u-palette-1-base u-radius u-text-active-black u-text-body-alt-color u-text-hover-black u-btn-1 sub-btn">
                                                        اشترك الان</button>

                                                </form>


                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

    </div>
    <div class="container mt-2 box-category" style="padding-bottom: 100px;">
        <section class="section mt-5"
            style="  background-color: #fff; padding-top:30px;padding-left:20px;padding-right:20px;padding-bottom:20px;">
            <div class="container div-sites" style="text-align: right ;  ">

                <div class="box-main-foo">

                    <div class="sign-in">
                        <div class="part-above">

                            <h4 style="text-align: center">أنشئ حساب جديد</h4>
                            <div id="selected-sec" style="display: none;">
                                <p style="margin-top: 20px;">لقد اخترت الباقة : <span id="selected-p"></span></p>
                                <p>مدة الصلاحية : <span id="selected-year"></span></p>
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
                            @if ($message = Session::get('error'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <form action="{{ route('store.Users') }}" method="POST" class="fomr-sign"
                                autocomplete="off">
                                @csrf
                                <input type="hidden" name="package_reg" value="">
                                <input type="hidden" name="year_reg" value="">
                                <div class="row mt-5 mb-4  p-3" style="border-radius: 5px;">
                                    <ul class="mb-4">
                                        <li class="text-secondary"><small class="text-secondary">اسم المستخدم يجب ان يكون
                                                باللغة الانجليزية</small></li>
                                        <li class="text-secondary"><small class="text-secondary">لا يجب على اسم المستخدم
                                                ان
                                                يحتوي على مسافات</small></li>
                                    </ul>
                                    <div class=" col-md-6 col-sm-12 mb-2">
                                        <label for="" class="mb-2">اسم المستخدم</label>
                                        <input type="text" class="form-control" name="enname"
                                            vlaue="{{ old('enname') }}" placeholder="اسم المستخدم ">
                                    </div>


                                    <div class="col-md-6 col-sm-12 mb-2">
                                        <label for="" class="mb-2">البريد الإلكتروني</label>
                                        <input type="email" autocomplete="on" class="form-control" name="email"
                                            vlaue="{{ old('email') }}" placeholder="البريد الإلكتروني"
                                            aria-label="البريد الإلكتروني">
                                    </div>

                                    <div class="col-md-6 col-sm-12 mb-2 mt-2">
                                        <label for="" class="mb-2">كلمة المرور</label>
                                        <input type="password" class="form-control" name="password"
                                            vlaue="{{ old('password') }}" placeholder="كلمة المرور">
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-2 mt-2">
                                        <label for="password-confirm" class="mb-2">تأكيد كلمة المرور</label>
                                        <input id="password-confirm" class="form-control" type="password"
                                            placeholder="تأكيد كلمة المرور" name="password_confirmation" required>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 mt-2 mb-2">
                                            <label for="" class="policy-form">
                                                <span class="policy">
                                                    بالتسجيل في موقع وصلات ,انت توافق على
                                                    <a href="#">الخصوصية</a>
                                                    و
                                                    <a href="#">الشروط و الأحكام</a>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success"
                                        style="width:30%;margin:22px auto;border-color:#fdc93a;background-color: #fdc93a ">تسجيل</button>

                                    <div class="sec">
                                        <p>
                                            هل بالفعل لديك حساب
                                            <a href="{{ route('login') }}">دخول</a>
                                        </p>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                    {{-- <div class="left-form-login">
                    <img src="{{ url('../public/assets/images/login.svg') }}" alt="">
                </div> --}}

                </div>
            </div>
       
        </section>

     



    </div>
        {{-- sub Modal Sites --}}
        <div class="modal fade" tabindex="-1" id="exampleModalCenter">
            <div class="modal-dialog modal-dialog-scrollable" >
              <div class="modal-content">
                <div class="modal-header">
                       
                <h6 style="padding-right: 20px;"> باقة</h6>
                <span class="close">&times;</span>   </div>
                <div class="modal-body">
                  <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                   <p>Modal body asc
                    ascacsfcef
                    wef endifwefwe
                    f
                   ext goes here.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>

            {{-- ennd sub Modal Sites --}}

         {{-- sub Modal Sites --}}
         <div class="modal fade" id="subModal-detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
         style="z-index:999999;">
         <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable">
             <div class="modal-content ">
                 <div class="modal-header">
                    
                <h6 style="padding-right: 20px;"> بحث متقدم</h6>
                <span class="close">&times;</span>
                 </div>
                 <div class="container mt-2">                 
               
   
                 <h4 style="text-align: center;">هل انت متأكد ؟</h4>

                 @foreach ($packages as $package)
                 <div
                     class="u-container-align-right-sm u-container-align-right-xs u-container-style u-list-item u-repeater-item u-list-item-1  ">
                     <p>Modal body asc
                        ascacsfcef
                        wef endifwefwe
                        f
                       ext goes here.</p>
                       <p>Modal body asc
                        ascacsfcef
                        wef endifwefwe
                        f
                       ext goes here.</p>
                       <p>Modal body asc
                        ascacsfcef
                        wef endifwefwe
                        f
                       ext goes here.</p>
                       <p>Modal body asc
                        ascacsfcef
                        wef endifwefwe
                        f
                       ext goes here.</p>
                       <p>Modal body asc
                        ascacsfcef
                        wef endifwefwe
                        f
                       ext goes here.</p>
                       <p>Modal body asc
                        ascacsfcef
                        wef endifwefwe
                        f
                       ext goes here.</p>
                 </div>
             @endforeach


            </div>




                 <div class="modal-footer">
   
                     <button type="button" class="btn btn-secondary closemodal" data-bs-dismiss="modal">لا</button>
                     <button type="submit" class="btn btn-primary  " id="btn-modal-del">نعم</button>
                 </div>
   
             </div>
         </div>
     </div>
     {{-- end- delete Modal Sites --}}
     
@endsection
@section('map-css')
    <link rel="stylesheet" href="{{ url('/public/assets/site/css/bootstrap-icons/font/bootstrap-icons.min.css') }}">

    <link rel="stylesheet" href="{{ url('/public/assets/site/css/nicepage.css') }}">
    <link rel="stylesheet" href="{{ url('/public/assets/site/css/Pricing.css') }}">
    <link rel="stylesheet" href="{{ url('/public/assets/site/css/stylepage.css') }}" />
@endsection
@section('map-js')
    <script src="{{ url('public/assets/site/js/subscribe.js') }}"></script>
@endsection
