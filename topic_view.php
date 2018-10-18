<DIV ALIGN="right">
	<A HREF="index.php?act=new_reply&topicID=<?=$topicID?>&forumID=<?=$forumID?>">Reply</A>
</DIV>
<CENTER><HR COLOR="#C0C0C0" SIZE="1" WIDTH="75%"></CENTER>



<?php	
	

	showTopic($topicID);

	include ('conf.php');
	
	$conn = mysql_connect ($sqlServer, $sqlUsername, $sqlPassword)
		or die ("Could not connect to server $sqlServer");
	mysql_select_db ($sqlDatabase, $conn)
		or die ("Could not connect to database $sqlDatabase");

	$query1 = "SELECT * FROM jbb_replies WHERE topicID = '$topicID'";
	$result1 = mysql_query ($query1)
		or die ($query1);

	while ($reply = mysql_fetch_object ($result1)) {
		showReply($reply->replyID, $topicID);
	}
?>
<DIV ALIGN="right">
	<A HREF="index.php?act=new_reply&topicID=<?=$topicID?>&forumID=<?=$forumID?>">Reply</A>
</DIV>
