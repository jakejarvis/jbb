<?php

echo "
<CENTER><TABLE WIDTH=\"80%\">
	<TR>
		<TD ALIGN=\"center\">Are you sure you want to delete this forum?<BR><BR><FORM ACTION=\"admin.php?act=forum_delete_submit&forumID=$forumID\" METHOD=\"post\"><INPUT TYPE=\"submit\" VALUE=\"Yes\"></FORM><FORM ACTION=\"admin.php\" METHOD=\"post\"><INPUT TYPE=\"submit\" VALUE=\"No\"></FORM></TD>

		
	</TR>

	
</TABLE></CENTER>";



?>