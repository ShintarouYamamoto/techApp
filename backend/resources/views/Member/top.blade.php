@extends('layouts.app')

@section('title','メンバーページ')

@section('css')
<link rel="stylesheet" href="{{ asset('css/Member/top.css') }}">
@endsection

@section('content')
<div class="container">

    <div>
        <h1>auth.login->Member.top</h1>
    </div>

    <div>
        <a class="logout-button btn btn-success" role="button" rel="nofollow" data-method="POST" href="{{ route('member.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a>
        <form id="logout-form" action="{{ route('member.logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
    </div>

    <div>
        @foreach ($information as $info)
        <div class="list-group">
            <a href="{{ url('/member/information', $info->id) }}" class="list-group-item list-group-item-action list-group-item-warning">{{ $info->created_at->format('Y/m/d') }} [{{ $info->subject }}]</a>
        </div>
        @endforeach
    </div>

    <div>
        <a class="btn btn-primary" href="{{ route('member.course') }}" role="button">受講する</a>
    </div>

    <div>
        <a class="btn btn-primary" href="{{ route('member.user') }}" role="button">マイページへ</a>
    </div>

</div>
@endsection