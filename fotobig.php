<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251">


<title>Фото товара</title>
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
error_reporting(E_ALL);
include("blocks/bd.php");
if (isset($_GET['id']))
{
	$id=$_GET['id'];
	}
$result_s = mysql_query ("SELECT * FROM products WHERE productID='$id'",$db);
$myrow_s= mysql_fetch_array ($result_s);


echo "<br><table width='100%' bgcolor='#D9E9C9'><tr><td align='center'>
<img src='img_prod/$myrow_s[tm]-$myrow_s[model]-big.jpg' alt='НЕТ ФОТО'></td></tr>";
?>

<tr><td align='center'><input onclick='window.history.back();' type='button' value='Вернуться'/></td></tr></table>
</body>
</html>

