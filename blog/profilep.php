<?php
$Server = 'localhost';
$username = 'root';
$password = '';
$database = 'talkcoast';
$conn = mysqli_connect($Server, $username , $password , $database);

if (!$conn){
    die("<script>alert('connection failed')</script>");
}

error_reporting(0);

if(isset($_REQUEST["submit"])){
  $name=$_REQUEST['fullname'];
  $email=$_REQUEST['email'];
  $phone=$_REQUEST['phone'];
  $cname=$_REQUEST['Cname'];
  $www=$_REQUEST['www']; 
  $gla=$_REQUEST['gla'];
  $uid=$_REQUEST['uid'];
  $cu=$_REQUEST['cu'];
  $branch=$_REQUEST['branch'];
  $protfolio=$_REQUEST['portfolio'];

  $sql="UPDATE  details SET name='$name',phone=$phone,company='$cname',www='$www',gla='$gla',UID='$uid',CU='$cu',branch='$branch',portfolio ='$portfolio' WHERE email='$email'";
  $result= mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)>0){
      header("Location: index.php?info=failed");
      exit();
    }
  

}
  ?>