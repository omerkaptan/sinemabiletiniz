<?php ob_start(); ?>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />

<meta http-equiv="Content-Type" content="text/html; charset=windows-1254" />

<title>Giri� Formu</title>

<link rel="stylesheet" type="text/css" href="style.css" />

</head>

<body>

<div class="container">

	<section id="content">

		<?php 

$name=$_POST['ad'];   

$email=$_POST['email'];

$message=$_POST['msg'];



require("../class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1; // Hata ay�klama de�i�keni: 1 = hata ve mesaj g�sterir, 2 = sadece mesaj g�sterir
$mail->SMTPAuth = true; //SMTP do�rulama olmal� ve bu de�er de�i�memeli
$mail->SMTPSecure = 'ssl'; // Normal ba�lant� i�in tls , g�venli ba�lant� i�in ssl yaz�n
$mail->Host = "mail.sinemabiletiniz.com"; // Mail sunucusunun adresi (IP de olabilir)
$mail->Port = 465; // Normal ba�lant� i�in 587, g�venli ba�lant� i�in 465 yaz�n
$mail->IsHTML(true);
$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";
$mail->Username = "deneme@sinemabiletiniz.com"; // G�nderici adresinizin sunucudaki kullan�c� ad� (e-posta adresiniz)
$mail->Password = "7154940"; // Mail adresimizin sifresi
$mail->SetFrom("".$email."", "".$name.""); // Mail at�ld���nda gorulecek isim ve email (genelde yukar�daki username kullan�l�r)
$mail->AddAddress("bilgi@sinemabiletiniz.com"); // Mailin g�nderilece�i al�c� adres
$mail->Subject = "Destek Bildirim Formu"; // Email konu ba�l���
$mail->Body = "".$message.""; // Mailin i�eri�i
if(!$mail->Send()){
	echo " Email G�nderim Hatasi: ".$mail->ErrorInfo;
} else {
	echo " Email Gonderildi";
}

?>

		

	</section>

</div>

</body>

</html>