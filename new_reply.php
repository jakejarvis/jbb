<SCRIPT type="text/javascript">

function make_bold() {var bold_text = prompt ("Insert the text that you want to be formatted below.","Type it here");
 javascript:new_reply.message.value+=" [b]" + bold_text + "[/b]";}


function make_underlined() {var u_text = prompt ("Insert the text that you want to be formatted below.","Type it here");
 javascript:new_reply.message.value+=" [u]" + u_text + "[/u]";}


function make_italics() {var italic_text = prompt ("Insert the text that you want to be formatted below.","Type it here");
 javascript:new_reply.message.value+=" [i]" + italic_text + "[/i]";}


function make_strikethrough() {var s_text = prompt ("Insert the text that you want to be formatted below.","Type it here");
 javascript:new_reply.message.value+=" [s]" + s_text + "[/s]";}


function make_link() {var link = prompt ("Insert the URL of the website that you would like to link to below.","Type it here");
var link_text = prompt ("Insert the text that you would like to have displayed as a link below.","Type it here");
 javascript:new_reply.message.value+=" [URL=" + link + ":]" + link_text + "[/URL]";}

function fontcolor() {var colortext = prompt ("Insert the text that you want to be formatted below.","Type it here");
var color = prompt ("Insert the color that you would like the text to be.","Type it here");
 javascript:new_reply.message.value+=" [FONT COLOR=" + color + ":]" + colortext + "[/FONT]";}

function fontsize() {var sizetext = prompt ("Insert the text that you want to be formatted below.","Type it here");
var size = prompt ("Insert the size that you would like the text to be (-3, -2, -1, +1, +2, or +3 (+3 being the largest, -3 being the smallest)).","Type it here");
 javascript:new_reply.message.value+=" [FONT SIZE=" + size + ":]" + sizetext + "[/FONT]";}

</SCRIPT>

<?php
if ($ck_userID == "") {
echo "<B>You cannot post</B> for one of several reasons. You need to login before posting. Please do so below. If you are logged in, then you may not have permission to post in this forum.";
} else {
echo "
<FORM ACTION=\"index.php?act=new_reply_submit\" METHOD=\"post\" NAME=\"new_reply\">
<TABLE WIDTH=\"80%\">
	<TR>
		<TD COLSPAN=\"2\" ALIGN=\"center\"> 


<INPUT type=\"button\" style=\"font-weight:bold;\" value=\" B \" onClick=\"make_bold();\">
<INPUT type=\"button\" style=\"font-style:oblique;\" value=\" I \" onClick=\"make_italics();\">
   <INPUT type=\"button\" style=\"text-decoration:underline;\" value=\" U \" onClick=\"make_underlined();\">
<INPUT type=\"button\" value=\" S \" onClick=\"make_strikethrough();\">
<INPUT type=\"button\" value=\" URL \" onClick=\"make_link();\">
<INPUT type=\"button\" value=\" FONT COLOR \" onClick=\"fontcolor();\">
<INPUT type=\"button\" value=\" FONT SIZE \" onClick=\"fontsize();\">


   
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
				<a onclick=\"javascript:new_reply.message.value+=' :)';\"><img src=\"images/emoticons/smile.gif\" BORDER=\"0\"></a>

				</TD>
		
				<TD ALIGN=\"center\">
				<a onclick=\"javascript:new_reply.message.value+=' :D';\"><img src=\"images/emoticons/bigsmile.gif\" BORDER=\"0\"></a>
				</TD>
		
				<TD ALIGN=\"center\">
				<a onclick=\"javascript:new_reply.message.value+=' :(';\"><img src=\"images/emoticons/frown.gif\" BORDER=\"0\"></a>
				</TD>
			</TR>
		
			<TR>
				<TD ALIGN=\"center\"><a onclick=\"javascript:new_reply.message.value+=' :crying:';\"><img src=\"images/emoticons/crying.gif\" BORDER=\"0\"></a>
				</TD>
		
				<TD ALIGN=\"center\">
				<a onclick=\"javascript:new_reply.message.value+=' :blush:';\"><img src=\"images/emoticons/blush.gif\" BORDER=\"0\"></a>
				</TD>
		
				<TD ALIGN=\"center\">
				<a onclick=\"javascript:new_reply.message.value+=' :?';\"><img src=\"images/emoticons/confused.gif\" BORDER=\"0\"></a>
				</TD>
			</TR>
		
			<TR>
				<TD ALIGN=\"center\">
				<a onclick=\"javascript:new_reply.message.value+=' B)';\"><img src=\"images/emoticons/cool.gif\" BORDER=\"0\"></a>
				</TD>
		
				<TD ALIGN=\"center\">
				<a onclick=\"javascript:new_reply.message.value+=' :O';\"><img src=\"images/emoticons/surprised.gif\" BORDER=\"0\"></a>
				</TD>
		
				<TD ALIGN=\"center\">
				<a onclick=\"javascript:new_reply.message.value+=' :P';\"><img src=\"images/emoticons/tongue.gif\" BORDER=\"0\"></a>
				</TD></TR>
			<TR>

				<TD ALIGN=\"center\">
				<a onclick=\"javascript:new_reply.message.value+=' :angel:';\"><img src=\"images/emoticons/innocent.gif\" BORDER=\"0\"></a>
				</TD>
					<TD ALIGN=\"center\">
				<a onclick=\"javascript:new_reply.message.value+=' ;)';\"><img src=\"images/emoticons/wink.gif\" BORDER=\"0\"></a>
				</TD>
					<TD ALIGN=\"center\">
				<a onclick=\"javascript:new_reply.message.value+=' :0';\"><img src=\"images/emoticons/whoa.gif\" BORDER=\"0\"></a>
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
			<BR><BR><CENTER><INPUT TYPE=\"submit\" VALUE=\"Post Reply\"><INPUT TYPE=\"hidden\" NAME=\"forumID\" VALUE=\"$forumID\"><INPUT TYPE=\"hidden\" NAME=\"topicID\" VALUE=\"$topicID\"></CENTER>
		</TD>
	</TR>
</TABLE>
</FORM>";
}
?>