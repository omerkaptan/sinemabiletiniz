

<head>
<title>BAŞARILI</title>
	<meta http-equiv="refresh" content="3;url=vizyon.php" />
</head>


<?php

include("baglan.php");

mysql_query("UPDATE filmler SET vizyon='0' ");

if(isset($_POST['kaydet'])) // Eğer butona basıldıysa

{

  if(isset($_POST['vizyon'])) // Eğer seçeneklerden en az biri işaretlenmişse

  {

    $dizi = $_POST['vizyon']; // Post ile gelen seçenekler diziye aktarılır.

    foreach($dizi as $vizyon) // dizinin her elemanı için tekrar eden döngü

    {

      mysql_query("UPDATE filmler SET vizyon='1' WHERE film_id='$vizyon'"); 

	  

    }

  }

  else // eğer hiçbir checkbox işaretlenmemişse

  {

    echo "Birşey seçmediniz!"; 

  }

}

echo "<center><h1>İşlem Başarıyla Tamamlandı Geri Yönlendiriliyorsunuz</center>";


?>