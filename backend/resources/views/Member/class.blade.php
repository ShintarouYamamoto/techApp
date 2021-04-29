@extends('layouts.app')

@section('title','クラスページ')

@section('css')

@endsection

@section('content')
<div class="container">

    <div>
        <h1>Member.course->Member.class</h1>
    </div>

    <div>
       <p>OK</p>
    </div>

    <div>
        <a class="btn btn-primary" href="{{ route('member.course') }}" role="button">戻る</a>
    </div>

</div>
@endsection