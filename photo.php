<?php 
session_start();
$Server = 'localhost';
$username = 'root';
$password = '763410system@';
$database = 'ankit';
$conn = mysqli_connect($Server, $username , $password , $database);

if(isset($_REQUEST['submit1'])){
$filename=$_FILES['uploadfile']['name'];
$tempname=$_FILES['uploadfile']['tmp_name'];

  $e=$_SESSION["email"];
  $sql1="UPDATE  details SET photo='$filename' WHERE email='$e'";
  $result= mysqli_query($conn, $sql1);

   
   if (!empty($filename)){
       $location="photo/";
       move_uploaded_file($tempname,$location.$filename);
   }
  }

  
  
  ?>

