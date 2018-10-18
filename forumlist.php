			<BR><BR>
			<CENTER>
			<TABLE WIDTH="100%" BGCOLOR="#008CAD" BORDER="0" BORDERCOLOR="#FFFFFF" CELLPADDING="0" CELLSPACING="0">
				<TR>
					<TD WIDTH="33">
					</TD>

					<TD WIDTH="200" VALIGN="top" align="center" BGCOLOR="#008CAD">
						<FONT COLOR="#FFFFFF">Forum</FONT>
					</TD>

					<TD WIDTH="120" VALIGN="top" align="center" BGCOLOR="#008CAD">
						<FONT COLOR="#FFFFFF">Threads</FONT>
					</TD>

					<TD WIDTH="120" VALIGN="top" align="center" BGCOLOR="#008CAD">
						<FONT COLOR="#FFFFFF">Replies</FONT>
					</TD>

					<TD WIDTH="120" VALIGN="top" align="center" BGCOLOR="#008CAD">
						<FONT COLOR="#FFFFFF">Moderators</FONT>
					</TD>
				</TR>



				<?php
					include ('conf.php');

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
							<TD COLSPAN=\"5\" BGCOLOR=\"#005A6B\">
								<B>$categories->name</B>
							</TD>
						</TR>
		
						<TR>
							<TD COLSPAN=\"5\" BGCOLOR=\"#EDF3F9\">
								 
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
										<TD WIDTH=\"55\" VALIGN=\"middle\" BGCOLOR=\"#FFFFFF\">
											&nbsp;<IMG SRC=\"images/forum.gif\">&nbsp;
										</TD>
					
										<TD VALIGN=\"top\" ALIGN=\"left\" WIDTH=\"200\" BGCOLOR=\"#FFFFFF\">
											<B><A HREF=\"index.php?act=topiclist&forumID=$forums->forumID\">$forums->name</A></B><BR>$forums->description
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
									</TR>
	
	
									<TR>
										<TD COLSPAN=\"5\" HEIGHT=\"5\" BGCOLOR=\"#FFFFFF\">
											 
										</TD>
									</TR>
							";
						}

					}
				?>

			</TABLE>