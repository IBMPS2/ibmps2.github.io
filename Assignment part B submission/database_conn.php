<?php
$dbConn = new mysqli('localhost', 'unn_w18008993', 'Rebecca01@', 'unn_w18008993');

if ($dbConn->connect_error) {
    echo "<p>Connection failed: ".$dbConn->connect_error."</p>\n";
    exit;
}
?>
