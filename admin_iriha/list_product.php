<table width='800' border='0'  cellspacing='0' cellpadding='0' align='center'>
<tr>
<td width='800' align='center' bgcolor='#D9E9C9'  class='price'>Администрирование сайта</td>
</tr>
</table>

<table width='800' border='1'  cellspacing='0' cellpadding='0'>
<tr>
<td width='30' align='center' bgcolor='#D9E9C9'  class='text'>ID</td>
<td width='160' align='center' bgcolor='#D9E9C9'  class='text'>наименование</td> 
<td width='100' align='center' bgcolor='#D9E9C9' class='text'>цена</td> 
<td width='180' align='center' bgcolor='#D9E9C9'  class='text'>цвет</td>
<td width='170' align='center' bgcolor='#D9E9C9'  class='text'>размеры</td>
<td width='21' align='center' bgcolor='#D9E9C9' valign='top' ><img src="../img/conf_aux.gif" width="24" height="24" alt="редактировать"></td>
<td width='21' align='center' bgcolor='#D9E9C9' valign='top' ><img src="../img/button_delete.gif" width="21" height="21" alt="удалить"></td>
</tr>
</table>
<br>

<?php 

if ($k=='sale') {$kk='распродажа';}
else
if ($k=='o')    {$kk='основной раздел';}

if (isset ($s))
{
	switch ($s)
	{case "ALL":
	$result = mysql_query ("SELECT productID,katalog,fast, who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products ORDER BY model",$db);
$myrow = mysql_fetch_array ($result); break;

	case "AVA":
	if ((isset ($kk)) and $kk!='0' and $kk!='' and $kk!=' ')
	{$result = mysql_query ("SELECT productID,katalog,fast, who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='AVA' and katalog='$kk' ORDER BY model",$db);
$myrow = mysql_fetch_array ($result);}
    else
	{$result = mysql_query ("SELECT productID,katalog,fast, who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='AVA' ORDER BY model",$db);
$myrow = mysql_fetch_array ($result);} break;

    case "KINGA":
	if ((isset ($kk)) and $kk!='0' and $kk!='' and $kk!=' ')
	{$result = mysql_query ("SELECT productID,katalog, fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='KINGA' and katalog='$kk'ORDER BY model",$db);
$myrow = mysql_fetch_array ($result); }
else
{$result = mysql_query ("SELECT productID,katalog,fast, who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='KINGA' ORDER BY model",$db);
$myrow = mysql_fetch_array ($result); }
break;

case "CORIN":
	if ((isset ($kk)) and $kk!='0' and $kk!='' and $kk!=' ')
	{$result = mysql_query ("SELECT productID,katalog, fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='CORIN' and katalog='$kk'ORDER BY model",$db);
$myrow = mysql_fetch_array ($result); }
else
{$result = mysql_query ("SELECT productID,katalog,fast, who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='CORIN' ORDER BY model",$db);
$myrow = mysql_fetch_array ($result); }
break;  
   case "GAIA":
   if ((isset ($kk)) and $kk!='0' and $kk!='' and $kk!=' ')
	{$result = mysql_query ("SELECT productID,katalog,fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='GAIA' and katalog='$kk' ORDER BY model",$db);
$myrow = mysql_fetch_array ($result);}
else {$result = mysql_query ("SELECT productID,katalog,fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='GAIA' ORDER BY model",$db);
$myrow = mysql_fetch_array ($result);}
break;


   case "DOBRA NOCKA":
   if ((isset ($kk)) and $kk!='0' and $kk!='' and $kk!=' ')
	{$result = mysql_query ("SELECT productID,katalog,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='DOBRA NOCKA' and katalog='$kk' ORDER BY model",$db);
$myrow = mysql_fetch_array ($result); }
else
{$result = mysql_query ("SELECT productID,katalog,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='DOBRA NOCKA' ORDER BY model",$db);
$myrow = mysql_fetch_array ($result); }
break;


   case "SHATO":
   if ((isset ($kk)) and $kk!='0' and $kk!='' and $kk!=' ')
	{$result = mysql_query ("SELECT productID,katalog,fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='SHATO' and katalog='$kk' ORDER BY model",$db);
$myrow = mysql_fetch_array ($result);} 
else {$result = mysql_query ("SELECT productID,katalog,fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='SHATO' ORDER BY model",$db);
$myrow = mysql_fetch_array ($result);} 
break;

   case "LUPO":
   if ((isset ($kk)) and $kk!='0' and $kk!='' and $kk!=' ')
	{$result = mysql_query ("SELECT productID,katalog,fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='LUPO' and katalog='$kk'ORDER BY model",$db);
$myrow = mysql_fetch_array ($result); }
else {$result = mysql_query ("SELECT productID,katalog,who,fast,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='LUPO'ORDER BY model",$db);
$myrow = mysql_fetch_array ($result);}
break;

    case "KRIS LINE":
	if ((isset ($kk)) and $kk!='0' and $kk!='' and $kk!=' ')
	{$result = mysql_query ("SELECT productID,katalog,who,fast,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='KRIS LINE' and katalog='$kk'ORDER BY model",$db);
$myrow = mysql_fetch_array ($result);}
else {$result = mysql_query ("SELECT productID,katalog,fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='KRIS LINE'ORDER BY model",$db);
$myrow = mysql_fetch_array ($result);}
 break;
 
 
   case "MIRABELLE":
   if ((isset ($kk)) and $kk!='0' and $kk!='' and $kk!=' ')
	{$result = mysql_query ("SELECT productID,katalog,fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='MIRABELLE' and katalog='$kk'ORDER BY model",$db);
$myrow = mysql_fetch_array ($result); }
else 
{$result = mysql_query ("SELECT productID,katalog,fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='MIRABELLE'ORDER BY model",$db);
$myrow = mysql_fetch_array ($result); }
break;

  	
case "JULIMEX":
   if ((isset ($kk)) and $kk!='0' and $kk!='' and $kk!=' ')
	{$result = mysql_query ("SELECT productID,katalog,fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='JULIMEX'  and katalog='$kk'ORDER BY model",$db);
$myrow = mysql_fetch_array ($result);}
else {$result = mysql_query ("SELECT productID,katalog,fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='JULIMEX'ORDER BY model",$db);
$myrow = mysql_fetch_array ($result);}
 break;

case "MITEX":
   if ((isset ($kk)) and $kk!='0' and $kk!='' and $kk!=' ')
	{$result = mysql_query ("SELECT productID,katalog,fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='MITEX'  and katalog='$kk'ORDER BY model",$db);
$myrow = mysql_fetch_array ($result);}
else {$result = mysql_query ("SELECT productID,katalog,fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='MITEX'ORDER BY model",$db);
$myrow = mysql_fetch_array ($result);}
 break;

case "EWANA":
   if ((isset ($kk)) and $kk!='0' and $kk!='' and $kk!=' ')
	{$result = mysql_query ("SELECT productID,katalog,fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='EWANA'  and katalog='$kk'ORDER BY model",$db);
$myrow = mysql_fetch_array ($result);}
else {$result = mysql_query ("SELECT productID,katalog,fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='EWANA' ORDER BY model",$db);
$myrow = mysql_fetch_array ($result);}
 break;

case "FABIO":
   if ((isset ($kk)) and $kk!='0' and $kk!='' and $kk!=' ')
	{$result = mysql_query ("SELECT productID,katalog,fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='FABIO'  and katalog='$kk'ORDER BY model",$db);
$myrow = mysql_fetch_array ($result);}
else {$result = mysql_query ("SELECT productID,katalog,fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm='FABIO' ORDER BY model",$db);
$myrow = mysql_fetch_array ($result);}
 break;

case "FAST":
   {$result = mysql_query ("SELECT productID,katalog,fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE fast='да' ORDER BY tm",$db);
$myrow = mysql_fetch_array ($result); }
 break;
	
	default:
	$result = mysql_query ("SELECT productID,katalog,fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products ORDER BY tm",$db);
$myrow = mysql_fetch_array ($result); break;
}
	
}


