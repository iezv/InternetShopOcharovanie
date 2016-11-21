<?php 
include("lock.php");
include("blocks/bd.php");
if (isset($_GET['s']))
{
	$s=$_GET['s'];
}
if (isset($_GET['p']))
{
	$p=$_GET['p'];
}
if (isset($_GET['r']))
{
	$r=$_GET['r'];
}
if (isset($_GET['k']))
{
	$k=$_GET['k'];
	}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251">
<title>Администрирование</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
.webstyle {
	font-style: italic;
}
</style>
</head>
<body>


<table width="1000" class="main_border" align="center">

<tr>
<td width="194" align="center" bgcolor="#D9E9C9" valign="top">


<table width="194" border="2" cellspacing="0" cellpadding="0" align="center">
<tr>
<td width="194" bgcolor="#2A3F00" align="center"><A href=zakazi.php><font class="menu">Заказы</font></A>
</td>
</tr>
<tr>
<td width="194" height="30" class="price" align="center">Всего   
<?php 
$result_kl = mysql_query ("SELECT * FROM zakaz_klient",$db);
$myrow_kl = mysql_fetch_array ($result_kl); 
$total= mysql_num_rows($result_kl); 
echo ' '.$total.' ';?>
заказов.
</td></tr>
<tr>
<td width="194" bgcolor="#2A3F00" align="center"><font class="menu">КАТАЛОГ ТМ</font>
</td>
</tr>
<tr>
<td width="194" align="center"> 
<A href="new_product.php" target="_blank">Добавить товар</A>
</td></tr>
<tr>
<td width="194" class="h3" align="center"><A href="index.php?s=ALL">Все торговые марки</A>
</td>
<tr>
<td width="194" class="h3" align="center"><A href="index.php?s=AVA">
  <img src="../img_prod/ava.jpg" border='0' width="100" height="33" alt="AVA"></A><br><A href="index.php?s=AVA&k=o">основной раздел</A><br><A href="index.php?s=AVA&k=sale">распродажа</A></td>
</tr>
<tr>
<td width="194" class="h3" align="center"><A href="index.php?s=KINGA"><img src="../img_prod/kinga.jpg" border='0'  width="100" height="33" alt="KINGA"></A><br><A href="index.php?s=KINGA&k=o">основной раздел</A><br><A href="index.php?s=KINGA&k=sale">распродажа</A>
</td>
<tr>
<td width="194" class="h3" align="center"><A href="index.php?s=CORIN"><img src="../img_prod/corin.jpg" border='0'  width="100" height="33" alt="CORIN"></A><br><A href="index.php?s=CORIN&k=o">основной раздел</A><br><A href="index.php?s=CORIN&k=sale">распродажа</A>
</td>
<tr>
<td width="194" class="h3" align="center"><A href="index.php?s=GAIA"><img src="../img_prod/gaia.jpg" border='0' width="100" height="33" alt="GAIA"></A><br><A href="index.php?s=GAIA&k=o">основной раздел</A><br><A href="index.php?s=GAIA&k=sale">распродажа</A>
</td>

<tr>
<td width="194" class="h3" align="center"><A href="index.php?s=KRIS LINE"><img src="../img_prod/kris line.jpg" border='0' width="100" height="33" alt="KRIS LINE"></A><br><A href="index.php?s=KRIS LINE&k=o">основной раздел</A><br><A href="index.php?s=KRIS LINE&k=sale">распродажа
</td>
</tr> 
<tr>
<td width="194" class="h3" align="center"><A href="index.php?s=MIRABELLE"><img src="../img_prod/mirabelle.jpg" border='0' width="100" height="33" alt="MIRABELLE"></A><br><A href="index.php?s=MIRABELLE&k=o">основной раздел</A><br><A href="index.php?s=MIRABELLE&k=sale">распродажа
</td>
</tr>

<tr>
<td width="194" class="h3" align="center"><A href="index.php?s=DOBRA NOCKA"><img src="../img_prod/dobra nocka.jpg" border='0' width="100" height="33" alt="DOBRA NOCKA"></A><br><A href="index.php?s=DOBRA NOCKA&k=o">основной раздел</A><br><A href="index.php?s=DOBRA NOCKA&k=sale">распродажа</A>
</td>
</tr> 

<tr>
<td width="194" class="h3" align="center"><A href="index.php?s=SHATO"><img src="../img_prod/shato.jpg" width="100" height="33" border='0' alt="SHATO"></A><br><A href="index.php?s=SHATO&k=o">основной раздел</A><br><A href="index.php?s=SHATO&k=sale">распродажа
</td>
</tr>

<tr>
<td width="194" class="h3" align="center"><A href="index.php?s=LUPO"><img src="../img_prod/lupo.jpg" border='0' width="100" height="33" alt="LUPO"></A><br><A href="index.php?s=LUPO&k=o">основной раздел</A><br><A href="index.php?s=LUPO&k=sale">распродажа
</td>
</tr> 

