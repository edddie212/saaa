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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <!--template css-->
        <link href="{{ asset('lib/boland/css/style.css') }}" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <title>Saaa | @if( !empty($title) ) {{ $title }} @endif</title>
    <script type="text/javascript">
      var BASE_URL = "{{url('')}}/";
     </script>
    </head>
    <body>
      <header>@include('inc.navbar')</header>

     <main>  @include('inc.errors')
        @yield('content')
     </main>

     <footer>@include('inc.footer')</footer>

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
    </body>
</html>
