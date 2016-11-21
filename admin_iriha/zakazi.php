<?php 
include("lock.php");
ini_set('display_errors',1);
error_reporting(E_ALL);
include("blocks/bd.php");
?>





<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251">


<title>ЗАКАЗЫ</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
.webstyle {
	font-style: italic;
}
</style>
</head>

<body>

<?php

if (isset($_GET['nam']))
{
$nam=$_GET['nam'];}


if (isset($_POST['stan_zakaz']))
{
$stan_zakaz=$_POST['stan_zakaz'];
}

if (isset($_GET['st']))
{
$st=$_GET['st'];
if ($st=='1')
{
$resulttt = mysql_query ("UPDATE zakaz_klient SET stan_zakaz='$stan_zakaz' WHERE nomer=$nam");
if ($resulttt=='true')
{
echo 'Информация обновлена успешно<br>';
}
else
{
echo 'Информация не обновлена<br>';
}

}

}

if (isset($_GET['del']))
{
$del=$_GET['del'];
$result_del = mysql_query ("DELETE FROM zakaz_klient WHERE nomer=$del");
$result_del2 = mysql_query ("DELETE FROM zakaz_tovari WHERE nomer=$del");
}

if (isset($_GET['red']))
{
$red=$_GET['red'];
$result_red1 = mysql_query ("SELECT * FROM zakaz_klient WHERE nomer=$red",$db);
$myrow_red1 = mysql_fetch_array ($result_red1); 
$result_red = mysql_query ("SELECT * FROM zakaz_tovari WHERE nomer=$red",$db);
$myrow_red = mysql_fetch_array ($result_red); 

{echo
"
<font class='price'>Информация по заказу  $red</font><br>
<font class='h3'>Заказчик $myrow_red1[familiya] $myrow_red1[imya]</font><br>
<form action='zakazi.php?st=1&nam=$red' method='post' name='forma'><input name='stan_zakaz' value='$myrow_red1[stan_zakaz]' type='text' size='100' maxlength='600'></input><input name='submit' type='submit' value='сохранить'></form>

<table bgcolor='#D9E9C9' width='900' align='center'  bordercolor='#008000' border='1'> 
<tr align='center'>
<td width='45'>№<br>п/п</td>
<td width='60'>Код</td>
<td width='355'>Наименование товара</td>
<td width='100'>Цвет</td>
<td width='50'>Размер</td>
<td width='100'>Количество</td>
<td width='50'>Цена</td>
<td width='100'>Сумма</td></td>
</tr>";

$count_kz=0;
$summa=0;
$nn=0;

do
{$count_kz=$count_kz+1;
$sum=$myrow_red['price']*$myrow_red['kolvo'];
$summa=$summa+$sum;
$nn=$nn+$myrow_red['kolvo'];
printf ("<tr align='center'><form action='zakazi.php' method='post' name='form'>
<td width='45'>$count_kz</td>
<td width='60'>$myrow_red[kod]</td>
<td width='355'><a href='../product.php?id=$myrow_red[kod]'> $myrow_red[name]</a></td>
<td width='100'>$myrow_red[color]</td>
<td width='50'>$myrow_red[size]</td>
<td width='100'>$myrow_red[kolvo]</td>
<td width='50'>$myrow_red[price]</td></form>
<td width='100'>$sum</td></tr>");}

while ($myrow_red=mysql_fetch_array($result_red));

printf("<tr align='center'>
<td colspan='5'>ВСЕГО</td>
<td width='50'>$nn</td>
<td width='50'>х</td>
<td width='100'>$summa</td>
<td width='100'> </td>
</tr>");}

}

?>
<table width="1000" class="main_border" align="center"><tr><td>  </td></tr></table>

<table width="1000" class="main_border" align="center">
<tr>
<td width="1000" align="center" bgcolor="#D9E9C9" valign="top" class="h2">
ЗАКАЗЫ
</td>
</tr>
<td width="1000" align="center" bgcolor="#D9E9C9" valign="top">
<table width="1000" align="center" valign="top" class="text" border='1'>
<tr >
<td width='50'>№ заказа</td>
<td width='50'>дата</td>
<td width='150'>фамилия, имя</td>
<td width='250'>адрес, доставка,<br>оплата</td>
<td width='100'>е-мейл, телефон</td>
<td width='20'>код товаров</td>
<td width='300'>наименование</td>
<td width='50'>цена</td>
<td width='50'>кол-во</td>
<td width='70'>кол-во всего</td>
<td width='50'>сумма заказа</td>
<td width='100'>примечание</td>
<td width='100'>состояние заказа</td>
<td width='60'>изменить состояние</td>
<td width='60'>удалить</td>
</tr>

<?php 
$result_kl = mysql_query ("SELECT * FROM zakaz_klient",$db);
$myrow_kl = mysql_fetch_array ($result_kl); 
$total=count($myrow_kl);

$result_zk = mysql_query ("SELECT * FROM zakaz_tovari",$db);
$myrow_zk = mysql_fetch_array ($result_zk); 

do
{
printf("
<tr >
<td width='50'>$myrow_kl[nomer]</td>
<td width='50'>$myrow_kl[data]</td>
<td width='150'>$myrow_kl[familiya] $myrow_kl[imya]</td>
<td width='250'>$myrow_kl[dostavka], $myrow_kl[oplata], $myrow_kl[gorod], $myrow_kl[adress]</td>
<td width='100'>$myrow_kl[email], $myrow_kl[telefon]</td>
<td width='50' colspan='4'>
<table>
");

$result_zk1 = mysql_query ("SELECT * FROM zakaz_tovari WHERE nomer='$myrow_kl[nomer]'",$db);
$myrow_zk1 = mysql_fetch_array ($result_zk1); 
do
{
printf ("
<tr >
<td width='20'>$myrow_zk1[kod]</td>
<td width='300' align='left'><nobr>$myrow_zk1[name] $myrow_zk1[color] $myrow_zk1[size]</nobr></td>
<td width='50'>$myrow_zk1[price]</td>
<td width='50'>$myrow_zk1[kolvo]</td></tr>

");

}
while ($myrow_zk1=mysql_fetch_array($result_zk1));



printf("
</table>
</td>
<td width='70'>$myrow_kl[kolvo]</td>
<td width='50'>$myrow_kl[summa_zak]</td>
<td width='100'>$myrow_kl[primechanie]</td>
<td width='100'>$myrow_kl[stan_zakaz]</td>
<td width='60'><A href='zakazi.php?red=$myrow_kl[nomer]'><img src='../img/conf_aux.gif' width='24' height='24' alt='редактировать'></A></td>
<td width='60'><A href='zakazi.php?del=$myrow_kl[nomer]'><img src='../img/button_delete.gif' width='21' height='21' alt='удалить'></A></td>
</tr>

");}

while ($myrow_kl=mysql_fetch_array($result_kl));
?>

</table>
</body>
</html>

