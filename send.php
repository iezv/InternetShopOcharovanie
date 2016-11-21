<?php 
error_reporting(0);
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
<tr><td bgcolor="#D9E9C9">
<?php 

if (isset($_POST['name']))
{
  $name=$_POST['name'];
}

if (isset($_POST['email']))
{
  $email=$_POST['email'];
}

if (isset($_POST['text']))
{
  $text=$_POST['text'];
}

if (isset($_POST['test']))
{
  $test=$_POST['test'];
}

$address = "ocharovanie.com.ua@ya.ru";

if ((isset ($test)) and ($test==12))


{if ((isset ($name)) and ($name<>"") and ($name<>" ") and (isset ($email)) and ($email<>"") and ($email<>" ") and (isset ($text)) and ($text<>"") and ($text<>" "))
{

$mes = "Имя: $name \nE-mail: $email \nТекст: $text";
$sub="Запрос с формы сайта";
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = windows-1251\r\nFrom:$email");
  
if ($send == 'true')
  {echo "<font class='price'>Сообщение отправлено</font>"; echo "<br><A href=http://www.ocharovanie.com.ua/index.php>Вернуться</A>";}
  else 
  {echo "<font class='price'>Сообщение не отправлено</font>";echo "<br><A href=http://www.ocharovanie.com.ua/index.php>Вернуться</A>";}
}

else
{echo "<font class='price'>Вы заполнили не все поля формы!</font>"; echo "<br><A href=http://www.ocharovanie.com.ua/index.php>Вернуться</A>";}

}

else
{echo "<font class='price'>ОШИБКА!</font>"; echo "<br><A href=http://www.ocharovanie.com.ua/index.php>Вернуться</A>";}


?>
</td></tr></body>
