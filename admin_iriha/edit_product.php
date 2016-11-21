<?php 
include("lock.php");
include("blocks/bd.php");
if (isset($_GET['productID']))
{
	$productID=$_GET['productID'];
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251">


<title>Редактирование товара</title>
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
РЕДАКТИРОВАНИЕ ТОВАРА
</td>
</tr>
<?php
$resultk = mysql_query ("SELECT productID,katalog,fast,who,tip,vid,tm,model,color,size,price,info_prod,kod FROM products WHERE productID='$productID'",$db);
$myrowk = mysql_fetch_array ($resultk); 
?>
<td width="100%" align="left" bgcolor="#D9E9C9" valign="top">
<form action="update_product.php" method="post" name="form" enctype="multipart/form-data">
<table width="100%" align="left" valign="top" class="text">
<tr>
<td width="200">Номер товара: </td>
<td>
<input  name="productID" type="text" value="<?php echo $myrowk[productID]?>" size="40" maxlength="100"></td>
</tr>
<tr>
<td width="200">Вид товара: </td>
<td>
<input  name="vid" type="text" value="<?php echo $myrowk[vid]?>" size="40" maxlength="100"></td>
</tr>
<tr>
<td>Раздел: </td>
<?php 
if ($myrowk[katalog]=="основной раздел")
{ printf ("<td><input name='katalog' type='radio' value='основной раздел' checked>основной раздел  <input name='katalog' type='radio' value='распродажа'>распродажа</td>");
}
else
{ printf ("<td><input name='katalog' type='radio' value='основной раздел' >основной раздел  <input name='katalog' type='radio' value='распродажа' checked>распродажа</td>");
}
?>
</tr>
<tr>
<td>Быстрая доставка: </td>
<?php 
if ($myrowk[fast]=="да")
{ printf ("<td><input name='fast' type='radio' value='да' checked>да  <input name='fast' type='radio' value='нет'>нет</td>");
}
else
{ printf ("<td><input name='fast' type='radio' value='да' >да  <input name='fast' type='radio' value='нет' checked>нет</td>");
}
?>
</tr>
<tr>
<td>Для кого: </td>
<?php 
if ($myrowk[who]=="для женщин")
{ printf ("<td><input name='who' type='radio' value='для женщин' checked>для женщин  <input name='who' type='radio' value='для мужчин'>для мужчин</td>");
}
else
{ printf ("<td><input name='who' type='radio' value='для женщин' >для женщин  <input name='who' type='radio' value='для мужчин' checked>для мужчин</td>");}
?>
<tr>
<td>Тип товара: </td>
<?php 
if ($myrowk[tip]=="белье")
{ printf ("<td><input name='tip' type='radio' value='белье' checked>белье  
<input name='tip' type='radio' value='одежда'>одежда
<input name='tip' type='radio' value='купальники'>купальники
<input name='tip' type='radio' value='плавки'>плавки</td>");}
else
{if ($myrowk[tip]=="одежда")
{ printf ("<td><input name='tip' type='radio' value='белье'>белье  
<input name='tip' type='radio' value='одежда' checked>одежда
<input name='tip' type='radio' value='купальники'>купальники
<input name='tip' type='radio' value='плавки'>плавки</td>");}
else
{if ($myrowk[tip]=="купальники")
{ printf ("<td><input name='tip' type='radio' value='белье'>белье  
<input name='tip' type='radio' value='одежда' >одежда
<input name='tip' type='radio' value='купальники' checked>купальники
<input name='tip' type='radio' value='плавки'>плавки</td>");}
else
{if ($myrowk[tip]=="плавки")
{ printf ("<td><input name='tip' type='radio' value='белье'>белье  
<input name='tip' type='radio' value='одежда' >одежда
<input name='tip' type='radio' value='купальники'>купальники
<input name='tip' type='radio' value='плавки' checked>плавки</td>");}
else
{ printf ("<td><input name='tip' type='radio' value='белье' checked>белье  
<input name='tip' type='radio' value='одежда'>одежда
<input name='tip' type='radio' value='купальники'>купальники
<input name='tip' type='radio' value='плавки'>плавки</td>");}
}}}
?>
</tr>
<tr>
<td>Торговая марка: </td>
<td><input name="tm" type="text" size="40" maxlength="100" value="<?php echo $myrowk[tm]?>"></td>
</tr>
<tr>
<td>Модель: </td>
<td><input name="model" type="text" size="40" maxlength="100" value="<?php echo $myrowk[model]?>"></td>
</tr>
<tr>
<td>Цена: </td>
<td><input name="price" type="text" size="10" value="<?php echo $myrowk[price]?>"> грн.</td>
</tr>
<tr>
<td>Размеры: </td>
<td>
<table width='100%' align='left' valign='top' class='text'>
<tr>
<td width='100%'>для одежды<br><ul>
<?php 
list ( $sz[0], $sz[1], $sz[2], $sz[3], $sz[4],  $sz[5], $sz[6],  $sz[7], $sz[8], $sz[9], $sz[10], $sz[11], $sz[12], $sz[13], $sz[14], $sz[15], $sz[16], $sz[17],  $sz[18],  $sz[19],  $sz[20], $sz[21], $sz[22], $sz[23], $sz[24], $sz[25],  $sz[26], $sz[27],  $sz[28], $sz[29], $sz[30], $sz[31], $sz[32], $sz[33], $sz[34], $sz[35], $sz[36], $sz[37], $sz[38],  $sz[39],  $sz[40],  $sz[41], $sz[42], $sz[43], $sz[44], $sz[45], $sz[46],  $sz[47], $sz[48],  $sz[49], $sz[50], $sz[51], $sz[52], $sz[53], $sz[54], $sz[55], $sz[56], $sz[57], $sz[58], $sz[59], $sz[60], $sz[61], $sz[62], $sz[63], $sz[64], $sz[65], $sz[66], $sz[67], $sz[68],  $sz[69],  $sz[70],  $sz[71], $sz[72], $sz[73], $sz[74], $sz[75], $sz[76], $sz[77], $sz[78], $sz[79], $sz[80] ) = split(',',$myrowk[size]);
$sz[0]=trim($sz[0]);$sz[1]=trim($sz[1]);$sz[2]=trim($sz[2]);$sz[3]=trim($sz[3]);
$sz[4]=trim($sz[4]);$sz[5]=trim($sz[5]);$sz[6]=trim($sz[6]);$sz[7]=trim($sz[7]);
$sz[8]=trim($sz[8]);$sz[9]=trim($sz[9]);$sz[10]=trim($sz[10]);$sz[11]=trim($sz[11]);
$sz[12]=trim($sz[12]);$sz[13]=trim($sz[13]);$sz[14]=trim($sz[14]);$sz[15]=trim($sz[15]);
$sz[16]=trim($sz[16]);$sz[17]=trim($sz[17]);$sz[18]=trim($sz[18]);$sz[19]=trim($sz[19]);
$sz[20]=trim($sz[20]);$sz[21]=trim($sz[21]);$sz[22]=trim($sz[22]);$sz[23]=trim($sz[23]);
$sz[24]=trim($sz[24]);$sz[25]=trim($sz[25]);$sz[26]=trim($sz[26]);$sz[27]=trim($sz[27]);
$sz[28]=trim($sz[28]);$sz[29]=trim($sz[29]);$sz[30]=trim($sz[30]);$sz[31]=trim($sz[31]);
$sz[32]=trim($sz[32]);$sz[33]=trim($sz[33]);$sz[34]=trim($sz[34]);$sz[35]=trim($sz[35]);
$sz[36]=trim($sz[36]);$sz[37]=trim($sz[37]);$sz[38]=trim($sz[38]);$sz[39]=trim($sz[39]);
$sz[40]=trim($sz[40]);$sz[41]=trim($sz[41]);$sz[42]=trim($sz[42]);$sz[43]=trim($sz[43]);
$sz[44]=trim($sz[44]);$sz[45]=trim($sz[45]);$sz[46]=trim($sz[46]);$sz[47]=trim($sz[47]);
$sz[48]=trim($sz[48]);$sz[49]=trim($sz[49]);$sz[50]=trim($sz[50]);$sz[51]=trim($sz[51]);
$sz[52]=trim($sz[52]);$sz[53]=trim($sz[53]);$sz[54]=trim($sz[54]);$sz[55]=trim($sz[55]);
$sz[56]=trim($sz[56]);$sz[57]=trim($sz[57]);$sz[58]=trim($sz[58]);$sz[59]=trim($sz[59]);
$sz[60]=trim($sz[60]);$sz[61]=trim($sz[61]);$sz[62]=trim($sz[62]);$sz[63]=trim($sz[63]);
$sz[64]=trim($sz[64]);$sz[65]=trim($sz[65]);$sz[66]=trim($sz[66]);$sz[67]=trim($sz[67]);
$sz[68]=trim($sz[68]);$sz[69]=trim($sz[69]);$sz[70]=trim($sz[70]);$sz[71]=trim($sz[71]);
$sz[72]=trim($sz[72]);$sz[73]=trim($sz[73]);$sz[74]=trim($sz[74]);$sz[75]=trim($sz[75]);
$sz[76]=trim($sz[76]);$sz[77]=trim($sz[77]);$sz[78]=trim($sz[78]);$sz[79]=trim($sz[79]);

if ( $sz[0]=='S' or $sz[1]=='S' or $sz[2]=='S' or $sz[3]=='S' or $sz[4]=='S' or $sz[5]=='S' or $sz[6]=='S' or $sz[7]=='S' or $sz[8]=='S' or $sz[9]=='S' or $sz[10]=='S' or $sz[11]=='S' or $sz[12]=='S' or $sz[13]=='S' or $sz[14]=='S' or $sz[15]=='S' or $sz[16]=='S' or $sz[17]=='S' or $sz[18]=='S' or $sz[19]=='S' or $sz[20]=='S' or $sz[21]=='S' or $sz[22]=='S' or $sz[23]=='S' or $sz[24]=='S' or $sz[25]=='S' or $sz[26]=='S' or $sz[27]=='S' or $sz[28]=='S' or $sz[29]=='S' or $sz[30]=='S' or $sz[31]=='S' or $sz[32]=='S' or $sz[33]=='S' or $sz[34]=='S' or $sz[35]=='S' or $sz[36]=='S' or $sz[37]=='S' or $sz[38]=='S' or $sz[39]=='S' or $sz[40]=='S' or $sz[41]=='S' or $sz[42]=='S' or $sz[43]=='S' or $sz[44]=='S' or $sz[45]=='S' or $sz[46]=='S' or $sz[47]=='S' or $sz[48]=='S' or $sz[49]=='S' or $sz[50]=='S' or $sz[51]=='S' or $sz[52]=='S' or $sz[53]=='S' or $sz[54]=='S' or $sz[55]=='S' or $sz[56]=='S' or $sz[57]=='S' or $sz[58]=='S' or $sz[59]=='S'  or $sz[60]=='S' or $sz[61]=='S' or $sz[62]=='S' or $sz[63]=='S' or $sz[64]=='S' or $sz[65]=='S' or $sz[66]=='S' or $sz[67]=='S' or $sz[68]=='S' or $sz[69]=='S' or $sz[70]=='S' or $sz[71]=='S' or $sz[72]=='S' or $sz[73]=='S' or $sz[74]=='S' or $sz[75]=='S' or $sz[76]=='S' or $sz[77]=='S' or $sz[78]=='S' or $sz[79]=='S' or $sz[80]=='S')
{echo "<input name='size[]' type='checkbox' value='S' checked>S";}
else
{echo "<input name='size[]' type='checkbox' value='S'>S";}
if ( $sz[0]=='M' or $sz[1]=='M' or $sz[2]=='M' or $sz[3]=='M' or $sz[4]=='M' or $sz[5]=='M' or $sz[6]=='M' or $sz[7]=='M' or $sz[8]=='M' or $sz[9]=='M' or $sz[10]=='M' or $sz[11]=='M' or $sz[12]=='M' or $sz[13]=='M' or $sz[14]=='M' or $sz[15]=='M' or $sz[16]=='M' or $sz[17]=='M' or $sz[18]=='M' or $sz[19]=='M' or $sz[20]=='M' or $sz[21]=='M' or $sz[22]=='M' or $sz[23]=='M' or $sz[24]=='M' or $sz[25]=='M' or $sz[26]=='M' or $sz[27]=='M' or $sz[28]=='M' or $sz[29]=='M' or $sz[30]=='M' or $sz[31]=='M' or $sz[32]=='M' or $sz[33]=='M' or $sz[34]=='M' or $sz[35]=='M' or $sz[36]=='M' or $sz[37]=='M' or $sz[38]=='M' or $sz[39]=='M' or $sz[40]=='M' or $sz[41]=='M' or $sz[42]=='M' or $sz[43]=='M' or $sz[44]=='M' or $sz[45]=='M' or $sz[46]=='M' or $sz[47]=='M' or $sz[48]=='M' or $sz[49]=='M' or $sz[50]=='M' or $sz[51]=='M' or $sz[52]=='M' or $sz[53]=='M' or $sz[54]=='M' or $sz[55]=='M' or $sz[56]=='M' or $sz[57]=='M' or $sz[58]=='M' or $sz[59]=='M'  or $sz[60]=='M' or $sz[61]=='M' or $sz[62]=='M' or $sz[63]=='M' or $sz[64]=='M' or $sz[65]=='M' or $sz[66]=='M' or $sz[67]=='M' or $sz[68]=='M' or $sz[69]=='M' or $sz[70]=='M' or $sz[71]=='M' or $sz[72]=='M' or $sz[73]=='M' or $sz[74]=='M' or $sz[75]=='M' or $sz[76]=='M' or $sz[77]=='M' or $sz[78]=='M' or $sz[79]=='M' or $sz[80]=='M')
{echo "<input name='size[]' type='checkbox' value='M' checked>M";}
else
{echo "<input name='size[]' type='checkbox' value='M'>M";}
if ( $sz[0]=='L' or $sz[1]=='L' or $sz[2]=='L' or $sz[3]=='L' or $sz[4]=='L' or $sz[5]=='L' or $sz[6]=='L' or $sz[7]=='L' or $sz[8]=='L' or $sz[9]=='L' or $sz[10]=='L' or $sz[11]=='L' or $sz[12]=='L' or $sz[13]=='L' or $sz[14]=='L' or $sz[15]=='L' or $sz[16]=='L' or $sz[17]=='L' or $sz[18]=='L' or $sz[19]=='L' or $sz[20]=='L' or $sz[21]=='L' or $sz[22]=='L' or $sz[23]=='L' or $sz[24]=='L' or $sz[25]=='L' or $sz[26]=='L' or $sz[27]=='L' or $sz[28]=='L' or $sz[29]=='L' or $sz[30]=='L' or $sz[31]=='L' or $sz[32]=='L' or $sz[33]=='L' or $sz[34]=='L' or $sz[35]=='L' or $sz[36]=='L' or $sz[37]=='L' or $sz[38]=='L' or $sz[39]=='L' or $sz[40]=='L' or $sz[41]=='L' or $sz[42]=='L' or $sz[43]=='L' or $sz[44]=='L' or $sz[45]=='L' or $sz[46]=='L' or $sz[47]=='L' or $sz[48]=='L' or $sz[49]=='L' or $sz[50]=='L' or $sz[51]=='L' or $sz[52]=='L' or $sz[53]=='L' or $sz[54]=='L' or $sz[55]=='L' or $sz[56]=='L' or $sz[57]=='L' or $sz[58]=='L' or $sz[59]=='L'  or $sz[60]=='L' or $sz[61]=='L' or $sz[62]=='L' or $sz[63]=='L' or $sz[64]=='L' or $sz[65]=='L' or $sz[66]=='L' or $sz[67]=='L' or $sz[68]=='L' or $sz[69]=='L' or $sz[70]=='L' or $sz[71]=='L' or $sz[72]=='L' or $sz[73]=='L' or $sz[74]=='L' or $sz[75]=='L' or $sz[76]=='L' or $sz[77]=='L' or $sz[78]=='L' or $sz[79]=='L' or $sz[80]=='L')
{echo "<input name='size[]' type='checkbox' value='L' checked>L";}
else
{echo "<input name='size[]' type='checkbox' value='L'>L";}

if ( $sz[0]=='XL' or $sz[1]=='XL' or $sz[2]=='XL' or $sz[3]=='XL' or $sz[4]=='XL' or $sz[5]=='XL' or $sz[6]=='XL' or $sz[7]=='XL' or $sz[8]=='XL' or $sz[9]=='XL' or $sz[10]=='XL' or $sz[11]=='XL' or $sz[12]=='XL' or $sz[13]=='XL' or $sz[14]=='XL' or $sz[15]=='XL' or $sz[16]=='XL' or $sz[17]=='XL' or $sz[18]=='XL' or $sz[19]=='XL' or $sz[20]=='XL' or $sz[21]=='XL' or $sz[22]=='XL' or $sz[23]=='XL' or $sz[24]=='XL' or $sz[25]=='XL' or $sz[26]=='XL' or $sz[27]=='XL' or $sz[28]=='XL' or $sz[29]=='XL' or $sz[30]=='XL' or $sz[31]=='XL' or $sz[32]=='XL' or $sz[33]=='XL' or $sz[34]=='XL' or $sz[35]=='XL' or $sz[36]=='XL' or $sz[37]=='XL' or $sz[38]=='XL' or $sz[39]=='XL' or $sz[40]=='XL' or $sz[41]=='XL' or $sz[42]=='XL' or $sz[43]=='XL' or $sz[44]=='XL' or $sz[45]=='XL' or $sz[46]=='XL' or $sz[47]=='XL' or $sz[48]=='XL' or $sz[49]=='XL' or $sz[50]=='XL' or $sz[51]=='XL' or $sz[52]=='XL' or $sz[53]=='XL' or $sz[54]=='XL' or $sz[55]=='XL' or $sz[56]=='XL' or $sz[57]=='XL' or $sz[58]=='XL' or $sz[59]=='XL'  or $sz[60]=='XL' or $sz[61]=='XL' or $sz[62]=='XL' or $sz[63]=='XL' or $sz[64]=='XL' or $sz[65]=='XL' or $sz[66]=='XL' or $sz[67]=='XL' or $sz[68]=='XL' or $sz[69]=='XL' or $sz[70]=='XL' or $sz[71]=='XL' or $sz[72]=='XL' or $sz[73]=='XL' or $sz[74]=='XL' or $sz[75]=='XL' or $sz[76]=='XL' or $sz[77]=='XL' or $sz[78]=='XL' or $sz[79]=='XL' or $sz[80]=='XL')
{echo "<input name='size[]' type='checkbox' value='XL' checked>XL";}
else
{echo "<input name='size[]' type='checkbox' value='XL'>XL";}

if ( $sz[0]=='XXL' or $sz[1]=='XXL' or $sz[2]=='XXL' or $sz[3]=='XXL' or $sz[4]=='XXL' or $sz[5]=='XXL' or $sz[6]=='XXL' or $sz[7]=='XXL' or $sz[8]=='XXL' or $sz[9]=='XXL' or $sz[10]=='XXL' or $sz[11]=='XXL' or $sz[12]=='XXL' or $sz[13]=='XXL' or $sz[14]=='XXL' or $sz[15]=='XXL' or $sz[16]=='XXL' or $sz[17]=='XXL' or $sz[18]=='XXL' or $sz[19]=='XXL' or $sz[20]=='XXL' or $sz[21]=='XXL' or $sz[22]=='XXL' or $sz[23]=='XXL' or $sz[24]=='XXL' or $sz[25]=='XXL' or $sz[26]=='XXL' or $sz[27]=='XXL' or $sz[28]=='XXL' or $sz[29]=='XXL' or $sz[30]=='XXL' or $sz[31]=='XXL' or $sz[32]=='XXL' or $sz[33]=='XXL' or $sz[34]=='XXL' or $sz[35]=='XXL' or $sz[36]=='XXL' or $sz[37]=='XXL' or $sz[38]=='XXL' or $sz[39]=='XXL' or $sz[40]=='XXL' or $sz[41]=='XXL' or $sz[42]=='XXL' or $sz[43]=='XXL' or $sz[44]=='XXL' or $sz[45]=='XXL' or $sz[46]=='XXL' or $sz[47]=='XXL' or $sz[48]=='XXL' or $sz[49]=='XXL' or $sz[50]=='XXL' or $sz[51]=='XXL' or $sz[52]=='XXL' or $sz[53]=='XXL' or $sz[54]=='XXL' or $sz[55]=='XXL' or $sz[56]=='XXL' or $sz[57]=='XXL' or $sz[58]=='XXL' or $sz[59]=='XXL'  or $sz[60]=='XXL' or $sz[61]=='XXL' or $sz[62]=='XXL' or $sz[63]=='XXL' or $sz[64]=='XXL' or $sz[65]=='XXL' or $sz[66]=='XXL' or $sz[67]=='XXL' or $sz[68]=='XXL' or $sz[69]=='XXL' or $sz[70]=='XXL' or $sz[71]=='XXL' or $sz[72]=='XXL' or $sz[73]=='XXL' or $sz[74]=='XXL' or $sz[75]=='XXL' or $sz[76]=='XXL' or $sz[77]=='XXL' or $sz[78]=='XXL' or $sz[79]=='XXL' or $sz[80]=='XXL')
{echo "<input name='size[]' type='checkbox' value='XXL' checked>XXL";}
else
{echo "<input name='size[]' type='checkbox' value='XXL'>XXL";}

if ( $sz[0]=='3XL' or $sz[1]=='3XL' or $sz[2]=='3XL' or $sz[3]=='3XL' or $sz[4]=='3XL' or $sz[5]=='3XL' or $sz[6]=='3XL' or $sz[7]=='3XL' or $sz[8]=='3XL' or $sz[9]=='3XL' or $sz[10]=='3XL' or $sz[11]=='3XL' or $sz[12]=='3XL' or $sz[13]=='3XL' or $sz[14]=='3XL' or $sz[15]=='3XL' or $sz[16]=='3XL' or $sz[17]=='3XL' or $sz[18]=='3XL' or $sz[19]=='3XL' or $sz[20]=='3XL' or $sz[21]=='3XL' or $sz[22]=='3XL' or $sz[23]=='3XL' or $sz[24]=='3XL' or $sz[25]=='3XL' or $sz[26]=='3XL' or $sz[27]=='3XL' or $sz[28]=='3XL' or $sz[29]=='3XL' or $sz[30]=='3XL' or $sz[31]=='3XL' or $sz[32]=='3XL' or $sz[33]=='3XL' or $sz[34]=='3XL' or $sz[35]=='3XL' or $sz[36]=='3XL' or $sz[37]=='3XL' or $sz[38]=='3XL' or $sz[39]=='3XL' or $sz[40]=='3XL' or $sz[41]=='3XL' or $sz[42]=='3XL' or $sz[43]=='3XL' or $sz[44]=='3XL' or $sz[45]=='3XL' or $sz[46]=='3XL' or $sz[47]=='3XL' or $sz[48]=='3XL' or $sz[49]=='3XL' or $sz[50]=='3XL' or $sz[51]=='3XL' or $sz[52]=='3XL' or $sz[53]=='3XL' or $sz[54]=='3XL' or $sz[55]=='3XL' or $sz[56]=='3XL' or $sz[57]=='3XL' or $sz[58]=='3XL' or $sz[59]=='3XL'  or $sz[60]=='3XL' or $sz[61]=='3XL' or $sz[62]=='3XL' or $sz[63]=='3XL' or $sz[64]=='3XL' or $sz[65]=='3XL' or $sz[66]=='3XL' or $sz[67]=='3XL' or $sz[68]=='3XL' or $sz[69]=='3XL' or $sz[70]=='3XL' or $sz[71]=='3XL' or $sz[72]=='3XL' or $sz[73]=='3XL' or $sz[74]=='3XL' or $sz[75]=='3XL' or $sz[76]=='3XL' or $sz[77]=='3XL' or $sz[78]=='3XL' or $sz[79]=='3XL' or $sz[80]=='3XL')
{echo "<input name='size[]' type='checkbox' value='3XL' checked>3XL";}
else
{echo "<input name='size[]' type='checkbox' value='3XL'>3XL";}

if ( $sz[0]=='4XL' or $sz[1]=='4XL' or $sz[2]=='4XL' or $sz[3]=='4XL' or $sz[4]=='4XL' or $sz[5]=='4XL' or $sz[6]=='4XL' or $sz[7]=='4XL' or $sz[8]=='4XL' or $sz[9]=='4XL' or $sz[10]=='4XL' or $sz[11]=='4XL' or $sz[12]=='4XL' or $sz[13]=='4XL' or $sz[14]=='4XL' or $sz[15]=='4XL' or $sz[16]=='4XL' or $sz[17]=='4XL' or $sz[18]=='4XL' or $sz[19]=='4XL' or $sz[20]=='4XL' or $sz[21]=='4XL' or $sz[22]=='4XL' or $sz[23]=='4XL' or $sz[24]=='4XL' or $sz[25]=='4XL' or $sz[26]=='4XL' or $sz[27]=='4XL' or $sz[28]=='4XL' or $sz[29]=='4XL' or $sz[30]=='4XL' or $sz[31]=='4XL' or $sz[32]=='4XL' or $sz[33]=='4XL' or $sz[34]=='4XL' or $sz[35]=='4XL' or $sz[36]=='4XL' or $sz[37]=='4XL' or $sz[38]=='4XL' or $sz[39]=='4XL' or $sz[40]=='4XL' or $sz[41]=='4XL' or $sz[42]=='4XL' or $sz[43]=='4XL' or $sz[44]=='4XL' or $sz[45]=='4XL' or $sz[46]=='4XL' or $sz[47]=='4XL' or $sz[48]=='4XL' or $sz[49]=='4XL' or $sz[50]=='4XL' or $sz[51]=='4XL' or $sz[52]=='4XL' or $sz[53]=='4XL' or $sz[54]=='4XL' or $sz[55]=='4XL' or $sz[56]=='4XL' or $sz[57]=='4XL' or $sz[58]=='4XL' or $sz[59]=='4XL'  or $sz[60]=='4XL' or $sz[61]=='4XL' or $sz[62]=='4XL' or $sz[63]=='4XL' or $sz[64]=='4XL' or $sz[65]=='4XL' or $sz[66]=='4XL' or $sz[67]=='4XL' or $sz[68]=='4XL' or $sz[69]=='4XL' or $sz[70]=='4XL' or $sz[71]=='4XL' or $sz[72]=='4XL' or $sz[73]=='4XL' or $sz[74]=='4XL' or $sz[75]=='4XL' or $sz[76]=='4XL' or $sz[77]=='4XL' or $sz[78]=='4XL' or $sz[79]=='4XL' or $sz[80]=='4XL')
{echo "<input name='size[]' type='checkbox' value='4XL' checked>4XL";}
else
{echo "<input name='size[]' type='checkbox' value='4XL'>4XL";}


if ( $sz[0]=='5XL' or $sz[1]=='5XL' or $sz[2]=='5XL' or $sz[3]=='5XL' or $sz[4]=='5XL' or $sz[5]=='5XL' or $sz[6]=='5XL' or $sz[7]=='5XL' or $sz[8]=='5XL' or $sz[9]=='5XL' or $sz[10]=='5XL' or $sz[11]=='5XL' or $sz[12]=='5XL' or $sz[13]=='5XL' or $sz[14]=='5XL' or $sz[15]=='5XL' or $sz[16]=='5XL' or $sz[17]=='5XL' or $sz[18]=='5XL' or $sz[19]=='5XL' or $sz[20]=='5XL' or $sz[21]=='5XL' or $sz[22]=='5XL' or $sz[23]=='5XL' or $sz[24]=='5XL' or $sz[25]=='5XL' or $sz[26]=='5XL' or $sz[27]=='5XL' or $sz[28]=='5XL' or $sz[29]=='5XL' or $sz[30]=='5XL' or $sz[31]=='5XL' or $sz[32]=='5XL' or $sz[33]=='5XL' or $sz[34]=='5XL' or $sz[35]=='5XL' or $sz[36]=='5XL' or $sz[37]=='5XL' or $sz[38]=='5XL' or $sz[39]=='5XL' or $sz[40]=='5XL' or $sz[41]=='5XL' or $sz[42]=='5XL' or $sz[43]=='5XL' or $sz[44]=='5XL' or $sz[45]=='5XL' or $sz[46]=='5XL' or $sz[47]=='5XL' or $sz[48]=='5XL' or $sz[49]=='5XL' or $sz[50]=='5XL' or $sz[51]=='5XL' or $sz[52]=='5XL' or $sz[53]=='5XL' or $sz[54]=='5XL' or $sz[55]=='5XL' or $sz[56]=='5XL' or $sz[57]=='5XL' or $sz[58]=='5XL' or $sz[59]=='5XL'  or $sz[60]=='5XL' or $sz[61]=='5XL' or $sz[62]=='5XL' or $sz[63]=='5XL' or $sz[64]=='5XL' or $sz[65]=='5XL' or $sz[66]=='5XL' or $sz[67]=='5XL' or $sz[68]=='5XL' or $sz[69]=='5XL' or $sz[70]=='5XL' or $sz[71]=='5XL' or $sz[72]=='5XL' or $sz[73]=='5XL' or $sz[74]=='5XL' or $sz[75]=='5XL' or $sz[76]=='5XL' or $sz[77]=='5XL' or $sz[78]=='5XL' or $sz[79]=='5XL' or $sz[80]=='5XL')
{echo "<input name='size[]' type='checkbox' value='5XL' checked>5XL";}
else
{echo "<input name='size[]' type='checkbox' value='5XL'>5XL";}


if ( $sz[0]=='6XL' or $sz[1]=='6XL' or $sz[2]=='6XL' or $sz[3]=='6XL' or $sz[4]=='6XL' or $sz[5]=='6XL' or $sz[6]=='6XL' or $sz[7]=='6XL' or $sz[8]=='6XL' or $sz[9]=='6XL' or $sz[10]=='6XL' or $sz[11]=='6XL' or $sz[12]=='6XL' or $sz[13]=='6XL' or $sz[14]=='6XL' or $sz[15]=='6XL' or $sz[16]=='6XL' or $sz[17]=='6XL' or $sz[18]=='6XL' or $sz[19]=='6XL' or $sz[20]=='6XL' or $sz[21]=='6XL' or $sz[22]=='6XL' or $sz[23]=='6XL' or $sz[24]=='6XL' or $sz[25]=='6XL' or $sz[26]=='6XL' or $sz[27]=='6XL' or $sz[28]=='6XL' or $sz[29]=='6XL' or $sz[30]=='6XL' or $sz[31]=='6XL' or $sz[32]=='6XL' or $sz[33]=='6XL' or $sz[34]=='6XL' or $sz[35]=='6XL' or $sz[36]=='6XL' or $sz[37]=='6XL' or $sz[38]=='6XL' or $sz[39]=='6XL' or $sz[40]=='6XL' or $sz[41]=='6XL' or $sz[42]=='6XL' or $sz[43]=='6XL' or $sz[44]=='6XL' or $sz[45]=='6XL' or $sz[46]=='6XL' or $sz[47]=='6XL' or $sz[48]=='6XL' or $sz[49]=='6XL' or $sz[50]=='6XL' or $sz[51]=='6XL' or $sz[52]=='6XL' or $sz[53]=='6XL' or $sz[54]=='6XL' or $sz[55]=='6XL' or $sz[56]=='6XL' or $sz[57]=='6XL' or $sz[58]=='6XL' or $sz[59]=='6XL'  or $sz[60]=='6XL' or $sz[61]=='6XL' or $sz[62]=='6XL' or $sz[63]=='6XL' or $sz[64]=='6XL' or $sz[65]=='6XL' or $sz[66]=='6XL' or $sz[67]=='6XL' or $sz[68]=='6XL' or $sz[69]=='6XL' or $sz[70]=='6XL' or $sz[71]=='6XL' or $sz[72]=='6XL' or $sz[73]=='6XL' or $sz[74]=='6XL' or $sz[75]=='6XL' or $sz[76]=='6XL' or $sz[77]=='6XL' or $sz[78]=='6XL' or $sz[79]=='6XL' or $sz[80]=='6XL')
{echo "<input name='size[]' type='checkbox' value='6XL' checked>6XL";}
else
{echo "<input name='size[]' type='checkbox' value='6XL'>6XL";}


if ( $sz[0]=='XS' or $sz[1]=='XS' or $sz[2]=='XS' or $sz[3]=='XS' or $sz[4]=='XS' or $sz[5]=='XS' or $sz[6]=='XS' or $sz[7]=='XS' or $sz[8]=='XS' or $sz[9]=='XS' or $sz[10]=='XS' or $sz[11]=='XS' or $sz[12]=='XS' or $sz[13]=='XS' or $sz[14]=='XS' or $sz[15]=='XS' or $sz[16]=='XS' or $sz[17]=='XS' or $sz[18]=='XS' or $sz[19]=='XS' or $sz[20]=='XS' or $sz[21]=='XS' or $sz[22]=='XS' or $sz[23]=='XS' or $sz[24]=='XS' or $sz[25]=='XS' or $sz[26]=='XS' or $sz[27]=='XS' or $sz[28]=='XS' or $sz[29]=='XS' or $sz[30]=='XS' or $sz[31]=='XS' or $sz[32]=='XS' or $sz[33]=='XS' or $sz[34]=='XS' or $sz[35]=='XS' or $sz[36]=='XS' or $sz[37]=='XS' or $sz[38]=='XS' or $sz[39]=='XS' or $sz[40]=='XS' or $sz[41]=='XS' or $sz[42]=='XS' or $sz[43]=='XS' or $sz[44]=='XS' or $sz[45]=='XS' or $sz[46]=='XS' or $sz[47]=='XS' or $sz[48]=='XS' or $sz[49]=='XS' or $sz[50]=='XS' or $sz[51]=='XS' or $sz[52]=='XS' or $sz[53]=='XS' or $sz[54]=='XS' or $sz[55]=='XS' or $sz[56]=='XS' or $sz[57]=='XS' or $sz[58]=='XS' or $sz[59]=='XS'  or $sz[60]=='XS' or $sz[61]=='XS' or $sz[62]=='XS' or $sz[63]=='XS' or $sz[64]=='XS' or $sz[65]=='XS' or $sz[66]=='XS' or $sz[67]=='XS' or $sz[68]=='XS' or $sz[69]=='XS' or $sz[70]=='XS' or $sz[71]=='XS' or $sz[72]=='XS' or $sz[73]=='XS' or $sz[74]=='XS' or $sz[75]=='XS' or $sz[76]=='XS' or $sz[77]=='XS' or $sz[78]=='XS' or $sz[79]=='XS' or $sz[80]=='XS')
{echo "<input name='size[]' type='checkbox' value='XS' checked>XS";}
else
{echo "<input name='size[]' type='checkbox' value='XS'>XS";}

if ( $sz[0]=='XL/M' or $sz[1]=='XL/M' or $sz[2]=='XL/M' or $sz[3]=='XL/M' or $sz[4]=='XL/M' or $sz[5]=='XL/M' or $sz[6]=='XL/M' or $sz[7]=='XL/M' or $sz[8]=='XL/M' or $sz[9]=='XL/M' or $sz[10]=='XL/M' or $sz[11]=='XL/M' or $sz[12]=='XL/M' or $sz[13]=='XL/M' or $sz[14]=='XL/M' or $sz[15]=='XL/M' or $sz[16]=='XL/M' or $sz[17]=='XL/M' or $sz[18]=='XL/M' or $sz[19]=='XL/M' or $sz[20]=='XL/M' or $sz[21]=='XL/M' or $sz[22]=='XL/M' or $sz[23]=='XL/M' or $sz[24]=='XL/M' or $sz[25]=='XL/M' or $sz[26]=='XL/M' or $sz[27]=='XL/M' or $sz[28]=='XL/M' or $sz[29]=='XL/M' or $sz[30]=='XL/M' or $sz[31]=='XL/M' or $sz[32]=='XL/M' or $sz[33]=='XL/M' or $sz[34]=='XL/M' or $sz[35]=='XL/M' or $sz[36]=='XL/M' or $sz[37]=='XL/M' or $sz[38]=='XL/M' or $sz[39]=='XL/M' or $sz[40]=='XL/M' or $sz[41]=='XL/M' or $sz[42]=='XL/M' or $sz[43]=='XL/M' or $sz[44]=='XL/M' or $sz[45]=='XL/M' or $sz[46]=='XL/M' or $sz[47]=='XL/M' or $sz[48]=='XL/M' or $sz[49]=='XL/M' or $sz[50]=='XL/M' or $sz[51]=='XL/M' or $sz[52]=='XL/M' or $sz[53]=='XL/M' or $sz[54]=='XL/M' or $sz[55]=='XL/M' or $sz[56]=='XL/M' or $sz[57]=='XL/M' or $sz[58]=='XL/M' or $sz[59]=='XL/M'  or $sz[60]=='XL/M' or $sz[61]=='XL/M' or $sz[62]=='XL/M' or $sz[63]=='XL/M' or $sz[64]=='XL/M' or $sz[65]=='XL/M' or $sz[66]=='XL/M' or $sz[67]=='XL/M' or $sz[68]=='XL/M' or $sz[69]=='XL/M' or $sz[70]=='XL/M' or $sz[71]=='XL/M' or $sz[72]=='XL/M' or $sz[73]=='XL/M' or $sz[74]=='XL/M' or $sz[75]=='XL/M' or $sz[76]=='XL/M' or $sz[77]=='XL/M' or $sz[78]=='XL/M' or $sz[79]=='XL/M' or $sz[80]=='XL/M')
{echo "<input name='size[]' type='checkbox' value='XL/M' checked>XL/M";}
else
{echo "<input name='size[]' type='checkbox' value='XL/M'>XL/M";}

if ( $sz[0]=='2XL/L' or $sz[1]=='2XL/L' or $sz[2]=='2XL/L' or $sz[3]=='2XL/L' or $sz[4]=='2XL/L' or $sz[5]=='2XL/L' or $sz[6]=='2XL/L' or $sz[7]=='2XL/L' or $sz[8]=='2XL/L' or $sz[9]=='2XL/L' or $sz[10]=='2XL/L' or $sz[11]=='2XL/L' or $sz[12]=='2XL/L' or $sz[13]=='2XL/L' or $sz[14]=='2XL/L' or $sz[15]=='2XL/L' or $sz[16]=='2XL/L' or $sz[17]=='2XL/L' or $sz[18]=='2XL/L' or $sz[19]=='2XL/L' or $sz[20]=='2XL/L' or $sz[21]=='2XL/L' or $sz[22]=='2XL/L' or $sz[23]=='2XL/L' or $sz[24]=='2XL/L' or $sz[25]=='2XL/L' or $sz[26]=='2XL/L' or $sz[27]=='2XL/L' or $sz[28]=='2XL/L' or $sz[29]=='2XL/L' or $sz[30]=='2XL/L' or $sz[31]=='2XL/L' or $sz[32]=='2XL/L' or $sz[33]=='2XL/L' or $sz[34]=='2XL/L' or $sz[35]=='2XL/L' or $sz[36]=='2XL/L' or $sz[37]=='2XL/L' or $sz[38]=='2XL/L' or $sz[39]=='2XL/L' or $sz[40]=='2XL/L' or $sz[41]=='2XL/L' or $sz[42]=='2XL/L' or $sz[43]=='2XL/L' or $sz[44]=='2XL/L' or $sz[45]=='2XL/L' or $sz[46]=='2XL/L' or $sz[47]=='2XL/L' or $sz[48]=='2XL/L' or $sz[49]=='2XL/L' or $sz[50]=='2XL/L' or $sz[51]=='2XL/L' or $sz[52]=='2XL/L' or $sz[53]=='2XL/L' or $sz[54]=='2XL/L' or $sz[55]=='2XL/L' or $sz[56]=='2XL/L' or $sz[57]=='2XL/L' or $sz[58]=='2XL/L' or $sz[59]=='2XL/L'  or $sz[60]=='2XL/L' or $sz[61]=='2XL/L' or $sz[62]=='2XL/L' or $sz[63]=='2XL/L' or $sz[64]=='2XL/L' or $sz[65]=='2XL/L' or $sz[66]=='2XL/L' or $sz[67]=='2XL/L' or $sz[68]=='2XL/L' or $sz[69]=='2XL/L' or $sz[70]=='2XL/L' or $sz[71]=='2XL/L' or $sz[72]=='2XL/L' or $sz[73]=='2XL/L' or $sz[74]=='2XL/L' or $sz[75]=='2XL/L' or $sz[76]=='2XL/L' or $sz[77]=='2XL/L' or $sz[78]=='2XL/L' or $sz[79]=='2XL/L' or $sz[80]=='2XL/L')
{echo "<input name='size[]' type='checkbox' value='2XL/L' checked>2XL/L";}
else
{echo "<input name='size[]' type='checkbox' value='2XL/L'>2XL/L";}


if ( $sz[0]=='3XL/XL' or $sz[1]=='3XL/XL' or $sz[2]=='3XL/XL' or $sz[3]=='3XL/XL' or $sz[4]=='3XL/XL' or $sz[5]=='3XL/XL' or $sz[6]=='3XL/XL' or $sz[7]=='3XL/XL' or $sz[8]=='3XL/XL' or $sz[9]=='3XL/XL' or $sz[10]=='3XL/XL' or $sz[11]=='3XL/XL' or $sz[12]=='3XL/XL' or $sz[13]=='3XL/XL' or $sz[14]=='3XL/XL' or $sz[15]=='3XL/XL' or $sz[16]=='3XL/XL' or $sz[17]=='3XL/XL' or $sz[18]=='3XL/XL' or $sz[19]=='3XL/XL' or $sz[20]=='3XL/XL' or $sz[21]=='3XL/XL' or $sz[22]=='3XL/XL' or $sz[23]=='3XL/XL' or $sz[24]=='3XL/XL' or $sz[25]=='3XL/XL' or $sz[26]=='3XL/XL' or $sz[27]=='3XL/XL' or $sz[28]=='3XL/XL' or $sz[29]=='3XL/XL' or $sz[30]=='3XL/XL' or $sz[31]=='3XL/XL' or $sz[32]=='3XL/XL' or $sz[33]=='3XL/XL' or $sz[34]=='3XL/XL' or $sz[35]=='3XL/XL' or $sz[36]=='3XL/XL' or $sz[37]=='3XL/XL' or $sz[38]=='3XL/XL' or $sz[39]=='3XL/XL' or $sz[40]=='3XL/XL' or $sz[41]=='3XL/XL' or $sz[42]=='3XL/XL' or $sz[43]=='3XL/XL' or $sz[44]=='3XL/XL' or $sz[45]=='3XL/XL' or $sz[46]=='3XL/XL' or $sz[47]=='3XL/XL' or $sz[48]=='3XL/XL' or $sz[49]=='3XL/XL' or $sz[50]=='3XL/XL' or $sz[51]=='3XL/XL' or $sz[52]=='3XL/XL' or $sz[53]=='3XL/XL' or $sz[54]=='3XL/XL' or $sz[55]=='3XL/XL' or $sz[56]=='3XL/XL' or $sz[57]=='3XL/XL' or $sz[58]=='3XL/XL' or $sz[59]=='3XL/XL'  or $sz[60]=='3XL/XL' or $sz[61]=='3XL/XL' or $sz[62]=='3XL/XL' or $sz[63]=='3XL/XL' or $sz[64]=='3XL/XL' or $sz[65]=='3XL/XL' or $sz[66]=='3XL/XL' or $sz[67]=='3XL/XL' or $sz[68]=='3XL/XL' or $sz[69]=='3XL/XL' or $sz[70]=='3XL/XL' or $sz[71]=='3XL/XL' or $sz[72]=='3XL/XL' or $sz[73]=='3XL/XL' or $sz[74]=='3XL/XL' or $sz[75]=='3XL/XL' or $sz[76]=='3XL/XL' or $sz[77]=='3XL/XL' or $sz[78]=='3XL/XL' or $sz[79]=='3XL/XL' or $sz[80]=='3XL/XL')
{echo "<input name='size[]' type='checkbox' value='3XL/XL' checked>3XL/XL";}
else
{echo "<input name='size[]' type='checkbox' value='3XL/XL'>3XL/XL";}
?>
</td>
</tr>
<td width='100%'>для бюстов<br><ol>
<?php 

if ( $sz[0]=='65A' or $sz[1]=='65A' or $sz[2]=='65A' or $sz[3]=='65A' or $sz[4]=='65A' or $sz[5]=='65A' or $sz[6]=='65A' or $sz[7]=='65A' or $sz[8]=='65A' or $sz[9]=='65A' or $sz[10]=='65A' or $sz[11]=='65A' or $sz[12]=='65A' or $sz[13]=='65A' or $sz[14]=='65A' or $sz[15]=='65A' or $sz[16]=='65A' or $sz[17]=='65A' or $sz[18]=='65A' or $sz[19]=='65A' or $sz[20]=='65A' or $sz[21]=='65A' or $sz[22]=='65A' or $sz[23]=='65A' or $sz[24]=='65A' or $sz[25]=='65A' or $sz[26]=='65A' or $sz[27]=='65A' or $sz[28]=='65A' or $sz[29]=='65A' or $sz[30]=='65A' or $sz[31]=='65A' or $sz[32]=='65A' or $sz[33]=='65A' or $sz[34]=='65A' or $sz[35]=='65A' or $sz[36]=='65A' or $sz[37]=='65A' or $sz[38]=='65A' or $sz[39]=='65A' or $sz[40]=='65A' or $sz[41]=='65A' or $sz[42]=='65A' or $sz[43]=='65A' or $sz[44]=='65A' or $sz[45]=='65A' or $sz[46]=='65A' or $sz[47]=='65A' or $sz[48]=='65A' or $sz[49]=='65A' or $sz[50]=='65A' or $sz[51]=='65A' or $sz[52]=='65A' or $sz[53]=='65A' or $sz[54]=='65A' or $sz[55]=='65A' or $sz[56]=='65A' or $sz[57]=='65A' or $sz[58]=='65A' or $sz[59]=='65A'  or $sz[60]=='65A' or $sz[61]=='65A' or $sz[62]=='65A' or $sz[63]=='65A' or $sz[64]=='65A' or $sz[65]=='65A' or $sz[66]=='65A' or $sz[67]=='65A' or $sz[68]=='65A' or $sz[69]=='65A' or $sz[70]=='65A' or $sz[71]=='65A' or $sz[72]=='65A' or $sz[73]=='65A' or $sz[74]=='65A' or $sz[75]=='65A' or $sz[76]=='65A' or $sz[77]=='65A' or $sz[78]=='65A' or $sz[79]=='65A' or $sz[80]=='65A')
{echo "<nobr><input name='size[]' type='checkbox' value='65A' checked>65A</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='65A'>65A</nobr>";}

if ( $sz[0]=='65B' or $sz[1]=='65B' or $sz[2]=='65B' or $sz[3]=='65B' or $sz[4]=='65B' or $sz[5]=='65B' or $sz[6]=='65B' or $sz[7]=='65B' or $sz[8]=='65B' or $sz[9]=='65B' or $sz[10]=='65B' or $sz[11]=='65B' or $sz[12]=='65B' or $sz[13]=='65B' or $sz[14]=='65B' or $sz[15]=='65B' or $sz[16]=='65B' or $sz[17]=='65B' or $sz[18]=='65B' or $sz[19]=='65B' or $sz[20]=='65B' or $sz[21]=='65B' or $sz[22]=='65B' or $sz[23]=='65B' or $sz[24]=='65B' or $sz[25]=='65B' or $sz[26]=='65B' or $sz[27]=='65B' or $sz[28]=='65B' or $sz[29]=='65B' or $sz[30]=='65B' or $sz[31]=='65B' or $sz[32]=='65B' or $sz[33]=='65B' or $sz[34]=='65B' or $sz[35]=='65B' or $sz[36]=='65B' or $sz[37]=='65B' or $sz[38]=='65B' or $sz[39]=='65B' or $sz[40]=='65B' or $sz[41]=='65B' or $sz[42]=='65B' or $sz[43]=='65B' or $sz[44]=='65B' or $sz[45]=='65B' or $sz[46]=='65B' or $sz[47]=='65B' or $sz[48]=='65B' or $sz[49]=='65B' or $sz[50]=='65B' or $sz[51]=='65B' or $sz[52]=='65B' or $sz[53]=='65B' or $sz[54]=='65B' or $sz[55]=='65B' or $sz[56]=='65B' or $sz[57]=='65B' or $sz[58]=='65B' or $sz[59]=='65B'  or $sz[60]=='65B' or $sz[61]=='65B' or $sz[62]=='65B' or $sz[63]=='65B' or $sz[64]=='65B' or $sz[65]=='65B' or $sz[66]=='65B' or $sz[67]=='65B' or $sz[68]=='65B' or $sz[69]=='65B' or $sz[70]=='65B' or $sz[71]=='65B' or $sz[72]=='65B' or $sz[73]=='65B' or $sz[74]=='65B' or $sz[75]=='65B' or $sz[76]=='65B' or $sz[77]=='65B' or $sz[78]=='65B' or $sz[79]=='65B' or $sz[80]=='65B')
{echo "<nobr><input name='size[]' type='checkbox' value='65B' checked>65B</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='65B'>65B</nobr>";}

if ( $sz[0]=='65C' or $sz[1]=='65C' or $sz[2]=='65C' or $sz[3]=='65C' or $sz[4]=='65C' or $sz[5]=='65C' or $sz[6]=='65C' or $sz[7]=='65C' or $sz[8]=='65C' or $sz[9]=='65C' or $sz[10]=='65C' or $sz[11]=='65C' or $sz[12]=='65C' or $sz[13]=='65C' or $sz[14]=='65C' or $sz[15]=='65C' or $sz[16]=='65C' or $sz[17]=='65C' or $sz[18]=='65C' or $sz[19]=='65C' or $sz[20]=='65C' or $sz[21]=='65C' or $sz[22]=='65C' or $sz[23]=='65C' or $sz[24]=='65C' or $sz[25]=='65C' or $sz[26]=='65C' or $sz[27]=='65C' or $sz[28]=='65C' or $sz[29]=='65C' or $sz[30]=='65C' or $sz[31]=='65C' or $sz[32]=='65C' or $sz[33]=='65C' or $sz[34]=='65C' or $sz[35]=='65C' or $sz[36]=='65C' or $sz[37]=='65C' or $sz[38]=='65C' or $sz[39]=='65C' or $sz[40]=='65C' or $sz[41]=='65C' or $sz[42]=='65C' or $sz[43]=='65C' or $sz[44]=='65C' or $sz[45]=='65C' or $sz[46]=='65C' or $sz[47]=='65C' or $sz[48]=='65C' or $sz[49]=='65C' or $sz[50]=='65C' or $sz[51]=='65C' or $sz[52]=='65C' or $sz[53]=='65C' or $sz[54]=='65C' or $sz[55]=='65C' or $sz[56]=='65C' or $sz[57]=='65C' or $sz[58]=='65C' or $sz[59]=='65C'  or $sz[60]=='65C' or $sz[61]=='65C' or $sz[62]=='65C' or $sz[63]=='65C' or $sz[64]=='65C' or $sz[65]=='65C' or $sz[66]=='65C' or $sz[67]=='65C' or $sz[68]=='65C' or $sz[69]=='65C' or $sz[70]=='65C' or $sz[71]=='65C' or $sz[72]=='65C' or $sz[73]=='65C' or $sz[74]=='65C' or $sz[75]=='65C' or $sz[76]=='65C' or $sz[77]=='65C' or $sz[78]=='65C' or $sz[79]=='65C' or $sz[80]=='65C')
{echo "<nobr><input name='size[]' type='checkbox' value='65C' checked>65C</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='65C'>65C</nobr>";}

if ( $sz[0]=='65D' or $sz[1]=='65D' or $sz[2]=='65D' or $sz[3]=='65D' or $sz[4]=='65D' or $sz[5]=='65D' or $sz[6]=='65D' or $sz[7]=='65D' or $sz[8]=='65D' or $sz[9]=='65D' or $sz[10]=='65D' or $sz[11]=='65D' or $sz[12]=='65D' or $sz[13]=='65D' or $sz[14]=='65D' or $sz[15]=='65D' or $sz[16]=='65D' or $sz[17]=='65D' or $sz[18]=='65D' or $sz[19]=='65D' or $sz[20]=='65D' or $sz[21]=='65D' or $sz[22]=='65D' or $sz[23]=='65D' or $sz[24]=='65D' or $sz[25]=='65D' or $sz[26]=='65D' or $sz[27]=='65D' or $sz[28]=='65D' or $sz[29]=='65D' or $sz[30]=='65D' or $sz[31]=='65D' or $sz[32]=='65D' or $sz[33]=='65D' or $sz[34]=='65D' or $sz[35]=='65D' or $sz[36]=='65D' or $sz[37]=='65D' or $sz[38]=='65D' or $sz[39]=='65D' or $sz[40]=='65D' or $sz[41]=='65D' or $sz[42]=='65D' or $sz[43]=='65D' or $sz[44]=='65D' or $sz[45]=='65D' or $sz[46]=='65D' or $sz[47]=='65D' or $sz[48]=='65D' or $sz[49]=='65D' or $sz[50]=='65D' or $sz[51]=='65D' or $sz[52]=='65D' or $sz[53]=='65D' or $sz[54]=='65D' or $sz[55]=='65D' or $sz[56]=='65D' or $sz[57]=='65D' or $sz[58]=='65D' or $sz[59]=='65D'  or $sz[60]=='65D' or $sz[61]=='65D' or $sz[62]=='65D' or $sz[63]=='65D' or $sz[64]=='65D' or $sz[65]=='65D' or $sz[66]=='65D' or $sz[67]=='65D' or $sz[68]=='65D' or $sz[69]=='65D' or $sz[70]=='65D' or $sz[71]=='65D' or $sz[72]=='65D' or $sz[73]=='65D' or $sz[74]=='65D' or $sz[75]=='65D' or $sz[76]=='65D' or $sz[77]=='65D' or $sz[78]=='65D' or $sz[79]=='65D' or $sz[80]=='65D')
{echo "<nobr><input name='size[]' type='checkbox' value='65D' checked>65D</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='65D'>65D</nobr>";}

if ( $sz[0]=='65DD' or $sz[1]=='65DD' or $sz[2]=='65DD' or $sz[3]=='65DD' or $sz[4]=='65DD' or $sz[5]=='65DD' or $sz[6]=='65DD' or $sz[7]=='65DD' or $sz[8]=='65DD' or $sz[9]=='65DD' or $sz[10]=='65DD' or $sz[11]=='65DD' or $sz[12]=='65DD' or $sz[13]=='65DD' or $sz[14]=='65DD' or $sz[15]=='65DD' or $sz[16]=='65DD' or $sz[17]=='65DD' or $sz[18]=='65DD' or $sz[19]=='65DD' or $sz[20]=='65DD' or $sz[21]=='65DD' or $sz[22]=='65DD' or $sz[23]=='65DD' or $sz[24]=='65DD' or $sz[25]=='65DD' or $sz[26]=='65DD' or $sz[27]=='65DD' or $sz[28]=='65DD' or $sz[29]=='65DD' or $sz[30]=='65DD' or $sz[31]=='65DD' or $sz[32]=='65DD' or $sz[33]=='65DD' or $sz[34]=='65DD' or $sz[35]=='65DD' or $sz[36]=='65DD' or $sz[37]=='65DD' or $sz[38]=='65DD' or $sz[39]=='65DD' or $sz[40]=='65DD' or $sz[41]=='65DD' or $sz[42]=='65DD' or $sz[43]=='65DD' or $sz[44]=='65DD' or $sz[45]=='65DD' or $sz[46]=='65DD' or $sz[47]=='65DD' or $sz[48]=='65DD' or $sz[49]=='65DD' or $sz[50]=='65DD' or $sz[51]=='65DD' or $sz[52]=='65DD' or $sz[53]=='65DD' or $sz[54]=='65DD' or $sz[55]=='65DD' or $sz[56]=='65DD' or $sz[57]=='65DD' or $sz[58]=='65DD' or $sz[59]=='65DD'  or $sz[60]=='65DD' or $sz[61]=='65DD' or $sz[62]=='65DD' or $sz[63]=='65DD' or $sz[64]=='65DD' or $sz[65]=='65DD' or $sz[66]=='65DD' or $sz[67]=='65DD' or $sz[68]=='65DD' or $sz[69]=='65DD' or $sz[70]=='65DD' or $sz[71]=='65DD' or $sz[72]=='65DD' or $sz[73]=='65DD' or $sz[74]=='65DD' or $sz[75]=='65DD' or $sz[76]=='65DD' or $sz[77]=='65DD' or $sz[78]=='65DD' or $sz[79]=='65DD' or $sz[80]=='65DD')
{echo "<nobr><input name='size[]' type='checkbox' value='65DD' checked>65DD</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='65DD'>65DD</nobr>";}

if ( $sz[0]=='65E' or $sz[1]=='65E' or $sz[2]=='65E' or $sz[3]=='65E' or $sz[4]=='65E' or $sz[5]=='65E' or $sz[6]=='65E' or $sz[7]=='65E' or $sz[8]=='65E' or $sz[9]=='65E' or $sz[10]=='65E' or $sz[11]=='65E' or $sz[12]=='65E' or $sz[13]=='65E' or $sz[14]=='65E' or $sz[15]=='65E' or $sz[16]=='65E' or $sz[17]=='65E' or $sz[18]=='65E' or $sz[19]=='65E' or $sz[20]=='65E' or $sz[21]=='65E' or $sz[22]=='65E' or $sz[23]=='65E' or $sz[24]=='65E' or $sz[25]=='65E' or $sz[26]=='65E' or $sz[27]=='65E' or $sz[28]=='65E' or $sz[29]=='65E' or $sz[30]=='65E' or $sz[31]=='65E' or $sz[32]=='65E' or $sz[33]=='65E' or $sz[34]=='65E' or $sz[35]=='65E' or $sz[36]=='65E' or $sz[37]=='65E' or $sz[38]=='65E' or $sz[39]=='65E' or $sz[40]=='65E' or $sz[41]=='65E' or $sz[42]=='65E' or $sz[43]=='65E' or $sz[44]=='65E' or $sz[45]=='65E' or $sz[46]=='65E' or $sz[47]=='65E' or $sz[48]=='65E' or $sz[49]=='65E' or $sz[50]=='65E' or $sz[51]=='65E' or $sz[52]=='65E' or $sz[53]=='65E' or $sz[54]=='65E' or $sz[55]=='65E' or $sz[56]=='65E' or $sz[57]=='65E' or $sz[58]=='65E' or $sz[59]=='65E'  or $sz[60]=='65E' or $sz[61]=='65E' or $sz[62]=='65E' or $sz[63]=='65E' or $sz[64]=='65E' or $sz[65]=='65E' or $sz[66]=='65E' or $sz[67]=='65E' or $sz[68]=='65E' or $sz[69]=='65E' or $sz[70]=='65E' or $sz[71]=='65E' or $sz[72]=='65E' or $sz[73]=='65E' or $sz[74]=='65E' or $sz[75]=='65E' or $sz[76]=='65E' or $sz[77]=='65E' or $sz[78]=='65E' or $sz[79]=='65E' or $sz[80]=='65E')
{echo "<nobr><input name='size[]' type='checkbox' value='65E' checked>65E</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='65E'>65E</nobr>";}

if ( $sz[0]=='65F' or $sz[1]=='65F' or $sz[2]=='65F' or $sz[3]=='65F' or $sz[4]=='65F' or $sz[5]=='65F' or $sz[6]=='65F' or $sz[7]=='65F' or $sz[8]=='65F' or $sz[9]=='65F' or $sz[10]=='65F' or $sz[11]=='65F' or $sz[12]=='65F' or $sz[13]=='65F' or $sz[14]=='65F' or $sz[15]=='65F' or $sz[16]=='65F' or $sz[17]=='65F' or $sz[18]=='65F' or $sz[19]=='65F' or $sz[20]=='65F' or $sz[21]=='65F' or $sz[22]=='65F' or $sz[23]=='65F' or $sz[24]=='65F' or $sz[25]=='65F' or $sz[26]=='65F' or $sz[27]=='65F' or $sz[28]=='65F' or $sz[29]=='65F' or $sz[30]=='65F' or $sz[31]=='65F' or $sz[32]=='65F' or $sz[33]=='65F' or $sz[34]=='65F' or $sz[35]=='65F' or $sz[36]=='65F' or $sz[37]=='65F' or $sz[38]=='65F' or $sz[39]=='65F' or $sz[40]=='65F' or $sz[41]=='65F' or $sz[42]=='65F' or $sz[43]=='65F' or $sz[44]=='65F' or $sz[45]=='65F' or $sz[46]=='65F' or $sz[47]=='65F' or $sz[48]=='65F' or $sz[49]=='65F' or $sz[50]=='65F' or $sz[51]=='65F' or $sz[52]=='65F' or $sz[53]=='65F' or $sz[54]=='65F' or $sz[55]=='65F' or $sz[56]=='65F' or $sz[57]=='65F' or $sz[58]=='65F' or $sz[59]=='65F'  or $sz[60]=='65F' or $sz[61]=='65F' or $sz[62]=='65F' or $sz[63]=='65F' or $sz[64]=='65F' or $sz[65]=='65F' or $sz[66]=='65F' or $sz[67]=='65F' or $sz[68]=='65F' or $sz[69]=='65F' or $sz[70]=='65F' or $sz[71]=='65F' or $sz[72]=='65F' or $sz[73]=='65F' or $sz[74]=='65F' or $sz[75]=='65F' or $sz[76]=='65F' or $sz[77]=='65F' or $sz[78]=='65F' or $sz[79]=='65F' or $sz[80]=='65F')
{echo "<nobr><input name='size[]' type='checkbox' value='65F' checked>65F</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='65F'>65F</nobr>";}

if ( $sz[0]=='65FF' or $sz[1]=='65FF' or $sz[2]=='65FF' or $sz[3]=='65FF' or $sz[4]=='65FF' or $sz[5]=='65FF' or $sz[6]=='65FF' or $sz[7]=='65FF' or $sz[8]=='65FF' or $sz[9]=='65FF' or $sz[10]=='65FF' or $sz[11]=='65FF' or $sz[12]=='65FF' or $sz[13]=='65FF' or $sz[14]=='65FF' or $sz[15]=='65FF' or $sz[16]=='65FF' or $sz[17]=='65FF' or $sz[18]=='65FF' or $sz[19]=='65FF' or $sz[20]=='65FF' or $sz[21]=='65FF' or $sz[22]=='65FF' or $sz[23]=='65FF' or $sz[24]=='65FF' or $sz[25]=='65FF' or $sz[26]=='65FF' or $sz[27]=='65FF' or $sz[28]=='65FF' or $sz[29]=='65FF' or $sz[30]=='65FF' or $sz[31]=='65FF' or $sz[32]=='65FF' or $sz[33]=='65FF' or $sz[34]=='65FF' or $sz[35]=='65FF' or $sz[36]=='65FF' or $sz[37]=='65FF' or $sz[38]=='65FF' or $sz[39]=='65FF' or $sz[40]=='65FF' or $sz[41]=='65FF' or $sz[42]=='65FF' or $sz[43]=='65FF' or $sz[44]=='65FF' or $sz[45]=='65FF' or $sz[46]=='65FF' or $sz[47]=='65FF' or $sz[48]=='65FF' or $sz[49]=='65FF' or $sz[50]=='65FF' or $sz[51]=='65FF' or $sz[52]=='65FF' or $sz[53]=='65FF' or $sz[54]=='65FF' or $sz[55]=='65FF' or $sz[56]=='65FF' or $sz[57]=='65FF' or $sz[58]=='65FF' or $sz[59]=='65FF'  or $sz[60]=='65FF' or $sz[61]=='65FF' or $sz[62]=='65FF' or $sz[63]=='65FF' or $sz[64]=='65FF' or $sz[65]=='65FF' or $sz[66]=='65FF' or $sz[67]=='65FF' or $sz[68]=='65FF' or $sz[69]=='65FF' or $sz[70]=='65FF' or $sz[71]=='65FF' or $sz[72]=='65FF' or $sz[73]=='65FF' or $sz[74]=='65FF' or $sz[75]=='65FF' or $sz[76]=='65FF' or $sz[77]=='65FF' or $sz[78]=='65FF' or $sz[79]=='65FF' or $sz[80]=='65FF')
{echo "<nobr><input name='size[]' type='checkbox' value='65FF' checked>65FF</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='65FF'>65FF</nobr>";}

if ( $sz[0]=='65G' or $sz[1]=='65G' or $sz[2]=='65G' or $sz[3]=='65G' or $sz[4]=='65G' or $sz[5]=='65G' or $sz[6]=='65G' or $sz[7]=='65G' or $sz[8]=='65G' or $sz[9]=='65G' or $sz[10]=='65G' or $sz[11]=='65G' or $sz[12]=='65G' or $sz[13]=='65G' or $sz[14]=='65G' or $sz[15]=='65G' or $sz[16]=='65G' or $sz[17]=='65G' or $sz[18]=='65G' or $sz[19]=='65G' or $sz[20]=='65G' or $sz[21]=='65G' or $sz[22]=='65G' or $sz[23]=='65G' or $sz[24]=='65G' or $sz[25]=='65G' or $sz[26]=='65G' or $sz[27]=='65G' or $sz[28]=='65G' or $sz[29]=='65G' or $sz[30]=='65G' or $sz[31]=='65G' or $sz[32]=='65G' or $sz[33]=='65G' or $sz[34]=='65G' or $sz[35]=='65G' or $sz[36]=='65G' or $sz[37]=='65G' or $sz[38]=='65G' or $sz[39]=='65G' or $sz[40]=='65G' or $sz[41]=='65G' or $sz[42]=='65G' or $sz[43]=='65G' or $sz[44]=='65G' or $sz[45]=='65G' or $sz[46]=='65G' or $sz[47]=='65G' or $sz[48]=='65G' or $sz[49]=='65G' or $sz[50]=='65G' or $sz[51]=='65G' or $sz[52]=='65G' or $sz[53]=='65G' or $sz[54]=='65G' or $sz[55]=='65G' or $sz[56]=='65G' or $sz[57]=='65G' or $sz[58]=='65G' or $sz[59]=='65G'  or $sz[60]=='65G' or $sz[61]=='65G' or $sz[62]=='65G' or $sz[63]=='65G' or $sz[64]=='65G' or $sz[65]=='65G' or $sz[66]=='65G' or $sz[67]=='65G' or $sz[68]=='65G' or $sz[69]=='65G' or $sz[70]=='65G' or $sz[71]=='65G' or $sz[72]=='65G' or $sz[73]=='65G' or $sz[74]=='65G' or $sz[75]=='65G' or $sz[76]=='65G' or $sz[77]=='65G' or $sz[78]=='65G' or $sz[79]=='65G' or $sz[80]=='65G')
{echo "<nobr><input name='size[]' type='checkbox' value='65G' checked>65G</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='65G'>65G</nobr>";}

if ( $sz[0]=='65GG' or $sz[1]=='65GG' or $sz[2]=='65GG' or $sz[3]=='65GG' or $sz[4]=='65GG' or $sz[5]=='65GG' or $sz[6]=='65GG' or $sz[7]=='65GG' or $sz[8]=='65GG' or $sz[9]=='65GG' or $sz[10]=='65GG' or $sz[11]=='65GG' or $sz[12]=='65GG' or $sz[13]=='65GG' or $sz[14]=='65GG' or $sz[15]=='65GG' or $sz[16]=='65GG' or $sz[17]=='65GG' or $sz[18]=='65GG' or $sz[19]=='65GG' or $sz[20]=='65GG' or $sz[21]=='65GG' or $sz[22]=='65GG' or $sz[23]=='65GG' or $sz[24]=='65GG' or $sz[25]=='65GG' or $sz[26]=='65GG' or $sz[27]=='65GG' or $sz[28]=='65GG' or $sz[29]=='65GG' or $sz[30]=='65GG' or $sz[31]=='65GG' or $sz[32]=='65GG' or $sz[33]=='65GG' or $sz[34]=='65GG' or $sz[35]=='65GG' or $sz[36]=='65GG' or $sz[37]=='65GG' or $sz[38]=='65GG' or $sz[39]=='65GG' or $sz[40]=='65GG' or $sz[41]=='65GG' or $sz[42]=='65GG' or $sz[43]=='65GG' or $sz[44]=='65GG' or $sz[45]=='65GG' or $sz[46]=='65GG' or $sz[47]=='65GG' or $sz[48]=='65GG' or $sz[49]=='65GG' or $sz[50]=='65GG' or $sz[51]=='65GG' or $sz[52]=='65GG' or $sz[53]=='65GG' or $sz[54]=='65GG' or $sz[55]=='65GG' or $sz[56]=='65GG' or $sz[57]=='65GG' or $sz[58]=='65GG' or $sz[59]=='65GG'  or $sz[60]=='65GG' or $sz[61]=='65GG' or $sz[62]=='65GG' or $sz[63]=='65GG' or $sz[64]=='65GG' or $sz[65]=='65GG' or $sz[66]=='65GG' or $sz[67]=='65GG' or $sz[68]=='65GG' or $sz[69]=='65GG' or $sz[70]=='65GG' or $sz[71]=='65GG' or $sz[72]=='65GG' or $sz[73]=='65GG' or $sz[74]=='65GG' or $sz[75]=='65GG' or $sz[76]=='65GG' or $sz[77]=='65GG' or $sz[78]=='65GG' or $sz[79]=='65GG' or $sz[80]=='65GG')
{echo "<nobr><input name='size[]' type='checkbox' value='65GG' checked>65GG</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='65GG'>65GG</nobr>";}

if ( $sz[0]=='65H' or $sz[1]=='65H' or $sz[2]=='65H' or $sz[3]=='65H' or $sz[4]=='65H' or $sz[5]=='65H' or $sz[6]=='65H' or $sz[7]=='65H' or $sz[8]=='65H' or $sz[9]=='65H' or $sz[10]=='65H' or $sz[11]=='65H' or $sz[12]=='65H' or $sz[13]=='65H' or $sz[14]=='65H' or $sz[15]=='65H' or $sz[16]=='65H' or $sz[17]=='65H' or $sz[18]=='65H' or $sz[19]=='65H' or $sz[20]=='65H' or $sz[21]=='65H' or $sz[22]=='65H' or $sz[23]=='65H' or $sz[24]=='65H' or $sz[25]=='65H' or $sz[26]=='65H' or $sz[27]=='65H' or $sz[28]=='65H' or $sz[29]=='65H' or $sz[30]=='65H' or $sz[31]=='65H' or $sz[32]=='65H' or $sz[33]=='65H' or $sz[34]=='65H' or $sz[35]=='65H' or $sz[36]=='65H' or $sz[37]=='65H' or $sz[38]=='65H' or $sz[39]=='65H' or $sz[40]=='65H' or $sz[41]=='65H' or $sz[42]=='65H' or $sz[43]=='65H' or $sz[44]=='65H' or $sz[45]=='65H' or $sz[46]=='65H' or $sz[47]=='65H' or $sz[48]=='65H' or $sz[49]=='65H' or $sz[50]=='65H' or $sz[51]=='65H' or $sz[52]=='65H' or $sz[53]=='65H' or $sz[54]=='65H' or $sz[55]=='65H' or $sz[56]=='65H' or $sz[57]=='65H' or $sz[58]=='65H' or $sz[59]=='65H'  or $sz[60]=='65H' or $sz[61]=='65H' or $sz[62]=='65H' or $sz[63]=='65H' or $sz[64]=='65H' or $sz[65]=='65H' or $sz[66]=='65H' or $sz[67]=='65H' or $sz[68]=='65H' or $sz[69]=='65H' or $sz[70]=='65H' or $sz[71]=='65H' or $sz[72]=='65H' or $sz[73]=='65H' or $sz[74]=='65H' or $sz[75]=='65H' or $sz[76]=='65H' or $sz[77]=='65H' or $sz[78]=='65H' or $sz[79]=='65H' or $sz[80]=='65H')
{echo "<nobr><input name='size[]' type='checkbox' value='65H' checked>65H</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='65H'>65H</nobr>";}

if ( $sz[0]=='65HH' or $sz[1]=='65HH' or $sz[2]=='65HH' or $sz[3]=='65HH' or $sz[4]=='65HH' or $sz[5]=='65HH' or $sz[6]=='65HH' or $sz[7]=='65HH' or $sz[8]=='65HH' or $sz[9]=='65HH' or $sz[10]=='65HH' or $sz[11]=='65HH' or $sz[12]=='65HH' or $sz[13]=='65HH' or $sz[14]=='65HH' or $sz[15]=='65HH' or $sz[16]=='65HH' or $sz[17]=='65HH' or $sz[18]=='65HH' or $sz[19]=='65HH' or $sz[20]=='65HH' or $sz[21]=='65HH' or $sz[22]=='65HH' or $sz[23]=='65HH' or $sz[24]=='65HH' or $sz[25]=='65HH' or $sz[26]=='65HH' or $sz[27]=='65HH' or $sz[28]=='65HH' or $sz[29]=='65HH' or $sz[30]=='65HH' or $sz[31]=='65HH' or $sz[32]=='65HH' or $sz[33]=='65HH' or $sz[34]=='65HH' or $sz[35]=='65HH' or $sz[36]=='65HH' or $sz[37]=='65HH' or $sz[38]=='65HH' or $sz[39]=='65HH' or $sz[40]=='65HH' or $sz[41]=='65HH' or $sz[42]=='65HH' or $sz[43]=='65HH' or $sz[44]=='65HH' or $sz[45]=='65HH' or $sz[46]=='65HH' or $sz[47]=='65HH' or $sz[48]=='65HH' or $sz[49]=='65HH' or $sz[50]=='65HH' or $sz[51]=='65HH' or $sz[52]=='65HH' or $sz[53]=='65HH' or $sz[54]=='65HH' or $sz[55]=='65HH' or $sz[56]=='65HH' or $sz[57]=='65HH' or $sz[58]=='65HH' or $sz[59]=='65HH'  or $sz[60]=='65HH' or $sz[61]=='65HH' or $sz[62]=='65HH' or $sz[63]=='65HH' or $sz[64]=='65HH' or $sz[65]=='65HH' or $sz[66]=='65HH' or $sz[67]=='65HH' or $sz[68]=='65HH' or $sz[69]=='65HH' or $sz[70]=='65HH' or $sz[71]=='65HH' or $sz[72]=='65HH' or $sz[73]=='65HH' or $sz[74]=='65HH' or $sz[75]=='65HH' or $sz[76]=='65HH' or $sz[77]=='65HH' or $sz[78]=='65HH' or $sz[79]=='65HH' or $sz[80]=='65HH')
{echo "<nobr><input name='size[]' type='checkbox' value='65HH' checked>65HH</nobr><br>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='65HH'>65HH</nobr><br>";}

if ( $sz[0]=='70A' or $sz[1]=='70A' or $sz[2]=='70A' or $sz[3]=='70A' or $sz[4]=='70A' or $sz[5]=='70A' or $sz[6]=='70A' or $sz[7]=='70A' or $sz[8]=='70A' or $sz[9]=='70A' or $sz[10]=='70A' or $sz[11]=='70A' or $sz[12]=='70A' or $sz[13]=='70A' or $sz[14]=='70A' or $sz[15]=='70A' or $sz[16]=='70A' or $sz[17]=='70A' or $sz[18]=='70A' or $sz[19]=='70A' or $sz[20]=='70A' or $sz[21]=='70A' or $sz[22]=='70A' or $sz[23]=='70A' or $sz[24]=='70A' or $sz[25]=='70A' or $sz[26]=='70A' or $sz[27]=='70A' or $sz[28]=='70A' or $sz[29]=='70A' or $sz[30]=='70A' or $sz[31]=='70A' or $sz[32]=='70A' or $sz[33]=='70A' or $sz[34]=='70A' or $sz[35]=='70A' or $sz[36]=='70A' or $sz[37]=='70A' or $sz[38]=='70A' or $sz[39]=='70A' or $sz[40]=='70A' or $sz[41]=='70A' or $sz[42]=='70A' or $sz[43]=='70A' or $sz[44]=='70A' or $sz[45]=='70A' or $sz[46]=='70A' or $sz[47]=='70A' or $sz[48]=='70A' or $sz[49]=='70A' or $sz[50]=='70A' or $sz[51]=='70A' or $sz[52]=='70A' or $sz[53]=='70A' or $sz[54]=='70A' or $sz[55]=='70A' or $sz[56]=='70A' or $sz[57]=='70A' or $sz[58]=='70A' or $sz[59]=='70A'  or $sz[60]=='70A' or $sz[61]=='70A' or $sz[62]=='70A' or $sz[63]=='70A' or $sz[64]=='70A' or $sz[65]=='70A' or $sz[66]=='70A' or $sz[67]=='70A' or $sz[68]=='70A' or $sz[69]=='70A' or $sz[70]=='70A' or $sz[71]=='70A' or $sz[72]=='70A' or $sz[73]=='70A' or $sz[74]=='70A' or $sz[75]=='70A' or $sz[76]=='70A' or $sz[77]=='70A' or $sz[78]=='70A' or $sz[79]=='70A' or $sz[80]=='70A')
{echo "<nobr><input name='size[]' type='checkbox' value='70A' checked>70A</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='70A'>70A</nobr>";}

if ( $sz[0]=='70B' or $sz[1]=='70B' or $sz[2]=='70B' or $sz[3]=='70B' or $sz[4]=='70B' or $sz[5]=='70B' or $sz[6]=='70B' or $sz[7]=='70B' or $sz[8]=='70B' or $sz[9]=='70B' or $sz[10]=='70B' or $sz[11]=='70B' or $sz[12]=='70B' or $sz[13]=='70B' or $sz[14]=='70B' or $sz[15]=='70B' or $sz[16]=='70B' or $sz[17]=='70B' or $sz[18]=='70B' or $sz[19]=='70B' or $sz[20]=='70B' or $sz[21]=='70B' or $sz[22]=='70B' or $sz[23]=='70B' or $sz[24]=='70B' or $sz[25]=='70B' or $sz[26]=='70B' or $sz[27]=='70B' or $sz[28]=='70B' or $sz[29]=='70B' or $sz[30]=='70B' or $sz[31]=='70B' or $sz[32]=='70B' or $sz[33]=='70B' or $sz[34]=='70B' or $sz[35]=='70B' or $sz[36]=='70B' or $sz[37]=='70B' or $sz[38]=='70B' or $sz[39]=='70B' or $sz[40]=='70B' or $sz[41]=='70B' or $sz[42]=='70B' or $sz[43]=='70B' or $sz[44]=='70B' or $sz[45]=='70B' or $sz[46]=='70B' or $sz[47]=='70B' or $sz[48]=='70B' or $sz[49]=='70B' or $sz[50]=='70B' or $sz[51]=='70B' or $sz[52]=='70B' or $sz[53]=='70B' or $sz[54]=='70B' or $sz[55]=='70B' or $sz[56]=='70B' or $sz[57]=='70B' or $sz[58]=='70B' or $sz[59]=='70B'  or $sz[60]=='70B' or $sz[61]=='70B' or $sz[62]=='70B' or $sz[63]=='70B' or $sz[64]=='70B' or $sz[65]=='70B' or $sz[66]=='70B' or $sz[67]=='70B' or $sz[68]=='70B' or $sz[69]=='70B' or $sz[70]=='70B' or $sz[71]=='70B' or $sz[72]=='70B' or $sz[73]=='70B' or $sz[74]=='70B' or $sz[75]=='70B' or $sz[76]=='70B' or $sz[77]=='70B' or $sz[78]=='70B' or $sz[79]=='70B' or $sz[80]=='70B')
{echo "<nobr><input name='size[]' type='checkbox' value='70B' checked>70B</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='70B'>70B</nobr>";}


if ( $sz[0]=='70C' or $sz[1]=='70C' or $sz[2]=='70C' or $sz[3]=='70C' or $sz[4]=='70C' or $sz[5]=='70C' or $sz[6]=='70C' or $sz[7]=='70C' or $sz[8]=='70C' or $sz[9]=='70C' or $sz[10]=='70C' or $sz[11]=='70C' or $sz[12]=='70C' or $sz[13]=='70C' or $sz[14]=='70C' or $sz[15]=='70C' or $sz[16]=='70C' or $sz[17]=='70C' or $sz[18]=='70C' or $sz[19]=='70C' or $sz[20]=='70C' or $sz[21]=='70C' or $sz[22]=='70C' or $sz[23]=='70C' or $sz[24]=='70C' or $sz[25]=='70C' or $sz[26]=='70C' or $sz[27]=='70C' or $sz[28]=='70C' or $sz[29]=='70C' or $sz[30]=='70C' or $sz[31]=='70C' or $sz[32]=='70C' or $sz[33]=='70C' or $sz[34]=='70C' or $sz[35]=='70C' or $sz[36]=='70C' or $sz[37]=='70C' or $sz[38]=='70C' or $sz[39]=='70C' or $sz[40]=='70C' or $sz[41]=='70C' or $sz[42]=='70C' or $sz[43]=='70C' or $sz[44]=='70C' or $sz[45]=='70C' or $sz[46]=='70C' or $sz[47]=='70C' or $sz[48]=='70C' or $sz[49]=='70C' or $sz[50]=='70C' or $sz[51]=='70C' or $sz[52]=='70C' or $sz[53]=='70C' or $sz[54]=='70C' or $sz[55]=='70C' or $sz[56]=='70C' or $sz[57]=='70C' or $sz[58]=='70C' or $sz[59]=='70C'  or $sz[60]=='70C' or $sz[61]=='70C' or $sz[62]=='70C' or $sz[63]=='70C' or $sz[64]=='70C' or $sz[65]=='70C' or $sz[66]=='70C' or $sz[67]=='70C' or $sz[68]=='70C' or $sz[69]=='70C' or $sz[70]=='70C' or $sz[71]=='70C' or $sz[72]=='70C' or $sz[73]=='70C' or $sz[74]=='70C' or $sz[75]=='70C' or $sz[76]=='70C' or $sz[77]=='70C' or $sz[78]=='70C' or $sz[79]=='70C' or $sz[80]=='70C')
{echo "<nobr><input name='size[]' type='checkbox' value='70C' checked>70C</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='70C'>70C</nobr>";}

if ( $sz[0]=='70D' or $sz[1]=='70D' or $sz[2]=='70D' or $sz[3]=='70D' or $sz[4]=='70D' or $sz[5]=='70D' or $sz[6]=='70D' or $sz[7]=='70D' or $sz[8]=='70D' or $sz[9]=='70D' or $sz[10]=='70D' or $sz[11]=='70D' or $sz[12]=='70D' or $sz[13]=='70D' or $sz[14]=='70D' or $sz[15]=='70D' or $sz[16]=='70D' or $sz[17]=='70D' or $sz[18]=='70D' or $sz[19]=='70D' or $sz[20]=='70D' or $sz[21]=='70D' or $sz[22]=='70D' or $sz[23]=='70D' or $sz[24]=='70D' or $sz[25]=='70D' or $sz[26]=='70D' or $sz[27]=='70D' or $sz[28]=='70D' or $sz[29]=='70D' or $sz[30]=='70D' or $sz[31]=='70D' or $sz[32]=='70D' or $sz[33]=='70D' or $sz[34]=='70D' or $sz[35]=='70D' or $sz[36]=='70D' or $sz[37]=='70D' or $sz[38]=='70D' or $sz[39]=='70D' or $sz[40]=='70D' or $sz[41]=='70D' or $sz[42]=='70D' or $sz[43]=='70D' or $sz[44]=='70D' or $sz[45]=='70D' or $sz[46]=='70D' or $sz[47]=='70D' or $sz[48]=='70D' or $sz[49]=='70D' or $sz[50]=='70D' or $sz[51]=='70D' or $sz[52]=='70D' or $sz[53]=='70D' or $sz[54]=='70D' or $sz[55]=='70D' or $sz[56]=='70D' or $sz[57]=='70D' or $sz[58]=='70D' or $sz[59]=='70D'  or $sz[60]=='70D' or $sz[61]=='70D' or $sz[62]=='70D' or $sz[63]=='70D' or $sz[64]=='70D' or $sz[65]=='70D' or $sz[66]=='70D' or $sz[67]=='70D' or $sz[68]=='70D' or $sz[69]=='70D' or $sz[70]=='70D' or $sz[71]=='70D' or $sz[72]=='70D' or $sz[73]=='70D' or $sz[74]=='70D' or $sz[75]=='70D' or $sz[76]=='70D' or $sz[77]=='70D' or $sz[78]=='70D' or $sz[79]=='70D' or $sz[80]=='70D')
{echo "<nobr><input name='size[]' type='checkbox' value='70D' checked>70D</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='70D'>70D</nobr>";}

if ( $sz[0]=='70DD' or $sz[1]=='70DD' or $sz[2]=='70DD' or $sz[3]=='70DD' or $sz[4]=='70DD' or $sz[5]=='70DD' or $sz[6]=='70DD' or $sz[7]=='70DD' or $sz[8]=='70DD' or $sz[9]=='70DD' or $sz[10]=='70DD' or $sz[11]=='70DD' or $sz[12]=='70DD' or $sz[13]=='70DD' or $sz[14]=='70DD' or $sz[15]=='70DD' or $sz[16]=='70DD' or $sz[17]=='70DD' or $sz[18]=='70DD' or $sz[19]=='70DD' or $sz[20]=='70DD' or $sz[21]=='70DD' or $sz[22]=='70DD' or $sz[23]=='70DD' or $sz[24]=='70DD' or $sz[25]=='70DD' or $sz[26]=='70DD' or $sz[27]=='70DD' or $sz[28]=='70DD' or $sz[29]=='70DD' or $sz[30]=='70DD' or $sz[31]=='70DD' or $sz[32]=='70DD' or $sz[33]=='70DD' or $sz[34]=='70DD' or $sz[35]=='70DD' or $sz[36]=='70DD' or $sz[37]=='70DD' or $sz[38]=='70DD' or $sz[39]=='70DD' or $sz[40]=='70DD' or $sz[41]=='70DD' or $sz[42]=='70DD' or $sz[43]=='70DD' or $sz[44]=='70DD' or $sz[45]=='70DD' or $sz[46]=='70DD' or $sz[47]=='70DD' or $sz[48]=='70DD' or $sz[49]=='70DD' or $sz[50]=='70DD' or $sz[51]=='70DD' or $sz[52]=='70DD' or $sz[53]=='70DD' or $sz[54]=='70DD' or $sz[55]=='70DD' or $sz[56]=='70DD' or $sz[57]=='70DD' or $sz[58]=='70DD' or $sz[59]=='70DD'  or $sz[60]=='70DD' or $sz[61]=='70DD' or $sz[62]=='70DD' or $sz[63]=='70DD' or $sz[64]=='70DD' or $sz[65]=='70DD' or $sz[66]=='70DD' or $sz[67]=='70DD' or $sz[68]=='70DD' or $sz[69]=='70DD' or $sz[70]=='70DD' or $sz[71]=='70DD' or $sz[72]=='70DD' or $sz[73]=='70DD' or $sz[74]=='70DD' or $sz[75]=='70DD' or $sz[76]=='70DD' or $sz[77]=='70DD' or $sz[78]=='70DD' or $sz[79]=='70DD' or $sz[80]=='70DD')
{echo "<nobr><input name='size[]' type='checkbox' value='70DD' checked>70DD</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='70DD'>70DD</nobr>";}

if ( $sz[0]=='70E' or $sz[1]=='70E' or $sz[2]=='70E' or $sz[3]=='70E' or $sz[4]=='70E' or $sz[5]=='70E' or $sz[6]=='70E' or $sz[7]=='70E' or $sz[8]=='70E' or $sz[9]=='70E' or $sz[10]=='70E' or $sz[11]=='70E' or $sz[12]=='70E' or $sz[13]=='70E' or $sz[14]=='70E' or $sz[15]=='70E' or $sz[16]=='70E' or $sz[17]=='70E' or $sz[18]=='70E' or $sz[19]=='70E' or $sz[20]=='70E' or $sz[21]=='70E' or $sz[22]=='70E' or $sz[23]=='70E' or $sz[24]=='70E' or $sz[25]=='70E' or $sz[26]=='70E' or $sz[27]=='70E' or $sz[28]=='70E' or $sz[29]=='70E' or $sz[30]=='70E' or $sz[31]=='70E' or $sz[32]=='70E' or $sz[33]=='70E' or $sz[34]=='70E' or $sz[35]=='70E' or $sz[36]=='70E' or $sz[37]=='70E' or $sz[38]=='70E' or $sz[39]=='70E' or $sz[40]=='70E' or $sz[41]=='70E' or $sz[42]=='70E' or $sz[43]=='70E' or $sz[44]=='70E' or $sz[45]=='70E' or $sz[46]=='70E' or $sz[47]=='70E' or $sz[48]=='70E' or $sz[49]=='70E' or $sz[50]=='70E' or $sz[51]=='70E' or $sz[52]=='70E' or $sz[53]=='70E' or $sz[54]=='70E' or $sz[55]=='70E' or $sz[56]=='70E' or $sz[57]=='70E' or $sz[58]=='70E' or $sz[59]=='70E'  or $sz[60]=='70E' or $sz[61]=='70E' or $sz[62]=='70E' or $sz[63]=='70E' or $sz[64]=='70E' or $sz[65]=='70E' or $sz[66]=='70E' or $sz[67]=='70E' or $sz[68]=='70E' or $sz[69]=='70E' or $sz[70]=='70E' or $sz[71]=='70E' or $sz[72]=='70E' or $sz[73]=='70E' or $sz[74]=='70E' or $sz[75]=='70E' or $sz[76]=='70E' or $sz[77]=='70E' or $sz[78]=='70E' or $sz[79]=='70E' or $sz[80]=='70E')
{echo "<nobr><input name='size[]' type='checkbox' value='70E' checked>70E</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='70E'>70E</nobr>";}

if ( $sz[0]=='70F' or $sz[1]=='70F' or $sz[2]=='70F' or $sz[3]=='70F' or $sz[4]=='70F' or $sz[5]=='70F' or $sz[6]=='70F' or $sz[7]=='70F' or $sz[8]=='70F' or $sz[9]=='70F' or $sz[10]=='70F' or $sz[11]=='70F' or $sz[12]=='70F' or $sz[13]=='70F' or $sz[14]=='70F' or $sz[15]=='70F' or $sz[16]=='70F' or $sz[17]=='70F' or $sz[18]=='70F' or $sz[19]=='70F' or $sz[20]=='70F' or $sz[21]=='70F' or $sz[22]=='70F' or $sz[23]=='70F' or $sz[24]=='70F' or $sz[25]=='70F' or $sz[26]=='70F' or $sz[27]=='70F' or $sz[28]=='70F' or $sz[29]=='70F' or $sz[30]=='70F' or $sz[31]=='70F' or $sz[32]=='70F' or $sz[33]=='70F' or $sz[34]=='70F' or $sz[35]=='70F' or $sz[36]=='70F' or $sz[37]=='70F' or $sz[38]=='70F' or $sz[39]=='70F' or $sz[40]=='70F' or $sz[41]=='70F' or $sz[42]=='70F' or $sz[43]=='70F' or $sz[44]=='70F' or $sz[45]=='70F' or $sz[46]=='70F' or $sz[47]=='70F' or $sz[48]=='70F' or $sz[49]=='70F' or $sz[50]=='70F' or $sz[51]=='70F' or $sz[52]=='70F' or $sz[53]=='70F' or $sz[54]=='70F' or $sz[55]=='70F' or $sz[56]=='70F' or $sz[57]=='70F' or $sz[58]=='70F' or $sz[59]=='70F'  or $sz[60]=='70F' or $sz[61]=='70F' or $sz[62]=='70F' or $sz[63]=='70F' or $sz[64]=='70F' or $sz[65]=='70F' or $sz[66]=='70F' or $sz[67]=='70F' or $sz[68]=='70F' or $sz[69]=='70F' or $sz[70]=='70F' or $sz[71]=='70F' or $sz[72]=='70F' or $sz[73]=='70F' or $sz[74]=='70F' or $sz[75]=='70F' or $sz[76]=='70F' or $sz[77]=='70F' or $sz[78]=='70F' or $sz[79]=='70F' or $sz[80]=='70F')
{echo "<nobr><input name='size[]' type='checkbox' value='70F' checked>70F</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='70F'>70F</nobr>";}

if ( $sz[0]=='70FF' or $sz[1]=='70FF' or $sz[2]=='70FF' or $sz[3]=='70FF' or $sz[4]=='70FF' or $sz[5]=='70FF' or $sz[6]=='70FF' or $sz[7]=='70FF' or $sz[8]=='70FF' or $sz[9]=='70FF' or $sz[10]=='70FF' or $sz[11]=='70FF' or $sz[12]=='70FF' or $sz[13]=='70FF' or $sz[14]=='70FF' or $sz[15]=='70FF' or $sz[16]=='70FF' or $sz[17]=='70FF' or $sz[18]=='70FF' or $sz[19]=='70FF' or $sz[20]=='70FF' or $sz[21]=='70FF' or $sz[22]=='70FF' or $sz[23]=='70FF' or $sz[24]=='70FF' or $sz[25]=='70FF' or $sz[26]=='70FF' or $sz[27]=='70FF' or $sz[28]=='70FF' or $sz[29]=='70FF' or $sz[30]=='70FF' or $sz[31]=='70FF' or $sz[32]=='70FF' or $sz[33]=='70FF' or $sz[34]=='70FF' or $sz[35]=='70FF' or $sz[36]=='70FF' or $sz[37]=='70FF' or $sz[38]=='70FF' or $sz[39]=='70FF' or $sz[40]=='70FF' or $sz[41]=='70FF' or $sz[42]=='70FF' or $sz[43]=='70FF' or $sz[44]=='70FF' or $sz[45]=='70FF' or $sz[46]=='70FF' or $sz[47]=='70FF' or $sz[48]=='70FF' or $sz[49]=='70FF' or $sz[50]=='70FF' or $sz[51]=='70FF' or $sz[52]=='70FF' or $sz[53]=='70FF' or $sz[54]=='70FF' or $sz[55]=='70FF' or $sz[56]=='70FF' or $sz[57]=='70FF' or $sz[58]=='70FF' or $sz[59]=='70FF'  or $sz[60]=='70FF' or $sz[61]=='70FF' or $sz[62]=='70FF' or $sz[63]=='70FF' or $sz[64]=='70FF' or $sz[65]=='70FF' or $sz[66]=='70FF' or $sz[67]=='70FF' or $sz[68]=='70FF' or $sz[69]=='70FF' or $sz[70]=='70FF' or $sz[71]=='70FF' or $sz[72]=='70FF' or $sz[73]=='70FF' or $sz[74]=='70FF' or $sz[75]=='70FF' or $sz[76]=='70FF' or $sz[77]=='70FF' or $sz[78]=='70FF' or $sz[79]=='70FF' or $sz[80]=='70FF')
{echo "<nobr><input name='size[]' type='checkbox' value='70FF' checked>70FF</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='70FF'>70FF</nobr>";}

if ( $sz[0]=='70G' or $sz[1]=='70G' or $sz[2]=='70G' or $sz[3]=='70G' or $sz[4]=='70G' or $sz[5]=='70G' or $sz[6]=='70G' or $sz[7]=='70G' or $sz[8]=='70G' or $sz[9]=='70G' or $sz[10]=='70G' or $sz[11]=='70G' or $sz[12]=='70G' or $sz[13]=='70G' or $sz[14]=='70G' or $sz[15]=='70G' or $sz[16]=='70G' or $sz[17]=='70G' or $sz[18]=='70G' or $sz[19]=='70G' or $sz[20]=='70G' or $sz[21]=='70G' or $sz[22]=='70G' or $sz[23]=='70G' or $sz[24]=='70G' or $sz[25]=='70G' or $sz[26]=='70G' or $sz[27]=='70G' or $sz[28]=='70G' or $sz[29]=='70G' or $sz[30]=='70G' or $sz[31]=='70G' or $sz[32]=='70G' or $sz[33]=='70G' or $sz[34]=='70G' or $sz[35]=='70G' or $sz[36]=='70G' or $sz[37]=='70G' or $sz[38]=='70G' or $sz[39]=='70G' or $sz[40]=='70G' or $sz[41]=='70G' or $sz[42]=='70G' or $sz[43]=='70G' or $sz[44]=='70G' or $sz[45]=='70G' or $sz[46]=='70G' or $sz[47]=='70G' or $sz[48]=='70G' or $sz[49]=='70G' or $sz[50]=='70G' or $sz[51]=='70G' or $sz[52]=='70G' or $sz[53]=='70G' or $sz[54]=='70G' or $sz[55]=='70G' or $sz[56]=='70G' or $sz[57]=='70G' or $sz[58]=='70G' or $sz[59]=='70G'  or $sz[60]=='70G' or $sz[61]=='70G' or $sz[62]=='70G' or $sz[63]=='70G' or $sz[64]=='70G' or $sz[65]=='70G' or $sz[66]=='70G' or $sz[67]=='70G' or $sz[68]=='70G' or $sz[69]=='70G' or $sz[70]=='70G' or $sz[71]=='70G' or $sz[72]=='70G' or $sz[73]=='70G' or $sz[74]=='70G' or $sz[75]=='70G' or $sz[76]=='70G' or $sz[77]=='70G' or $sz[78]=='70G' or $sz[79]=='70G' or $sz[80]=='70G')
{echo "<nobr><input name='size[]' type='checkbox' value='70G' checked>70G</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='70G'>70G</nobr>";}

if ( $sz[0]=='70GG' or $sz[1]=='70GG' or $sz[2]=='70GG' or $sz[3]=='70GG' or $sz[4]=='70GG' or $sz[5]=='70GG' or $sz[6]=='70GG' or $sz[7]=='70GG' or $sz[8]=='70GG' or $sz[9]=='70GG' or $sz[10]=='70GG' or $sz[11]=='70GG' or $sz[12]=='70GG' or $sz[13]=='70GG' or $sz[14]=='70GG' or $sz[15]=='70GG' or $sz[16]=='70GG' or $sz[17]=='70GG' or $sz[18]=='70GG' or $sz[19]=='70GG' or $sz[20]=='70GG' or $sz[21]=='70GG' or $sz[22]=='70GG' or $sz[23]=='70GG' or $sz[24]=='70GG' or $sz[25]=='70GG' or $sz[26]=='70GG' or $sz[27]=='70GG' or $sz[28]=='70GG' or $sz[29]=='70GG' or $sz[30]=='70GG' or $sz[31]=='70GG' or $sz[32]=='70GG' or $sz[33]=='70GG' or $sz[34]=='70GG' or $sz[35]=='70GG' or $sz[36]=='70GG' or $sz[37]=='70GG' or $sz[38]=='70GG' or $sz[39]=='70GG' or $sz[40]=='70GG' or $sz[41]=='70GG' or $sz[42]=='70GG' or $sz[43]=='70GG' or $sz[44]=='70GG' or $sz[45]=='70GG' or $sz[46]=='70GG' or $sz[47]=='70GG' or $sz[48]=='70GG' or $sz[49]=='70GG' or $sz[50]=='70GG' or $sz[51]=='70GG' or $sz[52]=='70GG' or $sz[53]=='70GG' or $sz[54]=='70GG' or $sz[55]=='70GG' or $sz[56]=='70GG' or $sz[57]=='70GG' or $sz[58]=='70GG' or $sz[59]=='70GG'  or $sz[60]=='70GG' or $sz[61]=='70GG' or $sz[62]=='70GG' or $sz[63]=='70GG' or $sz[64]=='70GG' or $sz[65]=='70GG' or $sz[66]=='70GG' or $sz[67]=='70GG' or $sz[68]=='70GG' or $sz[69]=='70GG' or $sz[70]=='70GG' or $sz[71]=='70GG' or $sz[72]=='70GG' or $sz[73]=='70GG' or $sz[74]=='70GG' or $sz[75]=='70GG' or $sz[76]=='70GG' or $sz[77]=='70GG' or $sz[78]=='70GG' or $sz[79]=='70GG' or $sz[80]=='70GG')
{echo "<nobr><input name='size[]' type='checkbox' value='70GG' checked>70GG</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='70GG'>70GG</nobr>";}

if ( $sz[0]=='70H' or $sz[1]=='70H' or $sz[2]=='70H' or $sz[3]=='70H' or $sz[4]=='70H' or $sz[5]=='70H' or $sz[6]=='70H' or $sz[7]=='70H' or $sz[8]=='70H' or $sz[9]=='70H' or $sz[10]=='70H' or $sz[11]=='70H' or $sz[12]=='70H' or $sz[13]=='70H' or $sz[14]=='70H' or $sz[15]=='70H' or $sz[16]=='70H' or $sz[17]=='70H' or $sz[18]=='70H' or $sz[19]=='70H' or $sz[20]=='70H' or $sz[21]=='70H' or $sz[22]=='70H' or $sz[23]=='70H' or $sz[24]=='70H' or $sz[25]=='70H' or $sz[26]=='70H' or $sz[27]=='70H' or $sz[28]=='70H' or $sz[29]=='70H' or $sz[30]=='70H' or $sz[31]=='70H' or $sz[32]=='70H' or $sz[33]=='70H' or $sz[34]=='70H' or $sz[35]=='70H' or $sz[36]=='70H' or $sz[37]=='70H' or $sz[38]=='70H' or $sz[39]=='70H' or $sz[40]=='70H' or $sz[41]=='70H' or $sz[42]=='70H' or $sz[43]=='70H' or $sz[44]=='70H' or $sz[45]=='70H' or $sz[46]=='70H' or $sz[47]=='70H' or $sz[48]=='70H' or $sz[49]=='70H' or $sz[50]=='70H' or $sz[51]=='70H' or $sz[52]=='70H' or $sz[53]=='70H' or $sz[54]=='70H' or $sz[55]=='70H' or $sz[56]=='70H' or $sz[57]=='70H' or $sz[58]=='70H' or $sz[59]=='70H'  or $sz[60]=='70H' or $sz[61]=='70H' or $sz[62]=='70H' or $sz[63]=='70H' or $sz[64]=='70H' or $sz[65]=='70H' or $sz[66]=='70H' or $sz[67]=='70H' or $sz[68]=='70H' or $sz[69]=='70H' or $sz[70]=='70H' or $sz[71]=='70H' or $sz[72]=='70H' or $sz[73]=='70H' or $sz[74]=='70H' or $sz[75]=='70H' or $sz[76]=='70H' or $sz[77]=='70H' or $sz[78]=='70H' or $sz[79]=='70H' or $sz[80]=='70H')
{echo "<nobr><input name='size[]' type='checkbox' value='70H' checked>70H</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='70H'>70H</nobr>";}

if ( $sz[0]=='70I' or $sz[1]=='70I' or $sz[2]=='70I' or $sz[3]=='70I' or $sz[4]=='70I' or $sz[5]=='70I' or $sz[6]=='70I' or $sz[7]=='70I' or $sz[8]=='70I' or $sz[9]=='70I' or $sz[10]=='70I' or $sz[11]=='70I' or $sz[12]=='70I' or $sz[13]=='70I' or $sz[14]=='70I' or $sz[15]=='70I' or $sz[16]=='70I' or $sz[17]=='70I' or $sz[18]=='70I' or $sz[19]=='70I' or $sz[20]=='70I' or $sz[21]=='70I' or $sz[22]=='70I' or $sz[23]=='70I' or $sz[24]=='70I' or $sz[25]=='70I' or $sz[26]=='70I' or $sz[27]=='70I' or $sz[28]=='70I' or $sz[29]=='70I' or $sz[30]=='70I' or $sz[31]=='70I' or $sz[32]=='70I' or $sz[33]=='70I' or $sz[34]=='70I' or $sz[35]=='70I' or $sz[36]=='70I' or $sz[37]=='70I' or $sz[38]=='70I' or $sz[39]=='70I' or $sz[40]=='70I' or $sz[41]=='70I' or $sz[42]=='70I' or $sz[43]=='70I' or $sz[44]=='70I' or $sz[45]=='70I' or $sz[46]=='70I' or $sz[47]=='70I' or $sz[48]=='70I' or $sz[49]=='70I' or $sz[50]=='70I' or $sz[51]=='70I' or $sz[52]=='70I' or $sz[53]=='70I' or $sz[54]=='70I' or $sz[55]=='70I' or $sz[56]=='70I' or $sz[57]=='70I' or $sz[58]=='70I' or $sz[59]=='70I'  or $sz[60]=='70I' or $sz[61]=='70I' or $sz[62]=='70I' or $sz[63]=='70I' or $sz[64]=='70I' or $sz[65]=='70I' or $sz[66]=='70I' or $sz[67]=='70I' or $sz[68]=='70I' or $sz[69]=='70I' or $sz[70]=='70I' or $sz[71]=='70I' or $sz[72]=='70I' or $sz[73]=='70I' or $sz[74]=='70I' or $sz[75]=='70I' or $sz[76]=='70I' or $sz[77]=='70I' or $sz[78]=='70I' or $sz[79]=='70I' or $sz[80]=='70I')
{echo "<nobr><input name='size[]' type='checkbox' value='70I' checked>70I</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='70I'>70I</nobr>";}

if ( $sz[0]=='70J' or $sz[1]=='70J' or $sz[2]=='70J' or $sz[3]=='70J' or $sz[4]=='70J' or $sz[5]=='70J' or $sz[6]=='70J' or $sz[7]=='70J' or $sz[8]=='70J' or $sz[9]=='70J' or $sz[10]=='70J' or $sz[11]=='70J' or $sz[12]=='70J' or $sz[13]=='70J' or $sz[14]=='70J' or $sz[15]=='70J' or $sz[16]=='70J' or $sz[17]=='70J' or $sz[18]=='70J' or $sz[19]=='70J' or $sz[20]=='70J' or $sz[21]=='70J' or $sz[22]=='70J' or $sz[23]=='70J' or $sz[24]=='70J' or $sz[25]=='70J' or $sz[26]=='70J' or $sz[27]=='70J' or $sz[28]=='70J' or $sz[29]=='70J' or $sz[30]=='70J' or $sz[31]=='70J' or $sz[32]=='70J' or $sz[33]=='70J' or $sz[34]=='70J' or $sz[35]=='70J' or $sz[36]=='70J' or $sz[37]=='70J' or $sz[38]=='70J' or $sz[39]=='70J' or $sz[40]=='70J' or $sz[41]=='70J' or $sz[42]=='70J' or $sz[43]=='70J' or $sz[44]=='70J' or $sz[45]=='70J' or $sz[46]=='70J' or $sz[47]=='70J' or $sz[48]=='70J' or $sz[49]=='70J' or $sz[50]=='70J' or $sz[51]=='70J' or $sz[52]=='70J' or $sz[53]=='70J' or $sz[54]=='70J' or $sz[55]=='70J' or $sz[56]=='70J' or $sz[57]=='70J' or $sz[58]=='70J' or $sz[59]=='70J'  or $sz[60]=='70J' or $sz[61]=='70J' or $sz[62]=='70J' or $sz[63]=='70J' or $sz[64]=='70J' or $sz[65]=='70J' or $sz[66]=='70J' or $sz[67]=='70J' or $sz[68]=='70J' or $sz[69]=='70J' or $sz[70]=='70J' or $sz[71]=='70J' or $sz[72]=='70J' or $sz[73]=='70J' or $sz[74]=='70J' or $sz[75]=='70J' or $sz[76]=='70J' or $sz[77]=='70J' or $sz[78]=='70J' or $sz[79]=='70J' or $sz[80]=='70J')
{echo "<nobr><input name='size[]' type='checkbox' value='70J' checked>70J</nobr><br>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='70J'>70J</nobr><br>";}


if ( $sz[0]=='75A' or $sz[1]=='75A' or $sz[2]=='75A' or $sz[3]=='75A' or $sz[4]=='75A' or $sz[5]=='75A' or $sz[6]=='75A' or $sz[7]=='75A' or $sz[8]=='75A' or $sz[9]=='75A' or $sz[10]=='75A' or $sz[11]=='75A' or $sz[12]=='75A' or $sz[13]=='75A' or $sz[14]=='75A' or $sz[15]=='75A' or $sz[16]=='75A' or $sz[17]=='75A' or $sz[18]=='75A' or $sz[19]=='75A' or $sz[20]=='75A' or $sz[21]=='75A' or $sz[22]=='75A' or $sz[23]=='75A' or $sz[24]=='75A' or $sz[25]=='75A' or $sz[26]=='75A' or $sz[27]=='75A' or $sz[28]=='75A' or $sz[29]=='75A' or $sz[30]=='75A' or $sz[31]=='75A' or $sz[32]=='75A' or $sz[33]=='75A' or $sz[34]=='75A' or $sz[35]=='75A' or $sz[36]=='75A' or $sz[37]=='75A' or $sz[38]=='75A' or $sz[39]=='75A' or $sz[40]=='75A' or $sz[41]=='75A' or $sz[42]=='75A' or $sz[43]=='75A' or $sz[44]=='75A' or $sz[45]=='75A' or $sz[46]=='75A' or $sz[47]=='75A' or $sz[48]=='75A' or $sz[49]=='75A' or $sz[50]=='75A' or $sz[51]=='75A' or $sz[52]=='75A' or $sz[53]=='75A' or $sz[54]=='75A' or $sz[55]=='75A' or $sz[56]=='75A' or $sz[57]=='75A' or $sz[58]=='75A' or $sz[59]=='75A'  or $sz[60]=='75A' or $sz[61]=='75A' or $sz[62]=='75A' or $sz[63]=='75A' or $sz[64]=='75A' or $sz[65]=='75A' or $sz[66]=='75A' or $sz[67]=='75A' or $sz[68]=='75A' or $sz[69]=='75A' or $sz[70]=='75A' or $sz[71]=='75A' or $sz[72]=='75A' or $sz[73]=='75A' or $sz[74]=='75A' or $sz[75]=='75A' or $sz[76]=='75A' or $sz[77]=='75A' or $sz[78]=='75A' or $sz[79]=='75A' or $sz[80]=='75A')
{echo "<nobr><input name='size[]' type='checkbox' value='75A' checked>75A</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='75A'>75A</nobr>";}

if ( $sz[0]=='75B' or $sz[1]=='75B' or $sz[2]=='75B' or $sz[3]=='75B' or $sz[4]=='75B' or $sz[5]=='75B' or $sz[6]=='75B' or $sz[7]=='75B' or $sz[8]=='75B' or $sz[9]=='75B' or $sz[10]=='75B' or $sz[11]=='75B' or $sz[12]=='75B' or $sz[13]=='75B' or $sz[14]=='75B' or $sz[15]=='75B' or $sz[16]=='75B' or $sz[17]=='75B' or $sz[18]=='75B' or $sz[19]=='75B' or $sz[20]=='75B' or $sz[21]=='75B' or $sz[22]=='75B' or $sz[23]=='75B' or $sz[24]=='75B' or $sz[25]=='75B' or $sz[26]=='75B' or $sz[27]=='75B' or $sz[28]=='75B' or $sz[29]=='75B' or $sz[30]=='75B' or $sz[31]=='75B' or $sz[32]=='75B' or $sz[33]=='75B' or $sz[34]=='75B' or $sz[35]=='75B' or $sz[36]=='75B' or $sz[37]=='75B' or $sz[38]=='75B' or $sz[39]=='75B' or $sz[40]=='75B' or $sz[41]=='75B' or $sz[42]=='75B' or $sz[43]=='75B' or $sz[44]=='75B' or $sz[45]=='75B' or $sz[46]=='75B' or $sz[47]=='75B' or $sz[48]=='75B' or $sz[49]=='75B' or $sz[50]=='75B' or $sz[51]=='75B' or $sz[52]=='75B' or $sz[53]=='75B' or $sz[54]=='75B' or $sz[55]=='75B' or $sz[56]=='75B' or $sz[57]=='75B' or $sz[58]=='75B' or $sz[59]=='75B'  or $sz[60]=='75B' or $sz[61]=='75B' or $sz[62]=='75B' or $sz[63]=='75B' or $sz[64]=='75B' or $sz[65]=='75B' or $sz[66]=='75B' or $sz[67]=='75B' or $sz[68]=='75B' or $sz[69]=='75B' or $sz[70]=='75B' or $sz[71]=='75B' or $sz[72]=='75B' or $sz[73]=='75B' or $sz[74]=='75B' or $sz[75]=='75B' or $sz[76]=='75B' or $sz[77]=='75B' or $sz[78]=='75B' or $sz[79]=='75B' or $sz[80]=='75B')
{echo "<nobr><input name='size[]' type='checkbox' value='75B' checked>75B</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='75B'>75B</nobr>";}

if ( $sz[0]=='75C' or $sz[1]=='75C' or $sz[2]=='75C' or $sz[3]=='75C' or $sz[4]=='75C' or $sz[5]=='75C' or $sz[6]=='75C' or $sz[7]=='75C' or $sz[8]=='75C' or $sz[9]=='75C' or $sz[10]=='75C' or $sz[11]=='75C' or $sz[12]=='75C' or $sz[13]=='75C' or $sz[14]=='75C' or $sz[15]=='75C' or $sz[16]=='75C' or $sz[17]=='75C' or $sz[18]=='75C' or $sz[19]=='75C' or $sz[20]=='75C' or $sz[21]=='75C' or $sz[22]=='75C' or $sz[23]=='75C' or $sz[24]=='75C' or $sz[25]=='75C' or $sz[26]=='75C' or $sz[27]=='75C' or $sz[28]=='75C' or $sz[29]=='75C' or $sz[30]=='75C' or $sz[31]=='75C' or $sz[32]=='75C' or $sz[33]=='75C' or $sz[34]=='75C' or $sz[35]=='75C' or $sz[36]=='75C' or $sz[37]=='75C' or $sz[38]=='75C' or $sz[39]=='75C' or $sz[40]=='75C' or $sz[41]=='75C' or $sz[42]=='75C' or $sz[43]=='75C' or $sz[44]=='75C' or $sz[45]=='75C' or $sz[46]=='75C' or $sz[47]=='75C' or $sz[48]=='75C' or $sz[49]=='75C' or $sz[50]=='75C' or $sz[51]=='75C' or $sz[52]=='75C' or $sz[53]=='75C' or $sz[54]=='75C' or $sz[55]=='75C' or $sz[56]=='75C' or $sz[57]=='75C' or $sz[58]=='75C' or $sz[59]=='75C'  or $sz[60]=='75C' or $sz[61]=='75C' or $sz[62]=='75C' or $sz[63]=='75C' or $sz[64]=='75C' or $sz[65]=='75C' or $sz[66]=='75C' or $sz[67]=='75C' or $sz[68]=='75C' or $sz[69]=='75C' or $sz[70]=='75C' or $sz[71]=='75C' or $sz[72]=='75C' or $sz[73]=='75C' or $sz[74]=='75C' or $sz[75]=='75C' or $sz[76]=='75C' or $sz[77]=='75C' or $sz[78]=='75C' or $sz[79]=='75C' or $sz[80]=='75C')
{echo "<nobr><input name='size[]' type='checkbox' value='75C' checked>75C</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='75C'>75C</nobr>";}

if ( $sz[0]=='75D' or $sz[1]=='75D' or $sz[2]=='75D' or $sz[3]=='75D' or $sz[4]=='75D' or $sz[5]=='75D' or $sz[6]=='75D' or $sz[7]=='75D' or $sz[8]=='75D' or $sz[9]=='75D' or $sz[10]=='75D' or $sz[11]=='75D' or $sz[12]=='75D' or $sz[13]=='75D' or $sz[14]=='75D' or $sz[15]=='75D' or $sz[16]=='75D' or $sz[17]=='75D' or $sz[18]=='75D' or $sz[19]=='75D' or $sz[20]=='75D' or $sz[21]=='75D' or $sz[22]=='75D' or $sz[23]=='75D' or $sz[24]=='75D' or $sz[25]=='75D' or $sz[26]=='75D' or $sz[27]=='75D' or $sz[28]=='75D' or $sz[29]=='75D' or $sz[30]=='75D' or $sz[31]=='75D' or $sz[32]=='75D' or $sz[33]=='75D' or $sz[34]=='75D' or $sz[35]=='75D' or $sz[36]=='75D' or $sz[37]=='75D' or $sz[38]=='75D' or $sz[39]=='75D' or $sz[40]=='75D' or $sz[41]=='75D' or $sz[42]=='75D' or $sz[43]=='75D' or $sz[44]=='75D' or $sz[45]=='75D' or $sz[46]=='75D' or $sz[47]=='75D' or $sz[48]=='75D' or $sz[49]=='75D' or $sz[50]=='75D' or $sz[51]=='75D' or $sz[52]=='75D' or $sz[53]=='75D' or $sz[54]=='75D' or $sz[55]=='75D' or $sz[56]=='75D' or $sz[57]=='75D' or $sz[58]=='75D' or $sz[59]=='75D'  or $sz[60]=='75D' or $sz[61]=='75D' or $sz[62]=='75D' or $sz[63]=='75D' or $sz[64]=='75D' or $sz[65]=='75D' or $sz[66]=='75D' or $sz[67]=='75D' or $sz[68]=='75D' or $sz[69]=='75D' or $sz[70]=='75D' or $sz[71]=='75D' or $sz[72]=='75D' or $sz[73]=='75D' or $sz[74]=='75D' or $sz[75]=='75D' or $sz[76]=='75D' or $sz[77]=='75D' or $sz[78]=='75D' or $sz[79]=='75D' or $sz[80]=='75D')
{echo "<nobr><input name='size[]' type='checkbox' value='75D' checked>75D</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='75D'>75D</nobr>";}


if ( $sz[0]=='75DD' or $sz[1]=='75DD' or $sz[2]=='75DD' or $sz[3]=='75DD' or $sz[4]=='75DD' or $sz[5]=='75DD' or $sz[6]=='75DD' or $sz[7]=='75DD' or $sz[8]=='75DD' or $sz[9]=='75DD' or $sz[10]=='75DD' or $sz[11]=='75DD' or $sz[12]=='75DD' or $sz[13]=='75DD' or $sz[14]=='75DD' or $sz[15]=='75DD' or $sz[16]=='75DD' or $sz[17]=='75DD' or $sz[18]=='75DD' or $sz[19]=='75DD' or $sz[20]=='75DD' or $sz[21]=='75DD' or $sz[22]=='75DD' or $sz[23]=='75DD' or $sz[24]=='75DD' or $sz[25]=='75DD' or $sz[26]=='75DD' or $sz[27]=='75DD' or $sz[28]=='75DD' or $sz[29]=='75DD' or $sz[30]=='75DD' or $sz[31]=='75DD' or $sz[32]=='75DD' or $sz[33]=='75DD' or $sz[34]=='75DD' or $sz[35]=='75DD' or $sz[36]=='75DD' or $sz[37]=='75DD' or $sz[38]=='75DD' or $sz[39]=='75DD' or $sz[40]=='75DD' or $sz[41]=='75DD' or $sz[42]=='75DD' or $sz[43]=='75DD' or $sz[44]=='75DD' or $sz[45]=='75DD' or $sz[46]=='75DD' or $sz[47]=='75DD' or $sz[48]=='75DD' or $sz[49]=='75DD' or $sz[50]=='75DD' or $sz[51]=='75DD' or $sz[52]=='75DD' or $sz[53]=='75DD' or $sz[54]=='75DD' or $sz[55]=='75DD' or $sz[56]=='75DD' or $sz[57]=='75DD' or $sz[58]=='75DD' or $sz[59]=='75DD'  or $sz[60]=='75DD' or $sz[61]=='75DD' or $sz[62]=='75DD' or $sz[63]=='75DD' or $sz[64]=='75DD' or $sz[65]=='75DD' or $sz[66]=='75DD' or $sz[67]=='75DD' or $sz[68]=='75DD' or $sz[69]=='75DD' or $sz[70]=='75DD' or $sz[71]=='75DD' or $sz[72]=='75DD' or $sz[73]=='75DD' or $sz[74]=='75DD' or $sz[75]=='75DD' or $sz[76]=='75DD' or $sz[77]=='75DD' or $sz[78]=='75DD' or $sz[79]=='75DD' or $sz[80]=='75DD')
{echo "<nobr><input name='size[]' type='checkbox' value='75DD' checked>75DD</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='75DD'>75DD</nobr>";}

if ( $sz[0]=='75E' or $sz[1]=='75E' or $sz[2]=='75E' or $sz[3]=='75E' or $sz[4]=='75E' or $sz[5]=='75E' or $sz[6]=='75E' or $sz[7]=='75E' or $sz[8]=='75E' or $sz[9]=='75E' or $sz[10]=='75E' or $sz[11]=='75E' or $sz[12]=='75E' or $sz[13]=='75E' or $sz[14]=='75E' or $sz[15]=='75E' or $sz[16]=='75E' or $sz[17]=='75E' or $sz[18]=='75E' or $sz[19]=='75E' or $sz[20]=='75E' or $sz[21]=='75E' or $sz[22]=='75E' or $sz[23]=='75E' or $sz[24]=='75E' or $sz[25]=='75E' or $sz[26]=='75E' or $sz[27]=='75E' or $sz[28]=='75E' or $sz[29]=='75E' or $sz[30]=='75E' or $sz[31]=='75E' or $sz[32]=='75E' or $sz[33]=='75E' or $sz[34]=='75E' or $sz[35]=='75E' or $sz[36]=='75E' or $sz[37]=='75E' or $sz[38]=='75E' or $sz[39]=='75E' or $sz[40]=='75E' or $sz[41]=='75E' or $sz[42]=='75E' or $sz[43]=='75E' or $sz[44]=='75E' or $sz[45]=='75E' or $sz[46]=='75E' or $sz[47]=='75E' or $sz[48]=='75E' or $sz[49]=='75E' or $sz[50]=='75E' or $sz[51]=='75E' or $sz[52]=='75E' or $sz[53]=='75E' or $sz[54]=='75E' or $sz[55]=='75E' or $sz[56]=='75E' or $sz[57]=='75E' or $sz[58]=='75E' or $sz[59]=='75E'  or $sz[60]=='75E' or $sz[61]=='75E' or $sz[62]=='75E' or $sz[63]=='75E' or $sz[64]=='75E' or $sz[65]=='75E' or $sz[66]=='75E' or $sz[67]=='75E' or $sz[68]=='75E' or $sz[69]=='75E' or $sz[70]=='75E' or $sz[71]=='75E' or $sz[72]=='75E' or $sz[73]=='75E' or $sz[74]=='75E' or $sz[75]=='75E' or $sz[76]=='75E' or $sz[77]=='75E' or $sz[78]=='75E' or $sz[79]=='75E' or $sz[80]=='75E')
{echo "<nobr><input name='size[]' type='checkbox' value='75E' checked>75E</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='75E'>75E</nobr>";}

if ( $sz[0]=='75F' or $sz[1]=='75F' or $sz[2]=='75F' or $sz[3]=='75F' or $sz[4]=='75F' or $sz[5]=='75F' or $sz[6]=='75F' or $sz[7]=='75F' or $sz[8]=='75F' or $sz[9]=='75F' or $sz[10]=='75F' or $sz[11]=='75F' or $sz[12]=='75F' or $sz[13]=='75F' or $sz[14]=='75F' or $sz[15]=='75F' or $sz[16]=='75F' or $sz[17]=='75F' or $sz[18]=='75F' or $sz[19]=='75F' or $sz[20]=='75F' or $sz[21]=='75F' or $sz[22]=='75F' or $sz[23]=='75F' or $sz[24]=='75F' or $sz[25]=='75F' or $sz[26]=='75F' or $sz[27]=='75F' or $sz[28]=='75F' or $sz[29]=='75F' or $sz[30]=='75F' or $sz[31]=='75F' or $sz[32]=='75F' or $sz[33]=='75F' or $sz[34]=='75F' or $sz[35]=='75F' or $sz[36]=='75F' or $sz[37]=='75F' or $sz[38]=='75F' or $sz[39]=='75F' or $sz[40]=='75F' or $sz[41]=='75F' or $sz[42]=='75F' or $sz[43]=='75F' or $sz[44]=='75F' or $sz[45]=='75F' or $sz[46]=='75F' or $sz[47]=='75F' or $sz[48]=='75F' or $sz[49]=='75F' or $sz[50]=='75F' or $sz[51]=='75F' or $sz[52]=='75F' or $sz[53]=='75F' or $sz[54]=='75F' or $sz[55]=='75F' or $sz[56]=='75F' or $sz[57]=='75F' or $sz[58]=='75F' or $sz[59]=='75F'  or $sz[60]=='75F' or $sz[61]=='75F' or $sz[62]=='75F' or $sz[63]=='75F' or $sz[64]=='75F' or $sz[65]=='75F' or $sz[66]=='75F' or $sz[67]=='75F' or $sz[68]=='75F' or $sz[69]=='75F' or $sz[70]=='75F' or $sz[71]=='75F' or $sz[72]=='75F' or $sz[73]=='75F' or $sz[74]=='75F' or $sz[75]=='75F' or $sz[76]=='75F' or $sz[77]=='75F' or $sz[78]=='75F' or $sz[79]=='75F' or $sz[80]=='75F')
{echo "<nobr><input name='size[]' type='checkbox' value='75F' checked>75F</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='75F'>75F</nobr>";}

if ( $sz[0]=='75FF' or $sz[1]=='75FF' or $sz[2]=='75FF' or $sz[3]=='75FF' or $sz[4]=='75FF' or $sz[5]=='75FF' or $sz[6]=='75FF' or $sz[7]=='75FF' or $sz[8]=='75FF' or $sz[9]=='75FF' or $sz[10]=='75FF' or $sz[11]=='75FF' or $sz[12]=='75FF' or $sz[13]=='75FF' or $sz[14]=='75FF' or $sz[15]=='75FF' or $sz[16]=='75FF' or $sz[17]=='75FF' or $sz[18]=='75FF' or $sz[19]=='75FF' or $sz[20]=='75FF' or $sz[21]=='75FF' or $sz[22]=='75FF' or $sz[23]=='75FF' or $sz[24]=='75FF' or $sz[25]=='75FF' or $sz[26]=='75FF' or $sz[27]=='75FF' or $sz[28]=='75FF' or $sz[29]=='75FF' or $sz[30]=='75FF' or $sz[31]=='75FF' or $sz[32]=='75FF' or $sz[33]=='75FF' or $sz[34]=='75FF' or $sz[35]=='75FF' or $sz[36]=='75FF' or $sz[37]=='75FF' or $sz[38]=='75FF' or $sz[39]=='75FF' or $sz[40]=='75FF' or $sz[41]=='75FF' or $sz[42]=='75FF' or $sz[43]=='75FF' or $sz[44]=='75FF' or $sz[45]=='75FF' or $sz[46]=='75FF' or $sz[47]=='75FF' or $sz[48]=='75FF' or $sz[49]=='75FF' or $sz[50]=='75FF' or $sz[51]=='75FF' or $sz[52]=='75FF' or $sz[53]=='75FF' or $sz[54]=='75FF' or $sz[55]=='75FF' or $sz[56]=='75FF' or $sz[57]=='75FF' or $sz[58]=='75FF' or $sz[59]=='75FF'  or $sz[60]=='75FF' or $sz[61]=='75FF' or $sz[62]=='75FF' or $sz[63]=='75FF' or $sz[64]=='75FF' or $sz[65]=='75FF' or $sz[66]=='75FF' or $sz[67]=='75FF' or $sz[68]=='75FF' or $sz[69]=='75FF' or $sz[70]=='75FF' or $sz[71]=='75FF' or $sz[72]=='75FF' or $sz[73]=='75FF' or $sz[74]=='75FF' or $sz[75]=='75FF' or $sz[76]=='75FF' or $sz[77]=='75FF' or $sz[78]=='75FF' or $sz[79]=='75FF' or $sz[80]=='75FF')
{echo "<nobr><input name='size[]' type='checkbox' value='75FF' checked>75FF</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='75FF'>75FF</nobr>";}

if ( $sz[0]=='75G' or $sz[1]=='75G' or $sz[2]=='75G' or $sz[3]=='75G' or $sz[4]=='75G' or $sz[5]=='75G' or $sz[6]=='75G' or $sz[7]=='75G' or $sz[8]=='75G' or $sz[9]=='75G' or $sz[10]=='75G' or $sz[11]=='75G' or $sz[12]=='75G' or $sz[13]=='75G' or $sz[14]=='75G' or $sz[15]=='75G' or $sz[16]=='75G' or $sz[17]=='75G' or $sz[18]=='75G' or $sz[19]=='75G' or $sz[20]=='75G' or $sz[21]=='75G' or $sz[22]=='75G' or $sz[23]=='75G' or $sz[24]=='75G' or $sz[25]=='75G' or $sz[26]=='75G' or $sz[27]=='75G' or $sz[28]=='75G' or $sz[29]=='75G' or $sz[30]=='75G' or $sz[31]=='75G' or $sz[32]=='75G' or $sz[33]=='75G' or $sz[34]=='75G' or $sz[35]=='75G' or $sz[36]=='75G' or $sz[37]=='75G' or $sz[38]=='75G' or $sz[39]=='75G' or $sz[40]=='75G' or $sz[41]=='75G' or $sz[42]=='75G' or $sz[43]=='75G' or $sz[44]=='75G' or $sz[45]=='75G' or $sz[46]=='75G' or $sz[47]=='75G' or $sz[48]=='75G' or $sz[49]=='75G' or $sz[50]=='75G' or $sz[51]=='75G' or $sz[52]=='75G' or $sz[53]=='75G' or $sz[54]=='75G' or $sz[55]=='75G' or $sz[56]=='75G' or $sz[57]=='75G' or $sz[58]=='75G' or $sz[59]=='75G'  or $sz[60]=='75G' or $sz[61]=='75G' or $sz[62]=='75G' or $sz[63]=='75G' or $sz[64]=='75G' or $sz[65]=='75G' or $sz[66]=='75G' or $sz[67]=='75G' or $sz[68]=='75G' or $sz[69]=='75G' or $sz[70]=='75G' or $sz[71]=='75G' or $sz[72]=='75G' or $sz[73]=='75G' or $sz[74]=='75G' or $sz[75]=='75G' or $sz[76]=='75G' or $sz[77]=='75G' or $sz[78]=='75G' or $sz[79]=='75G' or $sz[80]=='75G')
{echo "<nobr><input name='size[]' type='checkbox' value='75G' checked>75G</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='75G'>75G</nobr>";}

if ( $sz[0]=='75GG' or $sz[1]=='75GG' or $sz[2]=='75GG' or $sz[3]=='75GG' or $sz[4]=='75GG' or $sz[5]=='75GG' or $sz[6]=='75GG' or $sz[7]=='75GG' or $sz[8]=='75GG' or $sz[9]=='75GG' or $sz[10]=='75GG' or $sz[11]=='75GG' or $sz[12]=='75GG' or $sz[13]=='75GG' or $sz[14]=='75GG' or $sz[15]=='75GG' or $sz[16]=='75GG' or $sz[17]=='75GG' or $sz[18]=='75GG' or $sz[19]=='75GG' or $sz[20]=='75GG' or $sz[21]=='75GG' or $sz[22]=='75GG' or $sz[23]=='75GG' or $sz[24]=='75GG' or $sz[25]=='75GG' or $sz[26]=='75GG' or $sz[27]=='75GG' or $sz[28]=='75GG' or $sz[29]=='75GG' or $sz[30]=='75GG' or $sz[31]=='75GG' or $sz[32]=='75GG' or $sz[33]=='75GG' or $sz[34]=='75GG' or $sz[35]=='75GG' or $sz[36]=='75GG' or $sz[37]=='75GG' or $sz[38]=='75GG' or $sz[39]=='75GG' or $sz[40]=='75GG' or $sz[41]=='75GG' or $sz[42]=='75GG' or $sz[43]=='75GG' or $sz[44]=='75GG' or $sz[45]=='75GG' or $sz[46]=='75GG' or $sz[47]=='75GG' or $sz[48]=='75GG' or $sz[49]=='75GG' or $sz[50]=='75GG' or $sz[51]=='75GG' or $sz[52]=='75GG' or $sz[53]=='75GG' or $sz[54]=='75GG' or $sz[55]=='75GG' or $sz[56]=='75GG' or $sz[57]=='75GG' or $sz[58]=='75GG' or $sz[59]=='75GG'  or $sz[60]=='75GG' or $sz[61]=='75GG' or $sz[62]=='75GG' or $sz[63]=='75GG' or $sz[64]=='75GG' or $sz[65]=='75GG' or $sz[66]=='75GG' or $sz[67]=='75GG' or $sz[68]=='75GG' or $sz[69]=='75GG' or $sz[70]=='75GG' or $sz[71]=='75GG' or $sz[72]=='75GG' or $sz[73]=='75GG' or $sz[74]=='75GG' or $sz[75]=='75GG' or $sz[76]=='75GG' or $sz[77]=='75GG' or $sz[78]=='75GG' or $sz[79]=='75GG' or $sz[80]=='75GG')
{echo "<nobr><input name='size[]' type='checkbox' value='75GG' checked>75GG</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='75GG'>75GG</nobr>";}

if ( $sz[0]=='75H' or $sz[1]=='75H' or $sz[2]=='75H' or $sz[3]=='75H' or $sz[4]=='75H' or $sz[5]=='75H' or $sz[6]=='75H' or $sz[7]=='75H' or $sz[8]=='75H' or $sz[9]=='75H' or $sz[10]=='75H' or $sz[11]=='75H' or $sz[12]=='75H' or $sz[13]=='75H' or $sz[14]=='75H' or $sz[15]=='75H' or $sz[16]=='75H' or $sz[17]=='75H' or $sz[18]=='75H' or $sz[19]=='75H' or $sz[20]=='75H' or $sz[21]=='75H' or $sz[22]=='75H' or $sz[23]=='75H' or $sz[24]=='75H' or $sz[25]=='75H' or $sz[26]=='75H' or $sz[27]=='75H' or $sz[28]=='75H' or $sz[29]=='75H' or $sz[30]=='75H' or $sz[31]=='75H' or $sz[32]=='75H' or $sz[33]=='75H' or $sz[34]=='75H' or $sz[35]=='75H' or $sz[36]=='75H' or $sz[37]=='75H' or $sz[38]=='75H' or $sz[39]=='75H' or $sz[40]=='75H' or $sz[41]=='75H' or $sz[42]=='75H' or $sz[43]=='75H' or $sz[44]=='75H' or $sz[45]=='75H' or $sz[46]=='75H' or $sz[47]=='75H' or $sz[48]=='75H' or $sz[49]=='75H' or $sz[50]=='75H' or $sz[51]=='75H' or $sz[52]=='75H' or $sz[53]=='75H' or $sz[54]=='75H' or $sz[55]=='75H' or $sz[56]=='75H' or $sz[57]=='75H' or $sz[58]=='75H' or $sz[59]=='75H'  or $sz[60]=='75H' or $sz[61]=='75H' or $sz[62]=='75H' or $sz[63]=='75H' or $sz[64]=='75H' or $sz[65]=='75H' or $sz[66]=='75H' or $sz[67]=='75H' or $sz[68]=='75H' or $sz[69]=='75H' or $sz[70]=='75H' or $sz[71]=='75H' or $sz[72]=='75H' or $sz[73]=='75H' or $sz[74]=='75H' or $sz[75]=='75H' or $sz[76]=='75H' or $sz[77]=='75H' or $sz[78]=='75H' or $sz[79]=='75H' or $sz[80]=='75H')
{echo "<nobr><input name='size[]' type='checkbox' value='75H' checked>75H</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='75H'>75H</nobr>";}

if ( $sz[0]=='75I' or $sz[1]=='75I' or $sz[2]=='75I' or $sz[3]=='75I' or $sz[4]=='75I' or $sz[5]=='75I' or $sz[6]=='75I' or $sz[7]=='75I' or $sz[8]=='75I' or $sz[9]=='75I' or $sz[10]=='75I' or $sz[11]=='75I' or $sz[12]=='75I' or $sz[13]=='75I' or $sz[14]=='75I' or $sz[15]=='75I' or $sz[16]=='75I' or $sz[17]=='75I' or $sz[18]=='75I' or $sz[19]=='75I' or $sz[20]=='75I' or $sz[21]=='75I' or $sz[22]=='75I' or $sz[23]=='75I' or $sz[24]=='75I' or $sz[25]=='75I' or $sz[26]=='75I' or $sz[27]=='75I' or $sz[28]=='75I' or $sz[29]=='75I' or $sz[30]=='75I' or $sz[31]=='75I' or $sz[32]=='75I' or $sz[33]=='75I' or $sz[34]=='75I' or $sz[35]=='75I' or $sz[36]=='75I' or $sz[37]=='75I' or $sz[38]=='75I' or $sz[39]=='75I' or $sz[40]=='75I' or $sz[41]=='75I' or $sz[42]=='75I' or $sz[43]=='75I' or $sz[44]=='75I' or $sz[45]=='75I' or $sz[46]=='75I' or $sz[47]=='75I' or $sz[48]=='75I' or $sz[49]=='75I' or $sz[50]=='75I' or $sz[51]=='75I' or $sz[52]=='75I' or $sz[53]=='75I' or $sz[54]=='75I' or $sz[55]=='75I' or $sz[56]=='75I' or $sz[57]=='75I' or $sz[58]=='75I' or $sz[59]=='75I'  or $sz[60]=='75I' or $sz[61]=='75I' or $sz[62]=='75I' or $sz[63]=='75I' or $sz[64]=='75I' or $sz[65]=='75I' or $sz[66]=='75I' or $sz[67]=='75I' or $sz[68]=='75I' or $sz[69]=='75I' or $sz[70]=='75I' or $sz[71]=='75I' or $sz[72]=='75I' or $sz[73]=='75I' or $sz[74]=='75I' or $sz[75]=='75I' or $sz[76]=='75I' or $sz[77]=='75I' or $sz[78]=='75I' or $sz[79]=='75I' or $sz[80]=='75I')
{echo "<nobr><input name='size[]' type='checkbox' value='75I' checked>75I</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='75I'>75I</nobr>";}

if ( $sz[0]=='75J' or $sz[1]=='75J' or $sz[2]=='75J' or $sz[3]=='75J' or $sz[4]=='75J' or $sz[5]=='75J' or $sz[6]=='75J' or $sz[7]=='75J' or $sz[8]=='75J' or $sz[9]=='75J' or $sz[10]=='75J' or $sz[11]=='75J' or $sz[12]=='75J' or $sz[13]=='75J' or $sz[14]=='75J' or $sz[15]=='75J' or $sz[16]=='75J' or $sz[17]=='75J' or $sz[18]=='75J' or $sz[19]=='75J' or $sz[20]=='75J' or $sz[21]=='75J' or $sz[22]=='75J' or $sz[23]=='75J' or $sz[24]=='75J' or $sz[25]=='75J' or $sz[26]=='75J' or $sz[27]=='75J' or $sz[28]=='75J' or $sz[29]=='75J' or $sz[30]=='75J' or $sz[31]=='75J' or $sz[32]=='75J' or $sz[33]=='75J' or $sz[34]=='75J' or $sz[35]=='75J' or $sz[36]=='75J' or $sz[37]=='75J' or $sz[38]=='75J' or $sz[39]=='75J' or $sz[40]=='75J' or $sz[41]=='75J' or $sz[42]=='75J' or $sz[43]=='75J' or $sz[44]=='75J' or $sz[45]=='75J' or $sz[46]=='75J' or $sz[47]=='75J' or $sz[48]=='75J' or $sz[49]=='75J' or $sz[50]=='75J' or $sz[51]=='75J' or $sz[52]=='75J' or $sz[53]=='75J' or $sz[54]=='75J' or $sz[55]=='75J' or $sz[56]=='75J' or $sz[57]=='75J' or $sz[58]=='75J' or $sz[59]=='75J'  or $sz[60]=='75J' or $sz[61]=='75J' or $sz[62]=='75J' or $sz[63]=='75J' or $sz[64]=='75J' or $sz[65]=='75J' or $sz[66]=='75J' or $sz[67]=='75J' or $sz[68]=='75J' or $sz[69]=='75J' or $sz[70]=='75J' or $sz[71]=='75J' or $sz[72]=='75J' or $sz[73]=='75J' or $sz[74]=='75J' or $sz[75]=='75J' or $sz[76]=='75J' or $sz[77]=='75J' or $sz[78]=='75J' or $sz[79]=='75J' or $sz[80]=='75J')
{echo "<nobr><input name='size[]' type='checkbox' value='75J' checked>75J</nobr><br>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='75J'>75J</nobr><br>";}


if ( $sz[0]=='80A' or $sz[1]=='80A' or $sz[2]=='80A' or $sz[3]=='80A' or $sz[4]=='80A' or $sz[5]=='80A' or $sz[6]=='80A' or $sz[7]=='80A' or $sz[8]=='80A' or $sz[9]=='80A' or $sz[10]=='80A' or $sz[11]=='80A' or $sz[12]=='80A' or $sz[13]=='80A' or $sz[14]=='80A' or $sz[15]=='80A' or $sz[16]=='80A' or $sz[17]=='80A' or $sz[18]=='80A' or $sz[19]=='80A' or $sz[20]=='80A' or $sz[21]=='80A' or $sz[22]=='80A' or $sz[23]=='80A' or $sz[24]=='80A' or $sz[25]=='80A' or $sz[26]=='80A' or $sz[27]=='80A' or $sz[28]=='80A' or $sz[29]=='80A' or $sz[30]=='80A' or $sz[31]=='80A' or $sz[32]=='80A' or $sz[33]=='80A' or $sz[34]=='80A' or $sz[35]=='80A' or $sz[36]=='80A' or $sz[37]=='80A' or $sz[38]=='80A' or $sz[39]=='80A' or $sz[40]=='80A' or $sz[41]=='80A' or $sz[42]=='80A' or $sz[43]=='80A' or $sz[44]=='80A' or $sz[45]=='80A' or $sz[46]=='80A' or $sz[47]=='80A' or $sz[48]=='80A' or $sz[49]=='80A' or $sz[50]=='80A' or $sz[51]=='80A' or $sz[52]=='80A' or $sz[53]=='80A' or $sz[54]=='80A' or $sz[55]=='80A' or $sz[56]=='80A' or $sz[57]=='80A' or $sz[58]=='80A' or $sz[59]=='80A'  or $sz[60]=='80A' or $sz[61]=='80A' or $sz[62]=='80A' or $sz[63]=='80A' or $sz[64]=='80A' or $sz[65]=='80A' or $sz[66]=='80A' or $sz[67]=='80A' or $sz[68]=='80A' or $sz[69]=='80A' or $sz[70]=='80A' or $sz[71]=='80A' or $sz[72]=='80A' or $sz[73]=='80A' or $sz[74]=='80A' or $sz[75]=='80A' or $sz[76]=='80A' or $sz[77]=='80A' or $sz[78]=='80A' or $sz[79]=='80A' or $sz[80]=='80A')
{echo "<nobr><input name='size[]' type='checkbox' value='80A' checked>80A</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='80A'>80A</nobr>";}

if ( $sz[0]=='80B' or $sz[1]=='80B' or $sz[2]=='80B' or $sz[3]=='80B' or $sz[4]=='80B' or $sz[5]=='80B' or $sz[6]=='80B' or $sz[7]=='80B' or $sz[8]=='80B' or $sz[9]=='80B' or $sz[10]=='80B' or $sz[11]=='80B' or $sz[12]=='80B' or $sz[13]=='80B' or $sz[14]=='80B' or $sz[15]=='80B' or $sz[16]=='80B' or $sz[17]=='80B' or $sz[18]=='80B' or $sz[19]=='80B' or $sz[20]=='80B' or $sz[21]=='80B' or $sz[22]=='80B' or $sz[23]=='80B' or $sz[24]=='80B' or $sz[25]=='80B' or $sz[26]=='80B' or $sz[27]=='80B' or $sz[28]=='80B' or $sz[29]=='80B' or $sz[30]=='80B' or $sz[31]=='80B' or $sz[32]=='80B' or $sz[33]=='80B' or $sz[34]=='80B' or $sz[35]=='80B' or $sz[36]=='80B' or $sz[37]=='80B' or $sz[38]=='80B' or $sz[39]=='80B' or $sz[40]=='80B' or $sz[41]=='80B' or $sz[42]=='80B' or $sz[43]=='80B' or $sz[44]=='80B' or $sz[45]=='80B' or $sz[46]=='80B' or $sz[47]=='80B' or $sz[48]=='80B' or $sz[49]=='80B' or $sz[50]=='80B' or $sz[51]=='80B' or $sz[52]=='80B' or $sz[53]=='80B' or $sz[54]=='80B' or $sz[55]=='80B' or $sz[56]=='80B' or $sz[57]=='80B' or $sz[58]=='80B' or $sz[59]=='80B'  or $sz[60]=='80B' or $sz[61]=='80B' or $sz[62]=='80B' or $sz[63]=='80B' or $sz[64]=='80B' or $sz[65]=='80B' or $sz[66]=='80B' or $sz[67]=='80B' or $sz[68]=='80B' or $sz[69]=='80B' or $sz[70]=='80B' or $sz[71]=='80B' or $sz[72]=='80B' or $sz[73]=='80B' or $sz[74]=='80B' or $sz[75]=='80B' or $sz[76]=='80B' or $sz[77]=='80B' or $sz[78]=='80B' or $sz[79]=='80B' or $sz[80]=='80B')
{echo "<nobr><input name='size[]' type='checkbox' value='80B' checked>80B</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='80B'>80B</nobr>";}

if ( $sz[0]=='80C' or $sz[1]=='80C' or $sz[2]=='80C' or $sz[3]=='80C' or $sz[4]=='80C' or $sz[5]=='80C' or $sz[6]=='80C' or $sz[7]=='80C' or $sz[8]=='80C' or $sz[9]=='80C' or $sz[10]=='80C' or $sz[11]=='80C' or $sz[12]=='80C' or $sz[13]=='80C' or $sz[14]=='80C' or $sz[15]=='80C' or $sz[16]=='80C' or $sz[17]=='80C' or $sz[18]=='80C' or $sz[19]=='80C' or $sz[20]=='80C' or $sz[21]=='80C' or $sz[22]=='80C' or $sz[23]=='80C' or $sz[24]=='80C' or $sz[25]=='80C' or $sz[26]=='80C' or $sz[27]=='80C' or $sz[28]=='80C' or $sz[29]=='80C' or $sz[30]=='80C' or $sz[31]=='80C' or $sz[32]=='80C' or $sz[33]=='80C' or $sz[34]=='80C' or $sz[35]=='80C' or $sz[36]=='80C' or $sz[37]=='80C' or $sz[38]=='80C' or $sz[39]=='80C' or $sz[40]=='80C' or $sz[41]=='80C' or $sz[42]=='80C' or $sz[43]=='80C' or $sz[44]=='80C' or $sz[45]=='80C' or $sz[46]=='80C' or $sz[47]=='80C' or $sz[48]=='80C' or $sz[49]=='80C' or $sz[50]=='80C' or $sz[51]=='80C' or $sz[52]=='80C' or $sz[53]=='80C' or $sz[54]=='80C' or $sz[55]=='80C' or $sz[56]=='80C' or $sz[57]=='80C' or $sz[58]=='80C' or $sz[59]=='80C'  or $sz[60]=='80C' or $sz[61]=='80C' or $sz[62]=='80C' or $sz[63]=='80C' or $sz[64]=='80C' or $sz[65]=='80C' or $sz[66]=='80C' or $sz[67]=='80C' or $sz[68]=='80C' or $sz[69]=='80C' or $sz[70]=='80C' or $sz[71]=='80C' or $sz[72]=='80C' or $sz[73]=='80C' or $sz[74]=='80C' or $sz[75]=='80C' or $sz[76]=='80C' or $sz[77]=='80C' or $sz[78]=='80C' or $sz[79]=='80C' or $sz[80]=='80C')
{echo "<nobr><input name='size[]' type='checkbox' value='80C' checked>80C</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='80C'>80C</nobr>";}

if ( $sz[0]=='80D' or $sz[1]=='80D' or $sz[2]=='80D' or $sz[3]=='80D' or $sz[4]=='80D' or $sz[5]=='80D' or $sz[6]=='80D' or $sz[7]=='80D' or $sz[8]=='80D' or $sz[9]=='80D' or $sz[10]=='80D' or $sz[11]=='80D' or $sz[12]=='80D' or $sz[13]=='80D' or $sz[14]=='80D' or $sz[15]=='80D' or $sz[16]=='80D' or $sz[17]=='80D' or $sz[18]=='80D' or $sz[19]=='80D' or $sz[20]=='80D' or $sz[21]=='80D' or $sz[22]=='80D' or $sz[23]=='80D' or $sz[24]=='80D' or $sz[25]=='80D' or $sz[26]=='80D' or $sz[27]=='80D' or $sz[28]=='80D' or $sz[29]=='80D' or $sz[30]=='80D' or $sz[31]=='80D' or $sz[32]=='80D' or $sz[33]=='80D' or $sz[34]=='80D' or $sz[35]=='80D' or $sz[36]=='80D' or $sz[37]=='80D' or $sz[38]=='80D' or $sz[39]=='80D' or $sz[40]=='80D' or $sz[41]=='80D' or $sz[42]=='80D' or $sz[43]=='80D' or $sz[44]=='80D' or $sz[45]=='80D' or $sz[46]=='80D' or $sz[47]=='80D' or $sz[48]=='80D' or $sz[49]=='80D' or $sz[50]=='80D' or $sz[51]=='80D' or $sz[52]=='80D' or $sz[53]=='80D' or $sz[54]=='80D' or $sz[55]=='80D' or $sz[56]=='80D' or $sz[57]=='80D' or $sz[58]=='80D' or $sz[59]=='80D'  or $sz[60]=='80D' or $sz[61]=='80D' or $sz[62]=='80D' or $sz[63]=='80D' or $sz[64]=='80D' or $sz[65]=='80D' or $sz[66]=='80D' or $sz[67]=='80D' or $sz[68]=='80D' or $sz[69]=='80D' or $sz[70]=='80D' or $sz[71]=='80D' or $sz[72]=='80D' or $sz[73]=='80D' or $sz[74]=='80D' or $sz[75]=='80D' or $sz[76]=='80D' or $sz[77]=='80D' or $sz[78]=='80D' or $sz[79]=='80D' or $sz[80]=='80D')
{echo "<nobr><input name='size[]' type='checkbox' value='80D' checked>80D</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='80D'>80D</nobr>";}

if ( $sz[0]=='80DD' or $sz[1]=='80DD' or $sz[2]=='80DD' or $sz[3]=='80DD' or $sz[4]=='80DD' or $sz[5]=='80DD' or $sz[6]=='80DD' or $sz[7]=='80DD' or $sz[8]=='80DD' or $sz[9]=='80DD' or $sz[10]=='80DD' or $sz[11]=='80DD' or $sz[12]=='80DD' or $sz[13]=='80DD' or $sz[14]=='80DD' or $sz[15]=='80DD' or $sz[16]=='80DD' or $sz[17]=='80DD' or $sz[18]=='80DD' or $sz[19]=='80DD' or $sz[20]=='80DD' or $sz[21]=='80DD' or $sz[22]=='80DD' or $sz[23]=='80DD' or $sz[24]=='80DD' or $sz[25]=='80DD' or $sz[26]=='80DD' or $sz[27]=='80DD' or $sz[28]=='80DD' or $sz[29]=='80DD' or $sz[30]=='80DD' or $sz[31]=='80DD' or $sz[32]=='80DD' or $sz[33]=='80DD' or $sz[34]=='80DD' or $sz[35]=='80DD' or $sz[36]=='80DD' or $sz[37]=='80DD' or $sz[38]=='80DD' or $sz[39]=='80DD' or $sz[40]=='80DD' or $sz[41]=='80DD' or $sz[42]=='80DD' or $sz[43]=='80DD' or $sz[44]=='80DD' or $sz[45]=='80DD' or $sz[46]=='80DD' or $sz[47]=='80DD' or $sz[48]=='80DD' or $sz[49]=='80DD' or $sz[50]=='80DD' or $sz[51]=='80DD' or $sz[52]=='80DD' or $sz[53]=='80DD' or $sz[54]=='80DD' or $sz[55]=='80DD' or $sz[56]=='80DD' or $sz[57]=='80DD' or $sz[58]=='80DD' or $sz[59]=='80DD'  or $sz[60]=='80DD' or $sz[61]=='80DD' or $sz[62]=='80DD' or $sz[63]=='80DD' or $sz[64]=='80DD' or $sz[65]=='80DD' or $sz[66]=='80DD' or $sz[67]=='80DD' or $sz[68]=='80DD' or $sz[69]=='80DD' or $sz[70]=='80DD' or $sz[71]=='80DD' or $sz[72]=='80DD' or $sz[73]=='80DD' or $sz[74]=='80DD' or $sz[75]=='80DD' or $sz[76]=='80DD' or $sz[77]=='80DD' or $sz[78]=='80DD' or $sz[79]=='80DD' or $sz[80]=='80DD')
{echo "<nobr><input name='size[]' type='checkbox' value='80DD' checked>80DD</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='80DD'>80DD</nobr>";}

if ( $sz[0]=='80E' or $sz[1]=='80E' or $sz[2]=='80E' or $sz[3]=='80E' or $sz[4]=='80E' or $sz[5]=='80E' or $sz[6]=='80E' or $sz[7]=='80E' or $sz[8]=='80E' or $sz[9]=='80E' or $sz[10]=='80E' or $sz[11]=='80E' or $sz[12]=='80E' or $sz[13]=='80E' or $sz[14]=='80E' or $sz[15]=='80E' or $sz[16]=='80E' or $sz[17]=='80E' or $sz[18]=='80E' or $sz[19]=='80E' or $sz[20]=='80E' or $sz[21]=='80E' or $sz[22]=='80E' or $sz[23]=='80E' or $sz[24]=='80E' or $sz[25]=='80E' or $sz[26]=='80E' or $sz[27]=='80E' or $sz[28]=='80E' or $sz[29]=='80E' or $sz[30]=='80E' or $sz[31]=='80E' or $sz[32]=='80E' or $sz[33]=='80E' or $sz[34]=='80E' or $sz[35]=='80E' or $sz[36]=='80E' or $sz[37]=='80E' or $sz[38]=='80E' or $sz[39]=='80E' or $sz[40]=='80E' or $sz[41]=='80E' or $sz[42]=='80E' or $sz[43]=='80E' or $sz[44]=='80E' or $sz[45]=='80E' or $sz[46]=='80E' or $sz[47]=='80E' or $sz[48]=='80E' or $sz[49]=='80E' or $sz[50]=='80E' or $sz[51]=='80E' or $sz[52]=='80E' or $sz[53]=='80E' or $sz[54]=='80E' or $sz[55]=='80E' or $sz[56]=='80E' or $sz[57]=='80E' or $sz[58]=='80E' or $sz[59]=='80E'  or $sz[60]=='80E' or $sz[61]=='80E' or $sz[62]=='80E' or $sz[63]=='80E' or $sz[64]=='80E' or $sz[65]=='80E' or $sz[66]=='80E' or $sz[67]=='80E' or $sz[68]=='80E' or $sz[69]=='80E' or $sz[70]=='80E' or $sz[71]=='80E' or $sz[72]=='80E' or $sz[73]=='80E' or $sz[74]=='80E' or $sz[75]=='80E' or $sz[76]=='80E' or $sz[77]=='80E' or $sz[78]=='80E' or $sz[79]=='80E' or $sz[80]=='80E')
{echo "<nobr><input name='size[]' type='checkbox' value='80E' checked>80E</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='80E'>80E</nobr>";}

if ( $sz[0]=='80F' or $sz[1]=='80F' or $sz[2]=='80F' or $sz[3]=='80F' or $sz[4]=='80F' or $sz[5]=='80F' or $sz[6]=='80F' or $sz[7]=='80F' or $sz[8]=='80F' or $sz[9]=='80F' or $sz[10]=='80F' or $sz[11]=='80F' or $sz[12]=='80F' or $sz[13]=='80F' or $sz[14]=='80F' or $sz[15]=='80F' or $sz[16]=='80F' or $sz[17]=='80F' or $sz[18]=='80F' or $sz[19]=='80F' or $sz[20]=='80F' or $sz[21]=='80F' or $sz[22]=='80F' or $sz[23]=='80F' or $sz[24]=='80F' or $sz[25]=='80F' or $sz[26]=='80F' or $sz[27]=='80F' or $sz[28]=='80F' or $sz[29]=='80F' or $sz[30]=='80F' or $sz[31]=='80F' or $sz[32]=='80F' or $sz[33]=='80F' or $sz[34]=='80F' or $sz[35]=='80F' or $sz[36]=='80F' or $sz[37]=='80F' or $sz[38]=='80F' or $sz[39]=='80F' or $sz[40]=='80F' or $sz[41]=='80F' or $sz[42]=='80F' or $sz[43]=='80F' or $sz[44]=='80F' or $sz[45]=='80F' or $sz[46]=='80F' or $sz[47]=='80F' or $sz[48]=='80F' or $sz[49]=='80F' or $sz[50]=='80F' or $sz[51]=='80F' or $sz[52]=='80F' or $sz[53]=='80F' or $sz[54]=='80F' or $sz[55]=='80F' or $sz[56]=='80F' or $sz[57]=='80F' or $sz[58]=='80F' or $sz[59]=='80F'  or $sz[60]=='80F' or $sz[61]=='80F' or $sz[62]=='80F' or $sz[63]=='80F' or $sz[64]=='80F' or $sz[65]=='80F' or $sz[66]=='80F' or $sz[67]=='80F' or $sz[68]=='80F' or $sz[69]=='80F' or $sz[70]=='80F' or $sz[71]=='80F' or $sz[72]=='80F' or $sz[73]=='80F' or $sz[74]=='80F' or $sz[75]=='80F' or $sz[76]=='80F' or $sz[77]=='80F' or $sz[78]=='80F' or $sz[79]=='80F' or $sz[80]=='80F')
{echo "<nobr><input name='size[]' type='checkbox' value='80F' checked>80F</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='80F'>80F</nobr>";}

if ( $sz[0]=='80FF' or $sz[1]=='80FF' or $sz[2]=='80FF' or $sz[3]=='80FF' or $sz[4]=='80FF' or $sz[5]=='80FF' or $sz[6]=='80FF' or $sz[7]=='80FF' or $sz[8]=='80FF' or $sz[9]=='80FF' or $sz[10]=='80FF' or $sz[11]=='80FF' or $sz[12]=='80FF' or $sz[13]=='80FF' or $sz[14]=='80FF' or $sz[15]=='80FF' or $sz[16]=='80FF' or $sz[17]=='80FF' or $sz[18]=='80FF' or $sz[19]=='80FF' or $sz[20]=='80FF' or $sz[21]=='80FF' or $sz[22]=='80FF' or $sz[23]=='80FF' or $sz[24]=='80FF' or $sz[25]=='80FF' or $sz[26]=='80FF' or $sz[27]=='80FF' or $sz[28]=='80FF' or $sz[29]=='80FF' or $sz[30]=='80FF' or $sz[31]=='80FF' or $sz[32]=='80FF' or $sz[33]=='80FF' or $sz[34]=='80FF' or $sz[35]=='80FF' or $sz[36]=='80FF' or $sz[37]=='80FF' or $sz[38]=='80FF' or $sz[39]=='80FF' or $sz[40]=='80FF' or $sz[41]=='80FF' or $sz[42]=='80FF' or $sz[43]=='80FF' or $sz[44]=='80FF' or $sz[45]=='80FF' or $sz[46]=='80FF' or $sz[47]=='80FF' or $sz[48]=='80FF' or $sz[49]=='80FF' or $sz[50]=='80FF' or $sz[51]=='80FF' or $sz[52]=='80FF' or $sz[53]=='80FF' or $sz[54]=='80FF' or $sz[55]=='80FF' or $sz[56]=='80FF' or $sz[57]=='80FF' or $sz[58]=='80FF' or $sz[59]=='80FF'  or $sz[60]=='80FF' or $sz[61]=='80FF' or $sz[62]=='80FF' or $sz[63]=='80FF' or $sz[64]=='80FF' or $sz[65]=='80FF' or $sz[66]=='80FF' or $sz[67]=='80FF' or $sz[68]=='80FF' or $sz[69]=='80FF' or $sz[70]=='80FF' or $sz[71]=='80FF' or $sz[72]=='80FF' or $sz[73]=='80FF' or $sz[74]=='80FF' or $sz[75]=='80FF' or $sz[76]=='80FF' or $sz[77]=='80FF' or $sz[78]=='80FF' or $sz[79]=='80FF' or $sz[80]=='80FF')
{echo "<nobr><input name='size[]' type='checkbox' value='80FF' checked>80FF</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='80FF'>80FF</nobr>";}

if ( $sz[0]=='80G' or $sz[1]=='80G' or $sz[2]=='80G' or $sz[3]=='80G' or $sz[4]=='80G' or $sz[5]=='80G' or $sz[6]=='80G' or $sz[7]=='80G' or $sz[8]=='80G' or $sz[9]=='80G' or $sz[10]=='80G' or $sz[11]=='80G' or $sz[12]=='80G' or $sz[13]=='80G' or $sz[14]=='80G' or $sz[15]=='80G' or $sz[16]=='80G' or $sz[17]=='80G' or $sz[18]=='80G' or $sz[19]=='80G' or $sz[20]=='80G' or $sz[21]=='80G' or $sz[22]=='80G' or $sz[23]=='80G' or $sz[24]=='80G' or $sz[25]=='80G' or $sz[26]=='80G' or $sz[27]=='80G' or $sz[28]=='80G' or $sz[29]=='80G' or $sz[30]=='80G' or $sz[31]=='80G' or $sz[32]=='80G' or $sz[33]=='80G' or $sz[34]=='80G' or $sz[35]=='80G' or $sz[36]=='80G' or $sz[37]=='80G' or $sz[38]=='80G' or $sz[39]=='80G' or $sz[40]=='80G' or $sz[41]=='80G' or $sz[42]=='80G' or $sz[43]=='80G' or $sz[44]=='80G' or $sz[45]=='80G' or $sz[46]=='80G' or $sz[47]=='80G' or $sz[48]=='80G' or $sz[49]=='80G' or $sz[50]=='80G' or $sz[51]=='80G' or $sz[52]=='80G' or $sz[53]=='80G' or $sz[54]=='80G' or $sz[55]=='80G' or $sz[56]=='80G' or $sz[57]=='80G' or $sz[58]=='80G' or $sz[59]=='80G'  or $sz[60]=='80G' or $sz[61]=='80G' or $sz[62]=='80G' or $sz[63]=='80G' or $sz[64]=='80G' or $sz[65]=='80G' or $sz[66]=='80G' or $sz[67]=='80G' or $sz[68]=='80G' or $sz[69]=='80G' or $sz[70]=='80G' or $sz[71]=='80G' or $sz[72]=='80G' or $sz[73]=='80G' or $sz[74]=='80G' or $sz[75]=='80G' or $sz[76]=='80G' or $sz[77]=='80G' or $sz[78]=='80G' or $sz[79]=='80G' or $sz[80]=='80G')
{echo "<nobr><input name='size[]' type='checkbox' value='80G' checked>80G</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='80G'>80G</nobr>";}

if ( $sz[0]=='80H' or $sz[1]=='80H' or $sz[2]=='80H' or $sz[3]=='80H' or $sz[4]=='80H' or $sz[5]=='80H' or $sz[6]=='80H' or $sz[7]=='80H' or $sz[8]=='80H' or $sz[9]=='80H' or $sz[10]=='80H' or $sz[11]=='80H' or $sz[12]=='80H' or $sz[13]=='80H' or $sz[14]=='80H' or $sz[15]=='80H' or $sz[16]=='80H' or $sz[17]=='80H' or $sz[18]=='80H' or $sz[19]=='80H' or $sz[20]=='80H' or $sz[21]=='80H' or $sz[22]=='80H' or $sz[23]=='80H' or $sz[24]=='80H' or $sz[25]=='80H' or $sz[26]=='80H' or $sz[27]=='80H' or $sz[28]=='80H' or $sz[29]=='80H' or $sz[30]=='80H' or $sz[31]=='80H' or $sz[32]=='80H' or $sz[33]=='80H' or $sz[34]=='80H' or $sz[35]=='80H' or $sz[36]=='80H' or $sz[37]=='80H' or $sz[38]=='80H' or $sz[39]=='80H' or $sz[40]=='80H' or $sz[41]=='80H' or $sz[42]=='80H' or $sz[43]=='80H' or $sz[44]=='80H' or $sz[45]=='80H' or $sz[46]=='80H' or $sz[47]=='80H' or $sz[48]=='80H' or $sz[49]=='80H' or $sz[50]=='80H' or $sz[51]=='80H' or $sz[52]=='80H' or $sz[53]=='80H' or $sz[54]=='80H' or $sz[55]=='80H' or $sz[56]=='80H' or $sz[57]=='80H' or $sz[58]=='80H' or $sz[59]=='80H'  or $sz[60]=='80H' or $sz[61]=='80H' or $sz[62]=='80H' or $sz[63]=='80H' or $sz[64]=='80H' or $sz[65]=='80H' or $sz[66]=='80H' or $sz[67]=='80H' or $sz[68]=='80H' or $sz[69]=='80H' or $sz[70]=='80H' or $sz[71]=='80H' or $sz[72]=='80H' or $sz[73]=='80H' or $sz[74]=='80H' or $sz[75]=='80H' or $sz[76]=='80H' or $sz[77]=='80H' or $sz[78]=='80H' or $sz[79]=='80H' or $sz[80]=='80H')
{echo "<nobr><input name='size[]' type='checkbox' value='80H' checked>80H</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='80H'>80H</nobr>";}

if ( $sz[0]=='80I' or $sz[1]=='80I' or $sz[2]=='80I' or $sz[3]=='80I' or $sz[4]=='80I' or $sz[5]=='80I' or $sz[6]=='80I' or $sz[7]=='80I' or $sz[8]=='80I' or $sz[9]=='80I' or $sz[10]=='80I' or $sz[11]=='80I' or $sz[12]=='80I' or $sz[13]=='80I' or $sz[14]=='80I' or $sz[15]=='80I' or $sz[16]=='80I' or $sz[17]=='80I' or $sz[18]=='80I' or $sz[19]=='80I' or $sz[20]=='80I' or $sz[21]=='80I' or $sz[22]=='80I' or $sz[23]=='80I' or $sz[24]=='80I' or $sz[25]=='80I' or $sz[26]=='80I' or $sz[27]=='80I' or $sz[28]=='80I' or $sz[29]=='80I' or $sz[30]=='80I' or $sz[31]=='80I' or $sz[32]=='80I' or $sz[33]=='80I' or $sz[34]=='80I' or $sz[35]=='80I' or $sz[36]=='80I' or $sz[37]=='80I' or $sz[38]=='80I' or $sz[39]=='80I' or $sz[40]=='80I' or $sz[41]=='80I' or $sz[42]=='80I' or $sz[43]=='80I' or $sz[44]=='80I' or $sz[45]=='80I' or $sz[46]=='80I' or $sz[47]=='80I' or $sz[48]=='80I' or $sz[49]=='80I' or $sz[50]=='80I' or $sz[51]=='80I' or $sz[52]=='80I' or $sz[53]=='80I' or $sz[54]=='80I' or $sz[55]=='80I' or $sz[56]=='80I' or $sz[57]=='80I' or $sz[58]=='80I' or $sz[59]=='80I'  or $sz[60]=='80I' or $sz[61]=='80I' or $sz[62]=='80I' or $sz[63]=='80I' or $sz[64]=='80I' or $sz[65]=='80I' or $sz[66]=='80I' or $sz[67]=='80I' or $sz[68]=='80I' or $sz[69]=='80I' or $sz[70]=='80I' or $sz[71]=='80I' or $sz[72]=='80I' or $sz[73]=='80I' or $sz[74]=='80I' or $sz[75]=='80I' or $sz[76]=='80I' or $sz[77]=='80I' or $sz[78]=='80I' or $sz[79]=='80I' or $sz[80]=='80I')
{echo "<nobr><input name='size[]' type='checkbox' value='80I' checked>80I</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='80I'>80I</nobr>";}

if ( $sz[0]=='80J' or $sz[1]=='80J' or $sz[2]=='80J' or $sz[3]=='80J' or $sz[4]=='80J' or $sz[5]=='80J' or $sz[6]=='80J' or $sz[7]=='80J' or $sz[8]=='80J' or $sz[9]=='80J' or $sz[10]=='80J' or $sz[11]=='80J' or $sz[12]=='80J' or $sz[13]=='80J' or $sz[14]=='80J' or $sz[15]=='80J' or $sz[16]=='80J' or $sz[17]=='80J' or $sz[18]=='80J' or $sz[19]=='80J' or $sz[20]=='80J' or $sz[21]=='80J' or $sz[22]=='80J' or $sz[23]=='80J' or $sz[24]=='80J' or $sz[25]=='80J' or $sz[26]=='80J' or $sz[27]=='80J' or $sz[28]=='80J' or $sz[29]=='80J' or $sz[30]=='80J' or $sz[31]=='80J' or $sz[32]=='80J' or $sz[33]=='80J' or $sz[34]=='80J' or $sz[35]=='80J' or $sz[36]=='80J' or $sz[37]=='80J' or $sz[38]=='80J' or $sz[39]=='80J' or $sz[40]=='80J' or $sz[41]=='80J' or $sz[42]=='80J' or $sz[43]=='80J' or $sz[44]=='80J' or $sz[45]=='80J' or $sz[46]=='80J' or $sz[47]=='80J' or $sz[48]=='80J' or $sz[49]=='80J' or $sz[50]=='80J' or $sz[51]=='80J' or $sz[52]=='80J' or $sz[53]=='80J' or $sz[54]=='80J' or $sz[55]=='80J' or $sz[56]=='80J' or $sz[57]=='80J' or $sz[58]=='80J' or $sz[59]=='80J'  or $sz[60]=='80J' or $sz[61]=='80J' or $sz[62]=='80J' or $sz[63]=='80J' or $sz[64]=='80J' or $sz[65]=='80J' or $sz[66]=='80J' or $sz[67]=='80J' or $sz[68]=='80J' or $sz[69]=='80J' or $sz[70]=='80J' or $sz[71]=='80J' or $sz[72]=='80J' or $sz[73]=='80J' or $sz[74]=='80J' or $sz[75]=='80J' or $sz[76]=='80J' or $sz[77]=='80J' or $sz[78]=='80J' or $sz[79]=='80J' or $sz[80]=='80J')
{echo "<nobr><input name='size[]' type='checkbox' value='80J' checked>80J</nobr><br>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='80J'>80J</nobr><br>";}


if ( $sz[0]=='85A' or $sz[1]=='85A' or $sz[2]=='85A' or $sz[3]=='85A' or $sz[4]=='85A' or $sz[5]=='85A' or $sz[6]=='85A' or $sz[7]=='85A' or $sz[8]=='85A' or $sz[9]=='85A' or $sz[10]=='85A' or $sz[11]=='85A' or $sz[12]=='85A' or $sz[13]=='85A' or $sz[14]=='85A' or $sz[15]=='85A' or $sz[16]=='85A' or $sz[17]=='85A' or $sz[18]=='85A' or $sz[19]=='85A' or $sz[20]=='85A' or $sz[21]=='85A' or $sz[22]=='85A' or $sz[23]=='85A' or $sz[24]=='85A' or $sz[25]=='85A' or $sz[26]=='85A' or $sz[27]=='85A' or $sz[28]=='85A' or $sz[29]=='85A' or $sz[30]=='85A' or $sz[31]=='85A' or $sz[32]=='85A' or $sz[33]=='85A' or $sz[34]=='85A' or $sz[35]=='85A' or $sz[36]=='85A' or $sz[37]=='85A' or $sz[38]=='85A' or $sz[39]=='85A' or $sz[40]=='85A' or $sz[41]=='85A' or $sz[42]=='85A' or $sz[43]=='85A' or $sz[44]=='85A' or $sz[45]=='85A' or $sz[46]=='85A' or $sz[47]=='85A' or $sz[48]=='85A' or $sz[49]=='85A' or $sz[50]=='85A' or $sz[51]=='85A' or $sz[52]=='85A' or $sz[53]=='85A' or $sz[54]=='85A' or $sz[55]=='85A' or $sz[56]=='85A' or $sz[57]=='85A' or $sz[58]=='85A' or $sz[59]=='85A'  or $sz[60]=='85A' or $sz[61]=='85A' or $sz[62]=='85A' or $sz[63]=='85A' or $sz[64]=='85A' or $sz[65]=='85A' or $sz[66]=='85A' or $sz[67]=='85A' or $sz[68]=='85A' or $sz[69]=='85A' or $sz[70]=='85A' or $sz[71]=='85A' or $sz[72]=='85A' or $sz[73]=='85A' or $sz[74]=='85A' or $sz[75]=='85A' or $sz[76]=='85A' or $sz[77]=='85A' or $sz[78]=='85A' or $sz[79]=='85A' or $sz[80]=='85A')
{echo "<nobr><input name='size[]' type='checkbox' value='85A' checked>85A</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='85A'>85A</nobr>";}

if ( $sz[0]=='85B' or $sz[1]=='85B' or $sz[2]=='85B' or $sz[3]=='85B' or $sz[4]=='85B' or $sz[5]=='85B' or $sz[6]=='85B' or $sz[7]=='85B' or $sz[8]=='85B' or $sz[9]=='85B' or $sz[10]=='85B' or $sz[11]=='85B' or $sz[12]=='85B' or $sz[13]=='85B' or $sz[14]=='85B' or $sz[15]=='85B' or $sz[16]=='85B' or $sz[17]=='85B' or $sz[18]=='85B' or $sz[19]=='85B' or $sz[20]=='85B' or $sz[21]=='85B' or $sz[22]=='85B' or $sz[23]=='85B' or $sz[24]=='85B' or $sz[25]=='85B' or $sz[26]=='85B' or $sz[27]=='85B' or $sz[28]=='85B' or $sz[29]=='85B' or $sz[30]=='85B' or $sz[31]=='85B' or $sz[32]=='85B' or $sz[33]=='85B' or $sz[34]=='85B' or $sz[35]=='85B' or $sz[36]=='85B' or $sz[37]=='85B' or $sz[38]=='85B' or $sz[39]=='85B' or $sz[40]=='85B' or $sz[41]=='85B' or $sz[42]=='85B' or $sz[43]=='85B' or $sz[44]=='85B' or $sz[45]=='85B' or $sz[46]=='85B' or $sz[47]=='85B' or $sz[48]=='85B' or $sz[49]=='85B' or $sz[50]=='85B' or $sz[51]=='85B' or $sz[52]=='85B' or $sz[53]=='85B' or $sz[54]=='85B' or $sz[55]=='85B' or $sz[56]=='85B' or $sz[57]=='85B' or $sz[58]=='85B' or $sz[59]=='85B'  or $sz[60]=='85B' or $sz[61]=='85B' or $sz[62]=='85B' or $sz[63]=='85B' or $sz[64]=='85B' or $sz[65]=='85B' or $sz[66]=='85B' or $sz[67]=='85B' or $sz[68]=='85B' or $sz[69]=='85B' or $sz[70]=='85B' or $sz[71]=='85B' or $sz[72]=='85B' or $sz[73]=='85B' or $sz[74]=='85B' or $sz[75]=='85B' or $sz[76]=='85B' or $sz[77]=='85B' or $sz[78]=='85B' or $sz[79]=='85B' or $sz[80]=='85B')
{echo "<nobr><input name='size[]' type='checkbox' value='85B' checked>85B</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='85B'>85B</nobr>";}

if ( $sz[0]=='85C' or $sz[1]=='85C' or $sz[2]=='85C' or $sz[3]=='85C' or $sz[4]=='85C' or $sz[5]=='85C' or $sz[6]=='85C' or $sz[7]=='85C' or $sz[8]=='85C' or $sz[9]=='85C' or $sz[10]=='85C' or $sz[11]=='85C' or $sz[12]=='85C' or $sz[13]=='85C' or $sz[14]=='85C' or $sz[15]=='85C' or $sz[16]=='85C' or $sz[17]=='85C' or $sz[18]=='85C' or $sz[19]=='85C' or $sz[20]=='85C' or $sz[21]=='85C' or $sz[22]=='85C' or $sz[23]=='85C' or $sz[24]=='85C' or $sz[25]=='85C' or $sz[26]=='85C' or $sz[27]=='85C' or $sz[28]=='85C' or $sz[29]=='85C' or $sz[30]=='85C' or $sz[31]=='85C' or $sz[32]=='85C' or $sz[33]=='85C' or $sz[34]=='85C' or $sz[35]=='85C' or $sz[36]=='85C' or $sz[37]=='85C' or $sz[38]=='85C' or $sz[39]=='85C' or $sz[40]=='85C' or $sz[41]=='85C' or $sz[42]=='85C' or $sz[43]=='85C' or $sz[44]=='85C' or $sz[45]=='85C' or $sz[46]=='85C' or $sz[47]=='85C' or $sz[48]=='85C' or $sz[49]=='85C' or $sz[50]=='85C' or $sz[51]=='85C' or $sz[52]=='85C' or $sz[53]=='85C' or $sz[54]=='85C' or $sz[55]=='85C' or $sz[56]=='85C' or $sz[57]=='85C' or $sz[58]=='85C' or $sz[59]=='85C'  or $sz[60]=='85C' or $sz[61]=='85C' or $sz[62]=='85C' or $sz[63]=='85C' or $sz[64]=='85C' or $sz[65]=='85C' or $sz[66]=='85C' or $sz[67]=='85C' or $sz[68]=='85C' or $sz[69]=='85C' or $sz[70]=='85C' or $sz[71]=='85C' or $sz[72]=='85C' or $sz[73]=='85C' or $sz[74]=='85C' or $sz[75]=='85C' or $sz[76]=='85C' or $sz[77]=='85C' or $sz[78]=='85C' or $sz[79]=='85C' or $sz[80]=='85C')
{echo "<nobr><input name='size[]' type='checkbox' value='85C' checked>85C</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='85C'>85C</nobr>";}

if ( $sz[0]=='85D' or $sz[1]=='85D' or $sz[2]=='85D' or $sz[3]=='85D' or $sz[4]=='85D' or $sz[5]=='85D' or $sz[6]=='85D' or $sz[7]=='85D' or $sz[8]=='85D' or $sz[9]=='85D' or $sz[10]=='85D' or $sz[11]=='85D' or $sz[12]=='85D' or $sz[13]=='85D' or $sz[14]=='85D' or $sz[15]=='85D' or $sz[16]=='85D' or $sz[17]=='85D' or $sz[18]=='85D' or $sz[19]=='85D' or $sz[20]=='85D' or $sz[21]=='85D' or $sz[22]=='85D' or $sz[23]=='85D' or $sz[24]=='85D' or $sz[25]=='85D' or $sz[26]=='85D' or $sz[27]=='85D' or $sz[28]=='85D' or $sz[29]=='85D' or $sz[30]=='85D' or $sz[31]=='85D' or $sz[32]=='85D' or $sz[33]=='85D' or $sz[34]=='85D' or $sz[35]=='85D' or $sz[36]=='85D' or $sz[37]=='85D' or $sz[38]=='85D' or $sz[39]=='85D' or $sz[40]=='85D' or $sz[41]=='85D' or $sz[42]=='85D' or $sz[43]=='85D' or $sz[44]=='85D' or $sz[45]=='85D' or $sz[46]=='85D' or $sz[47]=='85D' or $sz[48]=='85D' or $sz[49]=='85D' or $sz[50]=='85D' or $sz[51]=='85D' or $sz[52]=='85D' or $sz[53]=='85D' or $sz[54]=='85D' or $sz[55]=='85D' or $sz[56]=='85D' or $sz[57]=='85D' or $sz[58]=='85D' or $sz[59]=='85D'  or $sz[60]=='85D' or $sz[61]=='85D' or $sz[62]=='85D' or $sz[63]=='85D' or $sz[64]=='85D' or $sz[65]=='85D' or $sz[66]=='85D' or $sz[67]=='85D' or $sz[68]=='85D' or $sz[69]=='85D' or $sz[70]=='85D' or $sz[71]=='85D' or $sz[72]=='85D' or $sz[73]=='85D' or $sz[74]=='85D' or $sz[75]=='85D' or $sz[76]=='85D' or $sz[77]=='85D' or $sz[78]=='85D' or $sz[79]=='85D' or $sz[80]=='85D')
{echo "<nobr><input name='size[]' type='checkbox' value='85D' checked>85D</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='85D'>85D</nobr>";}

if ( $sz[0]=='85DD' or $sz[1]=='85DD' or $sz[2]=='85DD' or $sz[3]=='85DD' or $sz[4]=='85DD' or $sz[5]=='85DD' or $sz[6]=='85DD' or $sz[7]=='85DD' or $sz[8]=='85DD' or $sz[9]=='85DD' or $sz[10]=='85DD' or $sz[11]=='85DD' or $sz[12]=='85DD' or $sz[13]=='85DD' or $sz[14]=='85DD' or $sz[15]=='85DD' or $sz[16]=='85DD' or $sz[17]=='85DD' or $sz[18]=='85DD' or $sz[19]=='85DD' or $sz[20]=='85DD' or $sz[21]=='85DD' or $sz[22]=='85DD' or $sz[23]=='85DD' or $sz[24]=='85DD' or $sz[25]=='85DD' or $sz[26]=='85DD' or $sz[27]=='85DD' or $sz[28]=='85DD' or $sz[29]=='85DD' or $sz[30]=='85DD' or $sz[31]=='85DD' or $sz[32]=='85DD' or $sz[33]=='85DD' or $sz[34]=='85DD' or $sz[35]=='85DD' or $sz[36]=='85DD' or $sz[37]=='85DD' or $sz[38]=='85DD' or $sz[39]=='85DD' or $sz[40]=='85DD' or $sz[41]=='85DD' or $sz[42]=='85DD' or $sz[43]=='85DD' or $sz[44]=='85DD' or $sz[45]=='85DD' or $sz[46]=='85DD' or $sz[47]=='85DD' or $sz[48]=='85DD' or $sz[49]=='85DD' or $sz[50]=='85DD' or $sz[51]=='85DD' or $sz[52]=='85DD' or $sz[53]=='85DD' or $sz[54]=='85DD' or $sz[55]=='85DD' or $sz[56]=='85DD' or $sz[57]=='85DD' or $sz[58]=='85DD' or $sz[59]=='85DD'  or $sz[60]=='85DD' or $sz[61]=='85DD' or $sz[62]=='85DD' or $sz[63]=='85DD' or $sz[64]=='85DD' or $sz[65]=='85DD' or $sz[66]=='85DD' or $sz[67]=='85DD' or $sz[68]=='85DD' or $sz[69]=='85DD' or $sz[70]=='85DD' or $sz[71]=='85DD' or $sz[72]=='85DD' or $sz[73]=='85DD' or $sz[74]=='85DD' or $sz[75]=='85DD' or $sz[76]=='85DD' or $sz[77]=='85DD' or $sz[78]=='85DD' or $sz[79]=='85DD' or $sz[80]=='85DD')
{echo "<nobr><input name='size[]' type='checkbox' value='85DD' checked>85DD</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='85DD'>85DD</nobr>";}

if ( $sz[0]=='85E' or $sz[1]=='85E' or $sz[2]=='85E' or $sz[3]=='85E' or $sz[4]=='85E' or $sz[5]=='85E' or $sz[6]=='85E' or $sz[7]=='85E' or $sz[8]=='85E' or $sz[9]=='85E' or $sz[10]=='85E' or $sz[11]=='85E' or $sz[12]=='85E' or $sz[13]=='85E' or $sz[14]=='85E' or $sz[15]=='85E' or $sz[16]=='85E' or $sz[17]=='85E' or $sz[18]=='85E' or $sz[19]=='85E' or $sz[20]=='85E' or $sz[21]=='85E' or $sz[22]=='85E' or $sz[23]=='85E' or $sz[24]=='85E' or $sz[25]=='85E' or $sz[26]=='85E' or $sz[27]=='85E' or $sz[28]=='85E' or $sz[29]=='85E' or $sz[30]=='85E' or $sz[31]=='85E' or $sz[32]=='85E' or $sz[33]=='85E' or $sz[34]=='85E' or $sz[35]=='85E' or $sz[36]=='85E' or $sz[37]=='85E' or $sz[38]=='85E' or $sz[39]=='85E' or $sz[40]=='85E' or $sz[41]=='85E' or $sz[42]=='85E' or $sz[43]=='85E' or $sz[44]=='85E' or $sz[45]=='85E' or $sz[46]=='85E' or $sz[47]=='85E' or $sz[48]=='85E' or $sz[49]=='85E' or $sz[50]=='85E' or $sz[51]=='85E' or $sz[52]=='85E' or $sz[53]=='85E' or $sz[54]=='85E' or $sz[55]=='85E' or $sz[56]=='85E' or $sz[57]=='85E' or $sz[58]=='85E' or $sz[59]=='85E'  or $sz[60]=='85E' or $sz[61]=='85E' or $sz[62]=='85E' or $sz[63]=='85E' or $sz[64]=='85E' or $sz[65]=='85E' or $sz[66]=='85E' or $sz[67]=='85E' or $sz[68]=='85E' or $sz[69]=='85E' or $sz[70]=='85E' or $sz[71]=='85E' or $sz[72]=='85E' or $sz[73]=='85E' or $sz[74]=='85E' or $sz[75]=='85E' or $sz[76]=='85E' or $sz[77]=='85E' or $sz[78]=='85E' or $sz[79]=='85E' or $sz[80]=='85E')
{echo "<nobr><input name='size[]' type='checkbox' value='85E' checked>85E</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='85E'>85E</nobr>";}

if ( $sz[0]=='85F' or $sz[1]=='85F' or $sz[2]=='85F' or $sz[3]=='85F' or $sz[4]=='85F' or $sz[5]=='85F' or $sz[6]=='85F' or $sz[7]=='85F' or $sz[8]=='85F' or $sz[9]=='85F' or $sz[10]=='85F' or $sz[11]=='85F' or $sz[12]=='85F' or $sz[13]=='85F' or $sz[14]=='85F' or $sz[15]=='85F' or $sz[16]=='85F' or $sz[17]=='85F' or $sz[18]=='85F' or $sz[19]=='85F' or $sz[20]=='85F' or $sz[21]=='85F' or $sz[22]=='85F' or $sz[23]=='85F' or $sz[24]=='85F' or $sz[25]=='85F' or $sz[26]=='85F' or $sz[27]=='85F' or $sz[28]=='85F' or $sz[29]=='85F' or $sz[30]=='85F' or $sz[31]=='85F' or $sz[32]=='85F' or $sz[33]=='85F' or $sz[34]=='85F' or $sz[35]=='85F' or $sz[36]=='85F' or $sz[37]=='85F' or $sz[38]=='85F' or $sz[39]=='85F' or $sz[40]=='85F' or $sz[41]=='85F' or $sz[42]=='85F' or $sz[43]=='85F' or $sz[44]=='85F' or $sz[45]=='85F' or $sz[46]=='85F' or $sz[47]=='85F' or $sz[48]=='85F' or $sz[49]=='85F' or $sz[50]=='85F' or $sz[51]=='85F' or $sz[52]=='85F' or $sz[53]=='85F' or $sz[54]=='85F' or $sz[55]=='85F' or $sz[56]=='85F' or $sz[57]=='85F' or $sz[58]=='85F' or $sz[59]=='85F'  or $sz[60]=='85F' or $sz[61]=='85F' or $sz[62]=='85F' or $sz[63]=='85F' or $sz[64]=='85F' or $sz[65]=='85F' or $sz[66]=='85F' or $sz[67]=='85F' or $sz[68]=='85F' or $sz[69]=='85F' or $sz[70]=='85F' or $sz[71]=='85F' or $sz[72]=='85F' or $sz[73]=='85F' or $sz[74]=='85F' or $sz[75]=='85F' or $sz[76]=='85F' or $sz[77]=='85F' or $sz[78]=='85F' or $sz[79]=='85F' or $sz[80]=='85F')
{echo "<nobr><input name='size[]' type='checkbox' value='85F' checked>85F</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='85F'>85F</nobr>";}

if ( $sz[0]=='85FF' or $sz[1]=='85FF' or $sz[2]=='85FF' or $sz[3]=='85FF' or $sz[4]=='85FF' or $sz[5]=='85FF' or $sz[6]=='85FF' or $sz[7]=='85FF' or $sz[8]=='85FF' or $sz[9]=='85FF' or $sz[10]=='85FF' or $sz[11]=='85FF' or $sz[12]=='85FF' or $sz[13]=='85FF' or $sz[14]=='85FF' or $sz[15]=='85FF' or $sz[16]=='85FF' or $sz[17]=='85FF' or $sz[18]=='85FF' or $sz[19]=='85FF' or $sz[20]=='85FF' or $sz[21]=='85FF' or $sz[22]=='85FF' or $sz[23]=='85FF' or $sz[24]=='85FF' or $sz[25]=='85FF' or $sz[26]=='85FF' or $sz[27]=='85FF' or $sz[28]=='85FF' or $sz[29]=='85FF' or $sz[30]=='85FF' or $sz[31]=='85FF' or $sz[32]=='85FF' or $sz[33]=='85FF' or $sz[34]=='85FF' or $sz[35]=='85FF' or $sz[36]=='85FF' or $sz[37]=='85FF' or $sz[38]=='85FF' or $sz[39]=='85FF' or $sz[40]=='85FF' or $sz[41]=='85FF' or $sz[42]=='85FF' or $sz[43]=='85FF' or $sz[44]=='85FF' or $sz[45]=='85FF' or $sz[46]=='85FF' or $sz[47]=='85FF' or $sz[48]=='85FF' or $sz[49]=='85FF' or $sz[50]=='85FF' or $sz[51]=='85FF' or $sz[52]=='85FF' or $sz[53]=='85FF' or $sz[54]=='85FF' or $sz[55]=='85FF' or $sz[56]=='85FF' or $sz[57]=='85FF' or $sz[58]=='85FF' or $sz[59]=='85FF'  or $sz[60]=='85FF' or $sz[61]=='85FF' or $sz[62]=='85FF' or $sz[63]=='85FF' or $sz[64]=='85FF' or $sz[65]=='85FF' or $sz[66]=='85FF' or $sz[67]=='85FF' or $sz[68]=='85FF' or $sz[69]=='85FF' or $sz[70]=='85FF' or $sz[71]=='85FF' or $sz[72]=='85FF' or $sz[73]=='85FF' or $sz[74]=='85FF' or $sz[75]=='85FF' or $sz[76]=='85FF' or $sz[77]=='85FF' or $sz[78]=='85FF' or $sz[79]=='85FF' or $sz[80]=='85FF')
{echo "<nobr><input name='size[]' type='checkbox' value='85FF' checked>85FF</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='85FF'>85FF</nobr>";}

if ( $sz[0]=='85G' or $sz[1]=='85G' or $sz[2]=='85G' or $sz[3]=='85G' or $sz[4]=='85G' or $sz[5]=='85G' or $sz[6]=='85G' or $sz[7]=='85G' or $sz[8]=='85G' or $sz[9]=='85G' or $sz[10]=='85G' or $sz[11]=='85G' or $sz[12]=='85G' or $sz[13]=='85G' or $sz[14]=='85G' or $sz[15]=='85G' or $sz[16]=='85G' or $sz[17]=='85G' or $sz[18]=='85G' or $sz[19]=='85G' or $sz[20]=='85G' or $sz[21]=='85G' or $sz[22]=='85G' or $sz[23]=='85G' or $sz[24]=='85G' or $sz[25]=='85G' or $sz[26]=='85G' or $sz[27]=='85G' or $sz[28]=='85G' or $sz[29]=='85G' or $sz[30]=='85G' or $sz[31]=='85G' or $sz[32]=='85G' or $sz[33]=='85G' or $sz[34]=='85G' or $sz[35]=='85G' or $sz[36]=='85G' or $sz[37]=='85G' or $sz[38]=='85G' or $sz[39]=='85G' or $sz[40]=='85G' or $sz[41]=='85G' or $sz[42]=='85G' or $sz[43]=='85G' or $sz[44]=='85G' or $sz[45]=='85G' or $sz[46]=='85G' or $sz[47]=='85G' or $sz[48]=='85G' or $sz[49]=='85G' or $sz[50]=='85G' or $sz[51]=='85G' or $sz[52]=='85G' or $sz[53]=='85G' or $sz[54]=='85G' or $sz[55]=='85G' or $sz[56]=='85G' or $sz[57]=='85G' or $sz[58]=='85G' or $sz[59]=='85G'  or $sz[60]=='85G' or $sz[61]=='85G' or $sz[62]=='85G' or $sz[63]=='85G' or $sz[64]=='85G' or $sz[65]=='85G' or $sz[66]=='85G' or $sz[67]=='85G' or $sz[68]=='85G' or $sz[69]=='85G' or $sz[70]=='85G' or $sz[71]=='85G' or $sz[72]=='85G' or $sz[73]=='85G' or $sz[74]=='85G' or $sz[75]=='85G' or $sz[76]=='85G' or $sz[77]=='85G' or $sz[78]=='85G' or $sz[79]=='85G' or $sz[80]=='85G')
{echo "<nobr><input name='size[]' type='checkbox' value='85G' checked>85G</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='85G'>85G</nobr>";}

if ( $sz[0]=='85H' or $sz[1]=='85H' or $sz[2]=='85H' or $sz[3]=='85H' or $sz[4]=='85H' or $sz[5]=='85H' or $sz[6]=='85H' or $sz[7]=='85H' or $sz[8]=='85H' or $sz[9]=='85H' or $sz[10]=='85H' or $sz[11]=='85H' or $sz[12]=='85H' or $sz[13]=='85H' or $sz[14]=='85H' or $sz[15]=='85H' or $sz[16]=='85H' or $sz[17]=='85H' or $sz[18]=='85H' or $sz[19]=='85H' or $sz[20]=='85H' or $sz[21]=='85H' or $sz[22]=='85H' or $sz[23]=='85H' or $sz[24]=='85H' or $sz[25]=='85H' or $sz[26]=='85H' or $sz[27]=='85H' or $sz[28]=='85H' or $sz[29]=='85H' or $sz[30]=='85H' or $sz[31]=='85H' or $sz[32]=='85H' or $sz[33]=='85H' or $sz[34]=='85H' or $sz[35]=='85H' or $sz[36]=='85H' or $sz[37]=='85H' or $sz[38]=='85H' or $sz[39]=='85H' or $sz[40]=='85H' or $sz[41]=='85H' or $sz[42]=='85H' or $sz[43]=='85H' or $sz[44]=='85H' or $sz[45]=='85H' or $sz[46]=='85H' or $sz[47]=='85H' or $sz[48]=='85H' or $sz[49]=='85H' or $sz[50]=='85H' or $sz[51]=='85H' or $sz[52]=='85H' or $sz[53]=='85H' or $sz[54]=='85H' or $sz[55]=='85H' or $sz[56]=='85H' or $sz[57]=='85H' or $sz[58]=='85H' or $sz[59]=='85H'  or $sz[60]=='85H' or $sz[61]=='85H' or $sz[62]=='85H' or $sz[63]=='85H' or $sz[64]=='85H' or $sz[65]=='85H' or $sz[66]=='85H' or $sz[67]=='85H' or $sz[68]=='85H' or $sz[69]=='85H' or $sz[70]=='85H' or $sz[71]=='85H' or $sz[72]=='85H' or $sz[73]=='85H' or $sz[74]=='85H' or $sz[75]=='85H' or $sz[76]=='85H' or $sz[77]=='85H' or $sz[78]=='85H' or $sz[79]=='85H' or $sz[80]=='85H')
{echo "<nobr><input name='size[]' type='checkbox' value='85H' checked>85H</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='85H'>85H</nobr>";}


if ( $sz[0]=='85I' or $sz[1]=='85I' or $sz[2]=='85I' or $sz[3]=='85I' or $sz[4]=='85I' or $sz[5]=='85I' or $sz[6]=='85I' or $sz[7]=='85I' or $sz[8]=='85I' or $sz[9]=='85I' or $sz[10]=='85I' or $sz[11]=='85I' or $sz[12]=='85I' or $sz[13]=='85I' or $sz[14]=='85I' or $sz[15]=='85I' or $sz[16]=='85I' or $sz[17]=='85I' or $sz[18]=='85I' or $sz[19]=='85I' or $sz[20]=='85I' or $sz[21]=='85I' or $sz[22]=='85I' or $sz[23]=='85I' or $sz[24]=='85I' or $sz[25]=='85I' or $sz[26]=='85I' or $sz[27]=='85I' or $sz[28]=='85I' or $sz[29]=='85I' or $sz[30]=='85I' or $sz[31]=='85I' or $sz[32]=='85I' or $sz[33]=='85I' or $sz[34]=='85I' or $sz[35]=='85I' or $sz[36]=='85I' or $sz[37]=='85I' or $sz[38]=='85I' or $sz[39]=='85I' or $sz[40]=='85I' or $sz[41]=='85I' or $sz[42]=='85I' or $sz[43]=='85I' or $sz[44]=='85I' or $sz[45]=='85I' or $sz[46]=='85I' or $sz[47]=='85I' or $sz[48]=='85I' or $sz[49]=='85I' or $sz[50]=='85I' or $sz[51]=='85I' or $sz[52]=='85I' or $sz[53]=='85I' or $sz[54]=='85I' or $sz[55]=='85I' or $sz[56]=='85I' or $sz[57]=='85I' or $sz[58]=='85I' or $sz[59]=='85I'  or $sz[60]=='85I' or $sz[61]=='85I' or $sz[62]=='85I' or $sz[63]=='85I' or $sz[64]=='85I' or $sz[65]=='85I' or $sz[66]=='85I' or $sz[67]=='85I' or $sz[68]=='85I' or $sz[69]=='85I' or $sz[70]=='85I' or $sz[71]=='85I' or $sz[72]=='85I' or $sz[73]=='85I' or $sz[74]=='85I' or $sz[75]=='85I' or $sz[76]=='85I' or $sz[77]=='85I' or $sz[78]=='85I' or $sz[79]=='85I' or $sz[80]=='85I')
{echo "<nobr><input name='size[]' type='checkbox' value='85I' checked>85I</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='85I'>85I</nobr>";}



if ( $sz[0]=='85J' or $sz[1]=='85J' or $sz[2]=='85J' or $sz[3]=='85J' or $sz[4]=='85J' or $sz[5]=='85J' or $sz[6]=='85J' or $sz[7]=='85J' or $sz[8]=='85J' or $sz[9]=='85J' or $sz[10]=='85J' or $sz[11]=='85J' or $sz[12]=='85J' or $sz[13]=='85J' or $sz[14]=='85J' or $sz[15]=='85J' or $sz[16]=='85J' or $sz[17]=='85J' or $sz[18]=='85J' or $sz[19]=='85J' or $sz[20]=='85J' or $sz[21]=='85J' or $sz[22]=='85J' or $sz[23]=='85J' or $sz[24]=='85J' or $sz[25]=='85J' or $sz[26]=='85J' or $sz[27]=='85J' or $sz[28]=='85J' or $sz[29]=='85J' or $sz[30]=='85J' or $sz[31]=='85J' or $sz[32]=='85J' or $sz[33]=='85J' or $sz[34]=='85J' or $sz[35]=='85J' or $sz[36]=='85J' or $sz[37]=='85J' or $sz[38]=='85J' or $sz[39]=='85J' or $sz[40]=='85J' or $sz[41]=='85J' or $sz[42]=='85J' or $sz[43]=='85J' or $sz[44]=='85J' or $sz[45]=='85J' or $sz[46]=='85J' or $sz[47]=='85J' or $sz[48]=='85J' or $sz[49]=='85J' or $sz[50]=='85J' or $sz[51]=='85J' or $sz[52]=='85J' or $sz[53]=='85J' or $sz[54]=='85J' or $sz[55]=='85J' or $sz[56]=='85J' or $sz[57]=='85J' or $sz[58]=='85J' or $sz[59]=='85J'  or $sz[60]=='85J' or $sz[61]=='85J' or $sz[62]=='85J' or $sz[63]=='85J' or $sz[64]=='85J' or $sz[65]=='85J' or $sz[66]=='85J' or $sz[67]=='85J' or $sz[68]=='85J' or $sz[69]=='85J' or $sz[70]=='85J' or $sz[71]=='85J' or $sz[72]=='85J' or $sz[73]=='85J' or $sz[74]=='85J' or $sz[75]=='85J' or $sz[76]=='85J' or $sz[77]=='85J' or $sz[78]=='85J' or $sz[79]=='85J' or $sz[80]=='85J')
{echo "<nobr><input name='size[]' type='checkbox' value='85J' checked>85J</nobr><br>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='85J'>85J</nobr><br>";}


if ( $sz[0]=='90B' or $sz[1]=='90B' or $sz[2]=='90B' or $sz[3]=='90B' or $sz[4]=='90B' or $sz[5]=='90B' or $sz[6]=='90B' or $sz[7]=='90B' or $sz[8]=='90B' or $sz[9]=='90B' or $sz[10]=='90B' or $sz[11]=='90B' or $sz[12]=='90B' or $sz[13]=='90B' or $sz[14]=='90B' or $sz[15]=='90B' or $sz[16]=='90B' or $sz[17]=='90B' or $sz[18]=='90B' or $sz[19]=='90B' or $sz[20]=='90B' or $sz[21]=='90B' or $sz[22]=='90B' or $sz[23]=='90B' or $sz[24]=='90B' or $sz[25]=='90B' or $sz[26]=='90B' or $sz[27]=='90B' or $sz[28]=='90B' or $sz[29]=='90B' or $sz[30]=='90B' or $sz[31]=='90B' or $sz[32]=='90B' or $sz[33]=='90B' or $sz[34]=='90B' or $sz[35]=='90B' or $sz[36]=='90B' or $sz[37]=='90B' or $sz[38]=='90B' or $sz[39]=='90B' or $sz[40]=='90B' or $sz[41]=='90B' or $sz[42]=='90B' or $sz[43]=='90B' or $sz[44]=='90B' or $sz[45]=='90B' or $sz[46]=='90B' or $sz[47]=='90B' or $sz[48]=='90B' or $sz[49]=='90B' or $sz[50]=='90B' or $sz[51]=='90B' or $sz[52]=='90B' or $sz[53]=='90B' or $sz[54]=='90B' or $sz[55]=='90B' or $sz[56]=='90B' or $sz[57]=='90B' or $sz[58]=='90B' or $sz[59]=='90B'  or $sz[60]=='90B' or $sz[61]=='90B' or $sz[62]=='90B' or $sz[63]=='90B' or $sz[64]=='90B' or $sz[65]=='90B' or $sz[66]=='90B' or $sz[67]=='90B' or $sz[68]=='90B' or $sz[69]=='90B' or $sz[70]=='90B' or $sz[71]=='90B' or $sz[72]=='90B' or $sz[73]=='90B' or $sz[74]=='90B' or $sz[75]=='90B' or $sz[76]=='90B' or $sz[77]=='90B' or $sz[78]=='90B' or $sz[79]=='90B' or $sz[80]=='90B')
{echo "<nobr><input name='size[]' type='checkbox' value='90B' checked>90B</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='90B'>90B</nobr>";}

if ( $sz[0]=='90C' or $sz[1]=='90C' or $sz[2]=='90C' or $sz[3]=='90C' or $sz[4]=='90C' or $sz[5]=='90C' or $sz[6]=='90C' or $sz[7]=='90C' or $sz[8]=='90C' or $sz[9]=='90C' or $sz[10]=='90C' or $sz[11]=='90C' or $sz[12]=='90C' or $sz[13]=='90C' or $sz[14]=='90C' or $sz[15]=='90C' or $sz[16]=='90C' or $sz[17]=='90C' or $sz[18]=='90C' or $sz[19]=='90C' or $sz[20]=='90C' or $sz[21]=='90C' or $sz[22]=='90C' or $sz[23]=='90C' or $sz[24]=='90C' or $sz[25]=='90C' or $sz[26]=='90C' or $sz[27]=='90C' or $sz[28]=='90C' or $sz[29]=='90C' or $sz[30]=='90C' or $sz[31]=='90C' or $sz[32]=='90C' or $sz[33]=='90C' or $sz[34]=='90C' or $sz[35]=='90C' or $sz[36]=='90C' or $sz[37]=='90C' or $sz[38]=='90C' or $sz[39]=='90C' or $sz[40]=='90C' or $sz[41]=='90C' or $sz[42]=='90C' or $sz[43]=='90C' or $sz[44]=='90C' or $sz[45]=='90C' or $sz[46]=='90C' or $sz[47]=='90C' or $sz[48]=='90C' or $sz[49]=='90C' or $sz[50]=='90C' or $sz[51]=='90C' or $sz[52]=='90C' or $sz[53]=='90C' or $sz[54]=='90C' or $sz[55]=='90C' or $sz[56]=='90C' or $sz[57]=='90C' or $sz[58]=='90C' or $sz[59]=='90C'  or $sz[60]=='90C' or $sz[61]=='90C' or $sz[62]=='90C' or $sz[63]=='90C' or $sz[64]=='90C' or $sz[65]=='90C' or $sz[66]=='90C' or $sz[67]=='90C' or $sz[68]=='90C' or $sz[69]=='90C' or $sz[70]=='90C' or $sz[71]=='90C' or $sz[72]=='90C' or $sz[73]=='90C' or $sz[74]=='90C' or $sz[75]=='90C' or $sz[76]=='90C' or $sz[77]=='90C' or $sz[78]=='90C' or $sz[79]=='90C' or $sz[80]=='90C')
{echo "<nobr><input name='size[]' type='checkbox' value='90C' checked>90C</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='90C'>90C</nobr>";}

if ( $sz[0]=='90D' or $sz[1]=='90D' or $sz[2]=='90D' or $sz[3]=='90D' or $sz[4]=='90D' or $sz[5]=='90D' or $sz[6]=='90D' or $sz[7]=='90D' or $sz[8]=='90D' or $sz[9]=='90D' or $sz[10]=='90D' or $sz[11]=='90D' or $sz[12]=='90D' or $sz[13]=='90D' or $sz[14]=='90D' or $sz[15]=='90D' or $sz[16]=='90D' or $sz[17]=='90D' or $sz[18]=='90D' or $sz[19]=='90D' or $sz[20]=='90D' or $sz[21]=='90D' or $sz[22]=='90D' or $sz[23]=='90D' or $sz[24]=='90D' or $sz[25]=='90D' or $sz[26]=='90D' or $sz[27]=='90D' or $sz[28]=='90D' or $sz[29]=='90D' or $sz[30]=='90D' or $sz[31]=='90D' or $sz[32]=='90D' or $sz[33]=='90D' or $sz[34]=='90D' or $sz[35]=='90D' or $sz[36]=='90D' or $sz[37]=='90D' or $sz[38]=='90D' or $sz[39]=='90D' or $sz[40]=='90D' or $sz[41]=='90D' or $sz[42]=='90D' or $sz[43]=='90D' or $sz[44]=='90D' or $sz[45]=='90D' or $sz[46]=='90D' or $sz[47]=='90D' or $sz[48]=='90D' or $sz[49]=='90D' or $sz[50]=='90D' or $sz[51]=='90D' or $sz[52]=='90D' or $sz[53]=='90D' or $sz[54]=='90D' or $sz[55]=='90D' or $sz[56]=='90D' or $sz[57]=='90D' or $sz[58]=='90D' or $sz[59]=='90D'  or $sz[60]=='90D' or $sz[61]=='90D' or $sz[62]=='90D' or $sz[63]=='90D' or $sz[64]=='90D' or $sz[65]=='90D' or $sz[66]=='90D' or $sz[67]=='90D' or $sz[68]=='90D' or $sz[69]=='90D' or $sz[70]=='90D' or $sz[71]=='90D' or $sz[72]=='90D' or $sz[73]=='90D' or $sz[74]=='90D' or $sz[75]=='90D' or $sz[76]=='90D' or $sz[77]=='90D' or $sz[78]=='90D' or $sz[79]=='90D' or $sz[80]=='90D')
{echo "<nobr><input name='size[]' type='checkbox' value='90D' checked>90D</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='90D'>90D</nobr>";}

if ( $sz[0]=='90DD' or $sz[1]=='90DD' or $sz[2]=='90DD' or $sz[3]=='90DD' or $sz[4]=='90DD' or $sz[5]=='90DD' or $sz[6]=='90DD' or $sz[7]=='90DD' or $sz[8]=='90DD' or $sz[9]=='90DD' or $sz[10]=='90DD' or $sz[11]=='90DD' or $sz[12]=='90DD' or $sz[13]=='90DD' or $sz[14]=='90DD' or $sz[15]=='90DD' or $sz[16]=='90DD' or $sz[17]=='90DD' or $sz[18]=='90DD' or $sz[19]=='90DD' or $sz[20]=='90DD' or $sz[21]=='90DD' or $sz[22]=='90DD' or $sz[23]=='90DD' or $sz[24]=='90DD' or $sz[25]=='90DD' or $sz[26]=='90DD' or $sz[27]=='90DD' or $sz[28]=='90DD' or $sz[29]=='90DD' or $sz[30]=='90DD' or $sz[31]=='90DD' or $sz[32]=='90DD' or $sz[33]=='90DD' or $sz[34]=='90DD' or $sz[35]=='90DD' or $sz[36]=='90DD' or $sz[37]=='90DD' or $sz[38]=='90DD' or $sz[39]=='90DD' or $sz[40]=='90DD' or $sz[41]=='90DD' or $sz[42]=='90DD' or $sz[43]=='90DD' or $sz[44]=='90DD' or $sz[45]=='90DD' or $sz[46]=='90DD' or $sz[47]=='90DD' or $sz[48]=='90DD' or $sz[49]=='90DD' or $sz[50]=='90DD' or $sz[51]=='90DD' or $sz[52]=='90DD' or $sz[53]=='90DD' or $sz[54]=='90DD' or $sz[55]=='90DD' or $sz[56]=='90DD' or $sz[57]=='90DD' or $sz[58]=='90DD' or $sz[59]=='90DD'  or $sz[60]=='90DD' or $sz[61]=='90DD' or $sz[62]=='90DD' or $sz[63]=='90DD' or $sz[64]=='90DD' or $sz[65]=='90DD' or $sz[66]=='90DD' or $sz[67]=='90DD' or $sz[68]=='90DD' or $sz[69]=='90DD' or $sz[70]=='90DD' or $sz[71]=='90DD' or $sz[72]=='90DD' or $sz[73]=='90DD' or $sz[74]=='90DD' or $sz[75]=='90DD' or $sz[76]=='90DD' or $sz[77]=='90DD' or $sz[78]=='90DD' or $sz[79]=='90DD' or $sz[80]=='90DD')
{echo "<nobr><input name='size[]' type='checkbox' value='90DD' checked>90DD</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='90DD'>90DD</nobr>";}

if ( $sz[0]=='90E' or $sz[1]=='90E' or $sz[2]=='90E' or $sz[3]=='90E' or $sz[4]=='90E' or $sz[5]=='90E' or $sz[6]=='90E' or $sz[7]=='90E' or $sz[8]=='90E' or $sz[9]=='90E' or $sz[10]=='90E' or $sz[11]=='90E' or $sz[12]=='90E' or $sz[13]=='90E' or $sz[14]=='90E' or $sz[15]=='90E' or $sz[16]=='90E' or $sz[17]=='90E' or $sz[18]=='90E' or $sz[19]=='90E' or $sz[20]=='90E' or $sz[21]=='90E' or $sz[22]=='90E' or $sz[23]=='90E' or $sz[24]=='90E' or $sz[25]=='90E' or $sz[26]=='90E' or $sz[27]=='90E' or $sz[28]=='90E' or $sz[29]=='90E' or $sz[30]=='90E' or $sz[31]=='90E' or $sz[32]=='90E' or $sz[33]=='90E' or $sz[34]=='90E' or $sz[35]=='90E' or $sz[36]=='90E' or $sz[37]=='90E' or $sz[38]=='90E' or $sz[39]=='90E' or $sz[40]=='90E' or $sz[41]=='90E' or $sz[42]=='90E' or $sz[43]=='90E' or $sz[44]=='90E' or $sz[45]=='90E' or $sz[46]=='90E' or $sz[47]=='90E' or $sz[48]=='90E' or $sz[49]=='90E' or $sz[50]=='90E' or $sz[51]=='90E' or $sz[52]=='90E' or $sz[53]=='90E' or $sz[54]=='90E' or $sz[55]=='90E' or $sz[56]=='90E' or $sz[57]=='90E' or $sz[58]=='90E' or $sz[59]=='90E'  or $sz[60]=='90E' or $sz[61]=='90E' or $sz[62]=='90E' or $sz[63]=='90E' or $sz[64]=='90E' or $sz[65]=='90E' or $sz[66]=='90E' or $sz[67]=='90E' or $sz[68]=='90E' or $sz[69]=='90E' or $sz[70]=='90E' or $sz[71]=='90E' or $sz[72]=='90E' or $sz[73]=='90E' or $sz[74]=='90E' or $sz[75]=='90E' or $sz[76]=='90E' or $sz[77]=='90E' or $sz[78]=='90E' or $sz[79]=='90E' or $sz[80]=='90E')
{echo "<nobr><input name='size[]' type='checkbox' value='90E' checked>90E</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='90E'>90E</nobr>";}


if ( $sz[0]=='90F' or $sz[1]=='90F' or $sz[2]=='90F' or $sz[3]=='90F' or $sz[4]=='90F' or $sz[5]=='90F' or $sz[6]=='90F' or $sz[7]=='90F' or $sz[8]=='90F' or $sz[9]=='90F' or $sz[10]=='90F' or $sz[11]=='90F' or $sz[12]=='90F' or $sz[13]=='90F' or $sz[14]=='90F' or $sz[15]=='90F' or $sz[16]=='90F' or $sz[17]=='90F' or $sz[18]=='90F' or $sz[19]=='90F' or $sz[20]=='90F' or $sz[21]=='90F' or $sz[22]=='90F' or $sz[23]=='90F' or $sz[24]=='90F' or $sz[25]=='90F' or $sz[26]=='90F' or $sz[27]=='90F' or $sz[28]=='90F' or $sz[29]=='90F' or $sz[30]=='90F' or $sz[31]=='90F' or $sz[32]=='90F' or $sz[33]=='90F' or $sz[34]=='90F' or $sz[35]=='90F' or $sz[36]=='90F' or $sz[37]=='90F' or $sz[38]=='90F' or $sz[39]=='90F' or $sz[40]=='90F' or $sz[41]=='90F' or $sz[42]=='90F' or $sz[43]=='90F' or $sz[44]=='90F' or $sz[45]=='90F' or $sz[46]=='90F' or $sz[47]=='90F' or $sz[48]=='90F' or $sz[49]=='90F' or $sz[50]=='90F' or $sz[51]=='90F' or $sz[52]=='90F' or $sz[53]=='90F' or $sz[54]=='90F' or $sz[55]=='90F' or $sz[56]=='90F' or $sz[57]=='90F' or $sz[58]=='90F' or $sz[59]=='90F'  or $sz[60]=='90F' or $sz[61]=='90F' or $sz[62]=='90F' or $sz[63]=='90F' or $sz[64]=='90F' or $sz[65]=='90F' or $sz[66]=='90F' or $sz[67]=='90F' or $sz[68]=='90F' or $sz[69]=='90F' or $sz[70]=='90F' or $sz[71]=='90F' or $sz[72]=='90F' or $sz[73]=='90F' or $sz[74]=='90F' or $sz[75]=='90F' or $sz[76]=='90F' or $sz[77]=='90F' or $sz[78]=='90F' or $sz[79]=='90F' or $sz[80]=='90F')
{echo "<nobr><input name='size[]' type='checkbox' value='90F' checked>90F</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='90F'>90F</nobr>";}

if ( $sz[0]=='90G' or $sz[1]=='90G' or $sz[2]=='90G' or $sz[3]=='90G' or $sz[4]=='90G' or $sz[5]=='90G' or $sz[6]=='90G' or $sz[7]=='90G' or $sz[8]=='90G' or $sz[9]=='90G' or $sz[10]=='90G' or $sz[11]=='90G' or $sz[12]=='90G' or $sz[13]=='90G' or $sz[14]=='90G' or $sz[15]=='90G' or $sz[16]=='90G' or $sz[17]=='90G' or $sz[18]=='90G' or $sz[19]=='90G' or $sz[20]=='90G' or $sz[21]=='90G' or $sz[22]=='90G' or $sz[23]=='90G' or $sz[24]=='90G' or $sz[25]=='90G' or $sz[26]=='90G' or $sz[27]=='90G' or $sz[28]=='90G' or $sz[29]=='90G' or $sz[30]=='90G' or $sz[31]=='90G' or $sz[32]=='90G' or $sz[33]=='90G' or $sz[34]=='90G' or $sz[35]=='90G' or $sz[36]=='90G' or $sz[37]=='90G' or $sz[38]=='90G' or $sz[39]=='90G' or $sz[40]=='90G' or $sz[41]=='90G' or $sz[42]=='90G' or $sz[43]=='90G' or $sz[44]=='90G' or $sz[45]=='90G' or $sz[46]=='90G' or $sz[47]=='90G' or $sz[48]=='90G' or $sz[49]=='90G' or $sz[50]=='90G' or $sz[51]=='90G' or $sz[52]=='90G' or $sz[53]=='90G' or $sz[54]=='90G' or $sz[55]=='90G' or $sz[56]=='90G' or $sz[57]=='90G' or $sz[58]=='90G' or $sz[59]=='90G'  or $sz[60]=='90G' or $sz[61]=='90G' or $sz[62]=='90G' or $sz[63]=='90G' or $sz[64]=='90G' or $sz[65]=='90G' or $sz[66]=='90G' or $sz[67]=='90G' or $sz[68]=='90G' or $sz[69]=='90G' or $sz[70]=='90G' or $sz[71]=='90G' or $sz[72]=='90G' or $sz[73]=='90G' or $sz[74]=='90G' or $sz[75]=='90G' or $sz[76]=='90G' or $sz[77]=='90G' or $sz[78]=='90G' or $sz[79]=='90G' or $sz[80]=='90G')
{echo "<nobr><input name='size[]' type='checkbox' value='90G' checked>90G</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='90G'>90G</nobr>";}

if ( $sz[0]=='90H' or $sz[1]=='90H' or $sz[2]=='90H' or $sz[3]=='90H' or $sz[4]=='90H' or $sz[5]=='90H' or $sz[6]=='90H' or $sz[7]=='90H' or $sz[8]=='90H' or $sz[9]=='90H' or $sz[10]=='90H' or $sz[11]=='90H' or $sz[12]=='90H' or $sz[13]=='90H' or $sz[14]=='90H' or $sz[15]=='90H' or $sz[16]=='90H' or $sz[17]=='90H' or $sz[18]=='90H' or $sz[19]=='90H' or $sz[20]=='90H' or $sz[21]=='90H' or $sz[22]=='90H' or $sz[23]=='90H' or $sz[24]=='90H' or $sz[25]=='90H' or $sz[26]=='90H' or $sz[27]=='90H' or $sz[28]=='90H' or $sz[29]=='90H' or $sz[30]=='90H' or $sz[31]=='90H' or $sz[32]=='90H' or $sz[33]=='90H' or $sz[34]=='90H' or $sz[35]=='90H' or $sz[36]=='90H' or $sz[37]=='90H' or $sz[38]=='90H' or $sz[39]=='90H' or $sz[40]=='90H' or $sz[41]=='90H' or $sz[42]=='90H' or $sz[43]=='90H' or $sz[44]=='90H' or $sz[45]=='90H' or $sz[46]=='90H' or $sz[47]=='90H' or $sz[48]=='90H' or $sz[49]=='90H' or $sz[50]=='90H' or $sz[51]=='90H' or $sz[52]=='90H' or $sz[53]=='90H' or $sz[54]=='90H' or $sz[55]=='90H' or $sz[56]=='90H' or $sz[57]=='90H' or $sz[58]=='90H' or $sz[59]=='90H'  or $sz[60]=='90H' or $sz[61]=='90H' or $sz[62]=='90H' or $sz[63]=='90H' or $sz[64]=='90H' or $sz[65]=='90H' or $sz[66]=='90H' or $sz[67]=='90H' or $sz[68]=='90H' or $sz[69]=='90H' or $sz[70]=='90H' or $sz[71]=='90H' or $sz[72]=='90H' or $sz[73]=='90H' or $sz[74]=='90H' or $sz[75]=='90H' or $sz[76]=='90H' or $sz[77]=='90H' or $sz[78]=='90H' or $sz[79]=='90H' or $sz[80]=='90H')
{echo "<nobr><input name='size[]' type='checkbox' value='90H' checked>90H</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='90H'>90H</nobr>";}


if ( $sz[0]=='90I' or $sz[1]=='90I' or $sz[2]=='90I' or $sz[3]=='90I' or $sz[4]=='90I' or $sz[5]=='90I' or $sz[6]=='90I' or $sz[7]=='90I' or $sz[8]=='90I' or $sz[9]=='90I' or $sz[10]=='90I' or $sz[11]=='90I' or $sz[12]=='90I' or $sz[13]=='90I' or $sz[14]=='90I' or $sz[15]=='90I' or $sz[16]=='90I' or $sz[17]=='90I' or $sz[18]=='90I' or $sz[19]=='90I' or $sz[20]=='90I' or $sz[21]=='90I' or $sz[22]=='90I' or $sz[23]=='90I' or $sz[24]=='90I' or $sz[25]=='90I' or $sz[26]=='90I' or $sz[27]=='90I' or $sz[28]=='90I' or $sz[29]=='90I' or $sz[30]=='90I' or $sz[31]=='90I' or $sz[32]=='90I' or $sz[33]=='90I' or $sz[34]=='90I' or $sz[35]=='90I' or $sz[36]=='90I' or $sz[37]=='90I' or $sz[38]=='90I' or $sz[39]=='90I' or $sz[40]=='90I' or $sz[41]=='90I' or $sz[42]=='90I' or $sz[43]=='90I' or $sz[44]=='90I' or $sz[45]=='90I' or $sz[46]=='90I' or $sz[47]=='90I' or $sz[48]=='90I' or $sz[49]=='90I' or $sz[50]=='90I' or $sz[51]=='90I' or $sz[52]=='90I' or $sz[53]=='90I' or $sz[54]=='90I' or $sz[55]=='90I' or $sz[56]=='90I' or $sz[57]=='90I' or $sz[58]=='90I' or $sz[59]=='90I'  or $sz[60]=='90I' or $sz[61]=='90I' or $sz[62]=='90I' or $sz[63]=='90I' or $sz[64]=='90I' or $sz[65]=='90I' or $sz[66]=='90I' or $sz[67]=='90I' or $sz[68]=='90I' or $sz[69]=='90I' or $sz[70]=='90I' or $sz[71]=='90I' or $sz[72]=='90I' or $sz[73]=='90I' or $sz[74]=='90I' or $sz[75]=='90I' or $sz[76]=='90I' or $sz[77]=='90I' or $sz[78]=='90I' or $sz[79]=='90I' or $sz[80]=='90I')
{echo "<nobr><input name='size[]' type='checkbox' value='90I' checked>90I</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='90I'>90I</nobr>";}



if ( $sz[0]=='90J' or $sz[1]=='90J' or $sz[2]=='90J' or $sz[3]=='90J' or $sz[4]=='90J' or $sz[5]=='90J' or $sz[6]=='90J' or $sz[7]=='90J' or $sz[8]=='90J' or $sz[9]=='90J' or $sz[10]=='90J' or $sz[11]=='90J' or $sz[12]=='90J' or $sz[13]=='90J' or $sz[14]=='90J' or $sz[15]=='90J' or $sz[16]=='90J' or $sz[17]=='90J' or $sz[18]=='90J' or $sz[19]=='90J' or $sz[20]=='90J' or $sz[21]=='90J' or $sz[22]=='90J' or $sz[23]=='90J' or $sz[24]=='90J' or $sz[25]=='90J' or $sz[26]=='90J' or $sz[27]=='90J' or $sz[28]=='90J' or $sz[29]=='90J' or $sz[30]=='90J' or $sz[31]=='90J' or $sz[32]=='90J' or $sz[33]=='90J' or $sz[34]=='90J' or $sz[35]=='90J' or $sz[36]=='90J' or $sz[37]=='90J' or $sz[38]=='90J' or $sz[39]=='90J' or $sz[40]=='90J' or $sz[41]=='90J' or $sz[42]=='90J' or $sz[43]=='90J' or $sz[44]=='90J' or $sz[45]=='90J' or $sz[46]=='90J' or $sz[47]=='90J' or $sz[48]=='90J' or $sz[49]=='90J' or $sz[50]=='90J' or $sz[51]=='90J' or $sz[52]=='90J' or $sz[53]=='90J' or $sz[54]=='90J' or $sz[55]=='90J' or $sz[56]=='90J' or $sz[57]=='90J' or $sz[58]=='90J' or $sz[59]=='90J'  or $sz[60]=='90J' or $sz[61]=='90J' or $sz[62]=='90J' or $sz[63]=='90J' or $sz[64]=='90J' or $sz[65]=='90J' or $sz[66]=='90J' or $sz[67]=='90J' or $sz[68]=='90J' or $sz[69]=='90J' or $sz[70]=='90J' or $sz[71]=='90J' or $sz[72]=='90J' or $sz[73]=='90J' or $sz[74]=='90J' or $sz[75]=='90J' or $sz[76]=='90J' or $sz[77]=='90J' or $sz[78]=='90J' or $sz[79]=='90J' or $sz[80]=='90J')
{echo "<nobr><input name='size[]' type='checkbox' value='90J' checked>90J</nobr><br>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='90J'>90J</nobr><br>";}



if ( $sz[0]=='95B' or $sz[1]=='95B' or $sz[2]=='95B' or $sz[3]=='95B' or $sz[4]=='95B' or $sz[5]=='95B' or $sz[6]=='95B' or $sz[7]=='95B' or $sz[8]=='95B' or $sz[9]=='95B' or $sz[10]=='95B' or $sz[11]=='95B' or $sz[12]=='95B' or $sz[13]=='95B' or $sz[14]=='95B' or $sz[15]=='95B' or $sz[16]=='95B' or $sz[17]=='95B' or $sz[18]=='95B' or $sz[19]=='95B' or $sz[20]=='95B' or $sz[21]=='95B' or $sz[22]=='95B' or $sz[23]=='95B' or $sz[24]=='95B' or $sz[25]=='95B' or $sz[26]=='95B' or $sz[27]=='95B' or $sz[28]=='95B' or $sz[29]=='95B' or $sz[30]=='95B' or $sz[31]=='95B' or $sz[32]=='95B' or $sz[33]=='95B' or $sz[34]=='95B' or $sz[35]=='95B' or $sz[36]=='95B' or $sz[37]=='95B' or $sz[38]=='95B' or $sz[39]=='95B' or $sz[40]=='95B' or $sz[41]=='95B' or $sz[42]=='95B' or $sz[43]=='95B' or $sz[44]=='95B' or $sz[45]=='95B' or $sz[46]=='95B' or $sz[47]=='95B' or $sz[48]=='95B' or $sz[49]=='95B' or $sz[50]=='95B' or $sz[51]=='95B' or $sz[52]=='95B' or $sz[53]=='95B' or $sz[54]=='95B' or $sz[55]=='95B' or $sz[56]=='95B' or $sz[57]=='95B' or $sz[58]=='95B' or $sz[59]=='95B'  or $sz[60]=='95B' or $sz[61]=='95B' or $sz[62]=='95B' or $sz[63]=='95B' or $sz[64]=='95B' or $sz[65]=='95B' or $sz[66]=='95B' or $sz[67]=='95B' or $sz[68]=='95B' or $sz[69]=='95B' or $sz[70]=='95B' or $sz[71]=='95B' or $sz[72]=='95B' or $sz[73]=='95B' or $sz[74]=='95B' or $sz[75]=='95B' or $sz[76]=='95B' or $sz[77]=='95B' or $sz[78]=='95B' or $sz[79]=='95B' or $sz[80]=='95B')
{echo "<nobr><input name='size[]' type='checkbox' value='95B' checked>95B</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='95B'>95B</nobr>";}

if ( $sz[0]=='95C' or $sz[1]=='95C' or $sz[2]=='95C' or $sz[3]=='95C' or $sz[4]=='95C' or $sz[5]=='95C' or $sz[6]=='95C' or $sz[7]=='95C' or $sz[8]=='95C' or $sz[9]=='95C' or $sz[10]=='95C' or $sz[11]=='95C' or $sz[12]=='95C' or $sz[13]=='95C' or $sz[14]=='95C' or $sz[15]=='95C' or $sz[16]=='95C' or $sz[17]=='95C' or $sz[18]=='95C' or $sz[19]=='95C' or $sz[20]=='95C' or $sz[21]=='95C' or $sz[22]=='95C' or $sz[23]=='95C' or $sz[24]=='95C' or $sz[25]=='95C' or $sz[26]=='95C' or $sz[27]=='95C' or $sz[28]=='95C' or $sz[29]=='95C' or $sz[30]=='95C' or $sz[31]=='95C' or $sz[32]=='95C' or $sz[33]=='95C' or $sz[34]=='95C' or $sz[35]=='95C' or $sz[36]=='95C' or $sz[37]=='95C' or $sz[38]=='95C' or $sz[39]=='95C' or $sz[40]=='95C' or $sz[41]=='95C' or $sz[42]=='95C' or $sz[43]=='95C' or $sz[44]=='95C' or $sz[45]=='95C' or $sz[46]=='95C' or $sz[47]=='95C' or $sz[48]=='95C' or $sz[49]=='95C' or $sz[50]=='95C' or $sz[51]=='95C' or $sz[52]=='95C' or $sz[53]=='95C' or $sz[54]=='95C' or $sz[55]=='95C' or $sz[56]=='95C' or $sz[57]=='95C' or $sz[58]=='95C' or $sz[59]=='95C'  or $sz[60]=='95C' or $sz[61]=='95C' or $sz[62]=='95C' or $sz[63]=='95C' or $sz[64]=='95C' or $sz[65]=='95C' or $sz[66]=='95C' or $sz[67]=='95C' or $sz[68]=='95C' or $sz[69]=='95C' or $sz[70]=='95C' or $sz[71]=='95C' or $sz[72]=='95C' or $sz[73]=='95C' or $sz[74]=='95C' or $sz[75]=='95C' or $sz[76]=='95C' or $sz[77]=='95C' or $sz[78]=='95C' or $sz[79]=='95C' or $sz[80]=='95C')
{echo "<nobr><input name='size[]' type='checkbox' value='95C' checked>95C</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='95C'>95C</nobr>";}

if ( $sz[0]=='95D' or $sz[1]=='95D' or $sz[2]=='95D' or $sz[3]=='95D' or $sz[4]=='95D' or $sz[5]=='95D' or $sz[6]=='95D' or $sz[7]=='95D' or $sz[8]=='95D' or $sz[9]=='95D' or $sz[10]=='95D' or $sz[11]=='95D' or $sz[12]=='95D' or $sz[13]=='95D' or $sz[14]=='95D' or $sz[15]=='95D' or $sz[16]=='95D' or $sz[17]=='95D' or $sz[18]=='95D' or $sz[19]=='95D' or $sz[20]=='95D' or $sz[21]=='95D' or $sz[22]=='95D' or $sz[23]=='95D' or $sz[24]=='95D' or $sz[25]=='95D' or $sz[26]=='95D' or $sz[27]=='95D' or $sz[28]=='95D' or $sz[29]=='95D' or $sz[30]=='95D' or $sz[31]=='95D' or $sz[32]=='95D' or $sz[33]=='95D' or $sz[34]=='95D' or $sz[35]=='95D' or $sz[36]=='95D' or $sz[37]=='95D' or $sz[38]=='95D' or $sz[39]=='95D' or $sz[40]=='95D' or $sz[41]=='95D' or $sz[42]=='95D' or $sz[43]=='95D' or $sz[44]=='95D' or $sz[45]=='95D' or $sz[46]=='95D' or $sz[47]=='95D' or $sz[48]=='95D' or $sz[49]=='95D' or $sz[50]=='95D' or $sz[51]=='95D' or $sz[52]=='95D' or $sz[53]=='95D' or $sz[54]=='95D' or $sz[55]=='95D' or $sz[56]=='95D' or $sz[57]=='95D' or $sz[58]=='95D' or $sz[59]=='95D'  or $sz[60]=='95D' or $sz[61]=='95D' or $sz[62]=='95D' or $sz[63]=='95D' or $sz[64]=='95D' or $sz[65]=='95D' or $sz[66]=='95D' or $sz[67]=='95D' or $sz[68]=='95D' or $sz[69]=='95D' or $sz[70]=='95D' or $sz[71]=='95D' or $sz[72]=='95D' or $sz[73]=='95D' or $sz[74]=='95D' or $sz[75]=='95D' or $sz[76]=='95D' or $sz[77]=='95D' or $sz[78]=='95D' or $sz[79]=='95D' or $sz[80]=='95D')
{echo "<nobr><input name='size[]' type='checkbox' value='95D' checked>95D</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='95D'>95D</nobr>";}

if ( $sz[0]=='95DD' or $sz[1]=='95DD' or $sz[2]=='95DD' or $sz[3]=='95DD' or $sz[4]=='95DD' or $sz[5]=='95DD' or $sz[6]=='95DD' or $sz[7]=='95DD' or $sz[8]=='95DD' or $sz[9]=='95DD' or $sz[10]=='95DD' or $sz[11]=='95DD' or $sz[12]=='95DD' or $sz[13]=='95DD' or $sz[14]=='95DD' or $sz[15]=='95DD' or $sz[16]=='95DD' or $sz[17]=='95DD' or $sz[18]=='95DD' or $sz[19]=='95DD' or $sz[20]=='95DD' or $sz[21]=='95DD' or $sz[22]=='95DD' or $sz[23]=='95DD' or $sz[24]=='95DD' or $sz[25]=='95DD' or $sz[26]=='95DD' or $sz[27]=='95DD' or $sz[28]=='95DD' or $sz[29]=='95DD' or $sz[30]=='95DD' or $sz[31]=='95DD' or $sz[32]=='95DD' or $sz[33]=='95DD' or $sz[34]=='95DD' or $sz[35]=='95DD' or $sz[36]=='95DD' or $sz[37]=='95DD' or $sz[38]=='95DD' or $sz[39]=='95DD' or $sz[40]=='95DD' or $sz[41]=='95DD' or $sz[42]=='95DD' or $sz[43]=='95DD' or $sz[44]=='95DD' or $sz[45]=='95DD' or $sz[46]=='95DD' or $sz[47]=='95DD' or $sz[48]=='95DD' or $sz[49]=='95DD' or $sz[50]=='95DD' or $sz[51]=='95DD' or $sz[52]=='95DD' or $sz[53]=='95DD' or $sz[54]=='95DD' or $sz[55]=='95DD' or $sz[56]=='95DD' or $sz[57]=='95DD' or $sz[58]=='95DD' or $sz[59]=='95DD'  or $sz[60]=='95DD' or $sz[61]=='95DD' or $sz[62]=='95DD' or $sz[63]=='95DD' or $sz[64]=='95DD' or $sz[65]=='95DD' or $sz[66]=='95DD' or $sz[67]=='95DD' or $sz[68]=='95DD' or $sz[69]=='95DD' or $sz[70]=='95DD' or $sz[71]=='95DD' or $sz[72]=='95DD' or $sz[73]=='95DD' or $sz[74]=='95DD' or $sz[75]=='95DD' or $sz[76]=='95DD' or $sz[77]=='95DD' or $sz[78]=='95DD' or $sz[79]=='95DD' or $sz[80]=='95DD')
{echo "<nobr><input name='size[]' type='checkbox' value='95DD' checked>95DD</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='95DD'>95DD</nobr>";}

if ( $sz[0]=='95E' or $sz[1]=='95E' or $sz[2]=='95E' or $sz[3]=='95E' or $sz[4]=='95E' or $sz[5]=='95E' or $sz[6]=='95E' or $sz[7]=='95E' or $sz[8]=='95E' or $sz[9]=='95E' or $sz[10]=='95E' or $sz[11]=='95E' or $sz[12]=='95E' or $sz[13]=='95E' or $sz[14]=='95E' or $sz[15]=='95E' or $sz[16]=='95E' or $sz[17]=='95E' or $sz[18]=='95E' or $sz[19]=='95E' or $sz[20]=='95E' or $sz[21]=='95E' or $sz[22]=='95E' or $sz[23]=='95E' or $sz[24]=='95E' or $sz[25]=='95E' or $sz[26]=='95E' or $sz[27]=='95E' or $sz[28]=='95E' or $sz[29]=='95E' or $sz[30]=='95E' or $sz[31]=='95E' or $sz[32]=='95E' or $sz[33]=='95E' or $sz[34]=='95E' or $sz[35]=='95E' or $sz[36]=='95E' or $sz[37]=='95E' or $sz[38]=='95E' or $sz[39]=='95E' or $sz[40]=='95E' or $sz[41]=='95E' or $sz[42]=='95E' or $sz[43]=='95E' or $sz[44]=='95E' or $sz[45]=='95E' or $sz[46]=='95E' or $sz[47]=='95E' or $sz[48]=='95E' or $sz[49]=='95E' or $sz[50]=='95E' or $sz[51]=='95E' or $sz[52]=='95E' or $sz[53]=='95E' or $sz[54]=='95E' or $sz[55]=='95E' or $sz[56]=='95E' or $sz[57]=='95E' or $sz[58]=='95E' or $sz[59]=='95E'  or $sz[60]=='95E' or $sz[61]=='95E' or $sz[62]=='95E' or $sz[63]=='95E' or $sz[64]=='95E' or $sz[65]=='95E' or $sz[66]=='95E' or $sz[67]=='95E' or $sz[68]=='95E' or $sz[69]=='95E' or $sz[70]=='95E' or $sz[71]=='95E' or $sz[72]=='95E' or $sz[73]=='95E' or $sz[74]=='95E' or $sz[75]=='95E' or $sz[76]=='95E' or $sz[77]=='95E' or $sz[78]=='95E' or $sz[79]=='95E' or $sz[80]=='95E')
{echo "<nobr><input name='size[]' type='checkbox' value='95E' checked>95E</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='95E'>95E</nobr>";}

if ( $sz[0]=='95F' or $sz[1]=='95F' or $sz[2]=='95F' or $sz[3]=='95F' or $sz[4]=='95F' or $sz[5]=='95F' or $sz[6]=='95F' or $sz[7]=='95F' or $sz[8]=='95F' or $sz[9]=='95F' or $sz[10]=='95F' or $sz[11]=='95F' or $sz[12]=='95F' or $sz[13]=='95F' or $sz[14]=='95F' or $sz[15]=='95F' or $sz[16]=='95F' or $sz[17]=='95F' or $sz[18]=='95F' or $sz[19]=='95F' or $sz[20]=='95F' or $sz[21]=='95F' or $sz[22]=='95F' or $sz[23]=='95F' or $sz[24]=='95F' or $sz[25]=='95F' or $sz[26]=='95F' or $sz[27]=='95F' or $sz[28]=='95F' or $sz[29]=='95F' or $sz[30]=='95F' or $sz[31]=='95F' or $sz[32]=='95F' or $sz[33]=='95F' or $sz[34]=='95F' or $sz[35]=='95F' or $sz[36]=='95F' or $sz[37]=='95F' or $sz[38]=='95F' or $sz[39]=='95F' or $sz[40]=='95F' or $sz[41]=='95F' or $sz[42]=='95F' or $sz[43]=='95F' or $sz[44]=='95F' or $sz[45]=='95F' or $sz[46]=='95F' or $sz[47]=='95F' or $sz[48]=='95F' or $sz[49]=='95F' or $sz[50]=='95F' or $sz[51]=='95F' or $sz[52]=='95F' or $sz[53]=='95F' or $sz[54]=='95F' or $sz[55]=='95F' or $sz[56]=='95F' or $sz[57]=='95F' or $sz[58]=='95F' or $sz[59]=='95F'  or $sz[60]=='95F' or $sz[61]=='95F' or $sz[62]=='95F' or $sz[63]=='95F' or $sz[64]=='95F' or $sz[65]=='95F' or $sz[66]=='95F' or $sz[67]=='95F' or $sz[68]=='95F' or $sz[69]=='95F' or $sz[70]=='95F' or $sz[71]=='95F' or $sz[72]=='95F' or $sz[73]=='95F' or $sz[74]=='95F' or $sz[75]=='95F' or $sz[76]=='95F' or $sz[77]=='95F' or $sz[78]=='95F' or $sz[79]=='95F' or $sz[80]=='95F')
{echo "<nobr><input name='size[]' type='checkbox' value='95F' checked>95F</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='95F'>95F</nobr>";}


if ( $sz[0]=='95G' or $sz[1]=='95G' or $sz[2]=='95G' or $sz[3]=='95G' or $sz[4]=='95G' or $sz[5]=='95G' or $sz[6]=='95G' or $sz[7]=='95G' or $sz[8]=='95G' or $sz[9]=='95G' or $sz[10]=='95G' or $sz[11]=='95G' or $sz[12]=='95G' or $sz[13]=='95G' or $sz[14]=='95G' or $sz[15]=='95G' or $sz[16]=='95G' or $sz[17]=='95G' or $sz[18]=='95G' or $sz[19]=='95G' or $sz[20]=='95G' or $sz[21]=='95G' or $sz[22]=='95G' or $sz[23]=='95G' or $sz[24]=='95G' or $sz[25]=='95G' or $sz[26]=='95G' or $sz[27]=='95G' or $sz[28]=='95G' or $sz[29]=='95G' or $sz[30]=='95G' or $sz[31]=='95G' or $sz[32]=='95G' or $sz[33]=='95G' or $sz[34]=='95G' or $sz[35]=='95G' or $sz[36]=='95G' or $sz[37]=='95G' or $sz[38]=='95G' or $sz[39]=='95G' or $sz[40]=='95G' or $sz[41]=='95G' or $sz[42]=='95G' or $sz[43]=='95G' or $sz[44]=='95G' or $sz[45]=='95G' or $sz[46]=='95G' or $sz[47]=='95G' or $sz[48]=='95G' or $sz[49]=='95G' or $sz[50]=='95G' or $sz[51]=='95G' or $sz[52]=='95G' or $sz[53]=='95G' or $sz[54]=='95G' or $sz[55]=='95G' or $sz[56]=='95G' or $sz[57]=='95G' or $sz[58]=='95G' or $sz[59]=='95G'  or $sz[60]=='95G' or $sz[61]=='95G' or $sz[62]=='95G' or $sz[63]=='95G' or $sz[64]=='95G' or $sz[65]=='95G' or $sz[66]=='95G' or $sz[67]=='95G' or $sz[68]=='95G' or $sz[69]=='95G' or $sz[70]=='95G' or $sz[71]=='95G' or $sz[72]=='95G' or $sz[73]=='95G' or $sz[74]=='95G' or $sz[75]=='95G' or $sz[76]=='95G' or $sz[77]=='95G' or $sz[78]=='95G' or $sz[79]=='95G' or $sz[80]=='95G')
{echo "<nobr><input name='size[]' type='checkbox' value='95G' checked>95G</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='95G'>95G</nobr>";}

if ( $sz[0]=='95H' or $sz[1]=='95H' or $sz[2]=='95H' or $sz[3]=='95H' or $sz[4]=='95H' or $sz[5]=='95H' or $sz[6]=='95H' or $sz[7]=='95H' or $sz[8]=='95H' or $sz[9]=='95H' or $sz[10]=='95H' or $sz[11]=='95H' or $sz[12]=='95H' or $sz[13]=='95H' or $sz[14]=='95H' or $sz[15]=='95H' or $sz[16]=='95H' or $sz[17]=='95H' or $sz[18]=='95H' or $sz[19]=='95H' or $sz[20]=='95H' or $sz[21]=='95H' or $sz[22]=='95H' or $sz[23]=='95H' or $sz[24]=='95H' or $sz[25]=='95H' or $sz[26]=='95H' or $sz[27]=='95H' or $sz[28]=='95H' or $sz[29]=='95H' or $sz[30]=='95H' or $sz[31]=='95H' or $sz[32]=='95H' or $sz[33]=='95H' or $sz[34]=='95H' or $sz[35]=='95H' or $sz[36]=='95H' or $sz[37]=='95H' or $sz[38]=='95H' or $sz[39]=='95H' or $sz[40]=='95H' or $sz[41]=='95H' or $sz[42]=='95H' or $sz[43]=='95H' or $sz[44]=='95H' or $sz[45]=='95H' or $sz[46]=='95H' or $sz[47]=='95H' or $sz[48]=='95H' or $sz[49]=='95H' or $sz[50]=='95H' or $sz[51]=='95H' or $sz[52]=='95H' or $sz[53]=='95H' or $sz[54]=='95H' or $sz[55]=='95H' or $sz[56]=='95H' or $sz[57]=='95H' or $sz[58]=='95H' or $sz[59]=='95H'  or $sz[60]=='95H' or $sz[61]=='95H' or $sz[62]=='95H' or $sz[63]=='95H' or $sz[64]=='95H' or $sz[65]=='95H' or $sz[66]=='95H' or $sz[67]=='95H' or $sz[68]=='95H' or $sz[69]=='95H' or $sz[70]=='95H' or $sz[71]=='95H' or $sz[72]=='95H' or $sz[73]=='95H' or $sz[74]=='95H' or $sz[75]=='95H' or $sz[76]=='95H' or $sz[77]=='95H' or $sz[78]=='95H' or $sz[79]=='95H' or $sz[80]=='95H')
{echo "<nobr><input name='size[]' type='checkbox' value='95H' checked>95H</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='95H'>95H</nobr>";}


if ( $sz[0]=='95I' or $sz[1]=='95I' or $sz[2]=='95I' or $sz[3]=='95I' or $sz[4]=='95I' or $sz[5]=='95I' or $sz[6]=='95I' or $sz[7]=='95I' or $sz[8]=='95I' or $sz[9]=='95I' or $sz[10]=='95I' or $sz[11]=='95I' or $sz[12]=='95I' or $sz[13]=='95I' or $sz[14]=='95I' or $sz[15]=='95I' or $sz[16]=='95I' or $sz[17]=='95I' or $sz[18]=='95I' or $sz[19]=='95I' or $sz[20]=='95I' or $sz[21]=='95I' or $sz[22]=='95I' or $sz[23]=='95I' or $sz[24]=='95I' or $sz[25]=='95I' or $sz[26]=='95I' or $sz[27]=='95I' or $sz[28]=='95I' or $sz[29]=='95I' or $sz[30]=='95I' or $sz[31]=='95I' or $sz[32]=='95I' or $sz[33]=='95I' or $sz[34]=='95I' or $sz[35]=='95I' or $sz[36]=='95I' or $sz[37]=='95I' or $sz[38]=='95I' or $sz[39]=='95I' or $sz[40]=='95I' or $sz[41]=='95I' or $sz[42]=='95I' or $sz[43]=='95I' or $sz[44]=='95I' or $sz[45]=='95I' or $sz[46]=='95I' or $sz[47]=='95I' or $sz[48]=='95I' or $sz[49]=='95I' or $sz[50]=='95I' or $sz[51]=='95I' or $sz[52]=='95I' or $sz[53]=='95I' or $sz[54]=='95I' or $sz[55]=='95I' or $sz[56]=='95I' or $sz[57]=='95I' or $sz[58]=='95I' or $sz[59]=='95I'  or $sz[60]=='95I' or $sz[61]=='95I' or $sz[62]=='95I' or $sz[63]=='95I' or $sz[64]=='95I' or $sz[65]=='95I' or $sz[66]=='95I' or $sz[67]=='95I' or $sz[68]=='95I' or $sz[69]=='95I' or $sz[70]=='95I' or $sz[71]=='95I' or $sz[72]=='95I' or $sz[73]=='95I' or $sz[74]=='95I' or $sz[75]=='95I' or $sz[76]=='95I' or $sz[77]=='95I' or $sz[78]=='95I' or $sz[79]=='95I' or $sz[80]=='95I')
{echo "<nobr><input name='size[]' type='checkbox' value='95I' checked>95I</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='95I'>95I</nobr>";}



if ( $sz[0]=='95J' or $sz[1]=='95J' or $sz[2]=='95J' or $sz[3]=='95J' or $sz[4]=='95J' or $sz[5]=='95J' or $sz[6]=='95J' or $sz[7]=='95J' or $sz[8]=='95J' or $sz[9]=='95J' or $sz[10]=='95J' or $sz[11]=='95J' or $sz[12]=='95J' or $sz[13]=='95J' or $sz[14]=='95J' or $sz[15]=='95J' or $sz[16]=='95J' or $sz[17]=='95J' or $sz[18]=='95J' or $sz[19]=='95J' or $sz[20]=='95J' or $sz[21]=='95J' or $sz[22]=='95J' or $sz[23]=='95J' or $sz[24]=='95J' or $sz[25]=='95J' or $sz[26]=='95J' or $sz[27]=='95J' or $sz[28]=='95J' or $sz[29]=='95J' or $sz[30]=='95J' or $sz[31]=='95J' or $sz[32]=='95J' or $sz[33]=='95J' or $sz[34]=='95J' or $sz[35]=='95J' or $sz[36]=='95J' or $sz[37]=='95J' or $sz[38]=='95J' or $sz[39]=='95J' or $sz[40]=='95J' or $sz[41]=='95J' or $sz[42]=='95J' or $sz[43]=='95J' or $sz[44]=='95J' or $sz[45]=='95J' or $sz[46]=='95J' or $sz[47]=='95J' or $sz[48]=='95J' or $sz[49]=='95J' or $sz[50]=='95J' or $sz[51]=='95J' or $sz[52]=='95J' or $sz[53]=='95J' or $sz[54]=='95J' or $sz[55]=='95J' or $sz[56]=='95J' or $sz[57]=='95J' or $sz[58]=='95J' or $sz[59]=='95J'  or $sz[60]=='95J' or $sz[61]=='95J' or $sz[62]=='95J' or $sz[63]=='95J' or $sz[64]=='95J' or $sz[65]=='95J' or $sz[66]=='95J' or $sz[67]=='95J' or $sz[68]=='95J' or $sz[69]=='95J' or $sz[70]=='95J' or $sz[71]=='95J' or $sz[72]=='95J' or $sz[73]=='95J' or $sz[74]=='95J' or $sz[75]=='95J' or $sz[76]=='95J' or $sz[77]=='95J' or $sz[78]=='95J' or $sz[79]=='95J' or $sz[80]=='95J')
{echo "<nobr><input name='size[]' type='checkbox' value='95J' checked>95J</nobr><br>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='95J'>95J</nobr><br>";}




if ( $sz[0]=='100B' or $sz[1]=='100B' or $sz[2]=='100B' or $sz[3]=='100B' or $sz[4]=='100B' or $sz[5]=='100B' or $sz[6]=='100B' or $sz[7]=='100B' or $sz[8]=='100B' or $sz[9]=='100B' or $sz[10]=='100B' or $sz[11]=='100B' or $sz[12]=='100B' or $sz[13]=='100B' or $sz[14]=='100B' or $sz[15]=='100B' or $sz[16]=='100B' or $sz[17]=='100B' or $sz[18]=='100B' or $sz[19]=='100B' or $sz[20]=='100B' or $sz[21]=='100B' or $sz[22]=='100B' or $sz[23]=='100B' or $sz[24]=='100B' or $sz[25]=='100B' or $sz[26]=='100B' or $sz[27]=='100B' or $sz[28]=='100B' or $sz[29]=='100B' or $sz[30]=='100B' or $sz[31]=='100B' or $sz[32]=='100B' or $sz[33]=='100B' or $sz[34]=='100B' or $sz[35]=='100B' or $sz[36]=='100B' or $sz[37]=='100B' or $sz[38]=='100B' or $sz[39]=='100B' or $sz[40]=='100B' or $sz[41]=='100B' or $sz[42]=='100B' or $sz[43]=='100B' or $sz[44]=='100B' or $sz[45]=='100B' or $sz[46]=='100B' or $sz[47]=='100B' or $sz[48]=='100B' or $sz[49]=='100B' or $sz[50]=='100B' or $sz[51]=='100B' or $sz[52]=='100B' or $sz[53]=='100B' or $sz[54]=='100B' or $sz[55]=='100B' or $sz[56]=='100B' or $sz[57]=='100B' or $sz[58]=='100B' or $sz[59]=='100B'  or $sz[60]=='100B' or $sz[61]=='100B' or $sz[62]=='100B' or $sz[63]=='100B' or $sz[64]=='100B' or $sz[65]=='100B' or $sz[66]=='100B' or $sz[67]=='100B' or $sz[68]=='100B' or $sz[69]=='100B' or $sz[70]=='100B' or $sz[71]=='100B' or $sz[72]=='100B' or $sz[73]=='100B' or $sz[74]=='100B' or $sz[75]=='100B' or $sz[76]=='100B' or $sz[77]=='100B' or $sz[78]=='100B' or $sz[79]=='100B' or $sz[80]=='100B')
{echo "<nobr><input name='size[]' type='checkbox' value='100B' checked>100B</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='100B'>100B</nobr>";}

if ( $sz[0]=='100C' or $sz[1]=='100C' or $sz[2]=='100C' or $sz[3]=='100C' or $sz[4]=='100C' or $sz[5]=='100C' or $sz[6]=='100C' or $sz[7]=='100C' or $sz[8]=='100C' or $sz[9]=='100C' or $sz[10]=='100C' or $sz[11]=='100C' or $sz[12]=='100C' or $sz[13]=='100C' or $sz[14]=='100C' or $sz[15]=='100C' or $sz[16]=='100C' or $sz[17]=='100C' or $sz[18]=='100C' or $sz[19]=='100C' or $sz[20]=='100C' or $sz[21]=='100C' or $sz[22]=='100C' or $sz[23]=='100C' or $sz[24]=='100C' or $sz[25]=='100C' or $sz[26]=='100C' or $sz[27]=='100C' or $sz[28]=='100C' or $sz[29]=='100C' or $sz[30]=='100C' or $sz[31]=='100C' or $sz[32]=='100C' or $sz[33]=='100C' or $sz[34]=='100C' or $sz[35]=='100C' or $sz[36]=='100C' or $sz[37]=='100C' or $sz[38]=='100C' or $sz[39]=='100C' or $sz[40]=='100C' or $sz[41]=='100C' or $sz[42]=='100C' or $sz[43]=='100C' or $sz[44]=='100C' or $sz[45]=='100C' or $sz[46]=='100C' or $sz[47]=='100C' or $sz[48]=='100C' or $sz[49]=='100C' or $sz[50]=='100C' or $sz[51]=='100C' or $sz[52]=='100C' or $sz[53]=='100C' or $sz[54]=='100C' or $sz[55]=='100C' or $sz[56]=='100C' or $sz[57]=='100C' or $sz[58]=='100C' or $sz[59]=='100C'  or $sz[60]=='100C' or $sz[61]=='100C' or $sz[62]=='100C' or $sz[63]=='100C' or $sz[64]=='100C' or $sz[65]=='100C' or $sz[66]=='100C' or $sz[67]=='100C' or $sz[68]=='100C' or $sz[69]=='100C' or $sz[70]=='100C' or $sz[71]=='100C' or $sz[72]=='100C' or $sz[73]=='100C' or $sz[74]=='100C' or $sz[75]=='100C' or $sz[76]=='100C' or $sz[77]=='100C' or $sz[78]=='100C' or $sz[79]=='100C' or $sz[80]=='100C')
{echo "<nobr><input name='size[]' type='checkbox' value='100C' checked>100C</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='100C'>100C</nobr>";}

if ( $sz[0]=='100D' or $sz[1]=='100D' or $sz[2]=='100D' or $sz[3]=='100D' or $sz[4]=='100D' or $sz[5]=='100D' or $sz[6]=='100D' or $sz[7]=='100D' or $sz[8]=='100D' or $sz[9]=='100D' or $sz[10]=='100D' or $sz[11]=='100D' or $sz[12]=='100D' or $sz[13]=='100D' or $sz[14]=='100D' or $sz[15]=='100D' or $sz[16]=='100D' or $sz[17]=='100D' or $sz[18]=='100D' or $sz[19]=='100D' or $sz[20]=='100D' or $sz[21]=='100D' or $sz[22]=='100D' or $sz[23]=='100D' or $sz[24]=='100D' or $sz[25]=='100D' or $sz[26]=='100D' or $sz[27]=='100D' or $sz[28]=='100D' or $sz[29]=='100D' or $sz[30]=='100D' or $sz[31]=='100D' or $sz[32]=='100D' or $sz[33]=='100D' or $sz[34]=='100D' or $sz[35]=='100D' or $sz[36]=='100D' or $sz[37]=='100D' or $sz[38]=='100D' or $sz[39]=='100D' or $sz[40]=='100D' or $sz[41]=='100D' or $sz[42]=='100D' or $sz[43]=='100D' or $sz[44]=='100D' or $sz[45]=='100D' or $sz[46]=='100D' or $sz[47]=='100D' or $sz[48]=='100D' or $sz[49]=='100D' or $sz[50]=='100D' or $sz[51]=='100D' or $sz[52]=='100D' or $sz[53]=='100D' or $sz[54]=='100D' or $sz[55]=='100D' or $sz[56]=='100D' or $sz[57]=='100D' or $sz[58]=='100D' or $sz[59]=='100D'  or $sz[60]=='100D' or $sz[61]=='100D' or $sz[62]=='100D' or $sz[63]=='100D' or $sz[64]=='100D' or $sz[65]=='100D' or $sz[66]=='100D' or $sz[67]=='100D' or $sz[68]=='100D' or $sz[69]=='100D' or $sz[70]=='100D' or $sz[71]=='100D' or $sz[72]=='100D' or $sz[73]=='100D' or $sz[74]=='100D' or $sz[75]=='100D' or $sz[76]=='100D' or $sz[77]=='100D' or $sz[78]=='100D' or $sz[79]=='100D' or $sz[80]=='100D')
{echo "<nobr><input name='size[]' type='checkbox' value='100D' checked>100D</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='100D'>100D</nobr>";}

if ( $sz[0]=='100DD' or $sz[1]=='100DD' or $sz[2]=='100DD' or $sz[3]=='100DD' or $sz[4]=='100DD' or $sz[5]=='100DD' or $sz[6]=='100DD' or $sz[7]=='100DD' or $sz[8]=='100DD' or $sz[9]=='100DD' or $sz[10]=='100DD' or $sz[11]=='100DD' or $sz[12]=='100DD' or $sz[13]=='100DD' or $sz[14]=='100DD' or $sz[15]=='100DD' or $sz[16]=='100DD' or $sz[17]=='100DD' or $sz[18]=='100DD' or $sz[19]=='100DD' or $sz[20]=='100DD' or $sz[21]=='100DD' or $sz[22]=='100DD' or $sz[23]=='100DD' or $sz[24]=='100DD' or $sz[25]=='100DD' or $sz[26]=='100DD' or $sz[27]=='100DD' or $sz[28]=='100DD' or $sz[29]=='100DD' or $sz[30]=='100DD' or $sz[31]=='100DD' or $sz[32]=='100DD' or $sz[33]=='100DD' or $sz[34]=='100DD' or $sz[35]=='100DD' or $sz[36]=='100DD' or $sz[37]=='100DD' or $sz[38]=='100DD' or $sz[39]=='100DD' or $sz[40]=='100DD' or $sz[41]=='100DD' or $sz[42]=='100DD' or $sz[43]=='100DD' or $sz[44]=='100DD' or $sz[45]=='100DD' or $sz[46]=='100DD' or $sz[47]=='100DD' or $sz[48]=='100DD' or $sz[49]=='100DD' or $sz[50]=='100DD' or $sz[51]=='100DD' or $sz[52]=='100DD' or $sz[53]=='100DD' or $sz[54]=='100DD' or $sz[55]=='100DD' or $sz[56]=='100DD' or $sz[57]=='100DD' or $sz[58]=='100DD' or $sz[59]=='100DD'  or $sz[60]=='100DD' or $sz[61]=='100DD' or $sz[62]=='100DD' or $sz[63]=='100DD' or $sz[64]=='100DD' or $sz[65]=='100DD' or $sz[66]=='100DD' or $sz[67]=='100DD' or $sz[68]=='100DD' or $sz[69]=='100DD' or $sz[70]=='100DD' or $sz[71]=='100DD' or $sz[72]=='100DD' or $sz[73]=='100DD' or $sz[74]=='100DD' or $sz[75]=='100DD' or $sz[76]=='100DD' or $sz[77]=='100DD' or $sz[78]=='100DD' or $sz[79]=='100DD' or $sz[80]=='100DD')
{echo "<nobr><input name='size[]' type='checkbox' value='100DD' checked>100DD</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='100DD'>100DD</nobr>";}

if ( $sz[0]=='100E' or $sz[1]=='100E' or $sz[2]=='100E' or $sz[3]=='100E' or $sz[4]=='100E' or $sz[5]=='100E' or $sz[6]=='100E' or $sz[7]=='100E' or $sz[8]=='100E' or  
$sz[9]=='100E' or $sz[10]=='100E' or $sz[11]=='100E' or $sz[12]=='100E' or $sz[13]=='100E' or $sz[14]=='100E' or $sz[15]=='100E' or $sz[16]=='100E' or $sz[17]=='100E'  
or $sz[18]=='100E' or $sz[19]=='100E' or $sz[20]=='100E' or $sz[21]=='100E' or $sz[22]=='100E' or $sz[23]=='100E' or $sz[24]=='100E' or $sz[25]=='100E' or $sz[26] 
=='100E' or $sz[27]=='100E' or $sz[28]=='100E' or $sz[29]=='100E' or $sz[30]=='100E' or $sz[31]=='100E' or $sz[32]=='100E' or $sz[33]=='100E' or $sz[34]=='100E' or  
$sz[35]=='100E' or $sz[36]=='100E' or $sz[37]=='100E' or $sz[38]=='100E' or $sz[39]=='100E' or $sz[40]=='100E' or $sz[41]=='100E' or $sz[42]=='100E' or $sz[43] 
=='100E' or $sz[44]=='100E' or $sz[45]=='100E' or $sz[46]=='100E' or $sz[47]=='100E' or $sz[48]=='100E' or $sz[49]=='100E' or $sz[50]=='100E' or $sz[51]=='100E' or  
$sz[52]=='100E' or $sz[53]=='100E' or $sz[54]=='100E' or $sz[55]=='100E' or $sz[56]=='100E' or $sz[57]=='100E' or $sz[58]=='100E' or $sz[59]=='100E'  or $sz[60] 
=='100E' or $sz[61]=='100E' or $sz[62]=='100E' or $sz[63]=='100E' or $sz[64]=='100E' or $sz[65]=='100E' or $sz[66]=='100E' or $sz[67]=='100E' or $sz[68]=='100E' or  
$sz[69]=='100E' or $sz[70]=='100E' or $sz[71]=='100E' or $sz[72]=='100E' or $sz[73]=='100E' or $sz[74]=='100E' or $sz[75]=='100E' or $sz[76]=='100E' or $sz[77] 
=='100E' or $sz[78]=='100E' or $sz[79]=='100E' or $sz[80]=='100E')
{echo "<nobr><input name='size[]' type='checkbox' value='100E' checked>100E</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='100E'>100E</nobr>";}

if ( $sz[0]=='100F' or $sz[1]=='100F' or $sz[2]=='100F' or $sz[3]=='100F' or $sz[4]=='100F' or $sz[5]=='100F' or $sz[6]=='100F' or $sz[7]=='100F' or $sz[8]=='100F' or  
$sz[9]=='100F' or $sz[10]=='100F' or $sz[11]=='100F' or $sz[12]=='100F' or $sz[13]=='100F' or $sz[14]=='100F' or $sz[15]=='100F' or $sz[16]=='100F' or $sz[17]=='100F'  
or $sz[18]=='100F' or $sz[19]=='100F' or $sz[20]=='100F' or $sz[21]=='100F' or $sz[22]=='100F' or $sz[23]=='100F' or $sz[24]=='100F' or $sz[25]=='100F' or $sz[26] 
=='100F' or $sz[27]=='100F' or $sz[28]=='100F' or $sz[29]=='100F' or $sz[30]=='100F' or $sz[31]=='100F' or $sz[32]=='100F' or $sz[33]=='100F' or $sz[34]=='100F' or  
$sz[35]=='100F' or $sz[36]=='100F' or $sz[37]=='100F' or $sz[38]=='100F' or $sz[39]=='100F' or $sz[40]=='100F' or $sz[41]=='100F' or $sz[42]=='100F' or $sz[43] 
=='100F' or $sz[44]=='100F' or $sz[45]=='100F' or $sz[46]=='100F' or $sz[47]=='100F' or $sz[48]=='100F' or $sz[49]=='100F' or $sz[50]=='100F' or $sz[51]=='100F' or  
$sz[52]=='100F' or $sz[53]=='100F' or $sz[54]=='100F' or $sz[55]=='100F' or $sz[56]=='100F' or $sz[57]=='100F' or $sz[58]=='100F' or $sz[59]=='100F'  or $sz[60] 
=='100F' or $sz[61]=='100F' or $sz[62]=='100F' or $sz[63]=='100F' or $sz[64]=='100F' or $sz[65]=='100F' or $sz[66]=='100F' or $sz[67]=='100F' or $sz[68]=='100F' or  
$sz[69]=='100F' or $sz[70]=='100F' or $sz[71]=='100F' or $sz[72]=='100F' or $sz[73]=='100F' or $sz[74]=='100F' or $sz[75]=='100F' or $sz[76]=='100F' or $sz[77] 
=='100F' or $sz[78]=='100F' or $sz[79]=='100F' or $sz[80]=='100F')
{echo "<nobr><input name='size[]' type='checkbox' value='100F' checked>100F</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='100F'>100F</nobr>";}


if ( $sz[0]=='100G' or $sz[1]=='100G' or $sz[2]=='100G' or $sz[3]=='100G' or $sz[4]=='100G' or $sz[5]=='100G' or $sz[6]=='100G' or $sz[7]=='100G' or $sz[8]=='100G' or  
$sz[9]=='100G' or $sz[10]=='100G' or $sz[11]=='100G' or $sz[12]=='100G' or $sz[13]=='100G' or $sz[14]=='100G' or $sz[15]=='100G' or $sz[16]=='100G' or $sz[17]=='100G'  
or $sz[18]=='100G' or $sz[19]=='100G' or $sz[20]=='100G' or $sz[21]=='100G' or $sz[22]=='100G' or $sz[23]=='100G' or $sz[24]=='100G' or $sz[25]=='100G' or $sz[26] 
=='100G' or $sz[27]=='100G' or $sz[28]=='100G' or $sz[29]=='100G' or $sz[30]=='100G' or $sz[31]=='100G' or $sz[32]=='100G' or $sz[33]=='100G' or $sz[34]=='100G' or  
$sz[35]=='100G' or $sz[36]=='100G' or $sz[37]=='100G' or $sz[38]=='100G' or $sz[39]=='100G' or $sz[40]=='100G' or $sz[41]=='100G' or $sz[42]=='100G' or $sz[43] 
=='100G' or $sz[44]=='100G' or $sz[45]=='100G' or $sz[46]=='100G' or $sz[47]=='100G' or $sz[48]=='100G' or $sz[49]=='100G' or $sz[50]=='100G' or $sz[51]=='100G' or  
$sz[52]=='100G' or $sz[53]=='100G' or $sz[54]=='100G' or $sz[55]=='100G' or $sz[56]=='100G' or $sz[57]=='100G' or $sz[58]=='100G' or $sz[59]=='100G'  or $sz[60] 
=='100G' or $sz[61]=='100G' or $sz[62]=='100G' or $sz[63]=='100G' or $sz[64]=='100G' or $sz[65]=='100G' or $sz[66]=='100G' or $sz[67]=='100G' or $sz[68]=='100G' or  
$sz[69]=='100G' or $sz[70]=='100G' or $sz[71]=='100G' or $sz[72]=='100G' or $sz[73]=='100G' or $sz[74]=='100G' or $sz[75]=='100G' or $sz[76]=='100G' or $sz[77] 
=='100G' or $sz[78]=='100G' or $sz[79]=='100G' or $sz[80]=='100G')
{echo "<nobr><input name='size[]' type='checkbox' value='100G' checked>100G</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='100G'>100G</nobr>";}

if ( $sz[0]=='100H' or $sz[1]=='100H' or $sz[2]=='100H' or $sz[3]=='100H' or $sz[4]=='100H' or $sz[5]=='100H' or $sz[6]=='100H' or $sz[7]=='100H' or $sz[8]=='100H' or  
$sz[9]=='100H' or $sz[10]=='100H' or $sz[11]=='100H' or $sz[12]=='100H' or $sz[13]=='100H' or $sz[14]=='100H' or $sz[15]=='100H' or $sz[16]=='100H' or $sz[17]=='100H'  
or $sz[18]=='100H' or $sz[19]=='100H' or $sz[20]=='100H' or $sz[21]=='100H' or $sz[22]=='100H' or $sz[23]=='100H' or $sz[24]=='100H' or $sz[25]=='100H' or $sz[26] 
=='100H' or $sz[27]=='100H' or $sz[28]=='100H' or $sz[29]=='100H' or $sz[30]=='100H' or $sz[31]=='100H' or $sz[32]=='100H' or $sz[33]=='100H' or $sz[34]=='100H' or  
$sz[35]=='100H' or $sz[36]=='100H' or $sz[37]=='100H' or $sz[38]=='100H' or $sz[39]=='100H' or $sz[40]=='100H' or $sz[41]=='100H' or $sz[42]=='100H' or $sz[43] 
=='100H' or $sz[44]=='100H' or $sz[45]=='100H' or $sz[46]=='100H' or $sz[47]=='100H' or $sz[48]=='100H' or $sz[49]=='100H' or $sz[50]=='100H' or $sz[51]=='100H' or  
$sz[52]=='100H' or $sz[53]=='100H' or $sz[54]=='100H' or $sz[55]=='100H' or $sz[56]=='100H' or $sz[57]=='100H' or $sz[58]=='100H' or $sz[59]=='100H'  or $sz[60] 
=='100H' or $sz[61]=='100H' or $sz[62]=='100H' or $sz[63]=='100H' or $sz[64]=='100H' or $sz[65]=='100H' or $sz[66]=='100H' or $sz[67]=='100H' or $sz[68]=='100H' or  
$sz[69]=='100H' or $sz[70]=='100H' or $sz[71]=='100H' or $sz[72]=='100H' or $sz[73]=='100H' or $sz[74]=='100H' or $sz[75]=='100H' or $sz[76]=='100H' or $sz[77] 
=='100H' or $sz[78]=='100H' or $sz[79]=='100H' or $sz[80]=='100H')
{echo "<nobr><input name='size[]' type='checkbox' value='100H' checked>100H</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='100H'>100H</nobr>";}


if ( $sz[0]=='100I' or $sz[1]=='100I' or $sz[2]=='100I' or $sz[3]=='100I' or $sz[4]=='100I' or $sz[5]=='100I' or $sz[6]=='100I' or $sz[7]=='100I' or $sz[8]=='100I' or  
$sz[9]=='100I' or $sz[10]=='100I' or $sz[11]=='100I' or $sz[12]=='100I' or $sz[13]=='100I' or $sz[14]=='100I' or $sz[15]=='100I' or $sz[16]=='100I' or $sz[17]=='100I'  
or $sz[18]=='100I' or $sz[19]=='100I' or $sz[20]=='100I' or $sz[21]=='100I' or $sz[22]=='100I' or $sz[23]=='100I' or $sz[24]=='100I' or $sz[25]=='100I' or $sz[26] 
=='100I' or $sz[27]=='100I' or $sz[28]=='100I' or $sz[29]=='100I' or $sz[30]=='100I' or $sz[31]=='100I' or $sz[32]=='100I' or $sz[33]=='100I' or $sz[34]=='100I' or  
$sz[35]=='100I' or $sz[36]=='100I' or $sz[37]=='100I' or $sz[38]=='100I' or $sz[39]=='100I' or $sz[40]=='100I' or $sz[41]=='100I' or $sz[42]=='100I' or $sz[43] 
=='100I' or $sz[44]=='100I' or $sz[45]=='100I' or $sz[46]=='100I' or $sz[47]=='100I' or $sz[48]=='100I' or $sz[49]=='100I' or $sz[50]=='100I' or $sz[51]=='100I' or  
$sz[52]=='100I' or $sz[53]=='100I' or $sz[54]=='100I' or $sz[55]=='100I' or $sz[56]=='100I' or $sz[57]=='100I' or $sz[58]=='100I' or $sz[59]=='100I'  or $sz[60] 
=='100I' or $sz[61]=='100I' or $sz[62]=='100I' or $sz[63]=='100I' or $sz[64]=='100I' or $sz[65]=='100I' or $sz[66]=='100I' or $sz[67]=='100I' or $sz[68]=='100I' or  
$sz[69]=='100I' or $sz[70]=='100I' or $sz[71]=='100I' or $sz[72]=='100I' or $sz[73]=='100I' or $sz[74]=='100I' or $sz[75]=='100I' or $sz[76]=='100I' or $sz[77] 
=='100I' or $sz[78]=='100I' or $sz[79]=='100I' or $sz[80]=='100I')
{echo "<nobr><input name='size[]' type='checkbox' value='100I' checked>100I</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='100I'>100I</nobr>";}



if ( $sz[0]=='100J' or $sz[1]=='100J' or $sz[2]=='100J' or $sz[3]=='100J' or $sz[4]=='100J' or $sz[5]=='100J' or $sz[6]=='100J' or $sz[7]=='100J' or $sz[8]=='100J' or  
$sz[9]=='100J' or $sz[10]=='100J' or $sz[11]=='100J' or $sz[12]=='100J' or $sz[13]=='100J' or $sz[14]=='100J' or $sz[15]=='100J' or $sz[16]=='100J' or $sz[17]=='100J'  
or $sz[18]=='100J' or $sz[19]=='100J' or $sz[20]=='100J' or $sz[21]=='100J' or $sz[22]=='100J' or $sz[23]=='100J' or $sz[24]=='100J' or $sz[25]=='100J' or $sz[26] 
=='100J' or $sz[27]=='100J' or $sz[28]=='100J' or $sz[29]=='100J' or $sz[30]=='100J' or $sz[31]=='100J' or $sz[32]=='100J' or $sz[33]=='100J' or $sz[34]=='100J' or  
$sz[35]=='100J' or $sz[36]=='100J' or $sz[37]=='100J' or $sz[38]=='100J' or $sz[39]=='100J' or $sz[40]=='100J' or $sz[41]=='100J' or $sz[42]=='100J' or $sz[43] 
=='100J' or $sz[44]=='100J' or $sz[45]=='100J' or $sz[46]=='100J' or $sz[47]=='100J' or $sz[48]=='100J' or $sz[49]=='100J' or $sz[50]=='100J' or $sz[51]=='100J' or  
$sz[52]=='100J' or $sz[53]=='100J' or $sz[54]=='100J' or $sz[55]=='100J' or $sz[56]=='100J' or $sz[57]=='100J' or $sz[58]=='100J' or $sz[59]=='100J'  or $sz[60] 
=='100J' or $sz[61]=='100J' or $sz[62]=='100J' or $sz[63]=='100J' or $sz[64]=='100J' or $sz[65]=='100J' or $sz[66]=='100J' or $sz[67]=='100J' or $sz[68]=='100J' or  
$sz[69]=='100J' or $sz[70]=='100J' or $sz[71]=='100J' or $sz[72]=='100J' or $sz[73]=='100J' or $sz[74]=='100J' or $sz[75]=='100J' or $sz[76]=='100J' or $sz[77] 
=='100J' or $sz[78]=='100J' or $sz[79]=='100J' or $sz[80]=='100J')
{echo "<nobr><input name='size[]' type='checkbox' value='100J' checked>100J</nobr><br>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='100J'>100J</nobr><br>";}



if ( $sz[0]=='105B' or $sz[1]=='105B' or $sz[2]=='105B' or $sz[3]=='105B' or $sz[4]=='105B' or $sz[5]=='105B' or $sz[6]=='105B' or $sz[7]=='105B' or $sz[8]=='105B' or $sz[9]=='105B' or $sz[10]=='105B' or $sz[11]=='105B' or $sz[12]=='105B' or $sz[13]=='105B' or $sz[14]=='105B' or $sz[15]=='105B' or $sz[16]=='105B' or $sz[17]=='105B' or $sz[18]=='105B' or $sz[19]=='105B' or $sz[20]=='105B' or $sz[21]=='105B' or $sz[22]=='105B' or $sz[23]=='105B' or $sz[24]=='105B' or $sz[25]=='105B' or $sz[26]=='105B' or $sz[27]=='105B' or $sz[28]=='105B' or $sz[29]=='105B' or $sz[30]=='105B' or $sz[31]=='105B' or $sz[32]=='105B' or $sz[33]=='105B' or $sz[34]=='105B' or $sz[35]=='105B' or $sz[36]=='105B' or $sz[37]=='105B' or $sz[38]=='105B' or $sz[39]=='105B' or $sz[40]=='105B' or $sz[41]=='105B' or $sz[42]=='105B' or $sz[43]=='105B' or $sz[44]=='105B' or $sz[45]=='105B' or $sz[46]=='105B' or $sz[47]=='105B' or $sz[48]=='105B' or $sz[49]=='105B' or $sz[50]=='105B' or $sz[51]=='105B' or $sz[52]=='105B' or $sz[53]=='105B' or $sz[54]=='105B' or $sz[55]=='105B' or $sz[56]=='105B' or $sz[57]=='105B' or $sz[58]=='105B' or $sz[59]=='105B'  or $sz[60]=='105B' or $sz[61]=='105B' or $sz[62]=='105B' or $sz[63]=='105B' or $sz[64]=='105B' or $sz[65]=='105B' or $sz[66]=='105B' or $sz[67]=='105B' or $sz[68]=='105B' or $sz[69]=='105B' or $sz[70]=='105B' or $sz[71]=='105B' or $sz[72]=='105B' or $sz[73]=='105B' or $sz[74]=='105B' or $sz[75]=='105B' or $sz[76]=='105B' or $sz[77]=='105B' or $sz[78]=='105B' or $sz[79]=='105B' or $sz[80]=='105B')
{echo "<nobr><input name='size[]' type='checkbox' value='105B' checked>105B</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='105B'>105B</nobr>";}

if ( $sz[0]=='105C' or $sz[1]=='105C' or $sz[2]=='105C' or $sz[3]=='105C' or $sz[4]=='105C' or $sz[5]=='105C' or $sz[6]=='105C' or $sz[7]=='105C' or $sz[8]=='105C' or $sz[9]=='105C' or $sz[10]=='105C' or $sz[11]=='105C' or $sz[12]=='105C' or $sz[13]=='105C' or $sz[14]=='105C' or $sz[15]=='105C' or $sz[16]=='105C' or $sz[17]=='105C' or $sz[18]=='105C' or $sz[19]=='105C' or $sz[20]=='105C' or $sz[21]=='105C' or $sz[22]=='105C' or $sz[23]=='105C' or $sz[24]=='105C' or $sz[25]=='105C' or $sz[26]=='105C' or $sz[27]=='105C' or $sz[28]=='105C' or $sz[29]=='105C' or $sz[30]=='105C' or $sz[31]=='105C' or $sz[32]=='105C' or $sz[33]=='105C' or $sz[34]=='105C' or $sz[35]=='105C' or $sz[36]=='105C' or $sz[37]=='105C' or $sz[38]=='105C' or $sz[39]=='105C' or $sz[40]=='105C' or $sz[41]=='105C' or $sz[42]=='105C' or $sz[43]=='105C' or $sz[44]=='105C' or $sz[45]=='105C' or $sz[46]=='105C' or $sz[47]=='105C' or $sz[48]=='105C' or $sz[49]=='105C' or $sz[50]=='105C' or $sz[51]=='105C' or $sz[52]=='105C' or $sz[53]=='105C' or $sz[54]=='105C' or $sz[55]=='105C' or $sz[56]=='105C' or $sz[57]=='105C' or $sz[58]=='105C' or $sz[59]=='105C'  or $sz[60]=='105C' or $sz[61]=='105C' or $sz[62]=='105C' or $sz[63]=='105C' or $sz[64]=='105C' or $sz[65]=='105C' or $sz[66]=='105C' or $sz[67]=='105C' or $sz[68]=='105C' or $sz[69]=='105C' or $sz[70]=='105C' or $sz[71]=='105C' or $sz[72]=='105C' or $sz[73]=='105C' or $sz[74]=='105C' or $sz[75]=='105C' or $sz[76]=='105C' or $sz[77]=='105C' or $sz[78]=='105C' or $sz[79]=='105C' or $sz[80]=='105C')
{echo "<nobr><input name='size[]' type='checkbox' value='105C' checked>105C</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='105C'>105C</nobr>";}

if ( $sz[0]=='105D' or $sz[1]=='105D' or $sz[2]=='105D' or $sz[3]=='105D' or $sz[4]=='105D' or $sz[5]=='105D' or $sz[6]=='105D' or $sz[7]=='105D' or $sz[8]=='105D' or $sz[9]=='105D' or $sz[10]=='105D' or $sz[11]=='105D' or $sz[12]=='105D' or $sz[13]=='105D' or $sz[14]=='105D' or $sz[15]=='105D' or $sz[16]=='105D' or $sz[17]=='105D' or $sz[18]=='105D' or $sz[19]=='105D' or $sz[20]=='105D' or $sz[21]=='105D' or $sz[22]=='105D' or $sz[23]=='105D' or $sz[24]=='105D' or $sz[25]=='105D' or $sz[26]=='105D' or $sz[27]=='105D' or $sz[28]=='105D' or $sz[29]=='105D' or $sz[30]=='105D' or $sz[31]=='105D' or $sz[32]=='105D' or $sz[33]=='105D' or $sz[34]=='105D' or $sz[35]=='105D' or $sz[36]=='105D' or $sz[37]=='105D' or $sz[38]=='105D' or $sz[39]=='105D' or $sz[40]=='105D' or $sz[41]=='105D' or $sz[42]=='105D' or $sz[43]=='105D' or $sz[44]=='105D' or $sz[45]=='105D' or $sz[46]=='105D' or $sz[47]=='105D' or $sz[48]=='105D' or $sz[49]=='105D' or $sz[50]=='105D' or $sz[51]=='105D' or $sz[52]=='105D' or $sz[53]=='105D' or $sz[54]=='105D' or $sz[55]=='105D' or $sz[56]=='105D' or $sz[57]=='105D' or $sz[58]=='105D' or $sz[59]=='105D'  or $sz[60]=='105D' or $sz[61]=='105D' or $sz[62]=='105D' or $sz[63]=='105D' or $sz[64]=='105D' or $sz[65]=='105D' or $sz[66]=='105D' or $sz[67]=='105D' or $sz[68]=='105D' or $sz[69]=='105D' or $sz[70]=='105D' or $sz[71]=='105D' or $sz[72]=='105D' or $sz[73]=='105D' or $sz[74]=='105D' or $sz[75]=='105D' or $sz[76]=='105D' or $sz[77]=='105D' or $sz[78]=='105D' or $sz[79]=='105D' or $sz[80]=='105D')
{echo "<nobr><input name='size[]' type='checkbox' value='105D' checked>105D</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='105D'>105D</nobr>";}

if ( $sz[0]=='105E' or $sz[1]=='105E' or $sz[2]=='105E' or $sz[3]=='105E' or $sz[4]=='105E' or $sz[5]=='105E' or $sz[6]=='105E' or $sz[7]=='105E' or $sz[8]=='105E' or  
$sz[9]=='105E' or $sz[10]=='105E' or $sz[11]=='105E' or $sz[12]=='105E' or $sz[13]=='105E' or $sz[14]=='105E' or $sz[15]=='105E' or $sz[16]=='105E' or $sz[17]=='105E'  
or $sz[18]=='105E' or $sz[19]=='105E' or $sz[20]=='105E' or $sz[21]=='105E' or $sz[22]=='105E' or $sz[23]=='105E' or $sz[24]=='105E' or $sz[25]=='105E' or $sz[26] 
=='105E' or $sz[27]=='105E' or $sz[28]=='105E' or $sz[29]=='105E' or $sz[30]=='105E' or $sz[31]=='105E' or $sz[32]=='105E' or $sz[33]=='105E' or $sz[34]=='105E' or  
$sz[35]=='105E' or $sz[36]=='105E' or $sz[37]=='105E' or $sz[38]=='105E' or $sz[39]=='105E' or $sz[40]=='105E' or $sz[41]=='105E' or $sz[42]=='105E' or $sz[43] 
=='105E' or $sz[44]=='105E' or $sz[45]=='105E' or $sz[46]=='105E' or $sz[47]=='105E' or $sz[48]=='105E' or $sz[49]=='105E' or $sz[50]=='105E' or $sz[51]=='105E' or  
$sz[52]=='105E' or $sz[53]=='105E' or $sz[54]=='105E' or $sz[55]=='105E' or $sz[56]=='105E' or $sz[57]=='105E' or $sz[58]=='105E' or $sz[59]=='105E'  or $sz[60] 
=='105E' or $sz[61]=='105E' or $sz[62]=='105E' or $sz[63]=='105E' or $sz[64]=='105E' or $sz[65]=='105E' or $sz[66]=='105E' or $sz[67]=='105E' or $sz[68]=='105E' or  
$sz[69]=='105E' or $sz[70]=='105E' or $sz[71]=='105E' or $sz[72]=='105E' or $sz[73]=='105E' or $sz[74]=='105E' or $sz[75]=='105E' or $sz[76]=='105E' or $sz[77] 
=='105E' or $sz[78]=='105E' or $sz[79]=='105E' or $sz[80]=='105E')
{echo "<nobr><input name='size[]' type='checkbox' value='105E' checked>105E</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='105E'>105E</nobr>";}

if ( $sz[0]=='105F' or $sz[1]=='105F' or $sz[2]=='105F' or $sz[3]=='105F' or $sz[4]=='105F' or $sz[5]=='105F' or $sz[6]=='105F' or $sz[7]=='105F' or $sz[8]=='105F' or  
$sz[9]=='105F' or $sz[10]=='105F' or $sz[11]=='105F' or $sz[12]=='105F' or $sz[13]=='105F' or $sz[14]=='105F' or $sz[15]=='105F' or $sz[16]=='105F' or $sz[17]=='105F'  
or $sz[18]=='105F' or $sz[19]=='105F' or $sz[20]=='105F' or $sz[21]=='105F' or $sz[22]=='105F' or $sz[23]=='105F' or $sz[24]=='105F' or $sz[25]=='105F' or $sz[26] 
=='105F' or $sz[27]=='105F' or $sz[28]=='105F' or $sz[29]=='105F' or $sz[30]=='105F' or $sz[31]=='105F' or $sz[32]=='105F' or $sz[33]=='105F' or $sz[34]=='105F' or  
$sz[35]=='105F' or $sz[36]=='105F' or $sz[37]=='105F' or $sz[38]=='105F' or $sz[39]=='105F' or $sz[40]=='105F' or $sz[41]=='105F' or $sz[42]=='105F' or $sz[43] 
=='105F' or $sz[44]=='105F' or $sz[45]=='105F' or $sz[46]=='105F' or $sz[47]=='105F' or $sz[48]=='105F' or $sz[49]=='105F' or $sz[50]=='105F' or $sz[51]=='105F' or  
$sz[52]=='105F' or $sz[53]=='105F' or $sz[54]=='105F' or $sz[55]=='105F' or $sz[56]=='105F' or $sz[57]=='105F' or $sz[58]=='105F' or $sz[59]=='105F'  or $sz[60] 
=='105F' or $sz[61]=='105F' or $sz[62]=='105F' or $sz[63]=='105F' or $sz[64]=='105F' or $sz[65]=='105F' or $sz[66]=='105F' or $sz[67]=='105F' or $sz[68]=='105F' or  
$sz[69]=='105F' or $sz[70]=='105F' or $sz[71]=='105F' or $sz[72]=='105F' or $sz[73]=='105F' or $sz[74]=='105F' or $sz[75]=='105F' or $sz[76]=='105F' or $sz[77] 
=='105F' or $sz[78]=='105F' or $sz[79]=='105F' or $sz[80]=='105F')
{echo "<nobr><input name='size[]' type='checkbox' value='105F' checked>105F</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='105F'>105F</nobr>";}


if ( $sz[0]=='105G' or $sz[1]=='105G' or $sz[2]=='105G' or $sz[3]=='105G' or $sz[4]=='105G' or $sz[5]=='105G' or $sz[6]=='105G' or $sz[7]=='105G' or $sz[8]=='105G' or  
$sz[9]=='105G' or $sz[10]=='105G' or $sz[11]=='105G' or $sz[12]=='105G' or $sz[13]=='105G' or $sz[14]=='105G' or $sz[15]=='105G' or $sz[16]=='105G' or $sz[17]=='105G'  
or $sz[18]=='105G' or $sz[19]=='105G' or $sz[20]=='105G' or $sz[21]=='105G' or $sz[22]=='105G' or $sz[23]=='105G' or $sz[24]=='105G' or $sz[25]=='105G' or $sz[26] 
=='105G' or $sz[27]=='105G' or $sz[28]=='105G' or $sz[29]=='105G' or $sz[30]=='105G' or $sz[31]=='105G' or $sz[32]=='105G' or $sz[33]=='105G' or $sz[34]=='105G' or  
$sz[35]=='105G' or $sz[36]=='105G' or $sz[37]=='105G' or $sz[38]=='105G' or $sz[39]=='105G' or $sz[40]=='105G' or $sz[41]=='105G' or $sz[42]=='105G' or $sz[43] 
=='105G' or $sz[44]=='105G' or $sz[45]=='105G' or $sz[46]=='105G' or $sz[47]=='105G' or $sz[48]=='105G' or $sz[49]=='105G' or $sz[50]=='105G' or $sz[51]=='105G' or  
$sz[52]=='105G' or $sz[53]=='105G' or $sz[54]=='105G' or $sz[55]=='105G' or $sz[56]=='105G' or $sz[57]=='105G' or $sz[58]=='105G' or $sz[59]=='105G'  or $sz[60] 
=='105G' or $sz[61]=='105G' or $sz[62]=='105G' or $sz[63]=='105G' or $sz[64]=='105G' or $sz[65]=='105G' or $sz[66]=='105G' or $sz[67]=='105G' or $sz[68]=='105G' or  
$sz[69]=='105G' or $sz[70]=='105G' or $sz[71]=='105G' or $sz[72]=='105G' or $sz[73]=='105G' or $sz[74]=='105G' or $sz[75]=='105G' or $sz[76]=='105G' or $sz[77] 
=='105G' or $sz[78]=='105G' or $sz[79]=='105G' or $sz[80]=='105G')
{echo "<nobr><input name='size[]' type='checkbox' value='105G' checked>105G</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='105G'>105G</nobr>";}

if ( $sz[0]=='105H' or $sz[1]=='105H' or $sz[2]=='105H' or $sz[3]=='105H' or $sz[4]=='105H' or $sz[5]=='105H' or $sz[6]=='105H' or $sz[7]=='105H' or $sz[8]=='105H' or  
$sz[9]=='105H' or $sz[10]=='105H' or $sz[11]=='105H' or $sz[12]=='105H' or $sz[13]=='105H' or $sz[14]=='105H' or $sz[15]=='105H' or $sz[16]=='105H' or $sz[17]=='105H'  
or $sz[18]=='105H' or $sz[19]=='105H' or $sz[20]=='105H' or $sz[21]=='105H' or $sz[22]=='105H' or $sz[23]=='105H' or $sz[24]=='105H' or $sz[25]=='105H' or $sz[26] 
=='105H' or $sz[27]=='105H' or $sz[28]=='105H' or $sz[29]=='105H' or $sz[30]=='105H' or $sz[31]=='105H' or $sz[32]=='105H' or $sz[33]=='105H' or $sz[34]=='105H' or  
$sz[35]=='105H' or $sz[36]=='105H' or $sz[37]=='105H' or $sz[38]=='105H' or $sz[39]=='105H' or $sz[40]=='105H' or $sz[41]=='105H' or $sz[42]=='105H' or $sz[43] 
=='105H' or $sz[44]=='105H' or $sz[45]=='105H' or $sz[46]=='105H' or $sz[47]=='105H' or $sz[48]=='105H' or $sz[49]=='105H' or $sz[50]=='105H' or $sz[51]=='105H' or  
$sz[52]=='105H' or $sz[53]=='105H' or $sz[54]=='105H' or $sz[55]=='105H' or $sz[56]=='105H' or $sz[57]=='105H' or $sz[58]=='105H' or $sz[59]=='105H'  or $sz[60] 
=='105H' or $sz[61]=='105H' or $sz[62]=='105H' or $sz[63]=='105H' or $sz[64]=='105H' or $sz[65]=='105H' or $sz[66]=='105H' or $sz[67]=='105H' or $sz[68]=='105H' or  
$sz[69]=='105H' or $sz[70]=='105H' or $sz[71]=='105H' or $sz[72]=='105H' or $sz[73]=='105H' or $sz[74]=='105H' or $sz[75]=='105H' or $sz[76]=='105H' or $sz[77] 
=='105H' or $sz[78]=='105H' or $sz[79]=='105H' or $sz[80]=='105H')
{echo "<nobr><input name='size[]' type='checkbox' value='105H' checked>105H</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='105H'>105H</nobr>";}


if ( $sz[0]=='105I' or $sz[1]=='105I' or $sz[2]=='105I' or $sz[3]=='105I' or $sz[4]=='105I' or $sz[5]=='105I' or $sz[6]=='105I' or $sz[7]=='105I' or $sz[8]=='105I' or  
$sz[9]=='105I' or $sz[10]=='105I' or $sz[11]=='105I' or $sz[12]=='105I' or $sz[13]=='105I' or $sz[14]=='105I' or $sz[15]=='105I' or $sz[16]=='105I' or $sz[17]=='105I'  
or $sz[18]=='105I' or $sz[19]=='105I' or $sz[20]=='105I' or $sz[21]=='105I' or $sz[22]=='105I' or $sz[23]=='105I' or $sz[24]=='105I' or $sz[25]=='105I' or $sz[26] 
=='105I' or $sz[27]=='105I' or $sz[28]=='105I' or $sz[29]=='105I' or $sz[30]=='105I' or $sz[31]=='105I' or $sz[32]=='105I' or $sz[33]=='105I' or $sz[34]=='105I' or  
$sz[35]=='105I' or $sz[36]=='105I' or $sz[37]=='105I' or $sz[38]=='105I' or $sz[39]=='105I' or $sz[40]=='105I' or $sz[41]=='105I' or $sz[42]=='105I' or $sz[43] 
=='105I' or $sz[44]=='105I' or $sz[45]=='105I' or $sz[46]=='105I' or $sz[47]=='105I' or $sz[48]=='105I' or $sz[49]=='105I' or $sz[50]=='105I' or $sz[51]=='105I' or  
$sz[52]=='105I' or $sz[53]=='105I' or $sz[54]=='105I' or $sz[55]=='105I' or $sz[56]=='105I' or $sz[57]=='105I' or $sz[58]=='105I' or $sz[59]=='105I'  or $sz[60] 
=='105I' or $sz[61]=='105I' or $sz[62]=='105I' or $sz[63]=='105I' or $sz[64]=='105I' or $sz[65]=='105I' or $sz[66]=='105I' or $sz[67]=='105I' or $sz[68]=='105I' or  
$sz[69]=='105I' or $sz[70]=='105I' or $sz[71]=='105I' or $sz[72]=='105I' or $sz[73]=='105I' or $sz[74]=='105I' or $sz[75]=='105I' or $sz[76]=='105I' or $sz[77] 
=='105I' or $sz[78]=='105I' or $sz[79]=='105I' or $sz[80]=='105I')
{echo "<nobr><input name='size[]' type='checkbox' value='105I' checked>105I</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='105I'>105I</nobr>";}



if ( $sz[0]=='105J' or $sz[1]=='105J' or $sz[2]=='105J' or $sz[3]=='105J' or $sz[4]=='105J' or $sz[5]=='105J' or $sz[6]=='105J' or $sz[7]=='105J' or $sz[8]=='105J' or  
$sz[9]=='105J' or $sz[10]=='105J' or $sz[11]=='105J' or $sz[12]=='105J' or $sz[13]=='105J' or $sz[14]=='105J' or $sz[15]=='105J' or $sz[16]=='105J' or $sz[17]=='105J'  
or $sz[18]=='105J' or $sz[19]=='105J' or $sz[20]=='105J' or $sz[21]=='105J' or $sz[22]=='105J' or $sz[23]=='105J' or $sz[24]=='105J' or $sz[25]=='105J' or $sz[26] 
=='105J' or $sz[27]=='105J' or $sz[28]=='105J' or $sz[29]=='105J' or $sz[30]=='105J' or $sz[31]=='105J' or $sz[32]=='105J' or $sz[33]=='105J' or $sz[34]=='105J' or  
$sz[35]=='105J' or $sz[36]=='105J' or $sz[37]=='105J' or $sz[38]=='105J' or $sz[39]=='105J' or $sz[40]=='105J' or $sz[41]=='105J' or $sz[42]=='105J' or $sz[43] 
=='105J' or $sz[44]=='105J' or $sz[45]=='105J' or $sz[46]=='105J' or $sz[47]=='105J' or $sz[48]=='105J' or $sz[49]=='105J' or $sz[50]=='105J' or $sz[51]=='105J' or  
$sz[52]=='105J' or $sz[53]=='105J' or $sz[54]=='105J' or $sz[55]=='105J' or $sz[56]=='105J' or $sz[57]=='105J' or $sz[58]=='105J' or $sz[59]=='105J'  or $sz[60] 
=='105J' or $sz[61]=='105J' or $sz[62]=='105J' or $sz[63]=='105J' or $sz[64]=='105J' or $sz[65]=='105J' or $sz[66]=='105J' or $sz[67]=='105J' or $sz[68]=='105J' or  
$sz[69]=='105J' or $sz[70]=='105J' or $sz[71]=='105J' or $sz[72]=='105J' or $sz[73]=='105J' or $sz[74]=='105J' or $sz[75]=='105J' or $sz[76]=='105J' or $sz[77] 
=='105J' or $sz[78]=='105J' or $sz[79]=='105J' or $sz[80]=='105J')
{echo "<nobr><input name='size[]' type='checkbox' value='105J' checked>105J</nobr><br>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='105J'>105J</nobr><br>";}

if ( $sz[0]=='110B' or $sz[1]=='110B' or $sz[2]=='110B' or $sz[3]=='110B' or $sz[4]=='110B' or $sz[5]=='110B' or $sz[6]=='110B' or $sz[7]=='110B' or $sz[8] 
=='110B' or $sz[9]=='110B' or $sz[10]=='110B' or $sz[11]=='110B' or $sz[12]=='110B' or $sz[13]=='110B' or $sz[14]=='110B' or $sz[15]=='110B' or $sz[16] 
=='110B' or $sz[17]=='110B' or $sz[18]=='110B' or $sz[19]=='110B' or $sz[20]=='110B' or $sz[21]=='110B' or $sz[22]=='110B' or $sz[23]=='110B' or $sz[24] 
=='110B' or $sz[25]=='110B' or $sz[26]=='110B' or $sz[27]=='110B' or $sz[28]=='110B' or $sz[29]=='110B' or $sz[30]=='110B' or $sz[31]=='110B' or $sz[32] 
=='110B' or $sz[33]=='110B' or $sz[34]=='110B' or $sz[35]=='110B' or $sz[36]=='110B' or $sz[37]=='110B' or $sz[38]=='110B' or $sz[39]=='110B' or $sz[40] 
=='110B' or $sz[41]=='110B' or $sz[42]=='110B' or $sz[43]=='110B' or $sz[44]=='110B' or $sz[45]=='110B' or $sz[46]=='110B' or $sz[47]=='110B' or $sz[48] 
=='110B' or $sz[49]=='110B' or $sz[50]=='110B' or $sz[51]=='110B' or $sz[52]=='110B' or $sz[53]=='110B' or $sz[54]=='110B' or $sz[55]=='110B' or $sz[56] 
=='110B' or $sz[57]=='110B' or $sz[58]=='110B' or $sz[59]=='110B'  or $sz[60]=='110B' or $sz[61]=='110B' or $sz[62]=='110B' or $sz[63]=='110B' or $sz[64] 
=='110B' or $sz[65]=='110B' or $sz[66]=='110B' or $sz[67]=='110B' or $sz[68]=='110B' or $sz[69]=='110B' or $sz[70]=='110B' or $sz[71]=='110B' or $sz[72] 
=='110B' or $sz[73]=='110B' or $sz[74]=='110B' or $sz[75]=='110B' or $sz[76]=='110B' or $sz[77]=='110B' or $sz[78]=='110B' or $sz[79]=='110B' or $sz[80] 
=='110B')
{echo "<nobr><input name='size[]' type='checkbox' value='110B' checked>110B</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='110B'>110B</nobr>";}


if ( $sz[0]=='110C' or $sz[1]=='110C' or $sz[2]=='110C' or $sz[3]=='110C' or $sz[4]=='110C' or $sz[5]=='110C' or $sz[6]=='110C' or $sz[7]=='110C' or $sz[8]=='110C' or $sz[9]=='110C' or $sz[10]=='110C' or $sz[11]=='110C' or $sz[12]=='110C' or $sz[13]=='110C' or $sz[14]=='110C' or $sz[15]=='110C' or $sz[16]=='110C' or $sz[17]=='110C' or $sz[18]=='110C' or $sz[19]=='110C' or $sz[20]=='110C' or $sz[21]=='110C' or $sz[22]=='110C' or $sz[23]=='110C' or $sz[24]=='110C' or $sz[25]=='110C' or $sz[26]=='110C' or $sz[27]=='110C' or $sz[28]=='110C' or $sz[29]=='110C' or $sz[30]=='110C' or $sz[31]=='110C' or $sz[32]=='110C' or $sz[33]=='110C' or $sz[34]=='110C' or $sz[35]=='110C' or $sz[36]=='110C' or $sz[37]=='110C' or $sz[38]=='110C' or $sz[39]=='110C' or $sz[40]=='110C' or $sz[41]=='110C' or $sz[42]=='110C' or $sz[43]=='110C' or $sz[44]=='110C' or $sz[45]=='110C' or $sz[46]=='110C' or $sz[47]=='110C' or $sz[48]=='110C' or $sz[49]=='110C' or $sz[50]=='110C' or $sz[51]=='110C' or $sz[52]=='110C' or $sz[53]=='110C' or $sz[54]=='110C' or $sz[55]=='110C' or $sz[56]=='110C' or $sz[57]=='110C' or $sz[58]=='110C' or $sz[59]=='110C'  or $sz[60]=='110C' or $sz[61]=='110C' or $sz[62]=='110C' or $sz[63]=='110C' or $sz[64]=='110C' or $sz[65]=='110C' or $sz[66]=='110C' or $sz[67]=='110C' or $sz[68]=='110C' or $sz[69]=='110C' or $sz[70]=='110C' or $sz[71]=='110C' or $sz[72]=='110C' or $sz[73]=='110C' or $sz[74]=='110C' or $sz[75]=='110C' or $sz[76]=='110C' or $sz[77]=='110C' or $sz[78]=='110C' or $sz[79]=='110C' or $sz[80]=='110C')
{echo "<nobr><input name='size[]' type='checkbox' value='110C' checked>110C</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='110C'>110C</nobr>";}

if ( $sz[0]=='110D' or $sz[1]=='110D' or $sz[2]=='110D' or $sz[3]=='110D' or $sz[4]=='110D' or $sz[5]=='110D' or $sz[6]=='110D' or $sz[7]=='110D' or $sz[8]=='110D' or $sz[9]=='110D' or $sz[10]=='110D' or $sz[11]=='110D' or $sz[12]=='110D' or $sz[13]=='110D' or $sz[14]=='110D' or $sz[15]=='110D' or $sz[16]=='110D' or $sz[17]=='110D' or $sz[18]=='110D' or $sz[19]=='110D' or $sz[20]=='110D' or $sz[21]=='110D' or $sz[22]=='110D' or $sz[23]=='110D' or $sz[24]=='110D' or $sz[25]=='110D' or $sz[26]=='110D' or $sz[27]=='110D' or $sz[28]=='110D' or $sz[29]=='110D' or $sz[30]=='110D' or $sz[31]=='110D' or $sz[32]=='110D' or $sz[33]=='110D' or $sz[34]=='110D' or $sz[35]=='110D' or $sz[36]=='110D' or $sz[37]=='110D' or $sz[38]=='110D' or $sz[39]=='110D' or $sz[40]=='110D' or $sz[41]=='110D' or $sz[42]=='110D' or $sz[43]=='110D' or $sz[44]=='110D' or $sz[45]=='110D' or $sz[46]=='110D' or $sz[47]=='110D' or $sz[48]=='110D' or $sz[49]=='110D' or $sz[50]=='110D' or $sz[51]=='110D' or $sz[52]=='110D' or $sz[53]=='110D' or $sz[54]=='110D' or $sz[55]=='110D' or $sz[56]=='110D' or $sz[57]=='110D' or $sz[58]=='110D' or $sz[59]=='110D'  or $sz[60]=='110D' or $sz[61]=='110D' or $sz[62]=='110D' or $sz[63]=='110D' or $sz[64]=='110D' or $sz[65]=='110D' or $sz[66]=='110D' or $sz[67]=='110D' or $sz[68]=='110D' or $sz[69]=='110D' or $sz[70]=='110D' or $sz[71]=='110D' or $sz[72]=='110D' or $sz[73]=='110D' or $sz[74]=='110D' or $sz[75]=='110D' or $sz[76]=='110D' or $sz[77]=='110D' or $sz[78]=='110D' or $sz[79]=='110D' or $sz[80]=='110D')
{echo "<nobr><input name='size[]' type='checkbox' value='110D' checked>110D</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='110D'>110D</nobr>";}

if ( $sz[0]=='110E' or $sz[1]=='110E' or $sz[2]=='110E' or $sz[3]=='110E' or $sz[4]=='110E' or $sz[5]=='110E' or $sz[6]=='110E' or $sz[7]=='110E' or $sz[8]=='110E' or  
$sz[9]=='110E' or $sz[10]=='110E' or $sz[11]=='110E' or $sz[12]=='110E' or $sz[13]=='110E' or $sz[14]=='110E' or $sz[15]=='110E' or $sz[16]=='110E' or $sz[17]=='110E'  
or $sz[18]=='110E' or $sz[19]=='110E' or $sz[20]=='110E' or $sz[21]=='110E' or $sz[22]=='110E' or $sz[23]=='110E' or $sz[24]=='110E' or $sz[25]=='110E' or $sz[26] 
=='110E' or $sz[27]=='110E' or $sz[28]=='110E' or $sz[29]=='110E' or $sz[30]=='110E' or $sz[31]=='110E' or $sz[32]=='110E' or $sz[33]=='110E' or $sz[34]=='110E' or  
$sz[35]=='110E' or $sz[36]=='110E' or $sz[37]=='110E' or $sz[38]=='110E' or $sz[39]=='110E' or $sz[40]=='110E' or $sz[41]=='110E' or $sz[42]=='110E' or $sz[43] 
=='110E' or $sz[44]=='110E' or $sz[45]=='110E' or $sz[46]=='110E' or $sz[47]=='110E' or $sz[48]=='110E' or $sz[49]=='110E' or $sz[50]=='110E' or $sz[51]=='110E' or  
$sz[52]=='110E' or $sz[53]=='110E' or $sz[54]=='110E' or $sz[55]=='110E' or $sz[56]=='110E' or $sz[57]=='110E' or $sz[58]=='110E' or $sz[59]=='110E'  or $sz[60] 
=='110E' or $sz[61]=='110E' or $sz[62]=='110E' or $sz[63]=='110E' or $sz[64]=='110E' or $sz[65]=='110E' or $sz[66]=='110E' or $sz[67]=='110E' or $sz[68]=='110E' or  
$sz[69]=='110E' or $sz[70]=='110E' or $sz[71]=='110E' or $sz[72]=='110E' or $sz[73]=='110E' or $sz[74]=='110E' or $sz[75]=='110E' or $sz[76]=='110E' or $sz[77] 
=='110E' or $sz[78]=='110E' or $sz[79]=='110E' or $sz[80]=='110E')
{echo "<nobr><input name='size[]' type='checkbox' value='110E' checked>110E</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='110E'>110E</nobr>";}

if ( $sz[0]=='110F' or $sz[1]=='110F' or $sz[2]=='110F' or $sz[3]=='110F' or $sz[4]=='110F' or $sz[5]=='110F' or $sz[6]=='110F' or $sz[7]=='110F' or $sz[8]=='110F' or  
$sz[9]=='110F' or $sz[10]=='110F' or $sz[11]=='110F' or $sz[12]=='110F' or $sz[13]=='110F' or $sz[14]=='110F' or $sz[15]=='110F' or $sz[16]=='110F' or $sz[17]=='110F'  
or $sz[18]=='110F' or $sz[19]=='110F' or $sz[20]=='110F' or $sz[21]=='110F' or $sz[22]=='110F' or $sz[23]=='110F' or $sz[24]=='110F' or $sz[25]=='110F' or $sz[26] 
=='110F' or $sz[27]=='110F' or $sz[28]=='110F' or $sz[29]=='110F' or $sz[30]=='110F' or $sz[31]=='110F' or $sz[32]=='110F' or $sz[33]=='110F' or $sz[34]=='110F' or  
$sz[35]=='110F' or $sz[36]=='110F' or $sz[37]=='110F' or $sz[38]=='110F' or $sz[39]=='110F' or $sz[40]=='110F' or $sz[41]=='110F' or $sz[42]=='110F' or $sz[43] 
=='110F' or $sz[44]=='110F' or $sz[45]=='110F' or $sz[46]=='110F' or $sz[47]=='110F' or $sz[48]=='110F' or $sz[49]=='110F' or $sz[50]=='110F' or $sz[51]=='110F' or  
$sz[52]=='110F' or $sz[53]=='110F' or $sz[54]=='110F' or $sz[55]=='110F' or $sz[56]=='110F' or $sz[57]=='110F' or $sz[58]=='110F' or $sz[59]=='110F'  or $sz[60] 
=='110F' or $sz[61]=='110F' or $sz[62]=='110F' or $sz[63]=='110F' or $sz[64]=='110F' or $sz[65]=='110F' or $sz[66]=='110F' or $sz[67]=='110F' or $sz[68]=='110F' or  
$sz[69]=='110F' or $sz[70]=='110F' or $sz[71]=='110F' or $sz[72]=='110F' or $sz[73]=='110F' or $sz[74]=='110F' or $sz[75]=='110F' or $sz[76]=='110F' or $sz[77] 
=='110F' or $sz[78]=='110F' or $sz[79]=='110F' or $sz[80]=='110F')
{echo "<nobr><input name='size[]' type='checkbox' value='110F' checked>110F</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='110F'>110F</nobr>";}


if ( $sz[0]=='110G' or $sz[1]=='110G' or $sz[2]=='110G' or $sz[3]=='110G' or $sz[4]=='110G' or $sz[5]=='110G' or $sz[6]=='110G' or $sz[7]=='110G' or $sz[8]=='110G' or  
$sz[9]=='110G' or $sz[10]=='110G' or $sz[11]=='110G' or $sz[12]=='110G' or $sz[13]=='110G' or $sz[14]=='110G' or $sz[15]=='110G' or $sz[16]=='110G' or $sz[17]=='110G'  
or $sz[18]=='110G' or $sz[19]=='110G' or $sz[20]=='110G' or $sz[21]=='110G' or $sz[22]=='110G' or $sz[23]=='110G' or $sz[24]=='110G' or $sz[25]=='110G' or $sz[26] 
=='110G' or $sz[27]=='110G' or $sz[28]=='110G' or $sz[29]=='110G' or $sz[30]=='110G' or $sz[31]=='110G' or $sz[32]=='110G' or $sz[33]=='110G' or $sz[34]=='110G' or  
$sz[35]=='110G' or $sz[36]=='110G' or $sz[37]=='110G' or $sz[38]=='110G' or $sz[39]=='110G' or $sz[40]=='110G' or $sz[41]=='110G' or $sz[42]=='110G' or $sz[43] 
=='110G' or $sz[44]=='110G' or $sz[45]=='110G' or $sz[46]=='110G' or $sz[47]=='110G' or $sz[48]=='110G' or $sz[49]=='110G' or $sz[50]=='110G' or $sz[51]=='110G' or  
$sz[52]=='110G' or $sz[53]=='110G' or $sz[54]=='110G' or $sz[55]=='110G' or $sz[56]=='110G' or $sz[57]=='110G' or $sz[58]=='110G' or $sz[59]=='110G'  or $sz[60] 
=='110G' or $sz[61]=='110G' or $sz[62]=='110G' or $sz[63]=='110G' or $sz[64]=='110G' or $sz[65]=='110G' or $sz[66]=='110G' or $sz[67]=='110G' or $sz[68]=='110G' or  
$sz[69]=='110G' or $sz[70]=='110G' or $sz[71]=='110G' or $sz[72]=='110G' or $sz[73]=='110G' or $sz[74]=='110G' or $sz[75]=='110G' or $sz[76]=='110G' or $sz[77] 
=='110G' or $sz[78]=='110G' or $sz[79]=='110G' or $sz[80]=='110G')
{echo "<nobr><input name='size[]' type='checkbox' value='110G' checked>110G</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='110G'>110G</nobr>";}

if ( $sz[0]=='110H' or $sz[1]=='110H' or $sz[2]=='110H' or $sz[3]=='110H' or $sz[4]=='110H' or $sz[5]=='110H' or $sz[6]=='110H' or $sz[7]=='110H' or $sz[8]=='110H' or  
$sz[9]=='110H' or $sz[10]=='110H' or $sz[11]=='110H' or $sz[12]=='110H' or $sz[13]=='110H' or $sz[14]=='110H' or $sz[15]=='110H' or $sz[16]=='110H' or $sz[17]=='110H'  
or $sz[18]=='110H' or $sz[19]=='110H' or $sz[20]=='110H' or $sz[21]=='110H' or $sz[22]=='110H' or $sz[23]=='110H' or $sz[24]=='110H' or $sz[25]=='110H' or $sz[26] 
=='110H' or $sz[27]=='110H' or $sz[28]=='110H' or $sz[29]=='110H' or $sz[30]=='110H' or $sz[31]=='110H' or $sz[32]=='110H' or $sz[33]=='110H' or $sz[34]=='110H' or  
$sz[35]=='110H' or $sz[36]=='110H' or $sz[37]=='110H' or $sz[38]=='110H' or $sz[39]=='110H' or $sz[40]=='110H' or $sz[41]=='110H' or $sz[42]=='110H' or $sz[43] 
=='110H' or $sz[44]=='110H' or $sz[45]=='110H' or $sz[46]=='110H' or $sz[47]=='110H' or $sz[48]=='110H' or $sz[49]=='110H' or $sz[50]=='110H' or $sz[51]=='110H' or  
$sz[52]=='110H' or $sz[53]=='110H' or $sz[54]=='110H' or $sz[55]=='110H' or $sz[56]=='110H' or $sz[57]=='110H' or $sz[58]=='110H' or $sz[59]=='110H'  or $sz[60] 
=='110H' or $sz[61]=='110H' or $sz[62]=='110H' or $sz[63]=='110H' or $sz[64]=='110H' or $sz[65]=='110H' or $sz[66]=='110H' or $sz[67]=='110H' or $sz[68]=='110H' or  
$sz[69]=='110H' or $sz[70]=='110H' or $sz[71]=='110H' or $sz[72]=='110H' or $sz[73]=='110H' or $sz[74]=='110H' or $sz[75]=='110H' or $sz[76]=='110H' or $sz[77] 
=='110H' or $sz[78]=='110H' or $sz[79]=='110H' or $sz[80]=='110H')
{echo "<nobr><input name='size[]' type='checkbox' value='110H' checked>110H</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='110H'>110H</nobr>";}


if ( $sz[0]=='110I' or $sz[1]=='110I' or $sz[2]=='110I' or $sz[3]=='110I' or $sz[4]=='110I' or $sz[5]=='110I' or $sz[6]=='110I' or $sz[7]=='110I' or $sz[8]=='110I' or  
$sz[9]=='110I' or $sz[10]=='110I' or $sz[11]=='110I' or $sz[12]=='110I' or $sz[13]=='110I' or $sz[14]=='110I' or $sz[15]=='110I' or $sz[16]=='110I' or $sz[17]=='110I'  
or $sz[18]=='110I' or $sz[19]=='110I' or $sz[20]=='110I' or $sz[21]=='110I' or $sz[22]=='110I' or $sz[23]=='110I' or $sz[24]=='110I' or $sz[25]=='110I' or $sz[26] 
=='110I' or $sz[27]=='110I' or $sz[28]=='110I' or $sz[29]=='110I' or $sz[30]=='110I' or $sz[31]=='110I' or $sz[32]=='110I' or $sz[33]=='110I' or $sz[34]=='110I' or  
$sz[35]=='110I' or $sz[36]=='110I' or $sz[37]=='110I' or $sz[38]=='110I' or $sz[39]=='110I' or $sz[40]=='110I' or $sz[41]=='110I' or $sz[42]=='110I' or $sz[43] 
=='110I' or $sz[44]=='110I' or $sz[45]=='110I' or $sz[46]=='110I' or $sz[47]=='110I' or $sz[48]=='110I' or $sz[49]=='110I' or $sz[50]=='110I' or $sz[51]=='110I' or  
$sz[52]=='110I' or $sz[53]=='110I' or $sz[54]=='110I' or $sz[55]=='110I' or $sz[56]=='110I' or $sz[57]=='110I' or $sz[58]=='110I' or $sz[59]=='110I'  or $sz[60] 
=='110I' or $sz[61]=='110I' or $sz[62]=='110I' or $sz[63]=='110I' or $sz[64]=='110I' or $sz[65]=='110I' or $sz[66]=='110I' or $sz[67]=='110I' or $sz[68]=='110I' or  
$sz[69]=='110I' or $sz[70]=='110I' or $sz[71]=='110I' or $sz[72]=='110I' or $sz[73]=='110I' or $sz[74]=='110I' or $sz[75]=='110I' or $sz[76]=='110I' or $sz[77] 
=='110I' or $sz[78]=='110I' or $sz[79]=='110I' or $sz[80]=='110I')
{echo "<nobr><input name='size[]' type='checkbox' value='110I' checked>110I</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='110I'>110I</nobr>";}



if ( $sz[0]=='110J' or $sz[1]=='110J' or $sz[2]=='110J' or $sz[3]=='110J' or $sz[4]=='110J' or $sz[5]=='110J' or $sz[6]=='110J' or $sz[7]=='110J' or $sz[8]=='110J' or  
$sz[9]=='110J' or $sz[10]=='110J' or $sz[11]=='110J' or $sz[12]=='110J' or $sz[13]=='110J' or $sz[14]=='110J' or $sz[15]=='110J' or $sz[16]=='110J' or $sz[17]=='110J'  
or $sz[18]=='110J' or $sz[19]=='110J' or $sz[20]=='110J' or $sz[21]=='110J' or $sz[22]=='110J' or $sz[23]=='110J' or $sz[24]=='110J' or $sz[25]=='110J' or $sz[26] 
=='110J' or $sz[27]=='110J' or $sz[28]=='110J' or $sz[29]=='110J' or $sz[30]=='110J' or $sz[31]=='110J' or $sz[32]=='110J' or $sz[33]=='110J' or $sz[34]=='110J' or  
$sz[35]=='110J' or $sz[36]=='110J' or $sz[37]=='110J' or $sz[38]=='110J' or $sz[39]=='110J' or $sz[40]=='110J' or $sz[41]=='110J' or $sz[42]=='110J' or $sz[43] 
=='110J' or $sz[44]=='110J' or $sz[45]=='110J' or $sz[46]=='110J' or $sz[47]=='110J' or $sz[48]=='110J' or $sz[49]=='110J' or $sz[50]=='110J' or $sz[51]=='110J' or  
$sz[52]=='110J' or $sz[53]=='110J' or $sz[54]=='110J' or $sz[55]=='110J' or $sz[56]=='110J' or $sz[57]=='110J' or $sz[58]=='110J' or $sz[59]=='110J'  or $sz[60] 
=='110J' or $sz[61]=='110J' or $sz[62]=='110J' or $sz[63]=='110J' or $sz[64]=='110J' or $sz[65]=='110J' or $sz[66]=='110J' or $sz[67]=='110J' or $sz[68]=='110J' or  
$sz[69]=='110J' or $sz[70]=='110J' or $sz[71]=='110J' or $sz[72]=='110J' or $sz[73]=='110J' or $sz[74]=='110J' or $sz[75]=='110J' or $sz[76]=='110J' or $sz[77] 
=='110J' or $sz[78]=='110J' or $sz[79]=='110J' or $sz[80]=='110J')
{echo "<nobr><input name='size[]' type='checkbox' value='110J' checked>110J</nobr><br>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='110J'>110J</nobr><br>";}

if ( $sz[0]=='115B' or $sz[1]=='115B' or $sz[2]=='115B' or $sz[3]=='115B' or $sz[4]=='115B' or $sz[5]=='115B' or $sz[6]=='115B' or $sz[7]=='115B' or $sz[8] 
=='115B' or $sz[9]=='115B' or $sz[10]=='115B' or $sz[11]=='115B' or $sz[12]=='115B' or $sz[13]=='115B' or $sz[14]=='115B' or $sz[15]=='115B' or $sz[16] 
=='115B' or $sz[17]=='115B' or $sz[18]=='115B' or $sz[19]=='115B' or $sz[20]=='115B' or $sz[21]=='115B' or $sz[22]=='115B' or $sz[23]=='115B' or $sz[24] 
=='115B' or $sz[25]=='115B' or $sz[26]=='115B' or $sz[27]=='115B' or $sz[28]=='115B' or $sz[29]=='115B' or $sz[30]=='115B' or $sz[31]=='115B' or $sz[32] 
=='115B' or $sz[33]=='115B' or $sz[34]=='115B' or $sz[35]=='115B' or $sz[36]=='115B' or $sz[37]=='115B' or $sz[38]=='115B' or $sz[39]=='115B' or $sz[40] 
=='115B' or $sz[41]=='115B' or $sz[42]=='115B' or $sz[43]=='115B' or $sz[44]=='115B' or $sz[45]=='115B' or $sz[46]=='115B' or $sz[47]=='115B' or $sz[48] 
=='115B' or $sz[49]=='115B' or $sz[50]=='115B' or $sz[51]=='115B' or $sz[52]=='115B' or $sz[53]=='115B' or $sz[54]=='115B' or $sz[55]=='115B' or $sz[56] 
=='115B' or $sz[57]=='115B' or $sz[58]=='115B' or $sz[59]=='115B'  or $sz[60]=='115B' or $sz[61]=='115B' or $sz[62]=='115B' or $sz[63]=='115B' or $sz[64] 
=='115B' or $sz[65]=='115B' or $sz[66]=='115B' or $sz[67]=='115B' or $sz[68]=='115B' or $sz[69]=='115B' or $sz[70]=='115B' or $sz[71]=='115B' or $sz[72] 
=='115B' or $sz[73]=='115B' or $sz[74]=='115B' or $sz[75]=='115B' or $sz[76]=='115B' or $sz[77]=='115B' or $sz[78]=='115B' or $sz[79]=='115B' or $sz[80] 
=='115B')
{echo "<nobr><input name='size[]' type='checkbox' value='115B' checked>115B</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='115B'>115B</nobr>";}


if ( $sz[0]=='115C' or $sz[1]=='115C' or $sz[2]=='115C' or $sz[3]=='115C' or $sz[4]=='115C' or $sz[5]=='115C' or $sz[6]=='115C' or $sz[7]=='115C' or $sz[8] 
=='115C' or $sz[9]=='115C' or $sz[10]=='115C' or $sz[11]=='115C' or $sz[12]=='115C' or $sz[13]=='115C' or $sz[14]=='115C' or $sz[15]=='115C' or $sz[16] 
=='115C' or $sz[17]=='115C' or $sz[18]=='115C' or $sz[19]=='115C' or $sz[20]=='115C' or $sz[21]=='115C' or $sz[22]=='115C' or $sz[23]=='115C' or $sz[24] 
=='115C' or $sz[25]=='115C' or $sz[26]=='115C' or $sz[27]=='115C' or $sz[28]=='115C' or $sz[29]=='115C' or $sz[30]=='115C' or $sz[31]=='115C' or $sz[32] 
=='115C' or $sz[33]=='115C' or $sz[34]=='115C' or $sz[35]=='115C' or $sz[36]=='115C' or $sz[37]=='115C' or $sz[38]=='115C' or $sz[39]=='115C' or $sz[40] 
=='115C' or $sz[41]=='115C' or $sz[42]=='115C' or $sz[43]=='115C' or $sz[44]=='115C' or $sz[45]=='115C' or $sz[46]=='115C' or $sz[47]=='115C' or $sz[48] 
=='115C' or $sz[49]=='115C' or $sz[50]=='115C' or $sz[51]=='115C' or $sz[52]=='115C' or $sz[53]=='115C' or $sz[54]=='115C' or $sz[55]=='115C' or $sz[56] 
=='115C' or $sz[57]=='115C' or $sz[58]=='115C' or $sz[59]=='115C'  or $sz[60]=='115C' or $sz[61]=='115C' or $sz[62]=='115C' or $sz[63]=='115C' or $sz[64] 
=='115C' or $sz[65]=='115C' or $sz[66]=='115C' or $sz[67]=='115C' or $sz[68]=='115C' or $sz[69]=='115C' or $sz[70]=='115C' or $sz[71]=='115C' or $sz[72] 
=='115C' or $sz[73]=='115C' or $sz[74]=='115C' or $sz[75]=='115C' or $sz[76]=='115C' or $sz[77]=='115C' or $sz[78]=='115C' or $sz[79]=='115C' or $sz[80] 
=='115C')
{echo "<nobr><input name='size[]' type='checkbox' value='115C' checked>115C</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='115C'>115C</nobr>";}

if ( $sz[0]=='115D' or $sz[1]=='115D' or $sz[2]=='115D' or $sz[3]=='115D' or $sz[4]=='115D' or $sz[5]=='115D' or $sz[6]=='115D' or $sz[7]=='115D' or $sz[8] 
=='115D' or $sz[9]=='115D' or $sz[10]=='115D' or $sz[11]=='115D' or $sz[12]=='115D' or $sz[13]=='115D' or $sz[14]=='115D' or $sz[15]=='115D' or $sz[16] 
=='115D' or $sz[17]=='115D' or $sz[18]=='115D' or $sz[19]=='115D' or $sz[20]=='115D' or $sz[21]=='115D' or $sz[22]=='115D' or $sz[23]=='115D' or $sz[24] 
=='115D' or $sz[25]=='115D' or $sz[26]=='115D' or $sz[27]=='115D' or $sz[28]=='115D' or $sz[29]=='115D' or $sz[30]=='115D' or $sz[31]=='115D' or $sz[32] 
=='115D' or $sz[33]=='115D' or $sz[34]=='115D' or $sz[35]=='115D' or $sz[36]=='115D' or $sz[37]=='115D' or $sz[38]=='115D' or $sz[39]=='115D' or $sz[40] 
=='115D' or $sz[41]=='115D' or $sz[42]=='115D' or $sz[43]=='115D' or $sz[44]=='115D' or $sz[45]=='115D' or $sz[46]=='115D' or $sz[47]=='115D' or $sz[48] 
=='115D' or $sz[49]=='115D' or $sz[50]=='115D' or $sz[51]=='115D' or $sz[52]=='115D' or $sz[53]=='115D' or $sz[54]=='115D' or $sz[55]=='115D' or $sz[56] 
=='115D' or $sz[57]=='115D' or $sz[58]=='115D' or $sz[59]=='115D'  or $sz[60]=='115D' or $sz[61]=='115D' or $sz[62]=='115D' or $sz[63]=='115D' or $sz[64] 
=='115D' or $sz[65]=='115D' or $sz[66]=='115D' or $sz[67]=='115D' or $sz[68]=='115D' or $sz[69]=='115D' or $sz[70]=='115D' or $sz[71]=='115D' or $sz[72] 
=='115D' or $sz[73]=='115D' or $sz[74]=='115D' or $sz[75]=='115D' or $sz[76]=='115D' or $sz[77]=='115D' or $sz[78]=='115D' or $sz[79]=='115D' or $sz[80] 
=='115D')
{echo "<nobr><input name='size[]' type='checkbox' value='115D' checked>115D</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='115D'>115D</nobr>";}

if ( $sz[0]=='115E' or $sz[1]=='115E' or $sz[2]=='115E' or $sz[3]=='115E' or $sz[4]=='115E' or $sz[5]=='115E' or $sz[6]=='115E' or $sz[7]=='115E' or $sz[8] 
=='115E' or  
$sz[9]=='115E' or $sz[10]=='115E' or $sz[11]=='115E' or $sz[12]=='115E' or $sz[13]=='115E' or $sz[14]=='115E' or $sz[15]=='115E' or $sz[16]=='115E' or $sz 
[17]=='115E'  
or $sz[18]=='115E' or $sz[19]=='115E' or $sz[20]=='115E' or $sz[21]=='115E' or $sz[22]=='115E' or $sz[23]=='115E' or $sz[24]=='115E' or $sz[25]=='115E' or  
$sz[26] 
=='115E' or $sz[27]=='115E' or $sz[28]=='115E' or $sz[29]=='115E' or $sz[30]=='115E' or $sz[31]=='115E' or $sz[32]=='115E' or $sz[33]=='115E' or $sz[34] 
=='115E' or  
$sz[35]=='115E' or $sz[36]=='115E' or $sz[37]=='115E' or $sz[38]=='115E' or $sz[39]=='115E' or $sz[40]=='115E' or $sz[41]=='115E' or $sz[42]=='115E' or $sz 
[43] 
=='115E' or $sz[44]=='115E' or $sz[45]=='115E' or $sz[46]=='115E' or $sz[47]=='115E' or $sz[48]=='115E' or $sz[49]=='115E' or $sz[50]=='115E' or $sz[51] 
=='115E' or  
$sz[52]=='115E' or $sz[53]=='115E' or $sz[54]=='115E' or $sz[55]=='115E' or $sz[56]=='115E' or $sz[57]=='115E' or $sz[58]=='115E' or $sz[59]=='115E'  or $sz 
[60] 
=='115E' or $sz[61]=='115E' or $sz[62]=='115E' or $sz[63]=='115E' or $sz[64]=='115E' or $sz[65]=='115E' or $sz[66]=='115E' or $sz[67]=='115E' or $sz[68] 
=='115E' or  
$sz[69]=='115E' or $sz[70]=='115E' or $sz[71]=='115E' or $sz[72]=='115E' or $sz[73]=='115E' or $sz[74]=='115E' or $sz[75]=='115E' or $sz[76]=='115E' or $sz 
[77] 
=='115E' or $sz[78]=='115E' or $sz[79]=='115E' or $sz[80]=='115E')
{echo "<nobr><input name='size[]' type='checkbox' value='115E' checked>115E</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='115E'>115E</nobr>";}

if ( $sz[0]=='115F' or $sz[1]=='115F' or $sz[2]=='115F' or $sz[3]=='115F' or $sz[4]=='115F' or $sz[5]=='115F' or $sz[6]=='115F' or $sz[7]=='115F' or $sz[8] 
=='115F' or  
$sz[9]=='115F' or $sz[10]=='115F' or $sz[11]=='115F' or $sz[12]=='115F' or $sz[13]=='115F' or $sz[14]=='115F' or $sz[15]=='115F' or $sz[16]=='115F' or $sz 
[17]=='115F'  
or $sz[18]=='115F' or $sz[19]=='115F' or $sz[20]=='115F' or $sz[21]=='115F' or $sz[22]=='115F' or $sz[23]=='115F' or $sz[24]=='115F' or $sz[25]=='115F' or  
$sz[26] 
=='115F' or $sz[27]=='115F' or $sz[28]=='115F' or $sz[29]=='115F' or $sz[30]=='115F' or $sz[31]=='115F' or $sz[32]=='115F' or $sz[33]=='115F' or $sz[34] 
=='115F' or  
$sz[35]=='115F' or $sz[36]=='115F' or $sz[37]=='115F' or $sz[38]=='115F' or $sz[39]=='115F' or $sz[40]=='115F' or $sz[41]=='115F' or $sz[42]=='115F' or $sz 
[43] 
=='115F' or $sz[44]=='115F' or $sz[45]=='115F' or $sz[46]=='115F' or $sz[47]=='115F' or $sz[48]=='115F' or $sz[49]=='115F' or $sz[50]=='115F' or $sz[51] 
=='115F' or  
$sz[52]=='115F' or $sz[53]=='115F' or $sz[54]=='115F' or $sz[55]=='115F' or $sz[56]=='115F' or $sz[57]=='115F' or $sz[58]=='115F' or $sz[59]=='115F'  or $sz 
[60] 
=='115F' or $sz[61]=='115F' or $sz[62]=='115F' or $sz[63]=='115F' or $sz[64]=='115F' or $sz[65]=='115F' or $sz[66]=='115F' or $sz[67]=='115F' or $sz[68] 
=='115F' or  
$sz[69]=='115F' or $sz[70]=='115F' or $sz[71]=='115F' or $sz[72]=='115F' or $sz[73]=='115F' or $sz[74]=='115F' or $sz[75]=='115F' or $sz[76]=='115F' or $sz 
[77] 
=='115F' or $sz[78]=='115F' or $sz[79]=='115F' or $sz[80]=='115F')
{echo "<nobr><input name='size[]' type='checkbox' value='115F' checked>115F</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='115F'>115F</nobr>";}


if ( $sz[0]=='115G' or $sz[1]=='115G' or $sz[2]=='115G' or $sz[3]=='115G' or $sz[4]=='115G' or $sz[5]=='115G' or $sz[6]=='115G' or $sz[7]=='115G' or $sz[8] 
=='115G' or  
$sz[9]=='115G' or $sz[10]=='115G' or $sz[11]=='115G' or $sz[12]=='115G' or $sz[13]=='115G' or $sz[14]=='115G' or $sz[15]=='115G' or $sz[16]=='115G' or $sz 
[17]=='115G'  
or $sz[18]=='115G' or $sz[19]=='115G' or $sz[20]=='115G' or $sz[21]=='115G' or $sz[22]=='115G' or $sz[23]=='115G' or $sz[24]=='115G' or $sz[25]=='115G' or  
$sz[26] 
=='115G' or $sz[27]=='115G' or $sz[28]=='115G' or $sz[29]=='115G' or $sz[30]=='115G' or $sz[31]=='115G' or $sz[32]=='115G' or $sz[33]=='115G' or $sz[34] 
=='115G' or  
$sz[35]=='115G' or $sz[36]=='115G' or $sz[37]=='115G' or $sz[38]=='115G' or $sz[39]=='115G' or $sz[40]=='115G' or $sz[41]=='115G' or $sz[42]=='115G' or $sz 
[43] 
=='115G' or $sz[44]=='115G' or $sz[45]=='115G' or $sz[46]=='115G' or $sz[47]=='115G' or $sz[48]=='115G' or $sz[49]=='115G' or $sz[50]=='115G' or $sz[51] 
=='115G' or  
$sz[52]=='115G' or $sz[53]=='115G' or $sz[54]=='115G' or $sz[55]=='115G' or $sz[56]=='115G' or $sz[57]=='115G' or $sz[58]=='115G' or $sz[59]=='115G'  or $sz 
[60] 
=='115G' or $sz[61]=='115G' or $sz[62]=='115G' or $sz[63]=='115G' or $sz[64]=='115G' or $sz[65]=='115G' or $sz[66]=='115G' or $sz[67]=='115G' or $sz[68] 
=='115G' or  
$sz[69]=='115G' or $sz[70]=='115G' or $sz[71]=='115G' or $sz[72]=='115G' or $sz[73]=='115G' or $sz[74]=='115G' or $sz[75]=='115G' or $sz[76]=='115G' or $sz 
[77] 
=='115G' or $sz[78]=='115G' or $sz[79]=='115G' or $sz[80]=='115G')
{echo "<nobr><input name='size[]' type='checkbox' value='115G' checked>115G</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='115G'>115G</nobr>";}

if ( $sz[0]=='115H' or $sz[1]=='115H' or $sz[2]=='115H' or $sz[3]=='115H' or $sz[4]=='115H' or $sz[5]=='115H' or $sz[6]=='115H' or $sz[7]=='115H' or $sz[8] 
=='115H' or  
$sz[9]=='115H' or $sz[10]=='115H' or $sz[11]=='115H' or $sz[12]=='115H' or $sz[13]=='115H' or $sz[14]=='115H' or $sz[15]=='115H' or $sz[16]=='115H' or $sz 
[17]=='115H'  
or $sz[18]=='115H' or $sz[19]=='115H' or $sz[20]=='115H' or $sz[21]=='115H' or $sz[22]=='115H' or $sz[23]=='115H' or $sz[24]=='115H' or $sz[25]=='115H' or  
$sz[26] 
=='115H' or $sz[27]=='115H' or $sz[28]=='115H' or $sz[29]=='115H' or $sz[30]=='115H' or $sz[31]=='115H' or $sz[32]=='115H' or $sz[33]=='115H' or $sz[34] 
=='115H' or  
$sz[35]=='115H' or $sz[36]=='115H' or $sz[37]=='115H' or $sz[38]=='115H' or $sz[39]=='115H' or $sz[40]=='115H' or $sz[41]=='115H' or $sz[42]=='115H' or $sz 
[43] 
=='115H' or $sz[44]=='115H' or $sz[45]=='115H' or $sz[46]=='115H' or $sz[47]=='115H' or $sz[48]=='115H' or $sz[49]=='115H' or $sz[50]=='115H' or $sz[51] 
=='115H' or  
$sz[52]=='115H' or $sz[53]=='115H' or $sz[54]=='115H' or $sz[55]=='115H' or $sz[56]=='115H' or $sz[57]=='115H' or $sz[58]=='115H' or $sz[59]=='115H'  or $sz 
[60] 
=='115H' or $sz[61]=='115H' or $sz[62]=='115H' or $sz[63]=='115H' or $sz[64]=='115H' or $sz[65]=='115H' or $sz[66]=='115H' or $sz[67]=='115H' or $sz[68] 
=='115H' or  
$sz[69]=='115H' or $sz[70]=='115H' or $sz[71]=='115H' or $sz[72]=='115H' or $sz[73]=='115H' or $sz[74]=='115H' or $sz[75]=='115H' or $sz[76]=='115H' or $sz 
[77] 
=='115H' or $sz[78]=='115H' or $sz[79]=='115H' or $sz[80]=='115H')
{echo "<nobr><input name='size[]' type='checkbox' value='115H' checked>115H</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='115H'>115H</nobr>";}


if ( $sz[0]=='115I' or $sz[1]=='115I' or $sz[2]=='115I' or $sz[3]=='115I' or $sz[4]=='115I' or $sz[5]=='115I' or $sz[6]=='115I' or $sz[7]=='115I' or $sz[8] 
=='115I' or  
$sz[9]=='115I' or $sz[10]=='115I' or $sz[11]=='115I' or $sz[12]=='115I' or $sz[13]=='115I' or $sz[14]=='115I' or $sz[15]=='115I' or $sz[16]=='115I' or $sz 
[17]=='115I'  
or $sz[18]=='115I' or $sz[19]=='115I' or $sz[20]=='115I' or $sz[21]=='115I' or $sz[22]=='115I' or $sz[23]=='115I' or $sz[24]=='115I' or $sz[25]=='115I' or  
$sz[26] 
=='115I' or $sz[27]=='115I' or $sz[28]=='115I' or $sz[29]=='115I' or $sz[30]=='115I' or $sz[31]=='115I' or $sz[32]=='115I' or $sz[33]=='115I' or $sz[34] 
=='115I' or  
$sz[35]=='115I' or $sz[36]=='115I' or $sz[37]=='115I' or $sz[38]=='115I' or $sz[39]=='115I' or $sz[40]=='115I' or $sz[41]=='115I' or $sz[42]=='115I' or $sz 
[43] 
=='115I' or $sz[44]=='115I' or $sz[45]=='115I' or $sz[46]=='115I' or $sz[47]=='115I' or $sz[48]=='115I' or $sz[49]=='115I' or $sz[50]=='115I' or $sz[51] 
=='115I' or  
$sz[52]=='115I' or $sz[53]=='115I' or $sz[54]=='115I' or $sz[55]=='115I' or $sz[56]=='115I' or $sz[57]=='115I' or $sz[58]=='115I' or $sz[59]=='115I'  or $sz 
[60] 
=='115I' or $sz[61]=='115I' or $sz[62]=='115I' or $sz[63]=='115I' or $sz[64]=='115I' or $sz[65]=='115I' or $sz[66]=='115I' or $sz[67]=='115I' or $sz[68] 
=='115I' or  
$sz[69]=='115I' or $sz[70]=='115I' or $sz[71]=='115I' or $sz[72]=='115I' or $sz[73]=='115I' or $sz[74]=='115I' or $sz[75]=='115I' or $sz[76]=='115I' or $sz 
[77] 
=='115I' or $sz[78]=='115I' or $sz[79]=='115I' or $sz[80]=='115I')
{echo "<nobr><input name='size[]' type='checkbox' value='115I' checked>115I</nobr>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='115I'>115I</nobr>";}



if ( $sz[0]=='115J' or $sz[1]=='115J' or $sz[2]=='115J' or $sz[3]=='115J' or $sz[4]=='115J' or $sz[5]=='115J' or $sz[6]=='115J' or $sz[7]=='115J' or $sz[8] 
=='115J' or  
$sz[9]=='115J' or $sz[10]=='115J' or $sz[11]=='115J' or $sz[12]=='115J' or $sz[13]=='115J' or $sz[14]=='115J' or $sz[15]=='115J' or $sz[16]=='115J' or $sz 
[17]=='115J'  
or $sz[18]=='115J' or $sz[19]=='115J' or $sz[20]=='115J' or $sz[21]=='115J' or $sz[22]=='115J' or $sz[23]=='115J' or $sz[24]=='115J' or $sz[25]=='115J' or  
$sz[26] 
=='115J' or $sz[27]=='115J' or $sz[28]=='115J' or $sz[29]=='115J' or $sz[30]=='115J' or $sz[31]=='115J' or $sz[32]=='115J' or $sz[33]=='115J' or $sz[34] 
=='115J' or  
$sz[35]=='115J' or $sz[36]=='115J' or $sz[37]=='115J' or $sz[38]=='115J' or $sz[39]=='115J' or $sz[40]=='115J' or $sz[41]=='115J' or $sz[42]=='115J' or $sz 
[43] 
=='115J' or $sz[44]=='115J' or $sz[45]=='115J' or $sz[46]=='115J' or $sz[47]=='115J' or $sz[48]=='115J' or $sz[49]=='115J' or $sz[50]=='115J' or $sz[51] 
=='115J' or  
$sz[52]=='115J' or $sz[53]=='115J' or $sz[54]=='115J' or $sz[55]=='115J' or $sz[56]=='115J' or $sz[57]=='115J' or $sz[58]=='115J' or $sz[59]=='115J'  or $sz 
[60] 
=='115J' or $sz[61]=='115J' or $sz[62]=='115J' or $sz[63]=='115J' or $sz[64]=='115J' or $sz[65]=='115J' or $sz[66]=='115J' or $sz[67]=='115J' or $sz[68] 
=='115J' or  
$sz[69]=='115J' or $sz[70]=='115J' or $sz[71]=='115J' or $sz[72]=='115J' or $sz[73]=='115J' or $sz[74]=='115J' or $sz[75]=='115J' or $sz[76]=='115J' or $sz 
[77] 
=='115J' or $sz[78]=='115J' or $sz[79]=='115J' or $sz[80]=='115J')
{echo "<nobr><input name='size[]' type='checkbox' value='115J' checked>115J</nobr><br>";}
else
{echo "<nobr><input name='size[]' type='checkbox' value='115J'>115J</nobr><br>";}





?>

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
list($color[0], $color[1], $color[2], $color[3], $color[4],  $color[5], $color[6],  $color[7], $color[8], $color[9], $color[10], $color[11], $color[12], $color[13], $color[14], $color[15], $color[16], $color[17],  $color[18],  $color[19],  $color[20]) = split(',',$myrowk[color]);
$color[0]=trim($color[0]);$color[1]=trim($color[1]);$color[2]=trim($color[2]);$color[3]=trim($color[3]);
$color[4]=trim($color[4]);$color[5]=trim($color[5]);$color[6]=trim($color[6]);$color[7]=trim($color[7]);
$color[8]=trim($color[8]);$color[9]=trim($color[9]);$color[10]=trim($color[10]);$color[11]=trim($color[11]);
$color[12]=trim($color[12]);$color[13]=trim($color[13]);$color[14]=trim($color[14]);$color[15]=trim($color[15]);
$color[16]=trim($color[16]);$color[17]=trim($color[17]);$color[18]=trim($color[18]);$color[19]=trim($color[19]);$color[20]=trim($color[20]);




if ($color[0]=='белый' or $color[1]=='белый' or $color[2]=='белый' or $color[3]=='белый' or $color[4]=='белый' or $color[5]=='белый' or $color[6]=='белый' or $color[7]=='белый' or $color[8]=='белый' or $color[9]=='белый' or $color[10]=='белый' or $color[11]=='белый' or $color[12]=='белый' or $color[13]=='белый' or $color[14]=='белый' or $color[15]=='белый' or $color[16]=='белый' or $color[17]=='белый' or $color[18]=='белый' or $color[19]=='белый')
{echo "<nobr><input name='color[]' type='checkbox' value='белый' checked>белый   </nobr>";}
else 
{echo "<nobr><input name='color[]' type='checkbox' value='белый'>белый   </nobr>";}

if ($color[0]=='черный' or $color[1]=='черный' or $color[2]=='черный' or $color[3]=='черный' or $color[4]=='черный' or $color[5]=='черный' or $color[6]=='черный' or $color[7]=='черный' or $color[8]=='черный' or $color[9]=='черный' or $color[10]=='черный' or $color[11]=='черный' or $color[12]=='черный' or $color[13]=='черный' or $color[14]=='черный' or $color[15]=='черный' or $color[16]=='черный' or $color[17]=='черный' or $color[18]=='черный' or $color[19]=='черный')
{echo "<nobr><input name='color[]' type='checkbox' value='черный' checked>черный   </nobr>";}
else 
{echo "<nobr><input name='color[]' type='checkbox' value='черный'>черный   </nobr>";}

if ($color[0]=='бежевый' or $color[1]=='бежевый' or $color[2]=='бежевый' or $color[3]=='бежевый' or $color[4]=='бежевый' or $color[5]=='бежевый' or $color[6]=='бежевый' or $color[7]=='бежевый' or $color[8]=='бежевый' or $color[9]=='бежевый' or $color[10]=='бежевый' or $color[11]=='бежевый' or $color[12]=='бежевый' or $color[13]=='бежевый' or $color[14]=='бежевый' or $color[15]=='бежевый' or $color[16]=='бежевый' or $color[17]=='бежевый' or $color[18]=='бежевый' or $color[19]=='бежевый')
{echo "<nobr><input name='color[]' type='checkbox' value='бежевый' checked>бежевый   </nobr>";}
else 
{echo "<nobr><input name='color[]' type='checkbox' value='бежевый'>бежевый   </nobr>";}

if ($color[0]=='экри' or $color[1]=='экри' or $color[2]=='экри' or $color[3]=='экри' or $color[4]=='экри' or $color[5]=='экри' or $color[6]=='экри' or $color[7]=='экри' or $color[8]=='экри' or $color[9]=='экри' or $color[10]=='экри' or $color[11]=='экри' or $color[12]=='экри' or $color[13]=='экри' or $color[14]=='экри' or $color[15]=='экри' or $color[16]=='экри' or $color[17]=='экри' or $color[18]=='экри' or $color[19]=='экри')
{echo "<nobr><input name='color[]' type='checkbox' value='экри' checked>экри   </nobr>";}
else 
{echo "<nobr><input name='color[]' type='checkbox' value='экри'>экри   </nobr>";}

if ($color[0]=='красный' or $color[1]=='красный' or $color[2]=='красный' or $color[3]=='красный' or $color[4]=='красный' or $color[5]=='красный' or $color[6]=='красный' or $color[7]=='красный' or $color[8]=='красный' or $color[9]=='красный' or $color[10]=='красный' or $color[11]=='красный' or $color[12]=='красный' or $color[13]=='красный' or $color[14]=='красный' or $color[15]=='красный' or $color[16]=='красный' or $color[17]=='красный' or $color[18]=='красный' or $color[19]=='красный')
{echo "<nobr><input name='color[]' type='checkbox' value='красный' checked>красный   </nobr>";}
else 
{echo "<nobr><input name='color[]' type='checkbox' value='красный'>красный   </nobr>";}

if ($color[0]=='синий' or $color[1]=='синий' or $color[2]=='синий' or $color[3]=='синий' or $color[4]=='синий' or $color[5]=='синий' or $color[6]=='синий' or $color[7]=='синий' or $color[8]=='синий' or $color[9]=='синий' or $color[10]=='синий' or $color[11]=='синий' or $color[12]=='синий' or $color[13]=='синий' or $color[14]=='синий' or $color[15]=='синий' or $color[16]=='синий' or $color[17]=='синий' or $color[18]=='синий' or $color[19]=='синий')
{echo "<nobr><input name='color[]' type='checkbox' value='синий' checked>синий   </nobr>";}
else 
{echo "<nobr><input name='color[]' type='checkbox' value='синий'>синий   </nobr>";}

if ($color[0]=='зеленый' or $color[1]=='зеленый' or $color[2]=='зеленый' or $color[3]=='зеленый' or $color[4]=='зеленый' or $color[5]=='зеленый' or $color[6]=='зеленый' or $color[7]=='зеленый' or $color[8]=='зеленый' or $color[9]=='зеленый' or $color[10]=='зеленый' or $color[11]=='зеленый' or $color[12]=='зеленый' or $color[13]=='зеленый' or $color[14]=='зеленый' or $color[15]=='зеленый' or $color[16]=='зеленый' or $color[17]=='зеленый' or $color[18]=='зеленый' or $color[19]=='зеленый')
{echo "<nobr><input name='color[]' type='checkbox' value='зеленый' checked>зеленый   </nobr>";}
else 
{echo "<nobr><input name='color[]' type='checkbox' value='зеленый'>зеленый   </nobr>";}

if ($color[0]=='оранжевый' or $color[1]=='оранжевый' or $color[2]=='оранжевый' or $color[3]=='оранжевый' or $color[4]=='оранжевый' or $color[5]=='оранжевый' or $color[6]=='оранжевый' or $color[7]=='оранжевый' or $color[8]=='оранжевый' or $color[9]=='оранжевый' or $color[10]=='оранжевый' or $color[11]=='оранжевый' or $color[12]=='оранжевый' or $color[13]=='оранжевый' or $color[14]=='оранжевый' or $color[15]=='оранжевый' or $color[16]=='оранжевый' or $color[17]=='оранжевый' or $color[18]=='оранжевый' or $color[19]=='оранжевый')
{echo "<nobr><input name='color[]' type='checkbox' value='оранжевый' checked>оранжевый   </nobr>";}
else 
{echo "<nobr><input name='color[]' type='checkbox' value='оранжевый'>оранжевый   </nobr>";}

if ($color[0]=='серый' or $color[1]=='серый' or $color[2]=='серый' or $color[3]=='серый' or $color[4]=='серый' or $color[5]=='серый' or $color[6]=='серый' or $color[7]=='серый' or $color[8]=='серый' or $color[9]=='серый' or $color[10]=='серый' or $color[11]=='серый' or $color[12]=='серый' or $color[13]=='серый' or $color[14]=='серый' or $color[15]=='серый' or $color[16]=='серый' or $color[17]=='серый' or $color[18]=='серый' or $color[19]=='серый')
{echo "<nobr><input name='color[]' type='checkbox' value='серый' checked>серый   </nobr>";}
else 
{echo "<nobr><input name='color[]' type='checkbox' value='серый'>серый   </nobr>";}

if ($color[0]=='коричневый' or $color[1]=='коричневый' or $color[2]=='коричневый' or $color[3]=='коричневый' or $color[4]=='коричневый' or $color[5]=='коричневый' or $color[6]=='коричневый' or $color[7]=='коричневый' or $color[8]=='коричневый' or $color[9]=='коричневый' or $color[10]=='коричневый' or $color[11]=='коричневый' or $color[12]=='коричневый' or $color[13]=='коричневый' or $color[14]=='коричневый' or $color[15]=='коричневый' or $color[16]=='коричневый' or $color[17]=='коричневый' or $color[18]=='коричневый' or $color[19]=='коричневый')
{echo "<nobr><input name='color[]' type='checkbox' value='коричневый' checked>коричневый   </nobr>";}
else 
{echo "<nobr><input name='color[]' type='checkbox' value='коричневый'>коричневый   </nobr>";}

if ($color[0]=='розовый' or $color[1]=='розовый' or $color[2]=='розовый' or $color[3]=='розовый' or $color[4]=='розовый' or $color[5]=='розовый' or $color[6]=='розовый' or $color[7]=='розовый' or $color[8]=='розовый' or $color[9]=='розовый' or $color[10]=='розовый' or $color[11]=='розовый' or $color[12]=='розовый' or $color[13]=='розовый' or $color[14]=='розовый' or $color[15]=='розовый' or $color[16]=='розовый' or $color[17]=='розовый' or $color[18]=='розовый' or $color[19]=='розовый')
{echo "<nobr><input name='color[]' type='checkbox' value='розовый' checked>розовый   </nobr>";}
else 
{echo "<nobr><input name='color[]' type='checkbox' value='розовый'>розовый   </nobr>";}

if ($color[0]=='бордовый' or $color[1]=='бордовый' or $color[2]=='бордовый' or $color[3]=='бордовый' or $color[4]=='бордовый' or $color[5]=='бордовый' or $color[6]=='бордовый' or $color[7]=='бордовый' or $color[8]=='бордовый' or $color[9]=='бордовый' or $color[10]=='бордовый' or $color[11]=='бордовый' or $color[12]=='бордовый' or $color[13]=='бордовый' or $color[14]=='бордовый' or $color[15]=='бордовый' or $color[16]=='бордовый' or $color[17]=='бордовый' or $color[18]=='бордовый' or $color[19]=='бордовый')
{echo "<nobr><input name='color[]' type='checkbox' value='бордовый' checked>бордовый   </nobr>";}
else 
{echo "<nobr><input name='color[]' type='checkbox' value='бордовый'>бордовый   </nobr>";}

if ($color[0]=='оливковый' or $color[1]=='оливковый' or $color[2]=='оливковый' or $color[3]=='оливковый' or $color[4]=='оливковый' or $color[5]=='оливковый' or $color[6]=='оливковый' or $color[7]=='оливковый' or $color[8]=='оливковый' or $color[9]=='оливковый' or $color[10]=='оливковый' or $color[11]=='оливковый' or $color[12]=='оливковый' or $color[13]=='оливковый' or $color[14]=='оливковый' or $color[15]=='оливковый' or $color[16]=='оливковый' or $color[17]=='оливковый' or $color[18]=='оливковый' or $color[19]=='оливковый')
{echo "<nobr><input name='color[]' type='checkbox' value='оливковый' checked>оливковый   </nobr>";}
else 
{echo "<nobr><input name='color[]' type='checkbox' value='оливковый'>оливковый   </nobr>";}

if ($color[0]=='хаки' or $color[1]=='хаки' or $color[2]=='хаки' or $color[3]=='хаки' or $color[4]=='хаки' or $color[5]=='хаки' or $color[6]=='хаки' or $color[7]=='хаки' or $color[8]=='хаки' or $color[9]=='хаки' or $color[10]=='хаки' or $color[11]=='хаки' or $color[12]=='хаки' or $color[13]=='хаки' or $color[14]=='хаки' or $color[15]=='хаки' or $color[16]=='хаки' or $color[17]=='хаки' or $color[18]=='хаки' or $color[19]=='хаки')
{echo "<nobr><input name='color[]' type='checkbox' value='хаки' checked>хаки   </nobr>";}
else 
{echo "<nobr><input name='color[]' type='checkbox' value='хаки'>хаки   </nobr>";}

if ($color[0]=='рис. как на фото' or $color[1]=='рис. как на фото' or $color[2]=='рис. как на фото' or $color[3]=='рис. как на фото' or $color[4]=='рис. как на фото' or $color[5]=='рис. как на фото' or $color[6]=='рис. как на фото' or $color[7]=='рис. как на фото' or $color[8]=='рис. как на фото' or $color[9]=='рис. как на фото' or $color[10]=='рис. как на фото' or $color[11]=='рис. как на фото' or $color[12]=='рис. как на фото' or $color[13]=='рис. как на фото' or $color[14]=='рис. как на фото' or $color[15]=='рис. как на фото' or $color[16]=='рис. как на фото' or $color[17]=='рис. как на фото' or $color[18]=='рис. как на фото' or $color[19]=='рис. как на фото')
{echo "<nobr><input name='color[]' type='checkbox' value='рис. как на фото' checked>рис. как на фото   </nobr>";}
else 
{echo "<nobr><input name='color[]' type='checkbox' value='рис. как на фото'>рис. как на фото   </nobr>";}

if ($color[0]=='фиолетовый' or $color[1]=='фиолетовый' or $color[2]=='фиолетовый' or $color[3]=='фиолетовый' or $color[4]=='фиолетовый' or $color[5]=='фиолетовый' or $color[6]=='фиолетовый' or $color[7]=='фиолетовый' or $color[8]=='фиолетовый' or $color[9]=='фиолетовый' or $color[10]=='фиолетовый' or $color[11]=='фиолетовый' or $color[12]=='фиолетовый' or $color[13]=='фиолетовый' or $color[14]=='фиолетовый' or $color[15]=='фиолетовый' or $color[16]=='фиолетовый' or $color[17]=='фиолетовый' or $color[18]=='фиолетовый' or $color[19]=='фиолетовый')
{echo "<nobr><input name='color[]' type='checkbox' value='фиолетовый' checked>фиолетовый   </nobr>";}
else 
{echo "<nobr><input name='color[]' type='checkbox' value='фиолетовый'>фиолетовый   </nobr>";}

if ($color[0]=='серебристый' or $color[1]=='серебристый' or $color[2]=='серебристый' or $color[3]=='серебристый' or $color[4]=='серебристый' or $color[5]=='серебристый' or $color[6]=='серебристый' or $color[7]=='серебристый' or $color[8]=='серебристый' or $color[9]=='серебристый' or $color[10]=='серебристый' or $color[11]=='серебристый' or $color[12]=='серебристый' or $color[13]=='серебристый' or $color[14]=='серебристый' or $color[15]=='серебристый' or $color[16]=='серебристый' or $color[17]=='серебристый' or $color[18]=='серебристый' or $color[19]=='серебристый')
{echo "<nobr><input name='color[]' type='checkbox' value='серебристый' checked>серебристый   </nobr>";}
else 
{echo "<nobr><input name='color[]' type='checkbox' value='серебристый'>серебристый   </nobr>";}

if ($color[0]=='голубой' or $color[1]=='голубой' or $color[2]=='голубой' or $color[3]=='голубой' or $color[4]=='голубой' or $color[5]=='голубой' or $color[6]=='голубой' or $color[7]=='голубой' or $color[8]=='голубой' or $color[9]=='голубой' or $color[10]=='голубой' or $color[11]=='голубой' or $color[12]=='голубой' or $color[13]=='голубой' or $color[14]=='голубой' or $color[15]=='голубой' or $color[16]=='голубой' or $color[17]=='голубой' or $color[18]=='голубой' or $color[19]=='голубой')
{echo "<nobr><input name='color[]' type='checkbox' value='голубой' checked>голубой   </nobr>";}
else 
{echo "<nobr><input name='color[]' type='checkbox' value='голубой'>голубой   </nobr>";}

if ($color[0]=='желтый' or $color[1]=='желтый' or $color[2]=='желтый' or $color[3]=='желтый' or $color[4]=='желтый' or $color[5]=='желтый' or $color[6]=='желтый' or $color[7]=='желтый' or $color[8]=='желтый' or $color[9]=='желтый' or $color[10]=='желтый' or $color[11]=='желтый' or $color[12]=='желтый' or $color[13]=='желтый' or $color[14]=='желтый' or $color[15]=='желтый' or $color[16]=='желтый' or $color[17]=='желтый' or $color[18]=='желтый' or $color[19]=='желтый')
{echo "<nobr><input name='color[]' type='checkbox' value='желтый' checked>желтый  </nobr>";}
else 
{echo "<nobr><input name='color[]' type='checkbox' value='желтый'>желтый  </nobr>";}

?>

</tr>
</table>
<tr>
<td width="200">Фото товара: </td>
<td>
<input type="hidden" name="MAX_FILE_SIZE" value="300000"/>
<input name="foto" type="file" size="50"/><br><br>
<?php echo "<img src='../img_prod/$myrowk[tm]-$myrowk[model].jpg' alt=>$myrowk[tm]-$myrowk[model].jpg" ;?>
</td>

</tr>

<tr>
<td width="200">Фото большое: </td>
<td>
<input type="hidden" name="MAX_FILE_SIZE" value="300000"/>
<input name="fotomax" type="file" size="50"></td>
</tr>
<tr>
<td width="200">Описание: </td>
<td class="text">
<TEXTAREA name="info_prod" cols="90" rows="8">
<?php
echo $myrowk[info_prod];
?>
</TEXTAREA>
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
