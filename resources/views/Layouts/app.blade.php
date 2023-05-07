<!doctype html>
<html lang="en" dir="rtl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="/backend/img/fav.png">

    <!-- Title -->
    <title>Uni Pro Admin Template - Admin Dashboard</title>


    <!-- *************
        ************ Common Css Files *************
    ************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="/backend/css/bootstrap.rtl.min.css">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="/backend/fonts/style.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/backend/css/main-rtl.css">


    <!-- *************
        ************ Vendor Css Files *************
    ************ -->

    <!-- Mega Menu -->
    <link rel="stylesheet" href="/backend/vendor/megamenu/css/megamenu.css">

    <!-- Search Filter JS -->
    <link rel="stylesheet" href="/backend/vendor/search-filter/search-filter.css">
    <link rel="stylesheet" href="/backend/vendor/search-filter/custom-search-filter.css">

    <!-- Date Range CSS -->
    <link rel="stylesheet" href="/backend/vendor/daterange/daterange.css">

    <!-- Plugins Customization RTL -->
    <link rel="stylesheet" href="/backend/css/plugins-rtl.css">

    <link rel="stylesheet" href="/persian-fonts/fontiran.css">
    <link rel="stylesheet" href="/persian-fonts/style.css">

    @livewireStyles
</head>
<body>

<!-- Loading wrapper start -->
<div id="loading-wrapper">
    <div class="spinner-border"></div>
    Loading...
</div>
<!-- Loading wrapper end -->

<!-- Page wrapper start -->
<div class="page-wrapper">

    <!-- Sidebar wrapper start -->
    <livewire:client.profile.menu />
    <!-- Sidebar wrapper end -->

    <!-- *************
        ************ Main container start *************
    ************* -->
    <div class="main-container">

        <!-- Page header starts -->

        <!-- Page header ends -->
        <livewire:client.profile.header />
        <!-- Content wrapper scroll start -->

        {{$slot}}
        <!-- Content wrapper scroll end -->

    </div>
    <!-- *************
        ************ Main container end *************
    ************* -->

</div>
<!-- Page wrapper end -->

<!-- *************
    ************ Required JavaScript Files *************
************* -->
<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="/backend/js/jquery.min.js"></script>
<script src="/backend/js/bootstrap.bundle.min.js"></script>
<script src="/backend/js/modernizr.js"></script>
<script src="/backend/js/moment.js"></script>

<!-- *************
    ************ Vendor Js Files *************
************* -->

<!-- Megamenu JS -->
<script src="/backend/vendor/megamenu/js/megamenu.js"></script>
<script src="/backend/vendor/megamenu/js/custom.js"></script>

<!-- Slimscroll JS -->
<script src="/backend/vendor/slimscroll/slimscroll.min.js"></script>
<script src="/backend/vendor/slimscroll/custom-scrollbar.js"></script>

<!-- Search Filter JS -->
<script src="/backend/vendor/search-filter/search-filter.js"></script>
<script src="/backend/vendor/search-filter/custom-search-filter.js"></script>

<!-- Date Range JS -->
<script src="/backend/vendor/daterange/daterange.js"></script>
<script src="/backend/vendor/daterange/custom-daterange.js"></script>

<!-- Apex Charts -->
<script src="/backend/vendor/apex/apexcharts.min.js"></script>
<script src="/backend/vendor/apex/custom/saas/sales.js"></script>
<script src="/backend/vendor/apex/custom/saas/revenue.js"></script>

<!-- Rating JS -->
<script src="/backend/vendor/rating/raty.js"></script>
<script src="/backend/vendor/rating/raty-custom.js"></script>

<!-- Main Js Required -->
<script src="/backend/js/main.js"></script>
@livewireScripts
</body>
</html>
