<?php
session_start();
$conn=mysqli_connect("localhost","root","763410system@","ankit");
if(!$conn){
    echo "<h3 class='container'bg-dark text-center p-3 text-warning rounded-lg mt-5>NOT able established</h3>";
}
$sql="SELECT * from data1";
$query=mysqli_query($conn,$sql);



$d=$_SESSION["email"];


$sql1="SELECT * from details where email='$d' ";
$query1=mysqli_query($conn,$sql1);
 foreach($query1 as $q){
 }
$f= $q['name'];





if(isset($_REQUEST["new_post"])){

    $name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    $content=$_REQUEST["content"];
    $blog=$_REQUEST['blog'];
    

   
    $sql="INSERT INTO data1(name,email, content,blog) values('$f','$d','$content','$blog')";
    mysqli_query($conn,$sql);
    header("Location: index2.php?info=added");
    exit();

}
if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    $sql="SELECT * from data1 where id=$id ";
    $query=mysqli_query($conn,$sql);
}
if(isset($_REQUEST['update'])){
    $id=$_REQUEST['id'];
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $content=$_REQUEST['content'];
    $blog=$_REQUEST['blog'];
    $sql="UPDATE data1 SET name='$name',email='$email',content='$content',blog='$blog' where id=$id";
    mysqli_query($conn,$sql);
    header("Location: index2.php?info=updated");
    exit();
}
if(isset($_REQUEST['delete'])){
    $id=$_REQUEST['id'];
    $sql="DELETE from data1 where id=$id";
    $query=mysqli_query($conn,$sql);
    header("Location: index2.php?info=delete");
    exit();
}
?>
