<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251">


<title>���������� ������</title>
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

printf("
<table width='800' class='main_border' align='center'>
<tr>
<td width='800' align='center' bgcolor='#D9E9C9' valign='top' class='h2'>
��� �����
</td>
</tr>
<td width='800' align='center' bgcolor='#D9E9C9'>

<table width='800'  border='1' > 
<tr align='center'>
<td width='45'>�<br>�/�</td>
<td width='60'>���</td>
<td width='355'>������������ ������</td>
<td width='100'>����</td>
<td width='50'>������</td>
<td width='100'>����������</td>
<td width='50'>����</td>
<td width='100'>�����</td>
</tr>");

$result = mysql_query ("SELECT * FROM korzina WHERE ip='$ip'",$db);
$myrow= mysql_fetch_array ($result);
$count=0;
$summa=0;
$nn=0;

do
{$count=$count+1;
$sum=$myrow['price']*$myrow['kolvo'];
$summa=$summa+$sum;
$nn=$nn+$myrow['kolvo'];

printf ("<tr>
<td align='center' width='45'>$count</td>
<td align='center' width='60'>$myrow[kod]</td>
<td width='355'>$myrow[name]</td>
<td align='center' width='100'>$myrow[color]</td>
<td align='center' width='50'>$myrow[size]</td>
<td align='center' width='100'>$myrow[kolvo]</td>
<td align='center' width='50'>$myrow[price]</td>
<td  align='center' width='100'>$sum</td>
</tr>");}

while ($myrow=mysql_fetch_array($result));

printf("

<tr>
<td colspan='5'>�����</td>
<td align='center' width='50'>$nn</td>
<td align='center' width='50'>�</td>
<td align='center' width='100'>$summa</td>
</tr>
");

?>
</table>
</td>
</tr>
<tr> <td   bgcolor='#D9E9C9'  align='left'><a href="korzinka.php?a=index.php"><IMG src='img/nazad.jpg' border='0' alt="��������� �����"></a>

</td></tr>

<tr>
<td width='800' align='center' bgcolor='#D9E9C9' valign='top' class='h2'>
���� ������
</td>
</tr>
<td width='800' align='left' bgcolor='#D9E9C9'>

<table width='800'  border='0' align='left'> 
<tr><form action="zakaz2.php" method="post" name="zakaz">
<td width='200'><font class="h3"> �������:</font></td><td width='200'><input name="familiya" size="60" maxlength="200" align="left" type="text" ></td></tr>
<tr>
<td width='200'><font class="h3"> ���:</font></td><td width='200'><input name="imya" size="60" maxlength="200" align="left" type="text" ></td></tr>
<tr>
<td width='200'><font class="h3"> ����� ��������:</font></td><td width='200'><input name="telefon" size="60" maxlength="200" align="left" type="text" ></td></tr>
<tr>
<td width='200'><font class="h3"> E-mail:</font></td><td width='200'><input name="email" size="60" maxlength="200" align="left" type="text" ></td></tr>
<tr>
<td width='200'><font class="h3"> �������:</font></td><td width='200'><input name="oblast" size="60" maxlength="200" align="left" type="text" ></td></tr>
<tr>
<td width='200'><font class="h3"> �����:</font></td><td width='200'><input name="gorod" size="60" maxlength="200" align="left" type="text" ></td></tr>
<td width='200'><font class="h3"> ������ ��������:</font></td><td width='200'><input name="dostavka" type="radio" value="��������" checked>��������  <input name="dostavka" type="radio" value="����� �����">����� ����� </tr>
<tr>
<td width='200'><font class="h3"> ������ ������:</font></td><td width='200'><input name="oplata" type="radio" value="��� ���������" checked>��� ��������� ������  <input name="oplata" type="radio" value="����������">����������</td></tr>

<td width='200' align="center">��� ���� ����������� ��� ����������!</td><td width='200' align="right"> <input name="ok" type="submit" value="������" class="h3" ></form> </td></tr>
</table>
</body>
</html>