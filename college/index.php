<?php

$table="<table><tr><td>KIRAN</td></tr></table>";
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=document_name.doc");

echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body>";
echo "<b>$table</b>";
echo "</body>";
echo "</html>";
?>