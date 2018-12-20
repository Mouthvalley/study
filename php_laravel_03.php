<?php
if ($name = "Taniguchi Yamato"){
  echo "私は あなたの名前 です";
} else {
  echo "あなたの名前ではありません";
}

for ($i = 1 ; $i <= 10000 ; $i++) {
  $total += $i;
}
echo $total

$fruits = array("Apple", "Banana", "Orange", "Pain", "Grape");
foreach ($fruits as $fruits) {
  echo "" . $fruits;
  echo "\n";
}

$start =1;
$end =100;
for($i =$start; $i <=$end; $i++){
  if($i%5 == 0){
    echo $i . "\n";
  }
}
