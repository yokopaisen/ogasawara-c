<!DOCTYPE html>

<html lang="ja">
<head>
<meta charset="UTF-8" />
<link rel='stylesheet' href='style.css' />
<title>オンライン教習プログラム</title>
</head>

<body>

<?php
# 送信されたデータの取得
$id    = $_POST['教習生ID'];         # 教習生ID
$gakkamei   = $_POST['学科名'];       # 学科名
$touroku_date = $_POST['selecteddate'];  #日付

# DBへの登録
require 'db.php'; # 接続 
    # 受講一覧への登録
    $sql = "INSERT INTO 受講処理テーブル (教習生ID,学科名,日付) VALUES ('$id','$gakkamei','$touroku_date')";
$prepare = $db->prepare($sql);                                 # 準備 
# $prepare->bindValue($id,`教習生ID`,PDO::PARAM_STR);            # 埋め込み1
# $prepare->bindValue($gakkamei,`学科名`,PDO::PARAM_STR);         # 埋め込み2
# $prepare->bindValue($touroku_date,`日付`,PDO::PARAM_STR);            # 埋め込み3
$prepare->execute();                                           # 実行

    # 受講一覧を表示（request.php）
    require '受講一覧.php';


?>

</body>
</html>
