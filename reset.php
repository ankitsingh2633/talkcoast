<?php 
$Server = 'localhost';
$username = 'root';
$password = '763410system@';
$database = 'ankit';
$conn = mysqli_connect($Server, $username , $password , $database);
  
if(isset($_REQUEST["submit"])){
    
    $email=$_REQUEST['name'];
    $p2=md5($_REQUEST['password2']);
    $password= md5($_REQUEST['password']);

  
   if($password==$p2){
    $sql1="UPDATE details SET password='$password' where email='$email'";
    $result1= mysqli_query($conn, $sql1);
    echo "password changed";

   }else{
       echo "password did not match";
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
            <h2 class="title">Reset Password</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" name="name" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password2" placeholder="New Password" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder=" Confirm Password" />
            </div>
            <input type="submit" name="submit" value="update" class="btn solid" />
            
            
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
         
              
            </div>
          </form>
        </div>
      </div>

    
</body>
</html>