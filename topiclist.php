<DIV ALIGN="right">
	<A HREF="index.php?act=new_topic&forumID=<?=$forumID?>">New Topic</A>
</DIV>
<BR>
<TABLE WIDTH="100%">
	<TR>
		<TD ALIGN="center">
			<!-- img -->
		</TD>

		<TD ALIGN="center">
			Topic Name
		</TD>

		<TD ALIGN="center">
			Starter
		</TD>

		<TD ALIGN="center">
			Replies
		</TD>

		<TD ALIGN="center">
			Last Reply
		</TD>
	</TR>

<?php
	include ('conf.php');

	$conn = mysql_connect ($sqlServer, $sqlUsername, $sqlPassword)
		or die ("Could not connect to server $sqlServer");
	mysql_select_db ($sqlDatabase, $conn)
		or die ("Could not connect to database $sqlDatabase");
	
	$query1 = "SELECT * FROM jbb_topics WHERE forumID = '$forumID' ORDER BY lastPostTime DESC";
	$result1 = mysql_query ($query1)
		or die ($query1);

	if (mysql_num_rows($result1) == 0) {
		echo "<TR><TD ALIGN=\"center\" COLSPAN=\"5\"><I>No Topics Exist</I></TD></TR>";
	}

	while ($topic = mysql_fetch_object($result1)) {
	
		$query2 = "SELECT * FROM jbb_users WHERE userID = '$topic->userID'";
		$result20 = mysql_query($query2)
			or die ($query2);

		$query3 = "SELECT * FROM jbb_users WHERE userID = '$topic->lastPostUserID'";
		$result3 = mysql_query($query3)
			or die ($query3);
	
		$user = mysql_fetch_object($result20);
		$user2 = mysql_fetch_object($result3);

		echo "
			<TR>
				<TD ALIGN=\"center\">
					$topicImg
				</TD>
		
				<TD ALIGN=\"left\">
					<A HREF=\"index.php?act=topic_view&topicID=$topic->topicID&forumID=$topic->forumID\">$topic->subject</A>
					<BR>
					<FONT COLOR=\"#C5C5C5\">$topic->description</FONT>
				</TD>
		
				<TD ALIGN=\"center\">
					$user->username
				</TD>
		
				<TD ALIGN=\"center\">
					$topic->Replies
				</TD>
		
				<TD ALIGN=\"center\">
					by <A HREF=\"index.php?act=user_profile&userID=$topic->lastPostUserID\">$user2->username</A> at $topic->lastPostTime
				</TD>
			</TR>
		";

	}
?>
</TABLE>