<?php
$username = "";						// Admin Username
$password = "";						// Admin Password
$email = "";						// Admin Email

$sql_server = "";					// 99% of the time: localhost
$sql_username = "";					// Your mySQL Username
$sql_password = "";					// Your mySQL Password
$sql_database = "";					// Your mySQL Database

$conn = mysql_connect ($sql_server, $sql_username, $sql_password)
	or die ("Uh oh! I could not connect to server $sql_server.");
	
mysql_select_db ($sql_database, $conn)
	or die ("Uh oh! I could not connect to database $sql_database");

$query = "CREATE TABLE `jbb_categories` (
  `catID` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL default '',
  `order` int(11) NOT NULL default '0',
  PRIMARY KEY  (`catID`)
) TYPE=MyISAM AUTO_INCREMENT=3";
$result = mysql_query ($query)
			or die ($query); 


$query2 = "CREATE TABLE `jbb_emoticons` (
  `emoticonID` int(11) NOT NULL auto_increment,
  `skinID` tinyint(11) NOT NULL default '0',
  `input` varchar(20) NOT NULL default '',
  `output` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`emoticonID`)
) TYPE=MyISAM AUTO_INCREMENT=1";
$result2 = mysql_query ($query2)
			or die ($query2); 


$query3 = "CREATE TABLE `jbb_forums` (
  `forumID` int(11) NOT NULL auto_increment,
  `catID` int(11) NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  `description` text NOT NULL,
  `order` int(11) NOT NULL default '0',
  `restrictions` int(11) NOT NULL default '0',
  PRIMARY KEY  (`forumID`)
) TYPE=MyISAM AUTO_INCREMENT=6";
$result3 = mysql_query ($query3)
			or die ($query3); 


$query4 = "CREATE TABLE `jbb_groups` (
  `groupID` int(11) NOT NULL auto_increment,
  `name` text NOT NULL,
  `level` int(11) NOT NULL default '0',
  PRIMARY KEY  (`groupID`)
) TYPE=MyISAM AUTO_INCREMENT=1";
$result4 = mysql_query ($query4)
			or die ($query4); 

$query5 = "CREATE TABLE `jbb_moderators` (
  `modID` int(11) NOT NULL auto_increment,
  `userID` int(11) NOT NULL default '0',
  `accessID` int(11) NOT NULL default '0',
  `forumID` int(11) NOT NULL default '0',
  `level` int(11) NOT NULL default '0',
  PRIMARY KEY  (`modID`)
) TYPE=MyISAM AUTO_INCREMENT=1";
$result5 = mysql_query ($query5)
			or die ($query5); 


$query6 = "CREATE TABLE `jbb_pm` (
  `username` text NOT NULL,
  `title` text NOT NULL,
  `message` text NOT NULL,
  `sender` text NOT NULL,
  `pmID` int(11) NOT NULL auto_increment,
  UNIQUE KEY `pmID` (`pmID`)
) TYPE=MyISAM AUTO_INCREMENT=7";
$result6 = mysql_query ($query6)
			or die ($query6); 

$query7 = "CREATE TABLE `jbb_preferences` (
  `boardName` text NOT NULL,
  `boardURL` text NOT NULL,
  `boardEmail` text NOT NULL,
  `aggrement` longtext NOT NULL,
  `allowHTML` enum('true','false') NOT NULL default 'true',
  `allowImages` enum('true','false') NOT NULL default 'true',
  `allowLinks` enum('true','false') NOT NULL default 'true',
  `linksNewWindow` enum('true','false') NOT NULL default 'true',
  `allowBold` enum('true','false') NOT NULL default 'true',
  `allowItalics` enum('true','false') NOT NULL default 'true',
  `allowUnderline` enum('true','false') NOT NULL default 'true',
  `defaultSkinID` int(11) NOT NULL default '0'
) TYPE=MyISAM";
$result7 = mysql_query ($query7)
			or die ($query7); 

$query8 = "CREATE TABLE `jbb_replies` (
  `replyID` int(11) NOT NULL auto_increment,
  `forumID` int(11) NOT NULL default '0',
  `topicID` int(11) NOT NULL default '0',
  `userID` int(11) NOT NULL default '0',
  `postTime` datetime NOT NULL default '0000-00-00 00:00:00',
  `message` longtext NOT NULL,
  PRIMARY KEY  (`replyID`)
) TYPE=MyISAM AUTO_INCREMENT=46";
$result8 = mysql_query ($query8)
			or die ($query8); 


