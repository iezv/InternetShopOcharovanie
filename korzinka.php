<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251">


<title>Корзина</title>
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
error_reporting(E_ALL);
include("blocks/bd.php");

$result_price = mysql_query ("SELECT * FROM koeficient WHERE id='1'",$db);
$myrow_price= mysql_fetch_array ($result_price);

$data=date("d-m-Y H:i");

$a=$_SERVER['HTTP_REFERER'];
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

if (isset($_POST['kol']))
{
	$kol=$_POST['kol'];
	}
	
if (isset($_GET['a']))
{
	$a=$_GET['a'];
	}
if (isset($_GET['di']))
{
	$di=$_GET['di'];
	
$result = mysql_query ("DELETE FROM korzina WHERE id=$di");
if ($result=='true')
{
echo 'Товар удален успешно<br>';
}}

if (isset($_POST['ko']))
{
	$ko=$_POST['ko'];
}
if (isset($_GET['idko']))
{
	$idko=$_GET['idko'];
}

if ((isset($ko)) and (isset($idko)))
{
$resultatt = mysql_query ("UPDATE korzina SET kolvo=$ko WHERE id=$idko");
if ($resultatt=='true')
{
echo 'Информация обновлена';
}

;}

if (isset($_GET['productID']))
{
	$productID=$_GET['productID'];
	}
else {$productID=0;}
if (isset($_POST['color_vip']))
{
	$color_vip=$_POST['color_vip'];
		}
else {$color_vip=0 ;}

if (isset($_POST['size_vip']))
{	$size_vip=$_POST['size_vip'];
		}

