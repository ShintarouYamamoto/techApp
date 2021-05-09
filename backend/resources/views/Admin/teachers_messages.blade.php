@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">講師メッセージ</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>タイトル</th>
                    <th>投稿日時</th>
                    <th style="width: 40px"></th>
                </tr>
                </thead>
                <tbody>
                @foreach( $teacher_messages as $info )
                    <tr>
                        <td>{{ $info->id }}</td>
                        <td>{{ $info->subject }}</td>
                        <td>{{ $info->created_at }}</td>
                        <td><a href="{{ route('admin.information.edit',$info->id) }}" class="btn btn-primary btn-sm">編集</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="" class="btn btn-info mt-3">新規作成</a>
        </div>
        <!-- /.card-body -->

        @stop

        @section('css')
            <link rel="stylesheet" href="/css/admin_custom.css">
        @stop

        @section('js')
            <script> console.log('Hi!'); </script>
@stop
