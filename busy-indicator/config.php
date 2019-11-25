<?php
$connection = new mysqli("localhost","root","","codesnipts");
if (! $connection){
    die("Error in connection".$connection->connect_error);
}
