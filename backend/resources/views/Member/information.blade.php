@extends('layouts.app')

@section('title','お知らせ')


@section('css')
@endsection

@section('content')
<div>
    <h1>お知らせ詳細ページ</h1>
</div>
<h3>{{ $information->subject }}</h3>
<p>{{ $information->content }}</p>

@endsection