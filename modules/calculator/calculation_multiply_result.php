<?php
echo "<CENTER><FONT SIZE=\"+2\"> You chose the following sentence for the calculator: <b>$factora</b>*<b>$factorb</FONT></b><BR><BR>"; ?>
<?php
$calculation = $factora * "$factorb";                  
?>

<?php
echo "<FONT SIZE=\"+1\">The product was <b>$calculation<b></FONT><BR><BR><A HREF=\"index.php?file=calculator_multiply\">New Calculation</A>" . "<br />\n";
?>
