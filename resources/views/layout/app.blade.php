<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- icon --}}
    <link rel="icon" href="//allureflorist.com.sg/wp-content/uploads/2016/01/favicon.ico" type="image/x-icon" />

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" media="all" type="text/css"> --}}
    
    <!-- Local CSS-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" media="all" type="text/css">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>Ecolar</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- template --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('templates/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('templates/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('templates/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('templates/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('templates/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('templates/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/css/style.css') }}">

    {{-- CSS Content --}}
    {{-- <style>
    .dropup, .dropright, .dropdown, .dropleft {
      position: relative;
    }
    </style> --}}

    @yield('style')
</head>
<body>
    <div id="app">
        @include('layout.navbar')

        <main class="s" class="container">
            {{-- <div id="banner"
                class="hero-wrap hero-bread"
                style="background-image: {{asset('image/banner/flower_banner.png')}}"
                >
                <div class="container">
                    <div
                    class="
                        row
                        no-gutters
                        slider-text
                        align-items-center
                        justify-content-center
                    "
                    >
                    <div class="col-md-9 ftco-animate text-center">
                        <p class="breadcrumbs">
                        <span class="mr-2">Home</span>
                        <span>Shop</span>
                        </p>
                        <h1 class="mb-0 bread">Shop</h1>
                    </div>
                    </div>
                </div>
            </div> --}}
            <section id="home-section py-4" class="hero">
                <div class="home-slider owl-carousel py-5">
                    <div class="slider-item js-fullheight">
                        <div class="overlay"></div>
                    <div class="container-fluid p-0">
                        <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                            <img class="one-third order-md-last img-fluid" src="{{asset('image/banner/Vases-Mixed-flowers-Natural.gif')}}" alt="">
                            <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                                <div class="text">
                                    <span class="subheading">#New Arrival</span>
                                    <div class="horizontal">
                                    <h1 class="mb-4 mt-3">Flowers Collection</h1>
                                    {{-- <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p> --}}
                                    
                                    <p><a href="{{route('products.index')}}" class="btn-custom">Discover Now</a></p>
                                    </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
        
                    <div class="slider-item js-fullheight">
                        <div class="overlay"></div>
                    <div class="container-fluid p-0">
                        <div class="py-4 row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                            <img class="one-third order-md-last img-fluid" src="{{asset('image/banner/Lilies.gif')}}" alt="">
                            <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                                <div class="text">
                                    <span class="subheading">#New Arrival</span>
                                    <div class="horizontal">
                                    <h1 class="mb-4 mt-3">New Flower Collection</h1>
                                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
                                    
                                    <p><a href="{{route('products.index')}}" class="btn-custom">Discover Now</a></p>
                                    </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
          </section>
            @yield('content')
        </main>
        <footer class="ftco-footer ftco-section">
            <div class="container">
                <div class="row">
                    <div class="mouse">
                              <a href="#" class="mouse-icon">
                                  <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                              </a>
                          </div>
                </div>
              <div class="row mb-5">
                <div class="col-md">
                  <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Minishop</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                      <li class="ftco-animate"><a href="#"><span class="icon-shop"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md">
                  <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Menu</h2>
                    <ul class="list-unstyled">
                      <li><a href="#" class="py-2 d-block">Shop</a></li>
                      <li><a href="#" class="py-2 d-block">About</a></li>
                      <li><a href="#" class="py-2 d-block">Journal</a></li>
                      <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md">
                  <div class="ftco-footer-widget mb-4">
                      <h2 class="ftco-heading-2">Have a Questions?</h2>
                      <div class="block-23 mb-3">
                        <ul>
                          <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                          <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                          <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                        </ul>
                      </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 text-center">
      
                  <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Hans Aditia Lesmana <i class="icon-heart color-danger" aria-hidden="true"></i>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                              </p>
                </div>
              </div>
            </div>
          </footer>
    </div>
    <!-- Scripts -->
    <script src="{{config('app.url')}}:6001/socket.io/socket.io.js"></script>
    <script>
        @auth()
        window.appConfig = {
            auth:@json(Auth::user()->toCredentials())
        };
        @elseauth()
            window.appConfig = {
            auth:null
        };
        @endauth
    </script>
    <!-- Local JS -->
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

    <!-- Bootstrap JS -->
    {{-- <script src="{{ asset('js/bootstrap.js') }}" type="text/javascript" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
    {{-- <script src="{{ asset('js/jquery.js') }}" type="text/javascript"></script> --}}
    {{-- <script src="{{ asset('js/propper.js') }}" type="text/javascript"></script> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <script src="https://use.fontawesome.com/cd636b65bd.js"></script>

    {{-- template --}}
    <script src="{{ asset('templates/js/jquery.min.js') }}"></script>
    <script src="{{ asset('templates/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('templates/js/popper.min.js') }}"></script>
    <script src="{{ asset('templates/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('templates/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('templates/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('templates/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('templates/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('templates/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('templates/js/aos.js') }}"></script>
    <script src="{{ asset('templates/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('templates/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('templates/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('templates/js/google-map.js') }}"></script>
    <script src="{{ asset('templates/js/main.js') }}"></script>

    {{-- JS Content --}}
    @yield('js')
</body>
</html>