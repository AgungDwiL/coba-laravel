<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Agung's Blog | Dashboard</title>
    <link rel="icon" class="rounded-circle" width="50px" height="50px" href="{{ asset('img/logo.png') }}" type="image/png">
    

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    {{-- trix editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

  </head>

  <body>
    
    @include('dashboard.layouts.navbar')

    <div class="container-fluid">
      <div class="row">
        @include('dashboard.layouts.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
          @yield('body')
        </main>
      </div>
    </div>


    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    {{-- script untuk memanggil feather dan merendernya --}}
    <script src="{{ asset('js/feather.min.js') }}"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
          feather.replace();
      });
    </script>

    <script src="{{ asset('js/dashboard.js') }}"></script>
    
  </body>
</html>
