<?php
# 別ファイルを読んで、その内容を$dataに代入する
$filepath = 'json/data.json';
$data = file_get_contents($filepath);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Fetch編集01</title>
  <script src="https://get.mavo.io/mavo.js"></script>
  <link rel="stylesheet" href="https://get.mavo.io/mavo.css" />
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="wrap">
    <aside class="aside">
      <section class="spec">
        <p class="title">このページの機能要件</p>
        <ol>
          <li>mavo.jsが使える</li>
          <li>"jaon/data.json"ファイルを読み込んで初期値を設定する</li>
          <li>mavo.jsの機能を使って設定値を編集する</li>
          <li>「保存」ボタンを押すと編集した設定値を"json/data.json"に上書き保存する</li>
        </ol>
      </section>
    </aside>
    <main class="main">
      <div class="container">
        <button class="btn" id="btn">保存</button>
      </div>
      <!-- 変数$dataをセット -->
      <pre id="data"><?= $data; ?></pre>
      <div mv-app="elementStorage" mv-storage="#data">
        <p>店 舗 名：<span property="companyName">会社名</span></p>
        <p>電話番号：<span property="phoneNumber">電話番号</span></p>
      </div>
    </main>
  </div>
  <script src="js/main.js"></script>
</body>

</html>