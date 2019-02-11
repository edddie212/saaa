@extends('master')

@section('content')
{{ Breadcrumbs::render('home') }}

<!--start master slider-->
<div class="clearfix"></div>
<div class="slider-main" style="overflow: hidden;">
    <!-- Master Slider -->
    <div class="master-slider ms-skin-default" id="masterslider">
        <!-- slide 1 -->
        <div class="ms-slide slide-1" data-delay="8">
            <!-- slide background -->
            <img src="{{ asset('lib/boland/plugins/masterslider/style/blank.gif') }}" data-src="{{ asset('images/slide1.jpg') }}" alt="Slide1 background"/>
            <h3 class="text-white ms-layer full-width title1 white-color text-center"
                style="left:0px;top: 180px;"
                data-type="text"
                data-effect="fade"
                data-duration="1800"
                data-delay="0" >All type of bikes & scooters</h3>
            <h5 class="text-white ms-layer sub-title2 white-color full-width text-center"
                style="left:0px; top: 260px;"
                data-type="text"
                data-effect="fade"
                data-duration="1800"
                data-delay="0"
                >New collection with 40% OFF</h5>
            <div class="ms-layer price-link text-center full-width"
                 style="left: 0px; top:300px;"
                 data-type="text"
                 data-effect="fade"
                 data-duration="1800"
                 data-delay="0"> <a href="{{ url('shop') }}" class="btn btn-primary">Shop Now</a></div> </div>
        <!-- end of slide -->
        <!-- slide 2 -->
        <div class="ms-slide slide-2" data-delay="6">

            <!-- slide background -->
            <img src="{{ asset('lib/boland/plugins/masterslider/style/blank.gif') }}" data-src="{{ asset('images/slide2.jpg') }}" alt="Slide1 background"/>
            <h3 class="text-white ms-layer full-width title1 text-center"
                style="left:0px;top: 90px;"
                data-type="text"
                data-delay="0"
                data-duration= "1000"
                data-effect="fade">New  Crazy Scooters collection</h3>
            <h5 class="text-white ms-layer sub-title2 full-width text-center"
                style="left:0px; top: 160px;"
                data-type="text"
                data-effect="fade"
                data-duration="4500"
                data-delay="0"
                > 24 hours online orders collection with 40% OFF</h5>
            <div class="text-white ms-layer price-link text-center full-width"
                 style="left: 0px; top:200px;"
                 data-type="text"
                 data-delay="0"
                 data-duration="1500"
                 data-effect="fade"> <a href="{{ url('shop') }}" class="btn btn-primary">Shop Now</a></div> </div>
        <!-- end of slide -->
        <!-- slide 3 -->
        <div class="ms-slide slide-3" data-delay="8">
            <!-- slide background -->
            <img src="{{ asset('lib/boland/plugins/masterslider/style/blank.gif') }}" data-src="{{ asset('images/slide3.jpg')}}" alt="Slide1 background"/>
            <h3 class="text-white ms-layer title1 text-left"
                style="left:15px;top: 190px;"
                data-type="text"
                data-effect="fade"
                data-duration="1800"
                data-delay="0" >50% off on all Boards in the shop</h3>
            <h5 class="text-white ms-layer sub-title2 text-left"
                style="left:15px; top: 260px;"
                data-type="text"
                data-effect="fade"
                data-duration="1800"
                data-delay="0"
                >The best bikes, scooters, boards lowest price</h5>
            <div class="text-white ms-layer price-link text-left"
                 style="left: 15px; top:300px;"
                 data-type="text"
                 data-effect="fade"
                 data-duration="1800"
                 data-delay="0"> <a href="{{ url('shop') }}" class="btn btn-primary">Shop Now</a></div> </div>
        <!-- end of slide -->
    </div>
