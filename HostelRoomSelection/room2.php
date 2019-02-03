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
       for($i=201;$i<242;$i++)
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
        <a style="display:block; height:100%;" id="a221"href="Select.php?id=212"><div class="room" id="212" > Room 212</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a211" href="Select.php?id=211"><div class="room" id="211" > Room 211</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a210" href="Select.php?id=210"><div class="room" id="210" > Room 210</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a209" href="Select.php?id=209"><div class="room" id="209" > Room 209</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a208" href="Select.php?id=208"><div class="room" id="208" > Room 208</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a207" href="Select.php?id=207"><div class="room" id="207" > Room 207</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a206" href="Select.php?id=206"><div class="room" id="206" > Room 206</div></a>
      </td>
      <td >
        <a id="a205" style="display:block; height:100%;" href="Select.php?id=205"><div class="room" id="205" > Room 205</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a204" href="Select.php?id=204"><div class="room" id="204" > Room 204</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a203" href="Select.php?id=203"><div class="room" id="203" > Room 203</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a202" href="Select.php?id=202"><div class="room" id="202" > Room 202</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a201" href="Select.php?id=201"><div class="room" id="201" > Room 201</div></a>
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
        <a style="display:block; height:100%;" id="a213" href="Select.php?id=213"><div class="room" id="213" > Room 213</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a214" href="Select.php?id=214"><div class="room" id="214" > Room 214</div></a>
      </td>
      <td rowspan="5">
        <div class="coridor"><label style="writing-mode:tb-rl;"> CORIDOR </label></div>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a215" href="Select.php?id=215"><div class="room" id="215" > Room 215</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a216" href="Select.php?id=216"><div class="room" id="216" > Room 216</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a217" href="Select.php?id=217"><div class="room" id="217" > Room 217</div></a>
      </td>
      <td rowspan="5">
        <div class="coridor"><label style="writing-mode:tb-rl;"> CORIDOR </label></div>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a218" href="Select.php?id=218"><div class="room" id="218" > Room 218</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a219" href="Select.php?id=219"><div class="room" id="219" > Room 219</div></a>
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
        <a style="display:block; height:100%;" id="a223" href="Select.php?id=223"><div class="room" id="223" > Room 223</div></a>
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
        <a style="display:block; height:100%;" id="a220" href="Select.php?id=220"><div class="room" id="220" > Room 220</div></a>
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
        <a style="display:block; height:100%;" id="a224" href="Select.php?id=224"><div class="room" id="224" > Room 224</div></a>
      </td>
     
      <td >
        <a style="display:block; height:100%;" id="a221" href="Select.php?id=221"><div class="room" id="221" > Room 221</div></a>
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
        <a style="display:block; height:100%;" id="a225" href="Select.php?id=225"><div class="room" id="225" > Room 225</div></a>
      </td>
     
      <td >
        <a style="display:block; height:100%;" id="a222" href="Select.php?id=222"><div class="room" id="222" > Room 222</div></a>
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
        <a style="display:block; height:100%;" id="a226" href="Select.php?id=226"><div class="room" id="226" > Room 226</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a227" href="Select.php?id=227"><div class="room" id="227" > Room 227</div></a>
      </td>
      
      <td >
        <a style="display:block; height:100%;" id="a228" href="Select.php?id=228"><div class="room" id="228" > Room 228</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a2" href="Select.php?id=229"><div class="room" id="229" > Room 229</div></a>
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
        <a style="display:block; height:100%;" id="a230" href="Select.php?id=230"><div class="room" id="230" > Room 230</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a231" href="Select.php?id=231"><div class="room" id="231" > Room 231</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a232" href="Select.php?id=232"><div class="room" id="232" > Room 232</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a233" href="Select.php?id=233"><div class="room" id="233" > Room 233</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a234" href="Select.php?id=234"><div class="room" id="234" > Room 234</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a235" href="Select.php?id=235"><div class="room" id="235" > Room 235</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a236" href="Select.php?id=236"><div class="room" id="236" > Room 236</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a237" href="Select.php?id=237"><div class="room" id="237" > Room 237</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a238" href="Select.php?id=238"><div class="room" id="238" > Room 238</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a239" href="Select.php?id=239"><div class="room" id="239" > Room 239</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a240" href="Select.php?id=240"><div class="room" id="240" > Room 240</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a241" href="Select.php?id=241"><div class="room" id="241" > Room 241</div></a>
      </td>
    </tr>
</table>
</center>
  </body>
</html>