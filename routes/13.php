<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
  function sum($a){
    $result = $a * 2;
    return $result;
  }
  echo sum(10)."\n";
  
//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
  function total($a,$b){
    $result = $a + $b;
    return $result;
  }
  echo total(3,2)."\n";
  
//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
  function x($arr){
    $result = 1;
    foreach($arr as $y){
      $result *= $y;
      
    }
    echo $result;
  }
  echo x(array(1,3,5,7,9));
  echo "\n";

//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
  function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
      if($max_number <  $a){
        $max_number =  $a;
        
      }
    }
    return $max_number;
  }
  echo max_array(array(1,2,3,4,5,));
  echo "\n";
  
/*5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
strip_tags*/
$str = "aaa<br>bbb<br><hr>";
echo $str;
echo strip_tags( $str )."\n";


//array_push
$fruits = ['apple', 'orange', 'melon'];
array_push($fruits, 'banana', 'pineapple');
print_r($fruits)."\n";

//array_merge
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$array3 = [7, 8, 9,10];
$array = array_merge($array1, $array2, $array3);
print_r($array);

//time, mktime
echo time()."\n";
echo  mktime()."\n";
//date
echo date('Y/m/d')."\n";
?>