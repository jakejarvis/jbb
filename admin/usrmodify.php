<BR><BR>
			<CENTER>
			<TABLE WIDTH="640" BGCOLOR="#254493" BORDER="0" BORDERCOLOR="#FFFFFF" CELLPADDING="0" CELLSPACING="0">
				<TR>
					<TD WIDTH="33">
					</TD>

					<TD WIDTH="200" VALIGN="top" align="center" BGCOLOR="#254493">
						<FONT COLOR="#FFFFFF">User ID</FONT>
					</TD>

					<TD WIDTH="120" VALIGN="top" align="center" BGCOLOR="#254493">
						<FONT COLOR="#FFFFFF">Username</FONT>
					</TD>

					<TD WIDTH="120" VALIGN="top" align="center" BGCOLOR="#254493">
						<FONT COLOR="#FFFFFF">Password</FONT>
					</TD>

					<TD WIDTH="120" VALIGN="top" align="center" BGCOLOR="#254493">
						<FONT COLOR="#FFFFFF">Other Options</FONT>
					</TD>
				</TR>



				<?php

		
					include ('../conf.php');

					$conn = mysql_connect ($sqlServer, $sqlUsername, $sqlPassword)
						or die ("Could not connect to server $sqlServer");
					mysql_select_db ($sqlDatabase, $conn)
						or die ("Could not connect to database $sqlDatabase");
				

					
					$query2 = "SELECT * FROM jbb_users";
					$result2 = mysql_query ($query2)
						or die ($query2);

					while ($users = mysql_fetch_object($result2)) {
				
						$query = "SELECT * FROM jbb_users WHERE userID = $users->userID";
						$result = mysql_query ($query)
							or die ($query);

						echo "
						<TR>
							<TD></TD>

							<TD COLSPAN=\"1\" BGCOLOR=\"#BBCCDD\">
								<B>$users->userID</B>
							</TD>

							<TD COLSPAN=\"1\" BGCOLOR=\"#EDF3F9\">
								 <B>$users->username</B>
							</TD>

							<TD COLSPAN=\"1\" BGCOLOR=\"#EDF3F9\">
								 <B>$users->password</B>
							</TD>

							<TD COLSPAN=\"1\" BGCOLOR=\"#EDF3F9\">
	<A HREF=\"admin.php?act=usrops&userID=$users->userID\">Click here</a>							 <B></B>
							</TD>
						</TR>
						";

					}

				
				?>

			</TABLE>


