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
                <form action="{{ url('manage/picker-assign/') }}" method="POST">
                {{ csrf_field() }}
                            @foreach($pickerTab as $index => $order)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td><a class="js-modal-open" href="" data-target="modal01">{{ $order->onum }}</a></td>
                                <td>{{ $order->place }}</td>                                
                                <td>{{ $order->otime }}</td>
                                <td>{{ $order->portdate  }} {{ $order->delitime }}</td>
                                <!-- form送信時のため注文番号を配列で保持 -->
                                <input type="hidden" name="onum[]" value="{{$order->onum}}"/>                                <td class="d-flex">
                                    <select class="dropdown mr-1" name="limit_date[]">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                        <ul class="dropdown-menu">
                                            <option><button class="dropdown-item" value="">---</button></option>
                                            <option><button class="dropdown-item" value= @php echo date("m月d日", strtotime($order->portdate."-2 day")) @endphp > @php echo date("m月d日", strtotime($order->portdate."-2 day")) @endphp</button></option>
                                            <option><button class="dropdown-item" value= @php echo date("m月d日", strtotime($order->portdate."-3 day")) @endphp > @php echo date("m月d日", strtotime($order->portdate."-3 day")) @endphp</button></option>
                                            <option><button class="dropdown-item" value= @php echo date("m月d日", strtotime($order->portdate."-4 day")) @endphp>@php echo date("m月d日", strtotime($order->portdate."-4 day")) @endphp</button></option>
                                        </ul>
                                    </select>
                                    <select class="dropdown" name="limit_time[]">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                        <ul class="dropdown-menu">
                                            <option><button class="dropdown-item" value="">---</button></option>
                                            <option><button class="dropdown-item" value="6:00">6:00</button></option>
                                            <option><button class="dropdown-item" value="7:00">7:00</button></option>
                                            <option><button class="dropdown-item" value="8:00">8:00</button></option>
                                            <option><button class="dropdown-item" value="9:00">9:00</button></option>
                                            <option><button class="dropdown-item" value="10:00">10:00</button></option>
                                            <option><button class="dropdown-item" value="11:00">11:00</button></option>
                                            <option><button class="dropdown-item" value="12:00">12:00</button></option>
                                            <option><button class="dropdown-item" value="13:00">13:00</button></option>
                                            <option><button class="dropdown-item" value="14:00">14:00</button></option>
                                            <option><button class="dropdown-item" value="15:00">15:00</button></option>
                                            <option><button class="dropdown-item" value="16:00">16:00</button></option>
                                            <option><button class="dropdown-item" value="17:00">17:00</button></option>
                                            <option><button class="dropdown-item" value="18:00">18:00</button></option>
                                            <option><button class="dropdown-item" value="19:00">19:00</button></option>
                                            <option><button class="dropdown-item" value="22:00">22:00</button></option>
                                        </ul>
                                    </select>
                                </td>
                                <td>
                                    <select class="dropdown" name="picker_id[]">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                            <option value="">---</option>                                 
                                            @foreach($pickers as $picker)
                                            <option value={{ $picker->pid }}>{{ $picker->pname }}</option>
                                            @endforeach
                                    </select>
                                </td>                                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>            
                    <!-- 編集内容確定ボタン -->
                    <div class="text-right js-modal-open" data-target="modal_submit">         
                        <button type="button" class="btn btn-primary">割当確定</button>
                    </div>
                    <!-- モーダル画面（商品詳細） -->
                    <div id="modal01" class="modal js-modal">
                        <div class="modal__bg js-modal-close"></div>
                        <div class="modal__content">
                            <div class="order_id">
                                <p>注文番号 : </p>
                                <p id="m_onum"> </p>
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
                    <!-- モーダル画面 -->
                    <div id="modal01" class="modal js-modal">
                        <div class="modal__bg js-modal-close"></div>
                        <div class="modal__content">
                            <div class="order_id">
                                <p>注文番号 : </p>
                                <p id="m_onum"> </p>
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
                    <!-- モーダル画面 -->
                    <div id="modal_submit" class="modal js-modal">
                        <div class="modal__bg js-modal-close"></div>
                        <div class="modal__content">
                            <div class="form">
                                <p class="h5">割当を確定しますか？<br>(割り当てたピッカーへの指示が飛びます！ご注意下さい)</p>                                                   
                            </div>
                            <div class="submit d-flex flex-row">
                                <button type="submit" class="btn btn-primary mr-3">割当確定</button>
                                <div class="close mt-1">
                                    <a class="js-modal-close" href="">閉じる</a>
                                </div>                            
                            </div>
                        </div>
                <!-- 38行目前後 formの閉じタグ -->
                </form>
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
                                <th scope="col">回収期限</th>
                                <th scope="col">割当ピッカー</th>                            
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($deliveryTab as $index => $order)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td ><a class="js-modal-open" href="" data-target="modal01">{{ $order->onum }}</a></td>
                                <td>{{ $order->place }}</td>                                
                                <td>{{ $order->otime }}</td>
                                <td>{{ $order->timelimit }}</td>                                              
                                <td>{{ $order->pname }}</td>                                              
                            </tr>
                            @endforeach
                            </tbody>
                    </table>                                    
                </div>
                <!-- ピッカー配送完了タブ -->
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <table class="table table-hover mt-3">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">注文番号</th>
                                <th scope="col">注文時刻</th>
                                <th scope="col">受取希望時刻</th>
                                <th scope="col">回収期限</th>
                                <th scope="col">割当ピッカー</th>                            
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($compTab as $index => $order)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td ><a class="js-modal-open" href="" data-target="modal01">{{ $order->onum }}</a></td>
                                    <td>{{ $order->place }}</td>                                
                                    <td>{{ $order->otime }}</td>
                                    <td>{{ $order->timelimit }}</td>                                              
                                    <td>{{ $order->pname }}</td>                                              
                                </tr>
                                @endforeach
                            </tbody>
                    </table>                              
                </div>
            </div>            
        </nav> 
    </div>
<!-- ボディ要素の閉じタグ  -->
</div>
<!-- モーダルアクション -->
@endsection
