<?php

$connection = new mysqli("localhost","root","","codesnipits");

$name = $_POST['name'];
$phone = $_POST['phone'];
$timing = $_POST['timing'];

$query = "INSERT INTO curl SET name='$name',phone='$phone',timing='$timing' ";
$res = $connection->query($query);
if ($res){
    echo 'successs';
}
