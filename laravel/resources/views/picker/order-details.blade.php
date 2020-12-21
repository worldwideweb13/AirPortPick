@extends('picker.layouts.common')

@push('css')
<link rel="stylesheet" href="{{ asset('/css/picker/oder-details.css') }}">
@endpush

@section('title',"注文詳細")

@section('header_title',"注文番号：000")

@section('content')
<div class="oder-details">

  <div class="card-wrapper">
    @foreach($items as $item)
      @foreach($item as $ite)
        <div class="card">
          <img src="{{asset('/images/product/'.$ite['pic']) }}" class="card-img-top" width="100" height="180">
          <div class="card-body">
            <p class="card-title">{{ $ite['iname'] }}</p>
            <h5 class="card-text">{{ $ite['cold'] }}<br>金額：{{ $ite['iprice'] }}円<br>店舗：{{ $ite['shop'] }}</h5>
          </div>
          <div class="card-footer">
            <small class="text-muted">
              <label><input type="radio" name="{{ $ite['iid']}}" value="true"> 購入済み</label>
              <label><input type="radio" name="{{ $ite['iid']}}" value="false"> 売り切れ</label>
            </small>
          </div>
        </div>
      @endforeach
    @endforeach
  </div>

  <center><button class="btn-lg btn-primary">ピックアップ完了</button></center>

</div>
@endsection
