<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Akij Group Exam</title>

    <!-- vendor css -->
    <link href="{{asset('admin/lib/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">

    <link href="{{asset('admin/lib/select2/css/select2.min.css')}}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/bracket.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert/sweetalert.css') }}">
    
</head>



<body>
   
    @include('admin.includes.leftbar')

    @include('admin.includes.topbar')
    

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        @include('admin.includes.titlebar')
        @yield('content')                                                                                                                          
        @include('admin.includes.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="{{asset('admin/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/lib/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <script src="{{asset('admin/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('admin/lib/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('admin/lib/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('admin/lib/rickshaw/vendor/d3.min.js')}}"></script>
    <script src="{{asset('admin/lib/rickshaw/vendor/d3.layout.min.js')}}"></script>
    <script src="{{asset('admin/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('admin/lib/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admin/lib/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('admin/lib/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('admin/lib/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('admin/lib/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('admin/lib/select2/js/select2.full.min.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAq8o5-8Y5pudbJMJtDFzb8aHiWJufa5fg"></script>
    <script src="{{asset('admin/lib/gmaps/gmaps.min.js')}}"></script>

    <script src="{{asset('admin/js/bracket.js')}}"></script>
    <script src="{{asset('admin/js/map.shiftworker.js')}}"></script>
    <script src="{{asset('admin/js/ResizeSensor.js')}}"></script>
    <script src="{{asset('admin/js/dashboard.js')}}"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
   
    @include('sweetalert::alert')

    <script>
        $(function() {
            'use strict'

            // FOR DEMO ONLY
            // menu collapsed by default during first page load or refresh with screen
            // having a size between 992px and 1299px. This is intended on this page only
            // for better viewing of widgets demo.
            $(window).resize(function() {
                minimizeMenu();
            });

            minimizeMenu();

            function minimizeMenu() {
                if (window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)')
                    .matches) {
                    // show only the icons and hide left menu label by default
                    $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
                    $('body').addClass('collapsed-menu');
                    $('.show-sub + .br-menu-sub').slideUp();
                } else if (window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass(
                    'collapsed-menu')) {
                    $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
                    $('body').removeClass('collapsed-menu');
                    $('.show-sub + .br-menu-sub').slideDown();
                }
            }
        });
    </script>
</body>

</html>
