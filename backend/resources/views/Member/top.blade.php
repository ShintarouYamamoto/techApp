@extends('layouts.app')

@section('title','メンバーページ')

@include('Parts.navbar')

@section('css')
<link rel="stylesheet" href="{{ asset('css/Member/top.css') }}">
@endsection

@section('content')
<div class="container main-content">

    <div>
        <h1>ようこそ、{{Auth::user()->student_name}}君！</h1>
    </div>

    <div>
        @foreach ($information as $info)
        <div class="list-group">
            <a href="{{ url('/member/information', $info->id) }}" class="list-group-item list-group-item-action list-group-item-warning">{{ $info->created_at->format('Y/m/d') }} [{{ $info->subject }}]</a>
        </div>
        @endforeach
        {{ $information->links() }}
    </div>

    <a class="class-button" href="{{ route('member.class') }}" role="button">受講する</a>

</div>
@endsection