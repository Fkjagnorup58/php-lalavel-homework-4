//1.引数に数値を指定して実行すると、
//数値を2倍にして返す関数を作成してください

 function printSum($num){
    return $num * 2;
}



//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を
//返す関数を作成してください。

function getSum($a,$b){
    return $a + $b;
}



//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) 
//を渡すとその要素をすべてかけた結果を返す関数を作成してください。

function printSum($arr){
    $a = 0;
    for ($i = 1; $i < $arr; $i++) {
        if($i == 0){
            $a += $arr;
        }else{
            $a *= $arr;
        }
    }
    return $a;



   
   
            
//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array 
//という関数を実装しようとしています。途中の部分を完成させてください。

 function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
 }

 return $max_number;
 }

?>



5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
Strip  tags	文字列からHTMLおよびPHPタグを取り除く
array_push	一つ以上の要素を配列の最後に追加する
array_merge	一つまたは複数の配列をマージする
Time	現在のUNIXtタイムスタンプを返す
Mtkime	日付をUNIXのタイムスタンプとして取得する
Data	時刻を書式化する
