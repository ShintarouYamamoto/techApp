@extends('layouts.app')

@section('title','トップ')

@section('css')
@endsection

@section('content')
<div class="main-wrapper">
    <div class="top-wrapper">

    </div>

    <div class="main-content">
        @include('learning_system')
        @include('description')
        @include('lecturer_introduction')
        @include('fee')
        @include('questions')
    </div>
</div>
@endsection