if ((isset ($size_vip)) and $size_vip=='не указано')
    { echo "<table width='100%' height='200' bgcolor='#D9E9C9' align='center' ><tr><td class='price' align='center'>ВЫ ЗАБЫЛИ УКАЗАТЬ РАЗМЕР!</td></tr>
	</table>";}

if ($productID!=0 and $size_vip!='не указано')
{$result_s = mysql_query ("SELECT * FROM products WHERE productID=$productID",$db);
$myrow_s= mysql_fetch_array ($result_s);
$myrow_s['price']=round($myrow_s['price']*$myrow_price['kurs']*$myrow_price['kof']+$myrow_price['dost']);

$n=1;
$kod=$productID;
$name=$myrow_s['vid'].' '.$myrow_s['tm'].' '.$myrow_s['model'];
$color=$color_vip;
$size=$size_vip;
$kolvo=1;
$price=$myrow_s['price'];
$result_korz = mysql_query ("INSERT INTO korzina (data,ip,kod,name,color,size,kolvo,price) VALUES ('$data','$ip','$kod','$name','$color','$size','$kolvo','$price')");
if ($result_korz=='true')
{
echo 'Товар добавлен';
}
else
{
echo 'Товар не добавлен';
}

printf("
<table width='900' class='main_border' align='center'>
<tr>
<td width='900' align='center' bgcolor='#D9E9C9' valign='top' class='h2'>
ВАША КОРЗИНА
</td>
</tr>
<td width='900' align='center' bgcolor='#D9E9C9'>

<table width='900'  bordercolor='#008000' border='1' align='center'> 
<tr>
<td width='45'>№<br>п/п</td>
<td width='60'>Код</td>
<td width='355'>Наименование товара</td>
<td width='100'>Цвет</td>
<td width='50'>Размер</td>
<td width='100'>Количество</td>
<td width='50'>Цена</td>
<td width='100'>Сумма</td>
<td width='100'>Удалить<br>из корзины</td>
</tr>");

$result_kz = mysql_query ("SELECT * FROM korzina WHERE ip='$ip'",$db);
$myrow_kz= mysql_fetch_array ($result_kz);
$count_kz=0;
$summa=0;
$nn=0;

do
{$count_kz=$count_kz+1;
$sum=$myrow_kz['price']*$myrow_kz['kolvo'];
$summa=$summa+$sum;
$nn=$nn+$myrow_kz['kolvo'];

	printf ("<tr><form action='korzinka.php?idko=$myrow_kz[id]&a=$a' method='post' name='form'>
<td width='45'>$count_kz</td>
<td width='60'>$myrow_kz[kod]</td>
<td width='355'><a href='product.php?id=$myrow_kz[kod]'> $myrow_kz[name]</a></td>
<td width='100'>$myrow_kz[color]</td>
<td width='50'>$myrow_kz[size]</td>
<td width='100'><input name='ko' type='text' size='5' align='center' value='$myrow_kz[kolvo]'><input name='ok' value='ok' type='submit'></td>
<td width='50'>$myrow_kz[price]</td>
<td width='100'>$sum</td>
<td width='100'><a href='korzinka.php?di=$myrow_kz[id]&a=$a'><img src='img/button_delete.gif' width='21' height='21' alt='удалить'></a></td></tr></form>");}
while ($myrow_kz=mysql_fetch_array($result_kz));

printf("

<tr>
<td colspan='5'>ВСЕГО</td>
<td width='50'>$nn</td>
<td width='50'>х</td>
<td width='100'>$summa</td>
<td width='100'> </td>
</tr>
");}

if ($productID==0)
{printf
("
<table width='900' class='main_border' align='center'>
<tr>
<td width='900' align='center' bgcolor='#D9E9C9' valign='top' class='h2'>
ВАША КОРЗИНА
</td>
</tr>
<td width='900' align='center' bgcolor='#D9E9C9'>

<table width='900' align='center'  bordercolor='#008000' border='1'> 
<tr>
<td width='45'>№<br>п/п</td>
<td width='60'>Код</td>
<td width='355'>Наименование товара</td>
<td width='100'>Цвет</td>
<td width='50'>Размер</td>
<td width='100'>Количество</td>
<td width='50'>Цена</td>
<td width='100'>Сумма</td>
<td width='100'>Удалить<br>из корзины</td>
</tr>");

$result_kz = mysql_query ("SELECT * FROM korzina WHERE ip='$ip'",$db);
$myrow_kz= mysql_fetch_array ($result_kz);
$count_kz=0;
$summa=0;
$nn=0;

do
{$count_kz=$count_kz+1;
$sum=$myrow_kz['price']*$myrow_kz['kolvo'];
$summa=$summa+$sum;
$nn=$nn+$myrow_kz['kolvo'];
printf ("<tr><form action='korzinka.php?idko=$myrow_kz[id]&a=$a' method='post' name='form'>
<td width='45'>$count_kz</td>
<td width='60'>$myrow_kz[kod]</td>
<td width='355'><a href='product.php?id=$myrow_kz[kod]'> $myrow_kz[name]</a></td>
<td width='100'>$myrow_kz[color]</td>
<td width='50'>$myrow_kz[size]</td>
<td width='100'><input name='ko' type='text' size='5' align='center' value='$myrow_kz[kolvo]'><input name='ok' value='ok' type='submit'></td>

<td width='50'>$myrow_kz[price]</td></form>
<td width='100'>$sum</td>
<td width='100'><a href='korzinka.php?di=$myrow_kz[id]&a=$a'><img src='img/button_delete.gif' width='21' height='21' alt='удалить'></a></td></tr>");}

while ($myrow_kz=mysql_fetch_array($result_kz));

printf("<tr>
<td colspan='5'>ВСЕГО</td>
<td width='50'>$nn</td>
<td width='50'>х</td>
<td width='100'>$summa</td>
<td width='100'> </td>
</tr>");}

if ((isset ($nn)) and (($nn==0) or ($summa==0)))
{echo "<table width='100%' height='100' bgcolor='#D9E9C9' align='center'><tr><td class='price' align='center'>ВAША КОРЗИНА ПУСТА!</td></tr>
	</table>";}
	


?>
</table>
</td>
</tr>
<tr align="center"> <td  bgcolor='#D9E9C9' align='center'><a href="<?php echo $a?>">
<IMG src='img/vernuts.jpg' border='0' alt='Вернуться к покупкам' ></a>

<?php

if ((isset($summa)) and $summa>0 and(isset ($nn)) and $nn>0)
printf( "<a href=zakaz.php><IMG  border='0' src='img/oformit_zakaz.jpg' alt='Оформить заказ' ></a>");

?>








</td></tr>
</table>
</body>
</html>