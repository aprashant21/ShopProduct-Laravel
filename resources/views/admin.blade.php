@extends('layouts.masterlayout')
@section('title','ADMIN')
@section('content')
<div class="row">
	<div class="col-3">
	@include('adminSidebar')
</div>
<div class="col-9">
<h1 style="text-align: center;margin-top: 20px;">WELCOME :  {{Auth::user()->name}}  </h1>
</div>
</div>
@endsection