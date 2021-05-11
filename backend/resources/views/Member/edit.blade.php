@extends('layouts.app')

@section('title','編集ページ')

@section('css')
<link rel="stylesheet" href="{{ asset('css/Member/edit.css') }}">
@endsection

@section('content')
<div class="container main-content">

    <div class="theme text-center">
        <h1>編集ページ</h1>
    </div>

    <div class="card border-dark mb-3 mx-auto">

        <div class="card-header">情報を編集する</div>
    
        <div class="card-body text-dark">
            <form method="POST" action="{{ route('member.update') }}">
                @csrf

                {{--生徒名--}}
                <div class="form-group">
                    <label for="student_name" class="">生徒名</label>
                    <input id="student_name" class="form-control @error('student_name') is-invalid @enderror" name="student_name" value="{{ old('student_name',$user->student_name) }}" autocomplete="name">
                </div>
                {{--メールアドレス--}}
                <div class="form-group">
                    <label for="email" class="">メールアドレス</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email',$user->email) }}" autocomplete="email">
                </div>
                {{--住所--}}
                <div class="form-group">
                    <label for="address" class="">住所</label>
                    <input id="address" type="" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address',$user->address) }}" autocomplete="address">
                </div>
                {{--電話番号--}}
                <div class="form-group">
                    <label for="tel_no" class="">電話番号</label>
                    <input id="tel_no" type="tel" class="form-control @error('tel_no') is-invalid @enderror" name="tel_no" value="{{ old('tel_no',$user->tel_no) }}" autocomplete="tel">
                </div>
                {{--保護者名--}}
                <div class="form-group">
                    <label for="parent_name" class="">保護者名</label>
                    <input id="parent_name" type="" class="form-control @error('parent_name') is-invalid @enderror" name="parent_name" value="{{ old('parent_name',$user->parent_name) }}">
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="update-button">更新</button>
                </div>

            </form>
        </div>
    </div>

    <div class="button-group text-center">
        <a class="return-button" href="{{ route('member.user') }}" role="button">戻る</a>
    </div>
</div>

@endsection