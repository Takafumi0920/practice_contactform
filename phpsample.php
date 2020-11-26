<!DOCTYPE>

<html lang="ja">
<head>
<title>phpsample</title>
</head>
<body>

<?php
// まずは合計金額を求めます
echo '<p>合計金額：¥'.(7980 + 2980 + 4400).'</p>';

// 次に税込金額を求めます
echo '<p>税込金額：¥'.(7980 + 2980 + 4400) * 1.08.'</p>';

// 最後に配送料（¥500）を含めた最終金額を求めます
echo '<p>配送料（¥500）を含めた金額：¥'.((7980 + 2980 + 4400) * 1.08 + 500).'</p>';
?>

<?php
// 商品の合計金額を計算
$sum = 7980 + 2980 + 4400;

// まずは合計金額を求めます
echo '<p>合計金額：¥' . $sum . '</p>';

// 次に税込金額を求めます
echo '<p>税込金額：¥' . $sum * 1.08 . '</p>';

// 最後に配送料（¥500）を含めた最終金額を求めます
echo '<p>配送料（¥500）を含めた金額：¥' . ($sum * 1.08 +  500) . '</p>';
?>

<?php
// 消費税
define( "TAX", 1.08);

// 配送料
define( "TRANSPORT", 500);

// 商品の合計金額を計算
$sum = 7980 + 2980 + 4400;

// まずは合計金額を求めます
echo '<p>合計金額：¥' . $sum . '</p>';

// 次に税込金額を求めます
echo '<p>税込金額：¥' . $sum * TAX . '</p>';

// 最後に配送料（¥500）を含めた最終金額を求めます
echo '<p>配送料（¥500）を含めた金額：¥' . ($sum * TAX + TRANSPORT) . '</p>';
?>

<?php
$a = 10;
$b = 8;

if( $a < $b ) {
    echo '$bの値の方が大きい';
} else {
    echo '$aの値の方が大きい';
}


$item = array();
$item[0] = array(
	"name" => "ジーンズ",
	"price" => 7980,
	"size" => "M"
);

$item[1] = array(
	"name" => "Tシャツ",
	"price" => 2980,
	"size" => "M"
);

$item[2] = array(
	"name" => "パーカー",
	"price" => 4400,
	"size" => "M"
);

foreach( $item as $key => $value ) {
	//echo "<p>" . ($key+1) . "個目の商品<br>";
	echo $value['name'] . "（サイズ：" . $value['size'] . "） " . $value['price'] . "円</p>";
}
?>

<?php
//外部ファイルの読み込み
require_once('customize.php');

$num = add_numbers( 5,10 );
echo $num;
?>

</body>
</html>