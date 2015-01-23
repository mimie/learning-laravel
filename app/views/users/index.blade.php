@extends('layouts.default')

@section('content')
	@if($users->count())
		<h1>All Users</h1>
		@foreach ($users as $user)

		<li>{{link_to("/users/$user->username",$user->username)}}</li>
		<!--<li>{{$user->username}}</li>-->
		@endforeach
	@else
		<p>Unfortunately, there are no users.</p>
	@endif
@stop
	