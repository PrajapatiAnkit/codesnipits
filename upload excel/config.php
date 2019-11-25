<?php
/**
 * Created by PhpStorm.
 * User: Ankit
 * Date: 11/29/2018
 * Time: 7:47 PM
 */

$connection = new mysqli("localhost","root","","exeldata");
if (! $connection){
    die("Error in connection".$connection->connect_error);
}