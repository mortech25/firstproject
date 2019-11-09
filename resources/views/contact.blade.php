@extends('layouts.layout')

@section('title', 'FA17-BSE-093')

@section('navbar')
@parent
@endsection
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{'css/main.css'}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  </head>
  <body>
    @section('contact')
    <center>
<div class="container">
  <div class="col-sm-5 register">
                      <center><h1>Contact Us</h1></center>
                      <form action="register.php" method="POST">
                              <label >Username:</label>
                              <input type="text" class="form-control" placeholder="Username" name="username" required >
                              <label >Email:</label>
                              <input type="text" class="form-control" placeholder="Email" name="email" required >
                              <label >Message</label>
                               <textarea  class="md-textarea form-control" rows="3" id="Message" value=""></textarea>
                              <center><button class="btn btn-primary">Register</button></center>
                      </form>

                </div>
</div>
</center>
@endsection
  </body>
</html>