<tr>
<td width="194" class="h3" align="center"><A href="index.php?s=FABIO"><img src="../img_prod/fabio.jpg" border='0' width="100" height="33" alt="FABIO"></A><br><A href="index.php?s=FABIO&k=o">основной раздел</A><br><A href="index.php?s=FABIO&k=sale">распродажа
</td>
</tr> 


<tr>
<td width="194" class="h3" align="center"><A href="index.php?s=MITEX"><img src="../img_prod/mitex.jpg" width="100" height="33" border='0' alt="MITEX"></A><br><A href="index.php?s=MITEX&k=o">основной раздел</A><br><A href="index.php?s=MITEX&k=sale">распродажа
</td>
</tr>

<tr>
<td width="194" class="h3" align="center"><A href="index.php?s=EWANA"><img src="../img_prod/ewana.jpg" width="100" height="33" border='0' alt="EWANA"></A><br><A href="index.php?s=EWANA&k=o">основной раздел</A><br><A href="index.php?s=EWANA&k=sale">распродажа
</td>
</tr>

<tr>
<td width="194" class="h3" align="center"><A href="index.php?s=JULIMEX"><img src="../img_prod/JULIMEX.jpg" border='0' width="100" height="33" alt="JULIMEX"></A><br><A href="index.php?s=JULIMEX&k=o">основной раздел</A><br><A href="index.php?s=JULIMEX&k=sale">распродажа
</td>
</tr>

<tr>
<td width="194" class="h3" align="center"><A href="index.php?s=FAST"><img src="../img_prod/FAST.jpg" width="100" height="33" border='0' alt="БЫСТРАЯ ДОСТАВКА"></A></td>
</tr>

<tr>
<td width="194" height="33" class="h3" align="center"><A href="index.php?p=p"><font class="h3">ПРОЧЕЕ</font></A><br><A href="index.php?p=p&k=o">основной раздел</A><br><A href="index.php?p=p&k=sale">распродажа
</td></tr> 
<tr>
<td width="194" height="33" class="h3" align="center"><A href="index.php?r=r"><font class="h3">РАСПРОДАЖА</font></A>
</td></tr>       
<tr>
<td width="194" bgcolor="#2A3F00"align="center" ><font class="menu">Обложка сайта</font>
</td>
</tr>
<tr>
<td width="194" height="30" align="center"> 
<form action="update_titul.php" method="post" name="form">
<input name="n1" type="text" size="5" maxlength="10">
<input name="n2" type="text" size="5" maxlength="10">
</td>
</tr>
<tr>
<td width="194" height="30" align="center"> 
<input name="n3" type="text" size="5" maxlength="10">
<input name="n4" type="text" size="5" maxlength="10">
</td>
</tr>
<tr>
<td width="194" height="30" align="center"> 
<input name="n5" type="text" size="5" maxlength="10">
<input name="n6" type="text" size="5" maxlength="10">
</td></tr>
<tr>
<td width="194" height="30" align="center"> 
<input name="n7" type="text" size="5" maxlength="10">
<input name="n8" type="text" size="5" maxlength="10">
</td></tr>
<tr>
<td width="194" height="30" align="center"> 
<input name="n9" type="text" size="5" maxlength="10">
<input name="n10" type="text" size="5" maxlength="10">
</td></tr>
<tr>
<td align="center"><input name="submit" type="submit" value="сохранить">
</td>
</tr>

</form>
</table>

</td>

<td width="806" align="center" bgcolor="#D9E9C9" valign="top">
<table width="806" border="0"  cellspacing="0" cellpadding="0">
<tr>
<td>
<table>
<tr>
<td width="200" align="left" bgcolor="#D9E9C9" class="price" >Коэффициенты</td>
<?php
$resultk = mysql_query ("SELECT kurs, kof, dost FROM koeficient WHERE id='1'",$db);
$myrowk_kof = mysql_fetch_array ($resultk); 
?>
<td width="700" align="left" bgcolor="#D9E9C9">
<form action="update_kof.php" method="post" name="form" >
Курс <input name="kurs" type="text" size="10" maxlength="10" value="<?php echo $myrowk_kof[kurs]?>">
Коэффициент <input name="kof" type="text" size="10" maxlength="10" value="<?php echo $myrowk_kof[kof]?>">
Доставка <input name="dost" type="text" size="10" maxlength="10" value="<?php echo $myrowk_kof[dost]?>">
<input name="submit" type="submit" value="сохранить">
</form>
</td>
</tr>
</table>
<br>

<?php
include("list_product.php");
?>
</td>
</tr>
</table>
</td>
</tr>
 <tr>
 <td width="1000" colspan="3" align="center" bgcolor="#D9E9C9" class="webstyle">WebStyle Ocharovanie &copy 2012</td>
</tr>
</table>


</body>
</html>
