@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Admin!!!</div>
                <div class="panel-body">
                <div class="col-md-3">
                <tr>
                    <td><a class="btn btn-success btn-block" href="{{ url('/admin/post') }}">
                        Value Insert</a></td>
                    <td><a class="btn btn-success btn-block" href="{{ url('/') }}">
                        DB view</a></td>
                    <td><a class="btn btn-success btn-block" href="{{ url('/home') }}">
                        User's home</a></td>
                </tr>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
