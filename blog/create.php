<?php


  include "logic.php";
$d=$_SESSION["email"];


$sql="SELECT * from details where email='$d' ";
$query=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
  .blog-icon{
    display: flex;
    padding: 10px;
    justify-content: center;
    text-align: center;
    font-family : "Acme";
    color: #366D91;
    background-color: aliceblue;
  }
  img{
    height: 100.7px;
  }
  .name{
    color: Black;
    font-family: "poppins";
    font-size: 2rem;
  }
  .email{
    color: Black;
    font-family: "poppins";
    font-size: 1.2rem;

}
.frame{
  padding: 125px;
  background: url("clock.png");
  background-size: cover;
  background-position: repeat;
}
.btn{
  background-color: rgb(54,109,145);
  border: 1px solid blue;
  color: white;
}
.btn:hover{
color: white;

}
a{
  text-decoration: none;
  color: black;
  border: 1px solid grey;
  background-color: white;
  padding: 4px;
  border-radius:2.9px;
  font-size: 18px;
}
a:hover{
  text-decoration: none;
  color: white;
  background-color: rgb(54,109,145);
}
#back{
  margin-left: 10px;
}
</style>
<body>
  <div class="frame">
  <div class="shadow-lg p-3 mb-5 bg-white rounded">
   <div><a id = "back" href="http://localhost/talk/dashboard.php">Back</a></div> <br>
   <div class="blog-icon">
    <img src="blogicon.png" alt="blog-icon image">
    <h1 style = "font-size: 4.3rem; text-decoration: underline;">write your thoughts here</h1>
    </div>
<div class="container mt-5" style = "padding: 10px;" box-shadow= "2px 2px 2px 1px rgba(0, 0, 0, 0.2)">
      <form action="" method="POST">
      <?php foreach($query as $q){?>
      <?php } ?>
        <h3  class = "name" > <i class="fa fa-user" style = "padding-right: 10px;"></i><?php echo $q['name'] ; ?></h3>
          <h3 class = "email"> <i class="fa fa-envelope" style = "padding-right: 10px;"></i><?php echo $_SESSION['email'];  ?></h3>
          
          <textarea name="content" class="form-control bg-white text-dark my-2"></textarea>
          <textarea name="blog" class="form-control bg-white text-dark my-3"></textarea>
          <button name="new_post" class="btn">submit post</button>
      </form>

</div>
  </div>
  </div>
  

<script scr="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script scr="https://cdn.jsdelivr.net/npm/popper.js01.16.1/dist/umd/popper.min.js"></script>
<script scr="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>