<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Clique Guia</title> 
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->
   <link rel="stylesheet" href="css/main.css">
  <link href="css/jquery.bxslider.css" rel="stylesheet" />
  

</head>
<body>
  @include('layouts.partials.nav')

  
  @yield('content')

  
  
  @include('layouts.partials.footer')
</body>
@include('layouts.partials.scripts')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</html>