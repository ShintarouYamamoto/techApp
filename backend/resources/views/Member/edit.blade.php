@extends('layouts.app')

@section('title','編集ページ')

@section('css')
@endsection

@section('content')
<div class="container">
    <div>
        <h1>ユーザ情報編集ページ</h1>
    </div>

    <div>
        <p>{{$user->student_name}}</p>
        <p>{{$user->email}}</p>
        <p>{{$user->address}}</p>
        <p>{{$user->tel_no}}</p>
        <p>{{$user->parentname}}</p>
        <p>{{$user->student_name}}</p>
    </div>

    <div>
        <a class="btn btn-primary" href="{{ route('member.user') }}" role="button">戻る</a>
    </div>
</div>
@endsection