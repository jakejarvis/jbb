<TABLE WIDTH="100%" HEIGHT="10%">
<TR>
<TD BACKGROUND="images/logobkgbig.gif"><FONT FACE="Verdana" SIZE="72" COLOR="white"><CENTER><B>Edit User Agreement</B></CENTER></FONT>
</TD>
</TR>
</TABLE>

<FONT FACE="Verdana">



	<?php

					include ('../conf.php');

					$conn = mysql_connect ($sqlServer, $sqlUsername, $sqlPassword)
						or die ("Could not connect to server $sqlServer");
					mysql_select_db ($sqlDatabase, $conn)
						or die ("Could not connect to database $sqlDatabase");
				

					
					$query = "SELECT * FROM jbb_preferences";
					$result = mysql_query ($query)
						or die ($query);

	$agreement = mysql_fetch_object($result);

						echo "<CENTER>
						<FORM ACTION=\"agreement_submit.php\">
<BR>To edit the user agreement, please enter the desired changes below, and submit.</FONT><BR><BR>

						<TEXTAREA ROWS=\"15\" COLS=\"55\" NAME=\"agreement\">$agreement->aggrement</textarea><BR><INPUT TYPE=\"submit\" VALUE=\"Sumbit\"><INPUT TYPE=\"reset\" VALUE=\"Reset Changes\"></FORM>
						</CENTER>";



?> 
