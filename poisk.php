<?php 
include("blocks/bd.php");
$result = mysql_query("SELECT title,meta_d,meta_k,text FROM informacia WHERE page='index'",$db);
$myrow = mysql_fetch_array($result);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251">
<meta name="description" content="<?php echo $myrow['meta_d'];?> ">
<meta name="keywords" content="<?php echo $myrow['meta_k'];?> ">

<title><?php echo $myrow['title'];?></title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
.webstyle {
	font-style: italic;
}
</style>
</head>
<body>
<table width="1000" class="main_border" align='center'>
<tr>
 <?php include("blocks/head.php");?>
 </tr>
<tr>
<td width="194" align="center" bgcolor="#D9E9C9" valign="top">
<?php include("blocks/korzina.php");
      include("blocks/katalog.php");
      include("blocks/zapros_zakaz.php");
?>
</td>
<td width="612" align="center" bgcolor="#D9E9C9" valign="top">
<?php include("blocks/menu.php");?>

<table width="612" border="0"  cellspacing="0" cellpadding="0">
<tr>
<td width="612" colspan="4" align="center" bgcolor="#D9E9C9" top>

<?php

include("poisk_product.php");

?>


</td> 
</tr>
</table>
</td>


<td width="194" align="center" bgcolor="#D9E9C9" valign="top">
<table width="194" border="1" cellspacing="0" cellpadding="0" >




<form action="index.php?s=ALL" method="post" name="sort">
<?php include("blocks/sortirovka.php");?>
</form>
<form action="poisk.php" method="post" name="poisk">

<?php 
include("blocks/poisk.php");?>
</form>
</table>

</td>
</tr>
 <tr>
 <td width="1000" colspan="3" align="center" bgcolor="#D9E9C9" class="webstyle">WebStyle Ocharovanie &copy 2012</td>
</tr>
</table>


</body>
</html>
