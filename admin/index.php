<?php
	include('../conf.php');
	require('../functions.php');

session_start()

?>


<?php
if ($ck_userID == "") {
echo "<meta http-equiv=\"refresh\" content=\"0; url=./login.php\">";
} else {

echo "
<HTML>
<HEAD>
<FRAMESET COLS=\"205,*\" BORDER=\"0\">
<FRAME NAME=\"left\" SRC=\"admin.php?act=left\" RESIZE=\"no\">
<FRAME NAME=\"main\" SRC=\"admin.php?act=main\" RESIZE=\"no\">
</FRAMESET>
</HEAD>
</HTML>";


}
?>