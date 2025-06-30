<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="Aronox – Admin Bootstrap4 Responsive Webapp Dashboard Templat" name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords"
        content="admin site template, html admin template,responsive admin template, admin panel template, bootstrap admin panel template, admin template, admin panel template, bootstrap simple admin template premium, simple bootstrap admin template, best bootstrap admin template, simple bootstrap admin template, admin panel template,responsive admin template, bootstrap simple admin template premium" />

    <!-- Title -->
    <title>Medveda</title>

    <!--Favicon -->
    <link rel="icon" href="{{ asset('backend/images/brand/favicon.ico') }}" type="image/x-icon" />


    {{--  --}}
    <link href="{{ asset('backend/style.css') }}" rel="stylesheet" />
    <!-- Style css -->
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet" />

    <!--Horizontal css -->
    <link id="effect" href="{{ asset('backend/plugins/horizontal-menu/dropdown-effects/fade-up.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('backend/plugins/horizontal-menu/horizontal.css') }}" rel="stylesheet" />

    <!--Sidemenu css -->
    <link href="{{ asset('backend/plugins/toggle-menu/combine/sidemenu-combine.css') }}" rel="stylesheet">

    <!-- P-scroll bar css-->
    <link href="{{ asset('backend/plugins/p-scroll/perfect-scrollbar.css') }}" rel="stylesheet" />

    <!---Icons css-->
    <link href="{{ asset('backend/plugins/iconfonts/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/plugins/iconfonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/plugins/iconfonts/plugin.css') }}" rel="stylesheet" />

    <!-- Skin css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('backend/skins/hor-skin/combined-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/skins/demo.css') }}" />

    <!-- DataTables CSS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">


    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>


    <!-- Summernote CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">


    {{-- Fa Icons CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css" rel="stylesheet">

    {{-- Toatsr --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">



</head>

<body class="app sidebar-mini">

    <!---Global-loader-->
    <div id="global-loader">
        <img src="{{ asset('backend/images/svgs/loader.svg') }}" alt="loader">
    </div>

    <div class="page comb-page">
        <div class="page-main">

            @include('backend.body.header')

            <!--  -->
            @include('backend.body.sidebar')
            <!--  -->

            <div class="app-content page-body">

                @yield('main')

            </div><!-- end app-content-->
        </div>

        <!--Footer-->
        @include('backend.body.footer')
        <!-- End Footer-->

    </div>

    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- Bootstrap4 js-->
    <script src="{{ asset('backend/plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>



    <!--Othercharts js-->
    <script src="{{ asset('/]assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>

    <!-- Circle-progress js-->
    <script src="{{ asset('backend/js/vendors/circle-progress.min.js') }}"></script>

    <!-- Jquery-rating js-->
    <script src="{{ asset('backend/plugins/rating/jquery.rating-stars.js') }}"></script>

    <!--Horizontal js-->
    <script src="{{ asset('backend/plugins/horizontal-menu/horizontal.js') }}"></script>

    <!--Sidemenu js-->
    <script src="{{ asset('backend/plugins/toggle-menu/combine/sidemenu.js') }}"></script>

    <!-- P-scroll js-->
    <script src="{{ asset('backend/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('backend/plugins/p-scroll/p-scroll1.js') }}"></script>

    <!-- ECharts js -->
    <script src="{{ asset('backend/plugins/echarts/echarts.js') }}"></script>

    <!-- CHARTJS CHART -->
    <script src="{{ asset('backend/plugins/chart/chart.bundle.js') }}"></script>
    <script src="{{ asset('backend/plugins/chart/utils.js') }}"></script>

    <!-- Peitychart js-->
    <script src="{{ asset('backend/plugins/peitychart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/peitychart/peitychart.init.js') }}"></script>

    <!-- Index js-->
    <script src="{{ asset('backend/js/index1.js') }}"></script>

    <!-- Apexchart js-->
    <script src="{{ asset('backend/js/apexcharts.js') }}"></script>

    <!-- Custom js-->
    <script src="{{ asset('backend/js/custom.js') }}"></script>

    <!-- Summernote JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>

    {{-- Toatsr Script --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


</body>

</html>
