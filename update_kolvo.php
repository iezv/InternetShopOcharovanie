<?php 
ini_set('display_errors',1);
error_reporting(E_ALL);
include("/blocks/bd.php");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251">


<title>Обновление количества товаров</title>
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
ОБНОВЛЕНИЕ КОЛИЧЕСТВА ТОВАРОВ
</td>
</tr>
<tr height="50"  bgcolor="#D9E9C9"  valign="top" class="h2">
<td>
<?php

if (isset($_POST['ko']))
{
	$ko=$_POST['ko'];
}
if (isset($_GET['idko']))
{
	$idko=$_GET['idko'];
}

echo $ko;
echo $idko;


function getRealIpAddr()
{
  if (!empty($_SERVER['HTTP_CLIENT_IP']))
  {
    $ip=$_SERVER['HTTP_CLIENT_IP'];
  }
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
  {
    $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  else
  {
    $ip=$_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}

$ip=getRealIpAddr();
 
$result = mysql_query ("UPDATE korzina SET kolvo=$ko WHERE id=$idko");

?>



</td>
</tr>
</table>

</body>
</html>
