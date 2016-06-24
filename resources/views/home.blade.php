@extends('layouts.app')

@section('page_title')
	Home
@stop

@section('content')
<div class="container">
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>回数</th>
        <th>日付</th>
        <th><div class="text-center">評価入力</div></th>
        <th><div class="text-center">結果確認</div></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
					<td>2016年＿月＿日（）</td>
					<td><a class="btn btn-success btn-block" href="eva_inp">入力</a></td>
          <td><a class="btn btn-danger btn-block" href="eva_inp">結果</a></td>
      </tr>
      <tr>
        <th scope="row">2</th>
          <td>2016年＿月＿日（）</td>
          <td></td>
          <td></td>
      </tr>
      <tr>
        <th scope="row">3</th>
          <td>2016年＿月＿日（）</td>
          <td></td>
          <td></td>
      </tr>
    </tbody>
  </table>
</div>
@endsection
