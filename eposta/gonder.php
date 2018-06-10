<?php ob_start(); ?>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />

<meta http-equiv="Content-Type" content="text/html; charset=windows-1254" />

<title>Giriş Formu</title>

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
$mail->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
$mail->SMTPAuth = true; //SMTP doğrulama olmalı ve bu değer değişmemeli
$mail->SMTPSecure = 'ssl'; // Normal bağlantı için tls , güvenli bağlantı için ssl yazın
$mail->Host = "mail.sinemabiletiniz.com"; // Mail sunucusunun adresi (IP de olabilir)
$mail->Port = 465; // Normal bağlantı için 587, güvenli bağlantı için 465 yazın
$mail->IsHTML(true);
$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";
$mail->Username = "deneme@sinemabiletiniz.com"; // Gönderici adresinizin sunucudaki kullanıcı adı (e-posta adresiniz)
$mail->Password = "7154940"; // Mail adresimizin sifresi
$mail->SetFrom("".$email."", "".$name.""); // Mail atıldığında gorulecek isim ve email (genelde yukarıdaki username kullanılır)
$mail->AddAddress("bilgi@sinemabiletiniz.com"); // Mailin gönderileceği alıcı adres
$mail->Subject = "Destek Bildirim Formu"; // Email konu başlığı
$mail->Body = "".$message.""; // Mailin içeriği
if(!$mail->Send()){
	echo " Email Gönderim Hatasi: ".$mail->ErrorInfo;
} else {
	echo " Email Gonderildi";
}

?>

		

	</section>

</div>

</body>

</html>