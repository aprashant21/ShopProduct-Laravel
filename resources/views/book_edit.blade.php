@extends('layouts.masterlayout')
@section('title','BOOK UPDATE')
@section('content')
<div class="row2">
	<div class="col-md-8">
<div class="main">
<form method="post"  action="/book_update/{{$bookArr['id']}}">
	<h1>UPDATE BOOKS</h1>
	@csrf
	@method('put')
<br>
<label>Title :</label><input type="text" name="title" value="{{$bookArr->title}}"><br>
<label>First Name :</label><input type="text" name="fname" value="{{$bookArr->firstname}}"><br>
<label>Main Name :</label><input type="text" name="sname" value="{{$bookArr->mainname}}"><br>
<label>Price :</label><input type="text" name="price" value="{{$bookArr->price}}"><br>
<label>Pages :</label><input type="text" name="pages" value="{{$bookArr->numpages}}"><br>
<input class="button" type="submit" name="submit" value="UPDATE"><br>
</form>
<form method="post" action="/book_delete/{{$bookArr['id']}}">
	@csrf
	@method('delete')
	<input class="buttondelete" type="submit" name="submit" value="DELETE"><br>
</form>
</div>
</div>
</div>
@endsection