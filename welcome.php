//PHPスクリプトの書き方①
<?php echo 'welcome'; ?>

//PHPスクリプトの書き方②
<?php
echo 'welcome';
?>

//表示させたい複数の文がある場合
<?php
 echo 'welcome';
 echo 'to';
 echo 'PHP';
?>

//echo = 「出力せよ」という命令
//出力したい文字列は""か''で囲む
//文末に;を使って文を区切る（付けないとエラーの原因になる）
//コメントやメモを残したい場合には//を使用する


//計算
<?php
 echo 2 + 5; //結果: 7
 echo 10 - 3; //結果: 7
 echo 3 * 5; //結果: 15
 echo 8 / 4; //結果: 2
 echo 6 % 5; //結果: 1
?>

//文字列と数値の違い
<?php
 echo 3 + 5; //結果: 8（数値）
 echo "3 + 5"; //結果: 3 + 5（文字列）
?>


//変数（頭に$をつけることによって定義する $変数名 = 値;）
<?php
 $name = 'Mark'; //右辺'Mark'を変数$nameに代入する
 echo $name; //結果: Mark
?>

<?php
 $sum = 5 + 3;
 echo $sum; //結果: 8
?>

//正方形の面積を計算
$length = 5;
$area = $length * $length;
echo $area; //結果: 25

//PHPでの変数名の付け方
$name //◎英単語を用いる（×数字開始はエラーの原因となる。△ローマ字や日本語は避ける）
$totalAmount //◎2語以上の場合は大文字で区切る


//変数の更新
$name = 'Mark';
echo $name //結果: Mark
$name = 'Tom'; //変数$nameの値を上書き
echo $name //結果: Tom


//変数に数字を足す
$x = 3;
$x = $x + 5; //変数$xに5を足し、$xにx + 5を代入し直す
echo $x; //結果: 8

//PHPでの計算式の省略した書き方
（基本形　→　省略形）
$x = $x + 5; →　$x += 5;
$x = $x - 5; →　$x -= 5;
$x = $x * 5; →　$x *= 5;
$x = $x / 5; →　$x /= 5;
$x = $x % 5; →　$x %= 5;

値が1の時だけ省略して書ける
$x += 1; → $x++;
$x -= 1; → $x--;

$x = 5;
$y = 5;
echo ++$x; //結果: 6（echoの前に+1される）
echo $y++; //結果: 5（echoの後に+1される）


//文字列の連結（.を用いる→文字列同士の連結、変数と文字列の連結、変数同士の連結が可能）
$language = 'PHP';
echo $language.'基礎'; //結果: PHP基礎

$stage = '基礎'
echo $language.$stage; //結果: PHP基礎

$name = '田中';
$name .= '太郎'; //（$name=$name.'太郎';と同じ意味）
echo $name; //結果: 田中太郎


//変数展開
（ダブルクォーテーションで文字列を囲み、中の変数を{}で囲んだ場合→{}内が変数展開される）
$name = '田中太郎';
echo "こんにちは、{$name}さん"; //結果: こんにちは、田中太郎さん（$nameが展開される）

（シングルクォーテーションで文字列を囲んだ場合→変数展開されない）
echo 'こんにちは、{$name}さん'; //結果: こんにちは、{$name}さん（{$name}がそのまま表示される）


//if文
$x = 10;
if ($x > 5) {               //条件式が成り立つ
 echo '$xは5より大きい';    //処理が実行される
}                           //結果: xは5より大きい

$x = 20;
if ($x > 40) {              //条件式が成り立たない
 echo '$xは40より大きい';   //処理が実行されない
}                           //結果: ※条件式が成り立たないため処理が実行されない


//比較演算子（他言語と共通 true or false）
大小を調べる
<     //右辺の方が大きい時true
<=    //右辺の方が大きいまたは等しい時true
>     //左辺の方が大きい時true
>=    //左辺の方が大きいまたは等しい時true

等しいか調べる
==    //右辺と左辺が等しい時true
!=    //等しくない時true

//ifと真偽値（trueの場合にif文の中身が実行される）
if (true) {
 echo '条件はtrueです';
 }                       //結果: 条件はtrueです

//else
$x = 10;
if ($x == 20) {
 echo '$xは20です';             //処理は実行されない
} else {
 echo '$xは20ではありません';   //処理が実行される
}                               //結果: $xは20ではありません

//elseif
$x = 10;
if ($x = 20) {
 echo '$xは20より大きい';       //falseなので実行されない
} elseif ($x >= 10) {
 echo '$xは20以下10以上';       //trueなので実行される
} else {
 echo '$xは10より小さい';       //すでに当てはまる条件があったため実行されない
}                               //結果: $xは20以下10以上

