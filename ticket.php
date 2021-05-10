<meta charset="utf-8">
<title>Ticket</title>
      <div class="col-md-12">
      </div>
       <div class="col-md-12">
      <?php 
        include("passengerDBlink.php");
        $type=$_POST['r1'];
        $pname=$_POST['pname'];
        $nrc=$_POST['nrc'];
        $bus=$_POST['bus'];
        $seatno=$_POST['seat'];
        $date=$_POST['date'];
        $time=$_POST['time'];
        $price=$_POST['price'];
        if($type=='ytom')
        {
            $sql="SELECT*FROM FrmYgnToMdy WHERE PassengerName='$pname' AND NRC='$nrc' AND Bus='$bus' AND 
                  SeatNo='$seatno' AND Date='$date' AND Time='$time' AND Price='$price'";
            echo"<h1>From Yangon To Mandalay</h1><BR/>";
        }
        else
        {
            $sql="SELECT*FROM FrmMdyToYgn WHERE PassengerName='$pname' AND NRC='$nrc' AND Bus='$bus' AND 
                  SeatNo='$seatno' AND Date='$date' AND Time='$time' AND Price='$price'";
            echo"<h1>From Mandalay To Yangon</h1><BR/>";
        }     
            $ret=mysql_query($sql,$con);
            $n=mysql_num_rows($ret);
            if($n==0)
            {
                echo"<h1>Can't insert</h1><BR/>";
                echo"<a href='home.php'>Insert Again</a>";
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
              <th>Price (including endowment) : </th>   <td>{$res['Price']}</td>
          </tr>";

  }
?>
          </table>
<SCRIPT LANGUAGE="JavaScript"> 
</script>
<?php
    echo"Thank You"; 
          }
?>
</div>