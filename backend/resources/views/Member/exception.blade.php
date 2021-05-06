@extends('layouts.app')

@section('title','エラーページ')

@section('css')

@endsection

@section('content')
<div class="container">

    <div>
        <h1>Member.top->Member.exception/h1>
    </div>

    <div>
       <p>{{$message}}</p>
    </div>

    <div>
        <a class="btn btn-primary" href="{{ route('member.top') }}" role="button">戻る</a>
    </div>

</div>
@endsection