<?php 
error_reporting(E_ALL ^ E_NOTICE); 
 session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<title>Sinema Rezervasyon Sistemi</title>
</head>
<link href="css.css" rel="stylesheet" type="text/css" />
<form action="koltuk.php" method="post">
<body>
<table border="1" align="center">
<tr>
<tr> <div align="center">Lütfen Koltuğunuzu Seçiniz<div valign="bottom" align="center">Mavi koltuklar rezerve edilmiş koltuklardır.</div></div>
<div align="right"><?php
include("baglan.php");


if($_GET){
	if(isset($_GET["film_adi"])){
		$sql=mysql_query("SELECT * FROM filmler WHERE film_id='".$_GET["film_adi"]."'");
		$say=@mysql_num_rows($sql);
			if($say>0){
				$cek=mysql_fetch_array($sql);
				@$_SESSION['filmAdi'] = $cek["film_adi"];
				@$_SESSION['filmID'] = $_GET['film_adi'];
				}else{
					echo "Film Bulunamadı.";
					}
		}

@$_SESSION['biletTarihi'] = $_GET["bilet_tarihi"]; 
@$_SESSION['filmSeansi'] = $_GET["film_seansi"];
}else{}
echo "<strong>Seçmiş Olduğunuz Film:</strong>".@$_SESSION['filmAdi']." <br>";
echo "<strong>Bilet Tarihiniz:</strong> ".$_SESSION['biletTarihi']." <br>";
echo "<strong>Film Seansınız:</strong> ".$_SESSION['filmSeansi']." ";

//Bilet No Algoritması Oluşturma
$ilk_uc = substr($_SESSION['filmAdi'], 0, 5);
$sayilar[]="";
$rastgele=rand(1,999); // 1 ile 999999 arası sayi uretiyoruz
	if (in_array($rastgele,$sayilar)) // uretilen sayi dizide varmi?
	{continue;} // varsa döngüye devam
	else //yoksa
	{$sayilar[]=$rastgele; //rastgele sayiyi sayilar diznine atiyoruz
	}
foreach ($sayilar as $sayilar_ekrana) //bu yapı dizinin tüm elemanlarını gösterir.
$algoritma=$ilk_uc.$sayilar_ekrana;
?></div>
<?php



if(isset($_POST['btn3'])){
if($_POST['btn3']=='Rezerve Et'){


$sql=mysql_query("INSERT INTO musteriler (musteri_ad,musteri_soyad,bilet_tarihi,bilet_saati,film_id,koltuk,bilet_no) values ('".$_POST['ad']."','".$_POST['soyad']."','".$_SESSION['biletTarihi']."','".$_SESSION['filmSeansi']."','".$_SESSION['filmID']."','$_POST[btnad]','$algoritma')");}}

$dizi=array("Z20");
$sorgu1="SELECT koltuk FROM musteriler WHERE film_id='".$_SESSION['filmID']."' AND bilet_tarihi='".$_SESSION['biletTarihi']."'
AND bilet_saati='".$_SESSION['filmSeansi']."'";
$giden1=mysql_query($sorgu1,$baglan);
$sq=0;
while($gelen1=mysql_fetch_array($giden1)){
$dizi[$sq]=$gelen1[0];
$sq++;
}
for($i=0;$i<=99;$i++){
if($i%10==0){
$k=chr(round($i/10)+65);
echo "<tr><td bgcolor=\"orange\">".$k;
}
$j=($i%10)+1;
foreach($dizi as $deger){
if($deger=="$k$j"){
$each=1;
break;
}
else{
$each=0;
}
}
if($each==1){
echo "<td bgcolor=\"grey\"><input type=\"submit\" disabled=\"false\" class=\"awesome2\" name=\"btn\" value=\"$k$j\" /></td>";
}
else{
echo "<td bgcolor=\"grey\"><input type=\"submit\" class=\"awesome\" name=\"btn\" value=\"$k$j\" /></td>";
}
}

