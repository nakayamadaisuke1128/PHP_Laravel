<?php
$name = "nakayama";
if ($name = "nakayama") {
  echo "私は".$name."です";
} else {
  echo $name."ではありません";
}


$total = 0;
for ($i = 0; $i <= 10000; $i ++){
  $total += $i;
}
echo $total;

$fruits =array("apple"."orange"."lemon"."banana"."peach");
foreach ($fruits as $fruits){
  echo "好きなフルーツは".$fruits."です";
}


/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}