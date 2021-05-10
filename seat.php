<html><head><title>Seat Form</title></head>
<body>
<div class="col-md-12">
    <?php 
        include("menu.php");
    ?>
</div>
<?php
    include("passengerDBlink.php");
    $s=0;
?>
<div class="col-md-12">
    <?php 
        include("highwaycarticketsalemenu.php");
    ?>
</div>
	
	<div class="col-md-4">
    <form action='seatcondition.php'method='post'>
        <table border=0>
            <tr height=50>
                <td>Bus:</td>
                <td><input type='text'name='bus' class="form-control"></td>
            </tr>
            <tr height=50>
                <td>Date:</td>
                <td><input type='date' name='date' class="form-control"></td>
        	</tr>
            <tr height=50>
            <td>Time:</td>
            <td>
                <input type='time' name='time' class="form-control">
            </td>
        </tr>
        	<tr colspan=1 align="right">
            	<td><input type='submit'name='submit'value='Check' class="btn btn-success"></td>
        	</tr>
        </table>
    </form>
    </div>

    <div class="col-md-4">
    <html>
    	<head>
    		<title>Seatcondition Form</title>
    	</head>
    	<body>
    		<table border="50">
    		<thead>
        		<tr><th colspan="5"><center>From Yangon To Mandalay</center></th></tr>
    		</thead>
    		<tbody>
    		<?php
    			$seat=array(array(1,2,null,3,4),
                			array(5,6,null,7,8),
                			array(9,10,null,11,12),
                			array(13,14,null,15,16),
                			array(17,18,null,19,20),
                			array(21,22,null,23,24), 
                			array(25,26,null,27,28),
                			array(29,30,null,31,32),
                			array(33,34,null,35,36),
                			array(37,38,null,39,40),
                			array(41,42,43,44,45));
                foreach($seat as $x)
    			{
        			echo"<tr height=50>";
        			foreach($x as $y)
        			{
                        $bus=$_POST['bus'];
                        $date=$_POST['date'];
                        $time=$_POST['time'];
                        $sql="SELECT SeatNo FROM FrmYgnToMdy WHERE Bus='$bus' AND Date='$date' AND TIME='$time'";
                        $ret=mysql_query($sql,$con);
                        $n=mysql_num_rows($ret);
                        if($n==0)
                        {
                            echo"<td width=100><center>$y</center></td>";
                        }
                        else{
                        $count=0;
                        while($res=mysql_fetch_array($ret))
                        {
                    if($res['0']==$y)
                    {
                        $count="Unavailable";
                        break;
                    }
                    else
                    {
                        $count=$y;
                    }

                        }
                    echo"<td width=100><center>$count</center></td>";
                    }
                }
                    echo"</tr>";
                }
            ?>
            </tbody>
            <tfoot>
            </tfoot>
            </table>
            <?php
                echo"<B>Total Sold Seat=$n</B></BR></BR>";
            ?>
        </body>
    </html>
    </div>

    <div class="col-md-4">
    <html>
        <head>
            <title>Seatcondition Form</title>
        </head>
        <body>
            <table border="50">
            <thead>
                <tr><th colspan="5"><center>From Mandalay To Yangon</center></th></tr>
            </thead>
            <tbody>
            <?php
                $seat=array(array(1,2,null,3,4),
                            array(5,6,null,7,8),
                            array(9,10,null,11,12),
                            array(13,14,null,15,16),
                            array(17,18,null,19,20),
                            array(21,22,null,23,24), 
                            array(25,26,null,27,28),
                            array(29,30,null,31,32),
                            array(33,34,null,35,36),
                            array(37,38,null,39,40),
                            array(41,42,43,44,45));
                foreach($seat as $x)
                {
                    echo"<tr height=50>";
                    foreach($x as $y)
                    {
                        $bus=$_POST['bus'];
                        $date=$_POST['date'];
                        $time=$_POST['time'];
                        $sql="SELECT SeatNo FROM FrmMdyToYgn WHERE Bus='$bus' AND Date='$date' AND TIME='$time'";
                        $ret=mysql_query($sql,$con);
                        $n=mysql_num_rows($ret);
                        if($n==0)
                        {
                            echo"<td width=100><center>$y</center></td>";
                        }

                        else{
                        $count=0;
                        
                        while($res=mysql_fetch_array($ret))
                        {
                    if($res['0']==$y)
                    {
                        $count="Unavailable";
                        break;
                    }
                    else
                    {
                        $count=$y;
                    }

                        }
                    echo"<td width=100><center>$count</center></td>";
                    }
                }
                    echo"</tr>";
                }
            ?>
            </tbody>
            <tfoot>
            </tfoot>
            </table>
            <?php
                echo"<B>Total Sold Seat=$n</B></BR></BR>";
            ?>
        </body>
    </html>
    </div>

        <?php
        mysql_close($con);
    	?>
</body>
</html>