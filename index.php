<?php
	include('conf.php');
	require('functions.php');
	

	$conn = mysql_connect ($sqlServer, $sqlUsername, $sqlPassword)
			or die ("Uh oh! I could not connect to server $sqlServer.");
	
	mysql_select_db ($sqlDatabase)
			or die ("Uh oh! I could not connect to database $sqlDatabase");

	$query = "SELECT * FROM jbb_preferences";
	$result = mysql_query ($query)
			or die ($query);

	$global = mysql_fetch_object ($result);

	$query2 = "SELECT * FROM jbb_visitors";
	$result2 = mysql_query ($query2)
			or die ($query2);

	$counter = mysql_fetch_object ($result2);

session_start();


?>

<HTML>
<HEAD>
	<TITLE><? echo $global->boardName ?> (Powered by JBB)</TITLE>

	<STYLE TYPE="text/css">
		td {font-family:Verdana; font-color:#FFFFFF; font-size:10px;}

		textarea {
		font:10px verdana; 
		color:#000000; 
		background:none; 
		border:1px solid #000000
		}

		input {
		font:10px verdana; 
		color:#000000; 
		background:none; 
		border:1px solid #000000
		}

		select {
		font:10px verdana; 
		color:#000000; 
		background:none; 
		border:1px solid #000000
		}

		a:link {text-decoration:none; color:blue;}
		a:visited {text-decoration:none; color:blue;}
		a:hover {color:red;}
	</STYLE>
</HEAD>
<BODY BGCOLOR="#FFFFFF" TOPMARGIN="0" LEFTMARGIN="0" RIGHTMARGIN="0">

<CENTER>

<TABLE WIDTH="640" CELLPADDING="0" CELLSPACING="0">
	<TR>
		<TD WIDTH="100%" HEIGHT="60" ALIGN="center"	>
			<IMG SRC="images/logo.gif" HEIGHT="80">
		</TD>
	</TR>
	
	<TR>
		<TD WIDTH="100%" BACKGROUND="images/strip.jpg">
			<TABLE WIDTH="100%">
				<TR>
					<TD>
						<?php

						$conn = mysql_connect ($sqlServer, $sqlUsername, $sqlPassword)
								or die ("Uh oh! I could not connect to server $sqlServer.");
						
						mysql_select_db ($sqlDatabase)
								or die ("Uh oh! I could not connect to database $sqlDatabase");
					
						$query_users = "SELECT userID FROM jbb_users";
						$result_users = mysql_query ($query_users)
								or die ($query_users);

						$query_topics = "SELECT topicID FROM jbb_topics";
						$result_topics = mysql_query ($query_topics)
								or die ($query_topics);

						$query_replies = "SELECT replyID FROM jbb_replies";
						$result_replies = mysql_query ($query_replies)
								or die ($query_replies);

						$topics = mysql_numrows($result_topics);
						$replies = mysql_numrows($result_replies);

						$users = mysql_numrows($result_users);
						$posts = $topics + $replies;

						echo "Posts: <B>$posts</B> | Users: <B>$users</B>";

						?>
					</TD>

					<TD ALIGN="right">
						
						<?php
							if ($ck_username == "") {
								echo "Welcome, Guest! Please <A HREF=\"index.php#login\">login</A> or <A HREF=\"index.php?act=register\">register</A>.";
							} else {
								echo "Welcome back, <B>$ck_username</B>!";
							}
						?>
						
					</TD>
				</TR>
			</TABLE>
		</TD>
	</TR>

	<TR>
		<TD>
			<TABLE WIDTH="100%">
				<TR>
					<td align="center" bgcolor="#FFFFFF"><font size="-1"><a href="index.php" style="color:white;"><img src="images/buttons/home.gif" border="0"></a></font></td>
					<td align="center" bgcolor="#FFFFFF"><font size="-1"><a href="index.php?act=members" style="color:white;"><img src="images/buttons/members.gif" border="0"></a></font></td>
					<td align="center" bgcolor="#FFFFFF"><font size="-1"><a href="admin/" style="color:white;" target="_blank"><img src="images/buttons/admincp.gif" border="0"></a></font></td>
					<td align="center" bgcolor="#FFFFFF"><font size="-1"><a href="index.php?act=usercp" style="color:white;"><img src="images/buttons/user_options.gif" border="0"></a></font></td><td bgcolor="#FFFFFF" align="center"><font size="-1"><a href="index.php?act=pmlist" style="color:white;"><img src="images/buttons/pming.gif" border="0"></a></font></td>
					<td align="center" bgcolor="#FFFFFF"><a href="index.php?act=register" style="color:white;"><font size="2"><img src="images/buttons/register.gif" border="0"></font></a></td>
				</TR>
			</TABLE>
		</TD>
	</TR>

	<TR>
		<TD>
			<BR>
 			<?php
				$act2 = $act . ".php";
			
				if ( $act == "" || !file_exists($act2) ) {
					$act2 = "forumlist.php";
				}
				include("$act2");
			?>
		</TD>
	</TR>

	<?php
		if ($ck_username == "") {

			$url = "login_submit.php?";

			foreach ($_GET as $variable => $value) {
				$url .= "$variable=$value&";
			}

			echo "
				<TR>
					<TD BGCOLOR=\"#FFFFFF\" ALIGN=\"right\">
						<BR><BR>

						<FORM ACTION=\"$url\" METHOD=\"post\">
						<TABLE>
							<TR>
								<TD COLSPAN=\"2\" ALIGN=\"center\" BGCOLOR=\"#008CAD\">
									<FONT SIZE=\"-2\" COLOR=\"#FFFFFF\">Login:</FONT>
								</TD>
							</TR>
						
							<TR>
								<TD ALIGN=\"right\">
									Username	
								</TD>
						
								<TD ALIGN=\"right\">
									<INPUT TYPE=\"text\" NAME=\"username\">		
								</TD>
							</TR>
						
							<TR>
								<TD ALIGN=\"right\">
									Password		
								</TD>
						
								<TD ALIGN=\"right\">
									<INPUT TYPE=\"password\" NAME=\"password\">		
								</TD>
							</TR>
						
							<TR>
								<TD COLSPAN=\"2\" ALIGN=\"right\">
									<INPUT TYPE=\"submit\" VALUE=\"Login\">	
								</TD>
							</TR>
						</TABLE>
						</FORM>
					</TD>
				</TR>
			";
		} else {
			echo "
				<TR>
					<TD BGCOLOR=\"#FFFFFF\" ALIGN=\"right\">
						<BR><BR>
						<A HREF=\"index.php?act=logout\">Logout</A>
					</TD>
				</TR>
			";
		}
	?>

	<TR>
		<TD BGCOLOR="#FFFFFF" ALIGN="center">
			<BR><BR><BR><BR><CENTER>&copy; to <A HREF="<?php echo $global->boardURL ?>"><? echo $global->boardName ?></A><BR>Powered by <A HREF="http://jbb.drowninwires.net">JBB</A> Beta 1.2 &copy; 2003  <A HREF="http://www.drowninwires.net">JBB, Inc.</A></CENTER>
		</TD>
	</TR>
</TABLE>
</CENTER>
</BODY>
</HTML>