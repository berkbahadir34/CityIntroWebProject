<link rel="stylesheet" type="text/css" href=".\Css\bootstrap.min.css">
<link rel="stylesheet" type="text/css" href=".\Css\NavBarCss.css">
<link rel="stylesheet" type="text/css" href=".\Css\MyCityCss.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src=".\Js\bootstrap.bundle.min.js"></script>
<script type="text/javascript" src=".\Js\jquery.slim.js"></script>
<script type="text/javascript" src=".\Js\CustomJs.js"></script>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="topnav" id="myTopnav">
  <a href=".\AboutMe.php" >Hakkımda</a>
  <a href=".\MyCity.php" class="active">Benim Şehrim</a>
  <a href=".\Contact.php">İletişim</a>
  <a href=".\LoginPage.php">Giriş</a>
  <a href="javascript:void(0);" class="icon" onclick="toggleBarAction()">
    <i class="fa fa-chevron-circle-down"></i>
  </a>
</div>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <a href="http://www.google.com" target="_blank">
  <img src=https://www.akademikpersonel.org/anasayfa/wp-content/uploads/2019/10/sau-kampus.jpg" style="width:100%" style="width:100%">
  </a>
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
 <a href="http://www.google.com" target="_blank">
  <img src=https://www.akademikpersonel.org/anasayfa/wp-content/uploads/2019/10/sau-kampus.jpg" style="width:100%" style="width:100%">
  </a>
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
   <a href="http://www.google.com" target="_blank">
  <img src=https://www.akademikpersonel.org/anasayfa/wp-content/uploads/2019/10/sau-kampus.jpg" style="width:100%" style="width:100%">
  </a>
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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
}
</script>


</body>
</html>