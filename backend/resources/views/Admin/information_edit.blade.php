@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">インフォメーション編集</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{ route('admin.information.update') }}">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">タイトル</label>
                        <input type="text" name="subject" value={{ $information->subject }} class="form-control" id="subject" placeholder="タイトル">
                    </div>
                    <div class="form-group">
                        <label for="">内容</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="10" placeholder="内容">{{ $information->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>提示クラス</label>
                        <select name="info_to" class="form-control">
                            <option value="0" @if($information->info_to == 0) selected @endif>全体</option>
                            <option >クラス1</option>
                        </select>
                    </div>
                </div>
                <input hidden type="text" name="id" value={{ $information->id }}>
                <button type="submit" href="" class="btn btn-info mt-3">保存</button>
                <a href="{{ route('admin.information') }}" class="btn btn-secondary mt-3">戻る</a>
            </form>
        </div>
        <!-- /.card-body -->

        @stop

        @section('css')
            <link rel="stylesheet" href="/css/admin_custom.css">
        @stop

        @section('js')
            <script> console.log('Hi!'); </script>
@stop
