<!DOCTYPE html>
@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Welcome to TODO</div>
				<div class="panel-body">
					@if (Auth::id())
						You are logged in!
					@else
						Please login to view your list!
					@endif 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
