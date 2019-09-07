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
       for($i=501;$i<542;$i++)
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
        <a style="display:block; height:100%;" id="a521" href="Select.php?id=512"><div class="room" id="512" > Room 512</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a511" href="Select.php?id=511"><div class="room" id="511" > Room 511</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a510" href="Select.php?id=510"><div class="room" id="510" > Room 510</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a509" href="Select.php?id=509"><div class="room" id="509" > Room 509</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a508" href="Select.php?id=508"><div class="room" id="508" > Room 508</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a507" href="Select.php?id=507"><div class="room" id="507" > Room 507</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a506" href="Select.php?id=506"><div class="room" id="506" > Room 506</div></a>
      </td>
      <td >
        <a id="a205" style="display:block; height:100%;" href="Select.php?id=505"><div class="room" id="505" > Room 505</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a504" href="Select.php?id=504"><div class="room" id="504" > Room 504</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a503" href="Select.php?id=503"><div class="room" id="503" > Room 503</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a502" href="Select.php?id=502"><div class="room" id="502" > Room 502</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a501" href="Select.php?id=501"><div class="room" id="501" > Room 501</div></a>
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
        <a style="display:block; height:100%;" id="a513" href="Select.php?id=513"><div class="room" id="513" > Room 513</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a514" href="Select.php?id=514"><div class="room" id="514" > Room 514</div></a>
      </td>
      <td rowspan="5">
        <div class="coridor"><label style="writing-mode:tb-rl;"> CORIDOR </label></div>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a515" href="Select.php?id=515"><div class="room" id="515" > Room 515</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a516" href="Select.php?id=516"><div class="room" id="516" > Room 516</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a517" href="Select.php?id=517"><div class="room" id="517" > Room 517</div></a>
      </td>
      <td rowspan="5">
        <div class="coridor"><label style="writing-mode:tb-rl;"> CORIDOR </label></div>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a518" href="Select.php?id=518"><div class="room" id="518" > Room 518</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a519" href="Select.php?id=519"><div class="room" id="519" > Room 519</div></a>
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
        <a style="display:block; height:100%;" id="a523" href="Select.php?id=523"><div class="room" id="523" > Room 523</div></a>
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
        <a style="display:block; height:100%;" id="a520" href="Select.php?id=520"><div class="room" id="520" > Room 520</div></a>
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
        <a style="display:block; height:100%;" id="a524" href="Select.php?id=524"><div class="room" id="524" > Room 524</div></a>
      </td>
     
      <td >
        <a style="display:block; height:100%;" id="a521" href="Select.php?id=521"><div class="room" id="521" > Room 521</div></a>
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
        <a style="display:block; height:100%;" id="a525" href="Select.php?id=525"><div class="room" id="525" > Room 525</div></a>
      </td>
     
      <td >
        <a style="display:block; height:100%;" id="a522" href="Select.php?id=522"><div class="room" id="522" > Room 522</div></a>
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
        <a style="display:block; height:100%;" id="a526" href="Select.php?id=526"><div class="room" id="526" > Room 526</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a527" href="Select.php?id=527"><div class="room" id="527" > Room 527</div></a>
      </td>
      
      <td >
        <a style="display:block; height:100%;" id="a528" href="Select.php?id=528"><div class="room" id="528" > Room 528</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a5" href="Select.php?id=529"><div class="room" id="529" > Room 529</div></a>
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
        <a style="display:block; height:100%;" id="a530" href="Select.php?id=530"><div class="room" id="530" > Room 530</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a531" href="Select.php?id=531"><div class="room" id="531" > Room 531</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a532" href="Select.php?id=532"><div class="room" id="532" > Room 532</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a533" href="Select.php?id=533"><div class="room" id="533" > Room 533</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a534" href="Select.php?id=534"><div class="room" id="534" > Room 534</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a535" href="Select.php?id=535"><div class="room" id="535" > Room 535</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a536" href="Select.php?id=536"><div class="room" id="536" > Room 536</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a537" href="Select.php?id=537"><div class="room" id="537" > Room 537</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a538" href="Select.php?id=538"><div class="room" id="538" > Room 538</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a539" href="Select.php?id=539"><div class="room" id="539" > Room 539</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a540" href="Select.php?id=540"><div class="room" id="540" > Room 540</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a541" href="Select.php?id=541"><div class="room" id="541" > Room 541</div></a>
      </td>
    </tr>
</table>
</center>
  </body>
</html>