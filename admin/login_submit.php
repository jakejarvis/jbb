<?php
	include('../conf.php');

	$conn = mysql_connect ($sqlServer, $sqlUsername, $sqlPassword)
			or die ("Uh oh! I could not connect to server $sqlServer.");
	
	mysql_select_db ($sqlDatabase)
			or die ("Uh oh! I could not connect to database $sqlDatabase");

	$query = "SELECT * FROM jbb_users WHERE groupID = '1' AND username = '$username' AND password = '$password'";
	$result = mysql_query ($query)
			or die ($query);

	$url = "index.php?";

	foreach ($_GET as $variable => $value) {
		$url .= "$variable=$value&";
	}

	if ( mysql_numrows ($result) > "0") {
		$user = mysql_fetch_object ($result);
		session_id($user->userID);
		session_start();
		$_SESSION["ck_userID"] = $user->userID;
		$_SESSION["ck_username"] = $user->username;


		echo "
		<HTML>
		<HEAD>
			<META HTTP-EQUIV=\"refresh\" CONTENT=\"0;URL=$url\">
		</HEAD>
		</HTML>
		";
	} else {
		echo "
		<HTML>
		<HEAD>
			<META HTTP-EQUIV=\"refresh\" CONTENT=\"0;URL=login.php\">
		</HEAD>
		<BODY onLoad=\"alert('Wrong password. Please try again.')\">
		</BODY>
		</HTML>
		";
	}
?>