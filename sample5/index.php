<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>
</header>

<main>
<h2>予約フォーム</h2>

<form action="submit.php" method="post">
  <!-- forはidと同じにする -->
  <label for="name">お名前:</label>
  <input type="text" name="name" id="name" value="" maxlength="10" ><br>
  <label for="tel">電話番号:</label>
  <input type="text" name="tel" id="tel" value="<?php print($_COOKIE['save_data']);?>" maxlength="11" ><br>
  <label for="zipcode">郵便番号:</label>
  <input type="text" name="zipcode" id="zipcode" value="<?php print($_SESSION['session_data']);?>" maxlength="8" >
  <p>性別: 
    <input type="radio" name="gender" value="男性"> 男性
    <input type="radio" name="gender" value="女性"> 女性
  </p>
  <p>ご予約希望日: 
    <input type="checkbox" name="date[]" value="10月12日"> 10月12日
    <input type="checkbox" name="date[]" value="10月13日"> 10月13日
    <input type="checkbox" name="date[]" value="10月14日"> 10月14日
    <input type="checkbox" name="date[]" value="10月15日"> 10月15日
  </p>
  <input type="submit" value="送信する" >
</form>

</main>
</body>
</html>