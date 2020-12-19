@extends('picker.layouts.common')

@push('css')
<link rel="stylesheet" href="{{ asset('/css/picker/oder-details.css') }}">
@endpush

@section('title',"注文詳細")

@section('header_title',"注文番号：000")

@section('content')
<div class="oder-details">
  <div class="card-deck">

    <div class="card">
      <img src="{{asset('/images/white.jpeg')}}" class="card-img-top" width="100%" height="180">
      <div class="card-body">
        <p class="card-title">Card title</p>
        <h5 class="card-text">商品説明がここに入る。商品説明がここに入る。商品説明がここに入る。</h5>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>

    <div class="card">
      <img src="{{asset('/images/white.jpeg')}}" class="card-img-top" width="100%" height="180">
      <div class="card-body">
        <p class="card-title">Card title</p>
        <h5 class="card-text">商品説明がここに入る。商品説明がここに入る。商品説明がここに入る。</h5>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>

    <div class="card">
      <img src="{{asset('/images/white.jpeg')}}" class="card-img-top" width="100%" height="180">
      <div class="card-body">
        <p class="card-title">Card title</p>
        <h5 class="card-text">商品説明がここに入る。商品説明がここに入る。商品説明がここに入る。</h5>
        <h5 class="card-text">冷凍</h5>
        <h5 class="card-text">¥2000</h5>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>

    <div class="card">
      <img src="{{asset('/images/white.jpeg')}}" class="card-img-top" width="100%" height="180">
      <div class="card-body">
        <p class="card-title">Card title</p>
        <h5 class="card-text">商品説明がここに入る。商品説明がここに入る。商品説明がここに入る。</h5>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>

  </div>
</div>
@endsection
