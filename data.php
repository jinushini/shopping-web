<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" 
"http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
<title> Sumarry</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link rel="stylesheet" type = "text/css" href = "layout.css">
</head>
<body>
<div id="rightcolumn">
<?php

$s = $_POST["s"];
$m = $_POST["m"];
$l = $_POST["l"];
$xl = $_POST["xl"];
$name = $_POST["name"];
$street = $_POST["street"];
$city = $_POST["city"];
$payment = $_POST["payment"];
$email = $_POST["email"];
$phone = $_POST["phone"];

if ($s == "") $s = 0;
if ($m == "") $m = 0;
if ($l == "") $l = 0;
if ($xl == "") $xl = 0;

$s_cost = 14 * $s;
$m_cost = 15 * $m;
$l_cost = 16 * $l;
$xl_cost = 17 * $xl;
$total_price = $s_cost + $m_cost + 
$l_cost + $xl_cost;
$total_items = $s + $m + $l + $xl;

$file = fopen("consumer.txt","a+");
         fprintf($file,$name );
		 fwrite($file,"\r\n");
		 fprintf($file,$street );
		 fwrite($file,"\r\n");
		 fprintf($file,$city );
		 fwrite($file,"\r\n");
		 fprintf($file,$payment );
		 fwrite($file,"\r\n");
		 fprintf($file,$email );
		 fwrite($file,"\r\n");
		 fprintf($file,$phone );
		 fwrite($file,"\r\n");
		 fprintf($file,$total_price );
		 fwrite($file,"\r\n");
		 fwrite($file,"----------------------------");
		 fwrite($file,"\r\n");
         fclose($file);
// Return the results to the browser in a table
?>
<h4> Your order has been saved! </h4>
<?php
print ("$name <br> $street <br> $city <br>$email <br>$phone <br>");

?>
<br> 

<table border = "border">
<caption> Order Information </caption>
<hr/>
<tr>
<th> Product </th>
<th> Unit Price </th>
<th> Quantity Ordered </th>
<th> Item Cost </th>
</tr><tr align = "center">
<td>S</td>
<td> $14 </td>
<td> <?php print ("$s"); ?> </td>
<td> <?php printf ("$ %4.2f", $s_cost); ?>
</td>
</tr>
<tr align = "center">
<td> M </td>
<td> $15</td>
<td> <?php print ("$m"); ?> </td>
<td> <?php printf ("$ %4.2f", $m_cost); ?>
</td>
</tr>
<tr align = "center">
<td> L </td>
<td> $16</td>
<td> <?php print ("$l"); ?> </td>
<td> <?php printf ("$ %4.2f", $l_cost); ?>
</td>
</tr>
<tr align = "center">
<td>XL</td>
<td> $17</td>
<td> <?php print ("$xl"); ?> </td>
<td> <?php printf ("$ %4.2f", $xl_cost); ?>
</td>
</tr>
</table>
<hr/>
<br> 
<?php
print ("You ordered $total_items T-Shirt items <br>");
printf ("Your total bill is: $ %5.2f <br>", $total_price);
print ("Your chosen method of payment is: $payment <br>");
?>
<hr/>
</div>
</body>
</html>