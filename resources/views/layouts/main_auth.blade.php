<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>TeamImmob</title>
      
      <link rel="shortcut icon" href="{{ asset('theme/images/favicon.ico') }}" />
      
      <link rel="stylesheet" href="{{ asset('theme/css/backend.minf700.css?v=1.0.1') }}">
      <link rel="stylesheet" href="{{ asset('theme/vendor/%40fortawesome/fontawesome-free/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('theme/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('theme/vendor/remixicon/fonts/remixicon.css') }}">  </head>
  <body class=" ">
  
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
      <div class="wrapper">
      @yield('contents')
      </div>
    
    <script src="{{asset('/theme')}}/js/backend-bundle.min.js"></script>
    <script src="{{asset('/theme')}}/js/customizer.js"></script>
    <script src="{{asset('/theme')}}/js/app.js"></script>  </body>

</html>