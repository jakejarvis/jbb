<?php

include('../conf.php');

$conn = mysql_connect ($sqlServer, $sqlUsername, $sqlPassword)
			or die ("Uh oh! I could not connect to server $sqlServer.");
	
	mysql_select_db ($sqlDatabase)
			or die ("Uh oh! I could not connect to database $sqlDatabase");

	$query = "SELECT * FROM jbb_preferences";
	$result = mysql_query ($query)
			or die ($query);

$prefs = mysql_fetch_object ($result);


echo "<CENTER>
<TABLE WIDTH=\"100%\"><FORM ACTION=\"admin.php?act=options_submit\" METHOD=\"post\">
<TR><TD>
Board Name: <INPUT TYPE=\"text\" NAME=\"boardname\" VALUE=\"$prefs->boardName\"><BR></TD>
</TR><TR><TD>
Board URL: <INPUT TYPE=\"text\" NAME=\"boardURL\" VALUE=\"$prefs->boardURL\"><BR></TD>
</TR><TR><TD>
Board Email Address: <INPUT TYPE=\"text\" NAME=\"boardemail\" VALUE=\"$prefs->boardEmail\"></TD>
</TR><TR><TD>
<INPUT TYPE=\"submit\" NAME=\"submit\" VALUE=\"Update\"></CENTER>
";



?>