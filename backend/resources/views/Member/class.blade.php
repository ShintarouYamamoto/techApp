@extends('layouts.app')

@section('title','クラスページ')

@section('css')
<link rel="stylesheet" href="{{ asset('css/Member/class.css') }}">
@endsection

@section('content')
<div class="container">

    <div>
        <h1 class="text-center">{{$user_class->class}}クラスのお部屋</h1>
    </div>

    <div>
        @foreach ($class_messages as $class_message)
        <div class="list-group">
            <p>{{$class_message->subject}}</p>
        </div>
        @endforeach
        {{ $class_messages->links() }}
    </div>

    <div>
        <a class="return-button" href="{{ route('member.top') }}" role="button">戻る</a>
    </div>

</div>
@endsection