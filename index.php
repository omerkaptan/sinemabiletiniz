<!DOCTYPE HTML>

<html>
	<head>
		<title>SİNEMA BİLETİNİZ</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<?php
		include("baglan.php");
		?>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html"><strong>SİNEMABİLETİNİZ.COM</strong> </a></h1>
						<nav>
							<ul>
								<li><a href="/index.php" class="icon fa-info-circle active">VİZYONDAKİ FİLMLER</a></li>
								<li><a href="biletal.php" class="icon fa-info-circle">BİLET AL</a></li>
								<li><a href="#footer" class="icon fa-info-circle">HAKKIMIZDA</a></li>
							</ul>
						</nav>
						
					</header>

				<!-- Main --> 
				<div id="main">
				<?php
				$sorgu=mysql_query("select * from filmler where vizyon=1");



while($cek=mysql_fetch_array($sorgu)){ 
	
	$resim_url= substr($cek["film_resim"],3);
						echo '
						
						<article class="thumb">
							<a href="'.$resim_url.'" class="image"><img src="'.$resim_url.'" alt="" /></a>
							<h2> '.$cek["film_adi"].' </h2>
							<p>'.$cek["film_ozeti"].'</p>
							<h3><a href="ayrintilar.php?film_id='.$cek["film_id"].'">Ayrıntılar</a></h3>
						</article> ';			

						
     }
	 
						
						
						?>
						
						
					
					
					
					
					</div>

				<!-- Footer -->
					<footer id="footer" class="panel">
						<div class="inner split">
							<div>
								<section>
									<h2>Duyuru</h2>
									<p>Şirketimizin başta sitede yer alan iletişim formu, e-posta adresleri ve faks numaraları olmak üzere, şirket yetkilileri ve çalışanlarına mail yolu ile gönderilen hikaye, tretman, senaryo gibi Fikir ve Sanat Eserleri Kanunu (“FSEK”)bakımından eser olarak kabul edilen ve hak doğuran hiçbir çalışmaya ilişkin talebi bulunmamaktadır. Bu şekilde gönderilen çalışmalar şirketimiz tarafından hiçbir şekilde kabul edilmemekte ve değerlendirilmemektedir. Bununla birlikte işbu uyarımıza rağmen ilgili adreslere ve faks numaralarına gönderilen bu eserlerin içeriği ile ilgili bu kişilerin FSEK'ten doğan her türlü dava, talep ve şikayet haklarından peşinen feragat ettikleri kabul edilecektir.</p>
								</section>
								<section>
									<h2>Bizi takip edin ...</h2>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
										<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
										<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
									</ul>
								</section>
								<p class="copyright">
									&copy; Unttled. Design: <a href="http://www.twitter.com/merokaptan">Ömer Kaptan</a>.
								</p>
							</div>
							<div>
								<section>
									<h2>Bize Ulaşın</h2>
									<form method="post" action="index.php">
										<div class="field half first">
											<input type="text" name="name" id="name" placeholder="İsim" />
										</div>
										<div class="field half">
											<input type="text" name="email" id="email" placeholder="Email" />
										</div>
										<div class="field">
											<textarea name="message" id="message" rows="4" placeholder="Message"></textarea>
										</div>
										<ul class="actions">
											<li><input type="submit" value="Gonder" class="special" /></li>
											<li><input type="reset" value="Temizle" /></li>
										</ul>
										<?php
										require("class.phpmailer.php");
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
$mail->SetFrom("".$_POST['email']."", "".$_POST['name'].""); // Mail atıldığında gorulecek isim ve email (genelde yukarıdaki username kullanılır)
$mail->AddAddress("bilgi@sinemabiletiniz.com"); // Mailin gönderileceği alıcı adres
$mail->Subject = "Destek Bildirim Formu"; // Email konu başlığı
$mail->Body = "".$_POST['message'].""; // Mailin içeriği
if(!$mail->Send()){
	echo "";
} else {
	echo " Email Gonderildi";
}
										?>
										
									</form>
								</section>
							</div>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>