@extends('layouts.payment')
@section('title','Multiple Payment Gateway Integration With Laravel')
@section('content')
	<div class="container">
		
		@if( session('success_message'))
			<div class="alert alert-success">
				{{session('success_message')}}
			</div>
		@endif


		@if( session('error_message'))
			<div class="alert alert-danger">
				{{session('error_message')}}
			</div>
		@endif
	</div>
@endsection