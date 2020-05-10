<?php

$email ="g161210102@ogr.sakarya.edu.tr";
$pass = "123";



if($_POST['inputEmail'] == $email && $_POST['inputPassword'] == $pass){
  echo 'Hoşgeldin '.$email.'!';
}else{
  echo "<script>location.href='LoginPage.php'</script>";
}

 ?>
