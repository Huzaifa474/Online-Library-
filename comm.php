<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Commerce Books</title>
    <style media="screen">
    body{
      background-color: #ff6666;
    }
    .heading{
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      background-color: ;
      color: white;
      text-align: center;
    }
    .heading:hover{
      color: yellow;
      opacity: .9;
    }
    .bestSeller{
      margin-left: 800px;
      margin-top: -1350px;
    }
    .bookshelf{
      height: 1350px;
      margin-top: 100px;
      width: 600px;
      margin-left: 300px;
    }
    ul {
    position: fixed;
    list-style-type: none;
    margin-top:-1350px;
    padding: 10px;
    padding-bottom: 5px;
    margin-left:;
    width: 200px;
    background-color: #f1f1f1;
  }
    li a {

      font-size: 20px;
      display: block;
      color: #000;
      padding-top:20px;
      padding-left: 16px;
      text-decoration: none;
    }

    li a.active {
      background-color: red;
      color: white;
    }

    li a:hover:not(.active) {
      background-color: #555;
      color: white;
    }
    a{
      color:orange;
      text-decoration: none;
      font-weight: bold;
    }
    .logo{
      position: fixed;
      float: left;
      margin-top: -100px;
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
    <div class="logo">
       <img src="books/logo.png" style="height:100px;width:150px;" alt="book PARADISE">
    </div>
    <div class="heading">
      <h1>BOOK'S PARADISE</h1>
    </div>
    <div class="bookshelf">
       <a href="books/commerce/b1.pdf"><img src="books/commerce/c1.jpg" style="width:200px;height:200px;" alt=""></a>
       <a href="books/commerce/b2.pdf"><img src="books/commerce/c2.jpg" style="width:200px;height:200px;" alt=""></a>
       <a href="books/commerce/b3.pdf"><img src="books/commerce/c3.jpg" style="width:200px;height:200px;" alt=""></a>
       <a href="books/commerce/b5.pdf"><img src="books/commerce/c5.jpg" style="width:200px;height:200px;" alt=""></a>
       <a href="books/commerce/b6.pdf"><img src="books/commerce/c6.jpg" style="width:200px;height:200px;" alt=""></a>
       <a href="books/commerce/b7.pdf"><img src="books/commerce/c7.jpg" style="width:200px;height:200px;" alt=""></a>
       <a href="books/commerce/b8.pdf"><img src="books/commerce/c8.jpg" style="width:200px;height:200px;" alt=""></a>
       <a href="books/commerce/b9.pdf"><img src="books/commerce/c9.jpg" style="width:200px;height:200px;" alt=""></a>
       <a href="books/commerce/c10.pdf"><img src="books/commerce/c10.jpg" style="width:200px;height:200px;" alt=""></a>
       <a href="books/commerce/c11.pdf"><img src="books/commerce/c11.jpg" style="width:200px;height:200px;" alt=""></a>
       <a href="books/commerce/c12.pdf"><img src="books/commerce/c12.jpg" style="width:200px;height:200px;" alt=""></a>
       <a href="books/commerce/c13.pdf"><img src="books/commerce/c13.jpg" style="width:200px;height:200px;" alt=""></a>
     </div>
     <div class="NavBAr">
       <ul>
         <li><a  href="home.php">Home</a></li>
         <li><a href="about.php">About</a></li>
         <li><a href="contact.php">Contact</a></li>
         <li><a href="register.php">Register</a></li>
         <li><a href="login1.php">Login</a></li>
         <li><a href="eng.php">Engineering Books</a></li>
         <li><a href="med.php">Medical</a></li>
         <li><a class="active" href="comm.php">Commerce</a></li>
         <li><a  href="novel.php">Novels</a></li>
       </ul>
     </div>
     <div class="bestSeller">
       <a href="books/powerOfNow.pdf"><img src="books/powerOfNow.jpg" style="width:500px;height:500px;" alt=""></a>
       <a href="books/richdad.pdf"><img src="books/rich.jpg" style="width:500px;height:500px;" alt=""></a>
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
