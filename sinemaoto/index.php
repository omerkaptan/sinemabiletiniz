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

	<div id="footer">

		<div>

		  <div>

		    <p>&nbsp;</p>

		  </div>

			<p>

				&#169; 2014 sinema kanki

			</p>

			<div class="connect">

				<span>Stay Connected:</span> <a href="http://facebook.com" id="facebook">facebook</a> <a href="http://twitter.com" id="twitter">twitter</a> <a href="http://www.google.com" id="googleplus">google+</a>

			</div>

	  </div>

	</div>

</body>

</html>