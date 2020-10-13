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
  $i = 1; //初期化処理
  while( $i <= 10 ){ //繰り返す条件
    print($i . "\n"); //繰り返したいコード
    $i++; //更新処理
  }
?>
<!-- 比較演算子 <= , >= を使用する -->
<?php
  for ($i = 1; $i <= 10; $i++){
    print($i . "\n");
  }

  $x = 0; // 0はfalse それ以外の数字はtrueとなる
  if ($x) {
    print("0ではありません");
  }else {
    print("0です");
  }
?>
</pre>
</main>
</body>    
</html>