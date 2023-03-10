<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
  @vite('resources/js/app.js')
  <title>@yield('page_title')</title>
</head>


<body>
@include('partials.header')

<main>
  @yield('content')
  
</main>

@include('partials.footer')
</body>
</html>