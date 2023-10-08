<?php
  include "logic.php";
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Edit/Delete</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
  #edit-button{
    background-color: rgb(223,228,234);
  }
  body{
    background: url("bin.png");
    background-size: cover;
    background-repeat: no-repeat;
    font-family: "poppins";
  }
#back-button{
  margin-top: 20px;
  margin-left: -80px;
  }
</style>
<body>

   <div class = "container">
     <a id = "back-button" href="index2.php" class = "btn btn-secondary">Back</a>
   <div class="container mt-5">
       <?php foreach($query as $q){?>
       <div class=" border border-transparent p-5 rounded.tg text-dark text-center">
           <h1><i class = "fa fa-user" style = "padding: 5px;"></i><?php echo $q['name']?></h1>
           <h3><i class = "fa fa-envelope" style = "padding: 5px;"></i><?php echo $q['email']?></h3>
       
       <div class="d-flex mt-2 justify-content-center align-items-center">
           <a id = "edit-button" href="edit.php?id=<?php echo $q['id'];?>" class="btn btn-light btn-sm">edit</a>
           <form action="" method="post">
             <input type="text" hidden name="id" value="<?php echo $q['id'];?>">
             <button class="btn btn-danger btn-sm ml-2" name="delete">delete</button>
           </form>
       </div>
       </div>
   </div>
          
       <div class="mt-5 border-left border-dark pl-3">
       <h3><?php echo $q['content'];?></h3>
        <p> <?php echo $q['blog']?></p>
       <?php }?>
       </div>
    </div>

    <script scr="https://code.jquery.com/jquery-3.5.2.slim.min.js"></script>
    <script scr="https://cdn.jsdelivr.net/npm/popper.jsQ1.16.1/dist/umd/popper.min.js"></script>
    <script scr="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>