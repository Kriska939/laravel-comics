<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  
    <title>Laravel Comics | @yield('series')</title>
</head>
<body>
@include('includes.header')
    <main>
   <!-- QUI YIELD PER IL CONTENUTO DELLA PAGINA --> 
            @yield('content')
    </main>
 @include('includes.footer')
</body>
</html>