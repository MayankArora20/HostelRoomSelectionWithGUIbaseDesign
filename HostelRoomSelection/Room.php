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
       for($i=101;$i<142;$i++)
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
        <a style="display:block; height:100%;" id="a121"href="Select.php?id=112"><div class="room" id="112" > Room 112</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a111" href="Select.php?id=111"><div class="room" id="111" > Room 111</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a110" href="Select.php?id=110"><div class="room" id="110" > Room 110</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a109" href="Select.php?id=109"><div class="room" id="109" > Room 109</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a108" href="Select.php?id=108"><div class="room" id="108" > Room 108</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a107" href="Select.php?id=107"><div class="room" id="107" > Room 107</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a106" href="Select.php?id=106"><div class="room" id="106" > Room 106</div></a>
      </td>
      <td >
        <a id="a205" style="display:block; height:100%;" href="Select.php?id=105"><div class="room" id="105" > Room 105</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a104" href="Select.php?id=104"><div class="room" id="104" > Room 104</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a103" href="Select.php?id=103"><div class="room" id="103" > Room 103</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a102" href="Select.php?id=102"><div class="room" id="102" > Room 102</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a101" href="Select.php?id=101"><div class="room" id="101" > Room 101</div></a>
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
        <a style="display:block; height:100%;" id="a113" href="Select.php?id=113"><div class="room" id="113" > Room 113</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a114" href="Select.php?id=114"><div class="room" id="114" > Room 114</div></a>
      </td>
      <td rowspan="5">
        <div class="coridor"><label style="writing-mode:tb-rl;"> CORIDOR </label></div>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a115" href="Select.php?id=115"><div class="room" id="115" > Room 115</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a116" href="Select.php?id=116"><div class="room" id="116" > Room 116</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a117" href="Select.php?id=117"><div class="room" id="117" > Room 117</div></a>
      </td>
      <td rowspan="5">
        <div class="coridor"><label style="writing-mode:tb-rl;"> CORIDOR </label></div>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a118" href="Select.php?id=118"><div class="room" id="118" > Room 118</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a119" href="Select.php?id=119"><div class="room" id="119" > Room 119</div></a>
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
        <a style="display:block; height:100%;" id="a123" href="Select.php?id=123"><div class="room" id="123" > Room 123</div></a>
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
        <a style="display:block; height:100%;" id="a120" href="Select.php?id=120"><div class="room" id="120" > Room 120</div></a>
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
        <a style="display:block; height:100%;" id="a124" href="Select.php?id=124"><div class="room" id="124" > Room 124</div></a>
      </td>
     
      <td >
        <a style="display:block; height:100%;" id="a121" href="Select.php?id=121"><div class="room" id="121" > Room 121</div></a>
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
        <a style="display:block; height:100%;" id="a125" href="Select.php?id=125"><div class="room" id="125" > Room 125</div></a>
      </td>
     
      <td >
        <a style="display:block; height:100%;" id="a122" href="Select.php?id=122"><div class="room" id="122" > Room 122</div></a>
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
        <a style="display:block; height:100%;" id="a126" href="Select.php?id=126"><div class="room" id="126" > Room 126</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a127" href="Select.php?id=127"><div class="room" id="127" > Room 127</div></a>
      </td>
      
      <td >
        <a style="display:block; height:100%;" id="a128" href="Select.php?id=128"><div class="room" id="128" > Room 128</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a1" href="Select.php?id=129"><div class="room" id="129" > Room 129</div></a>
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
        <a style="display:block; height:100%;" id="a130" href="Select.php?id=130"><div class="room" id="130" > Room 130</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a131" href="Select.php?id=131"><div class="room" id="131" > Room 131</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a132" href="Select.php?id=132"><div class="room" id="132" > Room 132</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a133" href="Select.php?id=133"><div class="room" id="133" > Room 133</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a134" href="Select.php?id=134"><div class="room" id="134" > Room 134</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a135" href="Select.php?id=135"><div class="room" id="135" > Room 135</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a136" href="Select.php?id=136"><div class="room" id="136" > Room 136</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a137" href="Select.php?id=137"><div class="room" id="137" > Room 137</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a138" href="Select.php?id=138"><div class="room" id="138" > Room 138</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a139" href="Select.php?id=139"><div class="room" id="139" > Room 139</div></a>
      </td>
          <td >
        <div class="r1_gap" > </div>
      </td>
  
      <td >
        <a style="display:block; height:100%;" id="a140" href="Select.php?id=140"><div class="room" id="140" > Room 140</div></a>
      </td>
      <td >
        <a style="display:block; height:100%;" id="a141" href="Select.php?id=141"><div class="room" id="141" > Room 141</div></a>
      </td>
    </tr>
</table>
</center>
  </body>
</html>