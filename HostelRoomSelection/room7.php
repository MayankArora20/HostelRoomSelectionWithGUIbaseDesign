<?php
session_start();
$con=mysqli_connect("localhost","root","");
 if(!$con)
  echo '<script type="text/javascript"> alert("Database connection error");</script>';
 else
 {
   mysqli_select_db($con,"mini_proj");
   }
?>
<!DOCTYPE html>
<html>
<head>
  <title>ROOM Selection</title>
  <link href="rooms.css" rel='stylesheet' type='text/css' />
</head>
<script type="text/javascript">

  function init()
  {
      <?php
       for($i=701;$i<742;$i++)
       {
        $q="select availability from room where roomNo=$i";
        $r=mysqli_query($con,$q);
        $row = mysqli_fetch_array($r);
        $m="document.getElementById($i).style.backgroundColor ="; 
        if($row['availability']>0) 
          echo $m.'"blue";'; 
        else
          { 
           echo $m.'"black";';
           $k='a'.$i;
           echo "document.getElementById('$k').removeAttribute('href');";
          }  
        }
      ?>
  }
</script>
<body style=" background-color: #ed1061" onload="init()">
<center><h1 style="color: lightgreen;">Select Your Room</h1></center>

<center>

<!--First row of First wing, Room 101-112-->
  <table class="oddRow">
    <tr>
      <td >
        <a style="display:block; height:100%;" id="a721"href="Select.php?id=712"><div class="room" id="712" > Room 712</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a711" href="Select.php?id=711"><div class="room" id="711" > Room 711</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a710" href="Select.php?id=710"><div class="room" id="710" > Room 710</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a709" href="Select.php?id=709"><div class="room" id="709" > Room 709</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a708" href="Select.php?id=708"><div class="room" id="708" > Room 708</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a707" href="Select.php?id=707"><div class="room" id="707" > Room 707</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a706" href="Select.php?id=706"><div class="room" id="706" > Room 706</div></a>
      </td>
      <td >
        <a id="a205" style="display:block; height:100%;" href="Select.php?id=705"><div class="room" id="705" > Room 705</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a704" href="Select.php?id=704"><div class="room" id="704" > Room 704</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a703" href="Select.php?id=703"><div class="room" id="703" > Room 703</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a702" href="Select.php?id=702"><div class="room" id="702" > Room 702</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a701" href="Select.php?id=701"><div class="room" id="701" > Room 701</div></a>
      </td>
    </tr>
    <tr style="background-color: red;">
      <td class="hCoridor" colspan="17" ><center><label style="font-size: 80px;">Corridor</label></center></td>
    </tr>
</table>



<table >
  <!--Second Row of first wing, room 113-119-->
    <tr>
      <td  colspan="2">
        <div class="washroom" > Washroom</div>
      </td>
      <td rowspan="5">
        <div class="coridor"><label style="writing-mode:tb-rl; height: 60%;"> CORIDOR </label></div>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a713" href="Select.php?id=713"><div class="room" id="713" > Room 713</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a714" href="Select.php?id=714"><div class="room" id="714" > Room 714</div></a>
      </td>
      <td rowspan="5">
        <div class="coridor"><label style="writing-mode:tb-rl;"> CORIDOR </label></div>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a715" href="Select.php?id=715"><div class="room" id="715" > Room 715</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a716" href="Select.php?id=716"><div class="room" id="716" > Room 716</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a717" href="Select.php?id=717"><div class="room" id="717" > Room 717</div></a>
      </td>
      <td rowspan="5">
        <div class="coridor"><label style="writing-mode:tb-rl;"> CORIDOR </label></div>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a718" href="Select.php?id=718"><div class="room" id="718" > Room 718</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a719" href="Select.php?id=719"><div class="room" id="719" > Room 719</div></a>
      </td>
      <td rowspan="5">
        <div class="coridor"><label style="writing-mode:tb-rl;"> CORIDOR </label></div>
      </td>
      <td  colspan="2">
        <div class="washroom" > washroom</div>
      </td>
    </tr>

  
  <!--Third Row including room 120 & 123 & table tennis  & elevator-->
    <tr>
      <td >
        <div style="height: 120px; width: 40px;" > </div>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a723" href="Select.php?id=723"><div class="room" id="723" > Room 723</div></a>
      </td>
      
      <td  rowspan="3">
        <div class="nothing" > </div>
      </td>
      <td  rowspan="3">
        <div class="nothing"  > </div>
      </td>

      <!--Table tennis & elevators-->
      <td bgcolor="white" rowspan="4" colspan="3" class="white">
        <div style="float: left;">
          <div class="tableTennis" > Table Tennis Room</div>
          <br>
          <div class="elevator" > Elevator</div>
       </div>
       <div style="float: left;">
          <div style="height: 120px; width: 100px; " ></div>
        </div>
       <div style="float: left;">
          <div class="tableTennis" > Table Tennis Room</div>
          <br>
          <div class="elevator" > Elevator</div>
      </div>
      </td>
       
      <td  rowspan="3">
        <div class="nothing" > </div>
      </td>
      <td  rowspan="3">
        <div class="nothing" > </div>
      </td>
     
      <td>
        <a style="display:block; height:100%;" id="a720" href="Select.php?id=720"><div class="room" id="720" > Room 720</div></a>
      </td>
      <td style="border:none;">
        <div style="height: 120px; width: 40px;"> </div>
      </td>
    </tr>


