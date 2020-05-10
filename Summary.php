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
  <a href=".\AboutMe.php">Hakkımda</a>
  <a href=".\MyCity.php">Benim Şehrim</a>
  <a href=".\cv.php">Özgeçmiş</a>
  <a href=".\Contact.php">İletişim</a>
  <a href=".\LoginPage.php">Giriş</a>
  <a href="javascript:void(0);" class="icon" onclick="toggleBarAction()">
    <i class="fa fa-chevron-circle-down"></i>
  </a>
</div>
</head>
<body onload="fillArea()">
<div id="hakkimdaTag" style="border:none !important; background-color:white !important">
  <p id="myText"></p>
</div>
<div id="hakkimdaTag">

<p id="hakkimdaText">

</p>
</div>

<script>
function fillArea()
{
  var ad = getCookie("ad");
  var soyad = getCookie("soyad");
  var email = getCookie("email");
  var telefon = getCookie("telefon");
var text = "Sevgili " + ad + " " + soyad + ", aşağıdaki mesajın bize iletildi. Gerekli durumlarda," + email + " email adresine veya " + telefon + " nolu telefonundan iletişime geçeceğiz.";

document.getElementById("myText").innerHTML = text;
document.getElementById("hakkimdaText").innerHTML = getCookie("konu");


}


function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
</script>


</body>
</html>
