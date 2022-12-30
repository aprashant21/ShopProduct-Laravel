@extends('layouts.masterlayout')
@section('title','CDs')
@section('content')
<div class="row2">
	<div class="col-3">
		@include('categories')
	</div>
	<div class="col-9">
<div class="container">
		<h2 class="h2title">You Can Find Your Cds Here:</h2>
		@foreach($cdArr as $cd)
	<div style="text-align: center;" class="col-mid-12">
		<hr style="border: 5px solid green;border-radius: 5px;">
		<img class="imgdata" src="cd_image/{{$cd->id}}"	>
		<h3 style="text-transform: uppercase;">{{$cd->title}}</h3>
		<p>{{$cd->firstname}}{{ " "}}{{$cd->mainname}}</p>
		<b>{{"Rs."}}{{$cd->price}}</b>
		<h4><span>{{"PLAY LENGTH :"}}</span>{{$cd->playlength}}{{" minutes"}}</h4>
		@if(Auth::user())
			<form class="col-3" method="post" action="/cdcheckout">
				@csrf
				<input type="hidden" name="pid" value=1>
				<input class="buybtn" type="submit" name="buy_submit" value="BUY NOW">
			</form>
		@else
			<a href="/login"><span style="color:green">Kindly Login to Buy the Products</span></a>
		@endif
	</div>

	@endforeach
</div>
</div>
<span class="col-mid">{{$cdArr->links()}} <br>Showing {{ $cdArr->firstItem() }} to {{ $cdArr->lastItem() }}
of total {{$cdArr->total()}} entries </span>
</div>
@endsection