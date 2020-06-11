<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script>
    function message()
    {
      alert("Book uploaded successfully");
    }
    </script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Add Book</title>
  </head>
  <body style="background-color:#8c8c8c;">
    <div class="p-3 mb-2 bg-dark text-white">
    <h1>Book's Paradise</h1>
    <form >
  <div class="form-group">
    <label for="exampleInputEmail1">Book Name</label>
    <input type="text" class="form-control" name="nam" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Book category</label>
    <input type="text"  class="form-control" name="cat" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Upload</label>
    <input type="file"  class="form-control" name="fil" id="exampleInputPassword1">
  </div>
  <button type="submit" name="sub" class="btn btn-primary" onclick="message();">Submit</button>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </div>
    <footer>
      <!-- Footer -->
<footer class="page-footer font-small blue pt-4 bg-dark" >

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Book's Paradise</h5>
        <p>Where all your books are present.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="home.php">Home</a>
          </li>
          <li>
            <a href="comm.php">Commerce</a>
          </li>
          <li>
            <a href="contact.php">Contact</a>
          </li>
          <li>
            <a href="about.php">About Us</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="eng.php">Engineering</a>
          </li>
          <li>
            <a href="med.php">Medical</a>
          </li>
          <li>
            <a href="novel.php">Novel</a>
          </li>

        </ul>
      </div>

    </div>

  </div>

  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> bookparadise.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    </footer>
  </body>

</html>
