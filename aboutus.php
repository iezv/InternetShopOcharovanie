<?php 
error_reporting(0);

include("blocks/bd.php");
$result = mysql_query("SELECT title,meta_d,meta_k,text FROM informacia WHERE page='aboutus'",$db);
$myrow = mysql_fetch_array($result);

if (isset($_GET['u']))
{
	$u=$_GET['u'];
}

if (isset($_POST['name']))
{
	$name=$_POST['name'];
}
if (isset($_POST['text']))
{
	$text=$_POST['text'];
}


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251">
<meta name="description" content="<?php echo $myrow['meta_d'];?> ">
<meta name="keywords" content="<?php echo $myrow['meta_k'];?> ">
<meta name="resource-type" name="Document">
<meta name="document-state" content="Dynamic">
<meta http-equiv="Content-Language" content="ru">
<meta name="robots" content="ALL,index,follow">
<meta name="revisit-after" content="2">
<meta http-equiv="Pragma" content="no-cache">


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
<td width="612" bgcolor="#D9E9C9" valign="top" align="center">
<?php include("blocks/menu.php")?>
<?php echo $myrow['text'];?>
<table>
<tr><td width="30" colspan="2" valign="top" class="h2" align="center"> <hr><br>ОТЗЫВЫ<br><br></td></tr>
<tr><td colspan="2" class="text">Уважаемые друзья! Здесь вы можете оставить свои отзывы, предложения и замечания!</td></tr>
<form action="aboutus.php?u=1" method="post" name="otziv">
<tr align="left"><td class="text" align="left">Ваше имя</td><td><Input type="text" name="name" size="30" align="left"></td></tr>
<tr align="left"><td class="text" align="left">Ваш отзыв</td><td><TEXTAREA name="text" cols=50 rows=4 align="left"></TEXTAREA></td></tr>
<tr><td colspan="2"><Input type="submit" name="ok" value="Оставить отзыв!"></td></tr>
<?php 
if ((isset ($u)) and ( $u== 1))
{ 
if ((isset ($name)) and (isset ($text)) and $name<>'' and $name<>" " and $text<>'' and $text<>" ")
{
$result = mysql_query ("INSERT INTO otziv (name,text) VALUES ('$name','$text')");
if ($result=='true')

{printf ("<tr><td colspan='2' class='price'>СПАСИБО ЗА ВАШ ОТЗЫВ!</td></tr>");}}
else
{printf ("<tr><td colspan='2' class='price'>ВЫ НЕ ЗАПОЛНИЛИ ПОЛЯ!</td></tr>");}
}

?>
<?php
$result_1 = mysql_query ("SELECT * FROM otziv",$db);
$myrow = mysql_fetch_array ($result_1);
do
{printf ("<tr align='left'><td class='text' align='left'>$myrow[name]</td><td>$myrow[text]</td></tr>");}
while ($myrow=mysql_fetch_array($result_1));

?>




</form>
</TABLE>









<td width="194" align="center" bgcolor="#D9E9C9" valign="top">
<table width="194" border="1" cellspacing="0" cellpadding="0" >

<form action="index.php?s=ALL" method="post" name="sort">
<?php 
include("blocks/sortirovka.php");?>
</form>


<form action="poisk.php" method="post" name="poisk">

<?php 
include("blocks/poisk.php");?>
</form>
<tr><td><br><br></td></tr>

<tr><td>

<form action="send.php" method="post">
   <table>
     <tr>
         <td class='h3'>ОБРАТНАЯ СВЯЗЬ</td>
         </tr>
     <tr>
         <td class='text'>Ваше имя:<br>
         <input name="name" type="text"/></td>
     </tr>
     <tr>
         <td class='text'>Ваш e-mail:<br>
         <input name="email" type="text" /></td>
     </tr>
      <tr>
         <td valign="top" class='text'>Текст сообщения:<br>
         <textarea name="text" rows="5"></textarea></td>
     </tr>
 <td class='text'>Напишите числом "двенадцать":<br>
         <input name="test" type="text" /></td>

     <tr><td><input value="Отправить" type="submit" /></td></tr>
   </table>
 </form>

</td></tr>

</table>

</td>
</tr>
 <tr>
 <td width="1000" colspan="3" align="center" bgcolor="#D9E9C9" class="webstyle">WebStyle Ocharovanie <!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter27029013 = new Ya.Metrika({
                    id:27029013
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/27029013" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter --></td>
</tr>
</table>


</body>
</html>
