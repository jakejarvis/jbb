<TABLE WIDTH="100%" HEIGHT="10%">
<TR>
<TD BACKGROUND="images/logobkgbig.gif"><FONT FACE="Verdana" SIZE="72" COLOR="white"><CENTER><B>Create New Forum</B></CENTER></FONT>
</TD>
</TR>
</TABLE>

<?php

include ('../conf.php');

					$conn = mysql_connect ($sqlServer, $sqlUsername, $sqlPassword)
						or die ("Could not connect to server $sqlServer");
					mysql_select_db ($sqlDatabase, $conn)
						or die ("Could not connect to database $sqlDatabase");
				

					
					$query2 = "SELECT * FROM jbb_categories";
					$result2 = mysql_query ($query2)
						or die ($query2);



echo "<FONT FACE=\"Verdana\">
<FORM ACTION=\"newforum_submit.php\" method=\"post\">
<BR>To create a new forum, please enter the desired name and description below and submit.<BR><BR><CENTER><b>Forum Name</b><BR><INPUT TYPE=\"text\" NAME=\"forum\"><BR><BR>
<b>Select Category for forum to be inserted into</b><BR>
<SELECT NAME=\"selectcat\">";

					while ($cat = mysql_fetch_object($result2)) {
				
						
echo "
<OPTION VALUE=\"$cat->catID\">$cat->name</OPTION>";
 }

echo "</SELECT><BR>
<BR><BR><b>Description</b><br><TEXTAREA NAME=\"desc\" COLS=\"40\" ROWS=\"5\"></textarea><BR><INPUT TYPE=\"submit\" VALUE=\"Create\"><INPUT TYPE=\"reset\" VALUE=\"Reset Input\"></CENTER>
</FORM>
</FONT>";



?>




