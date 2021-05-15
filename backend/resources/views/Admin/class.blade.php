@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">クラス管理</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 5em">ID @sortablelink('id','↕︎')</th>
                    <th style="width: 10em">コースID</th>
                    <th style="width: 10em">クラスID</th>
                    <th style="width: 10em">クラス名</th>
                    <th style="width: 5em">詳細</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $classes as $class )
                    <tr>
                        <td>{{ $class->id }}</td>
                        <td>{{ $class->course }}</td>
                        <td>{{ $class->class_id }}</td>
                        <td>{{ $class->class_name }}</td>
                        <td><a href="" class="btn btn-primary btn-sm">詳細</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->

        @stop

        @section('css')
            <link rel="stylesheet" href="/css/admin_custom.css">
        @stop

        @section('js')
            <script> console.log('Hi!'); </script>
@stop
