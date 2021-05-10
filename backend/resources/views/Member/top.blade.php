@extends('layouts.app')

@section('title','メンバーページ')

@section('css')
<link rel="stylesheet" href="{{ asset('css/Member/top.css') }}">
@endsection

@section('content')
<div class="container main-content">

    <div>
        <h1 class="text-center">ようこそ、{{Auth::user()->student_name}}君！</h1>
    </div>

    <div>
        <div class="list-group">
            <ul>
                @foreach ($information as $info)
                <li><a href="{{ url('/member/information', $info->id) }}" class="">{{ $info->created_at->format('Y/m/d') }} [{{ $info->subject }}]</a></li>
                @endforeach
            </ul>
            {{ $information->links() }}
        </div>
    </div>

    <div class="text-center">
        <a class="class-button" href="{{ route('member.class') }}" role="button">受講する</a>
    </div>

</div>
@endsection