<?php 
error_reporting(0);

include("blocks/bd.php");
if (isset($_GET['id']))
{
	$id=$_GET['id'];
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251">


<title>�������� ������</title>
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
�������� ������
</td>
</tr>
<tr>
<td width="900" align="left" bgcolor="#D9E9C9" valign="top" class="h3">
<?php
$result = mysql_query ("DELETE FROM korzina WHERE id=$id");
if ($result=='true')
{
echo '����� ������ �������<br>';
}
else
{
echo '���������� �� ���������<br>';
}


?></td>
</tr>
<tr>
<td align="left"><A href="korzinka.php"><input name="submit" type="button" value="�����"></A></td>
</td>
</tr>
</table>
</body>
</html>
