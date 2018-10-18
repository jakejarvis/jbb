<HTML>
	<TABLE BORDER="2" BORDERCOLOR="black">
							<TR>
							<TD ALIGN="center" WIDTH="130" BGCOLOR="#008CAD">
								<B>Username</B>
							</TD>
							<TD ALIGN="center" WIDTH="190" BGCOLOR="#0B8F91">
								<B>Email</b>	 
							</TD>
							<TD BGCOLOR="#008CAD" ALIGN="center" WIDTH="130">
							<B>Aim</b>
						</TR>
						</TABLE>
</HMTL>
	<?php
					include ('conf.php');

					$conn = mysql_connect ($sqlServer, $sqlUsername, $sqlPassword)
						or die ("Could not connect to server $sqlServer");
					mysql_select_db ($sqlDatabase, $conn)
						or die ("Could not connect to database $sqlDatabase");
				

					
					$query = "SELECT * FROM jbb_users";
					$result = mysql_query ($query)
						or die ($query);
					
					echo "<table>";


	while ($users = mysql_fetch_object($result)) {

						echo "
						<TABLE CELLSPACING=\"2\">
							<TR>
							<TD WIDTH=\"0\">
							</TD>
							<TD ALIGN=\"center\" BGCOLOR=\"#008CAD\" WIDTH=\"132\">
								<B>$users->username</B>
							</TD>
							<TD ALIGN=\"center\" WIDTH=\"190\" BGCOLOR=\"#0B8F91\">
								<B><A HREF=\"mailto:$users->email\">$users->email</a></b>	 
							</TD>
							<TD BGCOLOR=\"#008CAD\" ALIGN=\"center\" WIDTH=\"132\">
							<B>$users->aim</b>
						</TR>
						</TABLE>
						";

					
}
?>