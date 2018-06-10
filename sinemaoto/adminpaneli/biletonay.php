<?php ob_start();

@session_start();

?><!DOCTYPE html>

<!-- Website template by freewebsitetemplates.com -->

<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>BİLET ONAY</title>

	<link rel="stylesheet" href="css/style.css" type="text/css">

    

    

    

    

    

</head>



<?php

include("baglan.php");

if(!isset($_SESSION['ad'])){

break;

}

?>



<form action="biletonay.php" method="post">

<body>















	<div id="background">

		<div id="page">

			<div id="header">

				<div id="logo"><a href="admin.php"><img src="images/loggo.jpg" alt="LOGO" height="184" width="860"></a></div>

			</div><div id="navigation"  >

					<ul>

						<li  >

							<a href="admin.php">ANASAYFA</a>

						</li>

						<li>

							<a href="film.php">FİLM EKLE</a>

						</li>

						<li>

							<a href="vizyon.php">VİZYON</a>

						</li>

						

                        <li class="selected">

							<a href="admin.php">bİlet onay</a>

						</li>

					</ul>

				</div>

			<div id="contents">

            

            

            

           

            <div align="center">

<br>

<br>

<input type="submit" name="btn" value="Onaysızları Boşalt">

<br>

<br>

</div>

<br>

<?php



include("../baglan.php");



//onaylama

if(isset($_POST['islem'])){

	$islemdizi=explode("-",$_POST['islem']);

	if($islemdizi[0]=='Onayla'){$sorgu3="UPDATE musteriler SET onay='1' WHERE bilet_no='$islemdizi[1]'";

mysql_query($sorgu3,$baglan);

echo "<b><center>".$islemdizi[1]." Onaylandı </center></b>";}}

//silme

if(isset($_POST['islem'])){

	$islemdizi=explode("-",$_POST['islem']);

	if($islemdizi[0]=='Sil'){$sorgu3="DELETE FROM musteriler WHERE bilet_no='$islemdizi[1]'";

mysql_query($sorgu3,$baglan);

echo "<b><center>".$islemdizi[1]." Silindi</center></b>";}}

//tüm koltukları boşalt

@$islemdizi=$_POST['btn'];

	if(@$_POST['btn']=="Onaysızları Boşalt")

	{$sorgu5="DELETE FROM musteriler where onay='0'";

mysql_query($sorgu5,$baglan);

echo "<b><center>Onaysızlar Silindi</center></b>";}

echo "<table width=900 border=\"4\" align=\"center\">";

// müsteri bilgilerini çekiyorum



$sorgu1 = mysql_query("SELECT * FROM musteriler");

while($gelen1=mysql_fetch_array($sorgu1)){

	$sorgu2 = mysql_query("SELECT * FROM filmler");

while($gelen2=mysql_fetch_array($sorgu2))

{$id=$gelen2['film_id'];

if($gelen1['film_id']==$id)

	{$film_adi=$gelen2['film_adi'];}

	

}



if($gelen1['onay']=="1")

{$onayli="Onaylı";}

else {$onayli="Onaysız";}

echo "

<tr weight=200><td align=center><h4>Ad Soyad </td><td align=center>".$gelen1['musteri_ad']." ".$gelen1['musteri_soyad']."</td>

<td align=center><h4>Film Adı  </td><td align=center>$film_adi </td><td align=center><h4>Onay</td><td align=center> ".$onayli. "</td><td rowspan=2 align=center> <input type=\"submit\" name=\"islem\"  value=\"Onayla-$gelen1[7]\"><input type=\"submit\" name=\"islem\" value=\"Sil-$gelen1[7]\"></td></tr></td></tr>  



<td align=center><h4>Bilet Tarihi Ve Saati </td><td> ".$gelen1['bilet_tarihi']. "/" .$gelen1['bilet_saati'].   "</td>



<td align=center><h4>Koltuk No </td><td align=center> ".$gelen1['koltuk']. "</td> 





<td align=center><h4>Bilet No </td><td align=center>".$gelen1[7].  " </td> <tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr></tr>



";}

echo "</table>";





?> </form>



















			</div>

	  </div>

	</div>

</body>

</html>