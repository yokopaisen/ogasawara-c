<?php
session_start(); // セッションを開始する．
$message = 'オンライン教習プログラム　ログインしてください．'; // デフォルトメッセージ

if (isset($_POST['username'], $_POST['password'])) {
  $username = $_POST['username']; // フォームから送信されたユーザ名
  $password = $_POST['password']; // フォームから送信されたパスワード

  // データベースに問い合わせる
  require 'db.php';                               # 接続
  $sql = 'SELECT * FROM `教習生個人情報管理テーブル` WHERE 1';      # SQL文
  $prepare = $db->prepare($sql);                  # 準備
  $prepare->execute();                            # 実行
  $result = $prepare->fetchAll(PDO::FETCH_ASSOC); # 結果の取得
  foreach ($result as $row) {
     $id     = h($row['教習生ID']);
     $passwd = h($row['パスワード']);
     if ($username == $id && $password == $passwd) {
         session_regenerate_id();           //セッションを作り直す．
         $_SESSION['username'] = $username; // ユーザ名を記憶する．
         header('Location: menu.php');    // オンライン教習プログラムへ転送する
     }
  }

$message = 'ユーザ名またはパスワードが違います．';
}  // ユーザ名とパスワードが送信されていないなら以下のフォームを表示する．
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset='utf-8' />
  <link rel='stylesheet' href='style.css' /> 
  <title>オンライン教習プログラム</title>
</head>
<body>
  <?php echo $message;?>
  <form action="ログイン.php" method="post">
    <ul style="list-style-type: none;">
      <li><input type="text" name="username" placeholder="教習生ID" /></li><br>
      <li><input type="password" name="password" placeholder="パスワード" /></li><br><br>
      <li><input type="submit" value="ログイン" /></li>
    </ul>
  </form>
</body>
</html>
