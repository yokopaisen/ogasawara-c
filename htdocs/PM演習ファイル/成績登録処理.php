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
$sikennoshurui   = $_POST['試験の種類'];       # 試験の種類
$touroku_date = $_POST['selecteddate'];  #日付
$tensu    = $_POST['点数'];  # 点数

# DBへの登録
require 'db.php'; # 接続 
    # 試験科目一覧への登録
    $sql = "INSERT INTO 試験結果管理テーブル (教習生ID,試験の種類,日付,点数) VALUES ('$id','$sikennoshurui','$touroku_date','$tensu')";
$prepare = $db->prepare($sql);                                 # 準備 
# $prepare->bindValue($id,`教習生ID`,PDO::PARAM_STR);            # 埋め込み1
# $prepare->bindValue($sikennoshurui,`試験の種類`,PDO::PARAM_STR);         # 埋め込み2
# $prepare->bindValue($touroku_date,`日付`,PDO::PARAM_STR);            # 埋め込み3
# $prepare->bindValue($tensu,`点数`,PDO::PARAM_STR);            # 埋め込み4

$prepare->execute();                                           # 実行

    # 成績と合否一覧を表示（request.php）
    require '成績と合否一覧.php';


?>

</body>
</html>