?>
</td>
</tr>
</table>
<div align="center">
<?php
if(isset($_POST['btn3'])){
if($_POST['btn3']=='Rezerve Et'){
	


echo "<h3>".$algoritma." Numaralı İşlem Başarıyla Tamamlandı. <br>";
	$gmail=$_POST['eposta'];
	echo $_POST['eposta'];
	
	require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
$mail->SMTPAuth = true; //SMTP doğrulama olmalı ve bu değer değişmemeli
$mail->SMTPSecure = 'ssl'; // Normal bağlantı için tls , güvenli bağlantı için ssl yazın
$mail->Host = "mail.sinemabiletiniz.com"; // Mail sunucusunun adresi (IP de olabilir)
$mail->Port = 465; // Normal bağlantı için 587, güvenli bağlantı için 465 yazın
$mail->IsHTML(true);
$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";
$mail->Username = "deneme@sinemabiletiniz.com"; // Gönderici adresinizin sunucudaki kullanıcı adı (e-posta adresiniz)
$mail->Password = "7154940"; // Mail adresimizin sifresi
$mail->SetFrom("deneme@sinemabiletiniz.com", "Sinema Biletiniz"); // Mail atıldığında gorulecek isim ve email (genelde yukarıdaki username kullanılır)
$mail->AddAddress("".$_POST['eposta'].""); // Mailin gönderileceği alıcı adres
$mail->Subject = "Rezervasyonunuz Başarı İle Tamamlandı."; // Email konu başlığı
$mail->Body = "Merhaba ".$_POST['ad']." www.sinemabiletiniz.com üzerinden yaptıgınız rezervasyonunuz başarı ile tamamlanmıştır.<br>
Bilet nonuz:<b>".$algoritma."</b>"; // Mailin içeriği
if(!$mail->Send()){
	echo " Email Gönderim Hatasi: ".$mail->ErrorInfo;
} else {
	echo " Email Gonderildi";
}
	

}}
if(isset($_POST['btn2'])){
if($_POST['btn2']=='EVET'){
echo "<div align=\"center\"><h4><br>Koltuk başarıyla rezerve edildi.</h4></div>";

echo '	<table width="400" border="0">
  <tbody>
    <tr>
      <td colspan="2"><strong>Lütfen işlemi tamamlamak için bilgilerinizi giriniz.</strong></td>
    </tr>
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Adınız:</strong></td>
      <td><input name="ad" type="text" id="ad"  size="20"  required="required"/></td>
    </tr>
    <tr>
      <td><strong>Soyadınız:</strong></td>
      <td><input name="soyad" type="text" id="soyad"  size="20"  required="required"/></td>
    </tr>
    <tr>
      <td><strong>Mail Adresiniz:</strong></td>
      <td><input name="eposta" type="text" id="eposta"  size="20"  required="required"/></td>
    </tr>
    <tr>
      <td><strong>Kredi Kart Bilgileriniz:</strong></td>
      <td><input name="kartno1" type="text" id="kartno1" placeholder="- - - -" size="4" maxlength="4" required="required"> <input name="kartno2" type="text" id="kartno2" placeholder="- - - -" size="4" maxlength="4" required="required"> <input name="kartno3" type="text" id="kartno3" placeholder="- - - -" size="4" maxlength="4" required="required"> <input name="kartno4" type="text" id="kartno4" placeholder="- - - -" size="4" maxlength="4"required="required"></td>
    </tr>
	<tr>
	<td><strong>Son Kullanma Tarihi:</strong></td>
	<td><select name="select" id="select" required="required">
    <option>01</option>
    <option>02</option>
    <option>03</option>
    <option>04</option>
    <option>05</option>
    <option>06</option>
    <option>07</option>
    <option>08</option>
    <option>09</option>
    <option>10</option>
    <option>11</option>
    <option>12</option>
</select> 
  /
  <select name="select2" id="select2" required="required">
    <option>17</option>
    <option>18</option>
    <option>19</option>
    <option>20</option>
    <option>21</option>
    <option>22</option>
    <option>23</option>
    <option>24</option>
    <option>25</option>
    <option>26</option>
    <option>27</option>
    <option>28</option>
    <option>29</option>
    <option>30</option>
  </select></td>
	</tr>
	<tr>
	<td><strong>CVC NO:</strong></td>
	<td><input name="textfield2" type="text" id="textfield2" placeholder="***" size="3" maxlength="3" required="required"></td>
	</tr>
  </tbody>
</table>
	';
	

 
echo "<br>Koltuk No:". $_POST['btnad'];
$btnad=$_POST['btnad'];
echo "<input type=\"hidden\" name=\"btnad\" value=\"$btnad\">";
echo "<br><input type=\"submit\" name=\"btn3\" value=\"Rezerve Et\" ><input type=\"submit\" name=\"btn3\" value=\"İptal\" >";
}
if($_POST['btn2']=='HAYIR'){
echo "<br><div align=\"center\"><h4>Koltuk rezerve edilmedi.</h4></div>";
}
}
if(isset($_POST['btn'])){
$btnad=$_POST['btn'];
	$fiyat=15;
echo "<div align=\"center\"<br><h4>".$_POST['btn']." numaralı koltuğu seçtiniz. Rezerve etmek istiyor musunuz?</h4> Ödeyeceğiniz Tutar: $fiyat TL</div>";
echo '<br><div align="center"> <input type="submit" name="btn2" value="EVET"> <input type="submit" name="btn2" value="HAYIR"></div>';
echo "<input type=\"hidden\" name=\"btnad\" value=\"$btnad\">";
}
?>
</div>
</form>


<br><br><br> 
</body>

</html>
