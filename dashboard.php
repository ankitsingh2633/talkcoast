<?php include "blog/logic.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="normalize.min.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
</head>
<body>
    <div class="col-sm-12 padd-off">
        <div class="col-sm-2 padd-off">
        <div class="side_menu">
            <div class="logo">
                <img src="logo2.jpeg" style="width: 100%; height:110px">
            </div>
            <div class="menu" style="margin-top: 40px;">
                <div class="contain-menu">
                    <ul>
                        <li>
                            <a href="profile1.php">
                            <span class="icon"><i class="fa fa-user-circle"></i></span>
                            <span class="title">Profile</span>
                        </a>
                        </li>

                        <li>
                            <a href="dashboard.php">
                            <span class="icon"><i class="fa fa-tachometer"></i></span>
                            <span class="title">Dashboard</span>
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
                            <span class="icon"><i class="fa fa-graduation-cap"></i></span>
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
                    <nav class="navbar" style="margin: 0px 0px 0px !important">
                        <div class="col-sm-4 padd-off">
                            <div class="col-sm-1 padd-off"></div>
                            <div class="col-sm-11 padd-off">
                            <div class="Dashboard">
                            <span class="icon"><i class="fa fa-bars"></i></span>
                            <span class="dash">Dashboard</span>
                        </div>
                        </div>
                        </div>
                        <div class="col-sm-4 padd-off">
                            <div class="search_bar">
                                <span class="icon" style="display: inline;"><i class="fa fa-search"></i></span>
                                <label for="search"></label>
                                <input type="search"  placeholder="Search for..." class="form-control" style="width: 250px; display: inline; margin-top: 5px;">
                            </div>
                        </div>
                        <div class="col-sm-4 padd-off">
                            <div class="col-sm-4 padd-off"></div>
                            <div class="col-sm-8 padd-off">
                            <div class="user">
                            <span class="icon"><img class="img-profile rounded-circle"
                                src="undraw_profile.svg" style="height: 4rem; width: 4rem;"></span>
                            <span class="welcome">Welcome User</span>
                        </div>
                        </div>
                        </div>
                </nav>
                </header>
            </div>
            <div class="background">
               <div class="img"></div>
               <div class="blocks">
               <div class="col-sm-3 padd-off">
                  <div class="updates">
                    <ul>
                        <div class="update_class">
                        <li>
                         <span class="update_title">Daily Updates</span>
                         <span class="update_icon"><i class="fa fa-retweet "></i></span>
                        </li>
                    </div>
                    </ul>
                  </div>
               </div>
               <div class="col-sm-3 padd-off">
                <div class="blog">
                <ul>
                    <div class="blog_class">
                    <li>
                     <span class="blog_title">Pen a Blog</span>
                     <span class="blog_icon"><i class="fa fa-pencil-square-o"></i></span>
                    </li>
                </div>
                </ul>
                </div>
               </div>
               <div class="col-sm-3 padd-off">
                   <div class="comment">
                <ul>
                    <div class="comment_class">
                    <li>
                     <span class="comment_title">Post Your Comments and Doubts</span>
                     <span class="comment_icon"><i class="fa fa-comments-o"></i></span>
                    </li>
                </div>
                </ul>
                </div>
               </div>
               <div class="col-sm-3 padd-off">
                <div class="club">
                <ul>
                    <div class="club_class">
                    <li>
                     <span class="club_title">Join Clubs to Seek Advice</span>
                     <span class="club_icon"><i class="fa fa-question-circle"></i></span>
                    </li>
                </div>
                </ul>
                </div>
               </div>
               </div>
               <div class="col-sm-8 padd-off">
                 <div class=trending_post id="">
                    <nav class="navbar_trending">
                        <div class="nav_text">
                        <p>TRENDING POSTS</p>
                        </div>
                    </nav>
                    <div class="row" >
             <?php foreach($query as $q){?>
             <div class="col-4 d-flex justify-content-center align-items-center">
                  <div class="card text-black bg-white mt-5 shadow-lg p-3 mb-5 bg-white rounded" style = ".card:hover: ">
                      <div class="card-body" style="width: 18rem;" style = "background-color: grey;">
                           <h5 class="card-title"><i class="fa fa-user" style = "padding-right: 5px;"></i><?php echo $q['name'];?></h5>
                           <p style="color: grey;" class="card-text"> <i class="fa fa-envelope" style = "padding-right: 5px;"></i> <?php echo $q['email'];?></p>
                            <p class="card-text"><?php echo $q['content'];?></p>

                            

                      </div>
                  </div>
             </div>
             <?php }?>
        </div>
                 </div>
               </div>
               <div class="col-sm-4 padd-off">
                
                <div class="comments_notify" id="">
                    <nav class="comments_notify_nav">
                        <div class="comments_notify_nav_text">
                            <span>COMMENTS</span>
                            <span class="comments_notify_icon"><i class="fa fa-commenting-o"></i></span>
                        </div>
                        <button id="view" type="button" style="width:220px;height:25px; border:white;color:white; padding:5px 5px; margin-top: 130px;background:#4e73df; font-family: 'Poppins',sans-serif;">VIEW</button>
                    </nav>
                  <img src="comment dashboard.jpg" style="width:100%; height:130px">
                </div>
                <div class="photo">
                    <img id="ph" src="undraw_posting_photo.svg" style="width: 70%; height:40vh; margin-left: 120px; position: relative !important;">
                </div>
               </div>
            </div>
        </div>
    </div>
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span style="margin-left: 50px; color:rgba(128, 128, 128, 0.8); position: relative; margin-top:2px">All Rights and Copyrights Reserved &copy; TalKcoast 2021</span>
            </div>
        </div>
    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#view").click(function(){
    $("#ph").animate({height: '20vh', opacity: '0.4'}, "slow");
    $("#ph").animate({width: '50%', opacity: '0.8'}, "slow");
    $("#ph").animate({height: '30vh', opacity: '0.4'}, "slow");
    $("#ph").animate({width: '90%', margin: '20px', opacity:'0.9'}, "slow");
  });
});
</script>
</html>