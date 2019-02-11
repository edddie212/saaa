@extends('master')

@section('content')
{{ Breadcrumbs::render('shop') }}
<div class="page-breadcrumb">
    <div class="container">
        <h4> @if( !empty($title) ) {{ $title }} @endif </h4>
    </div>
  </div>

<div class="space-50"></div>
<div class="container ">
    <h3 class="text-uppercase font-400 title-font text-center margin-b-30">Shop by category</h3>
        <div class="product-slider owl-carousel owl-theme">

            @if(! empty($categories) )
            @foreach($categories as $category)

            <div class="item">
                <a class="category-box" href="{{url('shop/' . $category['url'] )}}">
                    <img src="{{ asset('images/'. $category['images']) }}" alt="" class="img-responsive">
                    <div class="category-text">
                        <h4 class="text-uppercase">{{ $category['title']}}</h4>
                        <p>{!! str_limit($category['description'], 20)!!}</p>
                    </div>
                </a><!--/category-box-->
            </div><!--/item-->
            @endforeach
             @else
             <div class="item">
                 <p>No Categories....</p>
                 </a><!--/category-box-->
             </div>
            @endif
        </div>

        <div class="space-80"></div>
        <div class="split-section">
            <div class="split-image" style="background:url(images/bg1.jpg) "></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <h1 class="margin-b-20">The super JS Special prices from $6900 JX</h1>
                        <p class="margin-b-20">
                            Super strong and crazy monster of bikes come & check them up
                        </p>
                        <a href="{{ url('shop/mountain-regular-bicycle/super-jx') }}" class="btn btn-primary"> Buy now  </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-80"></div>




</div>
<div class="space-60"></div>

@endsection
