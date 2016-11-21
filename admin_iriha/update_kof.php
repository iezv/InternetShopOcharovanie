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


<title>Обновление коэффициентов</title>
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
ОБНОВЛЕНИЕ КОЭФФИЦИЕНТОВ
</td>
</tr>
<tr height="50"  bgcolor="#D9E9C9"  valign="top" class="h2">
<td>
<?php
if (isset($_POST['kurs']))
{
	$kurs=$_POST['kurs'];
}

if (isset($_POST['kof']))
{
	$kof=$_POST['kof'];
}
if (isset($_POST['kurs2']))
{
	$kurs2=$_POST['kurs2'];
}

if (isset($_POST['dost']))
{
	$dost=$_POST['dost'];
}


$result = mysql_query ("UPDATE koeficient SET kurs='$kurs',kurs2='$kurs2', kof='$kof',dost='$dost' WHERE id=1");
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
<tr>
<td>
<A href="index.php"><input name="nosubmit" type="button" value="назад"></A>
</td>
</tr>
</table>

</body>
</html>
