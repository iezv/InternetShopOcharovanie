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

<?php 
ini_set('display_errors',1);
error_reporting(E_ALL);
include("blocks/bd.php");

function getRealIpAddr()
{
  if (!empty($_SERVER['HTTP_CLIENT_IP']))
  {
    $ip=$_SERVER['HTTP_CLIENT_IP'];
  }
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
  {
    $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  else
  {
    $ip=$_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}
$ip=getRealIpAddr();
if (isset($_GET['f']))
{
	$familiya=$_GET['f'];
}

if (isset($_GET['i']))
{
	$imya=$_GET['i'];
}
if (isset($_GET['e']))
{
	$email=$_GET['e'];
	}
if (isset($_GET['t']))
{
	$telefon=$_GET['t'];
}
if (isset($_GET['g']))
{
	$gorod=$_GET['g'];
}
if (isset($_GET['ob']))
{
	$oblast=$_GET['ob'];
}
if (isset($_GET['d']))
{
	$dostavka=$_GET['d'];
}
if (isset($_GET['o']))
{
	$oplata=$_GET['o'];
}
if (isset($_POST['index']))
{
	$index=$_POST['index'];
}
if (isset($_POST['adressa']))
{
	$adressa=$_POST['adressa'];
}

if (isset($_POST['sklad']))
{
	$sklad=$_POST['sklad'];
}
if (isset($_POST['primechanie']))
{
	$primechanie=$_POST['primechanie'];
}


function send_mime_mail($name_from, // ��� �����������
                        $email_from, // email �����������
                        $name_to, // ��� ����������
                        $email_to, // email ����������
                        $data_charset, // ��������� ���������� ������
                        $send_charset, // ��������� ������
                        $subject, // ���� ������
                        $body // ����� ������
                        ) {
  $to = mime_header_encode($name_to, $data_charset, $send_charset)
                 . ' <' . $email_to . '>';
  $subject = mime_header_encode($subject, $data_charset, $send_charset);
  $from =  mime_header_encode($name_from, $data_charset, $send_charset)
                     .' <' . $email_from . '>';
  if($data_charset != $send_charset) {
    $body = iconv($data_charset, $send_charset, $body);
  }
  $headers = "From: $from\r\n";
  $headers .= "Content-type: text/plain; charset=$send_charset\r\n";

  return mail($to, $subject, $body, $headers);
}

function mime_header_encode($str, $data_charset, $send_charset) {
  if($data_charset != $send_charset) {
    $str = iconv($data_charset, $send_charset, $str);
  }
  return '=?' . $send_charset . '?B?' . base64_encode($str) . '?=';
}


$data=date("d-m-Y H:i");


if ((isset ($adressa)) and ($adressa=='0' or $adressa==''))
{echo "
<table width='800' align='center' bgcolor='#D9E9C9' valign='top'>
<tr height='100'><td colspan='8' align='center' class='price'>�� ������ ������� ����� ��������!</td></tr>
<tr align='center'> <td align='center'><input type='button' value='��������� �����' onClick='history.back(-1)'/>
</td></tr></table>";}

if ((isset ($sklad)) and ($sklad=='0' or $sklad==''))
{echo "<table width='800' align='center' bgcolor='#D9E9C9' valign='top' >
<tr height='100'><td colspan='8' align='center' class='price'>�� ������ ������� ����� ��������!</td></tr>
<tr align='center'> <td align='center'><input type='button' value='��������� �����' onClick='history.back(-1)'/>
</td></tr></table>";}

if (($dostavka=='����� �����') and $sklad!='0' and $sklad!='')

{printf("<table width='800' class='main_border' align='center'>
<tr><td width='800' align='center' bgcolor='#D9E9C9' valign='top' class='h2'>�������! ��� ����� ������! </td>
</tr>
<tr><td width='800' align='center' bgcolor='#D9E9C9' valign='top' class='h3'>����� ����� ��������� � ������� 3-5 ������� ���� � ������� ����������.</td>
</tr>
<tr align='center'> <td align='center'><a href='index.php'><input type='button' value='������� �� ������� ��������'/></a>
</td></tr></table>


<table width='800' bgcolor='#D9E9C9' align='center'> 
<tr align='center'>
<td width='45'>�<br>�/�</td>
<td width='60'>���</td>
<td width='355'>������������ ������</td>
<td width='100'>����</td>
<td width='50'>������</td>
<td width='100'>����������</td>
<td width='50'>����</td>
<td width='100'>�����</td>
</tr>");

$result = mysql_query ("SELECT * FROM korzina WHERE ip='$ip'",$db);
$myrow= mysql_fetch_array ($result);
$count=0;
$summa=0;
$nn=0;

do
{$count=$count+1;
$sum=$myrow['price']*$myrow['kolvo'];
$summa=$summa+$sum;
$nn=$nn+$myrow['kolvo'];

printf ("<tr  align='center'>
<td align='center'  width='45'>$count</td>
<td align='center'  width='60'>$myrow[kod]</td>
<td width='355'>$myrow[name]</td>
<td width='100'>$myrow[color]</td>
<td width='50'>$myrow[size]</td>
<td width='100'>$myrow[kolvo]</td>
<td width='50'>$myrow[price]</td>
<td width='100'>$sum</td>
</tr>");}

while ($myrow=mysql_fetch_array($result));

printf("

<tr >
<td colspan='5' align='right'>�����     </td>
<td align='center' width='50'>$nn</td>
<td width='50'> </td>
<td  align='center' width='100'>$summa</td>
</tr>
<tr align='center'>
<td colspan='6' align='right'>������     </td>
");

if ($summa>=500)
{$dost=0;}
else
{$dost=30;}
if ($summa>=700 and $summa<1500)
{$skid=3;}
if ($summa>=1500 and $summa<3000)
{$skid=5;}
if ($summa>=3000)
{$skid=7;}
if ($summa<700)
{$skid=0;}
$summa_sk=round($summa*$skid/100);
$summa_sk_dos=$summa-$summa_sk+$dost;


printf("
<td align='center'>$skid &#37  </td>
<td width='100' class='skid' align='center'>$summa_sk</td>
</tr>
<tr>
<td colspan='6' align='right'>��������     </td>
<td align='center'>  </td>
<td width='100' class='text' align='center'>$dost</td>
</tr>
<tr>
<td colspan='6' align='right'>����� � ������     </td>
<td align='center'>   </td>
<td width='100' class='h3' align='center'>$summa_sk_dos</td>
</tr>");

$gorod=$gorod.' '.$oblast;
$adress=$sklad;

$result_zakaz_klient = mysql_query ("INSERT INTO zakaz_klient (data,familiya,imya,telefon,email, gorod,dostavka,oplata,adress,kolvo,summa_zak,primechanie) VALUES ('$data','$familiya','$imya','$telefon','$email','$gorod','$dostavka','$oplata','$adress','$nn','$summa_sk_dos','$primechanie')"); 
$nomer=mysql_insert_id();
echo "<font class='price'>����� ������ - $nomer</font>";


$result_ka = mysql_query ("SELECT * FROM korzina WHERE ip='$ip'",$db);
$myrow_ka= mysql_fetch_array ($result_ka);
do
{$result_zakaz_tovari = mysql_query ("INSERT INTO zakaz_tovari(data,nomer,familiya,ip,kod,name,color,size,kolvo,price) VALUES ('$data', '$nomer','$familiya','$ip','$myrow_ka[kod]','$myrow_ka[name]','$myrow_ka[color]','$myrow_ka[size]','$myrow_ka[kolvo]','$myrow_ka[price]')");	}

while ($myrow_ka=mysql_fetch_array($result_ka));

send_mime_mail('�� ���������� �������� �����','ocharovanie.com.ua@ya.ru', $familiya.' '.$imya, $email,
               'CP1251',  // ���������, � ������� ��������� ������������ ������
               'KOI8-R', // ���������, � ������� ����� ���������� ������
               '��� ����� ������', 
'������������, '.$imya.'! 

������� �� ��� �����!
����� ������ '.$nomer.'. 
����� ������ '.$summa_sk_dos.' ���.
���������� ������� - '.$nn.' ������. 

����� ����� ��������� � ������� 5 ������� ���� � ������� ����������. 
���� �� ������ ������� ���������� � ������� ��� ��� ���������� ������,
����� ���������� ������� �� � ���� �������� � ������� ���������.
���������� � ���� ���������� ������ �� ������ �������������� �� ����� �����, 
������ ����� ������ � ��������������� ����. 
�� �������� ������� �� ������ ���������������� ���������� �� ��������� ������� '.$telefon.'. 
���� � ��� �������� �������, ������ �� ����� ������ ��� ������� �� �������� 096-533-4-777. ����� ��������� ��������� �������� ��������� ��� ����� �� ����� �����  http://ocharovanie.com.ua/aboutus.php

� ���������, ����� 
"����������" www.ocharovanie.com.ua');


send_mime_mail('�� ���������� �������� �����','ocharovanie.com.ua@ya.ru', '�����', 'ocharovanie.com.ua@ya.ru',
               'CP1251',  // ���������, � ������� ��������� ������������ ������
               'KOI8-R', // ���������, � ������� ����� ���������� ������
               '����� �����', 
'������, ������! �� �������� ����� �����!' );




$result_del = mysql_query ("DELETE FROM korzina WHERE ip='$ip'",$db);


}


if (($dostavka=='��������') and $adressa!='0' and $adressa!='')

{printf("<table width='800' class='main_border' align='center'>
<tr><td width='800' align='center' bgcolor='#D9E9C9' valign='top' class='h2'>�������! ��� ����� ������!</td>
</tr>
<tr><td width='800' align='center' bgcolor='#D9E9C9' valign='top' class='h3'>����� ����� ��������� � ������� 3-5 ������� ���� � ������� ����������.</td>
</tr>
<tr align='center'> <td align='center'><a href='index.php' class='h3'>������� �� ������� ��������</a>
</td></tr></table>

<table width='800' bgcolor='#D9E9C9' align='center'> 
<tr align='center'>
<td width='45'>�<br>�/�</td>
<td width='60'>���</td>
<td width='355'>������������ ������</td>
<td width='100'>����</td>
<td width='50'>������</td>
<td width='100'>����������</td>
<td width='50'>����</td>
<td width='100'>�����</td>
</tr>");

$result = mysql_query ("SELECT * FROM korzina WHERE ip='$ip'",$db);
$myrow= mysql_fetch_array ($result);
$count=0;
$summa=0;
$nn=0;

do
{$count=$count+1;
$sum=$myrow['price']*$myrow['kolvo'];
$summa=$summa+$sum;
$nn=$nn+$myrow['kolvo'];

printf ("<tr  align='center'>
<td align='center'  width='45'>$count</td>
<td align='center'  width='60'>$myrow[kod]</td>
<td width='60'>$myrow[name]</td>
<td width='100'>$myrow[color]</td>
<td width='50'>$myrow[size]</td>
<td width='100'>$myrow[kolvo]</td>
<td width='50'>$myrow[price]</td>
<td width='100'>$sum</td>
</tr>");}

while ($myrow=mysql_fetch_array($result));

printf("

<tr >
<td colspan='5' align='right'>�����     </td>
<td align='center' width='50'>$nn</td>
<td width='50'> </td>
<td  align='center' width='100'>$summa</td>
</tr>
<tr align='center'>
<td colspan='6' align='right'>������     </td>
");

if ($summa>=500)
{$dost=0;}
else
{$dost=30;}
if ($summa>=700 and $summa<1500)
{$skid=3;}
if ($summa>=1500 and $summa<3000)
{$skid=5;}
if ($summa>=3000)
{$skid=7;}
if ($summa<700)
{$skid=0;}
$summa_sk=round($summa*$skid/100);
$summa_sk_dos=$summa-$summa_sk+$dost;


printf("
<td align='center'>$skid &#37  </td>
<td width='100' class='skid' align='center'>$summa_sk</td>
</tr>
<tr>
<td colspan='6' align='right'>��������     </td>
<td align='center'>  </td>
<td width='100' class='text' align='center'>$dost</td>
</tr>
<tr>
<td colspan='6' align='right'>����� � ������     </td>
<td align='center'>   </td>
<td width='100' class='h3' align='center'>$summa_sk_dos</td>
</tr>");

$gorod=$gorod.' '.$oblast;
$adress=$index.' '.$adressa;

$result_zakaz_klient = mysql_query ("INSERT INTO zakaz_klient (data,familiya,imya,telefon,email, gorod,dostavka,oplata,adress,kolvo,summa_zak,primechanie) VALUES ('$data','$familiya','$imya','$telefon','$email','$gorod','$dostavka','$oplata','$adress','$nn','$summa_sk_dos','$primechanie')"); $nomer=mysql_insert_id();
echo "<font class='price'>����� ������ - $nomer</font>";
$result_ka = mysql_query ("SELECT * FROM korzina WHERE ip='$ip'",$db);
$myrow_ka= mysql_fetch_array ($result_ka);
do
{$result_zakaz_tovari = mysql_query ("INSERT INTO zakaz_tovari(data,nomer,familiya,ip,kod,name,color,size,kolvo,price) VALUES ('$data', '$nomer','$familiya','$ip','$myrow_ka[kod]','$myrow_ka[name]','$myrow_ka[color]','$myrow_ka[size]','$myrow_ka[kolvo]','$myrow_ka[price]')");	}

while ($myrow_ka=mysql_fetch_array($result_ka));



send_mime_mail('�� ���������� �������� �����','ocharovanie.com.ua@ya.ru', $familiya.' '.$imya, $email,
               'CP1251',  // ���������, � ������� ��������� ������������ ������
               'KOI8-R', // ���������, � ������� ����� ���������� ������
               '��� ����� ������', 
'������������, '.$imya.'! 

������� �� ��� �����!
����� ������ '.$nomer.'. 
����� ������ '.$summa_sk_dos.' ���.
���������� ������� - '.$nn.' ������. 

����� ����� ��������� � ������� 5 ������� ���� � ������� ����������. 
���� �� ������ ������� ���������� � ������� ��� ��� ���������� ������,
����� ���������� ������� �� � ���� �������� � ������� ���������.
���������� � ���� ���������� ������ �� ������ �������������� �� ����� �����, 
������ ����� ������ � ��������������� ����. 
�� �������� ������� �� ������ ���������������� ���������� �� ��������� ������� '.$telefon.'. 
���� � ��� �������� �������, ������ �� ����� ������ ��� ������� �� �������� 096-533-4-777. ����� ��������� ��������� �������� ��������� ��� ����� �� ����� �����  http://ocharovanie.com.ua/aboutus.php

� ���������, ����� 
"����������" www.ocharovanie.com.ua');
send_mime_mail('�� ���������� �������� �����','ocharovanie.com.ua@ya.ru', '�����', 'ocharovanie.com.ua@ya.ru',
               'CP1251',  // ���������, � ������� ��������� ������������ ������
               'KOI8-R', // ���������, � ������� ����� ���������� ������
               '����� �����', 
'������, ������! �� �������� ����� �����!');
$result_del = mysql_query ("DELETE FROM korzina WHERE ip='$ip'",$db);
}

?>

</body>
</html>