if (isset ($p))
{if ((isset ($kk)) and $kk!='0' and $kk!='' and $kk!=' ')
{$result = mysql_query ("SELECT productID,katalog,fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm!='AVA' and tm!='KINGA' and tm!='GAIA' and tm!='DOBRA NOCKA' and tm!='LUPO' and tm!='SHATO' and tm!='KRIS LINE' and tm!='MIRABELLE' and tm!='MITEX' and tm!='EWANA' and tm!='JULIMEX' and tm!='CORIN'and tm!='FABIO' and katalog='$kk' ORDER BY tm",$db);
$myrow = mysql_fetch_array ($result); }
else
{$result = mysql_query ("SELECT productID,katalog,fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE tm!='AVA' and tm!='KINGA' and tm!='GAIA' and tm!='DOBRA NOCKA' and tm!='LUPO' and tm!='SHATO' and tm!='KRIS LINE' and tm!='MIRABELLE' and tm!='MITEX' and tm!='EWANA' and tm!='JULIMEX' and tm!='CORIN'and tm!='FABIO' ORDER BY tm",$db);
$myrow = mysql_fetch_array ($result); }}





if (isset ($r))
{$result = mysql_query ("SELECT productID,katalog,fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products WHERE katalog='распродажа' ORDER BY tm",$db);
$myrow = mysql_fetch_array ($result); }


if ((!isset ($s)) and (!isset ($p)) and (!isset ($r)))
{
$result = mysql_query ("SELECT productID,katalog,fast,who,tip,vid,tm,model,color,size,foto,price,info_prod,kod FROM products ORDER BY tm",$db);
$myrow = mysql_fetch_array ($result); }

do
{printf ("
<table width='800' border='0'  cellspacing='0' cellpadding='0'>
<form action='update_price.php?nomer=$myrow[productID]' method='post' name='form' target='_new'  >
<tr>
<td width='30' align='center' bgcolor='#D9E9C9'  class='text'>$myrow[productID]</td>
<td width='160' align='center' bgcolor='#D9E9C9'  class='text'>$myrow[vid] $myrow[tm] $myrow[model]</td>
<td width='100' align='center' bgcolor='#D9E9C9'><input name='price_new' type='text' size='5' maxlength='10' 
value='$myrow[price]'> <input name='submit' type='submit' value='ok'>
</td> 
<td width='180' align='center' bgcolor='#D9E9C9'  class='text'>$myrow[color]</td>
<td width='170' align='center' bgcolor='#D9E9C9'  class='text'>$myrow[size]</td>
<td width='21' align='center' bgcolor='#D9E9C9' valign='top' ><a href='edit_product.php?productID=$myrow[productID]' target='_blank'><img src='../img/conf_aux.gif' width='21' height='21' alt='редактировать'></a></td>
<td width='21' align='center' bgcolor='#D9E9C9' valign='top' ><a href='del_product.php?productID=$myrow[productID]'><img src='../img/button_delete.gif' width='21' height='21' alt='удалить'></td>
</tr>
</form>
</table>");}

while ($myrow=mysql_fetch_array($result));

?>

