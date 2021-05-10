<style type="text/css">
#tabletextshadow{
  color:#c3b33a;
  text-shadow:3px 3px 4px #c612ef; 
}
</style>
<div class="col-md-12"><?php include("menu.php");?></div>
<?php

    include("passengerDBlink.php");?>
    <div class="col-md-12">
    <?php include("highwaycarticketsalemenu.php");?>
    </div>
    <?php
    echo"<BR><BR>";
    $sql="SELECT*FROM FrmYgnToMdy";
    $ret=mysql_query($sql,$con);
?>
<div class="col-md-12">
    <h1 id="tabletextshadow">From Yangon To Mandalay</h1><BR/>
    <div class='table-responsive'>
    <div class="col-md-12">
         <table border='1' class='table'> 
         <tr class="bg-primary"><th><center>Passenger Name</center></th>
             <th><center>NRC</center></th>
             <th><center>Bus</center></th>
             <th><center>Seat No</center></th>
             <th><center>Date</center></th>
             <th><center>Time</center></th>
             <th><center>Price</center></th>
         </tr>
         <?php
         $n=mysql_num_rows($ret);
         for($i=0;$i<$n;$i++)
         {
             $res=mysql_fetch_array($ret);
              echo"<tr class='bg-info'>
                      <td align=center>{$res['PassengerName']}</td>
                      <td align=center>{$res['NRC']}</td>
                      <td align=center>{$res['Bus']}</td>
                      <td align=center>{$res['SeatNo']}</td>
                      <td align=center>{$res['Date']}</td>
                      <td align=center>{$res['Time']}</td>
                      <td align=center>{$res['Price']}</td>
                  </tr>";
         }
     echo"</table></div><BR/>";
     $abc="SELECT*FROM FrmMdyToYgn";
     $res=mysql_query($abc,$con);
          ?>
    <h1 id="tabletextshadow">From Mandalay To Yangon</h1><BR/>
        <div class='table-responsive'>
        <div class="col-md-12">
         <table border='1' class='table'> 
         <tr class="bg-primary"><th><center>Passenger Name</center></th>
             <th><center>NRC</center></th>
             <th><center>Bus</center></th>
             <th><center>Seat No</center></th>
             <th><center>Date</center></th>
             <th><center>Time</center></th>
             <th><center>Price</center></th>
         </tr>         
         <?php
         $n=mysql_num_rows($res);
         for($i=0;$i<$n;$i++)
         {
             $ret=mysql_fetch_array($res);
             echo"<tr class='bg-info'>
                      <td align=center>{$ret['PassengerName']}</td>
                      <td align=center>{$ret['NRC']}</td>
                      <td align=center>{$ret['Bus']}</td>
                      <td align=center>{$ret['SeatNo']}</td>
                      <td align=center>{$ret['Date']}</td>
                      <td align=center>{$ret['Time']}</td>
                      <td align=center>{$ret['Price']}</td>
                  </tr>";
         }
     echo"</table></div>";
     mysql_close($con);  
          ?>

  </div>