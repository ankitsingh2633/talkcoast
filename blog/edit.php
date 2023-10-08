<?php
  include "logic.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <style>
    .heading{
      text-align: center;
    }
    body{
      font-family : "poppins" ;
      background: url("blue.png");
      background-size: cover;
      background-repeat: no-repeat;

    }
    #container{
      padding: 15vh;
      background-color: skyblue;
    }
    #update-button{
      align-items: center;
    }
  </style>
<div id="container">
  <h1 class = "heading">Make correction !</h1>
<div class="container mt-5">
      <?php foreach($query as $q){?>
        <form action="" method="POST">
          <input type="text " hidden name="id" value="<?php echo $q['id'];?>">
          <input type="text" name="name" placeholder="name" class="form-control bg-white text-dark my-3 text-center" value="<?php echo $q['name'];?>">
          <input type="email" name="email" placeholder="email" class="form-control bg-white text-dark my-3 text-center" value="<?php echo $q['email'];?>">
          <textarea name="content" class="form-control bg-white text-dark my-3"><?php echo $q['content'];?></textarea>
          <button name="update" class="btn btn-dark" id = "upadet-button">update</button>
      </form>

     <?php } ?>

</div>
</div>
<script scr="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script scr="https://cdn.jsdelivr.net/npm/popper.js01.16.1/dist/umd/popper.min.js"></script>
<script scr="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>