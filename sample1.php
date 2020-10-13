<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
  print('php');
  print('<br>');
  // これでも変更可能
  date_default_timezone_set('Asia/Tokyo');
  print('現在は'.date('G時i分s秒'));
  print('<br>');
  // 上と同じように表示できる(オブジェクト指向)
  $todey = new DateTime();
  print('現在は'.$todey->format('G時i分s秒'));
  print('<br>');
?>
<?php $sum = (500+300+200); ?>
合計金額は　<?php print($sum);?>円です
税込価格は　<?php print($sum*1.08);?>円です

3000円のものから,100円値引きした場合は
<?php print(round(100 / 3000 * 100, 0));?>%引きです
<!-- 
  floor 切り下げ -> 3.333の場合 // 3
  ceil  切り上げ -> 3.333の場合 // 4
  round 四捨五入(第二引数に数字を入れる/ 1なら少数第一位まで / 0なら整数)
-->
<?php 
// 0で揃える //d は数字を入れる　s は文字列
$date_1 = sprintf('%04d年 %02d月 %02d日 (%s)', 2020,1,27, "金");
print($date_1);
print('<br>');
// 半角で揃える
$date_2 = sprintf('%04d年 % 2d月 % 2d日 (%s)', 2020,1,27, "金");
print($date_2);
?>
</pre>
</main>
</body>
</html>