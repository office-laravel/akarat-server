@extends('site.layouts.layout')

@section('content')
 
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
