<?php 
include("lock.php");
ini_set('display_errors',1);
error_reporting(E_ALL);
include("blocks/bd.php");
$size = array(); 
$color = array();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251">


<title>Добавление товара</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
.webstyle {
	font-style: italic;
}
</style>
</head>
<body>



<table width="900" class="main_border" align="center">
<tr>
<td width="900" align="left" bgcolor="#D9E9C9" valign="top" class="h2">
ДОБАВЛЕНИЕ ТОВАРА
</td>
</tr>
<td width="100%" align="left" bgcolor="#D9E9C9" valign="top">
<form action="add_product.php" method="post" name="form" enctype="multipart/form-data">
<table width="100%" align="left" valign="top" class="text">
<tr>
<td width="200">Вид товара: </td>
<td>
<input name="vid" type="text" size="40" maxlength="100"></td>
</tr>
<tr>
<td>Раздел: </td>
<td><input name="katalog" type="radio" value="основной раздел" checked>основной раздел <input name="katalog" type="radio" value="распродажа">распродажа</td>
</tr>
<tr>
<td>Быстрая доставка: </td>
<td><input name="fast" type="radio" value="да" >да <input name="fast" type="radio" value="нет" checked>нет</td>
</tr>
<tr>
<td>Для кого: </td>
<td><input name="who" type="radio" value="для женщин" checked>для женщин <input name="who" type="radio" value="для мужчин">для мужчин</td>
<tr>
<td>Тип товара: </td>
<td><input name="tip" type="radio" value="белье" checked>белье <input name="tip" type="radio" value="одежда">одежда  <input name="tip" type="radio" value="купальники">купальники  <input name="tip" type="radio" value="плавки">плавки</td>
</tr>
</tr>
<tr>
<td>Торговая марка: </td>
<td><input name="tm" type="text" size="40" maxlength="100"></td>
</tr>
<tr>
<td>Модель: </td>
<td><input name="model" type="text" size="40" maxlength="100"></td>
</tr>
<tr>
<td>Цена: </td>
<td><input name="price" type="text" size="10"> грн.</td>
</tr>
<tr>
<td>Размеры: </td>
<td>
<table width='100%' align='left' valign='top' class='text'>
<tr>
<td width='100%'>для одежды<br><ul>
<input name='size[]' type='checkbox' value='S'>S   
<input name='size[]' type='checkbox' value='M'>M   
<input name='size[]' type='checkbox' value='L'>L   
<input name='size[]' type='checkbox' value='XL'>XL   
<input name='size[]' type='checkbox' value='XXL'>XXL   
<input name='size[]' type='checkbox' value='3XL'>3XL   
<input name='size[]' type='checkbox' value='4XL'>4XL   
<input name='size[]' type='checkbox' value='5XL'>5XL   
<input name='size[]' type='checkbox' value='6XL'>6XL   
<input name='size[]' type='checkbox' value='XS'>XS   
<input name='size[]' type='checkbox' value='XL/M'>XL/M   
<input name='size[]' type='checkbox' value='2XL/L'>2XL/L   
<input name='size[]' type='checkbox' value='3XL/XL'>3XL/XL   </td>
</tr>
<td width='100%'>для бюстов<br><ol>
<nobr><input name='size[]' type='checkbox' value='65A'>65A   </nobr>
<nobr><input name='size[]' type='checkbox' value='65B'>65B   </nobr>
<nobr><input name='size[]' type='checkbox' value='65C'>65C   </nobr>
<nobr><input name='size[]' type='checkbox' value='65D'>65D   </nobr>
<nobr><input name='size[]' type='checkbox' value='65DD'>65DD   </nobr>
<nobr><input name='size[]' type='checkbox' value='65E'>65E   </nobr>
<nobr><input name='size[]' type='checkbox' value='65F'>65F   </nobr><nobr>
<input name='size[]' type='checkbox' value='65FF'>65FF   </nobr>
<nobr><input name='size[]' type='checkbox' value='65G'>65G   </nobr>
<nobr><input name='size[]' type='checkbox' value='65GG'>65GG   </nobr>
<nobr><input name='size[]' type='checkbox' value='65H'>65H   </nobr>
<nobr><input name='size[]' type='checkbox' value='65HH'>65HH   </nobr><br>
<nobr><input name='size[]' type='checkbox' value='70A'>70A   </nobr>
<nobr><input name='size[]' type='checkbox' value='70B'>70B   </nobr>
<nobr><input name='size[]' type='checkbox' value='70C'>70C   </nobr>
<nobr><input name='size[]' type='checkbox' value='70D'>70D   </nobr>
<nobr><input name='size[]' type='checkbox' value='70DD'>70DD   </nobr>
<nobr><input name='size[]' type='checkbox' value='70E'>70E   </nobr>
<nobr><input name='size[]' type='checkbox' value='70F'>70F   </nobr>
<nobr><input name='size[]' type='checkbox' value='70FF'>70FF   </nobr>
<nobr><input name='size[]' type='checkbox' value='70G'>70G   </nobr>
<nobr><input name='size[]' type='checkbox' value='70GG'>70GG   </nobr>
<nobr><input name='size[]' type='checkbox' value='70H'>70H   </nobr>
<nobr><input name='size[]' type='checkbox' value='70I'>70I   </nobr>
<nobr><input name='size[]' type='checkbox' value='70J'>70J   </nobr><br>
<nobr><input name='size[]' type='checkbox' value='75A'>75A   </nobr>
<nobr><input name='size[]' type='checkbox' value='75B'>75B   </nobr>
<nobr><input name='size[]' type='checkbox' value='75C'>75C   </nobr>
<nobr><input name='size[]' type='checkbox' value='75D'>75D   </nobr>
<nobr><input name='size[]' type='checkbox' value='75DD'>75DD </nobr>
<nobr><input name='size[]' type='checkbox' value='75E'>75E   </nobr>
<nobr><input name='size[]' type='checkbox' value='75F'>75F   </nobr>
<nobr><input name='size[]' type='checkbox' value='75FF'>75FF </nobr>
<nobr><input name='size[]' type='checkbox' value='75G'>75G   </nobr>
<nobr><input name='size[]' type='checkbox' value='75GG'>75GG   </nobr>
<nobr><input name='size[]' type='checkbox' value='75H'>75H   </nobr>
<nobr><input name='size[]' type='checkbox' value='75I'>75I   </nobr>
<nobr><input name='size[]' type='checkbox' value='75J'>75J   </nobr><br>
<nobr><input name='size[]' type='checkbox' value='80A'>80A   </nobr>
<nobr><input name='size[]' type='checkbox' value='80B'>80B   </nobr>
<nobr><input name='size[]' type='checkbox' value='80C'>80C   </nobr>
<nobr><input name='size[]' type='checkbox' value='80D'>80D   </nobr>
<nobr><input name='size[]' type='checkbox' value='80DD'>80DD   </nobr>
<nobr><input name='size[]' type='checkbox' value='80E'>80E   </nobr>
<nobr><input name='size[]' type='checkbox' value='80F'>80F   </nobr>
<nobr><input name='size[]' type='checkbox' value='80FF'>80FF   </nobr>
<nobr><input name='size[]' type='checkbox' value='80G'>80G   </nobr>
<nobr><input name='size[]' type='checkbox' value='80H'>80H   </nobr>
<nobr><input name='size[]' type='checkbox' value='80I'>80I   </nobr>
<nobr><input name='size[]' type='checkbox' value='80J'>80J   </nobr>

