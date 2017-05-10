
<?php ?>
<!DOCTYPE html>
<html>
<head>
<script src="https://www.w3schools.com/lib/w3data.js"></script>

<body>

<div w3-include-html="head_menu.php"></div> 
<div w3-include-html="footer.php"></div> 

<script>
w3IncludeHTML();
</script>

<style>

#homepage {float: left;border-style: solid;width: 100%;position: relative; }

.slideshow{border-style: solid;height:45%;width:90%;position: fixed; left:5%; top :12%;}

.pic1 {border-style: solid;height:25%;width:28.5%;position: fixed; left:5%; top :60%;}

.pic2 {border-style: solid;height:25%;width:28.5%;position: fixed; left:35.75%; top :60%;}

.pic3 {border-style: solid;height:25%;width:28.5%;position: fixed; left:66.5%; top :60%;}



</style>
</head>
<body>

<div id="homepage">
<div class="slideshow">

<div class="mySlides fade">
   <img src="air.jpg" style="width:50%;height: 50%">
</div>

<div class="mySlides fade">
  <img src="air.jpg" style="width:28.5%;height: 45%">
</div>

<div class="mySlides fade">
  <img src="http://wallpapercave.com/wp/7Unu9SU.jpg" style="width:28.5%;height: 45%">
</div>

</div>

	<div class="pic1">
		  <img src="http://wallpapercave.com/wp/7Unu9SU.jpg" style="width:100%;height: 100%;object-fit: contain">
	</div>

	<div class="pic2">
		<img src="http://wallpapercave.com/wp/7Unu9SU.jpg" style="width:100%;height: 100%;object-fit: contain">
	</div>

	<div class="pic3">
		<img src="http://wallpapercave.com/wp/7Unu9SU.jpg" style="width:100%;height: 100%;object-fit: contain">
	</div>

</div>

<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); 
}
</script>




</style>
</body>
</head>
</html>