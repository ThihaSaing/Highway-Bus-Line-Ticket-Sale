<html><head><title>Insertion Form</title></head>
<body>
<?php
    include("menu.php");
    include("passengerDBlink.php");
    include("highwaycarticketsalemenu.php");
    if(!isset($_POST['submit']))
    {
    ?>
    <div class="col-md-12">
    <form action='insertpassengerinfo.php'method='post'>
        <table border=0>
            <tr height=50>
                <td>
                    From Yangon To Mandalay
                </td>
                <td align="center"><input type='radio'name='r1'value='ytom'></td>
            </tr>
            <tr height=50>
                <td>From Mandalay To Yangon
                </td>
                <td align="center"><input type='radio'name='r1'value='mtoy'></td>
            <tr height=50>
                <td>Passenger Name:</td>
                <td><input type='text'name='pname' class="form-control"></td>
            </tr>
            <tr height=50>
                <td>NRC:</td>
                <td><input type='text'name='nrc' class="form-control" placeholder="11/NaPaTa(N)111111"></td>
            </tr>
            <tr height=50>
                <td>Bus:</td>
                <td><input type='text'name='bus' class="form-control"></td>
            </tr>
            <tr height=50>
                <td>Seat No:</td>
                <td><select name='seat' class="form-control">
        <?php
         echo"<option selected>------</option>";
        for($i=1;$i<=45;$i++)
        {  
          echo"<option>$i</option>";  
        }?>
        </select></td>
            </tr>
        <tr height=50>
            <td>Date:</td>
            <td>
                <input type='date' name='date' class="form-control">
            </td>
        </tr>
        <tr height=50>
            <td>Time:</td>
            <td>
                <input type='time' name='time' class="form-control">
            </td>
        </tr>
        <tr height=50>
            <td>Price(including endowment):</td>
            <td><input type='text'name='price' class="form-control"></td>
        </tr>
        <tr colspan=1 align="right">
            <td><input type='submit'name='submit'value='Sell' class="btn btn-success">
                <input type='reset'name='reset'value='Reset' class="btn btn-warning">
            </td>
        </tr>
        </table>
    </form>
    </div>
        <?php
    }
    else
    {
        $type=$_POST['r1'];
        $pname=$_POST['pname'];
        $nrc=$_POST['nrc'];
        $bus=$_POST['bus'];
        $seatno=$_POST['seat'];
        $date=$_POST['date'];
        $time=$_POST['time'];
        $price=$_POST['price'];
        if(empty($type) || empty($pname) || empty($nrc) || empty($bus) || $seatno==0 || $date=='0000-00-00' || $time=='00:00:00' || $price==0)
        {
        ?>
            <script language="JavaScript">
                    window.alert("Insertion Fail!!!!");
                </script>
        <?php
        }
        else if($type=='ytom')
        {
        $sql="INSERT INTO FrmYgnToMdy(PassengerName,NRC,Bus,SeatNo,Date,Time,Price)VALUES
            ('$pname','$nrc','$bus','$seatno','$date','$time','$price')";
            $result=mysql_query($sql,$con);
            if($result>0)
        {
            require('ticket.php');
        }
        else
        {
            echo"Something is wrong!!!" ;
        }
        }
        else if($type=='mtoy')
        {
        $sql="INSERT INTO FrmMdyToYgn(PassengerName,NRC,Bus,SeatNo,Date,Time,Price)VALUES
            ('$pname','$nrc','$bus','$seatno','$date','$time','$price')";
            $result=mysql_query($sql,$con);
            if($result>0)
        {
            require('ticket.php');
        }
        else
        {
            echo"Something is wrong!!!" ;
        }
        }
        
        mysql_close($con);
    } 
?>
</body></html>
