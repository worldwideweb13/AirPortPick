@extends('picker.layouts.common')

@push('css')
<link rel="stylesheet" href="{{ asset('/css/picker/otsu.css') }}">
@endpush

@section('title',"order complete")

@section('header_title', "Airport Pick")

@section('content')
  <div class="order-complete">
    <div class="comp_message">
      <img src="{{ asset('/images/component/rogo.png') }}" alt="">
      <h2>ピックアップお疲れ様でした！</h2>
      <a href="{{ url('/picker/list-all') }}">
      <button class="btn-lg btn-primary">一覧に戻る</button>
      </a>
    </div>
  </div>
@endsection
