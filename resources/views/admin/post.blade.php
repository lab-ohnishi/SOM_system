@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Input Value</div>

                <div class="panel-body">
                    Decide to input "perspective's number" and evaluation's range".<br><br>
                    <div class="col-md-8 center">
                    <form action="limid" method="post">
                        pers_num <input type="input" name="name"><br>
                        eval_num <input type="input" name="email">
                        <input type="submit" value="SEND">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
