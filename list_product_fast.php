<?php 

$result_price = mysql_query ("SELECT * FROM koeficient WHERE id='1'",$db);
$myrow_price= mysql_fetch_array ($result_price);


if (isset($_POST['who_sort']))
{
	$who_sort=$_POST['who_sort'];
}
	
if (isset($_POST['vid_sort']))
{
	$vid_sort=$_POST['vid_sort'];	
}

if (isset($_POST['cena1']))
{$cena1=($_POST['cena1']-$myrow_price[dost])/($myrow_price[kurs]*$myrow_price[kof]);}
else{$cena1=0;}

if ($cena1<'0') {$cena1=0;}
if ($cena1=='0') {$cena1=0;}
if ($cena1=='') {$cena1=0;}
if ($cena1==' ') {$cena1=0;}
if ($cena1=='  ') {$cena1=0;} 



if (isset($_POST['cena2']))
{$cena2=($_POST['cena2']-$myrow_price[dost])/($myrow_price[kurs]*$myrow_price[kof]);}
else{$cena2=3000;}

if ($cena2<'0') {$cena2=3000;}
if ($cena2=='0') {$cena2=3000;}
if ($cena2=='') {$cena2=3000;}
if ($cena2==' ') {$cena2=3000;}
if ($cena2=='  ') {$cena2=3000;}



if (isset($_POST['size1']))
{
	$size1=$_POST['size1'];
}
if (isset($_POST['size2']))
{
	$size2=$_POST['size2'];
}
if (isset($_POST['size3']))
{
	$size3=$_POST['size3'];
}
if (isset($_POST['color_sort']))
{
	$color_sort=$_POST['color_sort'];
}
echo "<br><font class='h2'>Выбран раздел - Быстрая доставка</font><br>";

if ($size1!='не указано' and $size2!='не указано')
   {$sise_sort_bel=$size1.$size2;}
else {$sise_sort_bel='не указано';}
	if ($size1!='не указано' and $size2=='не указано')
   {echo "<br><br><font class='price'>ВЫ НЕ УКАЗАЛИ РАЗМЕР ЧАШКИ БЮСТА</font><br><br>";
    $sise_sort_bel='не указано'; }
if ($size1=='не указано' and $size2!='не указано')
   {echo "<br><br><font class='price'>ВЫ НЕ УКАЗАЛИ ОБЪЕМ БЮСТА</font><br><br>";
    $sise_sort_bel='не указано';}
	
if ($size3=='не указано' and $sise_sort_bel=='не указано')
   {$sise_sort='не указано';}
   
if ($size3!='не указано' and $sise_sort_bel=='не указано')
   {$sise_sort=$size3; } 
   
if ($size3=='не указано' and $sise_sort_bel!='не указано')
   {$sise_sort=$sise_sort_bel; } 
   
if ($size3!='не указано' and $sise_sort_bel!='не указано')
   {$sise_sort[bel]=$sise_sort_bel;
    $sise_sort[ode]=$size3;}   
	

if ($sise_sort!='не указано' and $color_sort!='не указано' and $vid_sort!='не указано' and $who_sort=='для женщин')
{$sluchay=1;}
if ($sise_sort=='не указано' and $color_sort=='не указано' and $vid_sort=='не указано' and $who_sort=='для женщин')
{$sluchay=2;}
if ($sise_sort!='не указано' and $color_sort=='не указано' and $vid_sort=='не указано' and $who_sort=='для женщин')
{$sluchay=3;}
if ($sise_sort!='не указано' and $color_sort!='не указано' and $vid_sort=='не указано' and $who_sort=='для женщин')
{$sluchay=4;}
if ($sise_sort=='не указано' and $color_sort=='не указано' and $vid_sort!='не указано' and $who_sort=='для женщин')
{$sluchay=5;}
if ($sise_sort=='не указано' and $color_sort!='не указано' and $vid_sort=='не указано' and $who_sort=='для женщин')
{$sluchay=6;}
if ($sise_sort=='не указано' and $color_sort!='не указано' and $vid_sort!='не указано' and $who_sort=='для женщин')
{$sluchay=7;}
if ($sise_sort!='не указано' and $color_sort=='не указано' and $vid_sort!='не указано' and $who_sort=='для женщин')
{$sluchay=8;}

if ($sise_sort!='не указано' and $color_sort!='не указано' and $vid_sort!='не указано' and $who_sort=='для мужчин')
{$sluchay=9;}
if ($sise_sort=='не указано' and $color_sort=='не указано' and $vid_sort=='не указано' and $who_sort=='для мужчин')
{$sluchay=10;}
if ($sise_sort!='не указано' and $color_sort=='не указано' and $vid_sort=='не указано' and $who_sort=='для мужчин')
{$sluchay=11;}
if ($sise_sort!='не указано' and $color_sort!='не указано' and $vid_sort=='не указано' and $who_sort=='для мужчин')
{$sluchay=12;}
if ($sise_sort=='не указано' and $color_sort=='не указано' and $vid_sort!='не указано' and $who_sort=='для мужчин')
{$sluchay=13;}
if ($sise_sort=='не указано' and $color_sort!='не указано' and $vid_sort=='не указано' and $who_sort=='для мужчин')
{$sluchay=14;}
if ($sise_sort=='не указано' and $color_sort!='не указано' and $vid_sort!='не указано' and $who_sort=='для мужчин')
{$sluchay=15;}
if ($sise_sort!='не указано' and $color_sort=='не указано' and $vid_sort!='не указано' and $who_sort=='для мужчин')
{$sluchay=16;}

function filter($ii)
{if (isset ($ii) and $ii!='0' and $ii!='' and $ii!=' ')
{return true;}	
else {return false;}}



