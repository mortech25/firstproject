@extends('layouts.layout')

@section('title', 'FA17-BSE-093')

@section('navbar')
@parent
@endsection



<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="{{'css/main.css'}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


  </head>
  <body>
    @section('about')
    <br><br>
    <div class="container">
         <div class="row">
       <div class="col-sm-3" style="background-color: cadetblue;color:white;">
                          <center>

                         <h2>Company</h2>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum inventore tenetur laudantium id saepe tempora at distinctio sunt amet
                              officiis consectetur quidem, nostrum accusamus cum maiores autem iusto sapiente aliquid!</p>
                    </center>
             </div>
             <div class="col-sm-3" style="background-color: teal;color:white;">
                     <center>
                    <h2>Scope</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum inventore tenetur laudantium id saepe tempora at distinctio sunt amet
                         officiis consectetur quidem, nostrum accusamus cum maiores autem iusto sapiente aliquid!</p>
               </center>
        </div>
        <div class="col-sm-3" style="background-color: cadetblue;color:white;">
             <center>
            <h2>Motive</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum inventore tenetur laudantium id saepe tempora at distinctio sunt amet
                 officiis consectetur quidem, nostrum accusamus cum maiores autem iusto sapiente aliquid!</p>
       </center>
 </div>
 <div class="col-sm-3" style="background-color: teal;color:white;">
        <center>
       <h2>Vision</h2>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum inventore tenetur laudantium id saepe tempora at distinctio sunt amet
            officiis consectetur quidem, nostrum accusamus cum maiores autem iusto sapiente aliquid!</p>
  </center>
</div>
        </div>
    </div>
 @endsection
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
