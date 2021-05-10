@extends('layouts.app')

@section('title','メンバーページ')

@section('css')
<link rel="stylesheet" href="{{ asset('css/Member/top.css') }}">
@endsection

@section('content')
<div class="container main-content">

    <div class="theme">
        <h1 class="text-center">ようこそ、{{Auth::user()->student_name}}君！</h1>
    </div>


    <div class="info-group">
        <ul>
            @foreach ($information as $info)
            <li><a href="{{ url('/member/information', $info->id) }}" class="">[{{ $info->created_at->format('Y/m/d') }}] {{ $info->subject }}</a></li>
            @endforeach
        </ul>
        {{ $information->links() }}
    </div>


    <div class="class-group row">
        <a class="class-button text-center col" href="{{ route('member.class') }}" role="button">受講する</a>
    </div>

    <div class=""></div>

</div>
@endsection