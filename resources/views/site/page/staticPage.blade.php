@extends('site.layouts.layout')
@section('content')

 
<div class="container">   

    <section class=" edit-info"   style="margin-bottom:5px">
        <div class="container">
            <div class="boxinfo-company  "  >
                <div class="title-companys m">
                    <h3>{{ $page->page_name }}</h3>
                
                </div>
            </div>
            <div class="u-clearfix u-container-align-center u-section-2 info-company-desc "  >
                <div class="box-company"  style="padding:10px;">
 <p>{{Str::of($page->content)->toHtmlString()}}</p>
            </div>
        </div>

        </div>       
    
    </section>
    
        <div style="margin-bottom: 75px;">
</div>    
</div>
@endsection 
@section('page-title')
| {{$page->page_name}}
@endsection
@section('keywords')
,{{ $page->keywords  }} 
@endsection
 
 
@section('map-js')
<script>
 
</script>
 
 
@endsection
@section('css')
    <!-- #region -->
    <link rel="stylesheet" href="{{ url('/public/assets/site/css/stylepage.css?') }}<?=time()?>" />
    <link rel="stylesheet" href="{{ url('/public/assets/site/css/Pricing.css?') }}<?=time()?>" />
@endsection
