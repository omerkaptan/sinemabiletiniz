<!DOCTYPE HTML>
<!--
	Multiverse by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
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
		$sql =mysql_query("select * from filmler where film_id=20");
		$oku=mysql_fetch_array($sql);
		$fragman=$oku['film_fragman'];
		$resim_url= substr($oku['film_resim'],3);
		$ozet=$oku['film_ozeti'];
		$film_adi=$oku['film_adi'];
		$tur=$oku['film_turu'];
		$oyuncular=$oku['film_oyuncular'];
		$yonetmen=$oku['film_yonetmen'];
		$sure=$oku['film_suresi'];
		?>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html"><strong>SİNEMABİLETİNİZ.COM</strong> </a></h1>
						<nav>
							<ul>
								<li><a href="/index.php" class="icon fa-info-circle active">VİZYONDAKİ FİLMLER</a></li>
								<li><a href="#footer" class="icon fa-info-circle">About</a></li>
								<li><a href="#" class="icon fa-info-circle">YAKINDA</a></li>
							</ul>
						</nav>
						
					</header>

				<!-- Main -->
				
				<form id="form1" name="form1" method="post">
				  
				  <div id="body" class="movies">
		 
		
		
		
		
        
        <table width="957" border="0">
      <h1> <?php echo"$film_adi"; ?></h1>
  <tr>
    <td width="360">	<?php 
		echo" <img width=600 height=360 src=\"".$resim_url."\">  " ?></td>
    <td width="600">  </td><td width="480">
        <?php
		 echo'<iframe src="'.$fragman.'/imdb/embed?autoplay=false&width=600" width="600" height="360" frameborder="no" scrolling="no"></iframe>';
		
		?></td>
  </tr>
</table>

        
	
		
        
        
        <div>
		  <h3>ÖZET</h3>
			<p><?php 
			
			echo "<h5>$ozet</h5>";
			
			?></p> 
		</div>
        
		
		<div class="section">
			<h3>AYRINTILAR</h3>
			<span><?php
			echo"Tür: $tur ";
			 ?></span>
			<p>
				<span><?php 
				echo "OYUNCULAR: $oyuncular";
				
				?></span> </p>
			<p>
				<span><?php 
				echo "YÖNETMEN: $yonetmen";
				?></span></p>
			<p>
				<span><?php
				
				echo "SÜRE : $sure";
				
				 ?></span></p>
			<p>&nbsp;</p>
		</div>
	</div>
			  </form>
				<!-- Footer -->
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