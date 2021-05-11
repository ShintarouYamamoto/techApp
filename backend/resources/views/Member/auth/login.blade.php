@extends('layouts.app')

@section('title','ログインページ')

@section('css')
<link rel="stylesheet" href="{{ asset('css/Member/auth/login.css') }}">
@endsection

@section('content')
<div class="container main-content">

    <div class="theme text-center">
        <h1>ログインページ</h1>
    </div>

    <div class="card border-dark mb-3 mx-auto">

        <div class="card-header">ログインフォーム</div>

        <div class="card-body text-dark">
            <form method="POST" action="{{ route('member.login') }}">
                @csrf

                {{--メールアドレス--}}
                <div class="form-group">
                    <label for="email" class="">メールアドレス</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required　autocomplete="email">
                </div>
                {{--ログインパスワード--}}
                <div class="form-group">
                    <label for="password" class="">ログインパスワード</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="login-button">ログイン</button>
                </div>

            </form>
        </div>
    </div>

    <div class="button-group text-center">
        <a class="return-button" href="{{ route('main.top') }}" role="button">戻る</a>
    </div>
</div>

@endsection