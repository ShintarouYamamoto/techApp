@extends('layouts.main')

@section('title','トップ')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/Parts/teacher_introduce.css') }}">
@endsection

@section('content')
<div class="main-wrapper">
    <div class="top-wrapper">
        <div class="top-image">

        </div>
    </div>

    <div class="main-content">
        @include('Parts.learning_system')
        @include('Parts.description')
        @include('Parts.lecturer_introduction')
        @include('Parts.fee')
        @include('Parts.questions')
    </div>
</div>
@endsection
