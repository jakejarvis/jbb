			<BR><BR>
			<CENTER>
			<TABLE WIDTH="640" BGCOLOR="#254493" BORDER="0" BORDERCOLOR="#FFFFFF" CELLPADDING="0" CELLSPACING="0">
				<TR>
					<TD WIDTH="33">
					</TD>

					<TD WIDTH="200" VALIGN="top" align="center" BGCOLOR="#254493">
						<FONT COLOR="#FFFFFF">Forum</FONT>
					</TD>

					<TD WIDTH="120" VALIGN="top" align="center" BGCOLOR="#254493">
						<FONT COLOR="#FFFFFF">Threads</FONT>
					</TD>

					<TD WIDTH="120" VALIGN="top" align="center" BGCOLOR="#254493">
						<FONT COLOR="#FFFFFF">Replies</FONT>
					</TD>

					<TD WIDTH="120" VALIGN="top" align="center" BGCOLOR="#254493">
						<FONT COLOR="#FFFFFF">Moderators</FONT>
					</TD>

					<TD WIDTH="120" VALIGN="top" align="center" BGCOLOR="#254493">
						<FONT COLOR="#FFFFFF">Forum Options</FONT>
					</TD>
				</TR>



				<?php


					include ('../conf.php');

					$conn = mysql_connect ($sqlServer, $sqlUsername, $sqlPassword)
						or die ("Could not connect to server $sqlServer");
					mysql_select_db ($sqlDatabase, $conn)
						or die ("Could not connect to database $sqlDatabase");
				

					
					$query2 = "SELECT * FROM jbb_categories";
					$result2 = mysql_query ($query2)
						or die ($query2);

					while ($categories = mysql_fetch_object($result2)) {
				
						$query = "SELECT * FROM jbb_forums WHERE catID = $categories->catID";
						$result = mysql_query ($query)
							or die ($query);

						echo "
						<TR>
							<TD COLSPAN=\"6\" BGCOLOR=\"#BBCCDD\">
								<B>$categories->name</B>
							</TD>
						</TR>
		
						<TR>
							<TD COLSPAN=\"6\" BGCOLOR=\"#EDF3F9\">
								 
							</TD>
						</TR>
						";

						while ($forums = mysql_fetch_object($result)) {
							$query1="SELECT topicID FROM jbb_topics WHERE forumID = $forums->forumID";
							$result20 = mysql_query($query1)
								or die ($query1);

							$forumThreadCount=mysql_numrows($result20);

							$query2="SELECT replyID FROM jbb_replies WHERE forumID = $forums->forumID";
							
							$result30 = mysql_query($query2)
								or die ($query2);

							$forumReplyCount=mysql_numrows($result30);

							echo "
									<TR BGCOLOR=\"#FFFFFF\" HEIGHT=\"45\">
										<TD WIDTH=\"33\" VALIGN=\"middle\" BGCOLOR=\"#FFFFFF\">
										</TD>
					
										<TD VALIGN=\"top\" ALIGN=\"left\" WIDTH=\"200\" BGCOLOR=\"#FFFFFF\">
											<B><A HREF=\"admin.php#\">$forums->name</A></B><BR>$forums->description
										</TD>
					
										<TD WIDTH=\"120\" VALIGN=\"middle\" ALIGN=\"center\" BGCOLOR=\"#FFFFFF\">
											$forumThreadCount
										</TD>
					
										<TD WIDTH=\"120\" VALIGN=\"middle\" ALIGN=\"center\" BGCOLOR=\"#FFFFFF\">
											$forumReplyCount
										</TD>
					
										<TD WIDTH=\"120\" VALIGN=\"middle\" ALIGN=\"center\" BGCOLOR=\"#FFFFFF\">
											$forumModerators
										</TD>

										<TD WIDTH=\"120\" VALIGN=\"middle\" align=\"center\">
						<A HREF=\"admin.php?act=forumedit&forumID=$forums->forumID\">Edit</a> | <A HREF=\"admin.php?act=forumdelete&forumID=$forums->forumID\">Delete</a>
					</TD>
									</TR>
	
	
									<TR>
										<TD COLSPAN=\"6\" HEIGHT=\"5\" BGCOLOR=\"#EDF3F9\">
											 
										</TD>
									</TR>
							";
						}

					}

				
				?>

			</TABLE>