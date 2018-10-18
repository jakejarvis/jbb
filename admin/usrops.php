<?php	

include('../conf.php');	

$conn = mysql_connect ($sqlServer, $sqlUsername, $sqlPassword)
			or die ("Uh oh! I could not connect to server $sqlServer.");
	
	mysql_select_db ($sqlDatabase, $conn)
			or die ("Uh oh! I could not connect to database $sqlDatabase");

	
	$query3 = "SELECT * FROM jbb_users WHERE userID = '$userID'";
	$result3 = mysql_query($query3)
		or die ($query3);

	$usercp = mysql_fetch_object($result3);

	echo "
		<FORM ACTION=\"admin.php?act=usrops_submit&userID=$userID\" METHOD=\"post\">
			<TABLE WIDTH=\"100%\">
				<TR>
					<TD>
					Username:
					</TD>

					<TD>
					<b>$usercp->username</b>
					</TD>
				</TR>

				<TR>
					<TD>
					Email:
					</TD>

					<TD>
					<INPUT TYPE=\"text\" NAME=\"usermail\" VALUE=\"$usercp->email\">
					</TD>
				</TR>

				<TR>
					<TD>
					First Name:
					</TD>

					<TD>
					<INPUT TYPE=\"text\" NAME=\"firstn\" VALUE=\"$usercp->firstName\">
					</TD>
				</TR>

				<TR>
					<TD>
					Last Name:
					</TD>

					<TD>
					<INPUT TYPE=\"text\" NAME=\"lastn\" VALUE=\"$usercp->lastName\">
					</TD>
				</TR>
<TR>
					<TD>
					Avatar:
					</TD>

					<TD>
					<INPUT TYPE=\"text\" NAME=\"usravatar\" VALUE=\"$usercp->avatar\">
					</TD>
				</TR>

				<TR>
					<TD>
					Member Title:
					</TD>

					<TD>
					<INPUT TYPE=\"text\" NAME=\"usrtitle\" VALUE=\"$usercp->title\">
					</TD>
				</TR>

				<TR>
					<TD>
					AIM:
					</TD>

					<TD>
					<INPUT TYPE=\"text\" NAME=\"usraim\" VALUE=\"$usercp->aim\">
					</TD>
				</TR>

				<TR>
					<TD>
					MSN:
					</TD>

					<TD>
					<INPUT TYPE=\"text\" NAME=\"usrmsn\" VALUE=\"$usercp->msn\">
					</TD>
				</TR>

				<TR>
					<TD>
					YIM:
					</TD>

					<TD>
					<INPUT TYPE=\"text\" NAME=\"usryim\" VALUE=\"$usercp->yim\">
					</TD>
				</TR>

				<TR>
					<TD>
					Interests:
					</TD>

					<TD>
					<INPUT TYPE=\"text\" NAME=\"usrintrests\" VALUE=\"$usercp->intrests\">
					</TD>
				</TR>

				<TR>
					<TD>
					Website:
					</TD>

					<TD>
					<INPUT TYPE=\"text\" NAME=\"usrwebsite\" VALUE=\"$usercp->website\">
					</TD>
				</TR>

				<TR>
					<TD>
					Location:
					</TD>

					<TD>
					<INPUT TYPE=\"text\" NAME=\"location\" VALUE=\"$usercp->location\">
					</TD>
				</TR>
				
				<TR>
					<TD>
					Bio:
					</TD>

					<TD>
					<INPUT TYPE=\"text\" NAME=\"bio\" VALUE=\"$usercp->bio\">
					</TD>
				</TR>

				<TR>
					<TD>
					Signature:
					</TD>

					<TD>
					<TEXTAREA NAME=\"sig\"></textarea>
					</TD>
				</TR>

				<TR>

					<TD ALIGN=\"right\">
					<BR><INPUT TYPE=\"submit\" VALUE=\"Update\">
					</TD>
				</TR>

							</TABLE></FORM>";



?>