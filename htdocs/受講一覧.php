<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <link rel='stylesheet' href='style.css'>
    <title>オンライン教習プログラム</title>
  </head>

  <body>

  <?php 
    $id = $_GET['教習生ID'];
?>

  <table border="1">
  <br>
  <h1><center>受講一覧</center></h1><br>
  <tr>
    <th>学科名</th>
    <th>日付</th>
  </tr>

<?php
require 'db.php';                                 # 接続
$sql = 'SELECT * FROM `受講処理テーブル` WHERE 教習生ID = '.$id;   # SQL文
$prepare = $db->prepare($sql);                    # 準備
$prepare->execute();                              # 実行
$result = $prepare->fetchAll(PDO::FETCH_ASSOC);   # 結果の取得

foreach ($result as $row) {
  $gakkamei = h($row['学科名']);
  $date = h($row['日付']);
  echo '<tr>'.
   "<td>{$gakkamei}</td>".
   "<td>{$date}</td>".
   '</tr>';
}
?>
</table>
<br>
<ul>
      <li><a href="menu.php"><div class="font_test">メニュー画面</div></a></li>
      <li><a href="ログアウト.php"><div class="font_test">ログアウト</div></a></li>
      <li><a href="学科講習.php?教習生ID=<?php echo $id; ?>"><div class="font_test">学科講習</div></a></li>
      <li><a Class="active" href="#受講一覧.php"><div class="font_test">受講一覧</div></a></li>
      <li><a href="登録.php?教習生ID=<?php echo $id; ?>"><div class="font_test">受講登録</div></a></li>
      <li><a href="成績と合否一覧.php?教習生ID=<?php echo $id; ?>"><div class="font_test">成績と合否一覧</div></a></li>
      <li><a href="成績登録.php?教習生ID=<?php echo $id; ?>"><div class="font_test">成績登録</div></a></li><br>
</ul>

  </body>
</html>