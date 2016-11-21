<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251">


<title>Состояние заказа</title>
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
error_reporting(0);
include("blocks/bd.php");


if (isset($_POST['zakaz']))
{
	$zakaz=$_POST['zakaz'];
}


$result = mysql_query ("SELECT * FROM zakaz_klient WHERE nomer='$zakaz'",$db);
$myrow= mysql_fetch_array ($result);
$total= mysql_num_rows($result);

if ($total==1)
{echo "
<br><table width='100%' bgcolor='#D9E9C9'><tr><td align='center' class='h2'> Состояние заказа № $zakaz: $myrow[stan_zakaz]</td></tr>
</table>";}


else
{echo "
<br><table width='100%' bgcolor='#D9E9C9'><tr><td align='center' class='h2'> ЗАКАЗ НЕ НАЙДЕН</td></tr>
</table>";}

?>

<tr><td align='center'><input onclick='window.history.back();' type='button' value='Вернуться'/></td></tr></table>
</body>
</html>

