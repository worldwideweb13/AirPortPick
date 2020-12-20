<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/css/ec/header.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/ec/itemcheck.css') }}">

	<title>商品チェック</title>
</head>
<style>


	
</style>
<body>
  <header>
    @include('ec.header')
</header>
<hr>
<p class="category_text">生鮮: 魚介</p>
<div class="outer">

<div class="item_box">
<ul>
		<img src="https://m.media-amazon.com/images/I/71JawAq1MmL._AC_UL320_.jpg" alt="">
  </ul>
</div>

</div>
<div class="item_sentence">
  <h2>店舗名:</h2>
  <h3>海夢 タラバガニ 特大 足 3L-4L サイズ </h3><br>

    
    ボイル済み 天然 たらば蟹 約1kg
    <p>【納得の特大サイズ】当店のタラバガニはサイズにこだわった大きな３Ｌ～４Ｌサイズをご用意しました！タラバガニのサイズ表記は販売店独自の表記が多いため６Ｌ・７Ｌ・８Ｌなど誇大表記されている場合もございますが、当店では決められた一定の規格を元に正式なサイズ表記をさせて頂いております！(写真参照)
      【感謝を込めて限定販売】日頃海夢をご利用頂いてるお客様へ感謝の気持ちを込め、タラバガニの激安価格にて数量限定販売いたします！サイズも大きく品質も一級品のタラバガニを是非他店と比べてみてください！
      【一味違うタラバガニの身】タラバガニ販売のパイオニアとして目利きのプロ達の確かな目でタラバガニを厳選しております！タラバガニの味は勿論、鮮度や身入りにも徹底したチェックを行い厳しい品質チェックを合格したタラバガニだけ販売しております</p>
      <div class="li_text">
        <li class="text_center">10,000円<input type="number" value="1" name="num" class="cartin-number"></li>
        </div>
      <div class="text_center btn">
        <input type="submit" class="btn_cartin"  value="カートに入れる">
        </div>

</div>


</body>
<script src="http://code.jquery.com/jquery-3.0.0.js"></script>

<script>
  (function($) {
  var $nav   = $('#navArea');
  var $btn   = $('.toggle_btn');
  var $mask  = $('#mask');
  var open   = 'open'; // class
  // menu open close
  $btn.on( 'click', function() {
    if ( ! $nav.hasClass( open ) ) {
      $nav.addClass( open );
    } else {
      $nav.removeClass( open );
    }
  });
  // mask close
  $mask.on('click', function() {
    $nav.removeClass( open );
  });
} )(jQuery);
</script>
</html>