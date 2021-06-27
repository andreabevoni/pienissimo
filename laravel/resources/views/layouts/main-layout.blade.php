<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <script src="{{asset('/js/app.js')}}" charset="utf-8"></script>
    <title>Pienissimo</title>
  </head>
  <body>

    @include('components.header')

    <div id="app" class="d-flex justify-content-center align-items-center flex-column">
      @yield('section')
    </div>

  </body>
</html>
