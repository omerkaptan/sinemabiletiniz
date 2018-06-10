<?php

@$baglan=mysql_connect("www.sinemabiletiniz.com","sinemabi_admin","7154940") or die ("mysql'bağlantı kurulamadı");

mysql_select_db("sinemabi_sinema") or die("Veritabanına bağlantı kurulamadı!");

mysql_query("SET NAMES UTF8");

?>