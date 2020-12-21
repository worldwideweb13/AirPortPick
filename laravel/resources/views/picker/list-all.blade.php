@extends('picker.layouts.common')

@push('css')
<link rel="stylesheet" href="{{ asset('/css/picker/list-all.css') }}">
@endpush

@push('js')
<script type="text/javascript" src="{{ asset('/js/picker/click.js') }}"></script>
@endpush

@section('title',"ホーム")

@section('header_title',"注文リスト")

@section('content')
  <div class="list-all">
  @if(count($order_tables) > 0)
    @foreach($order_tables as $order_table)
      <div class="card" data-href="{{ url('/picker/order-details/'.$order_table->onum) }}">
        <div class="card-header">
          注文番号：{{ $order_table->onum}}
        </div>
        <div class="card-body">
          <h2 class="card-title">{{ $order_table->uname}} 様</h2>
          <h4 class="card-text">
            商品点数：{{ $order_table->tensu}}点<br>
            冷凍冷蔵：{{ $order_table->cold}}<br>
            合計金額：¥{{ $order_table->item_total}}<br>
          </h4>
          <hr>
          <h3 class="card-text">回収期限：12月24日 13:00まで</h3>
        </div>
      </div>
    @endforeach
  @endif
  </div>
@endsection
