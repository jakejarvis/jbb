<SCRIPT type="text/javascript">

function make_bold() {var bold_text = prompt ("Insert the text that you want to be formatted below.","Type it here");
 javascript:edit_topic.firstPost.value+=" [b]" + bold_text + "[/b]";}


function make_underlined() {var u_text = prompt ("Insert the text that you want to be formatted below.","Type it here");
 javascript:edit_topic.firstPost.value+=" [u]" + u_text + "[/u]";}


function make_italics() {var italic_text = prompt ("Insert the text that you want to be formatted below.","Type it here");
 javascript:edit_topic.firstPost.value+=" [i]" + italic_text + "[/i]";}


function make_strikethrough() {var s_text = prompt ("Insert the text that you want to be formatted below.","Type it here");
 javascript:edit_topic.firstPost.value+=" [s]" + s_text + "[/s]";}


function make_link() {var link = prompt ("Insert the URL of the website that you would like to link to below.","Type it here");
var link_text = prompt ("Insert the text that you would like to have displayed as a link below.","Type it here");
 javascript:edit_topic.firstPost.value+=" [URL=" + link + ":]" + link_text + "[/URL]";}

function fontcolor() {var colortext = prompt ("Insert the text that you want to be formatted below.","Type it here");
var color = prompt ("Insert the color that you would like the text to be.","Type it here");
 javascript:edit_topic.firstPost.value+=" [FONT COLOR=" + color + ":]" + colortext + "[/FONT]";}

function fontsize() {var sizetext = prompt ("Insert the text that you want to be formatted below.","Type it here");
var size = prompt ("Insert the size that you would like the text to be (-3, -2, -1, +1, +2, or +3 (+3 being the largest, -3 being the smallest)).","Type it here");
 javascript:edit_topic.firstPost.value+=" [FONT SIZE=" + size + ":]" + sizetext + "[/FONT]";}

</SCRIPT>

<?php


	$query3 = "SELECT * FROM jbb_topics WHERE topicID = '$topicID'";
	$result3 = mysql_query($query3)
		or die ($query3);

	$edit_topic = mysql_fetch_object($result3);

if ($ck_groupID == "1") {

if ($ck_userID == "") {
echo "<B>You cannot edit this post</B> for one of several reasons. You need to login before you can edit a post. Please do so below. If you are logged in, then you may not have permission to edit a post in this forum.";
} else {
echo "
<FORM ACTION=\"index.php?act=edit_topic_submit&topicID=$topicID\" METHOD=\"post\" NAME=\"edit_topic\">
<TABLE WIDTH=\"80%\">
	<TR>
		<TD>Topic Title:</TD>

		<TD><B>$edit_topic->subject</b>
	</TR>

	<TR>
		<TD>Edit Topic Description:</TD>

		<TD><INPUT TYPE=\"text\" NAME=\"description\" SIZE=\"40\" VALUE=\"$edit_topic->description\">
	</TR>

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
				<a onclick=\"javascript:edit_topic.firstPost.value+=' :)';\"><img src=\"images/emoticons/smile.gif\" BORDER=\"0\"></a>

				</TD>
		
				<TD ALIGN=\"center\">
				<a onclick=\"javascript:edit_topic.firstPost.value+=' :D';\"><img src=\"images/emoticons/bigsmile.gif\" BORDER=\"0\"></a>
				</TD>
		
				<TD ALIGN=\"center\">
				<a onclick=\"javascript:edit_topic.firstPost.value+=' :(';\"><img src=\"images/emoticons/frown.gif\" BORDER=\"0\"></a>
				</TD>
			</TR>
		
			<TR>
				<TD ALIGN=\"center\"><a onclick=\"javascript:edit_topic.firstPost.value+=' :crying:';\"><img src=\"images/emoticons/crying.gif\" BORDER=\"0\"></a>
				</TD>
		
				<TD ALIGN=\"center\">
				<a onclick=\"javascript:edit_topic.firstPost.value+=' :blush:';\"><img src=\"images/emoticons/blush.gif\" BORDER=\"0\"></a>
				</TD>
		
				<TD ALIGN=\"center\">
				<a onclick=\"javascript:edit_topic.firstPost.value+=' :?';\"><img src=\"images/emoticons/confused.gif\" BORDER=\"0\"></a>
				</TD>
			</TR>
		
			<TR>
				<TD ALIGN=\"center\">
				<a onclick=\"javascript:edit_topic.firstPost.value+=' B)';\"><img src=\"images/emoticons/cool.gif\" BORDER=\"0\"></a>
				</TD>
		
				<TD ALIGN=\"center\">
				<a onclick=\"javascript:edit_topic.firstPost.value+=' :O';\"><img src=\"images/emoticons/surprised.gif\" BORDER=\"0\"></a>
				</TD>
		
				<TD ALIGN=\"center\">
				<a onclick=\"javascript:edit_topic.firstPost.value+=' :P';\"><img src=\"images/emoticons/tongue.gif\" BORDER=\"0\"></a>
				</TD></TR>
			<TR>

				<TD ALIGN=\"center\">
				<a onclick=\"javascript:edit_topic.firstPost.value+=' :angel:';\"><img src=\"images/emoticons/innocent.gif\" BORDER=\"0\"></a>
				</TD>
					<TD ALIGN=\"center\">
				<a onclick=\"javascript:edit_topic.firstPost.value+=' ;)';\"><img src=\"images/emoticons/wink.gif\" BORDER=\"0\"></a>
				</TD>
					<TD ALIGN=\"center\">
				<a onclick=\"javascript:edit_topic.firstPost.value+=' :0';\"><img src=\"images/emoticons/whoa.gif\" BORDER=\"0\"></a>
				</TD>
			</TR>
		</TABLE>
		</TD>

		<TD>
			<TEXTAREA ROWS=\"15\" COLS=\"70\" NAME=\"firstPost\">$edit_topic->firstPost</TEXTAREA>
		</TD>
	</TR>

	<TR>
		<TD COLSPAN=\"2\" ALIGN=\"center\">
			<BR><BR><CENTER><INPUT TYPE=\"submit\" VALUE=\"Edit Topic\"><INPUT TYPE=\"hidden\" NAME=\"forumID\" VALUE=\"$forumID\"><INPUT TYPE=\"hidden\" NAME=\"topicID\" VALUE=\"$topicID\"></CENTER>
		</TD>
	</TR>
</TABLE>
</FORM>";
} } else { echo "<CENTER>We're sorry, <b>you do not have permission to edit this post</b>.</CENTER>"; }
?>