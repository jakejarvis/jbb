<?php


	$conn = mysql_connect ($sqlServer, $sqlUsername, $sqlPassword)
			or die ("Uh oh! I could not connect to server $sqlServer.");
	
	mysql_select_db ($sqlDatabase, $conn)
			or die ("Uh oh! I could not connect to database $sqlDatabase");

	 $query2 = "UPDATE jbb_replies 
    SET message = '$message'  
    WHERE replyID ='$replyID'";
	$result2 = mysql_query ($query2)
			or die ($query2); 


	echo "<CENTER>Thank you for editing this post. Now taking you to your topic.<BR><A HREF=\"index.php?act=topic_view&topicID=$topicID\">(Click here if you do not wish to wait.)</A></CENTER>";

	echo "<meta http-equiv=\"refresh\" content=\"5; url=index.php?act=topic_view&topicID=$topicID\">";

?>