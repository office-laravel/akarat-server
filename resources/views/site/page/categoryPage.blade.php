@extends('site.layouts.layout')
@section('content')

 
<div class="container">   

    <section class=" edit-info"   style="margin-bottom:10px">
        <div class="container">
            <div class="boxinfo-company f"  style="margin-bottom:15px" >
                <div class="title-companys m">
                    <h3>{{ $category->category_name }}</h3>
                
                </div>
            </div>
            <div class="box-part-main">

                @isset( $companies)
                    @foreach ( $companies as $item)
                        <div class="list-company">
                            <a href="{{ url('company/get', $item->id) }}">
                                <div class="company-preview-image">
                                    <img src="{{ $item->package->logo == 1 && $item->logo ? url('public/picCompany/' . $item->logo) : url('public/picCompany/' . 'default.webp') }}"
                                        alt="{{ $item->site_name }}">
                                </div>
                            </a>
                            <div class="title_company">
                                <a href="{{ url('company/get', $item->id) }}">
                                    <h2>{{ $item->site_name }}</h2>
                                </a>
                                <div class="views_feature">
                                    <span class="title-span"><i class="far fa-eye"></i>{{ $item->views }}</span>
                                    <p>موصى به</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
               
                @endisset
            </div>

        </div>       
      <div > {{$companies->onEachSide(5)->links() }}</div> 
    </section>
 
    <div style="margin-bottom: 75px;">
</div>
    
</div>

@endsection 
@section('page-title')
| {{$category->category_name}}
@endsection
@section('keywords')
,{{ $category->keywords  }} 
@endsection
@section('site_og')
@if ($category->category_name)
<meta property="og:description" content="{{ $category->category_name}} ">
@endif
  

 
@endsection
 
@section('map-js')
<script>
    var mainurl = "{{ url('public/PicCate/icon/') }}";
    var token = '{{ csrf_token() }}';
    var comId = ''
    var companyurl = "{{ url('company/get') }}";
</script>
 
 
@endsection
@section('css')
    <!-- #region -->
    <link rel="stylesheet" href="{{ url('/public/assets/site/css/stylepage.css?') }}<?=time()?>" />
    
@endsection