<br>
<nobr><input name='size[]' type='checkbox' value='85A'>85A   </nobr>
<nobr><input name='size[]' type='checkbox' value='85B'>85B   </nobr>
<nobr><input name='size[]' type='checkbox' value='85C'>85C   </nobr>
<nobr><input name='size[]' type='checkbox' value='85D'>85D   </nobr>
<nobr><input name='size[]' type='checkbox' value='85DD'>85DD   </nobr>
<nobr><input name='size[]' type='checkbox' value='85E'>85E   </nobr>
<nobr><input name='size[]' type='checkbox' value='85F'>85F   </nobr>
<nobr><input name='size[]' type='checkbox' value='85FF'>85FF   </nobr>
<nobr><input name='size[]' type='checkbox' value='85G'>85G   </nobr>
<nobr><input name='size[]' type='checkbox' value='85H'>85H   </nobr>
<nobr><input name='size[]' type='checkbox' value='85I'>85I   </nobr>
<nobr><input name='size[]' type='checkbox' value='85J'>85J   </nobr>

<br>
<nobr><input name='size[]' type='checkbox' value='90B'>90B   </nobr>
<nobr><input name='size[]' type='checkbox' value='90C'>90C   </nobr>
<nobr><input name='size[]' type='checkbox' value='90D'>90D   </nobr>
<nobr><input name='size[]' type='checkbox' value='90DD'>90DD   </nobr>
<nobr><input name='size[]' type='checkbox' value='90E'>90E   </nobr>
<nobr><input name='size[]' type='checkbox' value='90F'>90F   </nobr>
<nobr><input name='size[]' type='checkbox' value='90G'>90G   </nobr>
<nobr><input name='size[]' type='checkbox' value='90H'>90H   </nobr>
<nobr><input name='size[]' type='checkbox' value='90I'>90I   </nobr>
<nobr><input name='size[]' type='checkbox' value='90J'>90J   </nobr>


