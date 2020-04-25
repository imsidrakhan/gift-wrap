<?php
$db=mysqli_connect("localhost","root","","giftwrap");

if($db)
{
    connection_status();
}
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

?>