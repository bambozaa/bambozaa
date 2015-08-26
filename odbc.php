<?php			
$conn=odbc_connect("dbname", "user", "pass");
if ($conn) {
    echo "Connection established.";
} else{
    die("Connection could not be established.");
}
?>
