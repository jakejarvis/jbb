<DIV ALIGN="right">
	<A HREF="index.php?act=private">Compose New Message</A>
</DIV>
<BR>
<TABLE WIDTH="100%">
	<TR>

		<TD ALIGN="center">
			Private Message Title
		</TD>

		<TD ALIGN="center">
			Sender
		</TD>


	</TR>


<?php

	include ('conf.php');

	$conn = mysql_connect ($sqlServer, $sqlUsername, $sqlPassword)
		or die ("Could not connect to server $sqlServer");
	mysql_select_db ($sqlDatabase, $conn)
		or die ("Could not connect to database $sqlDatabase");
	
	$query1 = "SELECT * FROM jbb_pm WHERE username = '$ck_username'";
	$result1 = mysql_query ($query1)
		or die ($query1);

	if (mysql_num_rows($result1) == 0) {
		echo "<TR><TD ALIGN=\"center\" COLSPAN=\"5\"><I>You have no new messages</I></TD></TR>";
	}

	while ($pm = mysql_fetch_object($result1)) {
	

					

echo "


			<TR><INPUT TYPE=\"hidden\" NAME=\"$pmID\" VALUE=\"$pm->pmID\">


				
		
				<TD ALIGN=\"center\">
					<A HREF=\"index.php?act=pm_view&pmID=$pm->pmID\">$pm->title</A>
					<BR>
				</TD>
		
				<TD ALIGN=\"center\">
					<B>$pm->sender</B>
				</TD>
		
			</TR>
		";

	}
?>
</TABLE>

