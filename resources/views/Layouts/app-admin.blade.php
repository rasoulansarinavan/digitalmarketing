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
    <livewire:admin.menu/>
    <!-- Sidebar wrapper end -->

    <!-- *************
        ************ Main container start *************
    ************* -->
    <div class="main-container">

        <!-- Page header starts -->
        <livewire:admin.header/>
        <!-- Page header ends -->

        <!-- Content wrapper scroll start -->
        <div class="content-wrapper-scroll">

            <!-- Content wrapper start -->
            {{$slot}}
            <!-- Content wrapper end -->

        </div>
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
<script src="/backend/dark/js/jquery.min.js"></script>
<script src="/backend/dark/js/bootstrap.bundle.min.js"></script>
<script src="/backend/dark/js/modernizr.js"></script>
<script src="/backend/dark/js/moment.js"></script>

<!-- *************
    ************ Vendor Js Files *************
************* -->
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

<!-- Rating JS -->
<script src="/backend/dark/vendor/rating/raty.js"></script>
<script src="/backend/dark/vendor/rating/raty-custom.js"></script>


<!-- Circleful Charts -->
<script src="/backend/dark/vendor/circliful/circliful.min.js"></script>
<script src="/backend/dark/vendor/circliful/circliful.custom.js"></script>
<!-- Main Js Required -->
<script src="/backend/dark/js/main.js"></script>


<script>
    window.addEventListener('swal:confirm', event => {
        swal({
            title: event.detail.title,
            text: event.detail.text,
            icon: event.detail.type,
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    window.livewire.emit('delete', event.detail.id);
                }
            });
    });
</script>
<script src="/backend/js/toastr.min.js"></script>
<script>
    $(document).ready(function () {
        toastr.options = {
            "progressBar": false,
            "positionClass": "toast-bottom-{{app()->getLocale()=='en' ?'right':'left'}}",
            "timeOut": 2000,

        }
    })
    document.addEventListener('success', event => {

        toastr.success(event.detail.message)
        setTimeout(function () {
            //location.reload();
        }, 3000);
        $('.modal').modal('hide');

    })
    document.addEventListener('warning', event => {
        toastr.warning(event.detail.message)
        setTimeout(function () {
            //location.reload();
        }, 3000);


    })
    document.addEventListener('error', event => {
        toastr.error(event.detail.message)
        setTimeout(function () {
            // location.reload();
        }, 3000);

    })

    window.addEventListener('toastr:info', event => {
        toastr.info(event.detail.message);
    });


    window.addEventListener('swal:warning', event => {

        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: event.detail.text,
            footer: ''
        })
    })
</script>


@livewireScripts
</body>
</html>
