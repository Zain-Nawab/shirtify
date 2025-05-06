<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/hero/bootstrap.css') }} " />
    <!-- font awesome style -->
    <link href=" {{ asset('css/hero/font-awesome.min.css') }} " rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href=" {{ asset('css/hero/style.css') }} " rel="stylesheet" />
    <!-- responsive style -->
    <link href=" {{ asset('css/hero/responsive.css') }} " rel="stylesheet" />
    <link href=" {{ asset('css/hero/navbar.css') }} " rel="stylesheet" />
  </head>
  <body>


    @include('partials.navbar')

    @if (route('shop.index'))
      @include('partials.hero')
    @endif
    
   <div class="container">    

    @yield('main')

    <a href="/admin/main">Admin</a>

   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <!-- jQery -->
    <script src=" {{ asset('js/jquery-3.4.1.min.js') }} "></script>
    <!-- popper js -->
    <script src=" {{ asset('js/popper.min.js') }} "></script>
    <!-- bootstrap js -->
    <script src=" {{ asset('js/bootstrap.js') }} "></script>
    <!-- custom js -->
    <script src=" {{ asset('js/custom.js') }} "></script>
  </body>
</html>