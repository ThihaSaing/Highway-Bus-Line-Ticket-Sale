<?php
    $con=mysql_connect("localhost","root","");
    if(!$con)
    {
        die('cannot connect'.mysql_error());
    }  
    if(mysql_query("CREATE DATABASE passengerDB",$con))
    {
        echo"Database created";
    }
    else
    {
        echo"Database could not created".mysql_error();
    }
    mysql_close($con);
?>
