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
<h2 class="h2" align="center">Дополнительная информация</h2>
<hr>
<p class="h3"> Как определить размер бюстгальтера?
</p>
<p class="text"><img src="img/razm2.jpg" width="219" height="274" align="middle" class="leftimg">Сотни моделей бюстгальтеров, от такого разнообразия предложений порой кружится голова, и Вы затрудняетесь что выбрать, какую модель купить. Приводим несколько советов, которые помогут вам в этом.
<p class="text">Производители женского белья признают, что каждая вторая женщина носит неправильно подобранный бюстгальтер. И, это к сожалению, первый шаг на пути к серьезным проблемам со здоровьем. Женская грудь не имеют мышц, состоят в основном из молочных протоков, кровеносных и лимфатических сосудов. Кожа под тяжестью груди вытягивается и обвисает, бюст идет вниз, и жировые ткани становятся ниже. Груди начинают "обвисать". Поэтому необходимо выбирать бюстгальтер тот, который подходит по форме, размеру и необходим для Вашей груди.
<p class="text">Прежде всего обратить внимание на то, чтобы обеспечивался максимальный комфорт для Вашей груди, правильно подобрав бюстгальтер нужного Вам размера. Неверно, если полная женщина выберет чашечки для маленькой груди, от этого навряд ли они будут казаться меньшими. Хорошо подобранный бюстгальтер должен подчеркнуть Ваши достоинства, скрыть недостатки. Как выбрать бюстгальтер?
<p class="text">Для подбора нам необходимо знать размер бюстгальтера - полноту и размер чашек, зная эти два размера мы и выбираем.
Размер бюстгальтера состоит из цифры и латинской буквы, пример 75B, 80C и т.д. Чтобы подобрать размер, необходимо взять сантиметровую ленту и измерить окружность груди, сначала под грудью (например, 75 см, 80 см, и т.д.), и произвести второе измерение по окружности в самой широкой точке груди (как правило, она проходит через соски).
<p class="text">Для корректного измерения необходимо это делать при опущенных руках.
<TABLE border=1 cellspacing=0 width=100%>
    <TR bgcolor="#D9E9C9" class="text" align="center">
    <TD><B>Обхват под грудью (см)</B></TD>
    <TD>63 - 67</TD>
    <TD>68 - 72</TD>
    <TD>73 - 77</TD>
    <TD>78 - 82</TD>
    <TD>83 - 87</TD>
    <TD>88 - 92</TD>
    </TR>
   <TR bgcolor="#D9E9C9" class="text" align="center">
    <TD>Размер бюстгальтера</TD>
    <TD>65</TD>
    <TD>70</TD>
    <TD>75</TD>
    <TD>80</TD>
    <TD>85</TD>
    <TD>90</TD>
    </TR>
</TABLE>
<br>
<TABLE border=1 cellspacing=0 width=100%>
    <TR bgcolor="#D9E9C9" class="text" align="center">
    <TD><B>Обхват под грудью (см)</B></TD>
    <TD>93 - 97</TD>
    <TD>98 - 102</TD>
    <TD>103 - 107</TD>
    <TD>108 - 112</TD>
    <TD>113 - 117</TD>
    <TD>118 - 122</TD>
    </TR>
   <TR bgcolor="#D9E9C9" class="text" align="center">
    <TD>Размер бюстгальтера</TD>
    <TD>95</TD>
    <TD>100</TD>
    <TD>105</TD>
    <TD>110</TD>
    <TD>115</TD>
    <TD>120</TD>
    </TR>
</TABLE>
<p class="text">
Далее из второго (большего) измерения вычитаем первое измерение (меньшее), в результате этого Вы получаете разницу, это определяет размер чашечки обозначаемый латинской буквой. Если разница составляет: 11 см и менее, чашечка АА, 12-13 см, чашечка А, 14-15 см у Вас чашечка B, 16-17 см - чашечка С, 18-19 см - чашечка D, 20-22 см - чашечка E, 22-24 см - чашечка F, и т.д.
<hr>
<p class="h3"> Сайты производителей продукции
</p>
<p class="text" align="center">
<a  href="http://www.avalingerie.pl/" target="_blank"><img src="img_tm/ava123.jpg" width="160" height="63"></a>
<a  href="http://kinga.com.pl" target="_blank"><img src="img_tm/kinga123.gif" width="160" height="63"></a>
<a  href="http://www.krisline.com" target="_blank"><img src="img_tm/krisline123.jpg" width="158" height="63"></a>
<a  href="http://www.gaia.com.pl" target="_blank"><img src="img_tm/daia123.gif" width="160" height="63"></a>
<a  href="http://www.konrad-bielizna.pl" target="_blank"><img src="img_tm/konrad123.gif" width="160" height="63"></a>
<a  href="http://www.lupoline.com" target="_blank"><img src="img_tm/lupo123.jpg" width="160" height="63"></a>
<a  href="http://julimex.pl" target="_blank"><img src="img_tm/julimex123.jpg" width="160" height="63"></a>
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
