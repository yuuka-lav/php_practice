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
<!-- htmlspecialcharsと書くことでinputにhtmlを記述しても無効になるように設定できる -->
<!-- htmlspecialcharsは引数2つで第一引数(何を)第二引数に(どのように)と記述 -->
<h2>Practice</h2>
<pre>
お名前: <?php print(htmlspecialchars($_POST['name'], ENT_QUOTES));?><br>
電話番号: <?php  $tel = $_POST['tel'];
                $tel = mb_convert_kana($tel, 'n', 'UTF-8'); //全角を半角にする
          if (is_numeric($tel)){  //数字だったら表示
            print(htmlspecialchars($tel, ENT_QUOTES));
            setcookie('save_data', $tel, time() + 60 * 60 * 24 * 2);
          }
      ?><br>
郵便番号: 〒<?php  $zipcode = $_POST['zipcode'];
                $zipcode = mb_convert_kana($zipcode, 'a', 'UTF-8'); //全角を半角にする
          if (preg_match("/\A\d{3}\d{4}\z/", $zipcode)){ 
            print(htmlspecialchars($zipcode, ENT_QUOTES));
            session_start();
            $_SESSION['session_data'] = $zipcode;
          }elseif(preg_match("/\A\d{3}[-]\d{4}\z/", $zipcode)){
            print(htmlspecialchars($zipcode, ENT_QUOTES));
            session_start();
            $_SESSION['session_data'] = $zipcode;
          }
      ?><br>
性別: <?php print(htmlspecialchars($_POST['gender'], ENT_QUOTES));?><br>
ご予約希望日: <?php foreach($_POST['date'] as $date) {
              print(htmlspecialchars($date, ENT_QUOTES) . " " );
            }
            ?>

</pre>

<!-- $_REQUESTはmethodがpostでもgetでも対応できる -->
</main>
</body>
</html>