
<?php
session_start();
error_reporting(0);


$Server = 'localhost';
$username = 'root';
$password = '763410system@';
$database = 'ankit';
$conn = mysqli_connect($Server, $username , $password , $database);

if (!$conn){
    die("<script>alert('connection failed')</script>");
}
$d=$_SESSION["email"];

$sql="SELECT * from details where email='$d' ";
$query=mysqli_query($conn,$sql);
 
if(isset($_REQUEST['email'])){
    $email=$_REQUEST['email'];
    $sql="SELECT * from details where email='$email'";
    $query=mysqli_query($conn,$sql);
}
if(isset($_REQUEST['submit'])){
  header("Location: edit-profile.php" );
  exit();
}

  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  </head>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");
    body {
      margin: 0;
      color: #2e323c;
      background: #f5f6fa;
      position: relative;
      height: 100%;
    }

.side_menu {
  width: 100%;
  float: left;
  background-color: #3167f0;
  height: 100vh;
}
.logo {
  font-family: "Poppins", sans-serif;
  font-size: xx-large;
  text-align: center;
  color: rgb(240, 239, 239);
}
.logo:hover {
  font-weight: bolder;
}
.contain-menu {
  float: left;
  width: 100%;
  height: 100%;
  transition: 0.5s;
}
.contain-menu ul {
  width: 100%;
  float: left;
  padding: 0px !important;
  margin-left: 0px !important;
}
.contain-menu li {
  font-family: "Poppins", sans-serif;
  list-style: none;
  width: 100%;
  color: rgb(240, 239, 239);
  font-size: large;
  padding: 15px;
}
.contain-menu li:hover {
  background-color: rgb(230, 168, 98);
}
.contain-menu li a:link {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
.contain-menu li a:visited {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
.contain-menu li a:hover {
  color: white;
  background-color: transparent;
  text-decoration: none;
  font-weight: bold;
}
.contain-menu li a:active {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
.padd-off {
  padding: 0px !important;
}
    .navbar {
      background-color: #3167f0;
      width: 100%;
      height: 7vh;
      justify-content: center;
    }
    .icon {
      color: white;
    }
    .dash {
      color: white;
      font-size: x-large;
      font-family: "Poppins", sans-serif;
      padding: 9px;
    }
    .dash:hover {
      font-weight: bold;
    }
    .welcome {
      color: white;
      font-size: x-large;
      font-family: "Poppins", sans-serif;
    }
    @keyframes example {
      0% {
        left: 10px;
        top: 0px;
      }
      50% {
        left: 50px;
        top: 0px;
      }
      100% {
        left: 10px;
        top: 0px;
      }
    }
    .welcome {
      position: relative;
      animation-name: example;
      animation-duration: 4s;
      animation-iteration-count: infinite;
    }

    .account-settings .user-profile {
      margin: 0 0 1rem 0;
      padding-bottom: 1rem;
      text-align: center;
    }
    .account-settings .user-profile .user-avatar {
      margin: 0 0 1rem 0;
    }
    .account-settings .user-profile .user-avatar img {
      width: 90px;
      height: 90px;
      -webkit-border-radius: 100px;
      -moz-border-radius: 100px;
      border-radius: 100px;
    }
    .account-settings .user-profile h5.user-name {
      margin: 0 0 0.5rem 0;
    }
    .account-settings .user-profile h6.user-email {
      margin: 0;
      font-size: 1rem;
      font-weight: 400;
      color: #9fa8b9;
    }
    .account-settings .about {
      margin: 2rem 0 0 0;
      text-align: center;
    }
    .account-settings .about h5 {
      margin: 0 0 15px 0;
      color: #007ae1;
    }
    .account-settings .about p {
      font-size: 1.3rem;
    }
    .form-control {
      border: 1px solid #cfd1d8;
      -webkit-border-radius: 2px;
      -moz-border-radius: 2px;
      border-radius: 2px;
      font-size: 1.2rem;
      background: #ffffff;
      color: #2e323c;
      transition: all 0.5s ease;
    }
    .form-control:hover,
    .form-control:focus {
      border: 2px solid rgb(228, 226, 226);
      border-radius: 8px;
    }
    .form-group {
      padding: 5px;
    }

    .card {
      background: #ffffff;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      border: 0;
      margin-bottom: 1rem;
      padding: 20px;
      transition: 0.5s;
    }
    .card:hover,
    .card:focus {
      box-shadow: 2px 2px 2px grey;
    }
    #msg{
      font-size: 16px;
      font-weight: bold;
      margin-top: 15px ;
    }
    a{
      text-decoration: none;
      color:white;
      
    }
  </style>
  <body>
    <div class="col-sm-12 padd-off">
      <div class="col-sm-2 padd-off">
        <div class="side_menu">
          <div class="logo">
            <img src="logo2.jpeg" style="width: 100%; height: 110px" />
          
          </div>
          <div class="menu" style="margin-top:40px;">
            <div class="contain-menu">
              <ul>
                <li>
                  <a href="dashboard.php">
                    <span class="icon"><i class="fa fa-tachometer"></i></span>
                    <span class="title">Dashboard</span>
                  </a>
                </li>
                <li>
                  <a href="profile1.php">
                    <span class="icon"><i class="fa fa-user-circle"></i></span>
                    <span class="title">Profile</span>
                  </a>
                </li>
                <li>
                  <a href="blog/index2.php">
                    <span class="icon"><i class="fa fa-pencil"></i></span>
                    <span class="title">Post A Blog</span>
                  </a>
                </li>
                <li>
                  <a href="placem/placement.php">
                    <span class="icon"
                      ><i class="fa fa-graduation-cap"></i
                    ></span>
                    <span class="title">Placement</span>
                  </a>
                </li>
                <li>
                  <a href="clubs/clubs.php">
                    <span class="icon"><i class="fa fa-handshake-o"></i></span>
                    <span class="title">Clubs</span>
                  </a>
                </li>
                <li>
                  <a href="logout.php">
                    <span class="icon"><i class="fa fa-sign-out"></i></span>
                    <span class="title">Logout</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-10 padd-off">
        <div class="main_content">
    <header>
      <nav class="navbar">
        <div class="col-sm-4">
          <div class="col-sm-1"></div>
          <div class="col-sm-11">
            <div class="Dashboard">
              <span class="icon"><i class="fa fa-bars"></i></span>
              <span class="dash">Profile</span>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="search_bar">
            <span class="icon" style="display: inline"
              ><i class="fa fa-search"></i
            ></span>
            <label for="search"></label>
            <input
              type="search"
              placeholder="Search Here"
              class="form-control"
              style="width: 250px; display: inline; margin-top: 5px"
            />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="col-sm-4"></div>
          <div class="col-sm-8">
            <div class="user">
              <span class="icon"><i class="fa fa-user"></i></span>
              <span class="welcome">Welcome User</span>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <div class="container">
      <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
          <div class="card h-100">
            <div class="card-body">
              <div class="account-settings">
                <div class="user-profile">
                  <div class="user-avatar">
                  <?php foreach($query as $q){?>
                      
                      <?php } ?>
                    <img
                      src="photo/<?php echo $q['photo'];?>"
                      alt="Maxwell Admin"
                    />
                  </div>
                  
                
                  <h5 class="user-name"><?php echo $q['name'];?></h5>
                  <h6 class="user-email"><?php echo $q['email'];?></h6>
                  
                </div>
                <div class="about">
                  <h5>About</h5>
                  <p class="card-text"><?php echo $q['portfolio'];?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12" style="width:800px;">
          <div class="card h-100"style="padding:20px 40px;">
            <div class="card-body">
              <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <h6 class="mb-2 text-primary">Personal Details</h6>
                </div>
                <form action="edit-profile.php" method="POST">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  
                
                  <div class="form-group">
                    <label for="fullName">Full Name</label>
                   
                        <p class="card-text"><?php echo $q['name'];?></p>
                    
                    
                  </div>
                  
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="eMail">Email</label>
                    <p class="card-text"><?php echo $q['email'];?></p>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <p class="card-text"><?php echo $q['phone'];?></p>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="company-name">Company Name</label>
                    <p class="card-text"><?php echo $q['company'];?></p>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="website">Website URL</label>
                    <p class="card-text"><?php echo $q['www'];?></p>   
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="G-account">Github/Linkedin Account</label>
                    <p class="card-text"><?php echo $q['gla'];?></p>
                  </div>
                </div>
              </div>
              <div class="row gutters">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="UID">UID</label>
                    <p class="card-text"><?php echo $q['UID'];?></p>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="unimail">University-Mail</label>
                    <p class="card-text"><?php echo $q['CU'];?></p>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label for="branch">Branch</label>
                    <p class="card-text"><?php echo $q['branch'];?></p>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  
              </div>
              
              <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                 <p id = "msg"> keep your profile updated! </p>
                  <div class="text-right">
                    <button
                      type="button"
                      name="cancel"
                      class="btn btn-secondary"
                    >
                      Cancel
                    </button>
                    
                    <div
                    onclick="update_msg()"
                      type="button"
                      name="submit"
                      class="btn btn-primary"
                      
                    ><a href="edit-profile.php">update</a></div> 
                  </div>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
function update_msg() 
{
  document.getElementById("msg").innerHTML ="Your profile have been updated, successfully!";
}
    </script>
  </body>
</html>
