@extends('layouts.app')

@section('title','コース選択')

@section('css')

@endsection

@section('content')
<div class="container">

    <div>
        <h1>Member.top->Member.course</h1>
    </div>

    <div>
        @foreach ($usercourses as $usercourse)
        <div class="list-group">
            <a href="{{ route('member.class') }}" class="list-group-item list-group-item-action list-group-item-primary">{{$usercourse->course_id}}</a>
        </div>
        @endforeach
    </div>

    <div>
        <a class="btn btn-primary" href="{{ route('member.top') }}" role="button">戻る</a>
    </div>

</div>
@endsection