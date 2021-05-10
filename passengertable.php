<?php
    include("passengerDBlink.php");
    $sql="CREATE TABLE FrmYgnToMdy(PassengerName varchar(50),NRC varchar(50),Bus varchar(50),SeatNo int,
            Date date,Time time,Price int)";
    $ret=mysql_query($sql,$con);
    if(!$ret)
    {
        die('cannot create FrmYgnToMdy Table'.mysql_error());
    }
    else
    {
        echo"FrmYgnToMdy Table is created successfully<BR/>";
    }
    $abc="CREATE TABLE FrmMdyToYgn(PassengerName varchar(50),NRC varchar(50),Bus varchar(50),SeatNo int,
            Date date,Time time,Price int) ";
    $res=mysql_query($abc,$con);
    if(!$res)
    {
        die('cannot create FrmMdyToYgn Table'.mysql_error());
    }
    else
    {
        echo"FrmMdyToYgn Table is created successfully";
    }
    mysql_close($con);
?>
