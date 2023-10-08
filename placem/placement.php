<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Placement</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="placement.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
      integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="col-sm-12 padd-off">
      <div class="col-sm-2 padd-off">
        <div class="side_menu">
          <div class="logo">
            <img src="logo2.jpeg" style="width: 100%; height: 110px" />
            <p style="margin-top: 20px">TalKcoast</p>
          </div>
          <div class="menu">
            <div class="contain-menu">
              <ul>
                <li>
                  <a href="http://localhost/talk/dashboard.php">
                    <span class="icon"><i class="fa fa-tachometer"></i></span>
                    <span class="title">Dashboard</span>
                  </a>
                </li>
                <li>
                  <a href="http://localhost/talk/profile1.php">
                    <span class="icon"><i class="fa fa-user-circle"></i></span>
                    <span class="title">Profile</span>
                  </a>
                </li>
                <li>
                  <a href="http://localhost/talk/blog/index2.php">
                    <span class="icon"><i class="fa fa-pencil"></i></span>
                    <span class="title">Post A Blog</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="icon"
                      ><i class="fa fa-graduation-cap"></i
                    ></span>
                    <span class="title">Placement</span>
                  </a>
                </li>
                <li>
                  <a href="http://localhost/talk/clubs/clubs.php">
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
            <nav class="navbar" style="margin: 0px 0px 0px !important">
              <div class="col-sm-4">
                <div class="col-sm-1"></div>
                <div class="col-sm-11">
                  <div class="Dashboard">
                    <span class="icon"><i class="fa fa-bars"></i></span>
                    <span class="dash">Placement</span>
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
          <div class="nav-section">
            <h1>Highest Package <sub>2020 - 2021</sub> </h1> 
            <table class="placement" style="color: white">
              <tr class="courses">
                <th>Engineering &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>MBA</th>
                <th>Hotel Management</th>
              </tr>
              <tr class="package">
                <td>
                  <sup>&#8377;</sup><strong class="figure">36</strong
                  ><sub>LPA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</sub>
                </td>
                <td>
                  <sup>&#8377;</sup><strong class="figure">28</strong
                  ><sub>LPA</sub>
                </td>
                <td>
                  <sup>&#8377;</sup><strong class="figure">12</strong
                  ><sub
                    >LPA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</sub
                  >
                </td>
              </tr>
            </table>
            
            </div>
            <div class="slider">
              <span id = "slider-img-1"></span>
              <span id = "slider-img-2"></span>
              <span id = "slider-img-3"></span>
              <div class="img-container">
                <img src="student-img-3.png" alt="image2" class = "slide-img">
                <img src="student-img-4.png" alt="image3" class = "slide-img">
                <img src="student-img-2.png" alt="image1" class = "slide-img" >
                <a class = "know-more" href="https://www.cuchd.in/placements/placement-tracker.php" target="_blank">know more</a>
              </div>
              <div class="button-container">
                <a href="#slider-img-1" class = "slider-button"></a>
                <a href="#slider-img-2" class = "slider-button"></a>
                <a href="#slider-img-3" class = "slider-button"></a>
              </div>
            </div>
          </div>
        </div>
  </body>
</html>
