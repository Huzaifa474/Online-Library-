<?php include_once "singleton.php";?>
<?php
interface test
{
  public function login($con,$email,$password);
  public function search($con,$mail);

}
class testLogin implements test
{
  public function login($con,$email,$password)
  {
    $query='SELECT * FROM register where email="$email"';
    $run=mysqli_query($con,$query);
    $row=$row['active'];
    $count=mysqli_num_rows($run);
    if($count==1)
    {
      header("location:home.php");
    }
    else {
      header("location:home.php");
    }

  }
    public function search($con,$mail)
    {
      echo "NULL";
    }
}

class testsearch implements test
{
  function __construct($a,$b)
  {
    $this->con=$a;
    $this->email=$b;
  }
  public function search($con,$email)
  {
    $query='select * from register where email="$email"';
    $run=mysqli_query($con,$query);
    if($run==true)
    {
      echo"SEARCH SUCCESSFUL";
    }
    else {
      echo"SEARCH UNCSUCCESSFUL";
    }

  }
    public function login($con,$email,$password)
    {
      return "NULL";
    }
}
class testFact
{
  public static function getinfo($info):test
  {
    switch ($info) {
      case 'login':
        $log=new testLogin();
        $log->login($con,$email,$password);

        break;
      case 'search':
        $sear=new testsearch();
        break;
      default:
       echo "ERROR";
        break;
    }
  }
}
$instance = Database::getInstance();
$db = $instance->getConnection();
$a=new testfact();
$a->getinfo('login');
$a->login($db,'hdjkskw@ghsj.com','abcde');




?>
