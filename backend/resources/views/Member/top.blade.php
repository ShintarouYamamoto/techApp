@extends('layouts.app')

@section('title','メンバーページ')

@section('css')
@endsection

@section('content')
<div>
    <h1>ログイン後表示、メインページ</h1>
</div>

<a class="logout-button btn btn-success" role="button" rel="nofollow" data-method="POST" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>

@include('Parts.infoList')

<div>
    <a class="btn btn-primary" href="#" role="button">受講する</a>
</div>
<div>
    <a class="btn btn-primary" href="#" role="button">mypage</a>
</div>
@endsection