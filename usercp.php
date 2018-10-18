<?php		
	
	$query3 = "SELECT * FROM jbb_users WHERE userID = '$ck_userID'";
	$result3 = mysql_query($query3)
		or die ($query3);

	$usercp = mysql_fetch_object($result3);

	echo "
		<FORM ACTION=\"index.php?act=usercp_submit\" METHOD=\"post\">
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
					<INPUT TYPE=\"text\" NAME=\"firstName\" VALUE=\"$usercp->firstName\">
					</TD>
				</TR>

				<TR>
					<TD>
					Last Name:
					</TD>

					<TD>
					<INPUT TYPE=\"text\" NAME=\"lastName\" VALUE=\"$usercp->lastName\">
					</TD>
				</TR>
<TR>
					<TD>
					Avatar:
					</TD>

					<TD>
					<INPUT TYPE=\"text\" NAME=\"avatar\" VALUE=\"$usercp->avatar\">
					</TD>
				</TR>

				<TR>
					<TD>
					Member Title:
					</TD>

					<TD>
					<INPUT TYPE=\"text\" NAME=\"title\" VALUE=\"$usercp->title\">
					</TD>
				</TR>

				<TR>
					<TD>
					AIM:
					</TD>

					<TD>
					<INPUT TYPE=\"text\" NAME=\"aim\" VALUE=\"$usercp->aim\">
					</TD>
				</TR>

				<TR>
					<TD>
					MSN:
					</TD>

					<TD>
					<INPUT TYPE=\"text\" NAME=\"msn\" VALUE=\"$usercp->msn\">
					</TD>
				</TR>

				<TR>
					<TD>
					YIM:
					</TD>

					<TD>
					<INPUT TYPE=\"text\" NAME=\"yim\" VALUE=\"$usercp->yim\">
					</TD>
				</TR>

				<TR>
					<TD>
					Interests:
					</TD>

					<TD>
					<INPUT TYPE=\"text\" NAME=\"intrests\" VALUE=\"$usercp->intrests\">
					</TD>
				</TR>

				<TR>
					<TD>
					Website:
					</TD>

					<TD>
					<INPUT TYPE=\"text\" NAME=\"website\" VALUE=\"$usercp->siteURL\">
					</TD>
				</TR>

				<TR>
					<TD>
					Location:
					</TD>

					<TD>
					<INPUT TYPE=\"location\" NAME=\"email\" VALUE=\"$usercp->location\">
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

							</TABLE>
			<BR><BR>
			<CENTER><INPUT TYPE=\"submit\" VALUE=\"Update\"></CENTER>
	";
?>

