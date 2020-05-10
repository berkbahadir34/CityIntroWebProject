<link rel="stylesheet" type="text/css" href=".\Css\bootstrap.min.css">
<link rel="stylesheet" type="text/css" href=".\Css\LoginCss.css">
<link rel="stylesheet" type="text/css" href=".\Css\NavBarCss.css">
<script type="text/javascript" src=".\Js\bootstrap.bundle.min.js"></script>
<script type="text/javascript" src=".\Js\jquery.slim.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src=".\Js\CustomJs.js"></script>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="topnav" id="myTopnav">
  <a href=".\AboutMe.php" >Hakkımda</a>
  <a href=".\MyCity.php">Benim Şehrim</a>
  <a href=".\cv.php">Özgeçmiş</a>
  <a href=".\Contact.php">İletişim</a>
  <a href=".\LoginPage.php" class="active">Giriş</a>
  <a href="javascript:void(0);" class="icon" onclick="toggleBarAction()">
    <i class="fa fa-chevron-circle-down"></i>
  </a>
</div>
</head>
<body>



<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Hoşgeldiniz!</h3>
              <form action="welcome.php" method="post">
                <div class="form-label-group">
                  <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputEmail">Email Adresi</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Parola</label>
                </div>


                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign in</button>
                <div class="text-center">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
