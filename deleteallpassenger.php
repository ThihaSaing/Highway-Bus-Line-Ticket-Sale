<div class="col-md-12">
<?php 
    include("menu.php");
?>
</div>
<?php
    include('passengerDBlink.php');?>
    <div class="col-md-12">
    <?php include('highwaycarticketsalemenu.php');?>
    </div>
    <div class="col-md-12">
    <?php
    if(!isset($_POST['submit']))
    {
?>
        <div class="col-md-6">
        <form action='deleteallpassenger.php'method='post'>
        
        <table border=0>
            <tr height=50>
                <td>
                    From Yangon To Mandalay
                </td>
                <td align="center"><input type='radio'name='r1'value='ytom'></td>
            </tr>
            <tr height=50>
                <td>
                    From Mandalay To Yangon
                </td>
                <td align="center"><input type='radio'name='r1'value='mtoy'></td>
            <tr height=50>
                <td>Date:</td>
                <td>        
                    <input type='date' name='date' placeholder="year-month-day" class="form-control">
                </td>
            </tr>
        </table>
        <p align="center"><input type='submit'name='submit'value='Delete' class="btn btn-danger"></p>
        </form>
        </div>
<?php
    }  
    else
    {
        $type=$_POST['r1'];
        $date=$_POST['date'];
        if($type=='ytom')
        {
            $sql="DELETE FROM FrmYgnToMdy WHERE Date='$date'";
        }
        else
        {
            $sql="DELETE FROM FrmMdyToYgn WHERE Date='$date'";
        }
        $ret=mysql_query($sql,$con);
            if($ret>0)
            {
            echo "<h1>Deletion Complete</h1>";
            }
            else
            {
                echo "<h1>Delete Fail</h1>";
                echo"<a href='deleteallpassenger.php' class='btn btn-info'>Try Again</a>";
            }
                mysql_close($con);
    }  
?>
</div>