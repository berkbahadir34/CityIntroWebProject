
<html>
<head>

  <link rel="stylesheet" type="text/css" href=".\Css\bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href=".\Css\NavBarCss.css">
  <link rel="stylesheet" type="text/css" href=".\Css\MyCityCss.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src=".\Js\bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src=".\Js\jquery.slim.js"></script>
  <script type="text/javascript" src=".\Js\CustomJs.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="topnav" id="myTopnav">
  <a href=".\AboutMe.php" >Hakkımda</a>
  <a href=".\MyCity.php" class="active">Benim Şehrim</a>
  <a href=".\cv.php">Özgeçmiş</a>
  <a href=".\Contact.php">İletişim</a>
  <a href=".\LoginPage.php">Giriş</a>
  <a href="javascript:void(0);" class="icon" onclick="toggleBarAction()">
    <i class="fa fa-chevron-circle-down"></i>
  </a>
</div>
</head>
<body>

  <div class="container">
  <h3 class="hobbyTitleTag">İstanbulun Güzellikleri... Fotoğraflara tıklayın ve fotoğraftaki tarihi yerler ile ilgili bilgiler edinin.</h3>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>


      <div class="carousel-inner">
        <div class="item active">
          <a href="http://www.kizkulesi.com.tr/Sayfa/kiz-kulesi/tarihce">
            <img src=".\Images\kizkulesi.png" alt="Kız Kulesi" style="width:100%;">
          </a>
        </div>

        <div class="item">
          <a href="https://www.miniaturk.com.tr/tr/15-temmuz-sehitler-koprusu-eser-872">
            <img src=".\Images\kopru.jpg"  alt="15 Temmuz Şehitler Köprüsü" style="width:100%;">
          </a>
        </div>
        <div class="item">
          <a href="https://gezipgordum.com/galata-kulesi/">
            <img src=".\Images\galata.jpg"  alt="Galata Kulesi" style="width:100%;">
          </a>
        </div>
        <div class="item">
          <a href="https://www.garenta.com.tr/blog/bir-istanbul-guzellemesi-sultan-ahmet-camii/">
            <img src=".\Images\camii.jpg"  alt="Sultan Ahmet Camii" style="width:100%;">
          </a>
        </div>
      </div>


      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</body>
</html>
