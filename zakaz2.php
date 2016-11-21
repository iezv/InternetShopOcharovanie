<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251">


<title>Оформление заказа</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
.webstyle {
	font-style: italic;
}
</style>
</head>
<body>

<?php 
ini_set('display_errors',1);
error_reporting(0);
include("blocks/bd.php");

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

if (isset($_POST['familiya']))
{
	$familiya=$_POST['familiya'];
   $familiya=trim($familiya);
   
}

if (isset($_POST['imya']))
{
	$imya=$_POST['imya'];
	$imya=trim($imya);	
}

if (isset($_POST['telefon']))
{
	$telefon=$_POST['telefon'];
	$telefon=trim($telefon);
}
if (isset($_POST['email']))
{
	$email=$_POST['email'];
	$email=trim($email);
}
if (isset($_POST['oblast']))
{
	$oblast=$_POST['oblast'];
	$oblast=trim($oblast);
}

if (isset($_POST['gorod']))
{
	$gorod=$_POST['gorod'];
	$gorod=trim($gorod);
}

if (isset($_POST['dostavka']))
{
	$dostavka=$_POST['dostavka'];
}

if (isset($_POST['oplata']))
{
	$oplata=$_POST['oplata'];
}

printf("
<table width='800' class='main_border' align='center'>
<tr>
<td width='800' align='center' bgcolor='#D9E9C9' valign='top' class='h2'>
ВАШ ЗАКАЗ
</td>
</tr>
<td width='800' align='center' bgcolor='#D9E9C9'>

<table width='800'   align='center'> 
<tr >
<td width='45'>№<br>п/п</td>
<td width='60'>Код</td>
<td width='355'>Наименование товара</td>
<td width='100'>Цвет</td>
<td width='50'>Размер</td>
<td width='100'>Количество</td>
<td width='50'>Цена</td>
<td width='100'>Сумма</td>
</tr>");

$result = mysql_query ("SELECT * FROM korzina WHERE ip='$ip'",$db);
$myrow= mysql_fetch_array ($result);
$count=0;
$summa=0;
$nn=0;

do
{$count=$count+1;
$sum=$myrow['price']*$myrow['kolvo'];
$summa=$summa+$sum;
$nn=$nn+$myrow['kolvo'];

printf ("<tr >
<td width='45'>$count</td>
<td width='60'>$myrow[kod]</td>
<td width='355'>$myrow[name]</td>
<td width='100'>$myrow[color]</td>
<td width='50'>$myrow[size]</td>
<td width='100'>$myrow[kolvo]</td>
<td width='50'>$myrow[price]</td>
<td width='100'>$sum</td>
</tr>");}

while ($myrow=mysql_fetch_array($result));

printf("

<tr >
<td colspan='5' align='right'>ВСЕГО     </td>
<td width='50'>$nn</td>
<td width='50'> </td>
<td width='100'>$summa</td>
</tr>
<tr>
<td colspan='6' align='right'>Скидка     </td>
");

if ($summa>=500)
{$dost=0;}
else
{$dost=30;}
if ($summa>=700 and $summa<1500)
{$skid=3;}
if ($summa>=1500 and $summa<3000)
{$skid=5;}
if ($summa>=3000)
{$skid=7;}
if ($summa<700)
{$skid=0;}
$summa_sk=round($summa*$skid/100);
$summa_sk_dos=$summa-$summa_sk+$dost;


printf("
<td align='center'>$skid &#37  </td>
<td width='100' class='skid'>$summa_sk</td>
</tr>
<tr>
<td colspan='6' align='right'>Доставка     </td>
<td align='center'>  </td>
<td width='100' class='text'>$dost</td>
</tr>
<tr>
<td colspan='6' align='right'>Сумма к оплате     </td>
<td align='center'>   </td>
<td width='100' class='h3'>$summa_sk_dos</td>
</tr>");

if (($imya=='0') or ($imya==''))
	{echo "<tr><td colspan='8' align='center' class='price'>Вы забыли указать имя!</td></tr>";}
if (($familiya=='0') or ($familiya==''))
	{echo "<tr><td colspan='8' align='center' class='price'>Вы забыли указать фамилию!</td></tr>";}
if (($telefon=='0') or ($telefon==''))
	{echo "<tr><td colspan='8' align='center' class='price'>Вы забыли указать номер телефона!</td></tr>";}	
if (($email=='0') or ($email==''))
	{echo "<tr><td colspan='8' align='center' class='price'>Вы забыли указать электронный адрес!</td></tr>";}	
if (($gorod=='0') or ($gorod==''))
	{echo "<tr><td colspan='8' align='center' class='price'>Вы забыли указать город!</td></tr>";}
	
?>
</table>
</td>
</tr>
<tr align='center'> <td align='center'><input type='button' value='Вернуться назад' onClick='history.back(-1)'/>

</td></tr>
<?php 
if (($imya!='0') and ($imya!='') and($familiya!='0') and ($familiya!='') and($telefon!='0') and ($telefon!='') and ($gorod!='0') and ($gorod!='') and ($email!='0') and ($email!=''))
{printf ("
<tr>
<td width='800' align='center' bgcolor='#D9E9C9' valign='top' class='h2'>
ВАШИ ДАННЫЕ
</td>
</tr>
<td width='800' align='left' bgcolor='#D9E9C9'>

<table width='800'  border='0' align='left'> 
<tr>
<td width='150'><font class='text'> Фамилия и имя:</font></td><td width='300'>$familiya   $imya</td></tr>
<tr>
<td width='150'><font class='text'> Номер телефона:</font></td><td width='300'>$telefon </td></tr>
<tr>
<td width='150'><font class='text'> Электронный адрес:</font></td><td width='300'>$email </td></tr>
<tr>
<td width='150'><font class='text'> Область и город:</font></td><td width='300'>$oblast  $gorod</td></tr>
<tr>
<td width='150'><font class='text'> Способ доставки:</font></td><td width='300'>$dostavka</td></tr>
<form action='zakazgotov.php?e=$email&f=$familiya&i=$imya&g=$gorod&ob=$oblast&t=$telefon&o=$oplata&d=$dostavka' method=post name=form>");

if ($dostavka=='Укрпочта')
{
printf ("
<tr>
<td width='100'><font class='text'> Почтовый индекс: </font></td><td width='300'><input name='index' size='20' maxlength='20' align='left' type='text' ></td></tr>
<tr>
<td width='100'><font class='text'> Почтовый адрес <br>(улица, дом, квартира):</font></td><td width='300'><TEXTAREA name='adressa' cols='50' rows='3'></textarea></td></tr>
");}
else
{printf ("<tr>
<td width='100'><font class='text'> Номер склада:</font></td><td width='300'><input name='sklad' size='20' maxlength='20' align='left' type='text' ></td></tr>");}


printf ("
<tr>
<td width='100'><font class='text'> Способ оплаты:</font></td><td width='300'>$oplata");

if ($oplata=='предоплата')
{echo "  (реквизиты для оплаты вышлем после подготовки заказа)";}

printf ("
</td></tr>

<tr>
<td width='100'><font class='text'> Примечания к заказу:</font></td><td width='300'><TEXTAREA name='primechanie' cols='50' rows='5'></textarea></td></tr>

<td colspan='2' align='right'><input name='ok' type='submit' value='Дальше' class='h3' ></form> </td></tr>
");	
	
	
	;}
	
	
?>


</table>
</body>
</html>