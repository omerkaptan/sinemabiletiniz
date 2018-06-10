<?php ob_start();

@session_start();

?><!DOCTYPE html>

<!-- Website template by freewebsitetemplates.com -->

<html>

<head>

	<meta charset="UTF-8">

	<title>ADMİN ANASAYFA</title>

	<link rel="stylesheet" href="css/style.css" type="text/css">

    

    

    

    

    

</head>

<?php

if(!isset($_SESSION['ad'])){

break;

}

?>

<body>















	<div id="background">

		<div id="page">

		  <div id="header">

				<div id="logo"><a href="admin.php"><img src="images/loggo.jpg" alt="LOGO" height="184" width="860"></a></div>

			</div><div id="navigation" >

					<ul >

						<li>

							<a href="admin.php">ANASAYFA</a>

						</li>

						<li>

							<a href="film.php">FİLM EKLE</a>

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

            

            

            

           

            <div align="center">

<br>

<br>



<br>

<br>

</div>

<br>



		  </div>

	  </div>

</div>

</body>

</html>