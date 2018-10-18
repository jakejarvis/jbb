<?php
	include('../conf.php');

	$conn = mysql_connect ($sqlServer, $sqlUsername, $sqlPassword)
			or die ("Uh oh! I could not connect to server $sqlServer.");
	
	mysql_select_db ($sqlDatabase)
			or die ("Uh oh! I could not connect to database $sqlDatabase");

	$query = "INSERT INTO jbb_forums (name, description, catID) VALUES ('$forum','$desc','$selectcat')";
	$result = mysql_query ($query)
			or die ($query);

echo "<CENTER>Thank you for editing the user agreement. Now taking you to the administration home.<BR><A HREF=\"admin.php\">(Click here if you do not wish to wait.)</A></CENTER>";

	echo "<meta http-equiv=\"refresh\" content=\"5; url=admin.php\">";

?>
