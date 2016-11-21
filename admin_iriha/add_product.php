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
<td width="900" align="center" bgcolor="#D9E9C9" valign="top" class="h2">
ДОБАВЛЕНИЕ ТОВАРА
</td>
</tr>
<tr height="50"  bgcolor="#D9E9C9"  valign="top" class="h2">
<td>
<?php

if (isset($_POST['fast']))
{
	$fast=$_POST['fast'];
}
if (isset($_POST['katalog']))
{
	$katalog=$_POST['katalog'];
}
if (isset($_POST['vid']))
{
	$vid=$_POST['vid'];
}
if (isset($_POST['who']))
{
	$who=$_POST['who'];
}
if (isset($_POST['tip']))
{
	$tip=$_POST['tip'];
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
$result = mysql_query ("INSERT INTO products 
(katalog,fast,vid,who,tip,tm,model,color,size,kod,price,info_prod) 
VALUES ('$katalog','$fast','$vid','$who','$tip','$tm','$model','$color','$size','$kod','$price','$info_prod')");
if ($result=='true')
{
echo 'Информация занасена успешно';
}
else
{
echo 'Информация не добавлена';
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
