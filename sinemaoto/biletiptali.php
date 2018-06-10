<!DOCTYPE html>

<!-- Website template by freewebsitetemplates.com -->

<html>

<head>

	<meta charset="UTF-8">

	<title>BİLET İPTALİ</title>

	<link rel="stylesheet" href="css/style.css" type="text/css">

</head>



<style type="text/css">

body form table tr {

	text-align: center;

}

body form table tr {

	font-weight: bold;

}

</style>

</head>











<body>

	<div id="header">

		<div>

			<a href="index.php" id="logo"><img src="images/logo.png" alt=""></a>

			<ul>

			  <li> <a href="index.php">anasayfa</a></li>

			  <li><a href="biletiptali.php">bilet iptali</a><a href="yakinda.html"></a></li>

			  <li> <a href="biletal.php">BILET AL</a></li>

			  <li><a href="eposta/index.php">ILETISIM</a></li>

		  </ul>

		</div>

	</div>

	<div id="body" >

	</div>

    

    <form action="biletiptali.php" method="post">

<table width="852" border="1" align="center">



    <tr>

     <td width="107" bgcolor="#3399FF"><em>Bilet No</em></td>

     <td width="180" bgcolor="#3399FF"><em>Ad</em></td>

     <td width="180" bgcolor="#3399FF"><em>Soyad</em></td>

     <td width="108" bgcolor="#3399FF"><em>Bilet Tarihi</em></td>

     <td width="92" bgcolor="#3399FF"><em>Bilet Seansı</em></td>

     <td width="76" bgcolor="#3399FF"><em>Koltuk No</em></td>

     <td width="63" bgcolor="#3399FF"><em>İptal Et</em></td></tr>

    <?php 

	include("baglan.php");

$db=mysql_select_db("sinemabi_sinema",$baglanti) ;



// müsteri bilgilerini çekiyorum

$sorgu1="SELECT * FROM musteriler";

@$giden1=mysql_query($sorgu1,$baglan);

@$gelen1=mysql_fetch_array($giden1);

@$biletno=$_POST["biletno"];

@$islemdizi=$_POST['islem'];



if(isset($islemdizi)==1 && $islemdizi=="Onayla")

{$sorgu=mysql_query("SELECT * FROM musteriler WHERE bilet_no='$biletno' ");

$dizi=mysql_fetch_array($sorgu);}



echo "<center><br> <b>Bilet No Giriniz : </b> <input type=\"text\" name=\"biletno\"> <input type=\"submit\" name=\"islem\" value=\"Onayla\"> <br> <br> </center>";







?>

    <tr>

      <td><?php echo $dizi["bilet_no"];?></td>

      <td><?php echo $dizi["musteri_ad"];?></td>

      <td><?php echo $dizi["musteri_soyad"];?></td>

      <td><?php echo $dizi["bilet_tarihi"];?></td>

      <td><?php echo $dizi["bilet_saati"];?></td>

      <td><?php echo $dizi["koltuk"];?></td>

      <td><a href="sil.php?id=<?php echo $dizi["bilet_no"];?>">İptal Et</a></td>

    </tr>

  </table>

</form>

    

</body>

</html>