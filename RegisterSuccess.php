<?php
class Database
{
  protected $db_name="library management system";
  protected $user="root";
  protected $pass="";
  protected $host="localhost";
  public function connect()
  {
    global $con;
      $con=mysqli_connect($this->host,$this->user,$this->pass,$this->db_name);

  }
  public function insertData($name,$email,$contry,$phno,$pass)
  {
    global $con;
    $query="INSERT INTO `register`(`name`, `email`, `country`, `phoneno`, `password`) VALUES ('$name','$email','$contry','$phno','$pass')";
    $run=mysqli_query($con,$query);
    if($run==true)
    {
      echo "<h1>DATA ADDED TO DATABASE</h1>";
    }
    else
      echo"<h1>ERROR</h1>";
  }
}
if(isset($_POST['submit'])) {
  $nam = $_POST['username'];
  $mail = $_POST['email'];
  $conutry = $_POST['country'];
  $phono = $_POST['phoneNo'];
  $passw = $_POST['password'];
}
$db=new Database();
$db->connect();
$db->insertData($nam,$mail,$conutry,$phono,$passw);
?>
