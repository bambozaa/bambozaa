<?php			
$conn=odbc_connect("DATAWH", "thi", "thi_3650");
if ($conn) {
    echo "Connection established.";
} else{
    die("Connection could not be established.");
}
?>