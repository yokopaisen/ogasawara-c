<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8" />
    <link rel='stylesheet' href='style.css' />
    <title>オンライン教習プログラム</title>
  </head>

  <?php 
    $id = $_POST['教習生ID'];
  ?>
  <body>

  <form action="登録処理.php" method="post">
　　  <h1><center>受講登録</center></h1><br>
　　  <h4>
        <!-- 教習生ID:<input type="text" name="教習生ID" style="width:20em;height:3em"><br><br> -->
        教習生ID:<?php echo $id; ?><br><br>
        学科名:<select name='学科名'style="width:20em;height:3em">
        <option value='学科(1)'>学科(1)</option>
        <option value='学科(2)'>学科(2)</option>
        <option value='学科(3)'>学科(3)</option>
        <option value='学科(4)'>学科(4)</option>
        <option value='学科(5)'>学科(5)</option>
        <option value='学科(6)'>学科(6)</option>
        <option value='学科(7)'>学科(7)</option>
        <option value='学科(8)'>学科(8)</option>
        <option value='学科(9)'>学科(9)</option>
        <option value='学科(10)'>学科(10)</option>
        <option value='学科(11)'>学科(11)</option>
        <option value='学科(12)'>学科(12)</option>
        <option value='学科(13)'>学科(13)</option>
        <option value='学科(14)'>学科(14)</option>
        <option value='学科(15)'>学科(15)</option>
        <option value='学科(16)'>学科(16)</option>
        <option value='学科(17)'>学科(17)</option>
        <option value='学科(18)'>学科(18)</option>
        <option value='学科(19)'>学科(19)</option>
        <option value='学科(20)'>学科(20)</option>
        <option value='学科(21)'>学科(21)</option>
        <option value='学科(22)'>学科(22)</option>
        <option value='学科(23)'>学科(23)</option>
        <option value='学科(24)'>学科(24)</option>
        <option value='学科(25)'>学科(25)</option>
        <option value='学科(26)'>学科(26)</option>
        </select><br><br>
        日付:<input type="date" name="selecteddate" style="width:20em;height:3em"><br><br>
      </h4><br>
      <h4>
        <input type="submit" value="登録" style="width:12%;padding:10px;font-size:25px;">
        <input type="reset" value="リセット" style="width:12%;padding:10px;font-size:25px;"><br>
      </h4><br>
  </form>

  <ul>
  <li><a href="menu.php"><div class="font_test">メニュー画面</div></a></li>
      <li><a href="ログアウト.php"><div class="font_test">ログアウト</div></a></li>
      <li><a href="学科講習.php"><div class="font_test">学科講習</div></a></li>
      <li><a href="受講一覧.php"><div class="font_test">受講一覧</div></a></li>
      <li><a Class="active" href="#登録.php"><div class="font_test">受講登録</div></a></li>
      <li><a href="成績と合否一覧.php"><div class="font_test">成績と合否一覧</div></a></li>
      <li><a href="成績登録.php"><div class="font_test">成績登録</div></a></li><br>
    </ul>

  </body>

</html>
