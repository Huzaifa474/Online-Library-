<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>book Slider</title>
    <style media="screen">
    #outerbox
    {
      border-width: 5px;
      border-color: #003300;
      border-style: solid;
      margin-top: 0;
      width: 800px;
      overflow: hidden;
    }
    #slidebox
    {
      position: relative;
      width: 5200px;
      animation-name: slider;
      animation-duration: 40s  ;
    }
    #slidebox img
    {
      float: left;

    }
    @keyframes slider {
        0%{
          left: 0px;
        }
        15%{
          left: 0px;
        }
        20%{
          left: -800px;
        }
        35%{
          left: -800px;
        }
        40%{
          left: -1700px;
        }
        55%{
          left: -1700px;
        }
        60%{
          left: -2550px;
        }
        75%{
          left: -2550px;
        }
        80%{
          left: -3400px;
        }
        95%{
          left: -3400px;
        }
        100%{
          left: -4200px;
        }
    }
    </style>
  </head>
  <body>
    <div id="outerbox">
      <div id="slidebox" >
        <img src="2.jpg"  alt="">
        <img src="4.jpg"  alt="">
        <img src="3.png"  alt="">
        <img src="5.jpg"  alt="">
        <img src="6.jpg"  alt="">
        <img src="1.jpg"  alt="">
        <img src="77.jpg"  alt="">
      </div>
    </div>
  </body>
</html>
