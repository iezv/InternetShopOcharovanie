<link href="style.css" rel="stylesheet" type="text/css">
<?php 
$result = mysql_query ("SELECT * FROM oblogka WHERE id='1'",$db);
$myrow= mysql_fetch_array ($result);
$n1=$myrow['n1'];
$n2=$myrow['n2'];
$n3=$myrow['n3'];
$n4=$myrow['n4'];
$n5=$myrow['n5'];
$n6=$myrow['n6'];
$n7=$myrow['n7'];
$n8=$myrow['n8'];
$n9=$myrow['n9'];
$n10=$myrow['n10'];

$result_price = mysql_query ("SELECT * FROM koeficient WHERE id='1'",$db);
$myrow_price= mysql_fetch_array ($result_price);

$result_1 = mysql_query ("SELECT * FROM products WHERE productID='$n1'",$db);
$myrow_1= mysql_fetch_array ($result_1);
$myrow_1[price]=round($myrow_1[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);

$result_2 = mysql_query ("SELECT * FROM products WHERE productID='$n2'",$db);
$myrow_2= mysql_fetch_array ($result_2);
$myrow_2[price]=round($myrow_2[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);

$result_3 = mysql_query ("SELECT * FROM products WHERE productID='$n3'",$db);
$myrow_3= mysql_fetch_array ($result_3);
$myrow_3[price]=round($myrow_3[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);

$result_4 = mysql_query ("SELECT * FROM products WHERE productID='$n4'",$db);
$myrow_4= mysql_fetch_array ($result_4);
$myrow_4[price]=round($myrow_4[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);

$result_5 = mysql_query ("SELECT * FROM products WHERE productID='$n5'",$db);
$myrow_5= mysql_fetch_array ($result_5);
$myrow_5[price]=round($myrow_5[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);

$result_6 = mysql_query ("SELECT * FROM products WHERE productID='$n6'",$db);
$myrow_6= mysql_fetch_array ($result_6);
$myrow_6[price]=round($myrow_6[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);

$result_7 = mysql_query ("SELECT * FROM products WHERE productID='$n7'",$db);
$myrow_7= mysql_fetch_array ($result_7);
$myrow_7[price]=round($myrow_7[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);

$result_8 = mysql_query ("SELECT * FROM products WHERE productID='$n8'",$db);
$myrow_8= mysql_fetch_array ($result_8);
$myrow_8[price]=round($myrow_8[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);

$result_9 = mysql_query ("SELECT * FROM products WHERE productID='$n9'",$db);
$myrow_9= mysql_fetch_array ($result_9);
$myrow_9[price]=round($myrow_9[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);

$result_10 = mysql_query ("SELECT * FROM products WHERE productID='$n10'",$db);
$myrow_10= mysql_fetch_array ($result_10);
$myrow_10[price]=round($myrow_10[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);


printf (
"
<br>
<table width='512' border='0'  cellspacing='0' cellpadding='0'>
<tr>
<td width='512' height='30' align='center' bgcolor='#D9E9C9' valign='top' class='h2'>

Сайт временно НЕ РАБОТАЕТ!<br> Приносим свои извинения!<br><br></td>
</tr>

<table  align='center' width='612' class='text' border='0'>
<tr height='250'>
<td align='center' bgcolor='#D9E9C9' valign='top'> <a href='product.php?id=$myrow_1[productID]'><img src='img_prod/$myrow_1[tm]-$myrow_1[model].jpg'  border='2' alt='НЕТ ФОТО'></a><br><font class='h2'><a href='product.php?id=$myrow_1[productID]'>$myrow_1[vid]  $myrow_1[tm] $myrow_1[model]</a> </font><br> <font class='price'> $myrow_1[price] грн. </font> </td>

<td align='center' bgcolor='#D9E9C9' valign='top'><a href='product.php?id=$myrow_2[productID]'> <img src='img_prod/$myrow_2[tm]-$myrow_2[model].jpg'  border='2' alt='НЕТ ФОТО'></a><br><font class='h2'><a href='product.php?id=$myrow_2[productID]'>$myrow_2[vid]  $myrow_2[tm] $myrow_2[model]</a></font><br> <font class='price'> $myrow_2[price] грн. </font></td>
</tr>
<tr height='250'>
<td align='center' bgcolor='#D9E9C9' valign='top'><a href='product.php?id=$myrow_3[productID]'><img src='img_prod/$myrow_3[tm]-$myrow_3[model].jpg'  border='2' alt='НЕТ ФОТО'></a><br><font class='h2'><a href='product.php?id=$myrow_3[productID]'>$myrow_3[vid]  $myrow_3[tm] $myrow_3[model]</a></font><br> <font class='price'>$myrow_3[price] грн. </font></td>


<td align='center' bgcolor='#D9E9C9' valign='top'><a href='product.php?id=$myrow_4[productID]'><img src='img_prod/$myrow_4[tm]-$myrow_4[model].jpg'  border='2' alt='НЕТ ФОТО'></a><br><font class='h2'><a href='product.php?id=$myrow_4[productID]'>$myrow_4[vid]  $myrow_4[tm] $myrow_4[model]</a></font><br> <font class='price'>$myrow_4[price] грн.</font> </td>
</tr>


<tr height='250'>
<td align='center' bgcolor='#D9E9C9' valign='top'><a href='product.php?id=$myrow_5[productID]'><img src='img_prod/$myrow_5[tm]-$myrow_5[model].jpg'  border='2' alt='НЕТ ФОТО'></a><br><font class='h2'><a href='product.php?id=$myrow_5[productID]'>$myrow_5[vid]  $myrow_5[tm] $myrow_5[model]</a></font><br> <font class='price'>$myrow_5[price] грн. </font></td>


<td align='center' bgcolor='#D9E9C9' valign='top'><a href='product.php?id=$myrow_6[productID]'><img src='img_prod/$myrow_6[tm]-$myrow_6[model].jpg'  border='2' alt='НЕТ ФОТО'></a><br><font class='h2'><a href='product.php?id=$myrow_6[productID]'>$myrow_6[vid]  $myrow_6[tm] $myrow_6[model]</a></font><br> <font class='price'>$myrow_6[price] грн.</font> </td>
</tr>

<tr height='250'>
<td align='center' bgcolor='#D9E9C9' valign='top'><a href='product.php?id=$myrow_7[productID]'><img src='img_prod/$myrow_7[tm]-$myrow_7[model].jpg'  border='2' alt='НЕТ ФОТО'></a><br><font class='h2'><a href='product.php?id=$myrow_7[productID]'>$myrow_7[vid]  $myrow_7[tm] $myrow_7[model]</a></font><br> <font class='price'>$myrow_7[price] грн. </font></td>


<td align='center' bgcolor='#D9E9C9' valign='top'><a href='product.php?id=$myrow_8[productID]'><img src='img_prod/$myrow_8[tm]-$myrow_8[model].jpg'  border='2' alt='НЕТ ФОТО'></a><br><font class='h2'><a href='product.php?id=$myrow_8[productID]'>$myrow_8[vid]  $myrow_8[tm] $myrow_8[model]</a></font><br> <font class='price'>$myrow_8[price] грн.</font> </td>
</tr>

<tr height='250'>
<td align='center' bgcolor='#D9E9C9' valign='top'><a href='product.php?id=$myrow_9[productID]'><img src='img_prod/$myrow_9[tm]-$myrow_9[model].jpg'  border='2' alt='НЕТ ФОТО'></a><br><font class='h2'><a href='product.php?id=$myrow_9[productID]'>$myrow_9[vid]  $myrow_9[tm] $myrow_9[model]</a></font><br> <font class='price'>$myrow_9[price] грн. </font></td>


<td align='center' bgcolor='#D9E9C9' valign='top'><a href='product.php?id=$myrow_10[productID]'><img src='img_prod/$myrow_10[tm]-$myrow_10[model].jpg'  border='2' alt='НЕТ ФОТО'></a><br><font class='h2'><a href='product.php?id=$myrow_10[productID]'>$myrow_10[vid]  $myrow_10[tm] $myrow_10[model]</a></font><br> <font class='price'>$myrow_10[price] грн.</font> </td>
</tr>

</td> 
</tr>
</table>


");

?>