$query9 = "CREATE TABLE `jbb_skins` (
  `skinID` int(11) NOT NULL auto_increment,
  `skinName` varchar(50) NOT NULL default '',
  `dir` text NOT NULL,
  `hideSkin` enum('true','false') NOT NULL default 'true',
  `default` enum('true','false') NOT NULL default 'true',
  PRIMARY KEY  (`skinID`)
) TYPE=MyISAM AUTO_INCREMENT=1";
$result9 = mysql_query ($query9)
			or die ($query9); 


$query10 = "CREATE TABLE `jbb_topics` (
  `topicID` int(11) NOT NULL auto_increment,
  `forumID` int(11) NOT NULL default '0',
  `userID` int(11) NOT NULL default '0',
  `postTime` datetime NOT NULL default '0000-00-00 00:00:00',
  `lastPostTime` datetime NOT NULL default '0000-00-00 00:00:00',
  `lastPostUserID` int(11) NOT NULL default '0',
  `subject` text NOT NULL,
  `description` text NOT NULL,
  `firstPost` longtext NOT NULL,
  `sticky` enum('true','false') NOT NULL default 'false',
  `locked` enum('true','false') NOT NULL default 'false',
  PRIMARY KEY  (`topicID`)
) TYPE=MyISAM AUTO_INCREMENT=53";
$result10 = mysql_query ($query10)
			or die ($query10); 


$query11 = "CREATE TABLE `jbb_users` (
  `userID` int(11) NOT NULL auto_increment,
  `skinID` tinyint(4) NOT NULL default '0',
  `groupID` tinyint(4) NOT NULL default '0',
  `username` varchar(20) NOT NULL default '',
  `password` varchar(16) NOT NULL default '',
  `firstName` varchar(30) NOT NULL default '',
  `lastName` varchar(30) NOT NULL default '',
  `avatar` varchar(150) NOT NULL default '',
  `sig` varchar(255) NOT NULL default '',
  `title` varchar(50) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `hideEmail` enum('true','false') NOT NULL default 'true',
  `aim` varchar(30) NOT NULL default '',
  `msn` varchar(50) NOT NULL default '',
  `yim` varchar(30) NOT NULL default '',
  `intrests` text NOT NULL,
  `siteURL` varchar(200) NOT NULL default '',
  `location` varchar(100) NOT NULL default '',
  `bio` text NOT NULL,
  `lastVisit` datetime NOT NULL default '0000-00-00 00:00:00',
  `registered` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`userID`)
) TYPE=MyISAM AUTO_INCREMENT=14";
$result11 = mysql_query ($query11)
			or die ($query11); 


$query12 = "CREATE TABLE `jbb_visitors` (
  `visitorID` int(11) NOT NULL auto_increment,
  `ip` varchar(16) NOT NULL default '',
  `timestamp` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`visitorID`)
) TYPE=MyISAM AUTO_INCREMENT=1";
$result12 = mysql_query ($query12)
			or die ($query12); 


$query14 = "INSERT INTO jbb_users (username, password, email, groupID) VALUES ('$username','$password','$email','1')";

mysql_query ($query14)
	or die ($query14);


echo "<CENTER><TABLE WIDTH=\"75%\">
<TR>
<TD HEIGHT=\"40\" BACKGROUND=\"images/top_strip.gif\"><FONT FACE=\"verdana\" SIZE=\"+2\" COLSPAN=\"2\">JBB MYSQL Installation</FONT></TD>
</TR>
<TR>
<TD HEIGHT=\"30\">
</TD>
</TR>
<TR>
<TD ALIGN=\"center\"><b><FONT FACE=\"verdana\"><b>Thank you! JBB has successfully been installed in your MYSQL Database. You are being redirected now.<BR>
<A HREF=\"finish_install.php\">(Or click here if you do not wish to wait.)</a></TD></TR>
</TABLE>";


?>



<HTML>
<HEAD>
	<META HTTP-EQUIV=\"refresh\" CONTENT=\"2;URL=finish_install.php\">
</HEAD>
</HTML>