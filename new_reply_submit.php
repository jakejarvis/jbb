<?php

	include('conf.php');

	$conn = mysql_connect ($sqlServer, $sqlUsername, $sqlPassword)
			or die ("Uh oh! I could not connect to server $sqlServer.");
	
	mysql_select_db ($sqlDatabase)
			or die ("Uh oh! I could not connect to database $sqlDatabase");

	$time = date("Y-m-d g:i:s");

	$query = "INSERT INTO jbb_replies (topicID, forumID, userID, message, postTime) VALUES ('$topicID','$forumID','$ck_userID','$message','$time')";
	$result = mysql_query ($query)
			or die ($query);

	$query2 = "UPDATE jbb_topics SET lastPostTime = '$time', lastPostUserID = '$ck_userID' WHERE topicID = '$topicID'";
	mysql_query($query2)
			or die ($query2);

	echo "<CENTER>Thank you for posting. Now taking you to your topic.<BR><A HREF=\"index.php?act=topic_view&topicID=$topicID\">(Click here if you do not wish to wait.)</A></CENTER>";

	echo "<meta http-equiv=\"refresh\" content=\"5; url=index.php?act=topic_view&topicID=$topicID\">";
?>



