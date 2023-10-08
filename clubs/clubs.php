<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clubs</title>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="normalize.min.css">
    <link rel="stylesheet" href="clubs.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
</head>
<body>
    <div class="col-sm-12 padd-off">
        <div class="col-sm-2 padd-off">
        <div class="side_menu">
            <div class="logo">
                <img src="photos/logo2.jpeg" style="width: 100%; height:110px">
            </div>
            <div class="menu" style="margin-top: 40px;">
                <div class="contain-menu">
                    <ul>
                        <li>
                            <a href="http://localhost/talk/profile1.php">
                            <span class="icon"><i class="fa fa-user-circle"></i></span>
                            <span class="title">Profile</span>
                        </a>
                        </li>
                        <li>
                            <a href="http://localhost/talk/Dashboard.php">
                            <span class="icon"><i class="fa fa-tachometer"></i></span>
                            <span class="title">Dashboard</span>
                        </a>
                        </li>
                        <li>
                            <a href="http://localhost/talk/blog/index2.php">
                            <span class="icon"><i class="fa fa-pencil"></i></span>
                            <span class="title">Post A Blog</span>
                        </a>
                        </li>
                        <li>
                            <a href="http://localhost/talk/placem/placement.php">
                            <span class="icon"><i class="fa fa-graduation-cap"></i></span>
                            <span class="title">Placement</span>
                        </a>
                        </li>
                        <li>
                            <a href="#">
                            <span class="icon"><i class="fa fa-handshake-o"></i></span>
                            <span class="title">Clubs</span>
                        </a>
                        </li>
                        <li>
                            <a href="http://localhost/talk/logout.php">
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
                    <nav class="navbar" style="margin:0px 0px 0px !important">
                        <div class="col-sm-4">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-11">
                            <div class="Dashboard">
                            <span class="icon"><i class="fa fa-bars"></i></span>
                            <span class="dash">Clubs</span>
                        </div>
                        </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="search_bar">
                                <span class="icon" style="display: inline;"><i class="fa fa-search"></i></span>
                                <label for="search"></label>
                                <input type="search" placeholder="Search For..." class="form-control" style="width: 250px; display: inline; margin-top:5px;">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-8">
                            <div class="user">
                                <span class="icon"><img class="img-profile rounded-circle"
                                    src="photos/undraw_profile.svg" style="height: 4rem; width: 4rem;"></span>
                            <span class="welcome">Welcome User</span>
                        </div>
                        </div>
                        </div>
                </nav>
                </header>
            </div>
            <div class="background">
                <div class="slideshow-container">
                        <img class="slides" src="photos/club1.svg" style="background-color:white !important; width:100%; height:525px;position: absolute">
                        <img class="slides" src="photos/club2.gif" style="width:100%; height:525px;position: absolute">
                        <img class="slides" src="photos/club3.gif" style="width:100%; height: 525px;position: absolute">
                        <img class="slides" src="photos/club4.jpg" style="width:100%; height:525px;position: absolute">
                     <br>
                   <div style="text-align:center">
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span>
                  </div>
                  <div class="overlay">
                    <div class="text">
                        <h3 class="ml11">
                            <span class="text-wrapper" style="margin-top: -180px !important; font-size: 35px;">
                              <span class="line line1"></span>
                              <span class="letters" style="color: rgb(122, 122, 122);">Join To Grind Your Skills In The Erudition Era</span>
                            </span>
                          </h3>
                   </div>
                  </div>
               </div>

               <div class="midbar">
                  <div class="col-sm-12">
                    <div class="col-sm-5">
                        <div class="future">Come Join Us for the Better Future Tomorrow <i class="fa fa-mobile" style="font-size: medium;"></i></div>
                        <div class="vl" style="border-left: 1px solid #e4e2e2; height:65px; margin-left:400px; margin-top:-33px"></div>
                    </div>

                    <div class="col-sm-7">
                    <div class="col-sm-6">
                    <div class="education">
                       <div class="edu-1">There Is No Education Like</div>
                       <div class="edu-2">Adversity</div>
                    </div>
                    <div class="vl" style="border-left: 1px solid #e4e2e2; height:65px; margin-left:300px; margin-top:-60px"></div>
                    </div>
                    <div class="col-sm-6">
                        <img src="photos/midbar.svg" style="width:240px; margin-left: 50px;">
                    </div>
                   </div>
                  </div>
               </div>
                
               <button id="hide" style="width:90px; background:#4e73df ;border:white;color:white; padding:5px 5px; margin-left: 530px; margin-top:40px;">Hide Clubs</button>
               <button id="show" style="width:90px; background:#4e73df ;border:white;color:white; padding:5px 5px; margin-left: 20px; margin-top:40px;">Show Clubs</button>
                <div class="boxes" id="boxes">
                   <div class="col-sm-12">
                       <div classs="col-sm-1"></div>
                       <div classs="col-sm-10">
                           <div class="col-sm-3">
                               <div class="machine">
                                   <img src="photos/99005862-machine-learning-round-flat-concept-illustration.jpg" style="width:240px; height:23vh">
                                   <a id="joinS"href="http://localhost/talk/clubs/comments3/" style=" margin-left:16px; width:100px; border:white;color:white; padding:5px 5px; margin-top: 10px;background:#29AB87; border-radius: 5px; font-family: 'Poppins',sans-serif;">JOIN CLUBS</a>
                                   <button id="knowM" type="button" style=" margin-left:9px; width:100px; border:white;color:white; padding:5px 5px; margin-top: 10px;background:#4e73df; border-radius: 5px; font-family: 'Poppins',sans-serif;">VIEW MORE</button>
                                </div>
                           </div>
                           <div class="col-sm-3">
                            <div class="datastructure">
                                <img src="photos/dsa.jpg" style="width:240px; height:23vh">
                                <a id="joinS"href="http://localhost/talk/clubs/comments/" style=" margin-left:16px; width:100px; border:white;color:white; padding:5px 5px; margin-top: 10px;background:#29AB87; border-radius: 5px; font-family: 'Poppins',sans-serif;">JOIN CLUBS</a>
                                <button id="knowD" type="button" style=" margin-left:9px; width:100px; border:white;color:white; padding:5px 5px; margin-top: 10px;background:#4e73df; border-radius: 5px; font-family: 'Poppins',sans-serif;">VIEW MORE</button>
                             </div>
                           </div>
                           <div class="col-sm-3">
                            <div class="web">
                                <img src="photos/web.jpg" style="width:240px; height:23vh">
                                <a id="joinS"href="http://localhost/talk/clubs/comments1/" style=" margin-left:16px; width:100px; border:white;color:white; padding:5px 5px; margin-top: 10px;background:#29AB87; border-radius: 5px; font-family: 'Poppins',sans-serif;">JOIN CLUBS</a>
                                <button id="knowW" type="button" style=" margin-left:9px; width:100px; border:white;color:white; padding:5px 5px; margin-top: 10px;background:#4e73df; border-radius: 5px; font-family: 'Poppins',sans-serif;">VIEW MORE</button>
                             </div>
                           </div>
                           <div class="col-sm-3">
                            <div class="sports">
                                <img src="photos/multisportBanner.jpg" style="width:240px; height:23vh">
                                <a id="joinS"href="http://localhost/talk/clubs/comments2/" style=" margin-left:16px; width:100px; border:white;color:white; padding:5px 5px; margin-top: 10px;background:#29AB87; border-radius: 5px; font-family: 'Poppins',sans-serif;">JOIN CLUBS</a>
                                <button id="knowS" type="button" style=" margin-left:9px; width:100px; border:white;color:white; padding:5px 5px; margin-top: 10px;background:#4e73df; border-radius: 5px; font-family: 'Poppins',sans-serif;">VIEW MORE</button>
                             </div>
                           </div>
                       </div>
                       <div classs="col-sm-1"></div>
                   </div>
               </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    var slideIndex = 0;
    showSlides();
    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("slides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2500);
    }

    var textWrapper = document.querySelector('.ml11 .letters');
      textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");
      
      anime.timeline({loop: true})
        .add({
          targets: '.ml11 .line',
          scaleY: [0,1],
          opacity: [0.5,1],
          easing: "easeOutExpo",
          duration: 700
        })
        .add({
          targets: '.ml11 .line',
          translateX: [0, document.querySelector('.ml11 .letters').getBoundingClientRect().width + 10],
          easing: "easeOutExpo",
          duration: 700,
          delay: 100
        }).add({
          targets: '.ml11 .letter',
          opacity: [0,1],
          easing: "easeOutExpo",
          duration: 600,
          offset: '-=775',
          delay: (el, i) => 34 * (i+1)
        }).add({
          targets: '.ml11',
          opacity: 0,
          duration: 1000,
          easing: "easeOutExpo",
          delay: 1000
        });
   $(document).ready(function(){
   $("#hide").click(function(){
   $("#boxes").hide(1000);
  });
});
$(document).ready(function(){
   $("#show").click(function(){
   $("#boxes").show(1000);
  });
});
</script>
</html>