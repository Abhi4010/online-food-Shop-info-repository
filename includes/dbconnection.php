<?php
require("constants.php");
$db = mysql_connect(DB_SERVER,DB_USER, DB_PASSWORD) or die('‘Unable to connect. Check your connection parameters.');
mysql_select_db(DB_NAME, $db) or die(mysql_error($db));
?>