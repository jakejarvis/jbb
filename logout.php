<?php
	session_start();
	session_destroy();

	echo "
		<HTML>
		<HEAD>
			<META HTTP-EQUIV=\"refresh\" CONTENT=\"0;URL=index.php\">
		</HEAD>
		</HTML>
		";
?>