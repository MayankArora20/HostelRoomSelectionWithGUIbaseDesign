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
       for($i=601;$i<642;$i++)
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
        <a style="display: block; height: 100%;" id="a621" href="Select.php?id=612"><div class="room" id="612" > Room 612</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a611" href="Select.php?id=611"><div class="room" id="611" > Room 611</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a610" href="Select.php?id=610"><div class="room" id="610" > Room 610</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a609" href="Select.php?id=609"><div class="room" id="609" > Room 609</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a608" href="Select.php?id=608"><div class="room" id="608" > Room 608</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a607" href="Select.php?id=607"><div class="room" id="607" > Room 607</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a606" href="Select.php?id=606"><div class="room" id="606" > Room 606</div></a>
      </td>
      <td >
        <a id="a205" style="display:block; height:100%;" href="Select.php?id=605"><div class="room" id="605" > Room 605</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a604" href="Select.php?id=604"><div class="room" id="604" > Room 604</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a603" href="Select.php?id=603"><div class="room" id="603" > Room 603</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a602" href="Select.php?id=602"><div class="room" id="602" > Room 602</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a601" href="Select.php?id=601"><div class="room" id="601" > Room 601</div></a>
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
        <a style="display:block; height:100%;" id="a613" href="Select.php?id=613"><div class="room" id="613" > Room 613</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a614" href="Select.php?id=614"><div class="room" id="614" > Room 614</div></a>
      </td>
      <td rowspan="5">
        <div class="coridor"><label style="writing-mode:tb-rl;"> CORIDOR </label></div>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a615" href="Select.php?id=615"><div class="room" id="615" > Room 615</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a616" href="Select.php?id=616"><div class="room" id="616" > Room 616</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a617" href="Select.php?id=617"><div class="room" id="617" > Room 617</div></a>
      </td>
      <td rowspan="5">
        <div class="coridor"><label style="writing-mode:tb-rl;"> CORIDOR </label></div>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a618" href="Select.php?id=618"><div class="room" id="618" > Room 618</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a619" href="Select.php?id=619"><div class="room" id="619" > Room 619</div></a>
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
        <a style="display:block; height:100%;" id="a623" href="Select.php?id=623"><div class="room" id="623" > Room 623</div></a>
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
        <a style="display:block; height:100%;" id="a620" href="Select.php?id=620"><div class="room" id="620" > Room 620</div></a>
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
        <a style="display:block; height:100%;" id="a624" href="Select.php?id=624"><div class="room" id="624" > Room 624</div></a>
      </td>
     
      <td >
        <a style="display:block; height:100%;" id="a621" href="Select.php?id=621"><div class="room" id="621" > Room 621</div></a>
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
        <a style="display:block; height:100%;" id="a625" href="Select.php?id=625"><div class="room" id="625" > Room 625</div></a>
      </td>
     
      <td >
        <a style="display:block; height:100%;" id="a622" href="Select.php?id=622"><div class="room" id="622" > Room 622</div></a>
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
        <a style="display:block; height:100%;" id="a626" href="Select.php?id=626"><div class="room" id="626" > Room 626</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a627" href="Select.php?id=627"><div class="room" id="627" > Room 627</div></a>
      </td>
      
      <td >
        <a style="display:block; height:100%;" id="a628" href="Select.php?id=628"><div class="room" id="628" > Room 628</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a6" href="Select.php?id=629"><div class="room" id="629" > Room 629</div></a>
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
        <a style="display:block; height:100%;" id="a630" href="Select.php?id=630"><div class="room" id="630" > Room 630</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a631" href="Select.php?id=631"><div class="room" id="631" > Room 631</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a632" href="Select.php?id=632"><div class="room" id="632" > Room 632</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a633" href="Select.php?id=633"><div class="room" id="633" > Room 633</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a634" href="Select.php?id=634"><div class="room" id="634" > Room 634</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a635" href="Select.php?id=635"><div class="room" id="635" > Room 635</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a636" href="Select.php?id=636"><div class="room" id="636" > Room 636</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a637" href="Select.php?id=637"><div class="room" id="637" > Room 637</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a638" href="Select.php?id=638"><div class="room" id="638" > Room 638</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a639" href="Select.php?id=639"><div class="room" id="639" > Room 639</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a640" href="Select.php?id=640"><div class="room" id="640" > Room 640</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a641" href="Select.php?id=641"><div class="room" id="641" > Room 641</div></a>
      </td>
    </tr>
</table>
</center>
  </body>
</html>