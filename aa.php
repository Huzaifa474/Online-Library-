<?php include_once "singleton.php";?>
<?php
abstract class User
{
  protected $email;
  protected $password;
  public $db;
  abstract function isNull():booleon;
  abstract function getInfo($db,$email,$password):string;
}
class RealUser extends User
{
  function __construct($db,$email,$password)
  {
    $this->email=$email;
    $this->password=$password;
    $this->db=$db;
  }
  public function getInfo($db,$email,$password):string
  {
    $query="SELECT email,password from `register` WHERE email=$email and password=$password";
    $run=mysqli_query($db,$run);
    if($run==true)
    {
      header("location:home.php");
    }
    else
    {
      echo"<h3><center>SOME THING WRONG</h3></center>";

    }

  }
  public function isNull():booleon
  {
    return false;
  }
}
 class FakeUser extends User
{
  public function getInfo($db,$email,$password):string
  {
    $query="SELECT email,password from `register` WHERE email=$email and password=$password";
    $run=mysqli_query($db,$run);
    if($run==true)
    {
      header("location:home.php");
    }
    else
    {
      echo"<h3><center>DATA NOT AVIALABLE IN DATABASE</h3></center>";
      header("location:register.php");
    }
  }

  public function isNull():booleon
  {
    return true;
  }
}
 class controller
{
  public function testUser($a,$db)
  {
    $query="SELECT email from `register` WHERE 1" ;
    $run=mysqli_query($db,$query);
    $result=mysqli_fetch_assoc($run);
    if($result==true)
    {
      while($result==true)
      {
        $emails=array($result['email']);
        for($i=0;$i<$emails;$i++)
        {
          if($emails[$i]==$a)
          {
            echo"PROGRAMM IS RUNNING";
            return new RealUser($email);
          }
          else {
            echo"Program is not running";
            return new FakeUser();
          }
        }
      }
    }

  }
}
$db = $instance->getConnection();
$cont=new controller();
$cont->testUser('sohailhassaan@yahoo.com',$db);
?>
