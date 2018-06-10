<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
</head>

<body>

<?php 
$id=$_GET["id"];
include("baglan.php");
$sil=mysql_query("DELETE FROM musteriler WHERE bilet_no='$id'");
if($sil)
{
echo "Mesaj silinmiştir. Şimdi bilet iptal sayfasına yönlendiriliyorsunuz";
header("refresh:3;url=bilet_iptal.php");
}else
{echo "hata oluşmuştur";}
?>

</body>
</html>