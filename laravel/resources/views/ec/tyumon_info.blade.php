<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>注文確認</title>
	<link rel="stylesheet" href="{{ asset('/css/ec/tyumon_info.css') }}">

</head>
<style>

li{
  list-style: none;

}

.btn-item{
    margin-top: 30px;
}

.btn_c a{
    text-decoration: none;
    color: #fff;
    background-color: #879496;
    width: 58px;
    display: block;
    text-align: center;
    padding: 9px;
    border-radius: 5px;
    font-size: 11px;
    box-shadow: 0 2px 10px 0 #9E9E9E;   
}
.btn-list {
    display: flex;
    width: 70%;
    justify-content: space-around;
    list-style: none;
}
.btn-item>a{
    padding: 12px;  
    font-size: 20px;
}

.btn-buy>a{
    color: #fff;
    border:solid 1px #d095b7;
    color: #d095b7;
    text-decoration: none;
}
.btn-calculate>a{
    background: #d095b7;
    color: #fff;
}

</style>
<body>


<li class="btn-item btn-buy"><a href="{{ url('ec/item-list') }}">商品ページへ</a></li>


	<div class="item_paybox">
		<div class="pay_text">
			<p >注文完了</p>
		</div>
		<div class="pay_table">
			<table>
				<tr>
					<th>商品合計</th>
					<td>1,700円</td>
				</tr>
		
				<tr>
					<th>送料</th>
					<td>0円</td>
				</tr>
			</table>
		
		</div>
		

		
	<div class="line__"></div>
	<div class="pay_table">
		<table>
			<tr>
				<th>合計</th>
				<td>1,700円</td>
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



