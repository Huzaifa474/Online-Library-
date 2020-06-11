<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medical Books</title>
    <style media="screen">
    body{
      background-color: #ff6666;
    }
    .heading{
      position: absolute;
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
    .logo{
      position: fixed;
      float: left;
      margin-top: -100px;
    }
    .bookshelf{
      height: 1350px;
      margin-top: 100px;
      width: 600px;
      margin-left: 300px;
    }
    .bestSeller{
      margin-left: 800px;
      margin-top: -1350px;
    }
    ul {

    position: fixed;
    list-style-type: none;
    margin-top:-1010px;
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
    <div class="bookshelf">
       <a href="books/med/b1.pdf"><img src="books/med/m1.jpg" style="width:200px;height:200px;" alt=""></a>
       <a href="books/med/b2.pdf"><img src="books/med/m2.jpg" style="width:200px;height:200px;" alt=""></a>
       <a href="books/med/b3.pdf"><img src="books/med/m3.jpg" style="width:200px;height:200px;" alt=""></a>
       <a href="books/med/b4.pdf"><img src="books/med/m4.jpg" style="width:200px;height:200px;" alt=""></a>
       <a href="books/med/b5.pdf"><img src="books/med/m5.jpg" style="width:200px;height:200px;" alt=""></a>
       <a href="books/med/b6.pdf"><img src="books/med/m6.jpg" style="width:200px;height:200px;" alt=""></a>
       <a href="books/med/b7.pdf"><img src="books/med/m7.jpg" style="width:200px;height:200px;" alt=""></a>
       <a href="books/med/b8.pdf"><img src="books/med/m8.jpg" style="width:200px;height:200px;" alt=""></a>
       <a href="books/med/b9.pdf"><img src="books/med/m9.jpg" style="width:200px;height:200px;" alt=""></a>
       <a href="books/med/b10.pdf"><img src="books/med/m10.jpg" style="width:200px;height:200px;" alt=""></a>
       <a href="books/med/b11.pdf"><img src="books/med/m11.jpg" style="width:200px;height:200px;" alt=""></a>
       <a href="books/med/b12.pdf"><img src="books/med/m12.jpg" style="width:200px;height:200px;" alt=""></a>
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
         <div class="bestSeller">
           <a href="books/watchman.pdf"><img src="books/watchman.jpg" style="width:500px;height:500px;" alt=""></a>
           <a href="books/finder.pdf"><img src="books/finder.jpg" style="width:500px;height:500px;" alt=""></a>
         </div>
       <div class="NavBAr">
         <ul>
           <li><a  href="home.php">Home</a></li>
           <li><a href="about.php">About</a></li>
           <li><a href="contact.php">Contact</a></li>
           <li><a href="register.php">Register</a></li>
           <li><a href="login1.php">Login</a></li>
           <li><a href="eng.php">Engineering Books</a></li>
           <li><a class="active" href="med.php">Medical</a></li>
           <li><a href="comm.php">Commerce</a></li>
           <li><a  href="novel.php">Novels</a></li>
         </ul>
       </div>

  </body>
</html>
