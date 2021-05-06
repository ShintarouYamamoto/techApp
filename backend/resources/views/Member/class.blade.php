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
        @foreach ($class_messages as $class_message)
        <div class="list-group">
            <p>{{$class_message->subject}}</p>
        </div>
        @endforeach
        {{ $class_messages->links() }}
    </div>

    <div>
        <a class="btn btn-primary" href="{{ route('member.top') }}" role="button">戻る</a>
    </div>

</div>
@endsection