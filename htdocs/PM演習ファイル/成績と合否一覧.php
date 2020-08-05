<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <link rel='stylesheet' href='style.css' />
    <title>オンライン教習プログラム</title>
  </head>

  <body>
  <br>
  <table border="1">
  <h1><center>成績と合否一覧</center></h1><br>
  <tr>
    <th>教習生ID</th>
    <th>試験の種類</th>
    <th>日付</th>
    <th>点数</th>
　  <th>合否</th>
  </tr>

<?php
require 'db.php';                                 # 接続
$sql = 'SELECT * FROM 試験結果管理テーブル WHERE 1';   # SQL文
$prepare = $db->prepare($sql);                    # 準備
$prepare->execute();                              # 実行
$result = $prepare->fetchAll(PDO::FETCH_ASSOC);   # 結果の取得

foreach ($result as $row) {
  $id = h($row['教習生ID']);
  $sikennoshurui = h($row['試験の種類']);
  $date = h($row['日付']);
  $tensu = h($row['点数']);


  if ($tensu >= 90) {
    $judge = "合格";
  } else {
    $judge = "不合格";
  }

  echo '<tr>'.
   "<td>{$id}</td>". 
   "<td>{$sikennoshurui}</td>".
   "<td>{$date}</td>".
   "<td>{$tensu}</td>".
   "<td>{$judge}</td>".
   '</tr>';
}
?>
</table>
<br>
<ul>
      <li><a href="menu.php"><div class="font_test">メニュー画面</div></a></li>
      <li><a href="ログアウト.php"><div class="font_test">ログアウト</div></a></li>
      <li><a href="学科講習.php"><div class="font_test">学科講習</div></a></li>
      <li><a href="受講一覧.php"><div class="font_test">受講一覧</div></a></li>
      <li><a href="登録.php"><div class="font_test">受講登録</div></a></li>
      <li><a Class="active" href="#成績と合否一覧.php"><div class="font_test">成績と合否一覧</div></a></li> 
      <li><a href="成績登録.php"><div class="font_test">成績登録</div></a></li> 
</ul>

  </body>
</html>