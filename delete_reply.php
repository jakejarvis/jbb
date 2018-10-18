<?php

if ($ck_groupID == "1") {

if ($ck_userID == "") {
echo "<B>You cannot delete this post</B> for one of several reasons. You need to login before you can delete a post. Please do so below. If you are logged in, then you may not have permission to delete a post in this forum.";
} else {
echo "
<CENTER><TABLE WIDTH=\"80%\">
	<TR>
		<TD ALIGN=\"center\">Are you sure you want to delete this post?<BR><BR><FORM ACTION=\"index.php?act=delete_reply_submit&replyID=$replyID\" METHOD=\"post\"><INPUT TYPE=\"submit\" VALUE=\"Yes\"></FORM><FORM ACTION=\"index.php\" METHOD=\"post\"><INPUT TYPE=\"submit\" VALUE=\"No\"></FORM></TD>

		
	</TR>

	
</TABLE></CENTER>";
} } else { echo "<CENTER>We're sorry, <b>you do not have permission to delete this post</b>.</CENTER>"; }
?>