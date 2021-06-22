<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home page!</title>
</head>
<body>

	<h1>Home</h1>
	<h2>Converter Site</h2>
	<button onclick="changeText()">Home!</button>
	<a href="home.php">Show File</a
	<br><br>
	<button onclick="changeText()">Conversion!</button>
	<a href="history.php">Show File</a
	<br><br>
	<button onclick="changeText()">History!</button>
	<a href="conversion.php">Show File</a
	<br><br>
	<br><br>
<form action="home.php" method="POST">
<h1 align=center><font color=blue><ins>LENGTH CONVERSION</ins></font></h1>
<h1 align="right"><font size="3" color="#FF0000"><a href="../history.php"><ins>home</ins></a></font></h1>
<table align=center>
<tr>
<td>Enter Value </td>
<td><input type=text name=val></td>
</tr>
<tr>
<td>From</td>
<td>
<select name="from">
            <option value=0>--select--</option>
            <option value=1>Centimeter</option>
            <option value=2>Meter</option>
            <option value=3>Kilometer</option>
            <option value=4>Feet</option>
            <option value=5>Inch</option>
</select>
</td>
</tr>
</table>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit value=Convert></p>

<?php
if(isset($_POST['val']))
{
$val=$_POST['val'];
if(!preg_match('/^[0-9.]/',$val))
{
 echo '<input language="Php">'."\n".'alert("Invalid input");'."\n";
 echo "window.location=('length.php');\n";
echo '</input>';
}
$from=$_POST['from'];
if($from==0)
{
echo '<input language="Php">'."\n".'alert("Please select a base unit");'."\n";echo '</input>';
}
else
{
function assign($from,$val)
{
switch ($from)
{
case 1:
$fromu="Centimeter";$cm=1;$me=0.01;$km=0.00001;$ft=0.3280839;$in=0.39370078;$mi=0.000006213;$ya=0.010936132;break;
case 2:
$fromu="Meter";$cm=100;$me=1;$km=0.001;$ft=3.280839;$in=39.370078;$mi=0.00062137;$ya=1.0936132;break;
case 3:
$fromu="Kilometer";$cm=100000;$me=1000;$km=1;$ft=3280.839;$in=39370.078;$mi=0.6213;$ya=1093.6132;break;
case 4:
$fromu="Feet";$cm=30.48;$me=0.3048;$km=0.0003048;$ft=1;$in=12;$mi=0.00018939;$ya=0.33333;break;
case 5:
$fromu="Inches";$cm=2.54;$me=0.0254;$km=0.0000254;$ft=0.083333;$in=1;$mi=0.0000157828;$ya=0.027778;break;
}
 echo "<br><br><table align=center>
 <tr><td><h3> ",$val," ",$fromu," equivalent is </h3></td></tr>
 <tr align=right><td><u> ",(double)($val*$cm),"</u> Centimeter</td></tr>
 <tr align=right><td><u> ",(double)($val*$me),"</u> Meters</td></tr>
 <tr align=right><td><u> ",(double)($val*$km),"</u> Kilometers</td></tr>
 <tr align=right><td><u> ",(double)($val*$in),"</u> Inches</td></tr>
 <tr align=right><td><u> ",(double)($val*$ft),"</u> Feet</td></tr>
 <tr align=right><td><u> ",(double)($val*$mi),"</u> Miles</td></tr>
 <tr align=right><td><u> ",(double)($val*$ya),"</u> Yards</td></tr></table>";
}
assign($from,$val);
}
}
?>
</form>
<br><br>

</body>
</html>