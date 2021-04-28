@extends('layouts.app')

@section('title','マイページ')

@section('css')
@endsection

@section('content')
<div class="container">
    <div>
        <h1>マイページ</h1>
    </div>

    <div>
        <p>{{$user->student_name}}</p>
        <p>{{$user->email}}</p>
        <p>{{$user->address}}</p>
        <p>{{$user->tel_no}}</p>
        <p>{{$user->parentname}}</p>
        <p>{{$user->parent_name}}</p>
    </div>

    <div>
        <a class="btn btn-primary" href="{{ route('member.edit') }}" role="button">編集する</a>
        <a class="btn btn-primary" href="{{ route('member.top') }}" role="button">戻る</a>
    </div>
</div>
@endsection