//複数の条件式を組み合わせる
$x = 10;
if ($x > 5 && $x < 20) {
 echo '$xは5より大きい、かつ20より小さい';
}
if ($x < 5 || $x > 30) {
 echo '$xは5より小さい、または20より大きい';
}                                               //結果: $xは5より大きい、かつ20より小さい

例
<?php
 $x = 1071;
 if ($x % 3 == 0 && $x % 7 == 0){
  echo 'xは3の倍数かつ7の倍数です。';
 } elseif ($x % 3 == 0){
  echo 'Xは3の倍数ですが7の倍数ではありません。';
 } elseif ($x % 7 == 0){
  echo 'Xは7の倍数ですが3の倍数ではありません。';
 } else {
  echo 'Xは7の倍数でも3の倍数でもありません。';
 }
 ?>


//条件の否定
$x = 10;
if (!($x == 20)) {
 echo '$xは20ではない';
}                              //結果: $xは20ではない


//switch文（if, elseifによる分岐が多く複雑な場合、switch文で書き換えるとシンプルで読みやすいコードにできる）
switch ($coin) {
 case 0:
  echo '表';
  break;            　　　　　 //caseブロックの最後にはbreak命令を指定する。（break命令がないと後ろに続くcaseブロックが続けて実行されてしまう）

 case 1:
  echo '裏';
  break;

 default:　　　　　　　　　　  //case0,1いずれもあてはまらない場合にはdefaultのブロックが実行される
  echo 'エラー';
  break;
}



//配列
※定義の仕方（インデックス番号0,1,2,...)
$names = array('Mark', 'Joshua', 'Sarah');

※配列の値の取り出し方
echo $names[0];                //結果: Mark
echo $names[1];                //結果: Joshua

※値の追加、上書き
$names = array('Mark', 'Joshua', 'Sarah');
$names[] = 'Dan';              //配列の末尾に値を追加
echo $names[3];                //結果: Dan
$names[1] = 'Fred';            //値の上書き（[1]を'Joshua' → 'Fred'へ）
echo $names[1];                //結果: Fred


//連想配列（インデックス番号ではなく、キーを指定する）
$配列名 = array('キー名' => '値1', ...); のようにキーと値をセットする
$user = array(
         'name'   => '太郎',
         'age'    => 15,
         'gender' => 'male'
        );

※連想配列・値の取り出し方
echo $user['name'];            //結果: 太郎

※連想配列・値の追加の仕方
$user['hobby'] = 'games';      //$user['追加するキー'] = '追加する値'（数字の場合は''を除く）;

例
<?php
 $scores = array('数学'=>70, '英語'=>90, '国語'=>80);
 $scores['国語'] += 5;
 echo $scores['国語'];         //結果: 85
?>


//繰り返し処理
echo 1;
echo 2;
echo 3;
.
.
.
echo 100;

※for文
for ($i = 1; $i <= 100; $i ++){       //変数の初期化（$i = 1）、ループの条件（$i <= 100）、変数の更新（$i++）
 echo $i;                             //繰り返す処理（echo $i;）
 echo '<br>';                         //改行
}

※while文
$i = 1;                               //変数の初期化（$i = 1;）
while ($i <= 100) {                   //ループの条件（$i <= 100）
 echo $i;                             //繰り返す処理（echo $i;）
 $i++;                                //変数の更新（$i++;）
}

例（1~100までの偶数のみを表示する）
<?php
 $i = 2;
 while ($i <= 100){
  if ($i % 2 == 0){
   echo $i;
   echo '<br>';
  }
  $i++;
 }
?>

※無限ループ
$i = 1;
while ($i <= 100){                    //条件式が常にtrueになるため、無限にループが続く
 echo $i;
}                                     //無限ループはコンピューターに極端な負担を与えてしまうため、ループ処理を記述する際は条件式がどこかでfalseになるように気を付けなければいけない

※break（break文は現在のループを強制的に中断する命令でfor, while, foreachなどの繰り返し文の中で利用でき、if文などの条件文と組み合わせて利用するのが一般的）
例
for ($i = 1; $i <= 10; $i++) {
 if ($i > 6) {
  break;                      //$iの値が7になった段階でfor文を終了
 }
 echo $i;
}                             //結果: 123456

※continue（continue文は現在の周だけをスキップし、ループそのものは継続して実行する。continue文もfor, while, foreachなどの繰り返し文の中で利用できる）
例
for ($i = 1; $i <= 10; $i++) {
 if ($i % 2 == 0) {
  continue;
 }
  echo $i;
}                            //結果: 13579（2の倍数以外）

※foreach