<link rel="stylesheet" type="text/css" href=".\Css\bootstrap.min.css">
<link rel="stylesheet" type="text/css" href=".\Css\NavBarCss.css">
<link rel="stylesheet" type="text/css" href=".\Css\ContactCss.css">
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
  <a href=".\MyCity.php">Benim Şehrim</a>
  <a href=".\cv.php">Özgeçmiş</a>
  <a href=".\Contact.php" class="active">İletişim</a>
  <a href=".\LoginPage.php">Giriş</a>
  <a href="javascript:void(0);" class="icon" onclick="toggleBarAction()">
    <i class="fa fa-chevron-circle-down"></i>
  </a>
</div>
</head>
<body>

<h3>İletişim</h3>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">Ad</label>
    <input type="text" id="ad" name="firstname" placeholder="Adınız..">

    <label for="lname">Soyad</label>
    <input type="text" id="soyad" name="lastname" placeholder="Soyadınız..">

 <label for="lname">Email Adresi</label>
    <input type="text" id="email" name="lastname" placeholder="Email Adresiniz..">

	 <label for="lname">Telefon(5xxxxxxxxx)</label>
    <input type="text" id="telefon" name="lastname" placeholder="Telefonunuz..">

    <label for="subject">Mesajınız</label>
    <textarea id="konu" name="subject" placeholder="Write something.." style="height:200px"></textarea>

<button type="button" class="btn btn-success" onclick="myFunction()">Gönder</button>
<button type="button" class="btn btn-warning" onclick="emptyField()">Temizle</button>
  </form>
</div>

<script>

function emptyField() {
document.getElementById("ad").value = "";
document.getElementById("soyad").value = "";
document.getElementById("email").value = "";
document.getElementById("telefon").value = "";
document.getElementById("konu").value = "";
}


function myFunction() {

var result = true;
	var ad = document.getElementById("ad").value;

	setCookie("ad",ad,1);

	var soyad = document.getElementById("soyad").value;
	setCookie("soyad",soyad,1);

	var email = document.getElementById("email").value;
  result = ValidateEmail();
	setCookie("email",email,1);

	var telefon = document.getElementById("telefon").value;
	setCookie("telefon",telefon,1);
  result = ValidatePhone();

	var konu = document.getElementById("konu").value;
	setCookie("konu",konu,1);
  if(ad == "" || soyad == "" || email == "" || telefon == "")
  result = false;
if(result != false)
  location.href='Summary.php';
  else {
    alert("Alanlar Boş Olamaz!!");
  }
}


function ValidatePhone()
{
var telefon = document.getElementById("telefon").value;
var telefonValidator = /^\d{10}$/;

if (!telefon.match(telefonValidator))
{
	alert("Geçersiz Telefon NO");
	return false;
}
}

function ValidateEmail()
{
var email = document.getElementById("email").value;
var emailValidator = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

if (!email.match(emailValidator))
{
	alert("Geçersiz Email Adresi");
	return false;
}
}

function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
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
