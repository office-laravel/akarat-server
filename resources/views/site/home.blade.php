@extends('site.layouts.layout')
@section('content')
    <div class="_48abcf70 _67b6ed55" style="background-color: lightblue;">
        <div class="_63e489f0"></div>
        <div class="_23ea0c5a _03f5b7ce" style="background-color: lightblue;">
            <!-- <picture class="_94e9cda3"><img class="_30adc239 f484fcc0"
                                                            src="assets/imageBackgroundLargeAR.56850bb4cfcc0dfe664875ec619c356f.jpg" alt="wallpaper" />
                                                    </picture> -->
        </div>
        <div class="_6abf153d d9ca3949" aria-label="Home Title">
            <h1 class="_0b3da198">استكشف بيتك الجديد للبيع او الايجار</h1>
        </div>
        <div class="_834a20ff">
            <div class="_8a6309f2" aria-label="Mini search form container">
                <div class="_1dce22ae">
                    <div class="_948d9e0a _8dfcce3a _00dff92d b2e0090c _371e9918 dep" data-id="real"><button
                            aria-label="Property search" class="_520955ba">عقارات</button></div>
                    <div class="_948d9e0a _8dfcce3a b2e0090c _371e9918 dep" data-id="proj"><button aria-label="New Projects"
                            class="_520955ba">المشاريع الجديدة<span
                                class="cb32442e _090d93f3 _4019c762">جديد</span></button></div>
                </div>
            </div>
            <div class="_8a6309f2" aria-label="Mini search form">
                <div class="_969653d8 f35c88dd cea65139  main-form-container" aria-label="Mini form">

                    <div class="cf1ef6f4 ">



                    </div>





                </div>
            </div>
        </div>
    </div>

    @include('site.home-comp.home_links')
    {{-- elements --}}


    <div id="property-search" style="display: none;">
        <div class="cf1ef6f4 row row-margin">
            <div class=" col col-lg-12">
                <div class="row  ">
                    <div class="col-sm-12  col-lg-3 field-item">
                        <div class="_4415c3d9">
                            <button class="aa693f28 _409cfca5 purpose" aria-label="For sale" data-id="sale">للبيع</button>
                            <button class="aa693f28  purpose" aria-label="To rent" data-id="rent">للايجار</button>
                        </div>
                    </div>
                    <div class=" _3dbcaafa FilterDesign2022   col-sm-12  col-lg-6 field-item" aria-label="Location filter"
                        name="الموقع">
                        <div class="_2f4179a8 FilterDesign2022"><label class="e971c3da FilterDesign2022"
                                for="filter-title">الموقع</label>
                            <div class="b349eb12 a4d351d5 _2c4893ca">
                                <div class="_948d9e0a">
                                    <div aria-label="Location filter" class="e5905004 f84c47d8 _87e0ed4c">
                                        <ul class="_1dbd2148"></ul><input type="text" value=""
                                            placeholder="أدخل الموقع" autocomplete="off" spellcheck="false"
                                            class="c5ccf0e1 FilterDesign2022 _89f3954d location-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="   col-sm-12 col-lg-3 field-item">
                        <a href="/%D8%B9%D9%82%D8%A7%D8%B1%D8%A7%D8%AA-%D9%84%D9%84%D8%A8%D9%8A%D8%B9/%D9%85%D8%B5%D8%B1/"
                            role="button" design="FilterDesign2022" language="ar"
                            class="_6219ce30 aaf1e20a FilterDesign2022" aria-label="Find button">بحث</a>
                    </div>
                </div>
            </div>
            <div class="    col-lg-12">
                <div class="_948d9e0a  row sale-filter">
                    <div aria-label="Completion status filter" class=" col-sm-12 col-lg-3 field-item field-three-btns">
                        <div class="_7e6c98a1">
                            <button class="_01214aea _41568ae2 sale-type" data-id="all">الجميع</button>
                            <button class="_01214aea sale-type" data-id="ready">جاهز</button>
                            <button class="_01214aea sale-type" data-id="build">قيد الإنشاء</button>
                        </div>
                    </div>
                    <div class="_7571b11b  FilterDesign2022 col-sm-12 col-lg-3 field-item " name="نوع العقار">
                        <div class="c4c7bd5f FilterDesign2022 _6a9bbcff"><label class="e971c3da FilterDesign2022"
                                for="filter-title">نوع العقار</label>
                            <div role="button" aria-haspopup="true" aria-label="Category filter"
                                class="f3117e76 FilterDesign2022 state-type"><span
                                    class="b94532fd FilterDesign2022 a9ecbd9d"><span
                                        class="fontCompensation state-type-span">سكني</span></span><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"
                                    class="_5fdb6c65 FilterDesign2022">
                                    <path class="cls-1" d="M12 6L6 0 0 6h12z"></path>
                                </svg></div>
                            <div class="c333bc57">
                                <div class="c333bc57">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div aria-label="Beds &amp; Baths filter"
                        class="_16f51cef _23a4bba0   col-sm-12 col-lg-3 field-item room-filter">
                        <div class="_335572a0 FilterDesign2022 c484d8df">
                            <label class="_55489622 FilterDesign2022 " for="filter-title">عدد الغرف &amp; الحمامات</label>
                            <div role="button" aria-haspopup="true" aria-label="Beds &amp; Baths filter"
                                class="f3117e76 FilterDesign2022 room-btn"><span
                                    class="b94532fd FilterDesign2022 a9ecbd9d">
                                    <span class="fontCompensation room-text">عدد الغرف &amp; الحمامات</span></span><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"
                                    class="_5fdb6c65 FilterDesign2022">
                                    <path class="cls-1" d="M12 6L6 0 0 6h12z"></path>
                                </svg></div>
                            <div class="_94c3edc8 room-popup"></div>
                        </div>
                    </div>
                    <div class="_7571b11b d7f75fd0 FilterDesign2022 col-sm-12 col-lg-3 field-item"
                        aria-label="Price filter" name="السعر (ج.م)">
                        <div class="c4c7bd5f FilterDesign2022 _6a9bbcff"><label class="e971c3da FilterDesign2022"
                                for="filter-title">السعر (ج.م)</label>
                            <div role="button" aria-haspopup="true" class="f3117e76 FilterDesign2022 price-btn">
                                <span class="b94532fd FilterDesign2022 a9ecbd9d"><span class="fontCompensation">السعر
                                        (ج.م)</span></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"
                                    class="_5fdb6c65 FilterDesign2022">
                                    <path class="cls-1" d="M12 6L6 0 0 6h12z"></path>
                                </svg>
                            </div>
                            <div class="_94c3edc8 price-popup"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="new-projects" style="display: none;">
        <div class="cf1ef6f4 row row-margin">
            <div class="col col-lg-12">
                <div class="row">
                    <div class="col-sm-12  col-lg-9 field-item" aria-label="Location filter" name="الموقع">
                        <div class="_2f4179a8 FilterDesign2022"><label class="e971c3da FilterDesign2022"
                                for="filter-title">الموقع</label>
                            <div class="b349eb12 a4d351d5 _2c4893ca">
                                <div class="_948d9e0a">
                                    <div aria-label="Location filter" class="e5905004 f84c47d8">
                                        <ul class="_1dbd2148 _8f29c2df"></ul><input type="text"
                                            placeholder="أدخل الموقع" autocomplete="off" spellcheck="false"
                                            class="c5ccf0e1 FilterDesign2022 _89f3954d" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-sm-12 col-lg-3 field-item"><a
                            href="/%D8%B9%D9%82%D8%A7%D8%B1%D8%A7%D8%AA-%D9%84%D9%84%D8%A8%D9%8A%D8%B9/%D9%85%D8%B5%D8%B1/"
                            role="button" design="FilterDesign2022" language="ar"
                            class="_6219ce30 e614dada FilterDesign2022 aaf1e20a new-search-btn"
                            aria-label="Find button">بحث</a></div>
                </div>
            </div>
            <div class=" col-lg-12">
                <div class="_948d9e0a  row newproject-filter">
                    <div class="col-sm-12 col-lg-3 field-item   " name="نوع العقار">
                        <div class="c4c7bd5f FilterDesign2022 _6a9bbcff"><label class="e971c3da FilterDesign2022"
                                for="filter-title">نوع العقار</label>
                            <div role="button" aria-haspopup="true" aria-label="Category filter"
                                class="f3117e76 FilterDesign2022 new-state-type"><span
                                    class="b94532fd FilterDesign2022 a9ecbd9d "><span
                                        class="fontCompensation state-type-span">سكني</span></span><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"
                                    class="_5fdb6c65 FilterDesign2022">
                                    <path class="cls-1" d="M12 6L6 0 0 6h12z"></path>
                                </svg></div>
                            <div class="_94c3edc8 new-type-popup-container"></div>
                        </div>
                    </div>
                    <div class="_7571b11b  FilterDesign2022 col-sm-12 col-lg-3 field-item" name="تاريخ التسليم">
                        <div class="c4c7bd5f FilterDesign2022 _6a9bbcff"><label class="e971c3da FilterDesign2022"
                                for="filter-title">تاريخ التسليم</label>
                            <div role="button" aria-haspopup="true" aria-label="Handover by"
                                class="f3117e76 FilterDesign2022 deliver-btn"><span
                                    class="b94532fd FilterDesign2022 a9ecbd9d"><span
                                        class="fontCompensation deliver-date-span">التسليم في</span></span><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"
                                    class="_5fdb6c65 FilterDesign2022">
                                    <path class="cls-1" d="M12 6L6 0 0 6h12z"></path>
                                </svg></div>
                            <div class="_94c3edc8 new-date-popup-container"></div>
                        </div>
                    </div>
                    <div class="_7571b11b c7a7e242 FilterDesign2022  col-sm-12 col-lg-3 field-item" name="خطة السداد">
                        <div class="c4c7bd5f FilterDesign2022 _6a9bbcff"><label
                                class="e971c3da FilterDesign2022 deliver-plan-span" for="filter-title">خطة السداد</label>
                            <div role="button" aria-haspopup="true" aria-label="Payment plan"
                                class="f3117e76 FilterDesign2022 deliver-plan-btn"><span
                                    class="b94532fd FilterDesign2022 a9ecbd9d"><span class="fontCompensation">خطة
                                        السداد</span></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"
                                    class="_5fdb6c65 FilterDesign2022">
                                    <path class="cls-1" d="M12 6L6 0 0 6h12z"></path>
                                </svg></div>
                            <div class="_94c3edc8 new-plan-popup-container"></div>
                        </div>
                    </div>
                    <div class="_7571b11b c7a7e242 FilterDesign2022 col-sm-12 col-lg-3 field-item" name="نسبة الإنجاز">
                        <div class="c4c7bd5f FilterDesign2022 _6a9bbcff"><label class="e971c3da FilterDesign2022"
                                for="filter-title">نسبة الإنجاز</label>
                            <div role="button" aria-haspopup="true" aria-label="Completion percentage"
                                class="f3117e76 FilterDesign2022 proceed-percent-btn"><span
                                    class="b94532fd FilterDesign2022 a9ecbd9d">
                                    <span class="fontCompensation proceed-percent-span">نسبة الإنجاز</span></span><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"
                                    class="_5fdb6c65 FilterDesign2022">
                                    <path class="cls-1" d="M12 6L6 0 0 6h12z"></path>
                                </svg></div>
                            <div class="_94c3edc8 new-rate-popup-container"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="for-sale" style="display: none;">
        <div aria-label="Completion status filter" class="d7f75fd0 field-item">
            <div class="_7e6c98a1">
                <button class="_01214aea _41568ae2 sale-type" data-id="all">الجميع</button>
                <button class="_01214aea sale-type" data-id="ready">جاهز</button>
                <button class="_01214aea sale-type" data-id="build">قيد الإنشاء</button>
            </div>
        </div>
    </div>

    <div id="to-rent" style="display: none;">
        <div class="_7571b11b d7f75fd0 FilterDesign2022 rent-div field-item" name="مدة الايجار">
            <div class="c4c7bd5f FilterDesign2022 _6a9bbcff"><label class="e971c3da FilterDesign2022"
                    for="filter-title">مدة
                    الايجار</label>
                <div role="button" aria-haspopup="true" aria-label="Frequency filter"
                    class="f3117e76 FilterDesign2022 month-btn">
                    <span class="dcddd2f4">
                        <span class="fontCompensation rent-duration-span">شهرياً</span>
                    </span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"
                        class="dcddd2f4 _5fdb6c65 FilterDesign2022">
                        <path class="cls-1" d="M12 6L6 0 0 6h12z"></path>
                    </svg>
                </div>
                <div class="_8507ec0e month-popup"></div>
            </div>
        </div>
    </div>
    <div style="display: none;">
        <div id="category-picker">
            <div class="_7ed07b14 FilterDesign2022 _1f227819 FilterDesign2022 container-popup-style" role="listbox">
                <div>
                    <div>
                        <ul class="_209aef59" name="Category picker">
                            <div class="_56cacfa2 FilterDesign2022">
                                <li class="da7e5b31 FilterDesign2022 _8420af98 residence-tab">سكني</li>
                                <li class="da7e5b31 FilterDesign2022 trad-tab">تجاري</li>
                            </div>
                            <div>
                                <div class="d536c037">
                                    <li class="_90e5f992 FilterDesign2022 residence-item" data-id="1">شقة</li>
                                    <li class="_90e5f992 FilterDesign2022 residence-item" data-id="2">فیلا</li>
                                    <li class="_90e5f992 FilterDesign2022 residence-item" data-id="3">دوبلكس</li>
                                    <li class="_90e5f992 FilterDesign2022 residence-item" data-id="4">بنتهاوس</li>
                                    <li class="_90e5f992 FilterDesign2022 residence-item" data-id="5">شاليه</li>
                                    <li class="_90e5f992 FilterDesign2022 residence-item" data-id="6">تاون هاوس</li>
                                    <li class="_90e5f992 FilterDesign2022 residence-item" data-id="7">توين هاوس</li>
                                </div>
                                <div class="d536c037">
                                    <li class="_90e5f992 FilterDesign2022 residence-item" data-id="8">غرفة</li>
                                    <li class="_90e5f992 FilterDesign2022 residence-item" data-id="9">أرض سكنية</li>
                                    <li class="_90e5f992 FilterDesign2022 residence-item" data-id="10">اي فيلا</li>
                                    <li class="_90e5f992 FilterDesign2022 residence-item" data-id="11">شقة فندقية</li>
                                    <li class="_90e5f992 FilterDesign2022 residence-item" data-id="12">كبينة</li>
                                    <li class="_90e5f992 FilterDesign2022 residence-item" data-id="13">سطج</li>
                                    <li class="_90e5f992 FilterDesign2022 residence-item" data-id="14">عقارات سكنية اخرى
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="a53ecd4f FilterDesign2022"><button class="_26257a5c FilterDesign2022 residence-reset"
                        aria-label="Reset">إعادة ضبط </button><button class="_2abfb0ed FilterDesign2022 residence-close"
                        aria-label="Close">تم</button></div>
            </div>
        </div>

        <div id="category-picker-trade">
            <div class="_7ed07b14 FilterDesign2022 _1f227819 FilterDesign2022 container-popup-style" role="listbox">
                <div>
                    <div>
                        <ul class="_209aef59" name="Category picker">
                            <div class="_56cacfa2 FilterDesign2022">
                                <li class="da7e5b31 FilterDesign2022 residence-tab">سكني</li>
                                <li class="da7e5b31 FilterDesign2022 _8420af98 trad-tab">تجاري</li>
                            </div>
                            <div>
                                <div class="d536c037">
                                    <li class="_90e5f992 FilterDesign2022 trade-item" data-id="1">مكتب</li>
                                    <li class="_90e5f992 FilterDesign2022 trade-item" data-id="2">مجمع تجاري</li>
                                    <li class="_90e5f992 FilterDesign2022 trade-item" data-id="3">مستودع</li>
                                    <li class="_90e5f992 FilterDesign2022 trade-item" data-id="4">عيادة</li>
                                    <li class="_90e5f992 FilterDesign2022 trade-item" data-id="5">مصنع</li>
                                    <li class="_90e5f992 FilterDesign2022 trade-item" data-id="6">جراج</li>
                                    <li class="_90e5f992 FilterDesign2022 trade-item" data-id="7">مطعم و كافيه</li>
                                    <li class="_90e5f992 FilterDesign2022 trade-item" data-id="8">محلات تجارية</li>
                                    <li class="_90e5f992 FilterDesign2022 trade-item" data-id="9">زراعي</li>
                                </div>
                                <div class="d536c037">
                                    <li class="_90e5f992 FilterDesign2022 trade-item" data-id="10">صناعي</li>
                                    <li class="_90e5f992 FilterDesign2022 trade-item" data-id="1">أرض تجارية</li>
                                    <li class="_90e5f992 FilterDesign2022 trade-item" data-id="1">صيدليه</li>
                                    <li class="_90e5f992 FilterDesign2022 trade-item" data-id="1">سطح</li>
                                    <li class="_90e5f992 FilterDesign2022 trade-item" data-id="1">وحدة طبية</li>
                                    <li class="_90e5f992 FilterDesign2022 trade-item" data-id="1">صالة عرض</li>
                                    <li class="_90e5f992 FilterDesign2022 trade-item" data-id="1">مكتب عمل جماعي</li>
                                    <li class="_90e5f992 FilterDesign2022 trade-item" data-id="1">عقارات تجارية اخرى
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="a53ecd4f FilterDesign2022"><button class="_26257a5c FilterDesign2022 trad-reset"
                        aria-label="Reset">إعادة ضبط</button><button class="_2abfb0ed FilterDesign2022 trad-close"
                        aria-label="Close">تم</button></div>
            </div>
        </div>
        <!-- Room -->
        <div id="room-num-temp">
            <div class="_7ed07b14 FilterDesign2022 f68aaf75 container-room-popup-style" role="listbox">
                <div>
                    <div class="_9170f477">عدد الغرف</div>
                    <ul class="bc3a360a" aria-label="Beds filter">
                        <li role="button" class="af0eefd2 room-item" data-id="1" data-val="استوديو">استوديو</li>
                        <li role="button" class="af0eefd2 room-item " data-id="2" data-val="1">1</li>
                        <li role="button" class="af0eefd2 room-item" data-id="3" data-val="2">2</li>
                        <li role="button" class="af0eefd2 room-item" data-id="4" data-val="3">3</li>
                        <li role="button" class="af0eefd2 room-item" data-id="5" data-val="4">4</li>
                        <li role="button" class="af0eefd2 room-item" data-id="6" data-val="5">5</li>
                        <li role="button" class="af0eefd2 room-item" data-id="7" data-val="6">6</li>
                        <li role="button" class="af0eefd2 room-item" data-id="8" data-val="7">7</li>
                        <li role="button" class="af0eefd2 room-item" data-id="9" data-val="8+">8+</li>
                    </ul>
                    <div class="_2940f078">عدد الحمامات</div>
                    <ul class="f83f7b64" aria-label="Baths filter">
                        <li role="button" class="bf512ee1 bath-item" data-id="1" data-val="1">1</li>
                        <li role="button" class="bf512ee1 bath-item" data-id="2" data-val="2">2</li>
                        <li role="button" class="bf512ee1 bath-item" data-id="3" data-val="3">3</li>
                        <li role="button" class="bf512ee1 bath-item" data-id="4" data-val="4">4</li>
                        <li role="button" class="bf512ee1 bath-item" data-id="5" data-val="5">5</li>
                        <li role="button" class="bf512ee1 bath-item" data-id="6" data-val="6+">6+</li>
                    </ul>
                </div>
                <div class="a53ecd4f FilterDesign2022"><button class="_26257a5c FilterDesign2022 room-reset"
                        aria-label="Reset">إعادة ضبط</button><button class="_2abfb0ed FilterDesign2022 room-close"
                        aria-label="Close">تم</button></div>
            </div>
        </div>
        <!-- End Room -->
        <!-- Price -->
        <div id="price-temp">
            <div class="_7ed07b14 FilterDesign2022 f75afec2 container-price-popup-style" role="listbox">
                <div>
                    <div class="a9137d71">
                        <div id="rangeSelectorTitle" class="_5d8ee914">السعر (ج.م)</div>
                        <div class="aba03c6f FilterDesign2022">
                            <div class="_85a5e050 FilterDesign2022"><span class="ad3db4ad FilterDesign2022">الحد
                                    الأدنى</span>
                                <div id="activeInputContainer" class="_8a6c576a input-container">
                                    <div class="_314d7144 FilterDesign2022"><input id="activeNumericInput"
                                            placeholder="أقل سعر" class="f4455c74 min-price" locales="en-UK"
                                            spellcheck="false" value=""></div>
                                    <div class="_94c3edc8"></div>
                                </div>
                            </div>
                            <div class="_85a5e050 FilterDesign2022"><span class="ad3db4ad FilterDesign2022">الحد
                                    الأعلى</span>
                                <div id="inactiveInputContainer" class="_8a6c576a input-container">
                                    <div class="_314d7144 FilterDesign2022"><input id="inactiveNumericInput"
                                            placeholder="أعلى سعر" class="f4455c74 max-price" locales="en-UK"
                                            spellcheck="false" value=""></div>
                                    <div class="_94c3edc8"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="a9137d71">
                        <div id="rangeSelectorTitle" class="_5d8ee914">مقدم (ج.م)</div>
                        <div class="aba03c6f FilterDesign2022">
                            <div class="_85a5e050 FilterDesign2022"><span class="ad3db4ad FilterDesign2022">الحد
                                    الأعلى</span>
                                <div id="inactiveInputContainer" class="_8a6c576a input-container">
                                    <div class="_314d7144 FilterDesign2022"><input id="inactiveNumericInput"
                                            placeholder="أعلى مقدم" class="f4455c74 pre-pay" locales="en-UK"
                                            spellcheck="false" value=""></div>
                                    <div class="_94c3edc8"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="a53ecd4f FilterDesign2022">
                    <button class="_26257a5c FilterDesign2022 price-reset" aria-label="Reset">إعادة ضبط</button>
                    <button class="_2abfb0ed FilterDesign2022 price-close" aria-label="Close">تم</button>
                </div>
            </div>
        </div>
        <!-- End Price -->
        <!-- Month -->
        <div id="month-temp">
            <div class="_7ed07b14 _6188bbb1" role="listbox">
                <div>
                    <div role="listbox" class="adba5e20">
                        <span aria-selected="false" class="_569dbe30">
                            <button aria-label="سنوياً" class="_1b1e5b9e _6ef643d6 rent-duration"
                                data-id="y">سنوياً</button>
                        </span>
                        <span aria-selected="true" class="_569dbe30">
                            <button aria-label="شهرياً" class="_1b1e5b9e _6ef643d6 _57a90f0e rent-duration"
                                data-id="m">شهرياً</button>
                        </span>
                        <span aria-selected="false" class="_569dbe30">
                            <button aria-label="أسبوعياً" class="_1b1e5b9e _6ef643d6 rent-duration"
                                data-id="w">أسبوعياً</button></span>
                        <span aria-selected="false" class="_569dbe30">
                            <button aria-label="يومياً" class="_1b1e5b9e _6ef643d6 rent-duration"
                                data-id="d">يومياً</button>
                        </span>
                        <span aria-selected="false" class="_569dbe30">
                            <button aria-label="الجميع" class="_1b1e5b9e _6ef643d6 rent-duration"
                                data-id="all">الجميع</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End month -->
        <div id="check-svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" fill="none" viewBox="0 0 16 12"
                class="_0c979dcb checkicon">
                <path fill="#249F62" d="M15.08 1.18l-10 10L.5 6.6l1.18-1.17 3.4 3.4L13.9 0l1.17 1.18z"></path>
            </svg>
        </div>
        {{-- trade area --}}
        <div id="trade-area-tmp">
            <div class="_7571b11b d7f75fd0 FilterDesign2022 field-item area-filter" aria-label="Area filter"
                name="المساحة (متر مربع)">
                <div class="c4c7bd5f FilterDesign2022 _6a9bbcff"><label class="e971c3da FilterDesign2022"
                        for="filter-title">المساحة (متر مربع)</label>
                    <div role="button" aria-haspopup="true" aria-label="Area filter"
                        class="f3117e76 FilterDesign2022 area-btn">
                        <span class="b94532fd FilterDesign2022 a9ecbd9d"><span class="fontCompensation">المساحة (متر
                                مربع)</span></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"
                            class="_5fdb6c65 FilterDesign2022">
                            <path class="cls-1" d="M12 6L6 0 0 6h12z"></path>
                        </svg>
                    </div>
                    <div class="_94c3edc8 area-popup"></div>
                </div>
            </div>
        </div>


        {{-- area popup --}}
        <div id="area-popup-tmp">
            <div class="_7ed07b14 FilterDesign2022 ac74a50e FilterDesign2022" role="listbox">
                <div>
                    <div class="aba03c6f FilterDesign2022">
                        <div class="_85a5e050 FilterDesign2022"><span class="ad3db4ad FilterDesign2022">الحد الأدنى متر
                                مربع</span>
                            <div id="activeInputContainer" class="_8a6c576a input-container">
                                <div class="_314d7144 FilterDesign2022">
                                    <input id="activeNumericInput" placeholder="أقل مساحة" class="f4455c74 min-area"
                                        locales="en-UK" spellcheck="false" value="">
                                </div>
                                <div class="_94c3edc8"></div>
                            </div>
                        </div>
                        <div class="_85a5e050 FilterDesign2022"><span class="ad3db4ad FilterDesign2022">الحد الأعلى متر
                                مربع</span>
                            <div id="inactiveInputContainer" class="_8a6c576a input-container">
                                <div class="_314d7144 FilterDesign2022">
                                    <input id="inactiveNumericInput" placeholder="أكبر مساحة" class="f4455c74 max-area"
                                        locales="en-UK" spellcheck="false" value="">
                                </div>
                                <div class="_94c3edc8"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="a53ecd4f FilterDesign2022">
                    <button class="_26257a5c FilterDesign2022 area-reset" aria-label="Reset">إعادة ضبط</button>
                    <button class="_2abfb0ed FilterDesign2022 area-close" aria-label="Close">تم</button>
                </div>
            </div>
        </div>
        {{-- End area popup --}}

        {{-- room-filter --}}
        <div id="room-filter-temp">
            <div aria-label="Beds &amp; Baths filter"
                class="_16f51cef _23a4bba0   col-sm-12 col-lg-3 field-item room-filter">
                <div class="_335572a0 FilterDesign2022 c484d8df"><label class="_55489622 FilterDesign2022"
                        for="filter-title">عدد الغرف &amp;
                        الحمامات</label>
                    <div role="button" aria-haspopup="true" aria-label="Beds &amp; Baths filter"
                        class="f3117e76 FilterDesign2022 room-btn"><span class="b94532fd FilterDesign2022 a9ecbd9d"><span
                                class="fontCompensation room-text">عدد الغرف
                                &amp;
                                الحمامات</span></span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"
                            class="_5fdb6c65 FilterDesign2022">
                            <path class="cls-1" d="M12 6L6 0 0 6h12z"></path>
                        </svg></div>
                    <div class="_94c3edc8 room-popup"></div>
                </div>
            </div>
        </div>



        {{-- new project --}}
        <div id="project-category-picker">
            <div class="_7ed07b14 FilterDesign2022 _1f227819 FilterDesign2022 container-popup-style" role="listbox">
                <div>
                    <div>
                        <ul class="_209aef59" name="Category picker">
                            <div class="_56cacfa2 FilterDesign2022">
                                <li class="da7e5b31 FilterDesign2022 _8420af98 proj-residence-tab">سكني</li>
                                <li class="da7e5b31 FilterDesign2022 proj-trad-tab">تجاري</li>
                            </div>
                            <div>
                                <div class="d536c037">
                                    <li class="_90e5f992 FilterDesign2022 proj-residence-item" data-id="1">شقة</li>
                                    <li class="_90e5f992 FilterDesign2022 proj-residence-item" data-id="2">فیلا</li>
                                    <li class="_90e5f992 FilterDesign2022 proj-residence-item" data-id="3">دوبلكس</li>
                                    <li class="_90e5f992 FilterDesign2022 proj-residence-item" data-id="4">بنتهاوس</li>
                                    <li class="_90e5f992 FilterDesign2022 proj-residence-item" data-id="5">شاليه</li>
                                    <li class="_90e5f992 FilterDesign2022 proj-residence-item" data-id="6">تاون هاوس
                                    </li>
                                    <li class="_90e5f992 FilterDesign2022 proj-residence-item" data-id="7">توين هاوس
                                    </li>
                                </div>
                                <div class="d536c037">
                                    <li class="_90e5f992 FilterDesign2022 proj-residence-item" data-id="8">غرفة</li>
                                    <li class="_90e5f992 FilterDesign2022 proj-residence-item" data-id="9">أرض سكنية
                                    </li>
                                    <li class="_90e5f992 FilterDesign2022 proj-residence-item" data-id="10">اي فيلا</li>
                                    <li class="_90e5f992 FilterDesign2022 proj-residence-item" data-id="11">شقة فندقية
                                    </li>
                                    <li class="_90e5f992 FilterDesign2022 proj-residence-item" data-id="12">كبينة</li>
                                    <li class="_90e5f992 FilterDesign2022 proj-residence-item" data-id="13">سطج</li>
                                    <li class="_90e5f992 FilterDesign2022 proj-residence-item" data-id="14">عقارات سكنية
                                        اخرى
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="a53ecd4f FilterDesign2022"><button class="_26257a5c FilterDesign2022 proj-residence-reset"
                        aria-label="Reset">إعادة ضبط </button><button
                        class="_2abfb0ed FilterDesign2022 proj-residence-close" aria-label="Close">تم</button></div>
            </div>
        </div>

        <div id="project-category-picker-trade">
            <div class="_7ed07b14 FilterDesign2022 _1f227819 FilterDesign2022 container-popup-style" role="listbox">
                <div>
                    <div>
                        <ul class="_209aef59" name="Category picker">
                            <div class="_56cacfa2 FilterDesign2022">
                                <li class="da7e5b31 FilterDesign2022 proj-residence-tab">سكني</li>
                                <li class="da7e5b31 FilterDesign2022 _8420af98 proj-trad-tab">تجاري</li>
                            </div>
                            <div>
                                <div class="d536c037">
                                    <li class="_90e5f992 FilterDesign2022 proj-trade-item" data-id="1">مكتب</li>
                                    <li class="_90e5f992 FilterDesign2022 proj-trade-item" data-id="2">مجمع تجاري</li>
                                    <li class="_90e5f992 FilterDesign2022 proj-trade-item" data-id="3">مستودع</li>
                                    <li class="_90e5f992 FilterDesign2022 proj-trade-item" data-id="4">عيادة</li>
                                    <li class="_90e5f992 FilterDesign2022 proj-trade-item" data-id="5">مصنع</li>
                                    <li class="_90e5f992 FilterDesign2022 proj-trade-item" data-id="6">جراج</li>
                                    <li class="_90e5f992 FilterDesign2022 proj-trade-item" data-id="7">مطعم و كافيه
                                    </li>
                                    <li class="_90e5f992 FilterDesign2022 proj-trade-item" data-id="8">محلات تجارية
                                    </li>
                                    <li class="_90e5f992 FilterDesign2022 proj-trade-item" data-id="9">زراعي</li>
                                </div>
                                <div class="d536c037">
                                    <li class="_90e5f992 FilterDesign2022 proj-trade-item" data-id="10">صناعي</li>
                                    <li class="_90e5f992 FilterDesign2022 proj-trade-item" data-id="1">أرض تجارية</li>
                                    <li class="_90e5f992 FilterDesign2022 proj-trade-item" data-id="1">صيدليه</li>
                                    <li class="_90e5f992 FilterDesign2022 proj-trade-item" data-id="1">سطح</li>
                                    <li class="_90e5f992 FilterDesign2022 proj-trade-item" data-id="1">وحدة طبية</li>
                                    <li class="_90e5f992 FilterDesign2022 proj-trade-item" data-id="1">صالة عرض</li>
                                    <li class="_90e5f992 FilterDesign2022 proj-trade-item" data-id="1">مكتب عمل جماعي
                                    </li>
                                    <li class="_90e5f992 FilterDesign2022 proj-trade-item" data-id="1">عقارات تجارية
                                        اخرى
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="a53ecd4f FilterDesign2022"><button class="_26257a5c FilterDesign2022 proj-trad-reset"
                        aria-label="Reset">إعادة ضبط</button><button class="_2abfb0ed FilterDesign2022 proj-trad-close"
                        aria-label="Close">تم</button></div>
            </div>
        </div>


        <div id="tmp-deliver-date">
            <div class="c03ec6dc">
                <div class="_7ed07b14 _6188bbb1" role="listbox">
                    <div class="ca09b891">
                        <div role="listbox" class="adba5e20">
                            <span aria-selected="false" class="_569dbe30">
                                <button aria-label="الجميع" class="_1b1e5b9e _6ef643d6 deliver-date-item"
                                    data-id="1">الجميع</button>
                            </span>
                            <span aria-selected="false" class="_569dbe30">
                                <button aria-label="الربع 2 من عام 2025" class="_1b1e5b9e _6ef643d6 deliver-date-item"
                                    data-id="1">الربع 2 من عام 2025</button>
                            </span>
                            <span aria-selected="true" class="_569dbe30">
                                <button aria-label="الربع 3 من عام 2025"
                                    class="_1b1e5b9e _6ef643d6 _57a90f0e deliver-date-item" data-id="2">الربع 3 من عام
                                    2025</button>
                            </span><span aria-selected="false" class="_569dbe30">
                                <button aria-label="الربع 4 من عام 2025" class="_1b1e5b9e _6ef643d6 deliver-date-item"
                                    data-id="3">الربع 4 من عام 2025</button></span><span aria-selected="false"
                                class="_569dbe30">
                                <button aria-label="الربع 1 من عام 2026" class="_1b1e5b9e _6ef643d6 deliver-date-item"
                                    data-id="4">الربع 1 من عام 2026</button></span><span aria-selected="false"
                                class="_569dbe30">
                                <button aria-label="الربع 2 من عام 2026" class="_1b1e5b9e _6ef643d6 deliver-date-item"
                                    data-id="5">الربع 2 من عام 2026</button></span><span aria-selected="false"
                                class="_569dbe30">
                                <button aria-label="الربع 3 من عام 2026" class="_1b1e5b9e _6ef643d6 deliver-date-item"
                                    data-id="6">الربع 3 من عام 2026</button></span><span aria-selected="false"
                                class="_569dbe30">
                                <button aria-label="الربع 4 من عام 2026" class="_1b1e5b9e _6ef643d6 deliver-date-item"
                                    data-id="7">الربع 4 من عام 2026</button></span><span aria-selected="false"
                                class="_569dbe30">
                                <button aria-label="2027" class="_1b1e5b9e _6ef643d6 deliver-date-item"
                                    data-id="8">2027</button></span><span aria-selected="false" class="_569dbe30">
                                <button aria-label="2028" class="_1b1e5b9e _6ef643d6 deliver-date-item"
                                    data-id="9">2028</button></span><span aria-selected="false" class="_569dbe30">
                                <button aria-label="2029" class="_1b1e5b9e _6ef643d6 deliver-date-item"
                                    data-id="10">2029</button></span><span aria-selected="false" class="_569dbe30">
                                <button aria-label="2030" class="_1b1e5b9e _6ef643d6 deliver-date-item"
                                    data-id="11">2030</button></span><span aria-selected="false" class="_569dbe30">
                                <button aria-label="2031" class="_1b1e5b9e _6ef643d6 deliver-date-item"
                                    data-id="12">2031</button></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="tmp-deliver-plan">
            <div class="ca3a88c7"><span class="a1c1940e b7af14b4">الدفعات قبل التسليم</span>
                <div class="_948d9e0a feff3441 d7383df5">
                    <div>0%</div>
                    <div>100%</div>
                </div>
                <div class="ccf4891f">
                    <div class="_16f164c5"></div>
                    <div class="_5c5caf4f" aria-label="Payment plan slider">
                        <div class="c7f9e147" style="left: 100%;">100%</div>
                        <div class="rheostat rheostat-horizontal " style="position: relative;">
                            <div class="rheostat-background"></div><button aria-valuemax="100" aria-valuemin="0"
                                aria-valuenow="100" aria-disabled="false" data-handle-key="0" class="rheostat-handle"
                                role="slider" tabindex="0" type="button"
                                style="left: 100%; position: absolute;"></button>
                            <div class="rheostat-progress" style="left: 0px; width: 100%;"></div>
                        </div>
                    </div>
                    <div class="f239a2a8"></div>
                </div>
                <div class="a53ecd4f FilterDesign2022"><button class="_26257a5c FilterDesign2022 deliver-plan-reset"
                        aria-label="Reset">إعادة ضبط</button><button class="_2abfb0ed FilterDesign2022 deliver-plan-close"
                        aria-label="Done">تم</button></div>
            </div>
        </div>

        {{-- /progress percent --}}
        <div id="temp-proceed-percent">
            <div class="c03ec6dc">
                <div class="_7ed07b14 _6188bbb1" role="listbox">
                    <div class="ca09b891">
                        <div role="listbox" class="adba5e20"><span aria-selected="false" class="_569dbe30"><button
                                    aria-label="الجميع" class="_1b1e5b9e _6ef643d6 proceed-percent-item"
                                    data-id="1">الجميع</button></span><span aria-selected="false"
                                class="_569dbe30"><button aria-label="0-25%"
                                    class="_1b1e5b9e _6ef643d6 proceed-percent-item"
                                    data-id="2">0-25%</button></span><span aria-selected="false"
                                class="_569dbe30"><button aria-label="25-50%"
                                    class="_1b1e5b9e _6ef643d6 proceed-percent-item"
                                    data-id="3">25-50%</button></span><span aria-selected="false"
                                class="_569dbe30"><button aria-label="50-75%"
                                    class="_1b1e5b9e _6ef643d6 proceed-percent-item"
                                    data-id="4">50-75%</button></span><span aria-selected="false"
                                class="_569dbe30"><button aria-label="75-100%"
                                    class="_1b1e5b9e _6ef643d6 proceed-percent-item"
                                    data-id="5">75-100%</button></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('map-js')
    <script>
        var mainurl = "{{ url('public/PicCate/icon/') }}";
        var token = '{{ csrf_token() }}';
        var subcityurl = "{{ url('subcity/ItemId') }}";
        var companyurl = "{{ url('company/get') }}";
    </script>

    @if (session('msg'))
        <script type="text/javascript">
            $(document).ready(function() {
                swal({
                    html: true,
                    html: "{{ Str::of(session('msg'))->toHtmlString() }}",
                    type: 'success',
                    confirmButtonColor: '#fdc93a',
                    confirmButtonText: 'تم'
                });

            });
        </script>
    @endif
