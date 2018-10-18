<CENTER><HR COLOR="#C0C0C0" SIZE="1" WIDTH="100%"></CENTER>
<INPUT TYPE="hidden" name="pmID" value="$pm->pmID">
<?php


	include ('conf.php');

	$conn = mysql_connect ($sqlServer, $sqlUsername, $sqlPassword)
		or die ("Could not connect to server $sqlServer");
	mysql_select_db ($sqlDatabase, $conn)
		or die ("Could not connect to database $sqlDatabase");
	
	$query1 = "SELECT * FROM jbb_pm WHERE pmID = '$pmID'";
	$result1 = mysql_query ($query1)
		or die ($query1);


	while ($pm = mysql_fetch_object($result1)) {

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

	$replacement12 = '<BR>';

$pm->message = str_replace(':)', $replacement, $pm->message);
	

$pm->message = str_replace(':D', $replacement2, $pm->message);


$pm->message = str_replace(':(', $replacement3, $pm->message);
	

$pm->message = str_replace(':crying:', $replacement4, $pm->message);
	

$pm->message = str_replace(':blush:', $replacement5, $pm->message);
	

$pm->message = str_replace(':?', $replacement6, $pm->message);


$pm->message = str_replace('B)', $replacement7, $pm->message);
	

$pm->message = str_replace(':O', $replacement8, $pm->message);
	

$pm->message = str_replace(':P', $replacement9, $pm->message);


$pm->message = str_replace(':angel:', $replacement10, $pm->message);
	

$pm->message = str_replace(';)', $replacement11, $pm->message);
	

$pm->message = str_replace(':0', $replacement12, $pm->message);

$pm->message = str_replace('
', $replacement13, $pm->message);	
	

					

echo "


			<TR>


				
		
				<TD ALIGN=\"left\">
					Reading \"$pm->title\" sent by <b>$pm->sender</b>.
					<BR>
					<BR>
					<BR>
				</TD>
		
</TR>
<TR>

				<TD ALIGN=\"left\">
					$pm->message
				</TD>
		
			</TR>

<TR>

			<TD ALIGN=\"right\">
			<FORM ACTION=\"index.php?act=private\" METHOD=\"post\">
			<INPUT TYPE=\"hidden\" NAME=\"pmusr\" VALUE=\"$pm->sender\">
			<INPUT TYPE=\"submit\" VALUE=\"Reply\">	
			</FORM>
			</TD>

</TR>
		";

	}
?>
