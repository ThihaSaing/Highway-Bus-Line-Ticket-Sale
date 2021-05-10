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
    <form action='selectpassenger.php'method='post'>
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
            <td><input type='submit'name='submit'value='Select' class="btn btn-success">
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
         $sql="SELECT * FROM FrmYgnToMdy WHERE Bus='$bus' AND PassengerName='$pname' AND NRC='$nrc' AND 
                Date='$date'";
        else
             $sql="SELECT * FROM FrmMdyToYgn WHERE Bus='$bus' AND PassengerName='$pname' AND NRC='$nrc' AND 
                    Date='$date'";
            $ret=mysql_query($sql,$con);
            $n=mysql_num_rows($ret);
            if($n==0)
            {
                echo"<h1>Passenger doesn't exist.</h1><BR/>";
                mysql_close($con);
                echo"<a href='home.php'>Select Again</a>";
            }
            else
            {
        ?>
          <div class='table-responsive'>
          <div class="col-md-12">
          <table border='0'>
<?php
                for($i=0;$i<$n;$i++)
                {
                    $res=mysql_fetch_array($ret);

                    echo" <tr>
                              <th>Passenger Name : </th>  <td>{$res['PassengerName']}</td>
                          </tr>
                          <tr>
                             <th>NRC : </th>  <td>{$res['NRC']}</td>
                          </tr>
                          <tr>
                             <th>Bus : </th>  <td>{$res['Bus']}</td>
                          </tr>
                          <tr>
                            <th>Seat No : </th>   <td>{$res['SeatNo']}</td>
                          </tr>
                          <tr>
                            <th>Date : </th>    <td>{$res['Date']}</td>
                          </tr>
                          <tr>
                            <th>Time : </th>    <td>{$res['Time']}</td>
                          </tr>
                          <tr>
                            <th>Price (including endowment policy) : </th>   <td>{$res['Price']}</td>
                          </tr>";
                }
      ?>
                </table>

<SCRIPT LANGUAGE="JavaScript"> 
</script>
<?php
                echo"<a href='home.php'>Thank You</a>"; 
            }
    }
?>
</div>
</div>
