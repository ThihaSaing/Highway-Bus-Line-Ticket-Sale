<div class="col-md-12">
    <?php 
        include("menu.php");
    ?>
</div>
<?php
    include("passengerDBlink.php");
?>
<div class="col-md-12">
    <?php 
        include("highwaycarticketsalemenu.php");
    ?>
</div>
<div class="col-md-12">
<?php
    if(!isset($_POST['submit']))
    {
?>
    <div class="col-md-12">
    <form action='deletepassenger.php'method='post'>
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
            </tr>
            <tr height=50>
                <td>Bus:</td>
                <td><input type='text'name='bus' class="form-control"></td>
            </tr>
            <tr height=50>
                <td>Passenger Name:</td>
                <td><input type='text'name='pname' class="form-control"></td>
            </tr>
            <tr height=50>
                <td>NRC:</td>
                <td><input type='text'name='nrc' class="form-control" placeholder="11/NaPaTa(N)111111"></td>
            </tr>
            <tr height=50>
                <td>Date:</td>
                <td>        
                    <input type='date' name='date' class="form-control">
                </td>
            </tr>
            <tr colspan=2 align="center" height=50>
                <td><input type='submit'name='submit'value='Delete' class="btn btn-danger">
                <input type='reset'name='reset'value='Clear' class="btn btn-warning">
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
        $bus=$_POST['bus'];
        $pname=$_POST['pname'];
        $nrc=$_POST['nrc'];
        $date=$_POST['date'];
        if($type=='ytom')
         $sql="DELETE FROM FrmYgnToMdy WHERE Bus='$bus' AND PassengerName='$pname' AND NRC='$nrc' AND 
                Date='$date'";
        else
             $sql="DELETE FROM FrmMdyToYgn WHERE Bus='$bus' AND PassengerName='$pname' AND NRC='$nrc' AND 
                    Date='$date'";
            $ret=mysql_query($sql,$con);
            if($ret>0)
            echo"<h1>Deletion Complete</h1></BR>";
            else
                echo"Delete Fail";
                mysql_close($con);
                echo"<a href='deletepassenger.php' class='btn btn-info'>Back</a>";
    }
?>
</div>