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

        <div class="div-sites"  style="padding-bottom: 100px;">




          
            <section class="u-clearfix u-container-align-center u-section-2 info-company-desc " id="sec-5d9c">
                <div class="row" style="width: 100%; margin-left: 0;margin-right: 0;margin-top:30px;">
                    
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
           
            </section>

        </div>

    </div>
    

        {{-- sub Modal Sites --}}
        @foreach ($packages as $package)
        <div class="modal fade" tabindex="-1" id="modal-{{ $package->id}}">
            <div class="modal-dialog modal-dialog-scrollable" >
              <div class="modal-content">
                <div class="modal-header">
                       
                <h6 style="padding-right: 20px;">{{ $package->name }}</h6>
                <span class="close">&times;</span>   </div>
                <div class="modal-body">
            
                                        <div
                                            class="u-container-align-right-sm u-container-align-right-xs u-container-style u-list-item u-repeater-item u-list-item-1  ">
                                            <div
                                                class="u-container-layout u-similar-container u-valign-bottom-lg u-valign-bottom-md u-container-layout-2">
                                            

                                                <ul style="text-align: right; padding-top: 20px;"
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
                                                <form action="{{ route('registerr') }}" method="get"
                                                    id="form-{{ $package->id }}" name="form-{{ $package->id }}">
                                                    @csrf
                                                    @if ($package->is_free != 1)
                                                        <div style="text-align: right ;padding-top:10px;padding-right: 40px;">
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
                                                    
                                                </form>
                                            </div>
                                        </div>
                                  
                </div>
                <div class="modal-footer" style="display: flex;justify-content: space-between;">
                  <button type="button" class="btn btn-secondary no-btn" data-bs-dismiss="modal">الغاء</button>
                  <button type="submit"  form="form-{{ $package->id }}" class="btn"  style="background-color: #fff;color:#000;padding-right: 40px;padding-left:40px" id="btn-modal-del">اشترك الان</button>
                </div>
              </div>
            </div>
          </div>
          @endforeach
            {{-- ennd sub Modal Sites --}}

       
     
@endsection
@section('map-css')
    <link rel="stylesheet" href="{{ url('/public/assets/site/css/bootstrap-icons/font/bootstrap-icons.min.css') }}">

    <link rel="stylesheet" href="{{ url('/public/assets/site/css/nicepage.css') }}">
    <link rel="stylesheet" href="{{ url('/public/assets/site/css/Pricing.css') }}">
    <link rel="stylesheet" href="{{ url('/public/assets/site/css/stylepage.css') }}" />
@endsection
@section('map-js')
    <script src="{{ url('public/assets/site/js/subscribe.js?') }}<?=time()?>"></script>
@endsection
