@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')


        <div class="card">
            <div class="card-header">
                <h3 class="card-title">インフォメーション</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 5em">#</th>
                        <th style="width: 20em">タイトル</th>
                        <th style="width: 20em">投稿日時</th>
                        <th style="width: 5em"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $information as $info )
                    <tr>
                        <td>{{ $info->id }}</td>
                        <td>{{ $info->subject }}</td>
                        <td>{{ $info->crated_at }}</td>
                        <td><a href="" class="btn btn-primary">編集</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{{ route('admin.information.create') }}" class="btn btn-info mt-3">新規作成</a>
            </div>
            <!-- /.card-body -->

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
