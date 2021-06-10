<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>@yield('title')</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('dashboard/images/favicon.ico') }}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap.min.css')}}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{ asset('dashboard/css/typography.css')}}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{ asset('dashboard/css/style.css')}}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ asset('dashboard/css/responsive.css')}}">
       <!-- Full calendar -->
      <link href='{{ asset('dashboard/fullcalendar/core/main.css')}}' rel='stylesheet' />
      <link href='{{ asset('dashboard/fullcalendar/daygrid/main.css')}}' rel='stylesheet' />
      <link href='{{ asset('dashboard/fullcalendar/timegrid/main.css')}}' rel='stylesheet' />
      <link href='{{ asset('dashboard/fullcalendar/list/main.css')}}' rel='stylesheet' />

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


   </head>
   <body class="iq-page-menu-horizontal">
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">

         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom d-flex align-items-center justify-content-between">
               <div class="iq-sidebar-logo">
               </div>
               <div class="iq-menu-horizontal">
                <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="iq-menu d-flex">
                   <li class="active">
                      <a href="{{ route('home') }}" class="iq-waves-effect"><i class="ri-home-line"></i><span>Home</span></a>
                   </li>
                   <li class="active">
                      <a href="{{ route('aboutUs.index') }}" class="iq-waves-effect"><i class="ri-stack-line"></i><span>AboutUs</span></a>
                   </li>
                   <li class="active">
                      <a href="{{ route('website') }}" class="iq-waves-effect"><i class="ri-stack-line"></i><span>Website</span></a>
                   </li>
                </ul>
             </nav>
             </div>
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                        <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                     </div>
                  </div>
                  <ul class="navbar-list">
                     <li>
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                           <img src="{{ asset('dashboard/images/user/1.jpg')}}" class="img-fluid rounded mr-3" alt="user">

                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
         <!-- TOP Nav Bar END -->

         <!-- Page Content  -->
         @yield('content')
      </div>
      <!-- Wrapper END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{ asset('dashboard/js/jquery.min.js')}}"></script>
      <script src="{{ asset('dashboard/js/popper.min.js')}}"></script>
      <script src="{{ asset('dashboard/js/bootstrap.min.js')}}"></script>
      <!-- Appear J{{ asset('dashboard/av')}}aScript -->
      <script src="{{ asset('dashboard/js/jquery.appear.js')}}"></script>
      <!-- Countdow{{ asset('dashboard/n Jav')}}aScript -->
      <script src="{{ asset('dashboard/js/countdown.min.js')}}"></script>
      <!-- Counteru{{ asset('dashboard/p Jav')}}aScript -->
      <script src="{{ asset('dashboard/js/waypoints.min.js')}}"></script>
      <script src="{{ asset('dashboard/js/jquery.counterup.min.js')}}"></script>
      <!-- Wow JavaScript -->
      <script src="{{ asset('dashboard/js/wow.min.js')}}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{ asset('dashboard/js/apexcharts.js')}}"></script>
      <!-- Slick JavaScript -->
      <script src="{{ asset('dashboard/js/slick.min.js')}}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{ asset('dashboard/js/select2.min.js')}}"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{ asset('dashboard/js/owl.carousel.min.js')}}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{ asset('dashboard/js/jquery.magnific-popup.min.js')}}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{ asset('dashboard/js/smooth-scrollbar.js')}}"></script>
      <!-- lottie JavaScript -->
      <script src="{{ asset('dashboard/js/lottie.js')}}"></script>
      <!-- am core JavaScript -->
      <script src="{{ asset('dashboard/js/core.js')}}"></script>
      <!-- am charts JavaScript -->
      <script src="{{ asset('dashboard/js/charts.js')}}"></script>
      <!-- am animated JavaScript -->
      <script src="{{ asset('dashboard/js/animated.js')}}"></script>
      <!-- am kelly JavaScript -->
      <script src="{{ asset('dashboard/js/kelly.js')}}"></script>
      <!-- Flatpicker Js -->
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{ asset('dashboard/js/chart-custom.js')}}"></script>
      <!-- Custom JavaScript -->
      <script src="{{ asset('dashboard/js/custom.js')}}"></script>

      @stack('scripts')
   </body>
</html>
