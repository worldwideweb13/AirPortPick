@extends('picker.layouts.common')

@push('css')
<link rel="stylesheet" href="{{ asset('/css/picker/list-all.css') }}">
@endpush

@section('title',"完了一覧")

@section('header_title',"ピックアップ済み")

@section('content')
  <div class="list-all">
    <div class="card">
      <div class="card-header">
        注文番号：124
      </div>
      <div class="card-body">
        <h2 class="card-title">紀野 秀行さま</h2>
        <h4 class="card-text">
          商品点数：33点<br>
          冷凍冷蔵：あり<br>
          合計金額：¥55000<br>
        </h4>
        <hr>
        <h3 class="card-text">回収完了日：12月24日 13:00まで</h3>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        注文番号：125
      </div>
      <div class="card-body">
        <h2 class="card-title">鈴木 大生さま</h2>
        <h4 class="card-text">
          商品点数：10点<br>
          冷凍冷蔵：なし<br>
          合計金額：¥20000<br>
        </h4>
        <hr>
        <h3 class="card-text">回収完了日：12月24日 13:00まで</h3>
      </div>
    </div>
  @if(count($order_tables) > 0)
    @foreach($order_tables as $order_table)
      <div class="card">
        <div class="card-header">
          注文番号：{{ $order_table->onum}}
        </div>
        <div class="card-body">
          <h2 class="card-title">{{ $order_table-> uname}} さま</h2>
          <h4 class="card-text">
            商品点数：{{ $order_table->tesnsu}}点<br>
            冷凍冷蔵：{{ $order_table->cold}}<br>
            合計金額：¥{{ $order_table->item_total}}<br>
          </h4>
          <hr>
          <h3 class="card-text">回収完了日：12月24日 13:00まで</h3>
        </div>
      </div>
    @endforeach
  @endif
  </div>
@endsection
