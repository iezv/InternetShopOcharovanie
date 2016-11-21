<link href="../style.css" rel="stylesheet" type="text/css">
<table width="194" border="2" cellspacing="0" cellpadding="0" align="center">
<tr>

<td width="194" bgcolor="#2A3F00" align="center" ><a href="korzinka.php?productID=0"><font class="menu"> КОРЗИНА</font></a></td>
</tr>
<tr>
<td width="194" align="center"><img src="img/cart_navy.gif" >
<br><a href="korzinka.php?productID=0">
<?php

function getRealIpAddr()
{
  if (!empty($_SERVER['HTTP_CLIENT_IP']))
  {
    $ip=$_SERVER['HTTP_CLIENT_IP'];
  }
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
  {
    $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  else
  {
    $ip=$_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}


$ip=getRealIpAddr();


$result_kz = mysql_query ("SELECT * FROM korzina WHERE ip='$ip'",$db);
$myrow_kz = mysql_fetch_array ($result_kz);
$nn=0;
$summa=0;

do
{$count_kz=$count_kz+1;
$sum=$myrow_kz['price']*$myrow_kz['kolvo'];
$summa=$summa+$sum;
$nn=$nn+$myrow_kz['kolvo'];}

while ($myrow_kz=mysql_fetch_array($result_kz));
printf( "<font class='price'>$nn </font><font class='text'>товаров <br> на сумму</font> <font class='price'>$summa </font><font class='text'>грн.</font> <br>");



?></a>
<br>
<a href="korzinka.php?productID=0"><font class='text'>Оформить заказ</font><br></a>
<p class='text'>Перед тем, как делать заказ, прочитайте пожалуйста раздел "Доставка и оплата"
</p>


 </td>
</tr>  
</table>