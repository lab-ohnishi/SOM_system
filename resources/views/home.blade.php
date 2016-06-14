@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Dashboard</div>

				<div class="panel-body">
					You are logged in!
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="panel panel-default">						
						<div class="panel-heading">Contents</div>

						<div class="panel-body">
							<a class="btn btn-link" href="eva_inp">評価入力画面</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
