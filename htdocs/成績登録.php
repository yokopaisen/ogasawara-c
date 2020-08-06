<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8" />
    <link rel='stylesheet' href='style.css' />
    <title>オンライン教習プログラム</title>
  </head>

  <body>

  <?php 
    $id = $_GET['教習生ID'];
  ?>

  <form action="成績登録処理.php" method="post">
　　  <h1><center>成績登録</center></h1><br>
　　  <h4>
        <!-- 教習生ID:<input type="text" name="教習生ID" style="width:20em;height:3em"><br><br> -->
        教習生ID:<?php echo $id; ?><br><br>
        <input type="hidden" name="教習生ID" value="<?php echo $id; ?>">
        試験の種類:<select name="試験の種類"style="width:20em;height:3em">
        <option value='(仮免許前)効果測定'>(仮免許前)効果測定</option>
        <option value='仮免許前試験'>仮免許前試験</option>
        <option value='(卒業検定前)効果測定'>(卒業検定前)効果測定</option></select><br><br>
        日付:<input type="date" name="selecteddate" style="width:20em;height:3em"><br><br>
        点数:<input type="text" name="点数" style="width:20em;height:3em"><br><br>
 </h4>
      <h4>
        <input type="submit" value="登録" style="width:12%;padding:10px;font-size:25px;">
        <input type="reset" value="リセット" style="width:12%;padding:10px;font-size:25px;"><br>
      </h4><br>
  </form>

  <ul>
  　  <li><a href="menu.php"><div class="font_test">メニュー画面</div></a></li>
      <li><a href="ログアウト.php"><div class="font_test">ログアウト</div></a></li>
      <li><a href="学科講習.php?教習生ID=<?php echo $id; ?>"><div class="font_test">学科講習</div></a></li>
      <li><a href="受講一覧.php?教習生ID=<?php echo $id; ?>"><div class="font_test">受講一覧</div></a></li>
      <li><a href="登録.php?教習生ID=<?php echo $id; ?>"><div class="font_test">受講登録</div></a></li>
      <li><a href="成績と合否一覧.php?教習生ID=<?php echo $id; ?>"><div class="font_test">成績と合否一覧</div></a></li>
      <li><a Class="active" href="#成績登録.php"><div class="font_test">成績登録</div></a></li> 
    </ul>

  </body>

</html>