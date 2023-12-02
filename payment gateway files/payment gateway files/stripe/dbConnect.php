<?php 

// Connect with the database 
$db_conn = new mysqli("localhost","root","mysql","shop"); 
// Display error if failed to connect 
if ($db_conn->connect_errno) { 
    printf("Connect failed: %s\n", $db_conn->connect_error); 
    exit(); 
}
?>