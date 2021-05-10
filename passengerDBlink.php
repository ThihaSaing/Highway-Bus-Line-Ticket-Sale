<?php
    $con=mysql_connect("localhost","root","");
    if(!$con)
    {
        die('cannot connect'.mysql_error());
    }  
    $dbname="passengerDB";
    $select=mysql_select_db($dbname,$con);
    if(!$select)
    {
        die('could not select database'.mysql_error());
    }
?>