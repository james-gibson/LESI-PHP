<?php

  session_start();

  
  // store to test if they *were* logged in

  $old_user = $_SESSION['valid_user'];
  
  unset($_SESSION['valid_user']);

  session_destroy();

?>

<html>
	<head>
		<meta http-equiv="Content-Language" content="en-us">
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		<title>Log Out</title>
		<!--mstheme-->
		<link rel="stylesheet" href="cany1011.css">
		<meta name="Microsoft Theme" content="canyon 1011">
	</head>
<?php

echo '<table border="1" width="983" height="120">';
echo	'<tr>';
echo		'<td height="120" width="86" style="border-style: solid; border-width: 1px">';
echo		'<a href="http://acadweb1.salisbury.edu/~apnohe/LESI/Home.html">';
echo		'<img border="0" src="file://Nas/geogstud/an96387/COSC%20386/LESI/Lower%20Shore%20Insurance%20Company%20Logo.png" width="128" height="128"></a></td>';
echo		'<td height="120" width="881">';
echo		'<p align="center"><font size="7">Log Out</font></td>';
echo	'</tr>';
echo '</table>';


 
  if (!empty($old_user))

  {

    echo 'Logged out.<br />';

  }

  else

  {

    // if they weren't logged in but came to this page somehow

    echo 'You were not logged in, and so have not been logged out.<br />';
 
  }

?>
 
<a href="Home.html">Back to the home page</a>
</body>
</html>