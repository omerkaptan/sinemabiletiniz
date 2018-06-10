<?php include("baglan.php");

		?>

<!DOCTYPE html>

<!-- Website template by freewebsitetemplates.com -->

<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>ANASAYFA</title>

	<link rel="stylesheet" href="css/style.css" type="text/css">

</head>

<body>

<div id="header">

		<div>

			<a href="index.php" id="logo"><img src="images/logo.png" alt="" width="589"></a>

			<ul>

				<li>

					<a href="index.php">anasayfa</a>

				</li>

				<li><a href="../biletiptali.php">bilet iptali</a></li>

				<li>

					<a href="biletal.php">BILET AL</a>

				</li>

				<li><a href="eposta/index.php">ILETISIM</a></li>

			</ul>

		</div>

	</div>

<div id="body" class="movies">

  <h2 align="center">VİZYONDAKİLER</h2>

	

	

    

  

  

<table border=0 width=300>

<tr>

<?php



include("baglan.php");





$sorgu=mysql_query("select * from filmler where vizyon=1");



while($cek=mysql_fetch_array($sorgu)){

  @$i++; //sayaç

  $resim_url= substr($cek['film_resim'],3);

  $film_id= $cek['film_id'];

  echo "<td > <img width=240 height=300 src=\"".$resim_url."\" </td>";

  echo "<center><a href='ayrintilar.php?film_id=$film_id'><img width=130 height=35 src='images/ay.png'</a></center>";

   if($i==4) { // Eğer 4 tane resim ekrana basıldıysa bunları yap

     $i=0; // sayacı sıfırla 

     echo  " <tr> </tr>"; // tabloda bir alt satıra geç 

     }

} 

$sorgu=mysql_query("select * from filmler where vizyon=1");



while($cek=mysql_fetch_array($sorgu)){

  $i++; //sayaç

  echo "<td width=1000 align=center><br><h4><font color='blue'> Film Adı</font></h4>".$cek['film_adi']."</td>";



  if($i==4) { // Eğer 4 tane resim ekrana basıldıysa bunları yap

     $i=0; // sayacı sıfırla 

     echo  "<tr><tr><tr><tr><tr><tr><tr><tr> "; // tabloda bir alt satıra geç 

     }

} 

	$sorgu=mysql_query("select * from filmler where vizyon=1");



while($cek=mysql_fetch_array($sorgu)){

  $i++; //sayaç

  echo "<td width=1000 align=center><br><h4><font color='blue'> Film Özeti</font></h4>".$cek['film_ozeti']."</td>";



  if($i==4) { // Eğer 4 tane resim ekrana basıldıysa bunları yap

     $i=0; // sayacı sıfırla 

     echo  "</tr> <tr>"; // tabloda bir alt satıra geç 

     }

} 

	

	

	

	

	?>

	</tr>

</table>

	

		

	

	

		

  </div>

	<footer id="footer" class="panel">
						<div class="inner split">
							<div>
								<section>
									<h2>Magna feugiat sed adipiscing</h2>
									<p>Nulla consequat, ex ut suscipit rutrum, mi dolor tincidunt erat, et scelerisque turpis ipsum eget quis orci mattis aliquet. Maecenas fringilla et ante at lorem et ipsum. Dolor nulla eu bibendum sapien. Donec non pharetra dui. Nulla consequat, ex ut suscipit rutrum, mi dolor tincidunt erat, et scelerisque turpis ipsum.</p>
								</section>
								<section>
									<h2>Follow me on ...</h2>
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
									&copy; Unttled. Design: <a href="http://html5up.net">HTML5 UP</a>.
								</p>
							</div>
							<div>
								<section>
									<h2>Get in touch</h2>
									<form method="post" action="#">
										<div class="field half first">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="field half">
											<input type="text" name="email" id="email" placeholder="Email" />
										</div>
										<div class="field">
											<textarea name="message" id="message" rows="4" placeholder="Message"></textarea>
										</div>
										<ul class="actions">
											<li><input type="submit" value="Send" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
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