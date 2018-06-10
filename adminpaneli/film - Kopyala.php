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
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+'  Alanına Lütfen Veri Giriniz.\n'; }
    } if (errors) alert('Lütfen Gerekli Alanları Doldurun\n'+errors);
    document.MM_returnValue = (errors == '');
} }
    </script>
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


@$seans=$_POST["seans"];

@$bilet_tarihi=$_POST["bilet_tarih"];







    
$sorgu2=mysql_query("insert into seans(seans_tarihi,seans_saati)values('$bilet_tarihi','$seans')");

						

						?>

        

	<form name="form1" method="POST" action="film.php" enctype="multipart/form-data">

	

	

    

    <table width="800" border="10" align="center">

 <tr>

    <th height="5" colspan="12" align="center">FİLM EKLE &nbsp;

      <input type="submit" name="kaydet2" id="kaydet2"  value="KAYDET" />



      </th>

    </tr> <tr style="text-align: center">

    <td width="238">FİLM</td>

    
    

   

    <td width="201"><strong>SEANS</strong></td>

    <td width="321"><strong>TARİH</strong></td>

    </tr>

  <tr>

    <td height="87"><?php 
		$query = mysql_query("SELECT * FROM filmler where vizyon=1");

   while ($row = mysql_fetch_array($query))

   {

    $liste = $row['film_adi'];

	$id=$row['film_id'];

    print "<option value=\"$id\">$liste</option>

	";

	$id=$row['film_id'];

   };

   print "<input type='hidden' name='filmID' value='".$id."'/>"; ?></td>
      

    
    <td width="201"><input type="time" name="seans"></td>
    <?php
	  $tarih = date("Y-m-d");
	  
	  $gun=date("d");
	  $maxtarih=$gun+7;
	  $tarih2 = date("Y-m-$maxtarih");
	  
	

    echo '<td width="46"><input name="bilet_tarih" type="date" max='.$tarih2.' min='.$tarih.''; ?> onBlur="MM_validateForm('filmin_adi','','R','fragman','','R','yonetmen','','R','filmin_oyunculari','','R');return document.MM_returnValue"></td>

    

    </tr>

  

    </table>



</form>
		

</body>

</html>