<br>
<nobr><input name='size[]' type='checkbox' value='95B'>95B   </nobr>
<nobr><input name='size[]' type='checkbox' value='95C'>95C   </nobr>
<nobr><input name='size[]' type='checkbox' value='95D'>95D   </nobr>
<nobr><input name='size[]' type='checkbox' value='95DD'>95DD   </nobr>
<nobr><input name='size[]' type='checkbox' value='95E'>95E   </nobr>
<nobr><input name='size[]' type='checkbox' value='95F'>95F   </nobr>
<nobr><input name='size[]' type='checkbox' value='95G'>95G   </nobr>
<nobr><input name='size[]' type='checkbox' value='95H'>95H   </nobr>
<nobr><input name='size[]' type='checkbox' value='95I'>95I   </nobr>
<nobr><input name='size[]' type='checkbox' value='95J'>95J   </nobr>

<br>
<nobr><input name='size[]' type='checkbox' value='100B'>100B   </nobr>
<nobr><input name='size[]' type='checkbox' value='100C'>100C   </nobr>
<nobr><input name='size[]' type='checkbox' value='100D'>100D   </nobr>
<nobr><input name='size[]' type='checkbox' value='100DD'>100DD   </nobr>
<nobr><input name='size[]' type='checkbox' value='100E'>100E   </nobr>
<nobr><input name='size[]' type='checkbox' value='100F'>100F   </nobr>
<nobr><input name='size[]' type='checkbox' value='100G'>100G   </nobr>
<nobr><input name='size[]' type='checkbox' value='100H'>100H   </nobr>
<nobr><input name='size[]' type='checkbox' value='100I'>100I   </nobr>
<nobr><input name='size[]' type='checkbox' value='100J'>100J   </nobr>
<br>


<nobr><input name='size[]' type='checkbox' value='105B'>105B   </nobr>
<nobr><input name='size[]' type='checkbox' value='105C'>105C   </nobr>
<nobr><input name='size[]' type='checkbox' value='105D'>105D   </nobr>
<nobr><input name='size[]' type='checkbox' value='105E'>105E   </nobr>
<nobr><input name='size[]' type='checkbox' value='105F'>105F   </nobr>
<nobr><input name='size[]' type='checkbox' value='105G'>105G   </nobr>
<nobr><input name='size[]' type='checkbox' value='105H'>105H   </nobr>
<nobr><input name='size[]' type='checkbox' value='105I'>105I   </nobr>
<nobr><input name='size[]' type='checkbox' value='105J'>105J   </nobr>


<br>
<nobr><input name='size[]' type='checkbox' value='110B'>110B   </nobr>
<nobr><input name='size[]' type='checkbox' value='110C'>110C   </nobr>
<nobr><input name='size[]' type='checkbox' value='110D'>110D   </nobr>
<nobr><input name='size[]' type='checkbox' value='110E'>110E   </nobr>
<nobr><input name='size[]' type='checkbox' value='110F'>110F   </nobr>
<nobr><input name='size[]' type='checkbox' value='110G'>110G   </nobr>
<nobr><input name='size[]' type='checkbox' value='110H'>110H   </nobr>
<nobr><input name='size[]' type='checkbox' value='110I'>110I   </nobr>
<nobr><input name='size[]' type='checkbox' value='110J'>110J   </nobr>

<br>
<nobr><input name='size[]' type='checkbox' value='115B'>115B   </nobr>
<nobr><input name='size[]' type='checkbox' value='115C'>115C   </nobr>
<nobr><input name='size[]' type='checkbox' value='115D'>115D   </nobr>
<nobr><input name='size[]' type='checkbox' value='115E'>115E   </nobr>
<nobr><input name='size[]' type='checkbox' value='115F'>115F   </nobr>
<nobr><input name='size[]' type='checkbox' value='115G'>115G   </nobr>
<nobr><input name='size[]' type='checkbox' value='115H'>115H   </nobr>
<nobr><input name='size[]' type='checkbox' value='115I'>115I   </nobr>
<nobr><input name='size[]' type='checkbox' value='115J'>115J   </nobr>





</td>
</tr>

</table>
</td>
</tr>
<tr>
<td>Расцветка: </td>
<td>
<table width='100%' align='left' valign='top' class='text'>
<tr>
<td>
<?php 
$result = mysql_query ("SELECT colors FROM color",$db);
$myrow = mysql_fetch_array ($result); 
do
{printf ("<nobr><input name='color[]' type='checkbox' value='$myrow[colors]'>$myrow[colors]   </nobr> &shy ");}
while ($myrow=mysql_fetch_array($result));
?>
</td>
</tr>
</table>
<tr>
<td width="200">Описание: </td>
<td class="text">
<TEXTAREA name="info_prod" cols="90" rows="8"></textarea>
</td>
</tr>



<tr>
<td align="center"><input name="submit" type="submit" value="сохранить"></td>
<td align="center"><A href="index.php"><input name="nosubmit" type="button" value="отменить"></A>
</td>
</tr>
</table>
</form>


</body>
</html>
