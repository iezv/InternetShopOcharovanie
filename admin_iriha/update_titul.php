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


<title>Обновление обложки</title>
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
ОБНОВЛЕНИЕ ОБЛОЖКИ САЙТА
</td>
</tr>
<tr height="50"  bgcolor="#D9E9C9"  valign="top" class="h2">
<td>
<?php
if (isset($_POST['n1']))
{
	$n1=$_POST['n1'];
}

if (isset($_POST['n2']))
{
	$n2=$_POST['n2'];
}
if (isset($_POST['n3']))
{
	$n3=$_POST['n3'];
}
if (isset($_POST['n4']))
{
	$n4=$_POST['n4'];
}
if (isset($_POST['n5']))
{
	$n5=$_POST['n5'];
}
if (isset($_POST['n6']))
{
	$n6=$_POST['n6'];
}
if (isset($_POST['n7']))
{
	$n7=$_POST['n7'];
}
if (isset($_POST['n8']))
{
	$n8=$_POST['n8'];
}
if (isset($_POST['n9']))
{
	$n9=$_POST['n9'];
}
if (isset($_POST['n10']))
{
	$n10=$_POST['n10'];
}

$result = mysql_query ("UPDATE oblogka SET n1='$n1',n2='$n2',n3='$n3',n4='$n4',n5='$n5', n6='$n6', n7='$n7' , n8='$n8', n9='$n9', n10='$n10' WHERE id=1");
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
