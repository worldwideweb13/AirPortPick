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
<p class="category_text">品目: {{$item -> icate}}</p>
<div class="outer">

<div class="item_box">
<ul>
		<img src="{{asset('images/'.$item->pic)}}" alt="">
  </ul>
</div>

</div>
<div class="item_sentence">
  <h2>店舗名:{{$item -> shop}}</h2>
  <h3>{{$item -> itext}}</h3>
    <p>{{$item -> iname}}</p>
      <div class="li_text">
        <li class="text_center">{{$item -> iprice}}<input type="number" value="1" name="num" class="cartin-number"></li>
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