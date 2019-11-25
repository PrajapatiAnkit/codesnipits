<?php
/**
 * Created by PhpStorm.
 * User: kc
 * Date: 2/5/2019
 * Time: 8:08 PM
 */

class Commmon
{
    public function saveData($connection,$name,$email)
    {
        $query = "INSERT INTO register SET name='$name',email='$email' ";
        $result = $connection->query($query) or die("Error in query".$connection->error);
        return $result;
    }
}