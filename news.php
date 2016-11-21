<?php 
include("blocks/bd.php");
$result = mysql_query("SELECT title,meta_d,meta_k,text FROM informacia WHERE page='info'",$db);
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
<?php include('blocks/korzina.php');
      include('blocks/katalog.php');
      include('blocks/zapros_zakaz.php');
?>
</td>
<td width="612" bgcolor="#D9E9C9" valign="top" align="center">
<?php include("blocks/menu.php")?>


<table>
<tr>
<td width="612" align="left" valign="top">
<h2 class="h2" align="center">Новое на сайте</h2>
<hr>

<p class="h3"> 22.11.2015 - Пижамы, сорочки и халатики от ТМ DOBRA NOCKA!</p>
<img src="img_prod/DOBRA NOCKA-DN 8075 PSW.jpg" width=100 height="125">
<img src="img_prod/DOBRA NOCKA-DN 8072 PM.jpg" width=100 height="125">
<img src="img_prod/DOBRA NOCKA-DN 8071 PW.jpg" width=100 height="125">
<img src="img_prod/DOBRA NOCKA-DN 8064 SSG.jpg" width=100 height="125">
<img src="img_prod/DOBRA NOCKA-DN 8067 SSG.jpg" width=100 height="125">

<hr>

<p class="h3"> 07.11.2015 - Представляем торговую марку CORIN на нашем сайте</p>
<img src="img_prod/CORIN-Jenny 12862.jpg" width=100 height="125">
<img src="img_prod/CORIN-Karen 12845.jpg" width=100 height="125">
<img src="img_prod/CORIN-Gwynne 12839.jpg" width=100 height="125">
<img src="img_prod/CORIN-Georgia 10853.jpg" width=100 height="125">
<img src="img_prod/CORIN-Fifi 12814.jpg" width=100 height="125">

<hr>

<p class="h3"> 20.03.2015 - Пополнение каталогов и снижение цен во всех разделах РАСПРОДАЖА</p>
<img src="img_prod/KINGA-2524 Vivienne.jpg" width=100 height="125">
<img src="img_prod/KINGA-2500 End.jpg" width=100 height="125">
<img src="img_prod/KINGA-2167 Primera.jpg" width=100 height="125">
<img src="img_prod/KINGA-2136 Volcan.jpg" width=100 height="125">
<img src="img_prod/KINGA-195 Estrella.jpg" width=100 height="125">
<br>
<img src="img_prod/sale.png" width=30%>

<hr>

<p class="h3"> 25.08.2014 - Обновление раздела ТМ AVA. Пополнение коллекции 2014 года</p>
<img src="img_prod/AVA-1132 Vitroless.jpg" width=100 height="125">
<img src="img_prod/AVA-1115 Lille.jpg" width=100 height="125">
<img src="img_prod/AVA-1140 Vanvestl.jpg" width=100 height="125">
<img src="img_prod/AVA-1162 Arles.jpg" width=100 height="125">
<img src="img_prod/AVA-1160 Arles.jpg" width=100 height="125">
<hr>

<p class="h3"> 18.06.2014 - Пополнение каталога продукцией MITEX, EWANA, INTRI</p>
<img src="img_prod/MITEX-SATIN.jpg" width=100 height="125">
<img src="img_prod/MITEX-PINK CANDY BRA.jpg" width=100 height="125">
<img src="img_prod/MITEX-LIV.jpg" width=100 height="125">
<img src="img_prod/EWANA-95.jpg" width=100 height="125">
<img src="img_prod/INTRI-SLM-113.jpg" width=100 height="125">
<hr>


<hr>

<p class="h3"> 04.05.2014 - Поступление летних моделей коллекции 2014 года AVA, KINGA, KRIS LINE, LUPO</p>
<img src="img_prod/AVA-1143 Calais.jpg" width=100 height="125">
<img src="img_prod/KINGA-2457 Elisabeth.jpg" width=100 height="125">
<img src="img_prod/KINGA-2474 BB.jpg" width=100 height="125">
<img src="img_prod/KINGA-2524 Vivienne.jpg" width=100 height="125">
<img src="img_prod/KRIS LINE-Molly.jpg" width=100 height="125">
<hr>


<p class="h3"> 26.04.2014 - Обновление и пополнение всех разделов распродажи. Спешите!</p>
<img src="img_prod/sale.png" width=30%>

<hr>

<p class="h3"> Поступили новые весенние модели ТМ AVA, большие и маленькие размеры!</p>
<img src="img_prod/AVA-1156 Cambrai.jpg" width=100 height="125">
<img src="img_prod/AVA-1145 Dole.jpg" width=100 height="125">
<img src="img_prod/AVA-1142 Laval.jpg" width=100 height="125">
<img src="img_prod/AVA-1130 Manche.jpg" width=100 height="125">
<img src="img_prod/AVA-1126 Trisu.jpg" width=100 height="125">
<hr>
<p class="h3"> Пополнение новыми моделями ТМ AVA:</p>
<img src="img_prod/AVA-1153 Isere.jpg" width=100 height="125">
<img src="img_prod/AVA-1150.jpg" width=100 height="125">
<img src="img_prod/AVA-1149 Roanne.jpg" width=100 height="125">
<img src="img_prod/AVA-1123 Somma.jpg" width=100 height="125">
<img src="img_prod/AVA-1102 Guinby.jpg" width=100 height="125">
<hr>
<p class="h3"> Пополнение коллекции LUPO для беременных и кормящих мам:</p>
<img src="img_prod/LUPO-1419.jpg" width=100 height="125">
<img src="img_prod/LUPO-1394.jpg" width=100 height="125">
<img src="img_prod/LUPO-1393.jpg" width=100 height="125">
<img src="img_prod/LUPO-1391.jpg" width=100 height="125">
<img src="img_prod/LUPO-1390.jpg" width=100 height="125">
<hr>
<p class="h3"> Новые модели от ТМ KINGA:</p>
<img src="img_prod/KINGA-2543 Kingdom.jpg" width=100 height="125">
<img src="img_prod/KINGA-2542 Calm.jpg" width=100 height="125">
<img src="img_prod/KINGA-2538 Metropoliten.jpg" width=100 height="125">
<img src="img_prod/KINGA-2533 Stylish.jpg" width=100 height="125">
<img src="img_prod/KINGA-2523 Princess.jpg" width=100 height="125">
<hr>

</td>
</tr>
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
 <td width="1000" colspan="3" align="center" bgcolor="#D9E9C9" class="webstyle">WebStyle Ocharovanie &copy 2009 <!-- Yandex.Metrika counter -->
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
