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


<title>Обновление товара</title>
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
<td width="900" align="center" bgcolor="#D9E9C9" valign="top" class="h2">
ОБНОВЛЕНИЕ ТОВАРА
</td>
</tr>
<tr height="50"  bgcolor="#D9E9C9"  valign="top" class="h2">
<td>
<?php
if (isset($_POST['productID']))
{
	$productID=$_POST['productID'];
}

if (isset($_POST['katalog']))
{
	$katalog=$_POST['katalog'];
}

if (isset($_POST['fast']))
{
	$fast=$_POST['fast'];
}

if (isset($_POST['who']))
{
	$who=$_POST['who'];
}
if (isset($_POST['tip']))
{
	$tip=$_POST['tip'];
}
if (isset($_POST['vid']))
{
	$vid=$_POST['vid'];
}
if (isset($_POST['tm']))
{
	$tm=$_POST['tm'];
}
if (isset($_POST['model']))
{
	$model=$_POST['model'];
}
if (isset($_POST['color']))
{ 
	if ($_POST['color'] != '' and $_POST['color'] !='0')
	{$color=$_POST['color'];}
}
else
{$color='  ';}

if (isset($_POST['size']))
{
	$size=$_POST['size'];
	}
	else
	{$size='  ';}
if (isset($_POST['kod']))
{
	$kod=$_POST['kod'];
}

if (isset($_POST['price']))
{
	$price=$_POST['price'];
}
if (isset($_POST['info_prod']))
{
	$info_prod=$_POST['info_prod'];
}




if ($size != '  ')
{$size=join(', ', $size);}
if ($color != '  ')
{$color=join(', ', $color);}


$kod=$vid."-".$tm."-".$model;

$result = mysql_query ("UPDATE products SET katalog='$katalog', fast='$fast',who='$who',tip='$tip',vid='$vid',tm='$tm', model='$model',color='$color',size='$size',kod='$kod',price='$price',info_prod='$info_prod'WHERE productID=$productID");
if ($result=='true')
{
echo 'Информация обновлена успешно<br>';
}
else
{
echo 'Информация не обновлена<br>';
}

if (isset ($uploadfile1) && $uploadfile1 !="")
{
$result2 = mysql_query ("UPDATE products SET foto='$foto' WHERE productID=$productID");
if ($result2=='true')
{
echo 'Фото 1 загружено успешно<br>';
}
else
{
echo 'Фото 1 не добавлено<br>';
}
}

if (isset ($uploadfile2) && $uploadfile2 !="")
{
$result3 = mysql_query ("UPDATE products SET foto='$foto' WHERE productID=$productID");
if ($result3=='true')
{
echo 'Фото 2 загружено успешно';
}
else
{
echo 'Фото 2 не добавлено';
}
}
?>



</td>
</tr>
<tr>
<td>
<A href="index.php"><input name="nosubmit" type="button" value="назад"></A>
</td>
</tr>
</table>

</body>
</html>
