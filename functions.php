<?php


	function showTopic($topicID) {


		$query30 = "SELECT * FROM jbb_topics WHERE topicID = '$topicID'";
		$result30 = mysql_query ($query30)
			or die ($query30);

		while ($topic = mysql_fetch_object($result30)) {
			$query40 = "SELECT * FROM jbb_users WHERE userID = '$topic->userID'";
			$result20 = mysql_query($query40)
				or die ($query40);
		
			$user = mysql_fetch_object($result20);

			$topicval = $topic->firstPost;

			$replacement = '<IMG SRC=images/emoticons/smile.gif>';
	
	$replacement2 = '<IMG SRC=images/emoticons/bigsmile.gif>';
	
	$replacement3 = '<IMG SRC=images/emoticons/frown.gif>';
	
	$replacement4 = '<IMG SRC=images/emoticons/crying.gif>';
	
	$replacement5 = '<IMG SRC=images/emoticons/blush.gif>';
	
	$replacement6 = '<IMG SRC=images/emoticons/confused.gif>';
	
	$replacement7 = '<IMG SRC=images/emoticons/cool.gif>';
	
	$replacement8 = '<IMG SRC=images/emoticons/surprised.gif>';
	
	$replacement9 = '<IMG SRC=images/emoticons/tongue.gif>';
	
	$replacement10 = '<IMG SRC=images/emoticons/innocent.gif>';
	
	$replacement11 = ' <IMG SRC=images/emoticons/wink.gif>';
	
	$replacement12 = '<IMG SRC=images/emoticons/whoa.gif>';

	$replacement13 = '<b>';

	$replacement14 = '</b>';
	
	$replacement15 = '<u>';

	$replacement16 = '</u>';

	$replacement17 = '<i>';

	$replacement18 = '</i>';

	$replacement19 = '<s>';

	$replacement20 = '</s>';

	$replacement21 = '<a href="';

	$replacement22 = '">';

	$replacement23 = '</a>';

	$replacement24 = '<FONT COLOR="';

	$replacement25 = '</FONT>';

	$replacement26 = '<FONT SIZE="';

	$replacement27 = '<BR>';

$topicval = str_replace(':)', $replacement, $topicval);
	

$topicval = str_replace(':D', $replacement2, $topicval);


$topicval = str_replace(':(', $replacement3, $topicval);
	

$topicval = str_replace(':crying:', $replacement4, $topicval);
	

$topicval = str_replace(':blush:', $replacement5, $topicval);
	

$topicval = str_replace(':?', $replacement6, $topicval);


$topicval = str_replace('B)', $replacement7, $topicval);
	

$topicval = str_replace(':O', $replacement8, $topicval);
	

$topicval = str_replace(':P', $replacement9, $topicval);


$topicval = str_replace(':angel:', $replacement10, $topicval);
	

$topicval = str_replace(';)', $replacement11, $topicval);
	

$topicval = str_replace(':0', $replacement12, $topicval);


$topicval = str_replace('[b]', $replacement13, $topicval);


$topicval = str_replace('[/b]', $replacement14, $topicval);


$topicval = str_replace('[u]', $replacement15, $topicval);


$topicval = str_replace('[/u]', $replacement16, $topicval);


$topicval = str_replace('[i]', $replacement17, $topicval);


$topicval = str_replace('[/i]', $replacement18, $topicval);


$topicval = str_replace('[s]', $replacement19, $topicval);


$topicval = str_replace('[/s]', $replacement20, $topicval);


$topicval = str_replace('[URL=', $replacement21, $topicval);


$topicval = str_replace(':]', $replacement22, $topicval);


$topicval = str_replace('[/URL]', $replacement23, $topicval);

$topicval = str_replace('[FONT COLOR=', $replacement24, $topicval);

$topicval = str_replace('[/FONT]', $replacement25, $topicval);

$topicval = str_replace('[FONT SIZE=', $replacement26, $topicval);

$topicval = str_replace('
', $replacement27, $topicval);

			echo "


				<TABLE WIDTH=\"100%\" HEIGHT=\"100%\">
					<TR>
						<TD>
						</TD>
	
						<TD>
							<B>Posted:</B> $topic->postTime
						</TD>
	
						<TD>
						</TD>
					</TR>

					<TR>
						<TD WIDTH=\"100\">
							<B>$user->username</B>
							<BR>
							$user->title
							<BR><BR>
							<IMG SRC=\"$user->avatar\">
							<BR><BR>
						</TD>

						<TD COLSPAN=\"2\" VALIGN=\"top\">
							<BR>$topicval
						</TD>
					</TR>

					<TR>
						<TD>

						</TD>

						<TD ALIGN=\"left\">
							<A HREF=\"index.php?act=user_profile&userID=$user->userID\"><IMG SRC=\"images/profile.gif\" BORDER=\"0\" WIDTH=\"53\" HEIGHT=\"17\"></A>
							<A HREF=\"index.php?act=private&userID=$user->userID\"><IMG SRC=\"images/pm.gif\" BORDER=\"0\" WIDTH=\"53\" HEIGHT=\"17\"></A>";
						if ($user->email == "") {
							echo "";
						} else {
							echo "<A HREF=\"mailto:$user->email\"><IMG SRC=\"images/email.gif\" BORDER=\"0\" WIDTH=\"53\" HEIGHT=\"17\"></A>";
						}

						if ($user->siteURL == "") {
							echo "";
						} else {
							echo "<A HREF=\"$user->siteURL\"><IMG SRC=\"images/www.gif\" BORDER=\"0\" WIDTH=\"53\" HEIGHT=\"17\"></A>";
						}

						if ($user->aim == "") {
							echo "";
						} else {
							echo "<A HREF=\"aim:goim?screenname=$user->aim&message=Hey, $user->firstName!\"><IMG SRC=\"images/aim.gif\" BORDER=\"0\" WIDTH=\"53\" HEIGHT=\"17\">";
						}

						if ($user->msnm == "") {
							echo "";
						} else {
							echo "<A HREF=\"javascript:MsgrApp.LaunchIMUI('$user->msnm');\"><IMG SRC=\"images/msnm.gif\" BORDER=\"0\" WIDTH=\"53\" HEIGHT=\"17\"></A>";
						}

						if ($user->yim == "") {
							echo "";
						} else {
							echo "<A HREF=\"http://edit.yahoo.com/config/send_webmesg?.target=$user->yim&amp;.src=pg\"><IMG SRC=\"images/yim.gif\" BORDER=\"0\" WIDTH=\"53\" HEIGHT=\"17\"></A>";
						}

echo "						</TD>

						<TD ALIGN=\"right\">
							<A HREF=\"index.php?act=edit_topic&topicID=$topic->topicID\">Edit</A>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</TD>
					</TR>
				</TABLE>
				<HR COLOR=\"#C0C0C0\" SIZE=\"1\" WIDTH=\"75%\">";
		}
	}

	function showReply($replyID, $topicID) {
		$query50 = "SELECT * FROM jbb_replies WHERE replyID = '$replyID'";
		$result50 = mysql_query($query50)
			or die ($query50);

		$reply = mysql_fetch_object($result50);

		$query60 = "SELECT * FROM jbb_users WHERE userID = '$reply->userID'";
		$result60 = mysql_query($query60)
			or die ($query60);
	
		$user = mysql_fetch_object($result60);

		$query7 = "SELECT * FROM jbb_topics WHERE userID = '$reply->userID'";
		$result7 = mysql_query($query7)
			or die ($query7);

		$query8 = "SELECT * FROM jbb_replies WHERE userID = '$reply->userID'";
		$result8 = mysql_query($query8)
			or die ($query8);

		$usertopics = mysql_numrows($result7);

		$userreplies = mysql_numrows($result8);

		$userPosts = $usertopics + $userreplies;

		$replypost = $reply->message;

		$query9 = "SELECT * FROM jbb_users WHERE userID = '$ck_userID'";
		$result9 = mysql_query($query9)
			or die ($query9);


		$admin = mysql_fetch_object($result9);

		$replacement = '<IMG SRC=images/emoticons/smile.gif>';
	
	$replacement2 = '<IMG SRC=images/emoticons/bigsmile.gif>';
	
	$replacement3 = '<IMG SRC=images/emoticons/frown.gif>';
	
	$replacement4 = '<IMG SRC=images/emoticons/crying.gif>';
	
	$replacement5 = '<IMG SRC=images/emoticons/blush.gif>';
	
	$replacement6 = '<IMG SRC=images/emoticons/confused.gif>';
	
	$replacement7 = '<IMG SRC=images/emoticons/cool.gif>';
	
	$replacement8 = '<IMG SRC=images/emoticons/surprised.gif>';
	
	$replacement9 = '<IMG SRC=images/emoticons/tongue.gif>';
	
	$replacement10 = '<IMG SRC=images/emoticons/innocent.gif>';
	
	$replacement11 = ' <IMG SRC=images/emoticons/wink.gif>';
	
	$replacement12 = '<IMG SRC=images/emoticons/whoa.gif>';

	$replacement13 = '<b>';

	$replacement14 = '</b>';
	
	$replacement15 = '<u>';

	$replacement16 = '</u>';

	$replacement17 = '<i>';

	$replacement18 = '</i>';

	$replacement19 = '<s>';

	$replacement20 = '</s>';

	$replacement21 = '<a href="';

	$replacement22 = '">';

	$replacement23 = '</a>';

	$replacement24 = '<FONT COLOR="';

	$replacement25 = '</FONT>';

	$replacement26 = '<FONT SIZE="';

	$replacement27 = '<BR>';

$replypost = str_replace(':)', $replacement, $replypost);
	

$replypost = str_replace(':D', $replacement2, $replypost);


$replypost = str_replace(':(', $replacement3, $replypost);
	

$replypost = str_replace(':crying:', $replacement4, $replypost);
	

$replypost = str_replace(':blush:', $replacement5, $replypost);
	

$replypost = str_replace(':?', $replacement6, $replypost);


$replypost = str_replace('B)', $replacement7, $replypost);
	

$replypost = str_replace(':O', $replacement8, $replypost);
	

$replypost = str_replace(':P', $replacement9, $replypost);


$replypost = str_replace(':angel:', $replacement10, $replypost);
	

$replypost = str_replace(';)', $replacement11, $replypost);
	

$replypost = str_replace(':0', $replacement12, $replypost);

$replypost = str_replace('[b]', $replacement13, $replypost);


$replypost = str_replace('[/b]', $replacement14, $replypost);


$replypost = str_replace('[u]', $replacement15, $replypost);


$replypost = str_replace('[/u]', $replacement16, $replypost);


$replypost = str_replace('[i]', $replacement17, $replypost);


$replypost = str_replace('[/i]', $replacement18, $replypost);


$replypost = str_replace('[s]', $replacement19, $replypost);


$replypost = str_replace('[/s]', $replacement20, $replypost);


$replypost = str_replace('[URL=', $replacement21, $replypost);


$replypost = str_replace(':]', $replacement22, $replypost);


$replypost = str_replace('[/URL]', $replacement23, $replypost);


$replypost = str_replace('[FONT COLOR=', $replacement24, $replypost);

$replypost = str_replace('[/FONT]', $replacement25, $replypost);

$replypost = str_replace('[FONT SIZE=', $replacement26, $replypost);

$replypost = str_replace('
', $replacement27, $replypost);	
	

		echo "


			<TABLE WIDTH=\"100%\" HEIGHT=\"100%\">
				<TR>
					<TD>
					</TD>

					<TD>
						<B>Posted:</B> $reply->postTime
					</TD>

					<TD>
					</TD>
				</TR>

				<TR>
					<TD WIDTH=\"100\">
						<B>$user->username</B>
						<BR>
						$user->title
						<BR><BR>
						<IMG SRC=\"$user->avatar\">
						<BR><BR>
						Posts: $userPosts
						<BR>
						
					</TD>

					<TD COLSPAN=\"2\" VALIGN=\"top\">
						<BR>$replypost
					</TD>
				</TR>

				<TR>
					<TD VALIGN=\"top\">
						
					</TD>

					<TD ALIGN=\"left\">
							<A HREF=\"index.php?act=user_profile&userID=$user->userID\"><IMG SRC=\"images/profile.gif\" BORDER=\"0\" WIDTH=\"53\" HEIGHT=\"17\"></A>
							<A HREF=\"index.php?act=private&messenger=send&userID=$user->userID\"><IMG SRC=\"images/pm.gif\" BORDER=\"0\" WIDTH=\"53\" HEIGHT=\"17\"></A>";
						if ($user->email == "") {
							echo "";
						} else {
							echo "<A HREF=\"mailto:$user->email\"><IMG SRC=\"images/email.gif\" BORDER=\"0\" WIDTH=\"53\" HEIGHT=\"17\"></A>";
						}

						if ($user->siteURL == "") {
							echo "";
						} else {
							echo "<A HREF=\"$user->siteURL\"><IMG SRC=\"images/www.gif\" BORDER=\"0\" WIDTH=\"53\" HEIGHT=\"17\"></A>";
						}

						if ($user->aim == "") {
							echo "";
						} else {
							echo "<A HREF=\"aim:goim?screenname=$user->aim&message=Hey, $user->firstName!\"><IMG SRC=\"images/aim.gif\" BORDER=\"0\" WIDTH=\"53\" HEIGHT=\"17\">";
						}

						if ($user->msnm == "") {
							echo "";
						} else {
							echo "<A HREF=\"javascript:MsgrApp.LaunchIMUI('$user->msnm');\"><IMG SRC=\"images/msnm.gif\" BORDER=\"0\" WIDTH=\"53\" HEIGHT=\"17\"></A>";
						}

						if ($user->yim == "") {
							echo "";
						} else {
							echo "<A HREF=\"http://edit.yahoo.com/config/send_webmesg?.target=$user->yim&amp;.src=pg\"><IMG SRC=\"images/yim.gif\" BORDER=\"0\" WIDTH=\"53\" HEIGHT=\"17\"></A>";
						}
echo "					</TD>

							 <TD ALIGN=\"right\">
						<A HREF=\"index.php?act=edit_reply&replyID=$reply->replyID&topicID=$reply->topicID\">Edit</A>&nbsp;&nbsp;<A HREF=\"index.php?act=delete_reply&replyID=$reply->replyID\">Delete</A>
			

				
				</TD>
				</TR>
			</TABLE>
			<HR COLOR=\"#C0C0C0\" SIZE=\"1\" WIDTH=\"75%\">";
	}
?>