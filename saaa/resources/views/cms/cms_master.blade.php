<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Common plugins -->
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
        <link href="{{ asset('lib/boland/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/boland/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/boland/plugins/jasny-bootstrap/css/jasny-bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/boland/plugins/owl-carousel/assets/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/boland/plugins/owl-carousel/assets/owl.theme.default.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/boland/plugins/icheck/skins/minimal/blue.css') }}" rel="stylesheet">
        <!--master slider-->
        <link href="{{ asset('lib/boland/plugins/masterslider/style/masterslider.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/boland/plugins/masterslider/skins/default/style.css') }}" rel='stylesheet'>
        <!--toastr-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!--template css-->
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href="{{ asset('lib/boland/css/style.css') }}" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <title>Saaa | Admin Panel</title>
    <script type="text/javascript">
      var BASE_URL = "{{url('')}}/";
     </script>
    </head>
    <body>
      <header><!--pre-loader-->
      <div id="preloader"></div>
      <!--pre-loader-->
      <!--back to top-->
      <a href="#" class="scrollToTop"><i class="material-icons 48dp">keyboard_arrow_up</i></a>
      <!--back to top end-->
      <!--===========================start Header===========================-->
      <!-- Static navbar -->
      <nav class=" navbar navbar-default navbar-static-top yamm sticky-Header ">
          <div class="pull-left container">
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
                    <li class="pull-left mb-5 m-auto"><a href="{{url('cms/dashboard')}}"><i class="fas fa-bicycle fa-lg pr-2 mr-5 mb-5"></i><i class="fa-lg">Saaa | Admin Panel</i></a></li>
                  </ul>
                  <ul class="pull-right nav navbar-nav ">
                  <li class="  nav-item active">
                  <a class="nav-link" href="{{url('user/logout')}}">Logout </a>
                  </li>
                </ul>

              </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
      </nav>
      <div class="container-fluid">
        <div class="row">
          <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
              <ul class="nav flex-column">
                <li class="nav-item ">
                  <a class="nav-link" href="{{ url('') }} " target="_blank">Back To Site</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('cms/dashboard')}}">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('cms/menu')}}">Menu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('cms/content')}}">Content</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('cms/categories')}}">Categories</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('cms/products')}}">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('cms/orders')}}">Orders</a>
                </li>
               </ul>


            </div>
          </nav>


                  @yield('main_content')
        </div>
      </div>
</header>


     <main>
        @yield('content')
     </main>


            <!--Common plugins-->
        <script src="{{ asset('lib/boland/plugins/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('lib/boland/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('lib/boland/plugins/pace/pace.min.js') }}"></script>
        <script src="{{ asset('lib/boland/plugins/jasny-bootstrap/js/jasny-bootstrap.min.js') }}"></script>
        <script src="{{ asset('lib/boland/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('lib/boland/plugins/sticky/jquery.sticky.js') }}"></script>
        <script src="{{ asset('lib/boland/plugins/icheck/icheck.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="{{ asset('lib/boland/js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('lib/boland/js/boland.custom.js') }}"></script>
        <!--page template scripts-->
        <script src="{{ asset('lib/boland/plugins/masterslider/masterslider.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
        <script type="text/javascript" src="{{asset('js/script.js')}}"></script>


        <script>
            (function ($) {
                "use strict";
                var slider = new MasterSlider();
                // adds Arrows navigation control to the slider.

                slider.control('timebar', {insertTo: '#masterslider'});
                slider.control('bullets');

                slider.setup('masterslider', {
                    width: 1170, // slider standard width
                    height: 510, // slider standard height
                    space: 0,
                    layout: 'fullwidth',
                    loop: true,
                    preload: 0,
                    instantStartLayers: true,
                    autoplay: true
                });
            })(jQuery);
        </script>

                @if(Session::has('sm') )
                <script type="text/javascript">
                toastr.options.positionClass = '{{Session::get('smpos')}}';
                toastr.success('{{Session::get('sm')}}');
                </script>
                @endif
                <script type="text/javascript">
  $('#article').summernote({
    height: 300
    });

</script>
    </body>
</html>
