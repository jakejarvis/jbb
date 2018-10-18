<?php

include('../conf.php');

	$conn = mysql_connect ($sqlServer, $sqlUsername, $sqlPassword)
			or die ("Uh oh! I could not connect to server $sqlServer.");
	
	mysql_select_db ($sqlDatabase, $conn)
			or die ("Uh oh! I could not connect to database $sqlDatabase");

	 $query2 = "UPDATE jbb_users 
    SET email = '$usermail' , firstName = '$firstn' , lastName = '$lastn' , avatar = '$usravatar' , title = '$usrtitle' , aim = '$usraim' , msn = '$usrmsn' , yim = '$usryim' , intrests = '$usrintrests' , siteURL = '$usrwebsite' , location = '$location' , bio = '$bio' , sig = '$sig' 
    WHERE userID ='$ck_userID'";
	$result2 = mysql_query ($query2)
			or die ($query2); 


	echo "<CENTER>Thank you for changing your user settings. Now taking you to the administration cp.<BR><A HREF=\"admin.php\">(Click here if you do not wish to wait.)</A></CENTER>";

	echo "<meta http-equiv=\"refresh\" content=\"5; url=admin.php\">";

?>