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
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../master/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../master/assets/img/favicon.png">
    <title>
        Material Dashboard 2 by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/>
    <!-- Nucleo Icons -->
    <link href="../master/assets/css/nucleo-icons.css" rel="stylesheet"/>
    <link href="../master/assets/css/nucleo-svg.css" rel="stylesheet"/>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{mix('css/master/material-dashboard.css')}}" rel="stylesheet"/>
</head>

<body class="bg-gray-200">

<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100"
         style="background-image: url({{mix('images/auth/background.jpeg')}});">
        @include('auth.__partials.formLogin')
    </div>

</main>
<!--   Core JS Files   -->
<script src="{{mix('js/master/js/popper.min.js')}}"></script>
<script src={{mix('js/master/js/bootstrap.min.js')}}></script>
<script src={{asset('js/master/js/perfect-scrollbar.min.js')}}></script>
<script src={{asset('js/master/js/smooth-scrollbar.min.js')}}></script>
</body>

</html>
