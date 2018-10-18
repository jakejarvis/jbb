<?php
	include('conf.php');

	$conn = mysql_connect ($sqlServer, $sqlUsername, $sqlPassword)
			or die ("Uh oh! I could not connect to server $sqlServer.");
	
	mysql_select_db ($sqlDatabase)
			or die ("Uh oh! I could not connect to database $sqlDatabase");

	$query = "INSERT INTO jbb_users (username, password, email, avatar) VALUES ('$username','$password','$email','images/avatars/noavatar.gif')";
	$result = mysql_query ($query)
			or die ($query);

?>

<HTML>
<HEAD>
	<META HTTP-EQUIV=\"refresh\" CONTENT=\"0;URL=index.php\">
</HEAD>
</HTML>