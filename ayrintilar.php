<!DOCTYPE html>

<!-- Website template by freewebsitetemplates.com -->

<html>

<head>

	<meta charset="UTF-8">

	<title>AYRINTILAR</title>

	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

<?php


mysql_query("SET NAMES UTF8");



		include("baglan.php");

		$id=$_GET['film_id'];

		

		$sql =mysql_query("select * from filmler where film_id='$id'");

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

	<div id="header">

		<div>

			<a href="index.php" id="logo"><img src="images/logo.png" alt=""></a>

			<ul>

			  <li> <a href="index.php">anasayfa</a> </li>

			  <li><a href="biletiptali.php">BILET IPTALI</a></li>

			  <li> <a href="biletal.php">BILET AL</a> </li>

			  <li><a href="eposta/index.php">ILETISIM</a></li>

		  </ul>

		</div>

	</div>

	<div id="body" class="movies">

		<?php 

		

		echo"<h2><center><font color='#FF0004'>$film_adi</font></center></h2>";

		

		?>

        

        <table width="957" border="0">

  <tr style="text-align: center">

    <td width="172">	<?php echo" <img width=475 height=300 src=\"".$resim_url."\">  " ?></td>

    <td width="372">  </td><td width="480">

        <?php

		 echo'<iframe src="'.$fragman.'/imdb/embed?autoplay=false&width=480" width="480" height="300" frameborder="no" scrolling="no"></iframe>';

		
		

		?></td>

  </tr>

</table>



        

	

		

        

        

        <div>

		  <h3><center><font color="
		  #9AFFEF">FILM ÖZETI</font></center></h3>
			
			<?php 

			

			echo "<br>$ozet";

			

				?>

	  </div>

        

		

	  <div class="section">

			<h3><center><font color="
		  #9AFFEF">AYRINTILAR</font></center></h3>

			<span><?php

			echo"<strong><font color='#9AFFEF'><em>TÜR :</em></strong></font> <em><strong>$tur</strong></em> ";

			 ?></span>

			<p>

				<span><?php 

				echo "<strong> <font color='#9AFFEF'><em>OYUNCULAR :</em></strong></font> <em><strong>$oyuncular</strong></em>";

				

				?></span> </p>

			<p>

				<span><?php 

				echo "<strong><font color='#9AFFEF'><em>YÖNETMEN :</em></strong></font> <em><strong>$yonetmen</strong></em>";

				?></span></p>

			<p>

				<span><?php

				

				echo "<strong><font color='#9AFFEF'><em>SÜRE :</em></strong></font> <em><strong>$sure</strong></em>";

				

				 ?></span></p>

			<p>&nbsp;</p>
			
<center> <a href="biletal.php" class="dugme">BİLET AL</a> </center>
		</div>

	</div>

	<div id="footer">

		<div>

		  <div>

		    <form action="index.php">

		    </form>

		  </div>

			<p>

				&#169; 2017 Ömer Kaptan

		  </p>

			<div class="connect">

				<span>Stay Connected:</span> <a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">facebook</a> <a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a> <a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">google+</a>

			</div>

		</div>

	</div>

</body>

</html>