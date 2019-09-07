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
       for($i=301;$i<342;$i++)
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
        <a style="display:block; height:100%;" id="a321" href="Select.php?id=312"><div class="room" id="312" > Room 312</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a311" href="Select.php?id=311"><div class="room" id="311" > Room 311</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a310" href="Select.php?id=310"><div class="room" id="310" > Room 310</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a309" href="Select.php?id=309"><div class="room" id="309" > Room 309</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a308" href="Select.php?id=308"><div class="room" id="308" > Room 308</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a307" href="Select.php?id=307"><div class="room" id="307" > Room 307</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a306" href="Select.php?id=306"><div class="room" id="306" > Room 306</div></a>
      </td>
      <td >
        <a id="a205" style="display:block; height:100%;" href="Select.php?id=305"><div class="room" id="305" > Room 305</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a304" href="Select.php?id=304"><div class="room" id="304" > Room 304</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a303" href="Select.php?id=303"><div class="room" id="303" > Room 303</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a302" href="Select.php?id=302"><div class="room" id="302" > Room 302</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a301" href="Select.php?id=301"><div class="room" id="301" > Room 301</div></a>
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
        <a style="display:block; height:100%;" id="a313" href="Select.php?id=313"><div class="room" id="313" > Room 313</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a314" href="Select.php?id=314"><div class="room" id="314" > Room 314</div></a>
      </td>
      <td rowspan="5">
        <div class="coridor"><label style="writing-mode:tb-rl;"> CORIDOR </label></div>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a315" href="Select.php?id=315"><div class="room" id="315" > Room 315</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a316" href="Select.php?id=316"><div class="room" id="316" > Room 316</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a317" href="Select.php?id=317"><div class="room" id="317" > Room 317</div></a>
      </td>
      <td rowspan="5">
        <div class="coridor"><label style="writing-mode:tb-rl;"> CORIDOR </label></div>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a318" href="Select.php?id=318"><div class="room" id="318" > Room 318</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a319" href="Select.php?id=319"><div class="room" id="319" > Room 319</div></a>
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
        <a style="display:block; height:100%;" id="a323" href="Select.php?id=323"><div class="room" id="323" > Room 323</div></a>
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
        <a style="display:block; height:100%;" id="a320" href="Select.php?id=320"><div class="room" id="320" > Room 320</div></a>
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
        <a style="display:block; height:100%;" id="a324" href="Select.php?id=324"><div class="room" id="324" > Room 324</div></a>
      </td>
     
      <td >
        <a style="display:block; height:100%;" id="a321" href="Select.php?id=321"><div class="room" id="321" > Room 321</div></a>
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
        <a style="display:block; height:100%;" id="a325" href="Select.php?id=325"><div class="room" id="325" > Room 325</div></a>
      </td>
     
      <td >
        <a style="display:block; height:100%;" id="a322" href="Select.php?id=322"><div class="room" id="322" > Room 322</div></a>
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
        <a style="display:block; height:100%;" id="a326" href="Select.php?id=326"><div class="room" id="326" > Room 326</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a327" href="Select.php?id=327"><div class="room" id="327" > Room 327</div></a>
      </td>
      
      <td >
        <a style="display:block; height:100%;" id="a328" href="Select.php?id=328"><div class="room" id="328" > Room 328</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a3" href="Select.php?id=329"><div class="room" id="329" > Room 329</div></a>
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
        <a style="display:block; height:100%;" id="a330" href="Select.php?id=330"><div class="room" id="330" > Room 330</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a331" href="Select.php?id=331"><div class="room" id="331" > Room 331</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a332" href="Select.php?id=332"><div class="room" id="332" > Room 332</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a333" href="Select.php?id=333"><div class="room" id="333" > Room 333</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a334" href="Select.php?id=334"><div class="room" id="334" > Room 334</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a335" href="Select.php?id=335"><div class="room" id="335" > Room 335</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a336" href="Select.php?id=336"><div class="room" id="336" > Room 336</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a337" href="Select.php?id=337"><div class="room" id="337" > Room 337</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a338" href="Select.php?id=338"><div class="room" id="338" > Room 338</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a339" href="Select.php?id=339"><div class="room" id="339" > Room 339</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a340" href="Select.php?id=340"><div class="room" id="340" > Room 340</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a341" href="Select.php?id=341"><div class="room" id="341" > Room 341</div></a>
      </td>
    </tr>
</table>
</center>
  </body>
</html>