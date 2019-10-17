@extends('master')

@section('content')
	<form method="post" action="{{url('student')}}">
		<input type="text" name="first_name" placeholder="Enter name">
		<input type="submit" name="submit">
	</form>
		
@endsection