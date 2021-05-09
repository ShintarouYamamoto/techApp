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
                @foreach( $teacher_messages as $message )
                    <tr>
                        <td>{{ $message->id }}</td>
                        <td>{{ $message->subject }}</td>
                        <td>{{ $message->created_at }}</td>
                        <td><a href="{{ route('admin.information.edit',$message->id) }}" class="btn btn-primary btn-sm">編集</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{ route('teacher_messages.create') }}" class="btn btn-info mt-3">新規作成</a>
            <div style="float:right">{{ $teacher_messages->links() }}</div>
        </div>
        <!-- /.card-body -->

        @stop

        @section('css')
            <link rel="stylesheet" href="/css/admin_custom.css">
        @stop

        @section('js')
            <script> console.log('Hi!'); </script>
@stop
