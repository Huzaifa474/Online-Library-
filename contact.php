<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1"/>

    <title>contact page</title>
    <style media="screen" >

      .messageBox
      {
        
        margin-top: 150px;
        font-size: 20px;
        font-family:cursive ;
        border-style:groove;
        border-radius: 10px;
        border-color: red;
        border-width: 5px;
        height: 280px;
        width:300px;
        padding: 50px 50px;
        position: absolute;

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
      .heading{
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
    </style>
  </head>
  <body style="background-color:#ffa31a;">

    <div class="heading">
      <h1>BOOK'S PARADISE</h1><br>
    </div>
    <div class="messageBox">
      <form class="" action="contactForm.php" method="post">

      Name:<br><input type="text"  style="width:250px;height:30px;" placeholder="Name" name="name" required><br>
      Email:<br><input type="email" id="txtPassword" style="width:250px;height:30px;" placeholder="email" name="email" ><br><br>
      Message:<br><input type="text" style="width:250px;height:60px;" placeholder="message" name="message" ><br><br>
      <input type="submit"  name="submit" style="width:200px;height:50px;" placeholder="Submit">
      </form>

    </div>

    <div class="footer">
      <a href="about.php">About Us</a><br>
      <a href=" contact.php">Contact Us</a><br>
      <a href=" register.php">Register </a><br>
      <a href=" home.php">Home Page </a><br>
      <a href=" Eng.php">Engineering Books</a><br>
      <a href=" med.php">Medical Books</a><br>
      <a href=" comm.php">Commerce Books</a><br>
      <a href=" novel.php">Novel Books</a><br>
    </div>
  </body>
</html>
