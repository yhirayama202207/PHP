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