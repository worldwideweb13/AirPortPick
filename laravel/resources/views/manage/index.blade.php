
<!-- echo '<pre>';
var_dump($pickers);
echo '</pre>';
exit; -->

@extends('manage.layouts')
@section('js')
    <script type="text/javascript" src="{{asset('/js/manage/index.js') }}"></script>
@endsection
@section('content')
@include('manage.temp')

    <div class="col-10">
        <!-- タブとタブ内コンテンツの表示 -->
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ピッカー未割当</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">ピッカー配送中</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">ピッカー配送完了</a>
                <a class="nav-item nav-link" id="nav-extract-tab" data-toggle="tab" href="#nav-extract" role="tab" aria-controls="nav-extract" aria-selected="false">その他の注文</a>
            </div>
            <div class="tab-content col-10" id="nav-tabContent">
                <!-- ピッカー未割当 -->
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <table class="table table-hover mt-3">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">注文番号</th>
                                <th scope="col">種別</th>
                                <th scope="col">注文時刻</th>
                                <th scope="col">受取希望時刻</th>
                                <th scope="col">回収期限</th>
                                <th scope="col">担当ピッカー</th>                    
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orderArray as $index => $order)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td ><a href="" class="js-modal-open" >{{ $order->onum }}</a></td>
                                <td>{{ $order->place }}</td>                                
                                <td>{{ $order->otime }}</td>
                                <td>{{ $order->delidate  }}:{{ $order->delitime }}</td>
                                <td class="d-flex">
                                    <div class="dropdown mr-1">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                        <ul class="dropdown-menu">
                                            <li><button class="dropdown-item" value="">---</button></li>
                                            <li><button class="dropdown-item" value="11月31日">@php echo date($order->delitime, strtotime('-1 day')) @endphp</button></li>
                                            <li><button class="dropdown-item" value="12月1日">12月1日</button></li>
                                            <li><button class="dropdown-item" value="12月2日">12月2日</button></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                        <ul class="dropdown-menu">
                                            <li><button class="dropdown-item" value="">---</button></li>
                                            <li><button class="dropdown-item" value="6:00">6:00</button></li>
                                            <li><button class="dropdown-item" value="7:00">7:00</button></li>
                                            <li><button class="dropdown-item" value="8:00">8:00</button></li>
                                            <li><button class="dropdown-item" value="9:00">9:00</button></li>
                                            <li><button class="dropdown-item" value="10:00">10:00</button></li>
                                            <li><button class="dropdown-item" value="11:00">11:00</button></li>
                                            <li><button class="dropdown-item" value="12:00">12:00</button></li>
                                            <li><button class="dropdown-item" value="13:00">13:00</button></li>
                                            <li><button class="dropdown-item" value="14:00">14:00</button></li>
                                            <li><button class="dropdown-item" value="15:00">15:00</button></li>
                                            <li><button class="dropdown-item" value="16:00">16:00</button></li>
                                            <li><button class="dropdown-item" value="17:00">17:00</button></li>
                                            <li><button class="dropdown-item" value="18:00">18:00</button></li>
                                            <li><button class="dropdown-item" value="19:00">19:00</button></li>
                                            <li><button class="dropdown-item" value="22:00">22:00</button></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                        <ul class="dropdown-menu">
                                            <li><button class="dropdown-item" value="">---</button></li>                                 
                                            @foreach($pickers as $picker)
                                            <li><button class="dropdown-item" value={{ $picker->pname }}>{{ $picker->pname }}</button></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </td>                                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>            
                    <!-- 編集内容確定ボタン -->
                    <div class="text-right">         
                        <button type="button" class="btn btn-primary">割当確定</button>
                    </div>
                    <!-- モーダル画面 -->
                    <div class="modal js-modal">
                        <div class="modal__bg js-modal-close"></div>
                        <div class="modal__content">
                            <div class="order_id">
                                <p>注文番号 : </p>
                            </div>
                            <div class="item_box d-flex">
                                <div class="item_name d-flex">
                                    <p>商品名 : </p>
                                    <p>白い恋人</p>
                                </div>                            
                                <div class="stock d-flex">
                                    <p>注文数 : </p>
                                    <p>1個</p>
                                </div>                                                    
                            </div>
                            <a class="js-modal-close" href="">閉じる</a>
                        </div>
                    </div>                    
                </div>
                <!-- ピッカー配送中タブ -->
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <table class="table table-hover mt-3">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">注文番号</th>
                                <th scope="col">注文時刻</th>
                                <th scope="col">受取希望時刻</th>
                                <th scope="col">割当ピッカー</th>                            
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>12:00</td>
                                <td>小笠原</td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>12:00</td>
                                <td>小笠原</td>
                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>12:00</td>
                                <td>小笠原</td>
                                </tr>
                            </tbody>
                    </table>                                    
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <table class="table table-hover mt-3">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">注文番号</th>
                                <th scope="col">注文時刻</th>
                                <th scope="col">受取希望時刻</th>
                                <th scope="col">宅配ピッカー</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                </tr>
                            </tbody>
                    </table>                              
                </div>
                <div class="tab-pane fade" id="nav-extract" role="tabpanel" aria-labelledby="nav-extract-tab">
                    <table class="table table-hover mt-3">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">注文番号</th>
                            <th scope="col">注文時刻</th>
                            <th scope="col">注文完了時刻</th>
                            <th scope="col">受取希望日時</th>
                            <th scope="col">宅配ステータス</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            </tr>
                    </tbody>
                </div>
            </div>
        </nav> 
    </div>
<!-- ボディ要素の閉じタグ  -->
</div>
<!-- モーダルアクション -->
@endsection
