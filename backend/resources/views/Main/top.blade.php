@extends('layouts.app')

@section('title','トップ')

@section('css')
@endsection

@section('content')
<div class="main-wrapper">
    <div class="top-wrapper">

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
