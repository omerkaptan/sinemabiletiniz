<?php ob_start();
@session_start();
function yonlendir($a){
header("refresh: 0;url=$a");
}
?><!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>ADMİN GİRİŞ</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    
    <form action="index.php" method="post">
    
    
    
</head>
<body>







	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo"><a href="admin.php"><img src="images/loggo.jpg" alt="LOGO" height="184" width="860"></a></div>
				<div id="navigation"> </div>
				
			</div>
			<div id="contents">
            
            
            
            <br><div align="center"<h3>Admin Panel Girişi</h3>
<br>
<br>
<table><tr><td>
Kullanıcı Adı</td><td><input type="text" name="ad">
</tr><tr><td>Şifre</td><td><input type="password" name="sifre"></td></tr>
<tr><td><input type="submit" name="btn" value="Giriş"></td><td><a href="../index.php">Anasayfaya Dön</a></td></tr>
</table>
<br>
</div>
<br><br><br>
<?php
if(isset($_POST['btn'])){
if($_POST['btn']=='Giriş'){
if($_POST['ad']=='admin' && $_POST['sifre']=='admin'){   //admin kullanıcı adı ve şifresi
$_SESSION['ad']='ad';
header("Location: admin.php");
}
}
}
?></form>
            
		  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			</div>
		</div>
	</div>
</body>
</html>