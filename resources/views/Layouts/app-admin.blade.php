<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="/backend/dark/img/fav.png">

    <!-- Title -->
    <title>Digital marketing</title>


    <!-- *************
        ************ Common Css Files *************
    ************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="/backend/dark/css/bootstrap.min.css">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="/backend/dark/fonts/style.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/backend/dark/css/main.css">


    <!-- *************
        ************ Vendor Css Files *************
    ************ -->

    <!-- Mega Menu -->
    <link rel="stylesheet" href="/backend/dark/vendor/megamenu/css/megamenu.css">

    <!-- Search Filter JS -->
    <link rel="stylesheet" href="/backend/dark/vendor/search-filter/search-filter.css">
    <link rel="stylesheet" href="/backend/dark/vendor/search-filter/custom-search-filter.css">

    <!-- Date Range CSS -->
    <link rel="stylesheet" href="/backend/dark/vendor/daterange/daterange.css">

    <!-- Plugins Customization RTL -->
    {{--    <link rel="stylesheet" href="/backend/dark/css/plugins-rtl.css">--}}
    <link rel="stylesheet" href="/persian-fonts/fontiran.css">
    <link rel="stylesheet" href="/persian-fonts/style.css">
    <link rel="stylesheet" href="/backend/css/toastr.min.css">

    <!-- Steps Wizard CSS -->
    <link rel="stylesheet" href="/backend/dark/vendor/wizard/jquery.steps.css"/>

    <!-- Summernote CSS -->
    <link rel="stylesheet" href="/backend/dark/vendor/summernote/summernote-bs4.css"/>

    <!-- Bootstrap Select CSS -->
    <link rel="stylesheet" href="/backend/dark/vendor/bs-select/bs-select.css"/>

    <!-- Uploader CSS -->
    <link rel="stylesheet" href="/backend/dark/vendor/dropzone/dropzone.min.css"/>

    <!-- Input Tags css -->
    <link rel="stylesheet" href="/backend/dark/vendor/input-tags/tagsinput.css"/>



    <link rel="stylesheet" href="/backend/dark/vendor/notify/notify-flat.css">

    @livewireStyles

</head>
<body>

<!-- Loading wrapper start -->
<div id="loading-wrapper">
    <div class="spinner-border"></div>
    Loading...
</div>

<div class="page-wrapper">


    <livewire:admin.menu/>

    <div class="main-container">

        <livewire:admin.header/>

        <div class="content-wrapper-scroll">

            {{$slot}}

        </div>

    </div>

</div>
<!-- Page wrapper end -->


<script src="/backend/dark/js/jquery.min.js"></script>

<script src="/backend/dark/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Megamenu JS -->
<script src="/backend/dark/vendor/megamenu/js/megamenu.js"></script>
<script src="/backend/dark/vendor/megamenu/js/custom.js"></script>

<!-- Slimscroll JS -->
<script src="/backend/dark/vendor/slimscroll/slimscroll.min.js"></script>
<script src="/backend/dark/vendor/slimscroll/custom-scrollbar.js"></script>

<!-- Search Filter JS -->
<script src="/backend/dark/vendor/search-filter/search-filter.js"></script>
<script src="/backend/dark/vendor/search-filter/custom-search-filter.js"></script>

<!-- Date Range JS -->
<script src="/backend/dark/vendor/daterange/daterange.js"></script>
<script src="/backend/dark/vendor/daterange/custom-daterange.js"></script>

<!-- Apex Charts -->
<!-- Apex Charts -->
<script src="/backend/dark/vendor/apex/apexcharts.min.js"></script>
<script src="/backend/dark/vendor/apex/custom/home/salesGraph.js"></script>
<script src="/backend/dark/vendor/apex/custom/home/ordersGraph.js"></script>
<script src="/backend/dark/vendor/apex/custom/home/earningsGraph.js"></script>
<script src="/backend/dark/vendor/apex/custom/home/visitorsGraph.js"></script>
<script src="/backend/dark/vendor/apex/custom/home/customersGraph.js"></script>
<script src="/backend/dark/vendor/apex/custom/home/sparkline.js"></script>




<script src="/backend/dark/js/modernizr.js"></script>
<script src="/backend/dark/js/moment.js"></script>



<!-- Notify js -->
<script src="/backend/dark/js/jquery.easing.1.3.js"></script>
<script src="/backend/dark/vendor/notify/notify.js"></script>
<script src="/backend/dark/vendor/notify/notify-custom.js"></script>


<script src="/backend/dark/js/main.js"></script>



@stack('script')

@livewireScripts
</body>
</html>
