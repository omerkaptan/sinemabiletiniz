<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BAŞARILI</title>
</head>

<body>

<?php 
$id=$_GET["id"];
include("baglan.php");
$sil=mysql_query("DELETE FROM filmler WHERE film_id='$id'");
if($sil)
{
echo "<center><h1>İşlem Başarıyla Tamamlandı Geri Yönlendiriliyorsunuz</center>";
header("refresh:3;url=vizyon.php");
}else
{echo "hata oluşmuştur";}
?>

</body>
</html>