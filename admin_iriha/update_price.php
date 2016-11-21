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


<title>Обновление цен</title>
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
ОБНОВЛЕНИЕ ЦЕН
</td>
</tr>
<tr height="50"  bgcolor="#D9E9C9"  valign="top" class="h2">
<td>
<?php
if (isset($_GET['nomer']))
{
	$nomer=$_GET['nomer'];
}
if (isset($_POST['price_new']))
{
	$price_new=$_POST['price_new'];
}

$result = mysql_query ("UPDATE products SET price='$price_new'  WHERE productID=$nomer");
if ($result=='true')
{
echo 'Информация обновлена успешно<br>';
}
else
{
echo 'Информация не обновлена<br>';
}

?>


</td>
</tr>
</table>

</body>
</html>
