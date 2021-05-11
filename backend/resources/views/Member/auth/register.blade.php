@extends('layouts.app')

@section('title','メンバー登録')

@section('css')
@endsection

@section('content')
<div class="container">
    <h1>登録フォーム</h1>
    <form method="POST" action="{{ route('member.register') }}">
        @csrf

        {{--生徒姓--}}
        <div class="form-group">
            <label for="student_surname" class="">生徒姓</label>
            <input id="student_surname" class="form-control @error('student_surname') is-invalid @enderror" name="student_surname" value="{{ old('student_surname') }}" required　autocomplete="name">
        </div>
        {{--生徒名--}}
        <div class="form-group">
            <label for="student_name" class="">生徒名</label>
            <input id="student_name" class="form-control @error('student_name') is-invalid @enderror" name="student_name" value="{{ old('student_name') }}" required　autocomplete="name">
        </div>
        {{--メールアドレス--}}
        <div class="form-group">
            <label for="email" class="">メールアドレス</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required　autocomplete="email">
        </div>
        {{--住所--}}
        <div class="form-group">
            <label for="address" class="">住所</label>
            <input id="address" type="" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required　autocomplete="address">
        </div>
        {{--電話番号--}}
        <div class="form-group">
            <label for="tel_no" class="">電話番号</label>
            <input id="tel_no" type="tel" class="form-control @error('tel_no') is-invalid @enderror" name="tel_no" value="{{ old('tel_no') }}" required　autocomplete="tel">
        </div>
        {{--保護者姓--}}
        <div class="form-group">
            <label for="parent_surname" class="">保護者性</label>
            <input id="parent_surname" type="" class="form-control @error('parent_surname') is-invalid @enderror" name="parent_surname" value="{{ old('parent_surname') }}" required>
        </div>
        {{--保護者名--}}
        <div class="form-group">
            <label for="parent_name" class="">保護者名</label>
            <input id="parent_name" type="" class="form-control @error('parent_name') is-invalid @enderror" name="parent_name" value="{{ old('parent_name') }}" required>
        </div>
        {{--ログインパスワード--}}
        <div class="form-group">
            <label for="password" class="">ログインパスワード</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
        </div>
        {{--ログインパスワード確認--}}
        <div class="form-group">
            <label for="password_confirmation" class="">ログインパスワード確認</label>
            <input id="password_confirmation" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                {{ __('register') }}
            </button>
        </div>
    </form>
</div>
@endsection