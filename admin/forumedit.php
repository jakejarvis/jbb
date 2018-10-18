<INPUT TYPE="hidden" name="forumID" value="$forums->forumID">
<?php

include('../conf.php');


	$conn = mysql_connect ($sqlServer, $sqlUsername, $sqlPassword)
			or die ("Uh oh! I could not connect to server $sqlServer.");
	
	mysql_select_db ($sqlDatabase, $conn)
			or die ("Uh oh! I could not connect to database $sqlDatabase");

	$query3 = "SELECT * FROM jbb_forums WHERE forumID = '$forumID'";
	$result3 = mysql_query($query3)
		or die ($query3);

	while ($forums = mysql_fetch_object($result3)) {

echo "
<FORM ACTION=\"admin.php?act=edit_forum_submit&forumID=$forumID\" METHOD=\"post\">
<TABLE WIDTH=\"80%\">
	<TR>
		<TD>Rename Forum:</TD>

		<TD><B><INPUT TYPE=\"text\" NAME=\"name\" SIZE=\"40\" VALUE=\"$forums->name\"></b>
	</TR>

	<TR>
		<TD>Edit Forum Description:</TD>

		<TD><INPUT TYPE=\"text\" NAME=\"description\" SIZE=\"40\" VALUE=\"$forums->description\">
	</TR>

	<TR>
		<TD COLSPAN=\"2\" ALIGN=\"center\">
			<BR><BR><CENTER><INPUT TYPE=\"submit\" VALUE=\"Edit Forum\"><INPUT TYPE=\"hidden\" NAME=\"forumID\" VALUE=\"$forumID\"><INPUT TYPE=\"hidden\" NAME=\"topicID\" VALUE=\"$topicID\"></CENTER>
		</TD>
	</TR>
</TABLE>
</FORM>";

} 
?>