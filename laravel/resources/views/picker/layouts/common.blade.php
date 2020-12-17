<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/list_all.css">
  <title>割当一覧</title>
</head>
<body>
  <header>
    <!-- ヘッダー内部 -->
    <div class="header_fix">
      <div class="burger">
        <label for="menu" class="open close">
          <img src="./img/menu.png" alt="">
        </label>
      </div>
      <div class="header_title">
        AirportPick
      </div>
      <div>　　</div>
    </div>
  </header>

  <div class="main_wrapper">
    <input id="menu" type="checkbox" />
    <label for="menu" class="back"></label>
    <!-- サイドバー -->
    <aside>
      <a href="reservation-history.php">
        <i class="history_icon"></i>
        <span>割当リスト</span>
      </a>
      <a href="reservation-create.php">
        <i class="reserve_icon"></i>
        <span>完了履歴</span>
      </a>
      <a href="logout.php">
        <i class="setting_icon"></i>
        <span>ログアウト</span>
      </a>

    </aside>

    <!-- メイン -->
    <main>
      <div class="list_all">
        <h3>全割り当てリスト</h3>

      </div>
    </main>



  </div>

</body>
</html>