@endsection
@section('js')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
     crossorigin="anonymous"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"
     integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> --}}

    <script type="text/javascript">
        var realstate = {
            dep: "", //real | proj
            location: "",
            purpose: "", //sale | rent
            saleType: "", //all | ready |build
            rentDuration: "m",
            type: "resd", //resd|trad
            residence: "",
            trade: "",
            rooms: [],
            baths: [],
            roomsSelected: [],
            bathsSelected: [],
            minPrice: 0,
            maxPrice: 0,
            prePay: 0,
            minArea: 0,
            maxArea: 0,
           

            projLocation: "",
            projType: "",
            projResidence: "",
            projTrade: "",
            projDeliverdate: "",
            projDeliverplan: "",
            projProceedPercent: "",
        };
        $(document).ready(function() {
            var togle = 0;
            //سكني 
            $(document).on('click', '.state-type', function(e) {

                $('.room-popup').empty();
                togleR = 0;
                toglep = 0;
                toglemonth = 0;
                $('.area-popup').empty();
                togleA = 0;
                var typeContent = $('#category-picker').html();

                if (togle == 0) {
                    //   $('.c333bc57').html(typeContent);
                    togle = 1;

                    if (realstate.type == "trad") {

                        //   $('.trade-item[data-id="'+realstate.trade+'"]').trigger('click');
                        tabTradClickStyle($('.trad-tab').html());
                        $('.residence-item').removeClass('selected-item');
                        $('.trade-item').removeClass('selected-item');
                        if (realstate.trade) {
                            var elmntText = $('.trade-item[data-id="' + realstate.trade + '"]').html();
                            $('.trade-item[data-id="' + realstate.trade + '"]').addClass('selected-item');

                            $('.state-type-span').html(elmntText);
                        }
                    } else {
                        tabResClickStyle($('.residence-tab').html());

                        $('.residence-item').removeClass('selected-item');
                        $('.trade-item').removeClass('selected-item');
                        if (realstate.residence) {

                            var elmntText = $('.residence-item[data-id="' + realstate.residence + '"]')
                                .html();
                            $('.residence-item[data-id="' + realstate.residence + '"]').addClass(
                                'selected-item');
                            $('.state-type-span').html(elmntText);

                        }

                    }

                } else {
                    $('.c333bc57').html('');
                    togle = 0;
                }


            });


            $(document).on('click', '.trad-tab ', function(e) {

                var typeContent = $('#category-picker-trade').html();
                $('.c333bc57').html(typeContent);
                $('.state-type-span').text($(this).text());


                // tabTradClickStyle($(this).text());

                realstate.type = "trad";
                realstate.trade = "";
                realstate.residence = "";
                // //area code/////////////////
                $filtercontent = $('#trade-area-tmp').html();
                $('.sale-filter .room-filter').replaceWith($filtercontent);


            });


            //
            $(document).on('click', '.residence-tab', function(e) {
                var typeContent = $('#category-picker').html();
                $('.c333bc57').html(typeContent);
                $('.state-type-span').text($(this).text());

                realstate.type = "resd";
                realstate.trade = "";
                realstate.residence = "";

                // //room code/////////////////
                $filtercontent = $('#room-filter-temp').html();
                $('.sale-filter .area-filter').replaceWith($filtercontent);

            });



            $(document).on('click', '.residence-reset , .trad-reset', function(e) {
                //  var typeContent = $('#category-picker').html();
                $('.c333bc57').empty();
                $('.state-type-span').html($('.residence-tab').html());

                realstate.type = "resd";
                realstate.trade = "";
                realstate.residence = "";

                // //room code/////////////////
                $filtercontent = $('#room-filter-temp').html();
                $('.sale-filter .area-filter').replaceWith($filtercontent);

            });
            $(document).on('click', '.residence-close,.trad-close', function(e) {
                togle = 0;
                $('.c333bc57').empty();

            });
            //
            function tabResClickStyle(textval) {
                var typeContent = $('#category-picker').html();
                $('.c333bc57').html(typeContent);
                $('.state-type-span').text(textval);
            }

            //

            function tabTradClickStyle(textval) {
                var typeContent = $('#category-picker-trade').html();
                $('.c333bc57').html(typeContent);
                $('.state-type-span').text(textval);
            }
            $(document).on('click', function(event) {
                // التحقق إذا كان النقر خارج عناصر FilterDesign2022
                if (!$(event.target).closest('.FilterDesign2022').length) {
                    $('.c333bc57').empty();
                    togle = 0;
                    $('.room-popup').empty();
                    togleR = 0;
                    $('.price-popup').empty();
                    toglep = 0;

                    $('.area-popup').empty();
                    togleA = 0;
                    ntogle = 0;
                    togledeliverdate = 0;
                    $('.new-type-popup-container').empty();
                    $('.new-date-popup-container').empty();

                    togleProceedPercent = 0;
                    togledeliverplane = 0;
                    $('.new-plan-popup-container').empty();
                    $('.new-rate-popup-container').empty();

                }
                //  if (!$(event.target).closest('.room-btn').length) {
                //      $('.room-popup').empty();
                //      togleR = 0;
                //  }
                //  if (!$(event.target).closest('.price-btn').length) {
                //     $('.price-popup').empty();
                //     toglep = 0;
                //  }
                if (!$(event.target).closest('.month-btn').length) {
                    $('.month-popup').empty();
                    toglemonth = 0;
                }
                // if (!$(event.target).closest('.area-btn').length) {
                //     $('.area-popup').empty();
                //     togleA = 0;
                // }

            });

            ///////////////////////////////
            $('._948d9e0a').on('click', function(e) {
                $(this).siblings().removeClass('_00dff92d');
                $(this).addClass('_00dff92d');
            });

            // $(document).on('click', '.aa693f28', function(e) {
            //      //sale rent
            //     $(this).siblings().removeClass('_409cfca5');
            //     $(this).addClass('_409cfca5');
            // });

            // $(document).on('click', '._01214aea', function(e) {
            //     //all  ready build
            //     $(this).siblings().removeClass('_41568ae2');
            //     $(this).addClass('_41568ae2');
            // });

            $('button[aria-label="Property search"]').click(function() {
                // إخفاء كل محتوى cf1ef6f4 الحالي
                $('div[aria-label="Mini form"] .cf1ef6f4').hide();

                // عرض محتوى property-search
                var propertyContent = $('#property-search').html();
                $('div[aria-label="Mini form"]').find('.cf1ef6f4').first().html(propertyContent).show();

                // تحديث حالة الأزرار
                $(this).closest('._948d9e0a').addClass('_00dff92d').siblings().removeClass('_00dff92d');
            });

            // عند النقر على زر "المشاريع الجديدة" (New Projects)
            $('button[aria-label="New Projects"]').click(function() {
                // إخفاء كل محتوى cf1ef6f4 الحالي
                $('div[aria-label="Mini form"] .cf1ef6f4').hide();

                // عرض محتوى new-projects
                var projectsContent = $('#new-projects').html();
                $('div[aria-label="Mini form"]').find('.cf1ef6f4').first().html(projectsContent).show();

                // تحديث حالة الأزرار
                $(this).closest('._948d9e0a').addClass('_00dff92d').siblings().removeClass('_00dff92d');
            });

            // تهيئة أولية: عرض محتوى العقارات افتراضياً
            $('button[aria-label="Property search"]').trigger('click');

            //////////////////////////////////////
            // تخزين المحتوى مسبقاً لتحسين الأداء
            var forSaleContent = $('#for-sale').html();
            var toRentContent = $('#to-rent').html();

            // تفويض الأحداث للأزرار الرئيسية
            $(document).on('click', 'button[aria-label="For sale"], button[aria-label="To rent"]', function(e) {
                // تحديد الهدف بناءً على الزر المنقوص
                var targetContent = $(this).attr('aria-label') === 'For sale' ? forSaleContent :
                    toRentContent;

                // استبدال محتوى "Completion status filter" فقط
                if ($(this).attr('aria-label') === 'For sale') {


                    $('._948d9e0a .rent-div').replaceWith(targetContent);

                } else {
                    //     $('div[aria-label="Completion status filter"]')
                    //   .fadeOut(200, function() {
                    //     $(this).replaceWith($(targetContent).fadeIn(200));
                    //   });
                    $('div[aria-label="Completion status filter"]').replaceWith(targetContent);
                }


                // تحديث حالة الأزرار
                $(this).addClass('_409cfca5').siblings().removeClass('_409cfca5');
            });
            $(document).on('click', '.purpose[data-id="rent"]', function(e) {
                var selector = $('.rent-duration[data-id="' + realstate.rentDuration + '"]');
                $('.rent-duration-span').html(selector.html());
            });
            // تفعيل الزر الافتراضي
            $('button[aria-label="For sale"]').trigger('click');
            // Room Num
            var togleR = 0;
            var roomset = 0;
            var roomCont = '';
            $(document).on('click', '.room-btn', function(e) {
                $('.c333bc57').empty();
                $('.price-popup').empty();
                toglep = 0;
                togle = 0;
                toglep = 0;
                toglemonth = 0;
                var typeContent = $('#room-num-temp').html();
                if (togleR == 0) {
                    $('.room-popup').html(typeContent);
                    togleR = 1;
                    var text = "";
                    $icon = $('#check-svg-icon').html();
                    $.each(realstate.rooms, function(key, room) {
                        text = $('.room-item[data-id="' + room + '"]').attr('data-val');
                        $('.room-item[data-id="' + room + '"]').html($icon + text).addClass(
                            'selected-item-room');
                    });
                    $.each(realstate.baths, function(key, bath) {
                        text = $('.bath-item[data-id="' + bath + '"]').attr('data-val');
                        $('.bath-item[data-id="' + bath + '"]').html($icon + text).addClass(
                            'selected-item-room');
                    });

                } else {
                    $('.room-popup').html('');
                    togleR = 0;
                }

            });

            //End Room Num

            /************** Price *************/
            var toglep = 0;
            var priceset = 0;

            var priceCont = '';
            $(document).on('click', '.price-btn', function(e) {
                $('.c333bc57').empty();
                $('.room-popup').html('');
                togleR = 0;
                togle = 0;
                togleR = 0;
                toglemonth = 0;
                $('.area-popup').empty();
                togleA = 0;
                var typeContent = $('#price-temp').html();
                if (toglep == 0) {
                    $('.price-popup').html(typeContent);

                    toglep = 1;

                    $('.sale-filter .min-price').val(realstate.minPrice);
                    $('.sale-filter .max-price').val(realstate.maxPrice);
                    $('.sale-filter .pre-pay').val(realstate.prePay);


                } else {
                    $('.price-popup').html('');
                    toglep = 0;
                }

            });
            /************** End Price *************/

            /************** Month *************/
            var toglemonth = 0;

            $(document).on('click', '.month-btn', function(e) {
                $('.c333bc57').empty();
                togle = 0;
                togleR = 0;
                toglep = 0;
                //fill saved value
                var selector = '.rent-duration[data-id="' + realstate.rentDuration + '"]';
                // $('.purpose[data-id="rent"]').html(selector.html());

                var typeContent = $('#month-temp').html();
                if (toglemonth == 0) {
                    $('.month-popup').html(typeContent);
                    toglemonth = 1;
                } else {
                    $('.month-popup').html('');
                    toglemonth = 0;
                }
                //child fill selecteds

                rentDurationFill(selector);


            });
            /************** End Month *************/
            /************** residence-item *************/
            $(document).on('click', '.residence-item', function(e) {
                $('.residence-item').removeClass('selected-item');
                $('.trade-item').removeClass('selected-item');
                $(this).addClass('selected-item');
                var val = $(this).attr('data-id');
                realstate.type = "resd";
                realstate.residence = val;
                realstate.trade = "";
                $('.state-type-span').html($(this).html());
                $('.c333bc57').html('');
                togle = 0;

            });
            $(document).on('click', '.trade-item', function(e) {
                $('.residence-item').removeClass('selected-item');
                $('.trade-item').removeClass('selected-item');
                $(this).addClass('selected-item');
                var val = $(this).attr('data-id');
                realstate.type = "trad";
                realstate.residence = "";
                realstate.trade = val;
                $('.state-type-span').html($(this).html());

                $('.c333bc57').html('');
                togle = 0;

            });
            /************** room-item *************/

            $(document).on('click', '.room-item', function(e) {

                var val = $(this).attr('data-id');
                var text = $(this).text();
                var isSelected = toggleRoom(realstate.rooms, val);

                if (isSelected) {
                    $(this).html(text).removeClass('selected-item-room');

                    // تعبئة حقل الإدخال باستخدام val()


                    //  addUniqueSorted(realstate.rooms,val);
                } else {
                    $icon = $('#check-svg-icon').html();
                    $(this).html($icon + text).addClass('selected-item-room');
                }
                fillroomText('room');

            });

            function fillroomText(type) {
                roomText(type);
                var listroomcont = fillInputWithContents(realstate.roomsSelected);
                var listbathcont = fillInputWithContents(realstate.bathsSelected);
                if (listroomcont || listbathcont) {
                    if (realstate.bathsSelected.length > 0) {
                        listbathcont = listbathcont + ' ' + 'حمام';
                    }
                    if (realstate.roomsSelected.length > 0) {
                        listroomcont = listroomcont + ' ' + 'غرفة';
                    }
                    $('.sale-filter .room-text').html(joinWithSlash(listroomcont, listbathcont));
                } else {
                    //   $('.room-text').html("لم يتم إدخال بيانات");
                }


            }

            function joinWithSlash(a, b) {
                return [a, b].filter(Boolean).join(' / ');
            }

            function roomText(type) {
                if (type == 'room') {
                    realstate.roomsSelected = realstate.rooms.map((val, index) => ({
                        id: val,
                        content: $('.room-item[data-id="' + val + '"]').attr('data-val')
                    }));

                } else {
                    //bath
                    realstate.bathsSelected = realstate.baths.map((val, index) => ({
                        id: val,
                        content: $('.bath-item[data-id="' + val + '"]').attr('data-val')
                    }));

                }
            }

            function fillInputWithContents(array) {
                // استخدام $.map لاستخراج المحتويات
                var contents = $.map(array, function(item) {
                    return item.content;
                });

                // دمج المحتويات مع فواصل
                var combinedContents = contents.join(', ');
                return combinedContents;

            }

            $(document).on('click', '.bath-item', function(e) {
                var text = $(this).text();
                var val = $(this).attr('data-id');
                var isSelected = toggleRoom(realstate.baths, val);
                if (isSelected) {
                    $(this).html(text).removeClass('selected-item-room');
                } else {
                    $icon = $('#check-svg-icon').html();
                    $(this).html($icon + text).addClass('selected-item-room');
                }
                // addUniqueSorted(realstate.baths,val);

                fillroomText('bath');
            });


            // reset room
            $(document).on('click', '.room-reset', function(e) {
                $filtercontent = $('#room-filter-temp .room-text').html();
                $('.sale-filter .room-text').html($filtercontent);
                // $('.sale-filter .checkicon').replaceWith('');
                $('.sale-filter .room-item').each(function() {
                    var dataVal = $(this).data('val');
                    $(this).html(dataVal);
                });
                $('.sale-filter .bath-item').each(function() {
                    var dataVal = $(this).data('val');
                    $(this).html(dataVal);
                });
                $('.room-item').removeClass('selected-item-room');
                $('.bath-item').removeClass('selected-item-room');
                realstate.baths = [];
                realstate.rooms = [];
                realstate.roomsSelected = [];
                realstate.bathsSelected = [];

            });

            $(document).on('click', '.room-close', function(e) {
                togleR = 0;
                $('.room-popup').empty();

            });
            // price reset
            $(document).on('click', '.price-close', function(e) {
                toglep = 0;
                $('.price-popup').empty();

            });
            $(document).on('click', '.price-reset', function(e) {
                $('.min-price').val('');
                $('.max-price').val('');
                $('.pre-pay').val('');

                realstate.minPrice = '';
                realstate.maxPrice = '';
                realstate.prePay = '';
            });



            /***********Events ****/
            $(document).on('click', '.dep', function(e) {

                var val = $(this).attr('data-id');
                realstate.dep = val;

            });
            $(document).on('click', '.purpose', function(e) {
                //style
                $(this).siblings().removeClass('_409cfca5');
                $(this).addClass('_409cfca5');

                var val = $(this).attr('data-id');
                realstate.purpose = val;
                //child fill selecteds
                $('.sale-type[data-id="' + realstate.saleType + '"]').trigger('click');

            });
            $(document).on('click', '.sale-type', function(e) {
                //style
                $(this).siblings().removeClass('_41568ae2');
                $(this).addClass('_41568ae2');

                var val = $(this).attr('data-id');
                realstate.saleType = val;
            });

            /********/
            function rentDurationFill(selector) {
                $('.rent-duration').removeClass('_57a90f0e');
                $(selector).addClass('_57a90f0e');
                // 2. إضافة الكلاس للزر المنقوص فقط

            }
            $(document).on('click', '.rent-duration', function(e) {
                $('.rent-duration').removeClass('_57a90f0e');
                $(this).addClass('_57a90f0e');

                var val = $(this).attr('data-id');
                realstate.rentDuration = val;
                $('.rent-duration-span').html($(this).html());

            });



            function addUniqueSorted(array, value) {
                // التحقق من أن القيمة ليست موجودة مسبقاً
                if ($.inArray(value, array) !== -1) {
                    return false;
                }

                // إضافة القيمة الجديدة
                array.push(value);

                // ترتيب المصفوفة تصاعدياً
                array.sort(function(a, b) {
                    return a - b;
                });

                return true;
            }

            function removeSorted(array, value) {
                // البحث عن موقع القيمة
                var index = $.inArray(value, array);

                if (index === -1) {
                    return false;
                }

                // حذف القيمة
                array.splice(index, 1);

                return true;
            }

            function toggleRoom(array, value) {
                const index = array.indexOf(value);

                if (index !== -1) {
                    removeSorted(array, value)
                    // العنصر موجود - نقوم بحذفه
                    //  this.rooms.splice(index, 1);
                    return true;
                } else {
                    addUniqueSorted(array, value)
                    // العنصر غير موجود - نضيفه
                    // this.rooms.push(room);
                    return false;
                }
            }

            // area events
            var togleA = 0;

            $(document).on('click', '.area-btn', function(e) {
                $('.c333bc57').empty();
                $('.price-popup').empty();
                toglep = 0;
                togle = 0;
                toglep = 0;
                toglemonth = 0;
                var typeContent = $('#area-popup-tmp').html();
                if (togleA == 0) {
                    $('.area-popup').html(typeContent);
                    togleA = 1;

                    $('.sale-filter .min-area').val(realstate.minArea);
                    $('.sale-filter .max-area').val(realstate.maxArea);

                } else {
                    $('.area-popup').html('');
                    togleA = 0;
                }

            });


            $(document).on('input', '.min-price', function(e) {
                realstate.minPrice = $(this).val().trim();
            });
            $(document).on('input', '.max-price', function(e) {
                realstate.maxPrice = $(this).val().trim();
            });
            $(document).on('input', '.pre-pay', function(e) {
                realstate.prePay = $(this).val().trim();
            });
            $(document).on('input', '.min-area', function(e) {
                realstate.minArea = $(this).val().trim();
            });
            $(document).on('input', '.max-area', function(e) {
                realstate.maxArea = $(this).val().trim();
            });
            $(document).on('input', '.location-input', function(e) {
                realstate.location = $(this).val().trim();
            });

            //area reset


            $(document).on('click', '.area-close', function(e) {
                togleA = 0;
                $('.area-popup').empty();

            });
            $(document).on('click', '.area-reset', function(e) {
                $('.min-area').val('');
                $('.max-area').val('');

                realstate.minArea = '';
                realstate.maxArea = '';
            });
            ///////////////////////////// new Projects   /////////////
            var ntogle = 0;
            $(document).on('click', '.new-state-type', function(e) {

                $('.new-date-popup-container').empty();
                $('.new-plan-popup-container').empty();
                $('.new-rate-popup-container').empty();
                togledeliverdate = 0;
                togledeliverplane = 0;
                togleProceedPercent = 0;

                if (ntogle == 0) {

                    ntogle = 1;

                    if (realstate.projType == "trad") {
                        var typeContent = $('#project-category-picker-trade').html();
                        $('.new-type-popup-container').html(typeContent);

                        //   $('.trade-item[data-id="'+realstate.trade+'"]').trigger('click');
                        projTabTradClickStyle($('.proj-trad-tab').html());
                        $('.proj-residence-item').removeClass('selected-item');
                        $('.proj-trade-item').removeClass('selected-item');
                        if (realstate.projTrade) {
                            var elmntText = $('.proj-trade-item[data-id="' + realstate.projTrade + '"]')
                                .html();
                            $('.proj-trade-item[data-id="' + realstate.projTrade + '"]').addClass(
                                'selected-item');

                            $('.state-type-span').html(elmntText);
                        }
                    } else {
                        var typeContent = $('#project-category-picker').html();
                        $('.new-type-popup-container').html(typeContent);
                        tabResClickStyle($('.proj-residence-tab').html());

                        $('.proj-residence-item').removeClass('selected-item');
                        $('.proj-trade-item').removeClass('selected-item');
                        if (realstate.projResidence) {

                            var elmntText = $('.proj-residence-item[data-id="' + realstate.projResidence +
                                    '"]')
                                .html();
                            $('.proj-residence-item[data-id="' + realstate.projResidence + '"]').addClass(
                                'selected-item');
                            $('.state-type-span').html(elmntText);

                        }

                    }

                } else {
                    $('.new-type-popup-container').html('');
                    ntogle = 0;
                }

            });



            $(document).on('click', '.proj-residence-tab', function(e) {
                var typeContent = $('#project-category-picker').html();

                $('.new-type-popup-container').html(typeContent);
                $('.state-type-span').text($(this).text());

                $(this).siblings().removeClass('_8420af98');
                $(this).addClass('_8420af98');
                realstate.projType = "resd";


                // //room code/////////////////
                // $filtercontent = $('#room-filter-temp').html();
                // $('.sale-filter .area-filter').replaceWith($filtercontent);

            });

            $(document).on('click', '.proj-trad-tab ', function(e) {

                var typeContent = $('#project-category-picker-trade').html();
                $('.new-type-popup-container').html(typeContent);
                $('.state-type-span').text($(this).text());
                $(this).siblings().removeClass('_8420af98');
                $(this).addClass('_8420af98');

                // tabTradClickStyle($(this).text());

                realstate.projType = "trad";



            });
            $(document).on('click', '.proj-residence-item', function(e) {
                $('.proj-residence-item').removeClass('selected-item');
                $('.proj-trade-item').removeClass('selected-item');
                $(this).addClass('selected-item');
                var val = $(this).attr('data-id');
                realstate.projType = "resd";
                realstate.projResidence = val;
                realstate.projTrade = "";
                $('.state-type-span').html($(this).html());
                $('.new-type-popup-container').html('');
                ntogle = 0;

            });
            $(document).on('click', '.proj-trade-item', function(e) {
                $('.proj-residence-item').removeClass('selected-item');
                $('.proj-trade-item').removeClass('selected-item');
                $(this).addClass('selected-item');
                var val = $(this).attr('data-id');
                realstate.projType = "trad";
                realstate.projResidence = "";
                realstate.projTrade = val;
                $('.state-type-span').html($(this).html());

                $('.new-type-popup-container').html('');
                ntogle = 0;

            });

            function projTabTradClickStyle(textval) {
                var typeContent = $('#project-category-picker-trade').html();
                $('.c333bc57').html(typeContent);
                $('.state-type-span').text(textval);
            }
            $(document).on('click', '.proj-residence-reset , .proj-trad-reset', function(e) {
                //  var typeContent = $('#category-picker').html();
                $('.new-type-popup-container').empty();
                $('.state-type-span').html($('.proj-residence-tab').html());

                realstate.projType = "resd";
                realstate.projTrade = "";
                realstate.projResidence = "";
                ntogle = 0;
                // //room code/////////////////
                // $filtercontent = $('#room-filter-temp').html();
                // $('.sale-filter .area-filter').replaceWith($filtercontent);

            });
            $(document).on('click', '.proj-residence-close,.proj-trad-close', function(e) {
                ntogle = 0;
                $('.new-type-popup-container').empty();

            });
            var togledeliverdate = 0;
            $(document).on('click', '.deliver-btn', function(e) {
                
                $('.new-type-popup-container').empty();
              //  $('.new-date-popup-container').empty();
                $('.new-plan-popup-container').empty();
                $('.new-rate-popup-container').empty();
                ntogle = 0;
               // togledeliverdate = 0;
                togledeliverplane = 0;
                togleProceedPercent = 0;

                //fill saved value
                var selector = '.deliver-date-item[data-id="' + realstate.projDeliverdate + '"]';
                // deliver-date-item" data-id="9"

                var typeContent = $('#tmp-deliver-date').html();
                if (togledeliverdate == 0) {
                    $('.new-date-popup-container').html(typeContent);
                    togledeliverdate = 1;
                } else {
                    $('.new-date-popup-container').html('');
                    togledeliverdate = 0;
                }
                //child fill selecteds

                deliverDurationFill(selector);


            });

            function deliverDurationFill(selector) {
                $('.deliver-date-item').removeClass('_57a90f0e');
                $(selector).addClass('_57a90f0e');
                // 2. إضافة الكلاس للزر المنقوص فقط

            }

            $(document).on('click', '.deliver-date-item', function(e) {
                $('.deliver-date-item').removeClass('_57a90f0e');
                $(this).addClass('_57a90f0e');

                var val = $(this).attr('data-id');
                realstate.projDeliverdate = val;
                $('.deliver-date-span').html($(this).html());
                $('.new-date-popup-container').empty();

            });

            ///////////////////deliver-plan-btn

            var togledeliverplane = 0;
            $(document).on('click', '.deliver-plan-btn', function(e) {

                //fill saved value
                //     var selector = '.deliver-date-item[data-id="' + realstate.projDeliverdate + '"]';
                $('.new-type-popup-container').empty();
               $('.new-date-popup-container').empty();
                //$('.new-plan-popup-container').empty();
                $('.new-rate-popup-container').empty();
                ntogle = 0;
                togledeliverdate = 0;
              //  togledeliverplane = 0;
                togleProceedPercent = 0;

                var typeContent = $('#tmp-deliver-plan').html();
                if (togledeliverplane == 0) {
                    $('.new-plan-popup-container').html(typeContent);

                    togledeliverplane = 1;
                } else {
                    $('.new-plan-popup-container').html('');
                    togledeliverplane = 0;
                }
                //child fill selecteds

                // deliverDurationFill(selector);
            });

            function deliverDurationFill(selector) {
                $('.deliver-date-item').removeClass('_57a90f0e');
                $(selector).addClass('_57a90f0e');
            }

            // $(document).on('click', '.deliver-date-item', function(e) {
            //     $('.deliver-date-item').removeClass('_57a90f0e');
            //     $(this).addClass('_57a90f0e');

            //     var val = $(this).attr('data-id');
            //     realstate.projDeliverdate = val;
            //     $('.deliver-date-span').html($(this).html());
            //     $('.new-date-popup-container').empty();

            // });
            var togleProceedPercent = 0;
            $(document).on('click', '.proceed-percent-btn', function(e) {
                $('.new-type-popup-container').empty();
               $('.new-date-popup-container').empty();
                $('.new-plan-popup-container').empty();
            //    $('.new-rate-popup-container').empty();
                ntogle = 0;
                togledeliverdate = 0;
            togledeliverplane = 0;
               // togleProceedPercent = 0;

                //fill saved value
                var selector = '.proceed-percent-item[data-id="' + realstate.projProceedPercent + '"]';
                // deliver-date-item" data-id="9"

                var typeContent = $('#temp-proceed-percent').html();
                if (togleProceedPercent == 0) {
                    $('.new-rate-popup-container').html(typeContent);
                    togleProceedPercent = 1;
                } else {
                    $('.new-rate-popup-container').html('');
                    togleProceedPercent = 0;
                }

                ProceedPercentFill(selector);
            });

            $(document).on('click', '.deliver-plan-close', function(e) {
                togledeliverplane = 0;
                $('.new-plan-popup-container').empty();
            });
            $(document).on('click', '.deliver-plan-reset', function(e) {
                //  var typeContent = $('#category-picker').html();

                $('.new-plan-popup-container').empty();
                $('.newproject-filter .deliver-plan-span').html($('#tmp-deliver-plan .deliver-plan-span')
                    .html());

                realstate.projDeliverplan = "";
                togledeliverplane = 0;
                // //room code/////////////////
                // $filtercontent = $('#room-filter-temp').html();
                // $('.sale-filter .area-filter').replaceWith($filtercontent);

            });



            function ProceedPercentFill(selector) {
                $('.proceed-percent-item').removeClass('_57a90f0e');
                $(selector).addClass('_57a90f0e');
                // 2. إضافة الكلاس للزر المنقوص فقط

            }
            $(document).on('click', '.proceed-percent-item', function(e) {
                $('.proceed-percent-item').removeClass('_57a90f0e');
                $(this).addClass('_57a90f0e');

                var val = $(this).attr('data-id');
                realstate.projProceedPercent = val;
                $('.proceed-percent-span').html($(this).html());
                $('.new-rate-popup-container').empty();
                togleProceedPercent = 0;
            });

        });
    </script>
@endsection
@section('css')
    <style>
        .leaflet-top {
            top: 50px !important;
        }
    </style>
    <link rel="stylesheet" href="{{ url('/public/assets/site/css/akar-style.css') }}" />
@endsection
