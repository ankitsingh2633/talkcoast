<?php 
session_start();

$Server = 'localhost';
$username = 'root';
$password = 'joker2633@Q';
$database = 'ankit';
$conn = mysqli_connect($Server, $username , $password , $database);

if (!$conn){
    die("<script>alert('connection failed')</script>");
}

error_reporting(0);

if(isset($_REQUEST["sign"])){
  $name=$_REQUEST['name1'];
  $email=$_REQUEST['email'];
  $password= md5($_REQUEST['password1']);
  $_SESSION['name11']=$name;


  $sql1="SELECT * from details where email='$email'";
  $result1= mysqli_query($conn, $sql1);
  if(mysqli_num_rows($result1)>0){
    header("Location: index.php?info=failed");
    exit();
  }else{
    header("Location: index.php?info=ss");
    $sql="INSERT INTO details(name,email,password) values ('$name','$email','$password')";
    $result= mysqli_query($conn, $sql);
    exit();

  }

}
if(isset($_REQUEST["submit"])){
  $email=$_REQUEST['name'];
  $password= md5($_REQUEST['password']);
  $_SESSION['email']=$email;
  

 

  $sql="SELECT * from details where email='$email' and password='$password' LIMIT 1";

  $result= mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)==1 ){
    $sql1="SELECT count(phone) from details where email='$email'";
    $result1= mysqli_query($conn, $sql1);

    if(($result1)==1 ){


    header("Location: profile1.php");
    exit();
    }else{
      header("Location: edit-profile.php");
    exit();

    }

  }else{
    header("Location: index.php?info=fail");
    exit();
  }
  
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="styles.css" />
    <title>TalKcoast-Sign in & Sign up page</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" name="name" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" name="submit" value="Login" class="btn solid" />
            <?php if($_REQUEST['info']=="fail"){?>
            <div  style="color:red;">
             invaild username password
           </div>
           <?php }?>
            <a id="forgot-password" href="http://localhost/talk/reset.php"
              >forgot password?</a
            >
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="name1" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" name="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password1" placeholder="Password" />
            </div>
            <input type="submit" name="sign" class="btn" value="Sign up" />
            <?php if($_REQUEST['info']=="failed"){?>
            <div  style="color:red;">
             invalid
           </div>
           <?php }?>
            <p class="social-text">Or Sign up with</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Haven't created account?</h3>
            <p>
              You are missing alot, Go head make one <br />
              clear your doubts from your admirable senior, explore alot more
            </p>
            <button class="btn transparent" id="sign-up-btn">Sign up</button>
          </div>
          <img src="1.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Already a part of TalKcoast?</h3>
            <p>set foot in erudition world! , from here</p>
            <button class="btn transparent" id="sign-in-btn">Sign in</button>
          </div>
          <img id="image2" src="2.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="script.js"></script>
  </body>
</html>
