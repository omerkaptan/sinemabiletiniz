<?php ob_start();

@session_start();

?>



<!DOCTYPE html>

<!-- Website template by freewebsitetemplates.com -->

<html>

<head>

	<meta charset="UTF-8">

	<title>FİLM EKLE</title>

	<link rel="stylesheet" href="css/style.css" type="text/css">

</head> 

  <?php

  mysql_connect("www.sinemabiletiniz.com","sinemabi_admin","7154940");

mysql_select_db("sinemabi_sinema");

mysql_query("SET NAMES UTF8");

if(!isset($_SESSION['ad'])){

break;

}

?> 

<body> <div id="background">

		<div id="page">

			<div id="header">

				<div id="logo"><a href="admin.php"><img src="images/loggo.jpg" alt="LOGO" height="184" width="860"></a></div>

			</div><div id="navigation" >

					<ul >

						<li>

							<a href="admin.php">ANASAYFA</a>

						</li>

					  <li class="selected">

							<a href="film.php"  >FİLM EKLE</a>

					  </li>

						<li>

						  <a href="vizyon.php">VİZYON</a>

						</li>

						<li>

							<a href="biletonay.php">bİlet onay</a>

						</li>
						<li>

							<a href="seans.php">Seans Girişi</a>

						</li>

					</ul>

				</div>

			<div id="contents">

            

            

            

           

	  </div>

	</div>	

    

    <?php

    $baglanti=mysql_connect("www.sinemabiletiniz.com","sinemabi_admin","7154940") or die("Mysql'e bağlantı kurulamadı!") ;

	mysql_select_db("sinemabi_sinema",$baglanti) or die("Veritabanına bağlantı kurulamadı!");

		mysql_query("Set names 'utf-8'");

		mysql_query("set character set utf-8");

		mysql_query("set collation_connection= 'utf8_general_ci'");

	

	include("baglan.php");	



@$film_adi = $_POST["filmin_adi"];

@$film_ozeti = $_POST["film_ozet"];

@$film_fragman = $_POST["fragman"];

@$film_turu = $_POST["turu"];

@$filmin_oyunculari = $_POST["filmin_oyunculari"];

@$sure = $_POST["sure"];

@$yonetmen= $_POST["yonetmen"];

@$seans=$_POST["seans"];

@$bilet_tarihi=$_POST["bilet_tarih"];







    if($_POST){

			if ($_FILES["film_resim"]["size"]<1024*1024){

				if ($_FILES["film_resim"]["type"]=="image/jpeg"){

					

					$dosya_adi=$_FILES["film_resim"]["name"];

					$uret=array("as","rt","ty","yu","fg");

					$uzanti=substr($dosya_adi,-4,4);

					$sayi_tut=rand(1,10000);

					$yeni_ad="../dosyalar/".$uret[rand(0,4)].$sayi_tut.$uzanti;

					if (move_uploaded_file($_FILES["film_resim"]["tmp_name"],$yeni_ad)){

						echo '<script language="javascript">';
echo 'alert("Dosya başarı ile yüklendi")';
echo '</script>';

$sorgu=mysql_query("insert into filmler(film_resim,film_adi,film_ozeti,film_fragman,film_turu,film_oyuncular,film_yonetmen,film_suresi) values ('$yeni_ad','".addslashes($film_adi)."','".addslashes($film_ozeti)."','$film_fragman','$film_turu','$filmin_oyunculari','$yonetmen','$sure')");





//$sorgu2=mysql_query("insert into seans(seans_tarihi,seans_saati)values('$bilet_tarihi','$seans')");

						

						if ($sorgu){

							echo '<script language="javascript">';
echo 'alert("Veritabanına kaydedildi.")';
echo '</script>';
							

						}else{

							echo '<script language="javascript">';
echo 'alert("Kayıt esnasında hata oluştu.")';
echo '</script>';

						}

					}else{

						echo '<script language="javascript">';
echo 'alert("Dosya Yüklenemedi.")';
echo '</script>';

					}

				}else{

					echo '<script language="javascript">';
echo 'alert("Dosya sistemi yanlış.")';
echo '</script>';

				}

			}else{			

				echo '<script language="javascript">';
echo 'alert("Dosya boyutu 1 mb ı geçemez.")';
echo '</script>';

			}

		}?>

        

	<form name="form1" method="POST" action="film.php" enctype="multipart/form-data">

	

	

    

    <table width="800" border="10" align="center">

 <tr>

    <th height="5" colspan="12" align="center">FİLM EKLE &nbsp;

      <input type="submit" name="kaydet2" id="kaydet2"  value="KAYDET" />



      </th>

    </tr> <tr style="text-align: center">

    <td width="90"><strong>FİLMİN ADI</strong></td>

    <td width="107"><strong>FİLMİN ÖZETİ</strong></td>

    <td width="90"><strong>FRAGMAN</strong></td>

    <td width="95"><strong>TÜRÜ</strong></td>

    <td width="103"><strong>OYUNCULARI</strong></td>

    <td width="88"><strong>YÖNETMEN</strong></td>

    <td width="78"><strong>SÜRESİ</strong></td>

    <td width="94"><strong>RESMİ</strong></td>

    

   

    

    

    </tr>

  <tr>

    <td height="87"><label for="filmin_adi"></label>

      <input name="filmin_adi" type="text" id="filmin_adi"  size="15"  required="required" /></td>
      

    <td><label for="film_ozet"></label>

      <textarea name="film_ozet" maxlength="11900" id="film_ozet" required="required" ></textarea></td>

    <td><label for="fragman"></label>

      <input name="fragman" type="text" id="fragman" value="http://www.imdb.com/video/imdb/" size="33" required="required"/></td>

    <td><label for="turu"></label>

      <select name="turu" id="turu" >
        <option selected="selected">SEÇ</option>

        <option>KOMEDİ</option>

        <option>AKSİYON</option>

        <option>ROMANTİK</option>

        <option>DRAM</option>

        <option>KORKU</option>
        <option>POLİSİYE</option>
        <option>ANİMASYON</option>
        <option>TARİHİ</option>

      </select></td>

    <td><label for="filmin_oyunculari"></label>

      <textarea name="filmin_oyunculari" id="filmin_oyunculari" cols="14" rows="5" required="required"></textarea></td>

    <td><label for="yonetmen"></label>

      <input name="yonetmen" type="text" id="yonetmen" size="14" required="required" /></td>

    <td><label for="sure"></label>

      <select name="sure" id="sure">

        <option>60 DK</option>

        <option>75 DK</option>

        <option>90 DK</option>

        <option>100 DK</option>

        <option>110 DK</option>

        <option>120 DK</option>

        <option>150 DK</option>

        <option selected="selected">SEÇ</option>

      </select></td>

    <td><input name="film_resim" type="file"  size="5" required="required">

      </td>

    
     

    

    </tr>

  

    </table>



</form>
		

</body>

</html>