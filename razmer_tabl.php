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
<table>
<tr>
<td width="612" align="left" valign="top">
<h2 class="h2" align="center">������� ��������</h2>
<p class="h3" align="center">KINGA</p>
<img src="img/razm_kinga.jpg" width="598" height="370">
<img src="img/razm_kinga2.jpg" width="413" height="91">
<p class="h3" align="center">AVA</p>
<img src="img/razmava.jpg" width="600" height="240">
<p class="h3" align="center">KRIS LINE</p>
<img src="img/razm_krisline.jpg" width="600" height="438">
<img src="img/razm_krisline1.jpg" width="600" height="455">
<p class="h3" align="center">GAIA</p>
<img src="img/razm_gaia.jpg" width="598" height="434">
<p class="h3" align="center">KONRAD</p>
<img src="img/konrad_razm.png" width="598" height="249">
<br> <span class="h3">�������</span><br>
<img src="img/konrad2.jpg" width="472" height="63">
<p class="h3" align="center">LUPO</p>
<img src="img/lupo_razm.png" width="600" height="550"></tr>
</table>


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
         <td class='h3'>�������� �����</td>
         </tr>
     <tr>
         <td class='text'>���� ���:<br>
         <input name="name" type="text"/></td>
     </tr>
     <tr>
         <td class='text'>��� e-mail:<br>
         <input name="email" type="text" /></td>
     </tr>
      <tr>
         <td valign="top" class='text'>����� ���������:<br>
         <textarea name="text" rows="5"></textarea></td>
     </tr>
 <td class='text'>�������� ������ "����������":<br>
         <input name="test" type="text" /></td>

     <tr><td><input value="���������" type="submit" /></td></tr>
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
