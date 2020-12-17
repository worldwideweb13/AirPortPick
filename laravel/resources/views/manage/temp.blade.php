@section('menu')
<div class="rogo">
    <img class="rogo_img" src="{{asset('/images/rogo.png')}}" alt="">
</div>
</div>
<div class="row mt-2">
    <ul class="nav flex-column col-2">
        <li class="nav-item d-flex flex-row">
            <img class="ml-4 py-2" src="{{asset('/images/order.png')}}" alt="">
            <a class="nav-link active" href="#">注文管理</a>
        </li>
        <li class="nav-item d-flex flex-row">
            <img class="ml-4 py-2" src="{{asset('/images/sales.png')}}" alt="">
            <a class="nav-link active" href="#">売上管理</a>
        </li>
        <li class="nav-item d-flex flex-row">
            <img class="ml-4 py-2" src="{{asset('/images/sales.png')}}" alt="">
            <a class="nav-link active" href="#">ログアウト</a>
        </li>
    </ul>
@endsection