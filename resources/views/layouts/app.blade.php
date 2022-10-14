
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wieldy-html.g-axon.work/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Aug 2020 08:14:54 GMT -->
<head>
  <!-- Meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Wieldy - A fully responsive, HTML5 based admin template">
  <meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass">
  <!-- /meta tags -->
  <title>Wieldy - Admin Dashboard</title>

  <!-- Site favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- /site favicon -->

  @vite('resources/css/app.css')

</head>
<body class="dt-sidebar--fixed dt-header--fixed">

<!-- Loader -->
<div class="dt-loader-container">
  <div class="dt-loader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
    </svg>
  </div>
</div>
<!-- /loader -->

<!-- Root -->
<div class="dt-root">
  <!-- Header -->
    @include('includes.hader')
  <!-- /header -->

  <!-- Site Main -->
  <main class="dt-main">
    <!-- Sidebar -->
    <x-sidebar/>
    <!-- /sidebar -->

    <!-- Site Content Wrapper -->
    <div class="dt-content-wrapper">

      @yield('content')

      <!-- Footer -->
     @include('includes.footer')
      <!-- /footer -->

    </div>
    <!-- /site content wrapper -->

    <!-- Theme Chooser -->
    <div class="dt-customizer-toggle">
      <a href="javascript:void(0)" data-toggle="customizer"> <i class="icon icon-spin icon-setting"></i> </a>
    </div>
    <!-- /theme chooser -->

    <!-- Customizer Sidebar -->
   <x-right-sidebar/>
    <!-- /customizer sidebar -->

  </main>
</div>

@vite([
    'resources/js/app.js',
    'resources/js/perfect-scrollbar.js',
    'resources/assets/js/script',
    'resources/assets/js/dashboard-crypto',
])
<script src="https://kit.fontawesome.com/01308a4090.js" crossorigin="anonymous"></script>

<!-- Mirrored from wieldy-html.g-axon.work/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Aug 2020 08:14:54 GMT -->
</html>
