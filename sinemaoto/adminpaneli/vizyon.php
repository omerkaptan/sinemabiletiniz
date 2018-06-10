<?php ob_start();
@session_start();
?>

<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>FİLM LİSTESİ</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    
  </head>  
  <?php
  mysql_connect("localhost","root","");
mysql_select_db("sinema");
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
						<li >
							<a href="film.php"  >FİLM EKLE</a>
						</li>
						<li class="selected">
							<a href="vizyon.php">VİZYON</a>
						</li>
						<li>
							<a href="biletonay.php">bİlet onay</a>
						</li>
					</ul>
				</div>
			<div id="contents">
            
            
            
           
	  </div>
	</div>	
	<form name="form1" method="post" action="islem.php">
	
	

<?php
include("baglan.php");


?>
 <center><input name="kaydet" type="submit" value="Gönder"></center> <br>
<table width="1103" height="73" border="10" cellpadding="2" cellspacing="0" align=center >
  <tr>
   <center> <td width="118" align="center"><strong>Film ID</strong></td>
    <td width="102"align="center"><strong>Film Adı</strong></td>
    <td width="357"align="center"><strong>Özet</strong></td>
    <td width="68"align="center"><strong>Fragman</strong></td>
    <td width="56"align="center"><strong>Türü</strong></td>
     <td width="55"align="center"><strong>Süresi</strong></td>
    <td width="121"align="center"><strong>Oyuncular</strong></td>
    <td width="141"align="center"><strong>Yönetmen</strong></td>
    <td width="29"align="center"><strong>Afis</strong></td>
    <td width="29"align="center"><strong>Vizyon</strong></td>
    <td width="29"align="center"><strong>Sil</strong></td> </center>
    
  </tr>
  
  <?php
  $sql = mysql_query("select * from filmler") or die("Hata Olustu!");
   while($oku=mysql_fetch_array($sql))
  {@$film_ozeti=substr($oku['film_ozeti'],0,40);
	  
	  
	  
$id=$oku['film_id'];
  ?>
  <tr>
 
    <td align="center"><?PHP echo $oku['film_id']; ?></td>
    <td align="center"><?PHP echo $oku['film_adi']; ?></td>
    <td align="center"><?PHP echo $film_ozeti ."..."; ?></td>
    <td align="center"><?PHP echo $oku['film_fragman']; ?></td>
    <td align="center"><?PHP echo $oku['film_turu']; ?></td>
    <td align="center"><?PHP echo $oku['film_suresi']; ?></td>
    <td align="center"><?PHP echo $oku['film_oyuncular']; ?></td>
    <td align="center"><?PHP echo $oku['film_yonetmen']; ?></td>
    <td align="center"> <?PHP echo $oku['film_resim']; ?></td>
    <td align="center">
     <?php echo ' <input name="vizyon[' . $id . ']" type="checkbox" value="' . $id . '" />' ?>
   </td>
   <td><a href="sil.php?id=<?php echo $oku['film_id'];?>">Sil</a></td>
   
  </tr>
  <?PHP } 

  ?>
  
 
  
</table>
</body>
</html>