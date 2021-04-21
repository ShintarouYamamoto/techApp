@extends('layouts.app')

@section('title','マイページ')

@section('css')
@endsection

@section('content')
<div>
    <h1>マイページ</h1>
</div>

<a class="logout-button btn btn-success" role="button" rel="nofollow" data-method="POST" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>

<div>

</div>
@endsection