<?php

echo "<TABLE BORDER=\"0\">
<TR>
<FORM ACTION=\"index.php?act=register_submit\" METHOD=\"post\">
<TD ALIGN=\"center\" WIDTH=\"170\"><B>Username</B><BR>Max. 30 Chars.</TD> 
<TD WIDTH=\"800\"><INPUT TYPE=\"text\" NAME=\"username\" MAXLENGTH=\"30\" SIZE=\"60\">
</TR>
<TR>
<TD ALIGN=\"center\" WIDTH=\"170\"><B>Password</B><BR>Max 16 Chars.</TD>
<TD WIDTH=\"800\"><INPUT TYPE=\"password\" NAME=\"password\" MAXLENGTH=\"16\" SIZE=\"60\">
</TR>
<TR>
<TD ALIGN=\"center\" WIDTH=\"170\"><B>Email address</B><BR>This is where your confirmation is sent.</TD>
<TD WIDTH=\"800\"><INPUT TYPE=\"text\" NAME=\"email\" SIZE=\"60\">
</TR>
<TR>
<TD ALIGN=\"center\" COLSPAN=\"2\">";

	include ('./conf.php');

					$conn = mysql_connect ($sqlServer, $sqlUsername, $sqlPassword)
						or die ("Could not connect to server $sqlServer");
					mysql_select_db ($sqlDatabase, $conn)
						or die ("Could not connect to database $sqlDatabase");
				

					
					$query = "SELECT * FROM jbb_preferences";
					$result = mysql_query ($query)
						or die ($query);

	while ($agreement = mysql_fetch_object($result)) {

						echo "<CENTER>
						<TEXTAREA ROWS=\"15\" COLS=\"55\">$agreement->aggrement</TEXTAREA><BR>
						</CENTER>";
	}

echo "</TABLE><BR><BR><CENTER>
<INPUT TYPE=\"submit\" value=\"I agree to these terms and would like to continue\" NAME=\"register_submit\">
</FORM>";

?>