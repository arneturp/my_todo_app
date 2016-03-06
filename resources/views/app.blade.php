<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Todo App</title>
      <link rel="stylesheet" href="{!! URL::asset('css/vendor/bootstrap.min.css'); !!}">
      <link rel="stylesheet" href="{!! URL::asset('css/style.css'); !!}">
   </head>
   <body>
      <div class="container">
         @yield('content')
      </div>
   </body>
</html>
