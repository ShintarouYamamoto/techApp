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
                        <th style="width: 5em">ID @sortablelink('id','↕︎')</th>
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
                        <td>{{ $info->created_at }}</td>
                        <td><a href="{{ route('admin.information.edit',$info->id) }}" class="btn btn-primary btn-sm">編集</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="mt-3">
                    <a href="{{ route('admin.information.create') }}" class="btn btn-info">新規作成</a>
                    <div style="float:right">{{ $information->links() }}</div>
                </div>
            </div>
            <!-- /.card-body -->

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
