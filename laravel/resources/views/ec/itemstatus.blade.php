<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/header.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('/css/ec/header.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/ec/itemstaus.css') }}">

	<title>注文状況</title>
</head>

<style>

</style>
<body>
<header>

@include('ec.header')

</header>
<hr>
<div class="status_box">

	  <h2>注文状況</h2>
	  <label for=""><input name="order" value="order" type="radio">12月20日に注文済み</label><br>
	  <label for=""><input name="pick" value="pick" type="radio">ピック完了</label><br>
	  <label for=""><input name="status" value="status" type="radio">配送完了orステーション到着</label> 
</div>


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