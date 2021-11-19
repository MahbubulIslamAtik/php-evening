<?php
/*
  function processCircle($r){

        return 3.145*$r*$r;

  }

  //Pass by Value
  echo processCircle(5);

  $r=6;
  echo processCircle($r);

*/

  function processRact(&$p,$w,$h){   
    $p=2*($w+$h);
    return $w*$h;
  }

  $c=3;
  $d-3;
  $area=processRact($a,$c,$d);
  echo $a."<br>";
  echo $area;
echo "<br>";

//Anonymous function

$add=function($a,$b){  
   return $a+$b;
};

echo $add(3,4);


?>