</div>
<!-- end Master Slider -->
<div class="space-80"></div>
<div class="container">
    <div class="row">
        <div class="col-sm-4 margin-b-30">
            <a class="image-box" href="blog.html">
                <img src="{{ asset('images/news_pic.jpg') }}" alt="" class="img-responsive">
                <div class="img-overlay">
                    <h1>Latest news</h1>
                </div>
            </a>
        </div>
        <div  class="col-sm-4 margin-b-30">
            <a class="image-box" href="about.html">
                <img src="{{ asset('images/shop_pic.jpg') }}"  class="img-responsive">
                <div class="img-overlay">
                    <h1>Our Store</h1>
                </div>
            </a>
        </div>
        <div class="col-sm-4 margin-b-30">
            <a class="image-box" href="{{ url('shop') }}">
                <img src="{{ asset('images/shop_online.jpg') }}" alt="" class="img-responsive">
                <div class="img-overlay">
                    <h1>Shop Online</h1>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 text-center justify-content-center">
       <h3 class="h2">Did you know</h3>
       <p >Mountain biking is a sport of riding bicycles off-road, often over rough terrain, using specially designed mountain bikes. Mountain bikes share similarities with other bikes but incorporate features designed to enhance durability and performance in rough terrain. Mountain biking can generally be broken down into multiple categories: cross country, trail riding, all mountain (also referred to as "Enduro"), downhill, freeride and dirt jumping. However, the majority of mountain biking falls into the categories of Trail and Cross Country riding styles.

        This non-sport requires endurance, core strength and balance, bike handling skills, and self-reliance. Advanced riders pursue both steep technical descents and high incline climbs. In the case of freeride, downhill, and dirt jumping, aerial maneuvers are performed off both natural features and specially constructed jumps and ramps.

        Mountain bikers ride on off-road trails such as singletrack, back-country roads, fire roads, and often venture to ski resorts that stay open in the summer for such activities. Because riders are often far from civilization, there is a strong ethic of self-reliance in the sport. Riders learn to repair broken bikes and flat tires to avoid being stranded. Many riders carry a backpack, including water, food, tools for trailside repairs, and a first aid kit in case of injury. Group rides are common, especially on longer treks. Mountain bike orienteering adds the skill of map navigation to mountain biking.
     </p>
     <br>
    </div>
  </div>
</div>
<br>
<div class="space-80"></div>
<div class="container">
    <div class="row">
      <div class="col-sm-4 margin-b-30">
          <div class="img-overlay">
              <img src="{{ asset('images/bg4.jpg') }}"  class="img-responsive">
          </div>
      </div>
      <div class="col-sm-4 margin-b-30">
          <div class="img-overlay">
              <img src="{{ asset('images/bg2.jpg') }}"  class="img-responsive">
          </div>
      </div>
        <div class="col-sm-4 margin-b-30">
            <div class="img-overlay">
                <img src="{{ asset('images/bg3.jpg') }}"  class="img-responsive">
            </div>
        </div>
    </div>
</div>

<div class="space-100"></div>
<div class="features">
    <div class="container">
        <div class="row">
             <div class="col-sm-4">
            <div class="icon-box-left">
                <i class="fa fa-refresh"></i>
                <div class="overflow-hidden">
                    <h4>Hassle-free replacement</h4>
                    <p>7 Days easy replacement policy on All products</p>
                </div>
            </div>
        </div><!--/col-->
        <div class="col-sm-4">
            <div class="icon-box-left">
                <i class="fa fa-credit-card"></i>
                <div class="overflow-hidden">
                    <h4>secure payment</h4>
                    <p>We support Debit & Credit Cards, Wallet, Paypal</p>
                </div>
            </div>
        </div><!--/col-->
        <div class="col-sm-4">
            <div class="icon-box-left">
                <i class="fa fa-truck"></i>
                <div class="overflow-hidden">
                    <h4>Free Shipping</h4>
                    <p>Free shipping worldwide on  order above $150</p>
                </div>
            </div>
        </div><!--/col-->
        </div>
    </div>
</div><!--/features-->
<div class="space-100"></div>


@endsection
