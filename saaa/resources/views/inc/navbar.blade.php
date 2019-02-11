<!--pre-loader-->
<div id="preloader"></div>
<!--pre-loader-->
<!--back to top-->
<a href="#" class="scrollToTop"><i class="material-icons 48dp">keyboard_arrow_up</i></a>
<!--back to top end-->
<!--===========================start Header===========================-->
<!--top bar-->
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 hidden-xs">
                <span>Free shipping worldwide on order above $150</span>
            </div>
            <div class="col-sm-6">
                <ul class="list-inline pull-right">
                    <li><a href="{{ url('user/signin') }}"><i class="material-icons">perm_identity</i> Login</a></li>
                    <li><a href="{{ url('wishlist') }}"><i class="material-icons">favorite_border</i> Wishlist </a></li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>
<!--end top bar-->
<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top yamm sticky-header">
    <div class="container">
      <div class="pull-right">
          <ul class="right-icon-nav nav navbar-nav list-inline">
              <li class="cart-nav shopping-cart"><a href="{{ url('shop/checkout') }}" data-toggle="offcanvas" data-target="#cartNavmenu" data-canvas="body"><i class="material-icons">shopping_cart</i><span class="label label-primary">{{ Cart::getTotalQuantity() }}</span> </a></li>


          </ul>
      </div>
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>

      </div>


        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="mb-5 m-auto"><a href="{{ url('/') }}"> <i class="fa-2x">Saaa</i> <i class="fas fa-bicycle fa-2x pr-2 mr-5 mb-5"> </i></a></li>

              <li><a href="{{ url('./') }}">Home</a></li>
              <!--Menu nav bar-->
              @if(! empty($menu))
                      @foreach($menu as $item)
                     <li><a href="{{url($item['url'])}}">{{ $item['link'] }}</a></li>
                      @endforeach
                      @endif
                      <!--End Menu nvabar-->
                <li><a href="{{ url('shop') }}">Shop</a></li>
            </ul>
            <ul class="pull-right nav navbar-nav">
            @if(Session::has('user_id') )
            <li class="nav-item active">
            <a class="nav-link" href="{{url('user/profile')}}">{{Session::get('user_name')}} </a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="{{url('user/logout')}}">Logout </a>
            </li>
            @if(Session::has('is_admin'))
            <li class="nav-item active">
            <a class="nav-link" href="{{url('cms/dashboard')}}">Admin Panel</a>
            </li>
            @endif
            @else
            <li><a href="{{ url('user/signin') }}">SignIn</a></li>
            <li><a href="{{ url('user/signup') }}">SignUp</a></li>
           @endif
            </ul>

        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
