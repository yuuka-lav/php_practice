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
  // print(date('n/j(D)'));
  // print '<br>';
  // 次の日を所得
  // print(date('n/j(D)', time() + 60 * 60 * 24));
  // print '<br>';
  // print(date('n/j(D)', strtotime('+1day')));
?>
<?php
$week_name = ['火', '水', '木', '金', '土','日', '月'];
// print($week_name[date('w')]);
for ($i=1; $i <= 365; $i++){
  $date = strtotime("+ $i day");
  $week = $week_name[date($i%7)];
  print(date("n/j($week)", $date));
  print '<br>';
}
?>
</pre>
</main>
</body>    
</html>