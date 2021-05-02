@extends('layouts.app')

@section('title','クラスページ')

@section('css')

@endsection

@section('content')
<div class="container">

    <div>
        <h1>Member.top->Member.class</h1>
    </div>

    <div>
        
    </div>

    <div>
        <a class="btn btn-primary" href="{{ route('member.top') }}" role="button">戻る</a>
    </div>

</div>
@endsection