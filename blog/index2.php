<?php
  include "logic.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    .card-title{
        color: rgb(120,161,213);
    }
    .btn{
        border: 1px solid grey;
    }
    #back-button{
        margin-left: 18px;
        background-color: rgb(55,69,79);
        color: white;
    }
    #post-button{
        margin-left: 35%;

        background-color: rgb(55,69,79);
        color: white;

    }
    #content-container{
        background-color: aliceblue;
    }
    body{
        background: url("blue2.jpeg");
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
<body>
    <div id = "content-container" class="container mt-5 shadow p-3 mb-5 rounded" >
       <?php
       if(isset($_REQUEST['info'])){?>
          <?php if($_REQUEST['info']=="added"){?>
             <div class="alert alert-success" role="alert">
            POST HAS BEEN ADDED SUCCESSFULLY
            </div>
            <?php } elseif($_REQUEST['info']=="updated"){

            ?>
            <div class="alert alert-success" role="alert">
            SUCCESSFULLY
            </div>
            
             <?php } elseif($_REQUEST['info']=="delete"){?>
            <div class="alert alert-danger" role="alert">
             delete SUCCESSFULLY
           </div>
           <?php }?>
           <?php } ?>

        <div>
         <a id = "back-button" class = "btn" href = "../dashboard.php">Back</a> <a  id = "post-button" href="create.php" class="btn">+ create a new post </a>
             </div>
        <div class="row">
             <?php foreach($query as $q){?>
             <div class="col-4 d-flex justify-content-center align-items-center">
                  <div class="card text-black bg-white mt-5 shadow-lg p-3 mb-5 bg-white rounded" style = ".card:hover: ">
                      <div class="card-body" style="width: 18rem;" style = "background-color: grey;">
                           <h5 class="card-title"><i class="fa fa-user" style = "padding-right: 5px;"></i><?php echo $q['name'];?></h5>
                           <p style="color: grey;" class="card-text"> <i class="fa fa-envelope" style = "padding-right: 5px;"></i> <?php echo $q['email'];?></p>
                            <p class="card-text"><?php echo $q['content'];?></p>

                            <a href="view.php?id=<?php echo $q['id'];?>" class="btn btn-light">read more <span class="text-danger">&rarr;</span> </a>

                      </div>
                  </div>
             </div>
             <?php }?>

    <script scr="https://code.jquery.com/jquery-3.5.2.slim.min.js"></script>
    <script scr="https://cdn.jsdelivr.net/npm/popper.jsQ1.16.1/dist/umd/popper.min.js"></script>
    <script scr="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>