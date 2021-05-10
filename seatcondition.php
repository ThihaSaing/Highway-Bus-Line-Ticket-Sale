<html><head><title>SeatAvailable Form</title></head>
<body>
<?php
	include("passengerDBlink.php");
?>
<div class="col-md-12">
<?php
    include("highwaycarticketsalemenu.php");
?>
</div>
<?php
    if(!isset($_POST['submit']))
    {
?>
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
    		<table border="50" class="table">
    		<thead>
        		<tr><th colspan="5"><center>From Yangon To Mandalay</center></th></tr>
    		</thead>
    		<tbody>
    		<?php
            function seatformat()
            {
            
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
        				echo"<td width=100><center>$y</center></td>";
        			}
        			echo"</tr>";
    			}
            }
            seatformat();
    		?>
            </tbody>
       		<tfoot>
       		</tfoot>
            </table>
		</body>
	</html>
    </div>

    <div class="col-md-4">
    <html>
    	<head>
    		<title>Seatcondition Form</title>
    	</head>
    	<body>
    		<table border="50" class="table">
    		<thead>
        		<tr><th colspan="5"><center>From Mandalay To Yangon</center></th></tr>
    		</thead>
    		<tbody>
    		<?php
    			seatformat();
    		?>
       		</tbody>
       		<tfoot>
       		</tfoot>
   			</table>
		</body>
	</html>
	</div>

<?php
    }
    else
    {
        include('seat.php');
    }
?>
</body>
</html>