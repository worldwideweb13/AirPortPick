

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('/css/ec/header.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/ec/itembox.css') }}">

  <title>商品一覧</title>
</head>

<body>

<header>
@include('ec.header')
</header>
<hr>
<div class="sarch_num">
  <p>検索結果 : 2000件</p>
</div>
<!-- itemエリア -->
<div class="itembox">

@if(count($items) > 0)
@foreach($items as $item)
  <ul>
    <li><a href="{{ route('itemcheck', $item->iid) }}" ><img src="{{asset('images/product/'.$item->pic)}}" alt="" ></a></li>
    <li class="text_center">{{$item -> iname}}</li>
    <li class="text_center">{{$item -> iprice}}</li>
</ul>
@endforeach
@endif

</div>


<!-- itemエリア end-->


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
</body>
</html>