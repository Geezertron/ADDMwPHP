<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <title>Log in to your account</title>
    <style type="text/css" media="all">
        @import "CSS/login.css";
    </style>
	<script type="text/javascript" src="scripts/login.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php


    ?>


    <div id="container">
        <div id="bannerContainer">
            <div id="col1">
				<a href="index.php">
					<img src="pics/icon/logo256-icon.png" alt="the logo" height="128" >
				</a>
		  	</div>
            <div id="col2">

            </div>
            <div id="col3">
				<nav class="navbar">
    				<span class="open-slide">
     					<a href="#" onclick="openSlideMenu()">
       			 			<svg width="64" height="64">
            					<path d="M0,10 60,10" stroke="#fff" stroke-width="10"/>
            					<path d="M0,28 60,28" stroke="#fff" stroke-width="10"/>
            					<path d="M0,46 60,46" stroke="#fff" stroke-width="10"/>
        					</svg>
      					</a>
    				</span>

    				<ul class="navbar-nav">
      			<li><a  href="index.php">HOME</a></li>
						<li><a href="404.php">WHAT'S ON</a></li>
						<li><a href="gettingHere.php">GETTING HERE</a></li>
						<li><a href="404.php">ABOUT</a></li>
						<li><a href="404.php">SHOP</a></li>
            <li><a class="active" href="login.php">LOGIN</a></li>
    				</ul>
  				</nav>

				<div id="side-menu" class="side-nav">
    				<a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    				<a  href="index.php">HOME</a>
    				<a href="404.php">WHAT'S ON</a>
    				<a href="gettingHere.php">GETTING HERE</a>
    				<a href="404.php">ABOUT</a>
					<a href="404.php">SHOP</a>
          <a class="active" href="login.php">LOGIN</a>
  				</div>

            </div>
        </div>
        <!-- end of banner code -->



        <div id="formBackground">
          <div id="formActual">
            <form class="form" method="post" action="#">
              <h2>Have an account? Log in here.</h2>
              <label>Email :</label>
              <input type="text" name="demail" id="email">
              <label>Password :</label>
              <input type="password" name="password" id="password">
              <input type="button" name="login" id="login" value="Login">
              <input id="regAccount" type="button" onclick="location.href='registration.php';" value="Register an account" />
              </form>





          </div>


        </div>
		<!-- gallery container-->
		<!-- Container for the image gallery -->
        <div id="gallBreak">
		<div class="galleryContainer">

          <!-- Full-width images with number text -->
          <div class="mySlides">
            <div class="numbertext">1 / 6</div>
              <img src="pics/slides/blockyBuilding.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">2 / 6</div>
              <img src="pics/slides/cuBuilding.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">3 / 6</div>
              <img src="pics/slides/dundeeMap.jpg" alt="map o the dee" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">4 / 6</div>
              <img src="pics/slides/glassBuilding.jpg" alt="glassy shiny block" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">5 / 6</div>
              <img src="pics/slides/skyline.jpg" alt="capitalism and sunrise" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">6 / 6</div>
              <img src="pics/slides/stress.jpg" style="width:100%">
          </div>

          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>

          <!-- Image text -->
          <div class="caption-container">
            <p id="caption"></p>
          </div>

          <!-- Thumbnail images -->
          <div class="row">
            <div class="column">
              <img class="demo cursor" src="pics/slides/blockyThumb.jpg" style="width:100%" onclick="currentSlide(1)" alt="Blocky Building">
            </div>
            <div class="column">
              <img class="demo cursor" src="pics/slides/cuThumb.jpg" style="width:100%" onclick="currentSlide(2)" alt="uni building">
            </div>
            <div class="column">
              <img class="demo cursor" src="pics/slides/dundeeThumb.jpg" style="width:100%" onclick="currentSlide(3)" alt="Map o the Dee">
            </div>
            <div class="column">
              <img class="demo cursor" src="pics/slides/glassThumb.jpg" style="width:100%" onclick="currentSlide(4)" alt="Mass o Glass">
            </div>
            <div class="column">
              <img class="demo cursor" src="pics/slides/skylineThumb.jpg" style="width:100%" onclick="currentSlide(5)" alt="Capitalism and sunrise">
            </div>
            <div class="column">
              <img class="demo cursor" src="pics/slides/stressThumb.jpg" style="width:100%" onclick="currentSlide(6)" alt="Me_irl">
            </div>
          </div>
        </div>
		</div>




        <div id="footer">
            <p>The ADDM artisticly designed footer</p>
        </div>
    </div>

</body>
</html>
