@extends('picker.layouts.common')

@push('css')
<link rel="stylesheet" href="{{ asset('/css/picker/oder-details.css') }}">
@endpush

@section('title',"注文詳細")

@section('header_title',"注文番号：000")

@section('content')
<div class="oder-details">

  <div class="card-wrapper">

    <div class="card">
      <img src="{{asset('/images/white.jpeg')}}" class="card-img-top" width="100" height="180">
      <div class="card-body">
        <p class="card-title">白い恋人</p>
        <h5 class="card-text">保存：常温<br>金額：500円<br>店舗：ショップ小笠原</h5>
      </div>
      <div class="card-footer">
        <small class="text-muted">
          <label><input type="radio" name="q1" value="true"> 購入済み</label>
          <label><input type="radio" name="q1" value="false"> 売り切れ</label>
        </small>
      </div>
    </div>

    <div class="card">
      <img src="{{asset('/images/white.jpeg')}}" class="card-img-top" width="100" height="180">
      <div class="card-body">
        <p class="card-title">白い恋人</p>
        <h5 class="card-text">常温<br>金額：500円<br>店舗：ショップ小笠原</h5>
      </div>
      <div class="card-footer">
        <small class="text-muted">
          <label><input type="radio" name="q1" value="true"> 購入済み</label>
          <label><input type="radio" name="q1" value="false"> 売り切れ</label>
        </small>
      </div>
    </div>

    <div class="card">
      <img src="{{asset('/images/white.jpeg')}}" class="card-img-top" width="100" height="180">
      <div class="card-body">
        <p class="card-title">白い恋人</p>
        <h5 class="card-text">常温<br>金額：500円<br>店舗：ショップ小笠原</h5>
      </div>
      <div class="card-footer">
        <small class="text-muted">
          <label><input type="radio" name="q1" value="true"> 購入済み</label>
          <label><input type="radio" name="q1" value="false"> 売り切れ</label>
        </small>
      </div>
    </div>

    <div class="card">
      <img src="{{asset('/images/white.jpeg')}}" class="card-img-top" width="100" height="180">
      <div class="card-body">
        <p class="card-title">白い恋人</p>
        <h5 class="card-text">常温<br>金額：500円<br>店舗：ショップ小笠原</h5>
      </div>
      <div class="card-footer">
        <small class="text-muted">
          <label><input type="radio" name="q1" value="true"> 購入済み</label>
          <label><input type="radio" name="q1" value="false"> 売り切れ</label>
        </small>
      </div>
    </div>
  </div>

  <center><button class="btn-lg btn-primary">ピックアップ完了</button></center>

</div>
@endsection
