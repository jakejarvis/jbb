<HTML>
<HEAD>
<BASE TARGET="main">

<STYLE TYPE="text/css">
a:link {font-family:Verdana; font-color:navyblue;}
</STYLE>
</HEAD>
<BODY>
<FONT FACE="Verdana" SIZE="-1">
<?php
	$act = $act . ".php";
			
	if ( $act == "" || !file_exists($act) ) {
		$act = "main.php";
	}
	include("$act");
?>
</FONT>
</BODY>
</HTML>
