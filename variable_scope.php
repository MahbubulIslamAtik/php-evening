<?php
/*
 $a=2;

 function test(){
  global $a;
  $a=6;
  return $a;
 }

 echo test();
 echo $a;

*/

 function test2(){
     static $i=0;
     $i++;
     echo $i;
 }

 test2();//1
 test2();//2
 test2();//3

?>