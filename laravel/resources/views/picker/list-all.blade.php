@extends('picker.layouts.common')

@push('css')
<link rel="stylesheet" href="{{ asset('/css/picker/list-all.css') }}">
@endpush

@section('title',"ホーム")

@section('header_title',"割り当てリスト")

@section('content')
  <div class="list-all">
    <h3>割り当て一覧</h3>
  </div>
@endsection
