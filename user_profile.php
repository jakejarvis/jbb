<INPUT TYPE="hidden" NAME="userID" VALUE="$topic->lastPostuserID">
<?php

$query3 = "SELECT * FROM jbb_users WHERE userID = '$userID'";
	$result3 = mysql_query($query3)
		or die ($query3);

	$profile = mysql_fetch_object($result3);

echo "<BR><FONT SIZE=\"+2\" FACE=\"verdana\"><strong>Viewing Profile of $profile->username.</FONT></strong><BR><BR>
<TABLE WIDTH=\"100%\" BORDER=\"1\" BORDERCOLOR=\"black\">
<TR>
<TD HEIGHT=\"20\" BACKGROUND=\"images/strip.jpg\" COLSPAN=\"2\"><FONT FACE=\"verana\" SIZE=\"-1\"><strong>Profile Information</strong></font>
</TD>
</TR>
<TR>
<TD ALIGN=\"center\"><FONT SIZE=\"-2\" FACE=\"verdana\">First Name</TD>";
if ($profile->firstName == "") {
		echo "<TD ALIGN=\"center\"><I>Not Verified</I></TD>";
	} else { echo "<TD ALIGN=\"center\"><b>$profile->firstName</b></TD>"; }

echo "</TR>
<TR>
<TD ALIGN=\"center\"><FONT SIZE=\"-2\" FACE=\"verdana\">Last Name</TD>";
if ($profile->lastName == "") {
		echo "<TD ALIGN=\"center\"><I>Not Verified</I></TD>";
	} else { echo "<TD ALIGN=\"center\"><b>$profile->lastName</b></TD>"; }

echo "</TR>
<TR>
<TD ALIGN=\"center\"><FONT SIZE=\"-2\" FACE=\"verdana\">AIM</TD>";
if ($profile->aim == "") {
		echo "<TD ALIGN=\"center\"><I>None</I></TD>";
	} else { echo "<TD ALIGN=\"center\"><b>$profile->aim</b></TD>"; }
echo "</TR>
<TR>
<TD ALIGN=\"center\"><FONT SIZE=\"-2\" FACE=\"verdana\">MSN</TD>";
if ($profile->msn == "") {
		echo "<TD ALIGN=\"center\"><I>None</I></TD>";
	} else { echo "<TD ALIGN=\"center\"><b>$profile->msn</b></TD>"; }
echo "</TR>
<TR>
<TD ALIGN=\"center\"><FONT SIZE=\"-2\" FACE=\"verdana\">YIM</TD>";
if ($profile->yim == "") {
		echo "<TD ALIGN=\"center\"><I>None</I></TD>";
	} else { echo "<TD ALIGN=\"center\"><b>$profile->yim</b></TD>"; }
echo "</TR>
<TR>
<TD ALIGN=\"center\"><FONT SIZE=\"-2\" FACE=\"verdana\">Website</TD>";
if ($profile->siteURL == "") {
		echo "<TD ALIGN=\"center\"><I>None</I></TD>";
	} else { echo "<TD ALIGN=\"center\"><b>$profile->siteURL</b></TD>"; }
echo "</TR>
<TR>
<TD ALIGN=\"center\"><FONT SIZE=\"-2\" FACE=\"verdana\">Location</TD>";
if ($profile->location == "") {
		echo "<TD ALIGN=\"center\"><I>Not Verified</I></TD>";
	} else { echo "<TD ALIGN=\"center\"><b>$profile->location</b></TD>"; }
echo "</TR>
<TR>
<TD ALIGN=\"center\"><FONT SIZE=\"-2\" FACE=\"verdana\">Avatar</TD>";
if ($profile->avatar == "") {
		echo "<TD ALIGN=\"center\"><I>None</I></TD>";
	} else { echo "<TD ALIGN=\"center\"><IMG SRC=\"$profile->avatar\"></TD>"; }
echo "</TR>
<TR>
<TD ALIGN=\"center\"><FONT SIZE=\"-2\" FACE=\"verdana\">Signature</TD>";
if ($profile->sig == "") {
		echo "<TD ALIGN=\"center\"><I>None</I></TD>";
	} else { echo "<TD ALIGN=\"center\"><b>$profile->sig</b></TD>"; }


echo "</TR>
</TABLE>";

?>