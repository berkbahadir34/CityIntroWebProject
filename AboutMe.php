<link rel="stylesheet" type="text/css" href=".\Css\bootstrap.min.css">
<link rel="stylesheet" type="text/css" href=".\Css\NavBarCss.css">
<link rel="stylesheet" type="text/css" href=".\Css\AboutMeCss.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src=".\Js\bootstrap.bundle.min.js"></script>
<script type="text/javascript" src=".\Js\jquery.slim.js"></script>
<script type="text/javascript" src=".\Js\CustomJs.js"></script>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="topnav" id="myTopnav">
  <a href=".\AboutMe.php" class="active">Hakkımda</a>
  <a href=".\MyCity.php">Benim Şehrim</a>
  <a href=".\cv.php">Özgeçmiş</a>
  <a href=".\Contact.php">İletişim</a>
  <a href=".\LoginPage.php">Giriş</a>
  <a href="javascript:void(0);" class="icon" onclick="toggleBarAction()">
    <i class="fa fa-chevron-circle-down"></i>
  </a>
</div>
</head>
<body>

<div class="card">
  <img src=".\Images\Me.png" alt="John" style="width:100%">
  <h3 id="nameTag">Ahmet Berk Bahadır</h3>
  <p class="title">Mühendis Adayı</p>
  <p>Sakarya Üniversitesi</p>
  <div id="socialMediaTag" >
    <a href="https://twitter.com/ahmeberkbahadir"><i class="fa fa-twitter"></i></a>
    <a href="https://www.linkedin.com/in/berk-bahad%C4%B1r-62a731191/"><i class="fa fa-linkedin"></i></a>
    <a href="https://www.facebook.com/ahmetberkbahadir?ref=bookmarks"><i class="fa fa-facebook"></i></a>
	<a href="https://www.instagram.com/berkbahadir/?hl=tr"><i class="fa fa-instagram"></i></a>
  </div>

</div>

<div id="hakkimdaTag">
<p id="hakkimdaText">
 Merhaba ben Berk, 24.02.1998 de İstanbul/Üsküdar'da Doğdum. İlk, orta  ve lise eğitimimi Ümraniye'de tamamladım. 2016 Yılında Fen Bilimleri Temel Lisesinden mezun oldum ve aynı yıl Sakarya Üniversitesi Bilgisayar Mühendisliği Bölümü’nü kazandım. Öğrenim hayatıma Sakarya Üniversitesinde devam etmekteyim.
</p>
</div>
<h3 class="hobbyTitleTag">Hobilerim</h3>
<div class="row">
  <div class="col-md-4">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src=".\Images\futbol.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Futbol</h5>
        <p class="card-text">Futbol oynamak ve izlemek benim için bir  tutkudur. Tuttuğum takım Fenerbahçedir. Küçüklüğümden beri abimle bütün maçları izlerim. Fenerbahçe sevgiminde burdan geldiğini düşünüyorum.</p>
        <a href="https://www.youtube.com/watch?v=f960yEMG2uw" class="btn btn-primary">Akıllardan Silinmicek Bir Maç İçin Tıkla</a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src=".\Images\oyun.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Oyun Oynamak</h5>
        <p class="card-text">Oyun oynamak bir çok insan için olduğu gibi benim içinde bir tutkudur. Hatta bende ki tutkudan çok bağımlılığa dönüşmüştür.Oyunsuz bir hayat düşünemiyorum.</p>
        <a href="https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/" class="btn btn-primary">Sevdiğim Bir Oyun İçin Tıkla</a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src=".\Images\muzik.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Müzik Dinlemek</h5>
        <p class="card-text">Müzik, insanın coşkulu, sevinçli ve hüzünlü duygularını ifade eder. Genelde, uzakta olan sevgiliye kavuşma arzuları, sitemleri, coşkuları, sevinçleri, bazen de tabiat hakkında dağlara, yollara, bulutlara, çöllere sitem edişleri dile getirir.</p>
        <a href="https://www.youtube.com/watch?v=8THQRiVeUgU" class="btn btn-primary">Sevdiğim Bir Müzik İçin Tıkla</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>
