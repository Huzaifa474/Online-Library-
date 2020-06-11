<?php include_once "singleton.php";?>
<?php include_once "factory.php";?>
<?php

if(isset($_POST['submit']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];
  $instance = Database::getInstance();
  $db = $instance->getConnection();
  $a->getinfo('login');
  $a->login($db,$email,$password);
}
 ?>
