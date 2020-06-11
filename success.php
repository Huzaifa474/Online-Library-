<?php include_once "singleton.php";?>
<?php
if(isset($_POST['submit'])) {
    $nam = $_POST['username'];
    $mail = $_POST['email'];
    $conutry = $_POST['country'];
    $phono = $_POST['phoneNo'];
    $passw = $_POST['password'];
    $instance = Database::getInstance();
    $db = $instance->getConnection();
    $query = "INSERT INTO `register`(`name`, `email`, `country`, `phoneno`, `password`) VALUES ('$nam','$mail','$conutry','$phono','$passw')";
    $run = mysqli_query($db,$query);
    if ($run == true) {
        echo "DATA ADDED";
        header("location:home.php");
    }
    else
        echo"<h1>ERROR IN ADDING DATA TO DATABASE</h1>";
        header("location:register.php");
}
?>
