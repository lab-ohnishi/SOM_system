@extends('layouts.app')

@section('content')

@endsectioass="table table-striped">
@foreach($test)
<tr>
	<td>{{$test->id}}</td>
	<td>{{$test->username}}</td>
	<td>{{$test->email}}</td>
</tr>
@endforeach
</table>
	<!-- page control -->
{!! $test->render() !!}
@stop
