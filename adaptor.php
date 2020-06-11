<?php include_once "singleton.php";?>
<?php
 interface client{
   public function Bookinfo($con,$name,$bookcat);
 }
 interface button
 {
   public function add($a,$b);
 }
 class books implements client{
   public function Bookinfo($con,$name,$bookcat)
   {
     $query="INSERT INTO `bookinfo`(`name`, `catagory`) VALUES ('$name','$bookcat')";
    $run= mysqli_query($con,$query);
    if($run==true)
    {
      echo"Book info sunccessfully saved";
    }
    else {
      echo"please try again";
    }
   }
 }
 class adaptor implements button
 {

   public function add($a,$b)
   {
     $query="INSERT INTO `book`(`file`) VALUES ('$b')";
     $run=mysqli_query($a,$query);
     if($run==true)
     {
       echo"Book uploaded";
     }
     else {
       echo"ERROR";
     }
   }
 }
 class data implements button
 {
   public function add($a,$b)
   {
     $query="INSERT INTO `book`(`file`) VALUES ('$b')";
     $run=mysqli_query($a,$query);
     if($run==true)
     {
       echo"Book uploaded";
     }
     else {
       echo"ERROR";
     }
   }
 }


 ?>
