<?php
//課題１
function sum($i){
  $result = $i * 2;
  echo $result;
}
sum(5);
echo"\n";
//課題２
function f($a,$b){
  $result = $a + $b;
  echo $result;
}
f(2,3);
echo"\n";
//課題３
function multiply($arr){
  $result = 1;
  foreach ($arr as $value){
    $result *= $value;
  }
  return $result;
}
$c = array(1, 3, 5, 7, 9);
echo multiply($c);
echo "\n";
//課題４
function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
  }
  return $max_number;
}
$a = array(1, 3, 5, 7, 9);
echo $max_number;
echo "\n";
