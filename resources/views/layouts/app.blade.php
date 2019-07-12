<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel 5.7 CRUD Example Tutorial</title>
  <link href="{{ asset('/css/framework7.material.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/framework7.material.colors.min.css') }}" rel="stylesheet">

    <!-- Path to your custom app styles-->
    <link href="{{ asset('/css/my-app.css') }}" rel="stylesheet">
    @stack('css')
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
        @include('elements.navbar')
  <div class="container">
        @include('elements.panel-left')
        @include('elements.navbar-links')
        <span id="progress-bar" class="progressbar-infinite-overlay"></span>
        <!-- Views -->
        <div class="views">
          <!-- Your main view, should have "view-main" class -->
          <div class="view view-main">
            <!-- Pages container, because we use fixed navbar and toolbar, it has additional appropriate classes-->
            <div class="pages navbar-fixed">
              <!-- Page, "data-page" contains page name -->

              @yield('content')
            </div>
          </div>
        </div>
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
   <!-- Path to Framework7 Library JS-->
   <script type="text/javascript" src="{{ asset('/js/framework7.min.js')}}"></script>
   <script type="text/javascript" src="{{ asset('/js/my-app.js')}}"></script>
   @stack('js')
</body>
</html>
