<?php


	include('conf.php');	

	$conn = mysql_connect ($sqlServer, $sqlUsername, $sqlPassword)
			or die ("Uh oh! I could not connect to server $sqlServer.");
	
	mysql_select_db ($sqlDatabase)
			or die ("Uh oh! I could not connect to database $sqlDatabase");

	$time = date("Y-m-d g:i:s");

	$query = "INSERT INTO jbb_topics (forumID, userID, subject, description, firstPost, postTime, lastPostTime, lastPostUserID) VALUES ('$forumID','$ck_userID','$subject','$desc','$firstPost','$time','$time','$ck_userID')";
	$result = mysql_query ($query)
			or die ($query);

$query2 = "SELECT * FROM jbb_topics WHERE topicID = '$topicID'";
	$result2 = mysql_query ($query2)
			or die ($query2);

$query3 = "SELECT * FROM jbb_forums WHERE forumID = '$forumID'";
	$result3 = mysql_query ($query3)
			or die ($query3);

$topic = mysql_fetch_object($result2);

$forum = mysql_fetch_object($result3);

$topicID = $topic->topicID;


	echo "<CENTER>Thank you for posting. Now returning to \"$forum->name\".<BR><A HREF=\"index.php?act=topiclist&forumID=$forumID\">(Click here if you do not wish to wait.)</A></CENTER>";

echo "<meta http-equiv=\"refresh\" content=\"5; url=index.php?act=topiclist&forumID=$forumID\>";

?>



	