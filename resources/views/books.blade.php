@extends('layouts.masterlayout')
@section('title','BOOKs')
@section('content')
<div class="container">
	<div class="row2">
		<div class="col-3">
			@include('categories')
		</div>
		<div class="col-9">
	<h2 >You Can Find Your Books Here:</h2>

	@foreach($bookArr as $book)
	<div style="text-align: center;" class="col-mid-12">
		<hr style="border: 5px solid green;border-radius: 5px;">
        <img class="imgdata" src="book_image/{{$book->id}}"	>
        <h3 style=" text-transform: uppercase;">{{$book->title}}</h3>
		<p>{{$book->firstname}}{{ " "}}{{$book->mainname}}</p>
		<b>{{"Rs."}}{{$book->price}}</b>
		<h4><span>{{"PAGES :"}}</span>{{$book->numpages}}</h4>
		@if(Auth::user())
			<form class="col-md-3" method="post" action="/bookcheckout">
				@csrf
				<input type="hidden" name="pid" value=1>
				<input class=" buybtn" type="submit" name="submiit" value="BUY NOW">
			</form>
		@else
			<a href="/login"><span style="color:green">Kindly Login to Buy the Products</span></a>
		@endif
	</div>
	@endforeach
</div>

<span class="col-mid">{{$bookArr->links()}} <br>Showing {{ $bookArr->firstItem() }} to {{ $bookArr->lastItem() }}
of total {{$bookArr->total()}} entries </span>
</div>
</div>
@endsection