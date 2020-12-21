@extends('picker.layouts.common')

@push('css')
<link rel="stylesheet" href="{{ asset('/css/picker/list-all.css') }}">
@endpush

@section('title',"完了一覧")

@section('header_title',"ピックアップ済み")

@section('content')
  <div class="list-all">
  @if(count($order_tables) > 0)
    @foreach($order_tables as $order_table)
      <div class="card">
        <div class="card-header">
          注文番号：{{ $order_table->onum}}
        </div>
        <div class="card-body">
          <h2 class="card-title">{{ $order_table-> uname}} 様</h2>
          <h4 class="card-text">
            商品点数：{{ $order_table->tensu}}点<br>
            合計金額：¥{{ $order_table->item_total}}<br>
          </h4>
          <hr>
          <h3 class="card-text">回収済み</h3>
        </div>
      </div>
    @endforeach
  @endif
  </div>
@endsection
