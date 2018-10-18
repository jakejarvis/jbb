<?php	

include('conf.php');

	$conn = mysql_connect ($sqlServer, $sqlUsername, $sqlPassword)
			or die ("Uh oh! I could not connect to server $sqlServer.");
	
	mysql_select_db ($sqlDatabase)
			or die ("Uh oh! I could not connect to database $sqlDatabase");

	$query = "INSERT INTO jbb_pm (username, title, message, sender) VALUES ('$username','$title','$message','$ck_username')";
	$result = mysql_query ($query)
			or die ($query);

	echo "<CENTER>Thank you for sending a pm to $username. Now taking you to your pm inbox.<BR><A HREF=\"index.php?act=pmlist\">(Click here if you do not wish to wait.)</A></CENTER>";

echo "<meta http-equiv=\"refresh\" content=\"5; url=index.php?act=pmlist\>";

?>