<!--Forth row containing room 121 & 124 and tabble tennis and elevator-->
    <tr>
      <td >
        <div style="height: 120px; width: 40px;"> </div>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a724" href="Select.php?id=724"><div class="room" id="724" > Room 724</div></a>
      </td>
     
      <td >
        <a style="display:block; height:100%;" id="a721" href="Select.php?id=721"><div class="room" id="721" > Room 721</div></a>
      </td>
      <td style="border:none;">
        <div style="height: 120px; width: 40px;"> </div>
      </td>
    </tr>

<!--Forth row containing room 122 & 125 and tabble tennis and elevator-->
    <tr>
      <td >
        <div style="height: 120px; width: 40px;"> </div>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a725" href="Select.php?id=725"><div class="room" id="725" > Room 725</div></a>
      </td>
     
      <td >
        <a style="display:block; height:100%;" id="a722" href="Select.php?id=722"><div class="room" id="722" > Room 722</div></a>
      </td>
      <td style="border:none;">
        <div style="height: 120px; width: 40px;"> </div>
      </td>
    </tr>

<!--Fifth row containing room 126-129 and elevator-->
    <tr>
      <td  colspan="2">
        <div class="washroom" > Washroom</div>
      </td>
      
      <td >
        <a style="display:block; height:100%;" id="a726" href="Select.php?id=726"><div class="room" id="726" > Room 726</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a727" href="Select.php?id=727"><div class="room" id="727" > Room 727</div></a>
      </td>
      
      <td >
        <a style="display:block; height:100%;" id="a728" href="Select.php?id=728"><div class="room" id="728" > Room 728</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a7" href="Select.php?id=729"><div class="room" id="729" > Room 729</div></a>
      </td>
      
      <td  colspan="2">
        <div class="washroom" > washroom</div>
      </td>
    </tr>
  </table>


<!--Sixth and last row room 130-141-->
<table class="oddRow">
  <tr style="background-color: red;">
      <td class="hCoridor" colspan="17"><center><label style="font-size: 80px;">Corridor</label></center></td>
    </tr>
    <tr>
      <td >
        <a style="display:block; height:100%;" id="a730" href="Select.php?id=730"><div class="room" id="730" > Room 730</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a731" href="Select.php?id=731"><div class="room" id="731" > Room 731</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a732" href="Select.php?id=732"><div class="room" id="732" > Room 732</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a733" href="Select.php?id=733"><div class="room" id="733" > Room 733</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a734" href="Select.php?id=734"><div class="room" id="734" > Room 734</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a735" href="Select.php?id=735"><div class="room" id="735" > Room 735</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a736" href="Select.php?id=736"><div class="room" id="736" > Room 736</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a737" href="Select.php?id=737"><div class="room" id="737" > Room 737</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a738" href="Select.php?id=738"><div class="room" id="738" > Room 738</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a739" href="Select.php?id=739"><div class="room" id="739" > Room 739</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a740" href="Select.php?id=740"><div class="room" id="740" > Room 740</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a741" href="Select.php?id=741"><div class="room" id="741" > Room 741</div></a>
      </td>
    </tr>
</table>
</center>
  </body>
</html>