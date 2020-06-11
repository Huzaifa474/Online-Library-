<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial scale=1"/>
    <title></title>
    <style media="screen">
    body{
      height: 100%;
      width:100%;
      background-color:#ff6666;
      color: white;
    }
    .heading
    {
      height: 20%;
      position: fixed;
      left: 0;
      top: 0;
      width: 100%;
      background-color: red;
      color: white;
      text-align: center;
    }
    .heading:hover{
      color: yellow;
      opacity: .9;
    }
    .loginBox
    {
      height: 70%;
      width: 80%;
      color: white;
      opacity: .7;
      background-color: #ff1a1a;
      padding-top: 10px;
      font-size: 20px;
      font-family:cursive ;
      border-style: none;
      border-color: #ff9900;
      border-radius: 20px;
      border-color: #003300;
      border-width: 15px;;
      height: 350px;
      width:260px;
      padding-top: -20px;
      padding:50px;
      margin-top:100px;
      margin-left:900px;
    }
    .loginBox:hover{
      color: #ff9900;
      opacity: .9;
    }
    #outerbox
    {
      border-width: 5px;
      border-color: #003300;
      border-style: solid;
      margin-top: -450px;
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
    .socialMedia{

      float:right;
      margin-top: -350px;
    }
    .socialMedia ul{
      list-style: none;
    }
    a{
      color:orange;
      text-decoration: none;
      font-weight: bold;
    }
    .footer{

      margin-top: 100px;
       position: fixed;
       height:100px;
       column-count: 2;
       font-size: 20px;
       left: 0;
       bottom: 0;
       width: 100%;
       background-color: #ff1a1a;
       color: red;
       text-align: center;
        }
    </style>
  </head>
  <body>
    <div class="heading">
      <h1><marquee>BOOK'S PARADISE</marquee></h1>
    </div>
    <div class="loginBox" action="">
      <h1><center>LOGIN PAGE</center></h1><br>
      <form class="" action="logBack.php" method="post">
        Email:<br><input type="email"  style="width:250px;height:30px;" placeholder="Email" name="email" required><br>
        Password:<br><input type="password" id="txtPassword" style="width:250px;height:30px;" placeholder="Password" name="password" required><br><br>
        <input type="submit" name="submit" style="width:200px;height:50px;" placeholder="Submit">
      </form>
    </div>
    <div id="outerbox">
      <div id="slidebox" >
        <img src="2.png"  alt="">
        <img src="4.jpg"  alt="">
        <img src="3.png"  alt="">
        <img src="5.jpg"  alt="">
        <img src="6.jpg"  alt="">
        <img src="1.jpg"  alt="">
        <img src="77.jpg"  alt="">
      </div>
    </div>
    <div class="socialMedia">
      <ul>
        <li><a href="https:/&nbsp;&nbsp;/www.facebook.com/"><img src="facebook.png" alt=""style="height:40px;width:40px;"></a></li>
        <li><a href="https://www.instagram.com/"> <img src="insta.png" alt=""style="height:40px;width:40px;"> </a></li>
        <li><a href="https://www.twitter.com/"><img src="twitter.png" alt=""style="height:40px;width:40px;"> </a></li>
      </ul>
    </div>
    <div class="register">
      <a href="" alt=""style="height:40px;width:40px;"></a>
    </div>
    <div class="footer">
      <a href="about.php">About Us</a><br>
      <a href=" contact.php">Contact Us</a><br>
      <a href=" register.php">Register </a><br>
      <a href=" home.php">Home Page </a><br>
      <a href=" eng.php">Engineering Books</a><br>
      <a href=" med.php">Medical Books</a><br>
      <a href=" comm.php">Commerce Books</a><br>
      <a href=" novel.php">Novel Books</a><br>
    </div>
  </body>
</html>
