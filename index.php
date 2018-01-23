<?php
$link = mysql_connect('freqcy.database.windows.net:1433', 'mubek', 'Zeromskiego26');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>