<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Başlıksız Belge</title>
</head>

<body>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<?php
echo '
<input type="hidden" name="cmd" value="_xclick" />
<input type="hidden" name="business" value="dromerkaptan@yahoo.com.tr" />
<input type="hidden" name="item_name" value="Ürün Adı" />
<input type="hidden" name="item_number" value="Ürün Numarası (ID)" />
<input type="hidden" name="currency_code" value="TRY" />
<input type="hidden" name="amount" value="15" />
<input type="hidden" name="no_shipping" value="1" />
<input type="hidden" name="shipping" value="0.00" />
<input type="hidden" name="return" value="tarih.php" />
<input type="hidden" name="cancel_return" value="tarih2.php" />
<input type="hidden" name="custom" value="Özel eklemek istedikleriniz." />
<input type="hidden" name="no_note" value="1" />
<input type="hidden" name="tax" value="0.00" />
<input type="submit" class="button" style="font-weight:normal" value="Satın Al" />
	
	'?>
</form>

<p>
  <label for="textfield">Text Field:</label>
  <input name="textfield" type="text" id="textfield" placeholder="----" size="4" maxlength="4">
</p>
<p>
  <label for="select">Select:</label>
  <select name="select" id="select">
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
  <select name="select2" id="select2">
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
  </select>
</p>
<p>
  <label for="textfield2">Text Field:</label>
  <input name="textfield2" type="text" id="textfield2" placeholder="***" size="3" maxlength="3">
sd </p>
<table width="200" border="1">
  <tbody>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
</body>
</html>