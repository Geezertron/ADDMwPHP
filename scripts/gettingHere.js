function openSlideMenu(){
      document.getElementById('side-menu').style.display = 'block';
	document.getElementById('side-menu').style.width = '40%';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.display = "none";
    }

function validateForm() {
	var x=document.forms["formLocation"]["fLoc"].value;
	if (x=="") {
		alert ("Please enter your location to recieve directions");
		return false;
	}
	else if (x !== ""){
	document.getElementById("customText").style.display = "block";
	document.getElementById("lowText").style.display = "none";
	document.getElementById("topText").style.display = "none";
	document.getElementById("midText").style.display = "none";
	}
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

function showTopText(){
		document.getElementById("topText").style.display = "block";			document.getElementById("midText").style.display = "none";
		document.getElementById("lowText").style.display = "none";
		document.getElementById("customText").style.display = "none";
	}
	
function showMidText(){
	document.getElementById("midText").style.display = "block";
	document.getElementById("topText").style.display = "none";
	document.getElementById("lowText").style.display = "none";
	document.getElementById("customText").style.display = "none";
}
		
function showLowText(){
	document.getElementById("lowText").style.display = "block";
	document.getElementById("topText").style.display = "none";
	document.getElementById("midText").style.display = "none";
	document.getElementById("customText").style.display = "none";
}
		
function showcustomText(){
	document.getElementById("customText").style.display = "block";
	document.getElementById("lowText").style.display = "none";
	document.getElementById("topText").style.display = "none";
	document.getElementById("midText").style.display = "none";
}


