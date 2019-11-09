
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <title>M Usama Farooq - @yield('title')</title>
  </head>
  <body>



  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      @section('navbar')
<a class="navbar-brand" href="#">M Usama Farooq</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="margin-left:30%;">
<div class="navbar-nav">
<a class="nav-item nav-link active" href="{{url('welcome')}}">Home</a>
<a class="nav-item nav-link" href="{{url('about')}}">About</a>
<a class="nav-item nav-link" href="{{url('services')}}">Services</a>
<a class="nav-item nav-link" href="{{url('contact')}}">Contact</a>
</div>
</div>
  @show
</nav>


<div class="container">
  @yield('about')
</div>
<div class="container">
  @yield('services')
</div>
<div class="container">
  @yield('contact')
</div>
  </body>
</html>
