@extends('layouts.app')

@section('title','トップ')

@section('css')
@endsection

@section('content')
<div>
    <h1>教室紹介ページ</h1>
</div>
<div>
    <a href={{ route('main.buy') }}>申し込みページへ</a>
    <a href={{ route('member.login') }}>login</a>
</div>
@endsection