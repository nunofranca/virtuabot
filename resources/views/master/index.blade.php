<!--
=========================================================
* Material Dashboard 2 - v3.0.2
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="pt_BR">

<head>
    @include('master.__partials.head')
</head>

<body class="g-sidenav-show  bg-gray-200">
<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    @include('master.__partials.aside')
</aside>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
         navbar-scroll="true">
        @include('master.__partials.nav')
    </nav>

    @yield('content')
</main>

<!--   Core JS Files   -->

<script src="{{asset('js/master/js/popper.min.js')}}"></script>
<script src={{asset('js/master/js/bootstrap.min.js')}}></script>
<script src={{asset('js/master/js/perfect-scrollbar.min.js')}}></script>
<script src={{asset('js/master/js/smooth-scrollbar.min.js')}}></script>
<script src={{asset('js/master/js/chartjs.min.js')}}></script>

<script src="{{mix('js/dashboard/js/charts.js')}}"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{mix('js/master/js/material-dashboard.js')}}"></script>
</body>

</html>
