<!DOCTYPE html>

<!-- Website template by freewebsitetemplates.com -->

<html><!-- InstanceBegin template="/Templates/ana.dwt" codeOutsideHTMLIsLocked="false" -->

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>BİLET AL</title>

	<link rel="stylesheet" href="css/style.css" type="text/css">

</head>

<body>

	<div id="header">

		<div>

			<a href="index.html" id="logo"><img src="images/logo.png" alt=""></a>

		  <ul>

			  <li> <a href="index.php">anasayfa</a> </li>

			  <li><a href="biletiptali.php">bilet iptali</a><a href="yakinda.html"></a></li>

			  <li> <a href="biletal.php">BILET AL</a> </li>

			  <li><a href="eposta/index.php">ILETISIM</a></li>

		  </ul>

		</div>

	</div>

	<div id="body" class="home"><!-- InstanceBeginEditable name="EditRegion1" -->

    <?php

	include("baglan.php");

mysql_query("SET NAMES UTF8");

	error_reporting(E_ALL ^ E_NOTICE);

include("baglan.php");?>

    <form name="form1" method="GET" action="koltuk.php" target="ikoltuk"><P>

      <table width="367" height="186" border="0" align="center">

          <tr>

            <td width="147" height="24">Film Adı:</td>

            <td width="171"><label for="film_adi"></label>

              <select name="film_adi" size="10" id="film_adi">

              <?php

   $query = mysql_query("SELECT * FROM filmler where vizyon=1");

   while ($row = mysql_fetch_array($query))

   {

    $liste = $row['film_adi'];

	$id=$row['film_id'];

    print "<option value=\"$id\">$liste</option>

	";

	$id=$row['film_id'];

   };

   print "<input type='hidden' name='filmID' value='".$id."'/>";

  ?>		

            </select></td>

          </tr>

          <tr>

            <td>Bilet Tarihi:</td>

            <td> <select name="bilet_tarihi" multiple="multiple" id="bilet_tarihi">

  <?php

   $query = mysql_query("SELECT seans_tarihi FROM seans");

   while ($row = mysql_fetch_array($query))

   {

    $liste = $row['seans_tarihi'];

    print "<option value=\"$liste\">$liste</option>";

   };

  ?>          

</select></td>

          </tr>

          <tr>

            <td>Film Seansı:</td>

            <td><select name="film_seansi" id="film_seansi">

            <?php

   $query = mysql_query("SELECT seans_saati FROM seans");

   while ($row = mysql_fetch_array($query))

   {

    $liste = $row['seans_saati'];

    print "<option value=\"$liste\">$liste</option>";

   };

  ?>          

            </select></td>

          </tr>

          <tr>

            <td colspan="2"><input type="submit" name="gonder" id="gonder" value="Gönder"></td>

          </tr>

      </table>

        <p>

          <label for="select"></label>

        </p>

        <p>&nbsp;</p>

    </form>

    <iframe name="ikoltuk" width=960 height=900 src="koltuk.php" scrolling="no" frameborder="0"></iframe>

	<!-- InstanceEndEditable -->

	  <div><!-- InstanceBeginEditable name="EditRegion2" --><!-- InstanceEndEditable --><!-- InstanceBeginEditable name="EditRegion3" --><!-- InstanceEndEditable --></div>

</div>

	<div id="footer">

		<div>

		  <div class="section">

		    <p>&nbsp;</p>

			</div>

			<div>

			  <p>&nbsp;</p>

			</div>

			<p>

				&#169; 2017 SİNEMA BİLETİNİZ</p>

			<div class="connect">

				<span></span> <a href="#" id="facebook">facebook</a> <a href="#" id="twitter">twitter</a> google+

			</div>

		</div>

	</div>

</body>

<!-- InstanceEnd --></html>