switch ($sluchay)
{case 1: 
{
$result_s = mysql_query ("SELECT * FROM products WHERE price >= '$cena1' and price <= '$cena2' and who!='для мужчин' and fast= 'да' ORDER BY model DESC",$db);
$myrow_s= mysql_fetch_array ($result_s);
$count=0;


if ($myrow_s['productID']!='0' and $myrow_s['productID']!='' and (isset ($myrow_s['productID'])))
{do
{    $size_test=strpos($myrow_s['size'], $sise_sort);
           $vid_tip=$myrow_s['vid'].', '.$myrow_s['tip'];
     $vid_test=strpos($vid_tip, $vid_sort);
	 $col_test=strpos($myrow_s['color'], $color_sort);
	 

 	 if ($size_test =='true' or $size_test !='')
	 {   if ($vid_test =='true' or $vid_test !='')
	         {if ($col_test =='true' or $col_test !='')
	 
	    {$count=1+$count; $myrow_s[price]=round($myrow_s[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);
		printf ("<br>
<table width='612' border='0'  cellspacing='0' cellpadding='0'>
<tr>
<td width='210' height='260' rowspan='3' align='center' bgcolor='#D9E9C9' valign='top'>
<img src='img_prod/$myrow_s[tm]-$myrow_s[model].jpg' alt='НЕТ ФОТО'></td>  
<form action='korzinka.php?productID=$myrow_s[productID]' method='post' name=form>
<td  align='center' bgcolor='#D9E9C9'  class='name_prod'> <a href=product.php?id=$myrow_s[productID]>$myrow_s[vid]  $myrow_s[tm] $myrow_s[model] </a></td>
<td width='70'  rowspan='2' align='center' bgcolor='#D9E9C9' valign='top'><INPUT type=image src='img/cart_navy.gif' width='57' height='58' name='submit'></input></td>
</tr>
<tr>
 <td  bgcolor='#D9E9C9' valign='top' align='center'><b class='text'>Цена: </b><b class='price'> $myrow_s[price]  </b><b class='text'> грн.</b> <hr></td>
</tr>
<tr>
<td width='370'  bgcolor='#D9E9C9' valign='top' colspan='2'>
<table width='370' border='0'  cellspacing='5' cellpadding='5'>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Код товара</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[productID]</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Цвет</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");
echo"<nobr><input name='color_vip' type='radio' value='не указано' checked>не указано</nobr><br>" ;
list($color[0], $color[1], $color[2], $color[3], $color[4],  $color[5], $color[6],  $color[7], $color[8], $color[9], $color[10], $color[11], $color[12], $color[13], $color[14], $color[15], $color[16], $color[17],  $color[18],  $color[19],$color[20]) = split(',',$myrow_s[color]);
$color[0]=trim($color[0]);$color[1]=trim($color[1]);$color[2]=trim($color[2]);$color[3]=trim($color[3]);
$color[4]=trim($color[4]);$color[5]=trim($color[5]);$color[6]=trim($color[6]);$color[7]=trim($color[7]);
$color[8]=trim($color[8]);$color[9]=trim($color[9]);$color[10]=trim($color[10]);$color[11]=trim($color[11]);
$color[12]=trim($color[12]);$color[13]=trim($color[13]);$color[14]=trim($color[14]);$color[15]=trim($color[15]);
$color[16]=trim($color[16]);$color[17]=trim($color[17]);$color[18]=trim($color[18]);$color[19]=trim($color[19]);
$color_new=array_filter($color, "filter");
$count_color=count($color_new);

if ($count_color!='0')
{for ($i_color=0; $i_color < $count_color; $i_color=$i_color+1) 
{echo"<nobr><input name='color_vip' type='radio' value='$color_new[$i_color]'>$color_new[$i_color]</nobr> &shy;" ;}}

printf ("
</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Размеры:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");

echo "<nobr><input name='size_vip' type='radio' value='не указано' checked>не указано</nobr>" ;

list($sz[0], $sz[1], $sz[2], $sz[3], $sz[4],  $sz[5], $sz[6],  $sz[7], $sz[8], $sz[9], $sz[10], $sz[11], $sz[12], $sz[13], $sz[14], $sz[15], $sz[16], $sz[17],  $sz[18],  $sz[19], $sz[20], $sz[21], $sz[22], $sz[23], $sz[24],  $sz[25], $sz[26],  $sz[27], $sz[28], $sz[29], $sz[30], $sz[31], $sz[32], $sz[33], $sz[34], $sz[35], $sz[36], $sz[37],  $sz[38],  $sz[39], $sz[40], $sz[41], $sz[42], $sz[43], $sz[44],  $sz[45], $sz[46],  $sz[47], $sz[48], $sz[49], $sz[50], $sz[51], $sz[52], $sz[53], $sz[54], $sz[55], $sz[56], $sz[57],  $sz[58],  $sz[59], $sz[60], $sz[61], $sz[62], $sz[63], $sz[64],  $sz[65], $sz[66],  $sz[67], $sz[68], $sz[69], $sz[70], $sz[71], $sz[72], $sz[73], $sz[74], $sz[75], $sz[76], $sz[77],  $sz[78],  $sz[79], $sz[80], $sz[81], $sz[82], $sz[83], $sz[84],  $sz[85], $sz[86],  $sz[87], $sz[88], $sz[89], $sz[90], $sz[91], $sz[92], $sz[93], $sz[94], $sz[95], $sz[96], $sz[97],  $sz[98],  $sz[99], $sz[100]) = split(',',$myrow_s['size']);

$sz[0]=trim($sz[0]);$sz[1]=trim($sz[1]);$sz[2]=trim($sz[2]);$sz[3]=trim($sz[3]);
$sz[4]=trim($sz[4]);$sz[5]=trim($sz[5]);$sz[6]=trim($sz[6]);$sz[7]=trim($sz[7]);
$sz[8]=trim($sz[8]);$sz[9]=trim($sz[9]);$sz[10]=trim($sz[10]);$sz[11]=trim($sz[11]);
$sz[12]=trim($sz[12]);$sz[13]=trim($sz[13]);$sz[14]=trim($sz[14]);$sz[15]=trim($sz[15]);
$sz[16]=trim($sz[16]);$sz[17]=trim($sz[17]);$sz[18]=trim($sz[18]);$sz[19]=trim($sz[19]);
$sz[20]=trim($sz[20]);$sz[21]=trim($sz[21]);$sz[22]=trim($sz[22]);$sz[23]=trim($sz[23]);
$sz[24]=trim($sz[24]);$sz[25]=trim($sz[25]);$sz[26]=trim($sz[26]);$sz[27]=trim($sz[27]);
$sz[28]=trim($sz[28]);$sz[29]=trim($sz[29]);$sz[30]=trim($sz[30]);$sz[31]=trim($sz[31]);
$sz[32]=trim($sz[32]);$sz[33]=trim($sz[33]);$sz[34]=trim($sz[34]);$sz[35]=trim($sz[35]);
$sz[36]=trim($sz[36]);$sz[37]=trim($sz[37]);$sz[38]=trim($sz[38]);$sz[39]=trim($sz[39]);
$sz[40]=trim($sz[40]);$sz[41]=trim($sz[41]);$sz[42]=trim($sz[42]);$sz[43]=trim($sz[43]);
$sz[44]=trim($sz[44]);$sz[45]=trim($sz[45]);$sz[46]=trim($sz[46]);$sz[47]=trim($sz[47]);
$sz[48]=trim($sz[48]);$sz[49]=trim($sz[49]);$sz[50]=trim($sz[50]);$sz[51]=trim($sz[51]);
$sz[52]=trim($sz[52]);$sz[53]=trim($sz[53]);$sz[54]=trim($sz[54]);$sz[55]=trim($sz[55]);
$sz[56]=trim($sz[56]);$sz[57]=trim($sz[57]);$sz[58]=trim($sz[58]);$sz[59]=trim($sz[59]);
$sz[60]=trim($sz[60]);$sz[61]=trim($sz[61]);$sz[62]=trim($sz[62]);$sz[63]=trim($sz[63]);
$sz[64]=trim($sz[64]);$sz[65]=trim($sz[65]);$sz[66]=trim($sz[66]);$sz[67]=trim($sz[67]);
$sz[68]=trim($sz[68]);$sz[69]=trim($sz[69]);$sz[70]=trim($sz[70]);$sz[71]=trim($sz[71]);
$sz[72]=trim($sz[72]);$sz[73]=trim($sz[73]);$sz[74]=trim($sz[74]);$sz[75]=trim($sz[75]);
$sz[76]=trim($sz[76]);$sz[77]=trim($sz[77]);$sz[78]=trim($sz[78]);$sz[79]=trim($sz[79]);
$sz[80]=trim($sz[80]);$sz[81]=trim($sz[81]);$sz[82]=trim($sz[82]);$sz[83]=trim($sz[83]);
$sz[84]=trim($sz[84]);$sz[85]=trim($sz[85]);$sz[86]=trim($sz[86]);$sz[87]=trim($sz[87]);
$sz[88]=trim($sz[88]);$sz[89]=trim($sz[89]);$sz[90]=trim($sz[91]);$sz[92]=trim($sz[92]);
$sz[93]=trim($sz[93]);$sz[94]=trim($sz[94]);$sz[95]=trim($sz[95]);$sz[96]=trim($sz[96]);
$sz[97]=trim($sz[97]);$sz[98]=trim($sz[98]);$sz[99]=trim($sz[99]);$sz[100]=trim($sz[100]);
$sz_new=array_filter($sz, "filter");
$count_sz=count($sz_new);
if ($count_sz!='0')
{for ($i_sz=0; $i_sz < $count_sz; $i_sz=$i_sz+1) 
{echo"<nobr><input name='size_vip' type='radio' value='$sz_new[$i_sz]'>$sz_new[$i_sz]</nobr> &shy;" ;}}






printf ("

</form>
</td> 
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Описание:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[info_prod] </td> 
</tr>
</table>
<hr>
</td>
</tr>
</table>");}}}}
while ($myrow_s=mysql_fetch_array($result_s));}

if ($count==0)
{ echo "<br><br><font class='price'>ТОВАРОВ ПО ВАШЕМУ ЗАПРОСУ НЕ НАЙДЕНО!</font><br><br>";}
break;	}
 



case 2: 
{
$result_s = mysql_query ("SELECT * FROM products WHERE price >= '$cena1' and price <= '$cena2' and who!='для мужчин' and fast ='да' ORDER BY model DESC",$db);
$myrow_s= mysql_fetch_array ($result_s);
if ($myrow_s['productID']!='0' and $myrow_s['productID']!='' and (isset ($myrow_s['productID'])))
{do
{$myrow_s[price]=round($myrow_s[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]); printf ("<br>
<table width='612' border='0'  cellspacing='0' cellpadding='0'>
<tr>
<td width='210' height='260' rowspan='3' align='center' bgcolor='#D9E9C9' valign='top'>
<img src='img_prod/$myrow_s[tm]-$myrow_s[model].jpg' alt='НЕТ ФОТО'></td>  
<form action='korzinka.php?productID=$myrow_s[productID]' method='post' name=form>
<td  align='center' bgcolor='#D9E9C9'  class='name_prod'> <a href=product.php?id=$myrow_s[productID]>$myrow_s[vid]  $myrow_s[tm] $myrow_s[model] </a></td> 
<td width='70'  rowspan='2' align='center' bgcolor='#D9E9C9' valign='top'><INPUT type=image src='img/cart_navy.gif' width='57' height='58' name='submit'></input></td>
</tr>
<tr>
 <td  bgcolor='#D9E9C9' valign='top' align='center'><b class='text'>Цена: </b><b class='price'> $myrow_s[price]  </b><b class='text'> грн.</b> <hr></td>
</tr>
<tr>
<td width='370'  bgcolor='#D9E9C9' valign='top' colspan='2'>
<table width='370' border='0'  cellspacing='5' cellpadding='5'>
<tr>
<td width='100' align='left' bgcolor='#D9E9C9'  class='text'>Код товара</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[productID]</td> 
</tr>
<tr>
<td width='100' align='left' bgcolor='#D9E9C9'  class='text'>Цвет</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");
echo"<nobr><input name='color_vip' type='radio' value='не указано' checked>не указано</nobr><br>" ;
list($color[0], $color[1], $color[2], $color[3], $color[4],  $color[5], $color[6],  $color[7], $color[8], $color[9], $color[10], $color[11], $color[12], $color[13], $color[14], $color[15], $color[16], $color[17],  $color[18],  $color[19],$color[20]) = split(',',$myrow_s[color]);
$color[0]=trim($color[0]);$color[1]=trim($color[1]);$color[2]=trim($color[2]);$color[3]=trim($color[3]);
$color[4]=trim($color[4]);$color[5]=trim($color[5]);$color[6]=trim($color[6]);$color[7]=trim($color[7]);
$color[8]=trim($color[8]);$color[9]=trim($color[9]);$color[10]=trim($color[10]);$color[11]=trim($color[11]);
$color[12]=trim($color[12]);$color[13]=trim($color[13]);$color[14]=trim($color[14]);$color[15]=trim($color[15]);
$color[16]=trim($color[16]);$color[17]=trim($color[17]);$color[18]=trim($color[18]);$color[19]=trim($color[19]);
$color_new=array_filter($color, "filter");
$count_color=count($color_new);

if ($count_color!='0')
{for ($i_color=0; $i_color < $count_color; $i_color=$i_color+1) 
{echo"<nobr><input name='color_vip' type='radio' value='$color_new[$i_color]'>$color_new[$i_color]</nobr> &shy;" ;}}

printf ("
</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Размеры:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");

echo "<nobr><input name='size_vip' type='radio' value='не указано' checked>не указано</nobr>" ;

list($sz[0], $sz[1], $sz[2], $sz[3], $sz[4],  $sz[5], $sz[6],  $sz[7], $sz[8], $sz[9], $sz[10], $sz[11], $sz[12], $sz[13], $sz[14], $sz[15], $sz[16], $sz[17],  $sz[18],  $sz[19], $sz[20], $sz[21], $sz[22], $sz[23], $sz[24],  $sz[25], $sz[26],  $sz[27], $sz[28], $sz[29], $sz[30], $sz[31], $sz[32], $sz[33], $sz[34], $sz[35], $sz[36], $sz[37],  $sz[38],  $sz[39], $sz[40], $sz[41], $sz[42], $sz[43], $sz[44],  $sz[45], $sz[46],  $sz[47], $sz[48], $sz[49], $sz[50], $sz[51], $sz[52], $sz[53], $sz[54], $sz[55], $sz[56], $sz[57],  $sz[58],  $sz[59], $sz[60], $sz[61], $sz[62], $sz[63], $sz[64],  $sz[65], $sz[66],  $sz[67], $sz[68], $sz[69], $sz[70], $sz[71], $sz[72], $sz[73], $sz[74], $sz[75], $sz[76], $sz[77],  $sz[78],  $sz[79], $sz[80], $sz[81], $sz[82], $sz[83], $sz[84],  $sz[85], $sz[86],  $sz[87], $sz[88], $sz[89], $sz[90], $sz[91], $sz[92], $sz[93], $sz[94], $sz[95], $sz[96], $sz[97],  $sz[98],  $sz[99], $sz[100]) = split(',',$myrow_s['size']);

$sz[0]=trim($sz[0]);$sz[1]=trim($sz[1]);$sz[2]=trim($sz[2]);$sz[3]=trim($sz[3]);
$sz[4]=trim($sz[4]);$sz[5]=trim($sz[5]);$sz[6]=trim($sz[6]);$sz[7]=trim($sz[7]);
$sz[8]=trim($sz[8]);$sz[9]=trim($sz[9]);$sz[10]=trim($sz[10]);$sz[11]=trim($sz[11]);
$sz[12]=trim($sz[12]);$sz[13]=trim($sz[13]);$sz[14]=trim($sz[14]);$sz[15]=trim($sz[15]);
$sz[16]=trim($sz[16]);$sz[17]=trim($sz[17]);$sz[18]=trim($sz[18]);$sz[19]=trim($sz[19]);
$sz[20]=trim($sz[20]);$sz[21]=trim($sz[21]);$sz[22]=trim($sz[22]);$sz[23]=trim($sz[23]);
$sz[24]=trim($sz[24]);$sz[25]=trim($sz[25]);$sz[26]=trim($sz[26]);$sz[27]=trim($sz[27]);
$sz[28]=trim($sz[28]);$sz[29]=trim($sz[29]);$sz[30]=trim($sz[30]);$sz[31]=trim($sz[31]);
$sz[32]=trim($sz[32]);$sz[33]=trim($sz[33]);$sz[34]=trim($sz[34]);$sz[35]=trim($sz[35]);
$sz[36]=trim($sz[36]);$sz[37]=trim($sz[37]);$sz[38]=trim($sz[38]);$sz[39]=trim($sz[39]);
$sz[40]=trim($sz[40]);$sz[41]=trim($sz[41]);$sz[42]=trim($sz[42]);$sz[43]=trim($sz[43]);
$sz[44]=trim($sz[44]);$sz[45]=trim($sz[45]);$sz[46]=trim($sz[46]);$sz[47]=trim($sz[47]);
$sz[48]=trim($sz[48]);$sz[49]=trim($sz[49]);$sz[50]=trim($sz[50]);$sz[51]=trim($sz[51]);
$sz[52]=trim($sz[52]);$sz[53]=trim($sz[53]);$sz[54]=trim($sz[54]);$sz[55]=trim($sz[55]);
$sz[56]=trim($sz[56]);$sz[57]=trim($sz[57]);$sz[58]=trim($sz[58]);$sz[59]=trim($sz[59]);
$sz[60]=trim($sz[60]);$sz[61]=trim($sz[61]);$sz[62]=trim($sz[62]);$sz[63]=trim($sz[63]);
$sz[64]=trim($sz[64]);$sz[65]=trim($sz[65]);$sz[66]=trim($sz[66]);$sz[67]=trim($sz[67]);
$sz[68]=trim($sz[68]);$sz[69]=trim($sz[69]);$sz[70]=trim($sz[70]);$sz[71]=trim($sz[71]);
$sz[72]=trim($sz[72]);$sz[73]=trim($sz[73]);$sz[74]=trim($sz[74]);$sz[75]=trim($sz[75]);
$sz[76]=trim($sz[76]);$sz[77]=trim($sz[77]);$sz[78]=trim($sz[78]);$sz[79]=trim($sz[79]);
$sz[80]=trim($sz[80]);$sz[81]=trim($sz[81]);$sz[82]=trim($sz[82]);$sz[83]=trim($sz[83]);
$sz[84]=trim($sz[84]);$sz[85]=trim($sz[85]);$sz[86]=trim($sz[86]);$sz[87]=trim($sz[87]);
$sz[88]=trim($sz[88]);$sz[89]=trim($sz[89]);$sz[90]=trim($sz[91]);$sz[92]=trim($sz[92]);
$sz[93]=trim($sz[93]);$sz[94]=trim($sz[94]);$sz[95]=trim($sz[95]);$sz[96]=trim($sz[96]);
$sz[97]=trim($sz[97]);$sz[98]=trim($sz[98]);$sz[99]=trim($sz[99]);$sz[100]=trim($sz[100]);
$sz_new=array_filter($sz, "filter");
$count_sz=count($sz_new);
if ($count_sz!='0')
{for ($i_sz=0; $i_sz < $count_sz; $i_sz=$i_sz+1) 
{echo"<nobr><input name='size_vip' type='radio' value='$sz_new[$i_sz]'>$sz_new[$i_sz]</nobr> &shy;" ;}}






printf ("

</form>
</td> 
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Описание:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[info_prod] </td> 
</tr>
</table>
<hr>
</td>
</tr>
</table>");}
while ($myrow_s=mysql_fetch_array($result_s));}

else { echo "<br><br><font class='price'>ТОВАРОВ ПО ВАШЕМУ ЗАПРОСУ НЕ НАЙДЕНО!</font><br><br>";}

break;	}


case 3: 
{
$result_s = mysql_query ("SELECT * FROM products WHERE price >= '$cena1' and price <= '$cena2' 
and who!='для мужчин' and fast='да' ORDER BY model DESC",$db);
$myrow_s= mysql_fetch_array ($result_s);
$count=0;


if ($myrow_s['productID']!='0' and $myrow_s['productID']!='' and (isset ($myrow_s['productID'])))
{do
{    $size_test=strpos($myrow_s['size'], $sise_sort);
 	 if ($size_test =='true' or $size_test !='')
	{   $count=1+$count; $myrow_s[price]=round($myrow_s[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);
		printf ("<br>
<table width='612' border='0'  cellspacing='0' cellpadding='0'>
<tr>
<td width='210' height='260' rowspan='3' align='center' bgcolor='#D9E9C9' valign='top'>
<img src='img_prod/$myrow_s[tm]-$myrow_s[model].jpg' alt='НЕТ ФОТО'></td>  
<form action='korzinka.php?productID=$myrow_s[productID]' method='post' name=form>
<td  align='center' bgcolor='#D9E9C9'  class='name_prod'> <a href=product.php?id=$myrow_s[productID]>$myrow_s[vid]  $myrow_s[tm] $myrow_s[model] </a></td> 
<td width='70'  rowspan='2' align='center' bgcolor='#D9E9C9' valign='top'><INPUT type=image src='img/cart_navy.gif' width='57'  name='submit'></input></td>
</tr>
<tr>
 <td  bgcolor='#D9E9C9' valign='top' align='center'><b class='text'>Цена: </b><b class='price'> $myrow_s[price]  </b><b class='text'> грн.</b> <hr></td>
</tr>
<tr>
<td width='370'  bgcolor='#D9E9C9' valign='top' colspan='2'>
<table width='370' border='0'  cellspacing='5' cellpadding='5'>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Код товара</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[productID]</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Цвет</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");
echo"<nobr><input name='color_vip' type='radio' value='не указано' checked>не указано</nobr><br>" ;
list($color[0], $color[1], $color[2], $color[3], $color[4],  $color[5], $color[6],  $color[7], $color[8], $color[9], $color[10], $color[11], $color[12], $color[13], $color[14], $color[15], $color[16], $color[17],  $color[18],  $color[19],$color[20]) = split(',',$myrow_s[color]);
$color[0]=trim($color[0]);$color[1]=trim($color[1]);$color[2]=trim($color[2]);$color[3]=trim($color[3]);
$color[4]=trim($color[4]);$color[5]=trim($color[5]);$color[6]=trim($color[6]);$color[7]=trim($color[7]);
$color[8]=trim($color[8]);$color[9]=trim($color[9]);$color[10]=trim($color[10]);$color[11]=trim($color[11]);
$color[12]=trim($color[12]);$color[13]=trim($color[13]);$color[14]=trim($color[14]);$color[15]=trim($color[15]);
$color[16]=trim($color[16]);$color[17]=trim($color[17]);$color[18]=trim($color[18]);$color[19]=trim($color[19]);
$color_new=array_filter($color, "filter");
$count_color=count($color_new);

if ($count_color!='0')
{for ($i_color=0; $i_color < $count_color; $i_color=$i_color+1) 
{echo"<nobr><input name='color_vip' type='radio' value='$color_new[$i_color]'>$color_new[$i_color]</nobr> &shy;" ;}}

printf ("
</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Размеры:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");

echo "<nobr><input name='size_vip' type='radio' value='не указано' checked>не указано</nobr>" ;

list($sz[0], $sz[1], $sz[2], $sz[3], $sz[4],  $sz[5], $sz[6],  $sz[7], $sz[8], $sz[9], $sz[10], $sz[11], $sz[12], $sz[13], $sz[14], $sz[15], $sz[16], $sz[17],  $sz[18],  $sz[19], $sz[20], $sz[21], $sz[22], $sz[23], $sz[24],  $sz[25], $sz[26],  $sz[27], $sz[28], $sz[29], $sz[30], $sz[31], $sz[32], $sz[33], $sz[34], $sz[35], $sz[36], $sz[37],  $sz[38],  $sz[39], $sz[40], $sz[41], $sz[42], $sz[43], $sz[44],  $sz[45], $sz[46],  $sz[47], $sz[48], $sz[49], $sz[50], $sz[51], $sz[52], $sz[53], $sz[54], $sz[55], $sz[56], $sz[57],  $sz[58],  $sz[59], $sz[60], $sz[61], $sz[62], $sz[63], $sz[64],  $sz[65], $sz[66],  $sz[67], $sz[68], $sz[69], $sz[70], $sz[71], $sz[72], $sz[73], $sz[74], $sz[75], $sz[76], $sz[77],  $sz[78],  $sz[79], $sz[80], $sz[81], $sz[82], $sz[83], $sz[84],  $sz[85], $sz[86],  $sz[87], $sz[88], $sz[89], $sz[90], $sz[91], $sz[92], $sz[93], $sz[94], $sz[95], $sz[96], $sz[97],  $sz[98],  $sz[99], $sz[100]) = split(',',$myrow_s['size']);

$sz[0]=trim($sz[0]);$sz[1]=trim($sz[1]);$sz[2]=trim($sz[2]);$sz[3]=trim($sz[3]);
$sz[4]=trim($sz[4]);$sz[5]=trim($sz[5]);$sz[6]=trim($sz[6]);$sz[7]=trim($sz[7]);
$sz[8]=trim($sz[8]);$sz[9]=trim($sz[9]);$sz[10]=trim($sz[10]);$sz[11]=trim($sz[11]);
$sz[12]=trim($sz[12]);$sz[13]=trim($sz[13]);$sz[14]=trim($sz[14]);$sz[15]=trim($sz[15]);
$sz[16]=trim($sz[16]);$sz[17]=trim($sz[17]);$sz[18]=trim($sz[18]);$sz[19]=trim($sz[19]);
$sz[20]=trim($sz[20]);$sz[21]=trim($sz[21]);$sz[22]=trim($sz[22]);$sz[23]=trim($sz[23]);
$sz[24]=trim($sz[24]);$sz[25]=trim($sz[25]);$sz[26]=trim($sz[26]);$sz[27]=trim($sz[27]);
$sz[28]=trim($sz[28]);$sz[29]=trim($sz[29]);$sz[30]=trim($sz[30]);$sz[31]=trim($sz[31]);
$sz[32]=trim($sz[32]);$sz[33]=trim($sz[33]);$sz[34]=trim($sz[34]);$sz[35]=trim($sz[35]);
$sz[36]=trim($sz[36]);$sz[37]=trim($sz[37]);$sz[38]=trim($sz[38]);$sz[39]=trim($sz[39]);
$sz[40]=trim($sz[40]);$sz[41]=trim($sz[41]);$sz[42]=trim($sz[42]);$sz[43]=trim($sz[43]);
$sz[44]=trim($sz[44]);$sz[45]=trim($sz[45]);$sz[46]=trim($sz[46]);$sz[47]=trim($sz[47]);
$sz[48]=trim($sz[48]);$sz[49]=trim($sz[49]);$sz[50]=trim($sz[50]);$sz[51]=trim($sz[51]);
$sz[52]=trim($sz[52]);$sz[53]=trim($sz[53]);$sz[54]=trim($sz[54]);$sz[55]=trim($sz[55]);
$sz[56]=trim($sz[56]);$sz[57]=trim($sz[57]);$sz[58]=trim($sz[58]);$sz[59]=trim($sz[59]);
$sz[60]=trim($sz[60]);$sz[61]=trim($sz[61]);$sz[62]=trim($sz[62]);$sz[63]=trim($sz[63]);
$sz[64]=trim($sz[64]);$sz[65]=trim($sz[65]);$sz[66]=trim($sz[66]);$sz[67]=trim($sz[67]);
$sz[68]=trim($sz[68]);$sz[69]=trim($sz[69]);$sz[70]=trim($sz[70]);$sz[71]=trim($sz[71]);
$sz[72]=trim($sz[72]);$sz[73]=trim($sz[73]);$sz[74]=trim($sz[74]);$sz[75]=trim($sz[75]);
$sz[76]=trim($sz[76]);$sz[77]=trim($sz[77]);$sz[78]=trim($sz[78]);$sz[79]=trim($sz[79]);
$sz[80]=trim($sz[80]);$sz[81]=trim($sz[81]);$sz[82]=trim($sz[82]);$sz[83]=trim($sz[83]);
$sz[84]=trim($sz[84]);$sz[85]=trim($sz[85]);$sz[86]=trim($sz[86]);$sz[87]=trim($sz[87]);
$sz[88]=trim($sz[88]);$sz[89]=trim($sz[89]);$sz[90]=trim($sz[91]);$sz[92]=trim($sz[92]);
$sz[93]=trim($sz[93]);$sz[94]=trim($sz[94]);$sz[95]=trim($sz[95]);$sz[96]=trim($sz[96]);
$sz[97]=trim($sz[97]);$sz[98]=trim($sz[98]);$sz[99]=trim($sz[99]);$sz[100]=trim($sz[100]);
$sz_new=array_filter($sz, "filter");
$count_sz=count($sz_new);
if ($count_sz!='0')
{for ($i_sz=0; $i_sz < $count_sz; $i_sz=$i_sz+1) 
{echo"<nobr><input name='size_vip' type='radio' value='$sz_new[$i_sz]'>$sz_new[$i_sz]</nobr> &shy;" ;}}






printf ("

</form>
</td> 
<tr>
<td width='100' align='left' bgcolor='#D9E9C9'  class='text'>Описание:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[info_prod] </td> 
</tr>
</table>
<hr>
</td>
</tr>
</table>");}}
while ($myrow_s=mysql_fetch_array($result_s));}

if ($count==0)
{ echo "<br><br><font class='price'>ТОВАРОВ ПО ВАШЕМУ ЗАПРОСУ НЕ НАЙДЕНО!</font><br><br>";}
break;	}
 

 case 4: 
{
$result_s = mysql_query ("SELECT * FROM products WHERE price >= '$cena1' and price <= '$cena2' 
and who!='для мужчин' and fast='да' ORDER BY model DESC",$db);
$myrow_s= mysql_fetch_array ($result_s);
$count=0;


if ($myrow_s['productID']!='0' and $myrow_s['productID']!='' and (isset ($myrow_s['productID'])))
{do
{    $size_test=strpos($myrow_s['size'], $sise_sort);
          
	 $col_test=strpos($myrow_s['color'], $color_sort);
	 

 	 if ($size_test =='true' or $size_test !='')
	 	         {if ($col_test =='true' or $col_test !='')
	 
	    {$count=1+$count; $myrow_s[price]=round($myrow_s[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);
		printf ("<br>
<table width='612' border='0'  cellspacing='0' cellpadding='0'>
<tr>
<td width='210' height='260' rowspan='3' align='center' bgcolor='#D9E9C9' valign='top'>
<img src='img_prod/$myrow_s[tm]-$myrow_s[model].jpg' alt='НЕТ ФОТО'></td>  
<form action='korzinka.php?productID=$myrow_s[productID]' method='post' name=form>
<td  align='center' bgcolor='#D9E9C9'  class='name_prod'> <a href=product.php?id=$myrow_s[productID]>$myrow_s[vid]  $myrow_s[tm] $myrow_s[model] </a></td> 
<td width='70'  rowspan='2' align='center' bgcolor='#D9E9C9' valign='top'><INPUT type=image src='img/cart_navy.gif' width='57'  name='submit'></input></td>
</tr>
<tr>
 <td  bgcolor='#D9E9C9' valign='top' align='center'><b class='text'>Цена: </b><b class='price'> $myrow_s[price]  </b><b class='text'> грн.</b> <hr></td>
</tr>
<tr>
<td width='370'  bgcolor='#D9E9C9' valign='top' colspan='2'>
<table width='370' border='0'  cellspacing='5' cellpadding='5'>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Код товара</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[productID]</td> 
</tr>
<tr>
<td width='100' align='left' bgcolor='#D9E9C9'  class='text'>Цвет</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");
echo"<nobr><input name='color_vip' type='radio' value='не указано' checked>не указано</nobr><br>" ;
list($color[0], $color[1], $color[2], $color[3], $color[4],  $color[5], $color[6],  $color[7], $color[8], $color[9], $color[10], $color[11], $color[12], $color[13], $color[14], $color[15], $color[16], $color[17],  $color[18],  $color[19],$color[20]) = split(',',$myrow_s[color]);
$color[0]=trim($color[0]);$color[1]=trim($color[1]);$color[2]=trim($color[2]);$color[3]=trim($color[3]);
$color[4]=trim($color[4]);$color[5]=trim($color[5]);$color[6]=trim($color[6]);$color[7]=trim($color[7]);
$color[8]=trim($color[8]);$color[9]=trim($color[9]);$color[10]=trim($color[10]);$color[11]=trim($color[11]);
$color[12]=trim($color[12]);$color[13]=trim($color[13]);$color[14]=trim($color[14]);$color[15]=trim($color[15]);
$color[16]=trim($color[16]);$color[17]=trim($color[17]);$color[18]=trim($color[18]);$color[19]=trim($color[19]);
$color_new=array_filter($color, "filter");
$count_color=count($color_new);

if ($count_color!='0')
{for ($i_color=0; $i_color < $count_color; $i_color=$i_color+1) 
{echo"<nobr><input name='color_vip' type='radio' value='$color_new[$i_color]'>$color_new[$i_color]</nobr> &shy;" ;}}

printf ("
</td> 
</tr>
<tr>
<td width='100' align='left' bgcolor='#D9E9C9'  class='text'>Размеры:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");

echo "<nobr><input name='size_vip' type='radio' value='не указано' checked>не указано</nobr>" ;

list($sz[0], $sz[1], $sz[2], $sz[3], $sz[4],  $sz[5], $sz[6],  $sz[7], $sz[8], $sz[9], $sz[10], $sz[11], $sz[12], $sz[13], $sz[14], $sz[15], $sz[16], $sz[17],  $sz[18],  $sz[19], $sz[20], $sz[21], $sz[22], $sz[23], $sz[24],  $sz[25], $sz[26],  $sz[27], $sz[28], $sz[29], $sz[30], $sz[31], $sz[32], $sz[33], $sz[34], $sz[35], $sz[36], $sz[37],  $sz[38],  $sz[39], $sz[40], $sz[41], $sz[42], $sz[43], $sz[44],  $sz[45], $sz[46],  $sz[47], $sz[48], $sz[49], $sz[50], $sz[51], $sz[52], $sz[53], $sz[54], $sz[55], $sz[56], $sz[57],  $sz[58],  $sz[59], $sz[60], $sz[61], $sz[62], $sz[63], $sz[64],  $sz[65], $sz[66],  $sz[67], $sz[68], $sz[69], $sz[70], $sz[71], $sz[72], $sz[73], $sz[74], $sz[75], $sz[76], $sz[77],  $sz[78],  $sz[79], $sz[80], $sz[81], $sz[82], $sz[83], $sz[84],  $sz[85], $sz[86],  $sz[87], $sz[88], $sz[89], $sz[90], $sz[91], $sz[92], $sz[93], $sz[94], $sz[95], $sz[96], $sz[97],  $sz[98],  $sz[99], $sz[100]) = split(',',$myrow_s['size']);

$sz[0]=trim($sz[0]);$sz[1]=trim($sz[1]);$sz[2]=trim($sz[2]);$sz[3]=trim($sz[3]);
$sz[4]=trim($sz[4]);$sz[5]=trim($sz[5]);$sz[6]=trim($sz[6]);$sz[7]=trim($sz[7]);
$sz[8]=trim($sz[8]);$sz[9]=trim($sz[9]);$sz[10]=trim($sz[10]);$sz[11]=trim($sz[11]);
$sz[12]=trim($sz[12]);$sz[13]=trim($sz[13]);$sz[14]=trim($sz[14]);$sz[15]=trim($sz[15]);
$sz[16]=trim($sz[16]);$sz[17]=trim($sz[17]);$sz[18]=trim($sz[18]);$sz[19]=trim($sz[19]);
$sz[20]=trim($sz[20]);$sz[21]=trim($sz[21]);$sz[22]=trim($sz[22]);$sz[23]=trim($sz[23]);
$sz[24]=trim($sz[24]);$sz[25]=trim($sz[25]);$sz[26]=trim($sz[26]);$sz[27]=trim($sz[27]);
$sz[28]=trim($sz[28]);$sz[29]=trim($sz[29]);$sz[30]=trim($sz[30]);$sz[31]=trim($sz[31]);
$sz[32]=trim($sz[32]);$sz[33]=trim($sz[33]);$sz[34]=trim($sz[34]);$sz[35]=trim($sz[35]);
$sz[36]=trim($sz[36]);$sz[37]=trim($sz[37]);$sz[38]=trim($sz[38]);$sz[39]=trim($sz[39]);
$sz[40]=trim($sz[40]);$sz[41]=trim($sz[41]);$sz[42]=trim($sz[42]);$sz[43]=trim($sz[43]);
$sz[44]=trim($sz[44]);$sz[45]=trim($sz[45]);$sz[46]=trim($sz[46]);$sz[47]=trim($sz[47]);
$sz[48]=trim($sz[48]);$sz[49]=trim($sz[49]);$sz[50]=trim($sz[50]);$sz[51]=trim($sz[51]);
$sz[52]=trim($sz[52]);$sz[53]=trim($sz[53]);$sz[54]=trim($sz[54]);$sz[55]=trim($sz[55]);
$sz[56]=trim($sz[56]);$sz[57]=trim($sz[57]);$sz[58]=trim($sz[58]);$sz[59]=trim($sz[59]);
$sz[60]=trim($sz[60]);$sz[61]=trim($sz[61]);$sz[62]=trim($sz[62]);$sz[63]=trim($sz[63]);
$sz[64]=trim($sz[64]);$sz[65]=trim($sz[65]);$sz[66]=trim($sz[66]);$sz[67]=trim($sz[67]);
$sz[68]=trim($sz[68]);$sz[69]=trim($sz[69]);$sz[70]=trim($sz[70]);$sz[71]=trim($sz[71]);
$sz[72]=trim($sz[72]);$sz[73]=trim($sz[73]);$sz[74]=trim($sz[74]);$sz[75]=trim($sz[75]);
$sz[76]=trim($sz[76]);$sz[77]=trim($sz[77]);$sz[78]=trim($sz[78]);$sz[79]=trim($sz[79]);
$sz[80]=trim($sz[80]);$sz[81]=trim($sz[81]);$sz[82]=trim($sz[82]);$sz[83]=trim($sz[83]);
$sz[84]=trim($sz[84]);$sz[85]=trim($sz[85]);$sz[86]=trim($sz[86]);$sz[87]=trim($sz[87]);
$sz[88]=trim($sz[88]);$sz[89]=trim($sz[89]);$sz[90]=trim($sz[91]);$sz[92]=trim($sz[92]);
$sz[93]=trim($sz[93]);$sz[94]=trim($sz[94]);$sz[95]=trim($sz[95]);$sz[96]=trim($sz[96]);
$sz[97]=trim($sz[97]);$sz[98]=trim($sz[98]);$sz[99]=trim($sz[99]);$sz[100]=trim($sz[100]);
$sz_new=array_filter($sz, "filter");
$count_sz=count($sz_new);
if ($count_sz!='0')
{for ($i_sz=0; $i_sz < $count_sz; $i_sz=$i_sz+1) 
{echo"<nobr><input name='size_vip' type='radio' value='$sz_new[$i_sz]'>$sz_new[$i_sz]</nobr> &shy;" ;}}






printf ("

</form>
</td> 
<tr>
<td width='100' align='left' bgcolor='#D9E9C9'  class='text'>Описание:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[info_prod] </td> 
</tr>
</table>
<hr>
</td>
</tr>
</table>");}}}
while ($myrow_s=mysql_fetch_array($result_s));}

if ($count==0)
{ echo "<br><br><font class='price'>ТОВАРОВ ПО ВАШЕМУ ЗАПРОСУ НЕ НАЙДЕНО!</font><br><br>";}
break;	}
 



 
case 5: 
{
$result_s = mysql_query ("SELECT * FROM products WHERE price >= '$cena1' and price <= '$cena2' 
and who!='для мужчин' and fast='да' ORDER BY model DESC",$db);
$myrow_s= mysql_fetch_array ($result_s);
$count=0;


if ($myrow_s['productID']!='0' and $myrow_s['productID']!='' and (isset ($myrow_s['productID'])))
{do
{    $vid_tip=$myrow_s['vid'].', '.$myrow_s['tip'];
     $vid_test=strpos($vid_tip, $vid_sort);
 	 if ($vid_test =='true' or $vid_test !='')
	{   $count=1+$count; $myrow_s[price]=round($myrow_s[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);
		printf ("<br>
<table width='612' border='0'  cellspacing='0' cellpadding='0'>
<tr>
<td width='210' height='260' rowspan='3' align='center' bgcolor='#D9E9C9' valign='top'>
<img src='img_prod/$myrow_s[tm]-$myrow_s[model].jpg' alt='НЕТ ФОТО'></td>  
<form action='korzinka.php?productID=$myrow_s[productID]' method='post' name=form>
<td  align='center' bgcolor='#D9E9C9'  class='name_prod'> <a href=product.php?id=$myrow_s[productID]>$myrow_s[vid]  $myrow_s[tm] $myrow_s[model] </a></td> 
<td width='70'  rowspan='2' align='center' bgcolor='#D9E9C9' valign='top'><INPUT type=image src='img/cart_navy.gif' width='57' height='58' name='submit'></input></td>
</tr>
<tr>
 <td  bgcolor='#D9E9C9' valign='top' align='center'><b class='text'>Цена: </b><b class='price'> $myrow_s[price]  </b><b class='text'> грн.</b> <hr></td>
</tr>
<tr>
<td width='370'  bgcolor='#D9E9C9' valign='top' colspan='2'>
<table width='370' border='0'  cellspacing='5' cellpadding='5'>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Код товара</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[productID]</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Цвет</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");
echo"<nobr><input name='color_vip' type='radio' value='не указано' checked>не указано</nobr><br>" ;
list($color[0], $color[1], $color[2], $color[3], $color[4],  $color[5], $color[6],  $color[7], $color[8], $color[9], $color[10], $color[11], $color[12], $color[13], $color[14], $color[15], $color[16], $color[17],  $color[18],  $color[19],$color[20]) = split(',',$myrow_s[color]);
$color[0]=trim($color[0]);$color[1]=trim($color[1]);$color[2]=trim($color[2]);$color[3]=trim($color[3]);
$color[4]=trim($color[4]);$color[5]=trim($color[5]);$color[6]=trim($color[6]);$color[7]=trim($color[7]);
$color[8]=trim($color[8]);$color[9]=trim($color[9]);$color[10]=trim($color[10]);$color[11]=trim($color[11]);
$color[12]=trim($color[12]);$color[13]=trim($color[13]);$color[14]=trim($color[14]);$color[15]=trim($color[15]);
$color[16]=trim($color[16]);$color[17]=trim($color[17]);$color[18]=trim($color[18]);$color[19]=trim($color[19]);
$color_new=array_filter($color, "filter");
$count_color=count($color_new);

if ($count_color!='0')
{for ($i_color=0; $i_color < $count_color; $i_color=$i_color+1) 
{echo"<nobr><input name='color_vip' type='radio' value='$color_new[$i_color]'>$color_new[$i_color]</nobr> &shy;" ;}}

printf ("
</td> 
</tr>
<tr>
<td width='100' align='left' bgcolor='#D9E9C9'  class='text'>Размеры:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");

echo "<nobr><input name='size_vip' type='radio' value='не указано' checked>не указано</nobr>" ;

list($sz[0], $sz[1], $sz[2], $sz[3], $sz[4],  $sz[5], $sz[6],  $sz[7], $sz[8], $sz[9], $sz[10], $sz[11], $sz[12], $sz[13], $sz[14], $sz[15], $sz[16], $sz[17],  $sz[18],  $sz[19], $sz[20], $sz[21], $sz[22], $sz[23], $sz[24],  $sz[25], $sz[26],  $sz[27], $sz[28], $sz[29], $sz[30], $sz[31], $sz[32], $sz[33], $sz[34], $sz[35], $sz[36], $sz[37],  $sz[38],  $sz[39], $sz[40], $sz[41], $sz[42], $sz[43], $sz[44],  $sz[45], $sz[46],  $sz[47], $sz[48], $sz[49], $sz[50], $sz[51], $sz[52], $sz[53], $sz[54], $sz[55], $sz[56], $sz[57],  $sz[58],  $sz[59], $sz[60], $sz[61], $sz[62], $sz[63], $sz[64],  $sz[65], $sz[66],  $sz[67], $sz[68], $sz[69], $sz[70], $sz[71], $sz[72], $sz[73], $sz[74], $sz[75], $sz[76], $sz[77],  $sz[78],  $sz[79], $sz[80], $sz[81], $sz[82], $sz[83], $sz[84],  $sz[85], $sz[86],  $sz[87], $sz[88], $sz[89], $sz[90], $sz[91], $sz[92], $sz[93], $sz[94], $sz[95], $sz[96], $sz[97],  $sz[98],  $sz[99], $sz[100]) = split(',',$myrow_s['size']);

$sz[0]=trim($sz[0]);$sz[1]=trim($sz[1]);$sz[2]=trim($sz[2]);$sz[3]=trim($sz[3]);
$sz[4]=trim($sz[4]);$sz[5]=trim($sz[5]);$sz[6]=trim($sz[6]);$sz[7]=trim($sz[7]);
$sz[8]=trim($sz[8]);$sz[9]=trim($sz[9]);$sz[10]=trim($sz[10]);$sz[11]=trim($sz[11]);
$sz[12]=trim($sz[12]);$sz[13]=trim($sz[13]);$sz[14]=trim($sz[14]);$sz[15]=trim($sz[15]);
$sz[16]=trim($sz[16]);$sz[17]=trim($sz[17]);$sz[18]=trim($sz[18]);$sz[19]=trim($sz[19]);
$sz[20]=trim($sz[20]);$sz[21]=trim($sz[21]);$sz[22]=trim($sz[22]);$sz[23]=trim($sz[23]);
$sz[24]=trim($sz[24]);$sz[25]=trim($sz[25]);$sz[26]=trim($sz[26]);$sz[27]=trim($sz[27]);
$sz[28]=trim($sz[28]);$sz[29]=trim($sz[29]);$sz[30]=trim($sz[30]);$sz[31]=trim($sz[31]);
$sz[32]=trim($sz[32]);$sz[33]=trim($sz[33]);$sz[34]=trim($sz[34]);$sz[35]=trim($sz[35]);
$sz[36]=trim($sz[36]);$sz[37]=trim($sz[37]);$sz[38]=trim($sz[38]);$sz[39]=trim($sz[39]);
$sz[40]=trim($sz[40]);$sz[41]=trim($sz[41]);$sz[42]=trim($sz[42]);$sz[43]=trim($sz[43]);
$sz[44]=trim($sz[44]);$sz[45]=trim($sz[45]);$sz[46]=trim($sz[46]);$sz[47]=trim($sz[47]);
$sz[48]=trim($sz[48]);$sz[49]=trim($sz[49]);$sz[50]=trim($sz[50]);$sz[51]=trim($sz[51]);
$sz[52]=trim($sz[52]);$sz[53]=trim($sz[53]);$sz[54]=trim($sz[54]);$sz[55]=trim($sz[55]);
$sz[56]=trim($sz[56]);$sz[57]=trim($sz[57]);$sz[58]=trim($sz[58]);$sz[59]=trim($sz[59]);
$sz[60]=trim($sz[60]);$sz[61]=trim($sz[61]);$sz[62]=trim($sz[62]);$sz[63]=trim($sz[63]);
$sz[64]=trim($sz[64]);$sz[65]=trim($sz[65]);$sz[66]=trim($sz[66]);$sz[67]=trim($sz[67]);
$sz[68]=trim($sz[68]);$sz[69]=trim($sz[69]);$sz[70]=trim($sz[70]);$sz[71]=trim($sz[71]);
$sz[72]=trim($sz[72]);$sz[73]=trim($sz[73]);$sz[74]=trim($sz[74]);$sz[75]=trim($sz[75]);
$sz[76]=trim($sz[76]);$sz[77]=trim($sz[77]);$sz[78]=trim($sz[78]);$sz[79]=trim($sz[79]);
$sz[80]=trim($sz[80]);$sz[81]=trim($sz[81]);$sz[82]=trim($sz[82]);$sz[83]=trim($sz[83]);
$sz[84]=trim($sz[84]);$sz[85]=trim($sz[85]);$sz[86]=trim($sz[86]);$sz[87]=trim($sz[87]);
$sz[88]=trim($sz[88]);$sz[89]=trim($sz[89]);$sz[90]=trim($sz[91]);$sz[92]=trim($sz[92]);
$sz[93]=trim($sz[93]);$sz[94]=trim($sz[94]);$sz[95]=trim($sz[95]);$sz[96]=trim($sz[96]);
$sz[97]=trim($sz[97]);$sz[98]=trim($sz[98]);$sz[99]=trim($sz[99]);$sz[100]=trim($sz[100]);
$sz_new=array_filter($sz, "filter");
$count_sz=count($sz_new);
if ($count_sz!='0')
{for ($i_sz=0; $i_sz < $count_sz; $i_sz=$i_sz+1) 
{echo"<nobr><input name='size_vip' type='radio' value='$sz_new[$i_sz]'>$sz_new[$i_sz]</nobr> &shy;" ;}}






printf ("

</form>
</td> 
<tr>
<td width='100' align='left' bgcolor='#D9E9C9'  class='text'>Описание:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[info_prod] </td> 
</tr>
</table>
<hr>
</td>
</tr>
</table>");}}
while ($myrow_s=mysql_fetch_array($result_s));}

if ($count==0)
{ echo "<br><br><font class='price'>ТОВАРОВ ПО ВАШЕМУ ЗАПРОСУ НЕ НАЙДЕНО!</font><br><br>";}
break;	}
 

 case 6: 
{
$result_s = mysql_query ("SELECT * FROM products WHERE price >= '$cena1' and price <= '$cena2' 
and who!='для мужчин' and fast='да' ORDER BY model DESC",$db);
$myrow_s= mysql_fetch_array ($result_s);
$count=0;


if ($myrow_s['productID']!='0' and $myrow_s['productID']!='' and (isset ($myrow_s['productID'])))
{do
{    $col_test=strpos($myrow_s['color'], $color_sort);
      if ($col_test =='true' or $col_test !='')
	{   $count=1+$count; $myrow_s[price]=round($myrow_s[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);
		printf ("<br>
<table width='612' border='0'  cellspacing='0' cellpadding='0'>
<tr>
<td width='210' height='260' rowspan='3' align='center' bgcolor='#D9E9C9' valign='top'>
<img src='img_prod/$myrow_s[tm]-$myrow_s[model].jpg' alt='НЕТ ФОТО'></td>  
<form action='korzinka.php?productID=$myrow_s[productID]' method='post' name=form>
<td  align='center' bgcolor='#D9E9C9'  class='name_prod'> <a href=product.php?id=$myrow_s[productID]>$myrow_s[vid]  $myrow_s[tm] $myrow_s[model] </a></td> 
<td width='70'  rowspan='2' align='center' bgcolor='#D9E9C9' valign='top'><INPUT type=image src='img/cart_navy.gif' width='57' height='58' name='submit'></input></td>
</tr>
<tr>
 <td  bgcolor='#D9E9C9' valign='top' align='center'><b class='text'>Цена: </b><b class='price'> $myrow_s[price]  </b><b class='text'> грн.</b> <hr></td>
</tr>
<tr>
<td width='370'  bgcolor='#D9E9C9' valign='top' colspan='2'>
<table width='370' border='0'  cellspacing='5' cellpadding='5'>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Код товара</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[productID]</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Цвет</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");
echo"<nobr><input name='color_vip' type='radio' value='не указано' checked>не указано</nobr><br>" ;
list($color[0], $color[1], $color[2], $color[3], $color[4],  $color[5], $color[6],  $color[7], $color[8], $color[9], $color[10], $color[11], $color[12], $color[13], $color[14], $color[15], $color[16], $color[17],  $color[18],  $color[19],$color[20]) = split(',',$myrow_s[color]);
$color[0]=trim($color[0]);$color[1]=trim($color[1]);$color[2]=trim($color[2]);$color[3]=trim($color[3]);
$color[4]=trim($color[4]);$color[5]=trim($color[5]);$color[6]=trim($color[6]);$color[7]=trim($color[7]);
$color[8]=trim($color[8]);$color[9]=trim($color[9]);$color[10]=trim($color[10]);$color[11]=trim($color[11]);
$color[12]=trim($color[12]);$color[13]=trim($color[13]);$color[14]=trim($color[14]);$color[15]=trim($color[15]);
$color[16]=trim($color[16]);$color[17]=trim($color[17]);$color[18]=trim($color[18]);$color[19]=trim($color[19]);
$color_new=array_filter($color, "filter");
$count_color=count($color_new);

if ($count_color!='0')
{for ($i_color=0; $i_color < $count_color; $i_color=$i_color+1) 
{echo"<nobr><input name='color_vip' type='radio' value='$color_new[$i_color]'>$color_new[$i_color]</nobr> &shy;" ;}}

printf ("
</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Размеры:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");

echo "<nobr><input name='size_vip' type='radio' value='не указано' checked>не указано</nobr>" ;

list($sz[0], $sz[1], $sz[2], $sz[3], $sz[4],  $sz[5], $sz[6],  $sz[7], $sz[8], $sz[9], $sz[10], $sz[11], $sz[12], $sz[13], $sz[14], $sz[15], $sz[16], $sz[17],  $sz[18],  $sz[19], $sz[20], $sz[21], $sz[22], $sz[23], $sz[24],  $sz[25], $sz[26],  $sz[27], $sz[28], $sz[29], $sz[30], $sz[31], $sz[32], $sz[33], $sz[34], $sz[35], $sz[36], $sz[37],  $sz[38],  $sz[39], $sz[40], $sz[41], $sz[42], $sz[43], $sz[44],  $sz[45], $sz[46],  $sz[47], $sz[48], $sz[49], $sz[50], $sz[51], $sz[52], $sz[53], $sz[54], $sz[55], $sz[56], $sz[57],  $sz[58],  $sz[59], $sz[60], $sz[61], $sz[62], $sz[63], $sz[64],  $sz[65], $sz[66],  $sz[67], $sz[68], $sz[69], $sz[70], $sz[71], $sz[72], $sz[73], $sz[74], $sz[75], $sz[76], $sz[77],  $sz[78],  $sz[79], $sz[80], $sz[81], $sz[82], $sz[83], $sz[84],  $sz[85], $sz[86],  $sz[87], $sz[88], $sz[89], $sz[90], $sz[91], $sz[92], $sz[93], $sz[94], $sz[95], $sz[96], $sz[97],  $sz[98],  $sz[99], $sz[100]) = split(',',$myrow_s['size']);

$sz[0]=trim($sz[0]);$sz[1]=trim($sz[1]);$sz[2]=trim($sz[2]);$sz[3]=trim($sz[3]);
$sz[4]=trim($sz[4]);$sz[5]=trim($sz[5]);$sz[6]=trim($sz[6]);$sz[7]=trim($sz[7]);
$sz[8]=trim($sz[8]);$sz[9]=trim($sz[9]);$sz[10]=trim($sz[10]);$sz[11]=trim($sz[11]);
$sz[12]=trim($sz[12]);$sz[13]=trim($sz[13]);$sz[14]=trim($sz[14]);$sz[15]=trim($sz[15]);
$sz[16]=trim($sz[16]);$sz[17]=trim($sz[17]);$sz[18]=trim($sz[18]);$sz[19]=trim($sz[19]);
$sz[20]=trim($sz[20]);$sz[21]=trim($sz[21]);$sz[22]=trim($sz[22]);$sz[23]=trim($sz[23]);
$sz[24]=trim($sz[24]);$sz[25]=trim($sz[25]);$sz[26]=trim($sz[26]);$sz[27]=trim($sz[27]);
$sz[28]=trim($sz[28]);$sz[29]=trim($sz[29]);$sz[30]=trim($sz[30]);$sz[31]=trim($sz[31]);
$sz[32]=trim($sz[32]);$sz[33]=trim($sz[33]);$sz[34]=trim($sz[34]);$sz[35]=trim($sz[35]);
$sz[36]=trim($sz[36]);$sz[37]=trim($sz[37]);$sz[38]=trim($sz[38]);$sz[39]=trim($sz[39]);
$sz[40]=trim($sz[40]);$sz[41]=trim($sz[41]);$sz[42]=trim($sz[42]);$sz[43]=trim($sz[43]);
$sz[44]=trim($sz[44]);$sz[45]=trim($sz[45]);$sz[46]=trim($sz[46]);$sz[47]=trim($sz[47]);
$sz[48]=trim($sz[48]);$sz[49]=trim($sz[49]);$sz[50]=trim($sz[50]);$sz[51]=trim($sz[51]);
$sz[52]=trim($sz[52]);$sz[53]=trim($sz[53]);$sz[54]=trim($sz[54]);$sz[55]=trim($sz[55]);
$sz[56]=trim($sz[56]);$sz[57]=trim($sz[57]);$sz[58]=trim($sz[58]);$sz[59]=trim($sz[59]);
$sz[60]=trim($sz[60]);$sz[61]=trim($sz[61]);$sz[62]=trim($sz[62]);$sz[63]=trim($sz[63]);
$sz[64]=trim($sz[64]);$sz[65]=trim($sz[65]);$sz[66]=trim($sz[66]);$sz[67]=trim($sz[67]);
$sz[68]=trim($sz[68]);$sz[69]=trim($sz[69]);$sz[70]=trim($sz[70]);$sz[71]=trim($sz[71]);
$sz[72]=trim($sz[72]);$sz[73]=trim($sz[73]);$sz[74]=trim($sz[74]);$sz[75]=trim($sz[75]);
$sz[76]=trim($sz[76]);$sz[77]=trim($sz[77]);$sz[78]=trim($sz[78]);$sz[79]=trim($sz[79]);
$sz[80]=trim($sz[80]);$sz[81]=trim($sz[81]);$sz[82]=trim($sz[82]);$sz[83]=trim($sz[83]);
$sz[84]=trim($sz[84]);$sz[85]=trim($sz[85]);$sz[86]=trim($sz[86]);$sz[87]=trim($sz[87]);
$sz[88]=trim($sz[88]);$sz[89]=trim($sz[89]);$sz[90]=trim($sz[91]);$sz[92]=trim($sz[92]);
$sz[93]=trim($sz[93]);$sz[94]=trim($sz[94]);$sz[95]=trim($sz[95]);$sz[96]=trim($sz[96]);
$sz[97]=trim($sz[97]);$sz[98]=trim($sz[98]);$sz[99]=trim($sz[99]);$sz[100]=trim($sz[100]);
$sz_new=array_filter($sz, "filter");
$count_sz=count($sz_new);
if ($count_sz!='0')
{for ($i_sz=0; $i_sz < $count_sz; $i_sz=$i_sz+1) 
{echo"<nobr><input name='size_vip' type='radio' value='$sz_new[$i_sz]'>$sz_new[$i_sz]</nobr> &shy;" ;}}






printf ("

</form>
</td> 
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Описание:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[info_prod] </td> 
</tr>
</table>
<hr>
</td>
</tr>
</table>");}}
while ($myrow_s=mysql_fetch_array($result_s));}

if ($count==0)
{ echo "<br><br><font class='price'>ТОВАРОВ ПО ВАШЕМУ ЗАПРОСУ НЕ НАЙДЕНО!</font><br><br>";}
break;	}
 
case 7: 
{
$result_s = mysql_query ("SELECT * FROM products WHERE price >= '$cena1' and price <= '$cena2' 
and who!='для мужчин' and fast='да' ORDER BY model DESC",$db);
$myrow_s= mysql_fetch_array ($result_s);
$count=0;


if ($myrow_s['productID']!='0' and $myrow_s['productID']!='' and (isset ($myrow_s['productID'])))
{do
{    $vid_tip=$myrow_s['vid'].', '.$myrow_s['tip'];
     $vid_test=strpos($vid_tip, $vid_sort);
	 $col_test=strpos($myrow_s['color'], $color_sort);
	 

 	    if ($vid_test =='true' or $vid_test !='')
	         {if ($col_test =='true' or $col_test !='')
	 
	    {$count=1+$count; $myrow_s[price]=round($myrow_s[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);
		printf ("<br>
<table width='612' border='0'  cellspacing='0' cellpadding='0'>
<tr>
<td width='210' height='260' rowspan='3' align='center' bgcolor='#D9E9C9' valign='top'>
<img src='img_prod/$myrow_s[tm]-$myrow_s[model].jpg' alt='НЕТ ФОТО'></td>  
<form action='korzinka.php?productID=$myrow_s[productID]' method='post' name=form>
<td  align='center' bgcolor='#D9E9C9'  class='name_prod'> <a href=product.php?id=$myrow_s[productID]>$myrow_s[vid]  $myrow_s[tm] $myrow_s[model] </a></td>
<td width='70'  rowspan='2' align='center' bgcolor='#D9E9C9' valign='top'><INPUT type=image src='img/cart_navy.gif' width='57' height='58' name='submit'></input></td>
</tr>
<tr>
 <td  bgcolor='#D9E9C9' valign='top' align='center'><b class='text'>Цена: </b><b class='price'> $myrow_s[price]  </b><b class='text'> грн.</b> <hr></td>
</tr>
<tr>
<td width='370'  bgcolor='#D9E9C9' valign='top' colspan='2'>
<table width='370' border='0'  cellspacing='5' cellpadding='5'>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Код товара</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[productID]</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Цвет</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");
echo"<nobr><input name='color_vip' type='radio' value='не указано' checked>не указано</nobr><br>" ;
list($color[0], $color[1], $color[2], $color[3], $color[4],  $color[5], $color[6],  $color[7], $color[8], $color[9], $color[10], $color[11], $color[12], $color[13], $color[14], $color[15], $color[16], $color[17],  $color[18],  $color[19],$color[20]) = split(',',$myrow_s[color]);
$color[0]=trim($color[0]);$color[1]=trim($color[1]);$color[2]=trim($color[2]);$color[3]=trim($color[3]);
$color[4]=trim($color[4]);$color[5]=trim($color[5]);$color[6]=trim($color[6]);$color[7]=trim($color[7]);
$color[8]=trim($color[8]);$color[9]=trim($color[9]);$color[10]=trim($color[10]);$color[11]=trim($color[11]);
$color[12]=trim($color[12]);$color[13]=trim($color[13]);$color[14]=trim($color[14]);$color[15]=trim($color[15]);
$color[16]=trim($color[16]);$color[17]=trim($color[17]);$color[18]=trim($color[18]);$color[19]=trim($color[19]);
$color_new=array_filter($color, "filter");
$count_color=count($color_new);

if ($count_color!='0')
{for ($i_color=0; $i_color < $count_color; $i_color=$i_color+1) 
{echo"<nobr><input name='color_vip' type='radio' value='$color_new[$i_color]'>$color_new[$i_color]</nobr>  &shy;" ;}}

printf ("
</td> 
</tr>
<tr>
<td width='100' align='left' bgcolor='#D9E9C9'  class='text'>Размеры:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");

echo "<nobr><input name='size_vip' type='radio' value='не указано' checked>не указано</nobr>" ;

list($sz[0], $sz[1], $sz[2], $sz[3], $sz[4],  $sz[5], $sz[6],  $sz[7], $sz[8], $sz[9], $sz[10], $sz[11], $sz[12], $sz[13], $sz[14], $sz[15], $sz[16], $sz[17],  $sz[18],  $sz[19], $sz[20], $sz[21], $sz[22], $sz[23], $sz[24],  $sz[25], $sz[26],  $sz[27], $sz[28], $sz[29], $sz[30], $sz[31], $sz[32], $sz[33], $sz[34], $sz[35], $sz[36], $sz[37],  $sz[38],  $sz[39], $sz[40], $sz[41], $sz[42], $sz[43], $sz[44],  $sz[45], $sz[46],  $sz[47], $sz[48], $sz[49], $sz[50], $sz[51], $sz[52], $sz[53], $sz[54], $sz[55], $sz[56], $sz[57],  $sz[58],  $sz[59], $sz[60], $sz[61], $sz[62], $sz[63], $sz[64],  $sz[65], $sz[66],  $sz[67], $sz[68], $sz[69], $sz[70], $sz[71], $sz[72], $sz[73], $sz[74], $sz[75], $sz[76], $sz[77],  $sz[78],  $sz[79], $sz[80], $sz[81], $sz[82], $sz[83], $sz[84],  $sz[85], $sz[86],  $sz[87], $sz[88], $sz[89], $sz[90], $sz[91], $sz[92], $sz[93], $sz[94], $sz[95], $sz[96], $sz[97],  $sz[98],  $sz[99], $sz[100]) = split(',',$myrow_s['size']);

$sz[0]=trim($sz[0]);$sz[1]=trim($sz[1]);$sz[2]=trim($sz[2]);$sz[3]=trim($sz[3]);
$sz[4]=trim($sz[4]);$sz[5]=trim($sz[5]);$sz[6]=trim($sz[6]);$sz[7]=trim($sz[7]);
$sz[8]=trim($sz[8]);$sz[9]=trim($sz[9]);$sz[10]=trim($sz[10]);$sz[11]=trim($sz[11]);
$sz[12]=trim($sz[12]);$sz[13]=trim($sz[13]);$sz[14]=trim($sz[14]);$sz[15]=trim($sz[15]);
$sz[16]=trim($sz[16]);$sz[17]=trim($sz[17]);$sz[18]=trim($sz[18]);$sz[19]=trim($sz[19]);
$sz[20]=trim($sz[20]);$sz[21]=trim($sz[21]);$sz[22]=trim($sz[22]);$sz[23]=trim($sz[23]);
$sz[24]=trim($sz[24]);$sz[25]=trim($sz[25]);$sz[26]=trim($sz[26]);$sz[27]=trim($sz[27]);
$sz[28]=trim($sz[28]);$sz[29]=trim($sz[29]);$sz[30]=trim($sz[30]);$sz[31]=trim($sz[31]);
$sz[32]=trim($sz[32]);$sz[33]=trim($sz[33]);$sz[34]=trim($sz[34]);$sz[35]=trim($sz[35]);
$sz[36]=trim($sz[36]);$sz[37]=trim($sz[37]);$sz[38]=trim($sz[38]);$sz[39]=trim($sz[39]);
$sz[40]=trim($sz[40]);$sz[41]=trim($sz[41]);$sz[42]=trim($sz[42]);$sz[43]=trim($sz[43]);
$sz[44]=trim($sz[44]);$sz[45]=trim($sz[45]);$sz[46]=trim($sz[46]);$sz[47]=trim($sz[47]);
$sz[48]=trim($sz[48]);$sz[49]=trim($sz[49]);$sz[50]=trim($sz[50]);$sz[51]=trim($sz[51]);
$sz[52]=trim($sz[52]);$sz[53]=trim($sz[53]);$sz[54]=trim($sz[54]);$sz[55]=trim($sz[55]);
$sz[56]=trim($sz[56]);$sz[57]=trim($sz[57]);$sz[58]=trim($sz[58]);$sz[59]=trim($sz[59]);
$sz[60]=trim($sz[60]);$sz[61]=trim($sz[61]);$sz[62]=trim($sz[62]);$sz[63]=trim($sz[63]);
$sz[64]=trim($sz[64]);$sz[65]=trim($sz[65]);$sz[66]=trim($sz[66]);$sz[67]=trim($sz[67]);
$sz[68]=trim($sz[68]);$sz[69]=trim($sz[69]);$sz[70]=trim($sz[70]);$sz[71]=trim($sz[71]);
$sz[72]=trim($sz[72]);$sz[73]=trim($sz[73]);$sz[74]=trim($sz[74]);$sz[75]=trim($sz[75]);
$sz[76]=trim($sz[76]);$sz[77]=trim($sz[77]);$sz[78]=trim($sz[78]);$sz[79]=trim($sz[79]);
$sz[80]=trim($sz[80]);$sz[81]=trim($sz[81]);$sz[82]=trim($sz[82]);$sz[83]=trim($sz[83]);
$sz[84]=trim($sz[84]);$sz[85]=trim($sz[85]);$sz[86]=trim($sz[86]);$sz[87]=trim($sz[87]);
$sz[88]=trim($sz[88]);$sz[89]=trim($sz[89]);$sz[90]=trim($sz[91]);$sz[92]=trim($sz[92]);
$sz[93]=trim($sz[93]);$sz[94]=trim($sz[94]);$sz[95]=trim($sz[95]);$sz[96]=trim($sz[96]);
$sz[97]=trim($sz[97]);$sz[98]=trim($sz[98]);$sz[99]=trim($sz[99]);$sz[100]=trim($sz[100]);
$sz_new=array_filter($sz, "filter");
$count_sz=count($sz_new);
if ($count_sz!='0')
{for ($i_sz=0; $i_sz < $count_sz; $i_sz=$i_sz+1) 
{echo"<nobr><input name='size_vip' type='radio' value='$sz_new[$i_sz]'>$sz_new[$i_sz]</nobr> &shy;" ;}}






printf ("

</form>
</td> 
<tr>
<td width='100' align='left' bgcolor='#D9E9C9'  class='text'>Описание:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[info_prod] </td> 
</tr>
</table>
<hr>
</td>
</tr>
</table>");}}}
while ($myrow_s=mysql_fetch_array($result_s));}

if ($count==0)
{ echo "<br><br><font class='price'>ТОВАРОВ ПО ВАШЕМУ ЗАПРОСУ НЕ НАЙДЕНО!</font><br><br>";}
break;	}
 
 
 
 
 
 
 

 
case 8: 
{
$result_s = mysql_query ("SELECT * FROM products WHERE price >= '$cena1' and price <= '$cena2' 
and who!='для мужчин' and fast='да' ORDER BY model DESC",$db);
$myrow_s= mysql_fetch_array ($result_s);
$count=0;


if ($myrow_s['productID']!='0' and $myrow_s['productID']!='' and (isset ($myrow_s['productID'])))
{do
{    $size_test=strpos($myrow_s['size'], $sise_sort);
           $vid_tip=$myrow_s['vid'].', '.$myrow_s['tip'];
     $vid_test=strpos($vid_tip, $vid_sort);
	 	 

 	 if ($size_test =='true' or $size_test !='')
	 {   if ($vid_test =='true' or $vid_test !='')
	        	 
	    {$count=1+$count; $myrow_s[price]=round($myrow_s[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);
		printf ("<br>
<table width='612' border='0'  cellspacing='0' cellpadding='0'>
<tr>
<td width='210' height='260' rowspan='3' align='center' bgcolor='#D9E9C9' valign='top'>
<img src='img_prod/$myrow_s[tm]-$myrow_s[model].jpg' alt='НЕТ ФОТО'></td>  
<form action='korzinka.php?productID=$myrow_s[productID]' method='post' name=form>
<td  align='center' bgcolor='#D9E9C9'  class='name_prod'> <a href=product.php?id=$myrow_s[productID]>$myrow_s[vid]  $myrow_s[tm] $myrow_s[model] </a></td> 
<td width='70'  rowspan='2' align='center' bgcolor='#D9E9C9' valign='top'><INPUT type=image src='img/cart_navy.gif' width='57' height='58' name='submit'></input></td>
</tr>
<tr>
 <td  bgcolor='#D9E9C9' valign='top' align='center'><b class='text'>Цена: </b><b class='price'> $myrow_s[price]  </b><b class='text'> грн.</b> <hr></td>
</tr>
<tr>
<td width='370'  bgcolor='#D9E9C9' valign='top' colspan='2'>
<table width='370' border='0'  cellspacing='5' cellpadding='5'>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Код товара</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[productID]</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Цвет</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");
echo"<nobr><input name='color_vip' type='radio' value='не указано' checked>не указано</nobr><br>" ;
list($color[0], $color[1], $color[2], $color[3], $color[4],  $color[5], $color[6],  $color[7], $color[8], $color[9], $color[10], $color[11], $color[12], $color[13], $color[14], $color[15], $color[16], $color[17],  $color[18],  $color[19],$color[20]) = split(',',$myrow_s[color]);
$color[0]=trim($color[0]);$color[1]=trim($color[1]);$color[2]=trim($color[2]);$color[3]=trim($color[3]);
$color[4]=trim($color[4]);$color[5]=trim($color[5]);$color[6]=trim($color[6]);$color[7]=trim($color[7]);
$color[8]=trim($color[8]);$color[9]=trim($color[9]);$color[10]=trim($color[10]);$color[11]=trim($color[11]);
$color[12]=trim($color[12]);$color[13]=trim($color[13]);$color[14]=trim($color[14]);$color[15]=trim($color[15]);
$color[16]=trim($color[16]);$color[17]=trim($color[17]);$color[18]=trim($color[18]);$color[19]=trim($color[19]);
$color_new=array_filter($color, "filter");
$count_color=count($color_new);

if ($count_color!='0')
{for ($i_color=0; $i_color < $count_color; $i_color=$i_color+1) 
{echo"<nobr><input name='color_vip' type='radio' value='$color_new[$i_color]'>$color_new[$i_color]</nobr> &shy;" ;}}

printf ("
</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Размеры:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");

echo "<nobr><input name='size_vip' type='radio' value='не указано' checked>не указано</nobr>" ;

list($sz[0], $sz[1], $sz[2], $sz[3], $sz[4],  $sz[5], $sz[6],  $sz[7], $sz[8], $sz[9], $sz[10], $sz[11], $sz[12], $sz[13], $sz[14], $sz[15], $sz[16], $sz[17],  $sz[18],  $sz[19], $sz[20], $sz[21], $sz[22], $sz[23], $sz[24],  $sz[25], $sz[26],  $sz[27], $sz[28], $sz[29], $sz[30], $sz[31], $sz[32], $sz[33], $sz[34], $sz[35], $sz[36], $sz[37],  $sz[38],  $sz[39], $sz[40], $sz[41], $sz[42], $sz[43], $sz[44],  $sz[45], $sz[46],  $sz[47], $sz[48], $sz[49], $sz[50], $sz[51], $sz[52], $sz[53], $sz[54], $sz[55], $sz[56], $sz[57],  $sz[58],  $sz[59], $sz[60], $sz[61], $sz[62], $sz[63], $sz[64],  $sz[65], $sz[66],  $sz[67], $sz[68], $sz[69], $sz[70], $sz[71], $sz[72], $sz[73], $sz[74], $sz[75], $sz[76], $sz[77],  $sz[78],  $sz[79], $sz[80], $sz[81], $sz[82], $sz[83], $sz[84],  $sz[85], $sz[86],  $sz[87], $sz[88], $sz[89], $sz[90], $sz[91], $sz[92], $sz[93], $sz[94], $sz[95], $sz[96], $sz[97],  $sz[98],  $sz[99], $sz[100]) = split(',',$myrow_s['size']);

$sz[0]=trim($sz[0]);$sz[1]=trim($sz[1]);$sz[2]=trim($sz[2]);$sz[3]=trim($sz[3]);
$sz[4]=trim($sz[4]);$sz[5]=trim($sz[5]);$sz[6]=trim($sz[6]);$sz[7]=trim($sz[7]);
$sz[8]=trim($sz[8]);$sz[9]=trim($sz[9]);$sz[10]=trim($sz[10]);$sz[11]=trim($sz[11]);
$sz[12]=trim($sz[12]);$sz[13]=trim($sz[13]);$sz[14]=trim($sz[14]);$sz[15]=trim($sz[15]);
$sz[16]=trim($sz[16]);$sz[17]=trim($sz[17]);$sz[18]=trim($sz[18]);$sz[19]=trim($sz[19]);
$sz[20]=trim($sz[20]);$sz[21]=trim($sz[21]);$sz[22]=trim($sz[22]);$sz[23]=trim($sz[23]);
$sz[24]=trim($sz[24]);$sz[25]=trim($sz[25]);$sz[26]=trim($sz[26]);$sz[27]=trim($sz[27]);
$sz[28]=trim($sz[28]);$sz[29]=trim($sz[29]);$sz[30]=trim($sz[30]);$sz[31]=trim($sz[31]);
$sz[32]=trim($sz[32]);$sz[33]=trim($sz[33]);$sz[34]=trim($sz[34]);$sz[35]=trim($sz[35]);
$sz[36]=trim($sz[36]);$sz[37]=trim($sz[37]);$sz[38]=trim($sz[38]);$sz[39]=trim($sz[39]);
$sz[40]=trim($sz[40]);$sz[41]=trim($sz[41]);$sz[42]=trim($sz[42]);$sz[43]=trim($sz[43]);
$sz[44]=trim($sz[44]);$sz[45]=trim($sz[45]);$sz[46]=trim($sz[46]);$sz[47]=trim($sz[47]);
$sz[48]=trim($sz[48]);$sz[49]=trim($sz[49]);$sz[50]=trim($sz[50]);$sz[51]=trim($sz[51]);
$sz[52]=trim($sz[52]);$sz[53]=trim($sz[53]);$sz[54]=trim($sz[54]);$sz[55]=trim($sz[55]);
$sz[56]=trim($sz[56]);$sz[57]=trim($sz[57]);$sz[58]=trim($sz[58]);$sz[59]=trim($sz[59]);
$sz[60]=trim($sz[60]);$sz[61]=trim($sz[61]);$sz[62]=trim($sz[62]);$sz[63]=trim($sz[63]);
$sz[64]=trim($sz[64]);$sz[65]=trim($sz[65]);$sz[66]=trim($sz[66]);$sz[67]=trim($sz[67]);
$sz[68]=trim($sz[68]);$sz[69]=trim($sz[69]);$sz[70]=trim($sz[70]);$sz[71]=trim($sz[71]);
$sz[72]=trim($sz[72]);$sz[73]=trim($sz[73]);$sz[74]=trim($sz[74]);$sz[75]=trim($sz[75]);
$sz[76]=trim($sz[76]);$sz[77]=trim($sz[77]);$sz[78]=trim($sz[78]);$sz[79]=trim($sz[79]);
$sz[80]=trim($sz[80]);$sz[81]=trim($sz[81]);$sz[82]=trim($sz[82]);$sz[83]=trim($sz[83]);
$sz[84]=trim($sz[84]);$sz[85]=trim($sz[85]);$sz[86]=trim($sz[86]);$sz[87]=trim($sz[87]);
$sz[88]=trim($sz[88]);$sz[89]=trim($sz[89]);$sz[90]=trim($sz[91]);$sz[92]=trim($sz[92]);
$sz[93]=trim($sz[93]);$sz[94]=trim($sz[94]);$sz[95]=trim($sz[95]);$sz[96]=trim($sz[96]);
$sz[97]=trim($sz[97]);$sz[98]=trim($sz[98]);$sz[99]=trim($sz[99]);$sz[100]=trim($sz[100]);
$sz_new=array_filter($sz, "filter");
$count_sz=count($sz_new);
if ($count_sz!='0')
{for ($i_sz=0; $i_sz < $count_sz; $i_sz=$i_sz+1) 
{echo"<nobr><input name='size_vip' type='radio' value='$sz_new[$i_sz]'>$sz_new[$i_sz]</nobr> &shy;" ;}}






printf ("

</form>
</td> 
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Описание:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[info_prod] </td> 
</tr>
</table>
<hr>
</td>
</tr>
</table>");}}}
while ($myrow_s=mysql_fetch_array($result_s));}

if ($count==0)
{ echo "<br><br><font class='price'>ТОВАРОВ ПО ВАШЕМУ ЗАПРОСУ НЕ НАЙДЕНО!</font><br><br>";}
break;	}
 
case 9: 
{
$result_s = mysql_query ("SELECT * FROM products WHERE price >= '$cena1' and price <= '$cena2' 
and who!='для женщин' and fast='да' ORDER BY model DESC",$db);
$myrow_s= mysql_fetch_array ($result_s);
$count=0;


if ($myrow_s['productID']!='0' and $myrow_s['productID']!='' and (isset ($myrow_s['productID'])))
{do
{    $size_test=strpos($myrow_s['size'], $sise_sort);
           $vid_tip=$myrow_s['vid'].', '.$myrow_s['tip'];
     $vid_test=strpos($vid_tip, $vid_sort);
	 $col_test=strpos($myrow_s['color'], $color_sort);
	 

 	 if ($size_test =='true' or $size_test !='')
	 {   if ($vid_test =='true' or $vid_test !='')
	         {if ($col_test =='true' or $col_test !='')
	 
	    {$count=1+$count; $myrow_s[price]=round($myrow_s[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);
		printf ("<br>
<table width='612' border='0'  cellspacing='0' cellpadding='0'>
<tr>
<td width='210' height='260' rowspan='3' align='center' bgcolor='#D9E9C9' valign='top'>
<img src='img_prod/$myrow_s[tm]-$myrow_s[model].jpg' alt='НЕТ ФОТО'></td>  
<form action='korzinka.php?productID=$myrow_s[productID]' method='post' name=form>
<td align='center' bgcolor='#D9E9C9'  class='name_prod'> <a href=product.php?id=$myrow_s[productID]>$myrow_s[vid]  $myrow_s[tm] $myrow_s[model] </a></td> 
<td width='70'  rowspan='2' align='center' bgcolor='#D9E9C9' valign='top'><INPUT type=image src='img/cart_navy.gif' width='57' height='58' name='submit'></input></td>
</tr>
<tr>
 <td  bgcolor='#D9E9C9' valign='top' align='center'><b class='text'>Цена: </b><b class='price'> $myrow_s[price]  </b><b class='text'> грн.</b> <hr></td>
</tr>
<tr>
<td width='370'  bgcolor='#D9E9C9' valign='top' colspan='2'>
<table width='370' border='0'  cellspacing='5' cellpadding='5'>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Код товара</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[productID]</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Цвет</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");
echo"<nobr><input name='color_vip' type='radio' value='не указано' checked>не указано</nobr><br>" ;
list($color[0], $color[1], $color[2], $color[3], $color[4],  $color[5], $color[6],  $color[7], $color[8], $color[9], $color[10], $color[11], $color[12], $color[13], $color[14], $color[15], $color[16], $color[17],  $color[18],  $color[19],$color[20]) = split(',',$myrow_s[color]);
$color[0]=trim($color[0]);$color[1]=trim($color[1]);$color[2]=trim($color[2]);$color[3]=trim($color[3]);
$color[4]=trim($color[4]);$color[5]=trim($color[5]);$color[6]=trim($color[6]);$color[7]=trim($color[7]);
$color[8]=trim($color[8]);$color[9]=trim($color[9]);$color[10]=trim($color[10]);$color[11]=trim($color[11]);
$color[12]=trim($color[12]);$color[13]=trim($color[13]);$color[14]=trim($color[14]);$color[15]=trim($color[15]);
$color[16]=trim($color[16]);$color[17]=trim($color[17]);$color[18]=trim($color[18]);$color[19]=trim($color[19]);
$color_new=array_filter($color, "filter");
$count_color=count($color_new);

if ($count_color!='0')
{for ($i_color=0; $i_color < $count_color; $i_color=$i_color+1) 
{echo"<nobr><input name='color_vip' type='radio' value='$color_new[$i_color]'>$color_new[$i_color]</nobr> &shy;" ;}}

printf ("
</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Размеры:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");

echo "<nobr><input name='size_vip' type='radio' value='не указано' checked>не указано</nobr>" ;

list($sz[0], $sz[1], $sz[2], $sz[3], $sz[4],  $sz[5], $sz[6],  $sz[7], $sz[8], $sz[9], $sz[10], $sz[11], $sz[12], $sz[13], $sz[14], $sz[15], $sz[16], $sz[17],  $sz[18],  $sz[19], $sz[20], $sz[21], $sz[22], $sz[23], $sz[24],  $sz[25], $sz[26],  $sz[27], $sz[28], $sz[29], $sz[30], $sz[31], $sz[32], $sz[33], $sz[34], $sz[35], $sz[36], $sz[37],  $sz[38],  $sz[39], $sz[40], $sz[41], $sz[42], $sz[43], $sz[44],  $sz[45], $sz[46],  $sz[47], $sz[48], $sz[49], $sz[50], $sz[51], $sz[52], $sz[53], $sz[54], $sz[55], $sz[56], $sz[57],  $sz[58],  $sz[59], $sz[60], $sz[61], $sz[62], $sz[63], $sz[64],  $sz[65], $sz[66],  $sz[67], $sz[68], $sz[69], $sz[70], $sz[71], $sz[72], $sz[73], $sz[74], $sz[75], $sz[76], $sz[77],  $sz[78],  $sz[79], $sz[80], $sz[81], $sz[82], $sz[83], $sz[84],  $sz[85], $sz[86],  $sz[87], $sz[88], $sz[89], $sz[90], $sz[91], $sz[92], $sz[93], $sz[94], $sz[95], $sz[96], $sz[97],  $sz[98],  $sz[99], $sz[100]) = split(',',$myrow_s['size']);

$sz[0]=trim($sz[0]);$sz[1]=trim($sz[1]);$sz[2]=trim($sz[2]);$sz[3]=trim($sz[3]);
$sz[4]=trim($sz[4]);$sz[5]=trim($sz[5]);$sz[6]=trim($sz[6]);$sz[7]=trim($sz[7]);
$sz[8]=trim($sz[8]);$sz[9]=trim($sz[9]);$sz[10]=trim($sz[10]);$sz[11]=trim($sz[11]);
$sz[12]=trim($sz[12]);$sz[13]=trim($sz[13]);$sz[14]=trim($sz[14]);$sz[15]=trim($sz[15]);
$sz[16]=trim($sz[16]);$sz[17]=trim($sz[17]);$sz[18]=trim($sz[18]);$sz[19]=trim($sz[19]);
$sz[20]=trim($sz[20]);$sz[21]=trim($sz[21]);$sz[22]=trim($sz[22]);$sz[23]=trim($sz[23]);
$sz[24]=trim($sz[24]);$sz[25]=trim($sz[25]);$sz[26]=trim($sz[26]);$sz[27]=trim($sz[27]);
$sz[28]=trim($sz[28]);$sz[29]=trim($sz[29]);$sz[30]=trim($sz[30]);$sz[31]=trim($sz[31]);
$sz[32]=trim($sz[32]);$sz[33]=trim($sz[33]);$sz[34]=trim($sz[34]);$sz[35]=trim($sz[35]);
$sz[36]=trim($sz[36]);$sz[37]=trim($sz[37]);$sz[38]=trim($sz[38]);$sz[39]=trim($sz[39]);
$sz[40]=trim($sz[40]);$sz[41]=trim($sz[41]);$sz[42]=trim($sz[42]);$sz[43]=trim($sz[43]);
$sz[44]=trim($sz[44]);$sz[45]=trim($sz[45]);$sz[46]=trim($sz[46]);$sz[47]=trim($sz[47]);
$sz[48]=trim($sz[48]);$sz[49]=trim($sz[49]);$sz[50]=trim($sz[50]);$sz[51]=trim($sz[51]);
$sz[52]=trim($sz[52]);$sz[53]=trim($sz[53]);$sz[54]=trim($sz[54]);$sz[55]=trim($sz[55]);
$sz[56]=trim($sz[56]);$sz[57]=trim($sz[57]);$sz[58]=trim($sz[58]);$sz[59]=trim($sz[59]);
$sz[60]=trim($sz[60]);$sz[61]=trim($sz[61]);$sz[62]=trim($sz[62]);$sz[63]=trim($sz[63]);
$sz[64]=trim($sz[64]);$sz[65]=trim($sz[65]);$sz[66]=trim($sz[66]);$sz[67]=trim($sz[67]);
$sz[68]=trim($sz[68]);$sz[69]=trim($sz[69]);$sz[70]=trim($sz[70]);$sz[71]=trim($sz[71]);
$sz[72]=trim($sz[72]);$sz[73]=trim($sz[73]);$sz[74]=trim($sz[74]);$sz[75]=trim($sz[75]);
$sz[76]=trim($sz[76]);$sz[77]=trim($sz[77]);$sz[78]=trim($sz[78]);$sz[79]=trim($sz[79]);
$sz[80]=trim($sz[80]);$sz[81]=trim($sz[81]);$sz[82]=trim($sz[82]);$sz[83]=trim($sz[83]);
$sz[84]=trim($sz[84]);$sz[85]=trim($sz[85]);$sz[86]=trim($sz[86]);$sz[87]=trim($sz[87]);
$sz[88]=trim($sz[88]);$sz[89]=trim($sz[89]);$sz[90]=trim($sz[91]);$sz[92]=trim($sz[92]);
$sz[93]=trim($sz[93]);$sz[94]=trim($sz[94]);$sz[95]=trim($sz[95]);$sz[96]=trim($sz[96]);
$sz[97]=trim($sz[97]);$sz[98]=trim($sz[98]);$sz[99]=trim($sz[99]);$sz[100]=trim($sz[100]);
$sz_new=array_filter($sz, "filter");
$count_sz=count($sz_new);
if ($count_sz!='0')
{for ($i_sz=0; $i_sz < $count_sz; $i_sz=$i_sz+1) 
{echo"<nobr><input name='size_vip' type='radio' value='$sz_new[$i_sz]'>$sz_new[$i_sz]</nobr> &shy;" ;}}






printf ("

</form>
</td> 
<tr>
<td width='100' align='left' bgcolor='#D9E9C9'  class='text'>Описание:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[info_prod] </td> 
</tr>
</table>
<hr>
</td>
</tr>
</table>");}}}}
while ($myrow_s=mysql_fetch_array($result_s));}

if ($count==0)
{ echo "<br><br><font class='price'>ТОВАРОВ ПО ВАШЕМУ ЗАПРОСУ НЕ НАЙДЕНО!</font><br><br>";}
break;	}
 





case 10: 
{
$result_s = mysql_query ("SELECT * FROM products WHERE price >= '$cena1' and price <= '$cena2' 
and who!='для женщин' and fast='да' ORDER BY model DESC",$db);
$myrow_s= mysql_fetch_array ($result_s);
if ($myrow_s['productID']!='0' and $myrow_s['productID']!='' and (isset ($myrow_s['productID'])))
{do
{$myrow_s[price]=round($myrow_s[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]); printf ("<br>
<table width='612' border='0'  cellspacing='0' cellpadding='0'>
<tr>
<td width='210' height='260' rowspan='3' align='center' bgcolor='#D9E9C9' valign='top'>
<img src='img_prod/$myrow_s[tm]-$myrow_s[model].jpg' alt='НЕТ ФОТО'></td>  
<form action='korzinka.php?productID=$myrow_s[productID]' method='post' name=form>
<td  align='center' bgcolor='#D9E9C9'  class='name_prod'> <a href=product.php?id=$myrow_s[productID]>$myrow_s[vid]  $myrow_s[tm] $myrow_s[model] </a></td> 
<td width='70'  rowspan='2' align='center' bgcolor='#D9E9C9' valign='top'><INPUT type=image src='img/cart_navy.gif' width='57' height='58' name='submit'></input></td>
</tr>
<tr>
 <td  bgcolor='#D9E9C9' valign='top' align='center'><b class='text'>Цена: </b><b class='price'> $myrow_s[price]  </b><b class='text'> грн.</b> <hr></td>
</tr>
<tr>
<td width='370' bgcolor='#D9E9C9' valign='top' colspan='2'>
<table width='370' border='0'  cellspacing='5' cellpadding='5'>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Код товара</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[productID]</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Цвет</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");
echo"<nobr><input name='color_vip' type='radio' value='не указано' checked>не указано</nobr><br>" ;
list($color[0], $color[1], $color[2], $color[3], $color[4],  $color[5], $color[6],  $color[7], $color[8], $color[9], $color[10], $color[11], $color[12], $color[13], $color[14], $color[15], $color[16], $color[17],  $color[18],  $color[19],$color[20]) = split(',',$myrow_s[color]);
$color[0]=trim($color[0]);$color[1]=trim($color[1]);$color[2]=trim($color[2]);$color[3]=trim($color[3]);
$color[4]=trim($color[4]);$color[5]=trim($color[5]);$color[6]=trim($color[6]);$color[7]=trim($color[7]);
$color[8]=trim($color[8]);$color[9]=trim($color[9]);$color[10]=trim($color[10]);$color[11]=trim($color[11]);
$color[12]=trim($color[12]);$color[13]=trim($color[13]);$color[14]=trim($color[14]);$color[15]=trim($color[15]);
$color[16]=trim($color[16]);$color[17]=trim($color[17]);$color[18]=trim($color[18]);$color[19]=trim($color[19]);
$color_new=array_filter($color, "filter");
$count_color=count($color_new);

if ($count_color!='0')
{for ($i_color=0; $i_color < $count_color; $i_color=$i_color+1) 
{echo"<nobr><input name='color_vip' type='radio' value='$color_new[$i_color]'>$color_new[$i_color]</nobr> &shy;" ;}}

printf ("
</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Размеры:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");

echo "<nobr><input name='size_vip' type='radio' value='не указано' checked>не указано</nobr>" ;

list($sz[0], $sz[1], $sz[2], $sz[3], $sz[4],  $sz[5], $sz[6],  $sz[7], $sz[8], $sz[9], $sz[10], $sz[11], $sz[12], $sz[13], $sz[14], $sz[15], $sz[16], $sz[17],  $sz[18],  $sz[19], $sz[20], $sz[21], $sz[22], $sz[23], $sz[24],  $sz[25], $sz[26],  $sz[27], $sz[28], $sz[29], $sz[30], $sz[31], $sz[32], $sz[33], $sz[34], $sz[35], $sz[36], $sz[37],  $sz[38],  $sz[39], $sz[40], $sz[41], $sz[42], $sz[43], $sz[44],  $sz[45], $sz[46],  $sz[47], $sz[48], $sz[49], $sz[50], $sz[51], $sz[52], $sz[53], $sz[54], $sz[55], $sz[56], $sz[57],  $sz[58],  $sz[59], $sz[60], $sz[61], $sz[62], $sz[63], $sz[64],  $sz[65], $sz[66],  $sz[67], $sz[68], $sz[69], $sz[70], $sz[71], $sz[72], $sz[73], $sz[74], $sz[75], $sz[76], $sz[77],  $sz[78],  $sz[79], $sz[80], $sz[81], $sz[82], $sz[83], $sz[84],  $sz[85], $sz[86],  $sz[87], $sz[88], $sz[89], $sz[90], $sz[91], $sz[92], $sz[93], $sz[94], $sz[95], $sz[96], $sz[97],  $sz[98],  $sz[99], $sz[100]) = split(',',$myrow_s['size']);

$sz[0]=trim($sz[0]);$sz[1]=trim($sz[1]);$sz[2]=trim($sz[2]);$sz[3]=trim($sz[3]);
$sz[4]=trim($sz[4]);$sz[5]=trim($sz[5]);$sz[6]=trim($sz[6]);$sz[7]=trim($sz[7]);
$sz[8]=trim($sz[8]);$sz[9]=trim($sz[9]);$sz[10]=trim($sz[10]);$sz[11]=trim($sz[11]);
$sz[12]=trim($sz[12]);$sz[13]=trim($sz[13]);$sz[14]=trim($sz[14]);$sz[15]=trim($sz[15]);
$sz[16]=trim($sz[16]);$sz[17]=trim($sz[17]);$sz[18]=trim($sz[18]);$sz[19]=trim($sz[19]);
$sz[20]=trim($sz[20]);$sz[21]=trim($sz[21]);$sz[22]=trim($sz[22]);$sz[23]=trim($sz[23]);
$sz[24]=trim($sz[24]);$sz[25]=trim($sz[25]);$sz[26]=trim($sz[26]);$sz[27]=trim($sz[27]);
$sz[28]=trim($sz[28]);$sz[29]=trim($sz[29]);$sz[30]=trim($sz[30]);$sz[31]=trim($sz[31]);
$sz[32]=trim($sz[32]);$sz[33]=trim($sz[33]);$sz[34]=trim($sz[34]);$sz[35]=trim($sz[35]);
$sz[36]=trim($sz[36]);$sz[37]=trim($sz[37]);$sz[38]=trim($sz[38]);$sz[39]=trim($sz[39]);
$sz[40]=trim($sz[40]);$sz[41]=trim($sz[41]);$sz[42]=trim($sz[42]);$sz[43]=trim($sz[43]);
$sz[44]=trim($sz[44]);$sz[45]=trim($sz[45]);$sz[46]=trim($sz[46]);$sz[47]=trim($sz[47]);
$sz[48]=trim($sz[48]);$sz[49]=trim($sz[49]);$sz[50]=trim($sz[50]);$sz[51]=trim($sz[51]);
$sz[52]=trim($sz[52]);$sz[53]=trim($sz[53]);$sz[54]=trim($sz[54]);$sz[55]=trim($sz[55]);
$sz[56]=trim($sz[56]);$sz[57]=trim($sz[57]);$sz[58]=trim($sz[58]);$sz[59]=trim($sz[59]);
$sz[60]=trim($sz[60]);$sz[61]=trim($sz[61]);$sz[62]=trim($sz[62]);$sz[63]=trim($sz[63]);
$sz[64]=trim($sz[64]);$sz[65]=trim($sz[65]);$sz[66]=trim($sz[66]);$sz[67]=trim($sz[67]);
$sz[68]=trim($sz[68]);$sz[69]=trim($sz[69]);$sz[70]=trim($sz[70]);$sz[71]=trim($sz[71]);
$sz[72]=trim($sz[72]);$sz[73]=trim($sz[73]);$sz[74]=trim($sz[74]);$sz[75]=trim($sz[75]);
$sz[76]=trim($sz[76]);$sz[77]=trim($sz[77]);$sz[78]=trim($sz[78]);$sz[79]=trim($sz[79]);
$sz[80]=trim($sz[80]);$sz[81]=trim($sz[81]);$sz[82]=trim($sz[82]);$sz[83]=trim($sz[83]);
$sz[84]=trim($sz[84]);$sz[85]=trim($sz[85]);$sz[86]=trim($sz[86]);$sz[87]=trim($sz[87]);
$sz[88]=trim($sz[88]);$sz[89]=trim($sz[89]);$sz[90]=trim($sz[91]);$sz[92]=trim($sz[92]);
$sz[93]=trim($sz[93]);$sz[94]=trim($sz[94]);$sz[95]=trim($sz[95]);$sz[96]=trim($sz[96]);
$sz[97]=trim($sz[97]);$sz[98]=trim($sz[98]);$sz[99]=trim($sz[99]);$sz[100]=trim($sz[100]);
$sz_new=array_filter($sz, "filter");
$count_sz=count($sz_new);
if ($count_sz!='0')
{for ($i_sz=0; $i_sz < $count_sz; $i_sz=$i_sz+1) 
{echo"<nobr><input name='size_vip' type='radio' value='$sz_new[$i_sz]'>$sz_new[$i_sz]</nobr> &shy;" ;}}






printf ("

</form>
</td> 
<tr>
<td width='100' align='left' bgcolor='#D9E9C9'  class='text'>Описание:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[info_prod] </td> 
</tr>
</table>
<hr>
</td>
</tr>
</table>");}
while ($myrow_s=mysql_fetch_array($result_s));}

else { echo "<br><br><font class='price'>ТОВАРОВ ПО ВАШЕМУ ЗАПРОСУ НЕ НАЙДЕНО!</font><br><br>";}

break;	
}
case 11: 
{
$result_s = mysql_query ("SELECT * FROM products WHERE price >= '$cena1' and price <= '$cena2' and who!='для женщин' and katalog='распродажа' ORDER BY model DESC",$db);
$myrow_s= mysql_fetch_array ($result_s);
$count=0;


if ($myrow_s['productID']!='0' and $myrow_s['productID']!='' and (isset ($myrow_s['productID'])))
{do
{    $size_test=strpos($myrow_s['size'], $sise_sort);
 	 if ($size_test =='true' or $size_test !='')
	{   $count=1+$count; $myrow_s[price]=round($myrow_s[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);
		printf ("<br>
<table width='612' border='0'  cellspacing='0' cellpadding='0'>
<tr>
<td width='210' height='260' rowspan='3' align='center' bgcolor='#D9E9C9' valign='top'>
<img src='img_prod/$myrow_s[tm]-$myrow_s[model].jpg' alt='НЕТ ФОТО'></td>  
<form action='korzinka.php?productID=$myrow_s[productID]' method='post' name=form>
<td  align='center' bgcolor='#D9E9C9'  class='name_prod'> <a href=product.php?id=$myrow_s[productID]>$myrow_s[vid]  $myrow_s[tm] $myrow_s[model] </a></td> 
<td width='70'  rowspan='2' align='center' bgcolor='#D9E9C9' valign='top'><INPUT type=image src='img/cart_navy.gif' width='57' height='58' name='submit'></input></td>
</tr>
<tr>
 <td  bgcolor='#D9E9C9' valign='top' align='center'><b class='text'>Цена: </b><b class='price'> $myrow_s[price]  </b><b class='text'> грн.</b> <hr></td>
</tr>
<tr>
<td width='370'  bgcolor='#D9E9C9' valign='top' colspan='2'>
<table width='370' border='0'  cellspacing='5' cellpadding='5'>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Код товара</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[productID]</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Цвет</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");
echo"<nobr><input name='color_vip' type='radio' value='не указано' checked>не указано</nobr><br>" ;
list($color[0], $color[1], $color[2], $color[3], $color[4],  $color[5], $color[6],  $color[7], $color[8], $color[9], $color[10], $color[11], $color[12], $color[13], $color[14], $color[15], $color[16], $color[17],  $color[18],  $color[19],$color[20]) = split(',',$myrow_s[color]);
$color[0]=trim($color[0]);$color[1]=trim($color[1]);$color[2]=trim($color[2]);$color[3]=trim($color[3]);
$color[4]=trim($color[4]);$color[5]=trim($color[5]);$color[6]=trim($color[6]);$color[7]=trim($color[7]);
$color[8]=trim($color[8]);$color[9]=trim($color[9]);$color[10]=trim($color[10]);$color[11]=trim($color[11]);
$color[12]=trim($color[12]);$color[13]=trim($color[13]);$color[14]=trim($color[14]);$color[15]=trim($color[15]);
$color[16]=trim($color[16]);$color[17]=trim($color[17]);$color[18]=trim($color[18]);$color[19]=trim($color[19]);
$color_new=array_filter($color, "filter");
$count_color=count($color_new);

if ($count_color!='0')
{for ($i_color=0; $i_color < $count_color; $i_color=$i_color+1) 
{echo"<nobr><input name='color_vip' type='radio' value='$color_new[$i_color]'>$color_new[$i_color]</nobr> &shy;" ;}}

printf ("
</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Размеры:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");

echo "<nobr><input name='size_vip' type='radio' value='не указано' checked>не указано</nobr>" ;

list($sz[0], $sz[1], $sz[2], $sz[3], $sz[4],  $sz[5], $sz[6],  $sz[7], $sz[8], $sz[9], $sz[10], $sz[11], $sz[12], $sz[13], $sz[14], $sz[15], $sz[16], $sz[17],  $sz[18],  $sz[19], $sz[20], $sz[21], $sz[22], $sz[23], $sz[24],  $sz[25], $sz[26],  $sz[27], $sz[28], $sz[29], $sz[30], $sz[31], $sz[32], $sz[33], $sz[34], $sz[35], $sz[36], $sz[37],  $sz[38],  $sz[39], $sz[40], $sz[41], $sz[42], $sz[43], $sz[44],  $sz[45], $sz[46],  $sz[47], $sz[48], $sz[49], $sz[50], $sz[51], $sz[52], $sz[53], $sz[54], $sz[55], $sz[56], $sz[57],  $sz[58],  $sz[59], $sz[60], $sz[61], $sz[62], $sz[63], $sz[64],  $sz[65], $sz[66],  $sz[67], $sz[68], $sz[69], $sz[70], $sz[71], $sz[72], $sz[73], $sz[74], $sz[75], $sz[76], $sz[77],  $sz[78],  $sz[79], $sz[80], $sz[81], $sz[82], $sz[83], $sz[84],  $sz[85], $sz[86],  $sz[87], $sz[88], $sz[89], $sz[90], $sz[91], $sz[92], $sz[93], $sz[94], $sz[95], $sz[96], $sz[97],  $sz[98],  $sz[99], $sz[100]) = split(',',$myrow_s['size']);

$sz[0]=trim($sz[0]);$sz[1]=trim($sz[1]);$sz[2]=trim($sz[2]);$sz[3]=trim($sz[3]);
$sz[4]=trim($sz[4]);$sz[5]=trim($sz[5]);$sz[6]=trim($sz[6]);$sz[7]=trim($sz[7]);
$sz[8]=trim($sz[8]);$sz[9]=trim($sz[9]);$sz[10]=trim($sz[10]);$sz[11]=trim($sz[11]);
$sz[12]=trim($sz[12]);$sz[13]=trim($sz[13]);$sz[14]=trim($sz[14]);$sz[15]=trim($sz[15]);
$sz[16]=trim($sz[16]);$sz[17]=trim($sz[17]);$sz[18]=trim($sz[18]);$sz[19]=trim($sz[19]);
$sz[20]=trim($sz[20]);$sz[21]=trim($sz[21]);$sz[22]=trim($sz[22]);$sz[23]=trim($sz[23]);
$sz[24]=trim($sz[24]);$sz[25]=trim($sz[25]);$sz[26]=trim($sz[26]);$sz[27]=trim($sz[27]);
$sz[28]=trim($sz[28]);$sz[29]=trim($sz[29]);$sz[30]=trim($sz[30]);$sz[31]=trim($sz[31]);
$sz[32]=trim($sz[32]);$sz[33]=trim($sz[33]);$sz[34]=trim($sz[34]);$sz[35]=trim($sz[35]);
$sz[36]=trim($sz[36]);$sz[37]=trim($sz[37]);$sz[38]=trim($sz[38]);$sz[39]=trim($sz[39]);
$sz[40]=trim($sz[40]);$sz[41]=trim($sz[41]);$sz[42]=trim($sz[42]);$sz[43]=trim($sz[43]);
$sz[44]=trim($sz[44]);$sz[45]=trim($sz[45]);$sz[46]=trim($sz[46]);$sz[47]=trim($sz[47]);
$sz[48]=trim($sz[48]);$sz[49]=trim($sz[49]);$sz[50]=trim($sz[50]);$sz[51]=trim($sz[51]);
$sz[52]=trim($sz[52]);$sz[53]=trim($sz[53]);$sz[54]=trim($sz[54]);$sz[55]=trim($sz[55]);
$sz[56]=trim($sz[56]);$sz[57]=trim($sz[57]);$sz[58]=trim($sz[58]);$sz[59]=trim($sz[59]);
$sz[60]=trim($sz[60]);$sz[61]=trim($sz[61]);$sz[62]=trim($sz[62]);$sz[63]=trim($sz[63]);
$sz[64]=trim($sz[64]);$sz[65]=trim($sz[65]);$sz[66]=trim($sz[66]);$sz[67]=trim($sz[67]);
$sz[68]=trim($sz[68]);$sz[69]=trim($sz[69]);$sz[70]=trim($sz[70]);$sz[71]=trim($sz[71]);
$sz[72]=trim($sz[72]);$sz[73]=trim($sz[73]);$sz[74]=trim($sz[74]);$sz[75]=trim($sz[75]);
$sz[76]=trim($sz[76]);$sz[77]=trim($sz[77]);$sz[78]=trim($sz[78]);$sz[79]=trim($sz[79]);
$sz[80]=trim($sz[80]);$sz[81]=trim($sz[81]);$sz[82]=trim($sz[82]);$sz[83]=trim($sz[83]);
$sz[84]=trim($sz[84]);$sz[85]=trim($sz[85]);$sz[86]=trim($sz[86]);$sz[87]=trim($sz[87]);
$sz[88]=trim($sz[88]);$sz[89]=trim($sz[89]);$sz[90]=trim($sz[91]);$sz[92]=trim($sz[92]);
$sz[93]=trim($sz[93]);$sz[94]=trim($sz[94]);$sz[95]=trim($sz[95]);$sz[96]=trim($sz[96]);
$sz[97]=trim($sz[97]);$sz[98]=trim($sz[98]);$sz[99]=trim($sz[99]);$sz[100]=trim($sz[100]);
$sz_new=array_filter($sz, "filter");
$count_sz=count($sz_new);
if ($count_sz!='0')
{for ($i_sz=0; $i_sz < $count_sz; $i_sz=$i_sz+1) 
{echo"<nobr><input name='size_vip' type='radio' value='$sz_new[$i_sz]'>$sz_new[$i_sz]</nobr> &shy;" ;}}






printf ("

</form>
</td> 
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Описание:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[info_prod] </td> 
</tr>
</table>
<hr>
</td>
</tr>
</table>");}}
while ($myrow_s=mysql_fetch_array($result_s));}

if ($count==0)
{ echo "<br><br><font class='price'>ТОВАРОВ ПО ВАШЕМУ ЗАПРОСУ НЕ НАЙДЕНО!</font><br><br>";}
break;	}
 
case 12: 
{
$result_s = mysql_query ("SELECT * FROM products WHERE price >= '$cena1' and price <= '$cena2' and who!='для женщин' and katalog='распродажа' ORDER BY model DESC",$db);
$myrow_s= mysql_fetch_array ($result_s);
$count=0;


if ($myrow_s['productID']!='0' and $myrow_s['productID']!='' and (isset ($myrow_s['productID'])))
{do
{    $size_test=strpos($myrow_s['size'], $sise_sort);
          
	 $col_test=strpos($myrow_s['color'], $color_sort);
	 

 	 if ($size_test =='true' or $size_test !='')
	 	         {if ($col_test =='true' or $col_test !='')
	 
	    {$count=1+$count; $myrow_s[price]=round($myrow_s[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);
		printf ("<br>
<table width='612' border='0'  cellspacing='0' cellpadding='0'>
<tr>
<td width='210' height='260' rowspan='3' align='center' bgcolor='#D9E9C9' valign='top'>
<img src='img_prod/$myrow_s[tm]-$myrow_s[model].jpg' alt='НЕТ ФОТО'></td>  
<form action='korzinka.php?productID=$myrow_s[productID]' method='post' name=form>
<td  align='center' bgcolor='#D9E9C9'  class='name_prod'> <a href=product.php?id=$myrow_s[productID]>$myrow_s[vid]  $myrow_s[tm] $myrow_s[model] </a></td> 
<td width='70'  rowspan='2' align='center' bgcolor='#D9E9C9' valign='top'><INPUT type=image src='img/cart_navy.gif' width='57' height='58' name='submit'></input></td>
</tr>
<tr>
 <td  bgcolor='#D9E9C9' valign='top' align='center'><b class='text'>Цена: </b><b class='price'> $myrow_s[price]  </b><b class='text'> грн.</b> <hr></td>
</tr>
<tr>
<td width='370'  bgcolor='#D9E9C9' valign='top' colspan='2'>
<table width='370' border='0'  cellspacing='5' cellpadding='5'>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Код товара</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[productID]</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Цвет</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");
echo"<nobr><input name='color_vip' type='radio' value='не указано' checked>не указано</nobr><br>" ;
list($color[0], $color[1], $color[2], $color[3], $color[4],  $color[5], $color[6],  $color[7], $color[8], $color[9], $color[10], $color[11], $color[12], $color[13], $color[14], $color[15], $color[16], $color[17],  $color[18],  $color[19],$color[20]) = split(',',$myrow_s[color]);
$color[0]=trim($color[0]);$color[1]=trim($color[1]);$color[2]=trim($color[2]);$color[3]=trim($color[3]);
$color[4]=trim($color[4]);$color[5]=trim($color[5]);$color[6]=trim($color[6]);$color[7]=trim($color[7]);
$color[8]=trim($color[8]);$color[9]=trim($color[9]);$color[10]=trim($color[10]);$color[11]=trim($color[11]);
$color[12]=trim($color[12]);$color[13]=trim($color[13]);$color[14]=trim($color[14]);$color[15]=trim($color[15]);
$color[16]=trim($color[16]);$color[17]=trim($color[17]);$color[18]=trim($color[18]);$color[19]=trim($color[19]);
$color_new=array_filter($color, "filter");
$count_color=count($color_new);

if ($count_color!='0')
{for ($i_color=0; $i_color < $count_color; $i_color=$i_color+1) 
{echo"<nobr><input name='color_vip' type='radio' value='$color_new[$i_color]'>$color_new[$i_color]</nobr> &shy;" ;}}

printf ("
</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Размеры:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");

echo "<nobr><input name='size_vip' type='radio' value='не указано' checked>не указано</nobr>" ;

list($sz[0], $sz[1], $sz[2], $sz[3], $sz[4],  $sz[5], $sz[6],  $sz[7], $sz[8], $sz[9], $sz[10], $sz[11], $sz[12], $sz[13], $sz[14], $sz[15], $sz[16], $sz[17],  $sz[18],  $sz[19], $sz[20], $sz[21], $sz[22], $sz[23], $sz[24],  $sz[25], $sz[26],  $sz[27], $sz[28], $sz[29], $sz[30], $sz[31], $sz[32], $sz[33], $sz[34], $sz[35], $sz[36], $sz[37],  $sz[38],  $sz[39], $sz[40], $sz[41], $sz[42], $sz[43], $sz[44],  $sz[45], $sz[46],  $sz[47], $sz[48], $sz[49], $sz[50], $sz[51], $sz[52], $sz[53], $sz[54], $sz[55], $sz[56], $sz[57],  $sz[58],  $sz[59], $sz[60], $sz[61], $sz[62], $sz[63], $sz[64],  $sz[65], $sz[66],  $sz[67], $sz[68], $sz[69], $sz[70], $sz[71], $sz[72], $sz[73], $sz[74], $sz[75], $sz[76], $sz[77],  $sz[78],  $sz[79], $sz[80], $sz[81], $sz[82], $sz[83], $sz[84],  $sz[85], $sz[86],  $sz[87], $sz[88], $sz[89], $sz[90], $sz[91], $sz[92], $sz[93], $sz[94], $sz[95], $sz[96], $sz[97],  $sz[98],  $sz[99], $sz[100]) = split(',',$myrow_s['size']);

$sz[0]=trim($sz[0]);$sz[1]=trim($sz[1]);$sz[2]=trim($sz[2]);$sz[3]=trim($sz[3]);
$sz[4]=trim($sz[4]);$sz[5]=trim($sz[5]);$sz[6]=trim($sz[6]);$sz[7]=trim($sz[7]);
$sz[8]=trim($sz[8]);$sz[9]=trim($sz[9]);$sz[10]=trim($sz[10]);$sz[11]=trim($sz[11]);
$sz[12]=trim($sz[12]);$sz[13]=trim($sz[13]);$sz[14]=trim($sz[14]);$sz[15]=trim($sz[15]);
$sz[16]=trim($sz[16]);$sz[17]=trim($sz[17]);$sz[18]=trim($sz[18]);$sz[19]=trim($sz[19]);
$sz[20]=trim($sz[20]);$sz[21]=trim($sz[21]);$sz[22]=trim($sz[22]);$sz[23]=trim($sz[23]);
$sz[24]=trim($sz[24]);$sz[25]=trim($sz[25]);$sz[26]=trim($sz[26]);$sz[27]=trim($sz[27]);
$sz[28]=trim($sz[28]);$sz[29]=trim($sz[29]);$sz[30]=trim($sz[30]);$sz[31]=trim($sz[31]);
$sz[32]=trim($sz[32]);$sz[33]=trim($sz[33]);$sz[34]=trim($sz[34]);$sz[35]=trim($sz[35]);
$sz[36]=trim($sz[36]);$sz[37]=trim($sz[37]);$sz[38]=trim($sz[38]);$sz[39]=trim($sz[39]);
$sz[40]=trim($sz[40]);$sz[41]=trim($sz[41]);$sz[42]=trim($sz[42]);$sz[43]=trim($sz[43]);
$sz[44]=trim($sz[44]);$sz[45]=trim($sz[45]);$sz[46]=trim($sz[46]);$sz[47]=trim($sz[47]);
$sz[48]=trim($sz[48]);$sz[49]=trim($sz[49]);$sz[50]=trim($sz[50]);$sz[51]=trim($sz[51]);
$sz[52]=trim($sz[52]);$sz[53]=trim($sz[53]);$sz[54]=trim($sz[54]);$sz[55]=trim($sz[55]);
$sz[56]=trim($sz[56]);$sz[57]=trim($sz[57]);$sz[58]=trim($sz[58]);$sz[59]=trim($sz[59]);
$sz[60]=trim($sz[60]);$sz[61]=trim($sz[61]);$sz[62]=trim($sz[62]);$sz[63]=trim($sz[63]);
$sz[64]=trim($sz[64]);$sz[65]=trim($sz[65]);$sz[66]=trim($sz[66]);$sz[67]=trim($sz[67]);
$sz[68]=trim($sz[68]);$sz[69]=trim($sz[69]);$sz[70]=trim($sz[70]);$sz[71]=trim($sz[71]);
$sz[72]=trim($sz[72]);$sz[73]=trim($sz[73]);$sz[74]=trim($sz[74]);$sz[75]=trim($sz[75]);
$sz[76]=trim($sz[76]);$sz[77]=trim($sz[77]);$sz[78]=trim($sz[78]);$sz[79]=trim($sz[79]);
$sz[80]=trim($sz[80]);$sz[81]=trim($sz[81]);$sz[82]=trim($sz[82]);$sz[83]=trim($sz[83]);
$sz[84]=trim($sz[84]);$sz[85]=trim($sz[85]);$sz[86]=trim($sz[86]);$sz[87]=trim($sz[87]);
$sz[88]=trim($sz[88]);$sz[89]=trim($sz[89]);$sz[90]=trim($sz[91]);$sz[92]=trim($sz[92]);
$sz[93]=trim($sz[93]);$sz[94]=trim($sz[94]);$sz[95]=trim($sz[95]);$sz[96]=trim($sz[96]);
$sz[97]=trim($sz[97]);$sz[98]=trim($sz[98]);$sz[99]=trim($sz[99]);$sz[100]=trim($sz[100]);
$sz_new=array_filter($sz, "filter");
$count_sz=count($sz_new);
if ($count_sz!='0')
{for ($i_sz=0; $i_sz < $count_sz; $i_sz=$i_sz+1) 
{echo"<nobr><input name='size_vip' type='radio' value='$sz_new[$i_sz]'>$sz_new[$i_sz]</nobr> &shy;" ;}}






printf ("

</form>
</td> 
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Описание:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[info_prod] </td> 
</tr>
</table>
<hr>
</td>
</tr>
</table>");}}}
while ($myrow_s=mysql_fetch_array($result_s));}

if ($count==0)
{ echo "<br><br><font class='price'>ТОВАРОВ ПО ВАШЕМУ ЗАПРОСУ НЕ НАЙДЕНО!</font><br><br>";}
break;	}
 
case 13: 
{
$result_s = mysql_query ("SELECT * FROM products WHERE price >= '$cena1' and price <= '$cena2' and who!='для женщин' and katalog='распродажа' ORDER BY model DESC",$db);
$myrow_s= mysql_fetch_array ($result_s);
$count=0;


if ($myrow_s['productID']!='0' and $myrow_s['productID']!='' and (isset ($myrow_s['productID'])))
{do
{    $vid_tip=$myrow_s['vid'].', '.$myrow_s['tip'];
     $vid_test=strpos($vid_tip, $vid_sort);
 	 if ($vid_test =='true' or $vid_test !='')
	{   $count=1+$count; $myrow_s[price]=round($myrow_s[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);
		printf ("<br>
<table width='612' border='0'  cellspacing='0' cellpadding='0'>
<tr>
<td width='210' height='260' rowspan='3' align='center' bgcolor='#D9E9C9' valign='top'>
<img src='img_prod/$myrow_s[tm]-$myrow_s[model].jpg' alt='НЕТ ФОТО'></td>  
<form action='korzinka.php?productID=$myrow_s[productID]' method='post' name=form>
<td  align='center' bgcolor='#D9E9C9'  class='name_prod'> <a href=product.php?id=$myrow_s[productID]>$myrow_s[vid]  $myrow_s[tm] $myrow_s[model] </a></td>
<td width='70'  rowspan='2' align='center' bgcolor='#D9E9C9' valign='top'><INPUT type=image src='img/cart_navy.gif' width='57' height='58' name='submit'></input></td>
</tr>
<tr>
 <td  bgcolor='#D9E9C9' valign='top' align='center'><b class='text'>Цена: </b><b class='price'> $myrow_s[price]  </b><b class='text'> грн.</b> <hr></td>
</tr>
<tr>
<td width='370'  bgcolor='#D9E9C9' valign='top' colspan='2'>
<table width='370' border='0'  cellspacing='5' cellpadding='5'>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Код товара</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[productID]</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Цвет</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");
echo"<nobr><input name='color_vip' type='radio' value='не указано' checked>не указано</nobr><br>" ;
list($color[0], $color[1], $color[2], $color[3], $color[4],  $color[5], $color[6],  $color[7], $color[8], $color[9], $color[10], $color[11], $color[12], $color[13], $color[14], $color[15], $color[16], $color[17],  $color[18],  $color[19],$color[20]) = split(',',$myrow_s[color]);
$color[0]=trim($color[0]);$color[1]=trim($color[1]);$color[2]=trim($color[2]);$color[3]=trim($color[3]);
$color[4]=trim($color[4]);$color[5]=trim($color[5]);$color[6]=trim($color[6]);$color[7]=trim($color[7]);
$color[8]=trim($color[8]);$color[9]=trim($color[9]);$color[10]=trim($color[10]);$color[11]=trim($color[11]);
$color[12]=trim($color[12]);$color[13]=trim($color[13]);$color[14]=trim($color[14]);$color[15]=trim($color[15]);
$color[16]=trim($color[16]);$color[17]=trim($color[17]);$color[18]=trim($color[18]);$color[19]=trim($color[19]);
$color_new=array_filter($color, "filter");
$count_color=count($color_new);

if ($count_color!='0')
{for ($i_color=0; $i_color < $count_color; $i_color=$i_color+1) 
{echo"<nobr><input name='color_vip' type='radio' value='$color_new[$i_color]'>$color_new[$i_color]</nobr> &shy;" ;}}

printf ("
</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Размеры:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");

echo "<nobr><input name='size_vip' type='radio' value='не указано' checked>не указано</nobr>" ;

list($sz[0], $sz[1], $sz[2], $sz[3], $sz[4],  $sz[5], $sz[6],  $sz[7], $sz[8], $sz[9], $sz[10], $sz[11], $sz[12], $sz[13], $sz[14], $sz[15], $sz[16], $sz[17],  $sz[18],  $sz[19], $sz[20], $sz[21], $sz[22], $sz[23], $sz[24],  $sz[25], $sz[26],  $sz[27], $sz[28], $sz[29], $sz[30], $sz[31], $sz[32], $sz[33], $sz[34], $sz[35], $sz[36], $sz[37],  $sz[38],  $sz[39], $sz[40], $sz[41], $sz[42], $sz[43], $sz[44],  $sz[45], $sz[46],  $sz[47], $sz[48], $sz[49], $sz[50], $sz[51], $sz[52], $sz[53], $sz[54], $sz[55], $sz[56], $sz[57],  $sz[58],  $sz[59], $sz[60], $sz[61], $sz[62], $sz[63], $sz[64],  $sz[65], $sz[66],  $sz[67], $sz[68], $sz[69], $sz[70], $sz[71], $sz[72], $sz[73], $sz[74], $sz[75], $sz[76], $sz[77],  $sz[78],  $sz[79], $sz[80], $sz[81], $sz[82], $sz[83], $sz[84],  $sz[85], $sz[86],  $sz[87], $sz[88], $sz[89], $sz[90], $sz[91], $sz[92], $sz[93], $sz[94], $sz[95], $sz[96], $sz[97],  $sz[98],  $sz[99], $sz[100]) = split(',',$myrow_s['size']);

$sz[0]=trim($sz[0]);$sz[1]=trim($sz[1]);$sz[2]=trim($sz[2]);$sz[3]=trim($sz[3]);
$sz[4]=trim($sz[4]);$sz[5]=trim($sz[5]);$sz[6]=trim($sz[6]);$sz[7]=trim($sz[7]);
$sz[8]=trim($sz[8]);$sz[9]=trim($sz[9]);$sz[10]=trim($sz[10]);$sz[11]=trim($sz[11]);
$sz[12]=trim($sz[12]);$sz[13]=trim($sz[13]);$sz[14]=trim($sz[14]);$sz[15]=trim($sz[15]);
$sz[16]=trim($sz[16]);$sz[17]=trim($sz[17]);$sz[18]=trim($sz[18]);$sz[19]=trim($sz[19]);
$sz[20]=trim($sz[20]);$sz[21]=trim($sz[21]);$sz[22]=trim($sz[22]);$sz[23]=trim($sz[23]);
$sz[24]=trim($sz[24]);$sz[25]=trim($sz[25]);$sz[26]=trim($sz[26]);$sz[27]=trim($sz[27]);
$sz[28]=trim($sz[28]);$sz[29]=trim($sz[29]);$sz[30]=trim($sz[30]);$sz[31]=trim($sz[31]);
$sz[32]=trim($sz[32]);$sz[33]=trim($sz[33]);$sz[34]=trim($sz[34]);$sz[35]=trim($sz[35]);
$sz[36]=trim($sz[36]);$sz[37]=trim($sz[37]);$sz[38]=trim($sz[38]);$sz[39]=trim($sz[39]);
$sz[40]=trim($sz[40]);$sz[41]=trim($sz[41]);$sz[42]=trim($sz[42]);$sz[43]=trim($sz[43]);
$sz[44]=trim($sz[44]);$sz[45]=trim($sz[45]);$sz[46]=trim($sz[46]);$sz[47]=trim($sz[47]);
$sz[48]=trim($sz[48]);$sz[49]=trim($sz[49]);$sz[50]=trim($sz[50]);$sz[51]=trim($sz[51]);
$sz[52]=trim($sz[52]);$sz[53]=trim($sz[53]);$sz[54]=trim($sz[54]);$sz[55]=trim($sz[55]);
$sz[56]=trim($sz[56]);$sz[57]=trim($sz[57]);$sz[58]=trim($sz[58]);$sz[59]=trim($sz[59]);
$sz[60]=trim($sz[60]);$sz[61]=trim($sz[61]);$sz[62]=trim($sz[62]);$sz[63]=trim($sz[63]);
$sz[64]=trim($sz[64]);$sz[65]=trim($sz[65]);$sz[66]=trim($sz[66]);$sz[67]=trim($sz[67]);
$sz[68]=trim($sz[68]);$sz[69]=trim($sz[69]);$sz[70]=trim($sz[70]);$sz[71]=trim($sz[71]);
$sz[72]=trim($sz[72]);$sz[73]=trim($sz[73]);$sz[74]=trim($sz[74]);$sz[75]=trim($sz[75]);
$sz[76]=trim($sz[76]);$sz[77]=trim($sz[77]);$sz[78]=trim($sz[78]);$sz[79]=trim($sz[79]);
$sz[80]=trim($sz[80]);$sz[81]=trim($sz[81]);$sz[82]=trim($sz[82]);$sz[83]=trim($sz[83]);
$sz[84]=trim($sz[84]);$sz[85]=trim($sz[85]);$sz[86]=trim($sz[86]);$sz[87]=trim($sz[87]);
$sz[88]=trim($sz[88]);$sz[89]=trim($sz[89]);$sz[90]=trim($sz[91]);$sz[92]=trim($sz[92]);
$sz[93]=trim($sz[93]);$sz[94]=trim($sz[94]);$sz[95]=trim($sz[95]);$sz[96]=trim($sz[96]);
$sz[97]=trim($sz[97]);$sz[98]=trim($sz[98]);$sz[99]=trim($sz[99]);$sz[100]=trim($sz[100]);
$sz_new=array_filter($sz, "filter");
$count_sz=count($sz_new);
if ($count_sz!='0')
{for ($i_sz=0; $i_sz < $count_sz; $i_sz=$i_sz+1) 
{echo"<nobr><input name='size_vip' type='radio' value='$sz_new[$i_sz]'>$sz_new[$i_sz]</nobr> &shy;" ;}}






printf ("

</form>
</td> 
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Описание:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[info_prod] </td> 
</tr>
</table>
<hr>
</td>
</tr>
</table>");}}
while ($myrow_s=mysql_fetch_array($result_s));}

if ($count==0)
{ echo "<br><br><font class='price'>ТОВАРОВ ПО ВАШЕМУ ЗАПРОСУ НЕ НАЙДЕНО!</font><br><br>";}
break;	}
 

case 14: 
{
$result_s = mysql_query ("SELECT * FROM products WHERE price >= '$cena1' and price <= '$cena2' and who!='для женщин' and katalog='распродажа' ORDER BY model DESC",$db);
$myrow_s= mysql_fetch_array ($result_s);
$count=0;


if ($myrow_s['productID']!='0' and $myrow_s['productID']!='' and (isset ($myrow_s['productID'])))
{do
{    $col_test=strpos($myrow_s['color'], $color_sort);
     if ($col_test =='true' or $col_test !='')
	{   $count=1+$count; $myrow_s[price]=round($myrow_s[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);
		printf ("<br>
<table width='612' border='0'  cellspacing='0' cellpadding='0'>
<tr>
<td width='210' height='260' rowspan='3' align='center' bgcolor='#D9E9C9' valign='top'>
<img src='img_prod/$myrow_s[tm]-$myrow_s[model].jpg' alt='НЕТ ФОТО'></td>  
<form action='korzinka.php?productID=$myrow_s[productID]' method='post' name=form>
<td  align='center' bgcolor='#D9E9C9'  class='name_prod'> <a href=product.php?id=$myrow_s[productID]>$myrow_s[vid]  $myrow_s[tm] $myrow_s[model] </a></td> 
<td width='70'  rowspan='2' align='center' bgcolor='#D9E9C9' valign='top'><INPUT type=image src='img/cart_navy.gif' width='57' height='58' name='submit'></input></td>
</tr>
<tr>
 <td  bgcolor='#D9E9C9' valign='top' align='center'><b class='text'>Цена: </b><b class='price'> $myrow_s[price]  </b><b class='text'> грн.</b> <hr></td>
</tr>
<tr>
<td width='370'  bgcolor='#D9E9C9' valign='top' colspan='2'>
<table width='370' border='0'  cellspacing='5' cellpadding='5'>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Код товара</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[productID]</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Цвет</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");
echo"<nobr><input name='color_vip' type='radio' value='не указано' checked>не указано</nobr><br>" ;
list($color[0], $color[1], $color[2], $color[3], $color[4],  $color[5], $color[6],  $color[7], $color[8], $color[9], $color[10], $color[11], $color[12], $color[13], $color[14], $color[15], $color[16], $color[17],  $color[18],  $color[19],$color[20]) = split(',',$myrow_s[color]);
$color[0]=trim($color[0]);$color[1]=trim($color[1]);$color[2]=trim($color[2]);$color[3]=trim($color[3]);
$color[4]=trim($color[4]);$color[5]=trim($color[5]);$color[6]=trim($color[6]);$color[7]=trim($color[7]);
$color[8]=trim($color[8]);$color[9]=trim($color[9]);$color[10]=trim($color[10]);$color[11]=trim($color[11]);
$color[12]=trim($color[12]);$color[13]=trim($color[13]);$color[14]=trim($color[14]);$color[15]=trim($color[15]);
$color[16]=trim($color[16]);$color[17]=trim($color[17]);$color[18]=trim($color[18]);$color[19]=trim($color[19]);
$color_new=array_filter($color, "filter");
$count_color=count($color_new);

if ($count_color!='0')
{for ($i_color=0; $i_color < $count_color; $i_color=$i_color+1) 
{echo"<nobr><input name='color_vip' type='radio' value='$color_new[$i_color]'>$color_new[$i_color]</nobr> &shy;" ;}}

printf ("
</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Размеры:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");

echo "<nobr><input name='size_vip' type='radio' value='не указано' checked>не указано</nobr>" ;

list($sz[0], $sz[1], $sz[2], $sz[3], $sz[4],  $sz[5], $sz[6],  $sz[7], $sz[8], $sz[9], $sz[10], $sz[11], $sz[12], $sz[13], $sz[14], $sz[15], $sz[16], $sz[17],  $sz[18],  $sz[19], $sz[20], $sz[21], $sz[22], $sz[23], $sz[24],  $sz[25], $sz[26],  $sz[27], $sz[28], $sz[29], $sz[30], $sz[31], $sz[32], $sz[33], $sz[34], $sz[35], $sz[36], $sz[37],  $sz[38],  $sz[39], $sz[40], $sz[41], $sz[42], $sz[43], $sz[44],  $sz[45], $sz[46],  $sz[47], $sz[48], $sz[49], $sz[50], $sz[51], $sz[52], $sz[53], $sz[54], $sz[55], $sz[56], $sz[57],  $sz[58],  $sz[59], $sz[60], $sz[61], $sz[62], $sz[63], $sz[64],  $sz[65], $sz[66],  $sz[67], $sz[68], $sz[69], $sz[70], $sz[71], $sz[72], $sz[73], $sz[74], $sz[75], $sz[76], $sz[77],  $sz[78],  $sz[79], $sz[80], $sz[81], $sz[82], $sz[83], $sz[84],  $sz[85], $sz[86],  $sz[87], $sz[88], $sz[89], $sz[90], $sz[91], $sz[92], $sz[93], $sz[94], $sz[95], $sz[96], $sz[97],  $sz[98],  $sz[99], $sz[100]) = split(',',$myrow_s['size']);

$sz[0]=trim($sz[0]);$sz[1]=trim($sz[1]);$sz[2]=trim($sz[2]);$sz[3]=trim($sz[3]);
$sz[4]=trim($sz[4]);$sz[5]=trim($sz[5]);$sz[6]=trim($sz[6]);$sz[7]=trim($sz[7]);
$sz[8]=trim($sz[8]);$sz[9]=trim($sz[9]);$sz[10]=trim($sz[10]);$sz[11]=trim($sz[11]);
$sz[12]=trim($sz[12]);$sz[13]=trim($sz[13]);$sz[14]=trim($sz[14]);$sz[15]=trim($sz[15]);
$sz[16]=trim($sz[16]);$sz[17]=trim($sz[17]);$sz[18]=trim($sz[18]);$sz[19]=trim($sz[19]);
$sz[20]=trim($sz[20]);$sz[21]=trim($sz[21]);$sz[22]=trim($sz[22]);$sz[23]=trim($sz[23]);
$sz[24]=trim($sz[24]);$sz[25]=trim($sz[25]);$sz[26]=trim($sz[26]);$sz[27]=trim($sz[27]);
$sz[28]=trim($sz[28]);$sz[29]=trim($sz[29]);$sz[30]=trim($sz[30]);$sz[31]=trim($sz[31]);
$sz[32]=trim($sz[32]);$sz[33]=trim($sz[33]);$sz[34]=trim($sz[34]);$sz[35]=trim($sz[35]);
$sz[36]=trim($sz[36]);$sz[37]=trim($sz[37]);$sz[38]=trim($sz[38]);$sz[39]=trim($sz[39]);
$sz[40]=trim($sz[40]);$sz[41]=trim($sz[41]);$sz[42]=trim($sz[42]);$sz[43]=trim($sz[43]);
$sz[44]=trim($sz[44]);$sz[45]=trim($sz[45]);$sz[46]=trim($sz[46]);$sz[47]=trim($sz[47]);
$sz[48]=trim($sz[48]);$sz[49]=trim($sz[49]);$sz[50]=trim($sz[50]);$sz[51]=trim($sz[51]);
$sz[52]=trim($sz[52]);$sz[53]=trim($sz[53]);$sz[54]=trim($sz[54]);$sz[55]=trim($sz[55]);
$sz[56]=trim($sz[56]);$sz[57]=trim($sz[57]);$sz[58]=trim($sz[58]);$sz[59]=trim($sz[59]);
$sz[60]=trim($sz[60]);$sz[61]=trim($sz[61]);$sz[62]=trim($sz[62]);$sz[63]=trim($sz[63]);
$sz[64]=trim($sz[64]);$sz[65]=trim($sz[65]);$sz[66]=trim($sz[66]);$sz[67]=trim($sz[67]);
$sz[68]=trim($sz[68]);$sz[69]=trim($sz[69]);$sz[70]=trim($sz[70]);$sz[71]=trim($sz[71]);
$sz[72]=trim($sz[72]);$sz[73]=trim($sz[73]);$sz[74]=trim($sz[74]);$sz[75]=trim($sz[75]);
$sz[76]=trim($sz[76]);$sz[77]=trim($sz[77]);$sz[78]=trim($sz[78]);$sz[79]=trim($sz[79]);
$sz[80]=trim($sz[80]);$sz[81]=trim($sz[81]);$sz[82]=trim($sz[82]);$sz[83]=trim($sz[83]);
$sz[84]=trim($sz[84]);$sz[85]=trim($sz[85]);$sz[86]=trim($sz[86]);$sz[87]=trim($sz[87]);
$sz[88]=trim($sz[88]);$sz[89]=trim($sz[89]);$sz[90]=trim($sz[91]);$sz[92]=trim($sz[92]);
$sz[93]=trim($sz[93]);$sz[94]=trim($sz[94]);$sz[95]=trim($sz[95]);$sz[96]=trim($sz[96]);
$sz[97]=trim($sz[97]);$sz[98]=trim($sz[98]);$sz[99]=trim($sz[99]);$sz[100]=trim($sz[100]);
$sz_new=array_filter($sz, "filter");
$count_sz=count($sz_new);
if ($count_sz!='0')
{for ($i_sz=0; $i_sz < $count_sz; $i_sz=$i_sz+1) 
{echo"<nobr><input name='size_vip' type='radio' value='$sz_new[$i_sz]'>$sz_new[$i_sz]</nobr> &shy;" ;}}






printf ("

</form>
</td> 
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Описание:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[info_prod] </td> 
</tr>
</table>
<hr>
</td>
</tr>
</table>");}}
while ($myrow_s=mysql_fetch_array($result_s));}

if ($count==0)
{ echo "<br><br><font class='price'>ТОВАРОВ ПО ВАШЕМУ ЗАПРОСУ НЕ НАЙДЕНО!</font><br><br>";}

break;	
}
case 15: 
{
$result_s = mysql_query ("SELECT * FROM products WHERE price >= '$cena1' and price <= '$cena2' and who!='для женщин' and katalog='распродажа' ORDER BY model DESC",$db);
$myrow_s= mysql_fetch_array ($result_s);
$count=0;


if ($myrow_s['productID']!='0' and $myrow_s['productID']!='' and (isset ($myrow_s['productID'])))
{do
{    $vid_tip=$myrow_s['vid'].', '.$myrow_s['tip'];
     $vid_test=strpos($vid_tip, $vid_sort);
	 $col_test=strpos($myrow_s['color'], $color_sort);
	 

 	    if ($vid_test =='true' or $vid_test !='')
	         {if ($col_test =='true' or $col_test !='')
	 
	    {$count=1+$count; $myrow_s[price]=round($myrow_s[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);
		printf ("<br>
<table width='612' border='0'  cellspacing='0' cellpadding='0'>
<tr>
<td width='210' height='260' rowspan='3' align='center' bgcolor='#D9E9C9' valign='top'>
<img src='img_prod/$myrow_s[tm]-$myrow_s[model].jpg' alt='НЕТ ФОТО'></td>  
<form action='korzinka.php?productID=$myrow_s[productID]' method='post' name=form>
<td  align='center' bgcolor='#D9E9C9'  class='name_prod'> <a href=product.php?id=$myrow_s[productID]>$myrow_s[vid]  $myrow_s[tm] $myrow_s[model] </a></td> 
<td width='70'  rowspan='2' align='center' bgcolor='#D9E9C9' valign='top'><INPUT type=image src='img/cart_navy.gif' width='57' height='58' name='submit'></input></td>
</tr>
<tr>
 <td  bgcolor='#D9E9C9' valign='top' align='center'><b class='text'>Цена: </b><b class='price'> $myrow_s[price]  </b><b class='text'> грн.</b> <hr></td>
</tr>
<tr>
<td width='370' bgcolor='#D9E9C9' valign='top' colspan='2'>
<table width='370' border='0'  cellspacing='5' cellpadding='5'>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Код товара</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[productID]</td> 
</tr>
<tr>
<td width='100' align='left' bgcolor='#D9E9C9'  class='text'>Цвет</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");
echo"<nobr><input name='color_vip' type='radio' value='не указано' checked>не указано</nobr><br>" ;
list($color[0], $color[1], $color[2], $color[3], $color[4],  $color[5], $color[6],  $color[7], $color[8], $color[9], $color[10], $color[11], $color[12], $color[13], $color[14], $color[15], $color[16], $color[17],  $color[18],  $color[19],$color[20]) = split(',',$myrow_s[color]);
$color[0]=trim($color[0]);$color[1]=trim($color[1]);$color[2]=trim($color[2]);$color[3]=trim($color[3]);
$color[4]=trim($color[4]);$color[5]=trim($color[5]);$color[6]=trim($color[6]);$color[7]=trim($color[7]);
$color[8]=trim($color[8]);$color[9]=trim($color[9]);$color[10]=trim($color[10]);$color[11]=trim($color[11]);
$color[12]=trim($color[12]);$color[13]=trim($color[13]);$color[14]=trim($color[14]);$color[15]=trim($color[15]);
$color[16]=trim($color[16]);$color[17]=trim($color[17]);$color[18]=trim($color[18]);$color[19]=trim($color[19]);
$color_new=array_filter($color, "filter");
$count_color=count($color_new);

if ($count_color!='0')
{for ($i_color=0; $i_color < $count_color; $i_color=$i_color+1) 
{echo"<nobr><input name='color_vip' type='radio' value='$color_new[$i_color]'>$color_new[$i_color]</nobr> &shy;" ;}}

printf ("
</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Размеры:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");

echo "<nobr><input name='size_vip' type='radio' value='не указано' checked>не указано</nobr>" ;

list($sz[0], $sz[1], $sz[2], $sz[3], $sz[4],  $sz[5], $sz[6],  $sz[7], $sz[8], $sz[9], $sz[10], $sz[11], $sz[12], $sz[13], $sz[14], $sz[15], $sz[16], $sz[17],  $sz[18],  $sz[19], $sz[20], $sz[21], $sz[22], $sz[23], $sz[24],  $sz[25], $sz[26],  $sz[27], $sz[28], $sz[29], $sz[30], $sz[31], $sz[32], $sz[33], $sz[34], $sz[35], $sz[36], $sz[37],  $sz[38],  $sz[39], $sz[40], $sz[41], $sz[42], $sz[43], $sz[44],  $sz[45], $sz[46],  $sz[47], $sz[48], $sz[49], $sz[50], $sz[51], $sz[52], $sz[53], $sz[54], $sz[55], $sz[56], $sz[57],  $sz[58],  $sz[59], $sz[60], $sz[61], $sz[62], $sz[63], $sz[64],  $sz[65], $sz[66],  $sz[67], $sz[68], $sz[69], $sz[70], $sz[71], $sz[72], $sz[73], $sz[74], $sz[75], $sz[76], $sz[77],  $sz[78],  $sz[79], $sz[80], $sz[81], $sz[82], $sz[83], $sz[84],  $sz[85], $sz[86],  $sz[87], $sz[88], $sz[89], $sz[90], $sz[91], $sz[92], $sz[93], $sz[94], $sz[95], $sz[96], $sz[97],  $sz[98],  $sz[99], $sz[100]) = split(',',$myrow_s['size']);

$sz[0]=trim($sz[0]);$sz[1]=trim($sz[1]);$sz[2]=trim($sz[2]);$sz[3]=trim($sz[3]);
$sz[4]=trim($sz[4]);$sz[5]=trim($sz[5]);$sz[6]=trim($sz[6]);$sz[7]=trim($sz[7]);
$sz[8]=trim($sz[8]);$sz[9]=trim($sz[9]);$sz[10]=trim($sz[10]);$sz[11]=trim($sz[11]);
$sz[12]=trim($sz[12]);$sz[13]=trim($sz[13]);$sz[14]=trim($sz[14]);$sz[15]=trim($sz[15]);
$sz[16]=trim($sz[16]);$sz[17]=trim($sz[17]);$sz[18]=trim($sz[18]);$sz[19]=trim($sz[19]);
$sz[20]=trim($sz[20]);$sz[21]=trim($sz[21]);$sz[22]=trim($sz[22]);$sz[23]=trim($sz[23]);
$sz[24]=trim($sz[24]);$sz[25]=trim($sz[25]);$sz[26]=trim($sz[26]);$sz[27]=trim($sz[27]);
$sz[28]=trim($sz[28]);$sz[29]=trim($sz[29]);$sz[30]=trim($sz[30]);$sz[31]=trim($sz[31]);
$sz[32]=trim($sz[32]);$sz[33]=trim($sz[33]);$sz[34]=trim($sz[34]);$sz[35]=trim($sz[35]);
$sz[36]=trim($sz[36]);$sz[37]=trim($sz[37]);$sz[38]=trim($sz[38]);$sz[39]=trim($sz[39]);
$sz[40]=trim($sz[40]);$sz[41]=trim($sz[41]);$sz[42]=trim($sz[42]);$sz[43]=trim($sz[43]);
$sz[44]=trim($sz[44]);$sz[45]=trim($sz[45]);$sz[46]=trim($sz[46]);$sz[47]=trim($sz[47]);
$sz[48]=trim($sz[48]);$sz[49]=trim($sz[49]);$sz[50]=trim($sz[50]);$sz[51]=trim($sz[51]);
$sz[52]=trim($sz[52]);$sz[53]=trim($sz[53]);$sz[54]=trim($sz[54]);$sz[55]=trim($sz[55]);
$sz[56]=trim($sz[56]);$sz[57]=trim($sz[57]);$sz[58]=trim($sz[58]);$sz[59]=trim($sz[59]);
$sz[60]=trim($sz[60]);$sz[61]=trim($sz[61]);$sz[62]=trim($sz[62]);$sz[63]=trim($sz[63]);
$sz[64]=trim($sz[64]);$sz[65]=trim($sz[65]);$sz[66]=trim($sz[66]);$sz[67]=trim($sz[67]);
$sz[68]=trim($sz[68]);$sz[69]=trim($sz[69]);$sz[70]=trim($sz[70]);$sz[71]=trim($sz[71]);
$sz[72]=trim($sz[72]);$sz[73]=trim($sz[73]);$sz[74]=trim($sz[74]);$sz[75]=trim($sz[75]);
$sz[76]=trim($sz[76]);$sz[77]=trim($sz[77]);$sz[78]=trim($sz[78]);$sz[79]=trim($sz[79]);
$sz[80]=trim($sz[80]);$sz[81]=trim($sz[81]);$sz[82]=trim($sz[82]);$sz[83]=trim($sz[83]);
$sz[84]=trim($sz[84]);$sz[85]=trim($sz[85]);$sz[86]=trim($sz[86]);$sz[87]=trim($sz[87]);
$sz[88]=trim($sz[88]);$sz[89]=trim($sz[89]);$sz[90]=trim($sz[91]);$sz[92]=trim($sz[92]);
$sz[93]=trim($sz[93]);$sz[94]=trim($sz[94]);$sz[95]=trim($sz[95]);$sz[96]=trim($sz[96]);
$sz[97]=trim($sz[97]);$sz[98]=trim($sz[98]);$sz[99]=trim($sz[99]);$sz[100]=trim($sz[100]);
$sz_new=array_filter($sz, "filter");
$count_sz=count($sz_new);
if ($count_sz!='0')
{for ($i_sz=0; $i_sz < $count_sz; $i_sz=$i_sz+1) 
{echo"<nobr><input name='size_vip' type='radio' value='$sz_new[$i_sz]'>$sz_new[$i_sz]</nobr> &shy;" ;}}






printf ("

</form>
</td> 
<tr>
<td width='100' align='left' bgcolor='#D9E9C9'  class='text'>Описание:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[info_prod] </td> 
</tr>
</table>
<hr>
</td>
</tr>
</table>");}}}
while ($myrow_s=mysql_fetch_array($result_s));}

if ($count==0)
{ echo "<br><br><font class='price'>ТОВАРОВ ПО ВАШЕМУ ЗАПРОСУ НЕ НАЙДЕНО!</font><br><br>";}
break;	}
 
case 16: 
{
$result_s = mysql_query ("SELECT * FROM products WHERE price >= '$cena1' and price <= '$cena2' and who!='для женщин' and katalog='распродажа' ORDER BY model DESC",$db);
$myrow_s= mysql_fetch_array ($result_s);
$count=0;


if ($myrow_s['productID']!='0' and $myrow_s['productID']!='' and (isset ($myrow_s['productID'])))
{do
{    $size_test=strpos($myrow_s['size'], $sise_sort);
           $vid_tip=$myrow_s['vid'].', '.$myrow_s['tip'];
     $vid_test=strpos($vid_tip, $vid_sort);
	 	 

 	 if ($size_test =='true' or $size_test !='')
	 {   if ($vid_test =='true' or $vid_test !='')
	        	 
	    {$count=1+$count; $myrow_s[price]=round($myrow_s[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]);
		printf ("<br>
<table width='612' border='0'  cellspacing='0' cellpadding='0'>
<tr>
<td width='210' height='260' rowspan='3' align='center' bgcolor='#D9E9C9' valign='top'>
<img src='img_prod/$myrow_s[tm]-$myrow_s[model].jpg' alt='НЕТ ФОТО'></td>  
<form action='korzinka.php?productID=$myrow_s[productID]' method='post' name=form>
<td  align='center' bgcolor='#D9E9C9'  class='name_prod'> <a href=product.php?id=$myrow_s[productID]>$myrow_s[vid]  $myrow_s[tm] $myrow_s[model] </a></td> 
<td width='70'  rowspan='2' align='center' bgcolor='#D9E9C9' valign='top'><INPUT type=image src='img/cart_navy.gif' width='57' height='58' name='submit'></input></td>
</tr>
<tr>
 <td  bgcolor='#D9E9C9' valign='top' align='center'><b class='text'>Цена: </b><b class='price'> $myrow_s[price]  </b><b class='text'> грн.</b> <hr></td>
</tr>
<tr>
<td width='370'  bgcolor='#D9E9C9' valign='top' colspan='2'>
<table width='370' border='0'  cellspacing='5' cellpadding='5'>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Код товара</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[productID]</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Цвет</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");
echo"<nobr><input name='color_vip' type='radio' value='не указано' checked>не указано</nobr><br>" ;
list($color[0], $color[1], $color[2], $color[3], $color[4],  $color[5], $color[6],  $color[7], $color[8], $color[9], $color[10], $color[11], $color[12], $color[13], $color[14], $color[15], $color[16], $color[17],  $color[18],  $color[19],$color[20]) = split(',',$myrow_s[color]);
$color[0]=trim($color[0]);$color[1]=trim($color[1]);$color[2]=trim($color[2]);$color[3]=trim($color[3]);
$color[4]=trim($color[4]);$color[5]=trim($color[5]);$color[6]=trim($color[6]);$color[7]=trim($color[7]);
$color[8]=trim($color[8]);$color[9]=trim($color[9]);$color[10]=trim($color[10]);$color[11]=trim($color[11]);
$color[12]=trim($color[12]);$color[13]=trim($color[13]);$color[14]=trim($color[14]);$color[15]=trim($color[15]);
$color[16]=trim($color[16]);$color[17]=trim($color[17]);$color[18]=trim($color[18]);$color[19]=trim($color[19]);
$color_new=array_filter($color, "filter");
$count_color=count($color_new);

if ($count_color!='0')
{for ($i_color=0; $i_color < $count_color; $i_color=$i_color+1) 
{echo"<nobr><input name='color_vip' type='radio' value='$color_new[$i_color]'>$color_new[$i_color]</nobr> &shy;" ;}}

printf ("
</td> 
</tr>
<tr>
<td width='100' align='left' bgcolor='#D9E9C9'  class='text'>Размеры:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");

echo "<nobr><input name='size_vip' type='radio' value='не указано' checked>не указано</nobr>" ;

list($sz[0], $sz[1], $sz[2], $sz[3], $sz[4],  $sz[5], $sz[6],  $sz[7], $sz[8], $sz[9], $sz[10], $sz[11], $sz[12], $sz[13], $sz[14], $sz[15], $sz[16], $sz[17],  $sz[18],  $sz[19], $sz[20], $sz[21], $sz[22], $sz[23], $sz[24],  $sz[25], $sz[26],  $sz[27], $sz[28], $sz[29], $sz[30], $sz[31], $sz[32], $sz[33], $sz[34], $sz[35], $sz[36], $sz[37],  $sz[38],  $sz[39], $sz[40], $sz[41], $sz[42], $sz[43], $sz[44],  $sz[45], $sz[46],  $sz[47], $sz[48], $sz[49], $sz[50], $sz[51], $sz[52], $sz[53], $sz[54], $sz[55], $sz[56], $sz[57],  $sz[58],  $sz[59], $sz[60], $sz[61], $sz[62], $sz[63], $sz[64],  $sz[65], $sz[66],  $sz[67], $sz[68], $sz[69], $sz[70], $sz[71], $sz[72], $sz[73], $sz[74], $sz[75], $sz[76], $sz[77],  $sz[78],  $sz[79], $sz[80], $sz[81], $sz[82], $sz[83], $sz[84],  $sz[85], $sz[86],  $sz[87], $sz[88], $sz[89], $sz[90], $sz[91], $sz[92], $sz[93], $sz[94], $sz[95], $sz[96], $sz[97],  $sz[98],  $sz[99], $sz[100]) = split(',',$myrow_s['size']);

$sz[0]=trim($sz[0]);$sz[1]=trim($sz[1]);$sz[2]=trim($sz[2]);$sz[3]=trim($sz[3]);
$sz[4]=trim($sz[4]);$sz[5]=trim($sz[5]);$sz[6]=trim($sz[6]);$sz[7]=trim($sz[7]);
$sz[8]=trim($sz[8]);$sz[9]=trim($sz[9]);$sz[10]=trim($sz[10]);$sz[11]=trim($sz[11]);
$sz[12]=trim($sz[12]);$sz[13]=trim($sz[13]);$sz[14]=trim($sz[14]);$sz[15]=trim($sz[15]);
$sz[16]=trim($sz[16]);$sz[17]=trim($sz[17]);$sz[18]=trim($sz[18]);$sz[19]=trim($sz[19]);
$sz[20]=trim($sz[20]);$sz[21]=trim($sz[21]);$sz[22]=trim($sz[22]);$sz[23]=trim($sz[23]);
$sz[24]=trim($sz[24]);$sz[25]=trim($sz[25]);$sz[26]=trim($sz[26]);$sz[27]=trim($sz[27]);
$sz[28]=trim($sz[28]);$sz[29]=trim($sz[29]);$sz[30]=trim($sz[30]);$sz[31]=trim($sz[31]);
$sz[32]=trim($sz[32]);$sz[33]=trim($sz[33]);$sz[34]=trim($sz[34]);$sz[35]=trim($sz[35]);
$sz[36]=trim($sz[36]);$sz[37]=trim($sz[37]);$sz[38]=trim($sz[38]);$sz[39]=trim($sz[39]);
$sz[40]=trim($sz[40]);$sz[41]=trim($sz[41]);$sz[42]=trim($sz[42]);$sz[43]=trim($sz[43]);
$sz[44]=trim($sz[44]);$sz[45]=trim($sz[45]);$sz[46]=trim($sz[46]);$sz[47]=trim($sz[47]);
$sz[48]=trim($sz[48]);$sz[49]=trim($sz[49]);$sz[50]=trim($sz[50]);$sz[51]=trim($sz[51]);
$sz[52]=trim($sz[52]);$sz[53]=trim($sz[53]);$sz[54]=trim($sz[54]);$sz[55]=trim($sz[55]);
$sz[56]=trim($sz[56]);$sz[57]=trim($sz[57]);$sz[58]=trim($sz[58]);$sz[59]=trim($sz[59]);
$sz[60]=trim($sz[60]);$sz[61]=trim($sz[61]);$sz[62]=trim($sz[62]);$sz[63]=trim($sz[63]);
$sz[64]=trim($sz[64]);$sz[65]=trim($sz[65]);$sz[66]=trim($sz[66]);$sz[67]=trim($sz[67]);
$sz[68]=trim($sz[68]);$sz[69]=trim($sz[69]);$sz[70]=trim($sz[70]);$sz[71]=trim($sz[71]);
$sz[72]=trim($sz[72]);$sz[73]=trim($sz[73]);$sz[74]=trim($sz[74]);$sz[75]=trim($sz[75]);
$sz[76]=trim($sz[76]);$sz[77]=trim($sz[77]);$sz[78]=trim($sz[78]);$sz[79]=trim($sz[79]);
$sz[80]=trim($sz[80]);$sz[81]=trim($sz[81]);$sz[82]=trim($sz[82]);$sz[83]=trim($sz[83]);
$sz[84]=trim($sz[84]);$sz[85]=trim($sz[85]);$sz[86]=trim($sz[86]);$sz[87]=trim($sz[87]);
$sz[88]=trim($sz[88]);$sz[89]=trim($sz[89]);$sz[90]=trim($sz[91]);$sz[92]=trim($sz[92]);
$sz[93]=trim($sz[93]);$sz[94]=trim($sz[94]);$sz[95]=trim($sz[95]);$sz[96]=trim($sz[96]);
$sz[97]=trim($sz[97]);$sz[98]=trim($sz[98]);$sz[99]=trim($sz[99]);$sz[100]=trim($sz[100]);
$sz_new=array_filter($sz, "filter");
$count_sz=count($sz_new);
if ($count_sz!='0')
{for ($i_sz=0; $i_sz < $count_sz; $i_sz=$i_sz+1) 
{echo"<nobr><input name='size_vip' type='radio' value='$sz_new[$i_sz]'>$sz_new[$i_sz]</nobr> &shy;" ;}}






printf ("

</form>
</td> 
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Описание:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[info_prod] </td> 
</tr>
</table>
<hr>
</td>
</tr>
</table>");}}}
while ($myrow_s=mysql_fetch_array($result_s));}

if ($count==0)
{ echo "<br><br><font class='price'>ТОВАРОВ ПО ВАШЕМУ ЗАПРОСУ НЕ НАЙДЕНО!</font><br><br>";}
break;	}


default:  
{
$result_s = mysql_query ("SELECT * FROM products WHERE price >= '$cena1' and price <= '$cena2' and fast = 'да' ORDER BY model DESC",$db);
$myrow_s= mysql_fetch_array ($result_s);
if ($myrow_s['productID']!='0' and $myrow_s['productID']!='' and (isset ($myrow_s['productID'])) )
{do
{$myrow_s[price]=round($myrow_s[price]*$myrow_price[kurs]*$myrow_price[kof]+$myrow_price[dost]); printf ("<br>
<table width='612' border='0'  cellspacing='0' cellpadding='0'>
<tr>
<td width='210' height='260' rowspan='3' align='center' bgcolor='#D9E9C9' valign='top'>
<img src='img_prod/$myrow_s[tm]-$myrow_s[model].jpg' alt='НЕТ ФОТО'></td>  
<form action='korzinka.php?productID=$myrow_s[productID]' method='post' name=form>
<td  align='center' bgcolor='#D9E9C9'  class='name_prod'> <a href=product.php?id=$myrow_s[productID]>$myrow_s[vid]  $myrow_s[tm] $myrow_s[model] </a></td> 
<td width='70'  rowspan='2' align='center' bgcolor='#D9E9C9' valign='top'><INPUT type=image src='img/cart_navy.gif' width='57' height='58' name='submit'></input></td>
</tr>
<tr>
 <td  bgcolor='#D9E9C9' valign='top' align='center'><b class='text'>Цена: </b><b class='price'> $myrow_s[price]  </b><b class='text'> грн.</b> <hr></td>
</tr>
<tr>
<td width='370'  bgcolor='#D9E9C9' valign='top' colspan='2'>
<table width='370' border='0'  cellspacing='5' cellpadding='5'>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Код товара</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[productID]</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Цвет</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");
echo"<nobr><input name='color_vip' type='radio' value='не указано' checked>не указано</nobr><br>" ;
list($color[0], $color[1], $color[2], $color[3], $color[4],  $color[5], $color[6],  $color[7], $color[8], $color[9], $color[10], $color[11], $color[12], $color[13], $color[14], $color[15], $color[16], $color[17],  $color[18],  $color[19],$color[20]) = split(',',$myrow_s[color]);
$color[0]=trim($color[0]);$color[1]=trim($color[1]);$color[2]=trim($color[2]);$color[3]=trim($color[3]);
$color[4]=trim($color[4]);$color[5]=trim($color[5]);$color[6]=trim($color[6]);$color[7]=trim($color[7]);
$color[8]=trim($color[8]);$color[9]=trim($color[9]);$color[10]=trim($color[10]);$color[11]=trim($color[11]);
$color[12]=trim($color[12]);$color[13]=trim($color[13]);$color[14]=trim($color[14]);$color[15]=trim($color[15]);
$color[16]=trim($color[16]);$color[17]=trim($color[17]);$color[18]=trim($color[18]);$color[19]=trim($color[19]);
$color_new=array_filter($color, "filter");
$count_color=count($color_new);

if ($count_color!='0')
{for ($i_color=0; $i_color < $count_color; $i_color=$i_color+1) 
{echo"<nobr><input name='color_vip' type='radio' value='$color_new[$i_color]'>$color_new[$i_color]</nobr> &shy;" ;}}

printf ("
</td> 
</tr>
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Размеры:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>");

echo "<nobr><input name='size_vip' type='radio' value='не указано' checked>не указано</nobr>" ;

list($sz[0], $sz[1], $sz[2], $sz[3], $sz[4],  $sz[5], $sz[6],  $sz[7], $sz[8], $sz[9], $sz[10], $sz[11], $sz[12], $sz[13], $sz[14], $sz[15], $sz[16], $sz[17],  $sz[18],  $sz[19], $sz[20], $sz[21], $sz[22], $sz[23], $sz[24],  $sz[25], $sz[26],  $sz[27], $sz[28], $sz[29], $sz[30], $sz[31], $sz[32], $sz[33], $sz[34], $sz[35], $sz[36], $sz[37],  $sz[38],  $sz[39], $sz[40], $sz[41], $sz[42], $sz[43], $sz[44],  $sz[45], $sz[46],  $sz[47], $sz[48], $sz[49], $sz[50], $sz[51], $sz[52], $sz[53], $sz[54], $sz[55], $sz[56], $sz[57],  $sz[58],  $sz[59], $sz[60], $sz[61], $sz[62], $sz[63], $sz[64],  $sz[65], $sz[66],  $sz[67], $sz[68], $sz[69], $sz[70], $sz[71], $sz[72], $sz[73], $sz[74], $sz[75], $sz[76], $sz[77],  $sz[78],  $sz[79], $sz[80], $sz[81], $sz[82], $sz[83], $sz[84],  $sz[85], $sz[86],  $sz[87], $sz[88], $sz[89], $sz[90], $sz[91], $sz[92], $sz[93], $sz[94], $sz[95], $sz[96], $sz[97],  $sz[98],  $sz[99], $sz[100]) = split(',',$myrow_s['size']);

$sz[0]=trim($sz[0]);$sz[1]=trim($sz[1]);$sz[2]=trim($sz[2]);$sz[3]=trim($sz[3]);
$sz[4]=trim($sz[4]);$sz[5]=trim($sz[5]);$sz[6]=trim($sz[6]);$sz[7]=trim($sz[7]);
$sz[8]=trim($sz[8]);$sz[9]=trim($sz[9]);$sz[10]=trim($sz[10]);$sz[11]=trim($sz[11]);
$sz[12]=trim($sz[12]);$sz[13]=trim($sz[13]);$sz[14]=trim($sz[14]);$sz[15]=trim($sz[15]);
$sz[16]=trim($sz[16]);$sz[17]=trim($sz[17]);$sz[18]=trim($sz[18]);$sz[19]=trim($sz[19]);
$sz[20]=trim($sz[20]);$sz[21]=trim($sz[21]);$sz[22]=trim($sz[22]);$sz[23]=trim($sz[23]);
$sz[24]=trim($sz[24]);$sz[25]=trim($sz[25]);$sz[26]=trim($sz[26]);$sz[27]=trim($sz[27]);
$sz[28]=trim($sz[28]);$sz[29]=trim($sz[29]);$sz[30]=trim($sz[30]);$sz[31]=trim($sz[31]);
$sz[32]=trim($sz[32]);$sz[33]=trim($sz[33]);$sz[34]=trim($sz[34]);$sz[35]=trim($sz[35]);
$sz[36]=trim($sz[36]);$sz[37]=trim($sz[37]);$sz[38]=trim($sz[38]);$sz[39]=trim($sz[39]);
$sz[40]=trim($sz[40]);$sz[41]=trim($sz[41]);$sz[42]=trim($sz[42]);$sz[43]=trim($sz[43]);
$sz[44]=trim($sz[44]);$sz[45]=trim($sz[45]);$sz[46]=trim($sz[46]);$sz[47]=trim($sz[47]);
$sz[48]=trim($sz[48]);$sz[49]=trim($sz[49]);$sz[50]=trim($sz[50]);$sz[51]=trim($sz[51]);
$sz[52]=trim($sz[52]);$sz[53]=trim($sz[53]);$sz[54]=trim($sz[54]);$sz[55]=trim($sz[55]);
$sz[56]=trim($sz[56]);$sz[57]=trim($sz[57]);$sz[58]=trim($sz[58]);$sz[59]=trim($sz[59]);
$sz[60]=trim($sz[60]);$sz[61]=trim($sz[61]);$sz[62]=trim($sz[62]);$sz[63]=trim($sz[63]);
$sz[64]=trim($sz[64]);$sz[65]=trim($sz[65]);$sz[66]=trim($sz[66]);$sz[67]=trim($sz[67]);
$sz[68]=trim($sz[68]);$sz[69]=trim($sz[69]);$sz[70]=trim($sz[70]);$sz[71]=trim($sz[71]);
$sz[72]=trim($sz[72]);$sz[73]=trim($sz[73]);$sz[74]=trim($sz[74]);$sz[75]=trim($sz[75]);
$sz[76]=trim($sz[76]);$sz[77]=trim($sz[77]);$sz[78]=trim($sz[78]);$sz[79]=trim($sz[79]);
$sz[80]=trim($sz[80]);$sz[81]=trim($sz[81]);$sz[82]=trim($sz[82]);$sz[83]=trim($sz[83]);
$sz[84]=trim($sz[84]);$sz[85]=trim($sz[85]);$sz[86]=trim($sz[86]);$sz[87]=trim($sz[87]);
$sz[88]=trim($sz[88]);$sz[89]=trim($sz[89]);$sz[90]=trim($sz[91]);$sz[92]=trim($sz[92]);
$sz[93]=trim($sz[93]);$sz[94]=trim($sz[94]);$sz[95]=trim($sz[95]);$sz[96]=trim($sz[96]);
$sz[97]=trim($sz[97]);$sz[98]=trim($sz[98]);$sz[99]=trim($sz[99]);$sz[100]=trim($sz[100]);
$sz_new=array_filter($sz, "filter");
$count_sz=count($sz_new);
if ($count_sz!='0')
{for ($i_sz=0; $i_sz < $count_sz; $i_sz=$i_sz+1) 
{echo"<nobr><input name='size_vip' type='radio' value='$sz_new[$i_sz]'>$sz_new[$i_sz]</nobr> &shy;" ;}}






printf ("

</form>
</td> 
<tr>
<td width='100'  align='left' bgcolor='#D9E9C9'  class='text'>Описание:</td> 
<td width='270' align='left' bgcolor='#D9E9C9'  class='text'>$myrow_s[info_prod] </td> 
</tr>
</table>
<hr>
</td>
</tr>
</table>");}
while ($myrow_s=mysql_fetch_array($result_s));}

else { echo "<br><br><font class='price'>ТОВАРОВ ПО ВАШЕМУ ЗАПРОСУ НЕ НАЙДЕНО!</font><br><br>";}

break;	
}}
 
?>


