<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset='utf-8' />
  <link rel='stylesheet' href='ennsyuu.css'>
  <title>オンライン教習プログラム</title>
</head>

<?php
session_start(); // セッションを開始する．
if (!isset($_SESSION['username'])) {       // ログインしていないなら，
  header('Location: ログイン.php');     // ログインページへ転送する．
}

$id = $_SESSION['username'];

// データベースに問い合わせて教習生IDの情報を取得する
require 'db.php'; # 接続
$sql = 'SELECT * FROM `教習生個人情報管理テーブル` WHERE 教習生ID = '.$id;  # SQL文
$prepare = $db->prepare($sql);                            # 準備
$prepare->execute();                                      # 実行
$result = $prepare->fetchAll(PDO::FETCH_ASSOC);           # 結果の取得
foreach ($result as $row) {
    $id = h($row['教習生ID']);
    $passwd = h($row['パスワード']);
    $name = h($row['氏名']);
}
?>

<body>
<h1><pre>ようこそオンライン教習プログラムへ!</pre></h1>
教習生ID：<?php echo $id; ?></br>
氏名：<?php echo $name ; ?>さん</br></br>

<table>
<tr>
<td rowspan="7">
<img src="kyousyusya.png" height="250" width="320" title="[教習車画像]">
</td>

<tr>
<td>
<h2><a href="学科講習.php">学科講習</a></h2>
</td>
</tr>

<tr>
<td>
<h2><a href="受講一覧.php">受講一覧</a></h2>
</td>
</tr>

<tr>
<td>
<h2><form action="登録.php" method="POST">
    <center><input id="submit_button" type="submit" name="受講登録" value="受講登録"></center>
    <input type="hidden" name="教習生ID" value="<?php echo $id; ?>">
    </form></h2>
</td>
</tr>

<tr>
<td>
<h2><a href="成績と合否一覧.php">成績と合否一覧</a></h2>
</td>
</tr>

<tr>
<td>
<h2><form action="成績登録.php" method="POST">
    <center><input id="submit_button" type="submit" name="受講登録" value="受講登録"></center>
    <input type="hidden" name="教習生ID" value="<?php echo $id; ?>">
    </form></h2>
</td>
</tr>

<tr>
<td>
<h2><a href="ログアウト.php">ログアウト</a></h2>
</td>
</tr>

</table>
</body>

</html>
