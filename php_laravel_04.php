<?php
//課題１ 引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function sum($i){
  $result = $i * 2;
  echo $result;
}
sum(5);
echo"\n";
//課題２ $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function f($a,$b){
  $result = $a + $b;
  echo $result;
}
f(2,3);
echo"\n";
//課題３ $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
function multiply($arr){
  $result = 1;
  foreach ($arr as $value){
    $result *= $value;
  }
  return $result;
}
$c = [1, 3, 5, 7, 9];
echo multiply($c);
echo "\n";
//課題４ 次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
    if($a > $max_number);
    $max_number = $a; //!!重要!! [再代入] 左辺と右辺の書く順番に注意
  }
  return $max_number;
}
$a = array(1, 3, 5, 7, 9);
echo max_array($a);
echo "\n";
//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
//strip_tags
$html ='<h1>おはようございます</h1>';
echo strip_tags($html);
echo "\n";
//array_push
$country = array("japan", "USA");
array_push($country, "Aunstralia", "Chaina");
print_r($country);
echo "\n";
//array_merge
//あまり良く理解出来ませんでした
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "square", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo "\n";
//time, mktime
$today = time() + (7 * 24 * 60 * 60);
echo 'Now:'. date('Y-m-d'). "\n";
echo 'Next Week:'. date('Y-m-d', $today). "\n";
echo "\n";
//date
date_default_timezone_set('UTC');
echo date('l js \of F Y h:i:s A');
echo "\n";
