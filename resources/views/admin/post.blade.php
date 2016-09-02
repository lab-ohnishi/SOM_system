@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Input Value</div>

        <div class="panel-body">
          Decide to input "perspective's number" and evaluation's range".<br><br>
          <div class="col-md-6 center">
            <form action="limid" method="post">
              <a class="btn btn-primary disabled">pers_num </a><input type="input" name="name"><br>
              <p class="bg-info text-left">eval_num <input type="input" name="email"></p>
              <input type="submit" value="SEND">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
            </form>
          </div>
          <div class="col-md-6">
            <form>
              <div class="form-group">
                <label>pers_num</label>
                <div class="row">
                  <div class="col-xs-4">
                    <input type="text" name="name" class="form-control" size="30">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-xs-2">
                    <label>password</label>
                  </div>
                  <div class="col-xs-4">
                    <input type="text" name="password" class="form-control">
                  </div>
                </div>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox">remember
                </label>
              </div>
              <button type="submit" class="btn btn-default">ログイン</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
