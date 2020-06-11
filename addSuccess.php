<?php include_once "singleton.php";?>
<?php include_once "adaptor.php"?>
<?php
if(isset($_POST['sub']))
{
  $instance = Database::getInstance();
 $db = $instance->getConnection();
  $bokname=$_POST['nam'];
    $bokcat=$_POST['cat'];
      $bokfile=$_POST['fil'];
$adap=new data();
$adap1=new books();
$adap1->Bookinfo($db,$bokname,$bokcat);
//$adap->add($db,$bokfile);
?>
