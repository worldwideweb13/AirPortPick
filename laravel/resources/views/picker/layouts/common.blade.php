<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- 共通CSS -->
  <link rel="stylesheet" href="{{ asset('/css/picker/common.css') }}">
  <!-- 個別CSS -->
  @stack('css')

  <title>@yield('title')</title>
</head>
<body>
  <header>
    <!-- ヘッダー内部 -->
    <div class="header_fix">
      <div class="burger">
        <label for="menu" class="open close">
          <img src="{{asset('/images/component/menu.png')}}" alt="">
        </label>
      </div>
      <div class="header_title">
        @yield('header_title')
      </div>
      <div>　　　　</div>
    </div>
  </header>

  <div class="main_wrapper">
    <input id="menu" type="checkbox" />
    <label for="menu" class="back"></label>
    <!-- サイドバー -->
    <aside>
      <a href="{{ url('/picker/list-all') }}">
        <i class="history_icon"></i>
        <span>注文リスト</span>
      </a>
      <a href="{{ url('/picker/list-fixed') }}">
        <i class="reserve_icon"></i>
        <span>配達完了一覧</span>
      </a>
      <a href="#">
        <i class="setting_icon"></i>
        <span>ログアウト</span>
      </a>

    </aside>

    <!-- メイン -->
    <main>
    @yield('content')
    </main>
  </div>

</body>
</html>
