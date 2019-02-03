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
       for($i=401;$i<442;$i++)
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
        <a style="display:block; height:100%;" id="a421"href="Select.php?id=412"><div class="room" id="412" > Room 412</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a411" href="Select.php?id=411"><div class="room" id="411" > Room 411</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a410" href="Select.php?id=410"><div class="room" id="410" > Room 410</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a409" href="Select.php?id=409"><div class="room" id="409" > Room 409</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a408" href="Select.php?id=408"><div class="room" id="408" > Room 408</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a407" href="Select.php?id=407"><div class="room" id="407" > Room 407</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a406" href="Select.php?id=406"><div class="room" id="406" > Room 406</div></a>
      </td>
      <td >
        <a id="a205" style="display:block; height:100%;" href="Select.php?id=405"><div class="room" id="405" > Room 405</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a404" href="Select.php?id=404"><div class="room" id="404" > Room 404</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a403" href="Select.php?id=403"><div class="room" id="403" > Room 403</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a402" href="Select.php?id=402"><div class="room" id="402" > Room 402</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a401" href="Select.php?id=401"><div class="room" id="401" > Room 401</div></a>
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
        <a style="display:block; height:100%;" id="a413" href="Select.php?id=413"><div class="room" id="413" > Room 413</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a414" href="Select.php?id=414"><div class="room" id="414" > Room 414</div></a>
      </td>
      <td rowspan="5">
        <div class="coridor"><label style="writing-mode:tb-rl;"> CORIDOR </label></div>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a415" href="Select.php?id=415"><div class="room" id="415" > Room 415</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a416" href="Select.php?id=416"><div class="room" id="416" > Room 416</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a417" href="Select.php?id=417"><div class="room" id="417" > Room 417</div></a>
      </td>
      <td rowspan="5">
        <div class="coridor"><label style="writing-mode:tb-rl;"> CORIDOR </label></div>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a418" href="Select.php?id=418"><div class="room" id="418" > Room 418</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a419" href="Select.php?id=419"><div class="room" id="419" > Room 419</div></a>
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
        <a style="display:block; height:100%;" id="a423" href="Select.php?id=423"><div class="room" id="423" > Room 423</div></a>
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
        <a style="display:block; height:100%;" id="a420" href="Select.php?id=420"><div class="room" id="420" > Room 420</div></a>
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
        <a style="display:block; height:100%;" id="a424" href="Select.php?id=424"><div class="room" id="424" > Room 424</div></a>
      </td>
     
      <td >
        <a style="display:block; height:100%;" id="a421" href="Select.php?id=421"><div class="room" id="421" > Room 421</div></a>
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
        <a style="display:block; height:100%;" id="a425" href="Select.php?id=425"><div class="room" id="425" > Room 425</div></a>
      </td>
     
      <td >
        <a style="display:block; height:100%;" id="a422" href="Select.php?id=422"><div class="room" id="422" > Room 422</div></a>
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
        <a style="display:block; height:100%;" id="a426" href="Select.php?id=426"><div class="room" id="426" > Room 426</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a427" href="Select.php?id=427"><div class="room" id="427" > Room 427</div></a>
      </td>
      
      <td >
        <a style="display:block; height:100%;" id="a428" href="Select.php?id=428"><div class="room" id="428" > Room 428</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a4" href="Select.php?id=429"><div class="room" id="429" > Room 429</div></a>
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
        <a style="display:block; height:100%;" id="a430" href="Select.php?id=430"><div class="room" id="430" > Room 430</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a431" href="Select.php?id=431"><div class="room" id="431" > Room 431</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a432" href="Select.php?id=432"><div class="room" id="432" > Room 432</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a433" href="Select.php?id=433"><div class="room" id="433" > Room 433</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a434" href="Select.php?id=434"><div class="room" id="434" > Room 434</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a435" href="Select.php?id=435"><div class="room" id="435" > Room 435</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a436" href="Select.php?id=436"><div class="room" id="436" > Room 436</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a437" href="Select.php?id=437"><div class="room" id="437" > Room 437</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a438" href="Select.php?id=438"><div class="room" id="438" > Room 438</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a439" href="Select.php?id=439"><div class="room" id="439" > Room 439</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a440" href="Select.php?id=440"><div class="room" id="440" > Room 440</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a441" href="Select.php?id=441"><div class="room" id="441" > Room 441</div></a>
      </td>
    </tr>
</table>
</center>
  </body>
</html>