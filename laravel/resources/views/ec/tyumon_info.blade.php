<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('/css/ec/tyumon_info.css') }}">

</head>
<style>


</style>
<body>

	<div class="item_paybox">
		<div class="pay_text">
			<p >注文完了</p>
		</div>
		<div class="pay_table">
			<table>
				<tr>
					<th>商品合計</th>
					<td>{{$oder_info[0] -> item_total}}円</td>
				</tr>
		
				<tr>
					<th>送料</th>
					<td>{{$oder_info[0] -> dprice}}円</td>
				</tr>
			</table>
		
		</div>
		

		
	<div class="line__"></div>
	<div class="pay_table">
		<table>
			<tr>
				<th>合計</th>
				<td>{{$oder_info[0] -> item_total}}</td>
			</tr>
	
		</table>
	
	</div>
	

</div>
	
	<div class="infobox">

		<h1>注文情報確認</h1>
		<table class="table">
			<tr>
				<th>氏名</th>
				<td class="table_td">{{$users[2] -> uname}}</td>
			</tr>
	
			<tr>
				<th>住所</th>
				<td class="table_td">{{$users[2] -> address}}</td>
			</tr>
	
			<tr>
				<th>電話番号</th>
				<td class="table_td">{{$users[2] -> phone}}</td>
			</tr>
		</table>
	
		<h2>商品の受け取り方法</h2>
		<table class="table">
			<tr>
				<th class="table_td">受け取り方法</th>
				<td>{{$oder_info[0] -> place}}</td>
			</tr>
			<tr>
				<th>受け取り時間</th>
				<td class="table_td">{{$oder_info[0] -> portdate}}</td>
			</tr>
			
		</table>
	</div>


	

</body>
</html>



