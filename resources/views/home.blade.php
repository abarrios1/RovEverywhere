@extends('layouts.app')

@section('content')

  <style>

    #forward{
      border-style: solid;
      position:absolute;
      left: 230px;
    }
    #left{
      border-style: solid;
      position:absolute;
      top: 200px;
      left: 100px;
    }
    #pwm{
      border-style: solid;
      position:absolute;
      top: 200px;
      left: 215px;
      font-size: 35px;
    }
    #right{
      border-style: solid;
      position:absolute;
      top: 200px;
      left: 380px;
    }
    #reverse{
      border-style: solid;
      position:absolute;
      top: 325px;
      left: 230px;

    }

  </style>

<div class="container">

    <div class="col-md-7">
      <iframe src="http://ENTER_YOUR_IP_HERE:9000/javascript_simple.html" frameborder="0" align="middle" width="640" height="480" align="middle" scrolling="no"></iframe>
    </div>

    <div class="col-md-5">
      <div class="row col-md-offset-4">
        <button style="height: 50px; width: 100px" onclick="lighton()"><img style="height: 40px"src="/images/lighton.png"></button>
        <button style="height: 50px; width: 100px" onclick="lightoff()"><img style="height: 35px"src="/images/lightoff.png"></button>
      </div>



      <br />
        <a href="#" id="forward" ><img style="height: 65px"src="/images/forward.png"></a>
        <a href="#" id="left" ><img style="height: 65px"src="/images/left.png"></a>
        <input class="col-md-3" type="number" value="50" min="50" max="254" id="pwm">
        <a href="#" id="right" ><img style="height: 65px"src="/images/right.png"></a>
        <a href="#" id="reverse" ><img style="height: 65px"src="/images/reverse.png"></a>
    </div>
</div>


  <script>



  $(document).ready(function(){

      $("#stop").click(function(){
        $.get('/stop');
      });
      $("#reverse").on("mousedown", function() {
        //console.log(_pwm + "hello");
       $.ajax({
         url: 'reverse/{pwm}',
                         type: 'GET',
                         data: { pwm: getPWM() },
                         success: function(response)
                         {
                             console.log(response);

                         }
         });
       }).on('mouseup', function() {
       $.get('/stop');
      });
      $("#forward").on("mousedown", function() {
        //console.log(_pwm);
       $.ajax({
         url: 'forward/{pwm}',
                         type: 'GET',
                         data: { pwm: getPWM() },
                         success: function(response)
                         {
                             console.log(response);

                         }
         });
       }).on('mouseup', function() {
       $.get('/stop');
      });
      $("#left").on("mousedown", function() {
        //console.log(_pwm);
       $.ajax({
         url: 'left/{pwm}',
                         type: 'GET',
                         data: { pwm: getPWM() },
                         success: function(response)
                         {
                             console.log(response);

                         }
         });
       }).on('mouseup', function() {
       $.get('/stop');
      });
      $("#right").on("mousedown", function() {
        // console.log(_pwm);
       $.ajax({
         url: 'right/{pwm}',
                         type: 'GET',
                         data: { pwm: getPWM() },
                         success: function(response)
                         {
                             console.log(response);

                         }
         });
       }).on('mouseup', function() {
       $.get('/stop');
      });

      function getPWM(){
          var _pwm = $("#pwm").val();
          //console.log(_pwm);

        return _pwm;
      }
  });



  </script>


@endsection
