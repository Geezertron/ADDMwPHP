<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta charset="utf-8">
    <title>Getting Here</title>
    <style type="text/css" media="all">
        @import "CSS/gettingHere.css";
    </style>
	<script type="text/javascript" src="scripts/gettingHere.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	</script>

</head>


<body>
    <?php

    ?>
    <div id="container">
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
						<li><a class="active" href="gettingHere.php">GETTING HERE</a></li>
						<li><a href="404.php">ABOUT</a></li>
						<li><a href="404.php">SHOP</a></li>
            <li><a href="login.php">LOGIN</a></li>
    				</ul>
  				</nav>

				<div id="side-menu" class="side-nav">
    				<a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    				<a  href="index.php">HOME</a>
    				<a href="404.php">WHAT'S ON</a>
    				<a class="active" href="gettingHere.php">GETTING HERE</a>
    				<a href="404.php">ABOUT</a>
					<a href="404.php">SHOP</a>
          <a href="login.php">LOGIN</a>
  				</div>

            </div>
        </div>
		<!--end of banner content-->
		<!--start of main content-->
        <div id="contentContainer">
            <div id="directButts">
                    <div class="LButton">
						<button type="button" onClick="showTopText()">Bus Station</button>
					</div>
					<div class="LButton">
						<button type="button2" onClick="showMidText()">Rail Station</button>
					</div>
					<div class="LButton">
						<button type="button3" onClick="showLowText()">Airport</button>
					</div>
					<div id="locationForm">
						<form id="formLocation" name="formLocation"><input type="text" name="fLoc" placeholder="Enter your location!"></form>
						<input type="submit" value="Submit" onClick="validateForm()">
					</div>
			</div>
            <div id="directText">
				<div id="topText">
					<h4>Directions from location: Bus Station</h4>
                	<p>Top Button Directions: these directions will appear when the top button is pressed. all other directions will disappear.</p>
					<p>In future iterations, the site will gather and display directions from the Bus station here</p>
				</div>
				<div id="midText">
					<h4>Directions from location: Rail Station</h4>
					<p>Mid Button Directions: these directions will appear when the middle button is pressed. all other directions will disappear.</p>
					<p>In future iterations, the site will gather and display directions from the Rail station here</p>
				</div>
				<div id="lowText">
					<h4>Directions from location: Airport</h4>
					<p>Low Button Directions: these directions will appear when the low button is pressed. all other directions will disappear.</p>
					<p>In future iterations, the site will gather and display directions from the Airport here</p>
				</div>
				<div id="customText">
					<h4>Directions from entered location</h4>
					<p>Custom Directions: in future iterations, instructions will appear that direct the user from the location they have inputed in the form. all other directions will disappear.</p>
				</div>
			</div>
		</div>
		<div id="mapContainer"></div>
			<script>
				// Initialize and add the map
				function initMap() {
				  // The location of Uluru
				  var VADundee = {lat: 56.457339, lng: -2.967251};
				  // The map, centered at Uluru
				  var map = new google.maps.Map(
					  document.getElementById('mapContainer'), {zoom: 13, center: VADundee});
				  // The marker, positioned at Uluru
				  var marker = new google.maps.Marker({position: VADundee, map: map});
}
    		</script>
			<script async defer
    				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnAUKOENHTlj_V42M3r3vHk1Sh4z-zWt8&callback=initMap">
    		</script>

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
