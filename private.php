<?php
if ($ck_userID == "") {
echo "<B>You cannot use the private messaging system</B> for one of several reasons. You need to login before private messaging. Please do so below. If you are logged in, then you may not have permission to send pms.";
} else {

echo "
<FORM ACTION=\"index.php?act=private_submit\" METHOD=\"post\" NAME=\"form\">
<TABLE WIDTH=\"80%\">
	<TR>
		<TD>Recipient's Username:</TD>

		<TD><INPUT TYPE=\"text\" NAME=\"username\" SIZE=\"40\" VALUE=\"$pmusr\">
	</TR>

	<TR>
		<TD>Title:</TD>

		<TD><INPUT TYPE=\"text\" NAME=\"title\" SIZE=\"40\">
	</TR>
		

	<TR>
		<TD COLSPAN=\"2\">
			bb code buttons here
		</TD>
	</TR>

	<TR>
		<TD ALIGN=\"center\" VALIGN=\"top\">
		<BR>
		<TABLE CELLSPACING=\"10\">
			<TR>
				<TD COLSPAN=\"3\" ALIGN=\"center\">
				<B>Emoticons</B>
				</TD>
			</TR>
		
			<TR>
				<TD ALIGN=\"center\">
				<a onclick=\"javascript:form.message.value+=' :)';\"><img src=\"images/emoticons/smile.gif\" BORDER=\"0\"></a>

				</TD>
		
				<TD ALIGN=\"center\">
				<a onclick=\"javascript:form.message.value+=' :D';\"><img src=\"images/emoticons/bigsmile.gif\" BORDER=\"0\"></a>
				</TD>
		
				<TD ALIGN=\"center\">
				<a onclick=\"javascript:form.message.value+=' :(';\"><img src=\"images/emoticons/frown.gif\" BORDER=\"0\"></a>
				</TD>
			</TR>
		
			<TR>
				<TD ALIGN=\"center\"><a onclick=\"javascript:form.messaget.value+=' :crying:';\"><img src=\"images/emoticons/crying.gif\" BORDER=\"0\"></a>
				</TD>
		
				<TD ALIGN=\"center\">
				<a onclick=\"javascript:form.message.value+=' :blush:';\"><img src=\"images/emoticons/blush.gif\" BORDER=\"0\"></a>
				</TD>
		
				<TD ALIGN=\"center\">
				<a onclick=\"javascript:form.message.value+=' :?';\"><img src=\"images/emoticons/confused.gif\" BORDER=\"0\"></a>
				</TD>
			</TR>
		
			<TR>
				<TD ALIGN=\"center\">
				<a onclick=\"javascript:form.message.value+=' B)';\"><img src=\"images/emoticons/cool.gif\" BORDER=\"0\"></a>
				</TD>
		
				<TD ALIGN=\"center\">
				<a onclick=\"javascript:form.message.value+=' :O';\"><img src=\"images/emoticons/surprised.gif\" BORDER=\"0\"></a>
				</TD>
		
				<TD ALIGN=\"center\">
				<a onclick=\"javascript:form.message.value+=' :P';\"><img src=\"images/emoticons/tongue.gif\" BORDER=\"0\"></a>
				</TD></TR>
			<TR>

				<TD ALIGN=\"center\">
				<a onclick=\"javascript:form.message.value+=' :angel:';\"><img src=\"images/emoticons/innocent.gif\" BORDER=\"0\"></a>
				</TD>
					<TD ALIGN=\"center\">
				<a onclick=\"javascript:form.message.value+=' ;)';\"><img src=\"images/emoticons/wink.gif\" BORDER=\"0\"></a>
				</TD>
					<TD ALIGN=\"center\">
				<a onclick=\"javascript:form.message.value+=' :0';\"><img src=\"images/emoticons/whoa.gif\" BORDER=\"0\"></a>
				</TD>
			</TR>
		</TABLE>
		</TD>

		<TD>
			<TEXTAREA ROWS=\"15\" COLS=\"70\" NAME=\"message\"></TEXTAREA>
		</TD>
	</TR>

	<TR>
		<TD COLSPAN=\"2\" ALIGN=\"center\">
			<BR><BR><CENTER><INPUT TYPE=\"submit\" VALUE=\"Send PM\"></CENTER>
		</TD>
	</TR>
</TABLE>
</FORM>";
}
?>