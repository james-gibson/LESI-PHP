<?php
  session_start();
  ?>
  <html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Maintenance Options</title>
<!--mstheme--><link rel="stylesheet" href="cany1011.css">
<meta name="Microsoft Theme" content="canyon 1011">
</head>

<script type="text/javascript">
    var startTime = new Date();        //Start the clock!
    window.onbeforeunload = function()        //When the user leaves the page(closes the window/tab, clicks a link)...
    {
        var endTime = new Date();        //Get the current time.
        var timeSpent = (endTime - startTime);        //Find out how long it's been.
        var xmlhttp;        //Make a variable for a new ajax request.
        if (window.XMLHttpRequest)        //If it's a decent browser...
        {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();        //Open a new ajax request.
        }
        else        //If it's a bad browser...
        {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");        //Open a different type of ajax call.
        }
	//alert(timeSpent);
	var siteid = 2;
        var url = "http://acadweb1.salisbury.edu/~apnohe/LESI/SESSIONS.php?timein="+startTime;        //Send the time on the page to a php script of your choosing.
	var userid = "<?php echo $_SESSION['valid_user']; ?>";
	var url2 = url+"&userid="+userid;
	var url3 = url2+"&timeout="+endTime;
	var url4 = url3+"&siteid="+siteid;
        xmlhttp.open("GET",url4,false);        //The false at the end tells ajax to use a synchronous call which wont be severed by the user leaving.
        xmlhttp.send(null);        //Send the request and don't wait for a response.
	
    }
//alert (startTime);
</script>

<?
  // check session variable

  if ($_SESSION['level'] == 1)
  {
?>
<table border="1" width="983" height="120">
	<tr>
		<td height="120" width="86" style="border-style: solid; border-width: 1px">
		<a href="http://acadweb1.salisbury.edu/~apnohe/LESI/Home2.php">
		<img border="0" src="Lower%20Shore%20Insurance%20Company%20Logo.png" width="128" height="128"></a></td>
		<td height="120" style="width: 3150px">
		<p align="center"><font size="7">Maintenance</font></td>
		<td height="120" width="881">
		You are currently logged in&nbsp; as:<br>
		<br><? echo $_SESSION['valid_user']; ?>
		<br>
		<a href="http://acadweb1.salisbury.edu/~apnohe/LESI/logout.php">Logout</a></td>
	</tr>
</table>
<?
echo '<p align="center">&nbsp;</p>';
echo'<ul>';
echo	'<li><font size="5">';
echo	'<a href="http://acadweb1.salisbury.edu/~apnohe/LESI/Maintenance_Location.php">Loc';
echo	'ation</a></font></li>';
echo'</ul>';
echo'<p>&nbsp;</p>';
echo'<ul>';
echo	'<li><font size="5">';
echo	'<a href="http://acadweb1.salisbury.edu/~apnohe/LESI/Maintenance_Agent.php">Agent</a></font></li>';
echo'</ul>';
echo'<p>&nbsp;</p>';
echo'<ul>';
echo	'<li><font size="5">';
echo	'<a href="http://acadweb1.salisbury.edu/~apnohe/LESI/Maintenance_Discounts.php">Discount</a></font></li>';
echo'</ul>';
echo'<p>&nbsp;</p>';
echo'<ul>';
echo	'<li><font size="5">';
echo	'<a href="http://acadweb1.salisbury.edu/~apnohe/LESI/Maintenance_Customer.php">Customer</a></font></li>';
echo'</ul>';
echo'<p>&nbsp;</p>';
echo'<ul>';
echo	'<li><font size="5">';
echo	'<a href="http://acadweb1.salisbury.edu/~apnohe/LESI/Maintenance_Policy.php">Policy</a></font></li>';
echo'</ul>';
echo'<p>&nbsp;</p>';
echo'<ul>';
echo	'<li><font size="5">';
echo	'<a href="http://acadweb1.salisbury.edu/~apnohe/LESI/Maintenance_Users.php">Users</a></font></li>';
echo'</ul>';
echo'<p>&nbsp;</p>';
//echo '<p>'.$_SESSION['level'].'user</p>';
//echo '<p>You are currently logged in as '. $_SESSION['valid_user'] .'</p>';
}

  else
  {
?>
<table border="1" width="983" height="120">
	<tr>
		<td height="120" width="86" style="border-style: solid; border-width: 1px">
		<a href="http://acadweb1.salisbury.edu/~apnohe/LESI/Home2.php">
		<img border="0" src="Lower%20Shore%20Insurance%20Company%20Logo.png" width="128" height="128"></a></td>
		<td height="120" style="width: 3150px">
		<p align="center"><font size="7">Unauthorized Access</font></td>
		<td height="120" width="881">
		You are currently logged in&nbsp; as:<br>
		<br><? echo $_SESSION['valid_user']; ?>
		<br>
		<a href="http://acadweb1.salisbury.edu/~apnohe/LESI/logout.php">Logout</a></td>
	</tr>
</table>
<?
echo '<p align="center">&nbsp;</p>';
echo'<ul>';
echo	'<li><font size="5">';
echo	'<a href="http://acadweb1.salisbury.edu/~apnohe/LESI/Home2.php">Click here ';
echo	'to return to the home screen.</a></font></li>';
echo'</ul>';

echo'<p>&nbsp;</p>';
}

//$query = "INSERT INTO `SESSIONS` (`Time`, 'USER', 'SITE') VALUES ('".$_GET["time"]."', '".$_SESSION['valid_user']."', '2')";        //Add them to the db.
//$sqlresult = mysql_query($query, $connection);

?>