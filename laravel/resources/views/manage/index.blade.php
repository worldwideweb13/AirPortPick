@extends('manage.layouts')
@section('content')
@include('manage.temp')
    <nav class="col-10">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ピッカー未割当</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">ピッカー配送中</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">ピッカー配送完了</a>
            <a class="nav-item nav-link" id="nav-extract-tab" data-toggle="tab" href="#nav-extract" role="tab" aria-controls="nav-extract" aria-selected="false">その他の注文</a>
        </div>
        <div class="tab-content col-10" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <table class="table table-hover mt-3">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">注文番号</th>
                        <th scope="col">注文時刻</th>
                        <th scope="col">受取希望時刻</th>
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
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <table class="table table-hover mt-3">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">注文番号</th>
                            <th scope="col">注文時刻</th>
                            <th scope="col">ピック完了時刻</th>
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
<!-- ボディ要素の閉じタグ  -->
</div>
@endsection
