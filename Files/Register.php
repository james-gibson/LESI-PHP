<?php
session_start();
?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Welcome to Lower Eastern Shore I</title>
<!--mstheme--><link rel="stylesheet" href="cany1011.css">
<meta name="Microsoft Theme" content="canyon 1011">
</head>

<body>

<table border="1" width="983" height="120">
	<tr>
		<td height="120" width="86" style="border-style: solid; border-width: 1px">
		<a href="http://acadweb1.salisbury.edu/~apnohe/LESI/Home.html">
		<img border="0" src="Lower%20Shore%20Insurance%20Company%20Logo.png" width="128" height="128"></a></td>
		<td height="120" width="881">
		<p align="center"><font size="7">Registration</font></td>
	</tr>
</table>
<form method="POST" action="RegisterUser.php">
	<p align="left">User name : <input type="text" name="userid" size="20"></p>
	<p align="left">Password : <input type="password" name="password" size="20"></p>
	<p align="left">Confirm Password :
	<input type="password" name="password_confirm" size="20"></p>
	<p align="left">First Name : <input type="text" name="f_name" size="20"></p>
	<p align="left">Last Name : <input type="text" name="l_name" size="20"></p>
	<p align="left">Address : <input type="text" name="address" size="20"></p>
	<p align="left">Social Security Number :
	<input type="text" name="ssn" size="20"></p>
	<p align="left">Phone Number : <input type="text" name="phone_num" size="20"></p>
	<p align="left">Date of Birth : <input type="text" name="dob" size="20"></p>
	<p align="center"><input type="submit" value="Register" name="B1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="reset" value="Reset" name="B2"></p>
</form>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>

</body>

</html>