<?php
include_once"header.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	.images{
		margin-top: 8px;
		margin-bottom: 6px;
	}
  .text{
  text-align: center;
  font-weight: bold;
  font-size: 19px;
  color:cornflowerblue
  }

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
<body>
<script type="text/javascript">
        document.write("<center><font size=+1 style='color:blue;'>");
        var day = new Date();
        var hr = day.getHours();
        if (hr >= 0 && hr < 12) {
            document.write("welcome...Good morning!");
        } else if (hr == 12) {
            document.write("Good Noon!");
        } else if (hr >= 12 && hr <= 17) {
            document.write("Good Afternoon!");
        } else {
            document.write("Good Evening!");
        }
        document.write("</font></center>");
    </script>
<div class="images">
  <div class="mySlides fade">
<img src="images/lib (5).jpeg" Align="right" style="width: 100%; height: 400px; border-radius: 8px;" >
<div class="text">“Formal education will make you a living; self-education will make you a fortune.“
Jim Rohn</div></div>
<div class="mySlides fade">
  <img src="images/imagess.jpeg" Align="right" style="width: 100%; height: 400px; border-radius: 8px;" >
  <div class=text>“Education is the most powerful weapon which you can use to change the world.”
Nelson Mandela</div>
</div>
<div class="mySlides fade">
  <img src="images/imagesss.jpeg" Align="right" style="width: 100%; height: 400px; border-radius: 8px;" >
  <div class=text>“Education is for improving the lives of others and for leaving your community and world better than you found it.“
Marian Wright Edelman </div>
</div>
<div class="mySlides fade">
  <img src="images/imagessss.jpeg" Align="right" style="width: 100%; height: 400px; border-radius: 8px;" >
  <div class=text> “I believe that education is all about being excited about something. Seeing passion and enthusiasm helps push an educational message.“
Steve Irwin </div>
</div>
<div class="mySlides fade">
  <img src="images/lib (4).jpeg" Align="right" style="width: 100%; height: 400px; border-radius: 8px;" >
  <div class=text> “Real education should consist of drawing the goodness and the best out of our own students. What better books can there be than the book of humanity.“
Cesar Chavez</div>
</div>
<div class="mySlides fade">
  <img src="images/lib (2).jpeg" Align="right" style="width: 100%; height: 400px; border-radius: 8px;" >
  <div class=text> “Education is what remains after one has forgotten what one has learned in school.“
Albert Einstein </div>
</div>
<div class="mySlides fade">
  <img src="images/lib (3).jpeg" Align="right" style="width: 100%; height: 400px; border-radius: 8px;" >
  <div class=text> “Education’s purpose is to replace an empty mind with an open one.“
Malcolm Forbes</div></div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
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
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 4 seconds
}
</script></div>
  </div>
<?php
include_once"column.php"
?>
<button onclick="topFunction()" id="myBtn" title="Go to top">Back to top</button>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>

<div style="margin-top: 0px;">
<?php
include_once"footer.php"
?>
</div>
</html>

