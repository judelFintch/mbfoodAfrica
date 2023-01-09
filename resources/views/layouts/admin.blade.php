<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="./favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="description" />
    <title>@yield('title')</title>
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="backend/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="backend/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="backend/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="backend/assets/css/demo.css" />
    <link rel="stylesheet" href="backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="backend/assets/vendor/libs/apex-charts/apex-charts.css" />
    <script src="backend/assets/vendor/js/helpers.js"></script>
    <script src="backend/assets/js/config.js"></script>
</head>

<body>
     <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        @include('partials.backend.nav')
        @include('partials.backend.header_section')
        @yield('content')
        @include('partials.backend.footer')
      </div>
     </div>
 
    <script src="backend/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="backend/assets/vendor/libs/popper/popper.js"></script>
    <script src="backend/assets/vendor/js/bootstrap.js"></script>
    <script src="backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="backend/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="backend/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="backend/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="backend/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    
</body>


