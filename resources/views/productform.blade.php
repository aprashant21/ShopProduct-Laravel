@extends('layouts.masterlayout')
@section('title','ADD_PRODUCT')
@section('content')
<div class="row">
	<div class="col-3">
	@include('adminSidebar')
</div>
	<div class="col-mid-3">
<form method="post" action="/book_submit" enctype="multipart/form-data">
		<h1 >ADD BOOKS</h1>
	@csrf
<br>
<span style="color: red;font-size: 18px;">
@error('title')
	{{$message}}
@enderror
</span>
<input placeholder="Book Title" type="text" name="title" required=""><br>
<input Placeholder="Author Firstname(optional)" type="text" name="fname"><br>
<span style="color: red;font-size: 18px;">
@error('sname')
	{{$message}}
@enderror
</span>
<input Placeholder= "Author's Surname" type="text" name="sname" required=""><br>
<span style="color: red;font-size: 18px;">
@error('price')
	{{$message}}
@enderror
</span>
<input placeholder="Price" type="text" name="price" required=""><br>
<span style="color: red;font-size: 18px;">
@error('pages')
	{{$message}}
@enderror
</span>
<input placeholder="pages" type="text" name="pages" required=""><br>
<span style="color: red;font-size: 18px;">
@error('imagebook')
	{{$message}}
@enderror
</span>
<input class="imagesbrowser" type="file" accept="images/*" name="imagebook"/><br>
<input class="button" type="submit" name="store_book" value="Add New"><br>

</form>
</div>
<div class="col-mid-9">
<form method="post" action="/cd_submit" enctype="multipart/form-data">
	<h1>ADD CDS</h1>

@csrf
<br>
<span style="color: red;font-size: 18px;">
@error('title')
	{{$message}}
@enderror
</span>
<input placeholder="CD Title" type="text" name="title" ><br>
<input Placeholder="Band Firstname(optional)" type="text" name="fname"><br>
<span style="color: red;font-size: 18px;">
@error('sname')
	{{$message}}
@enderror
</span>
<input Placeholder= "mainname/Band" type="text" name="sname"><br>
<span style="color: red;font-size: 18px;">
@error('price')
	{{$message}}
@enderror
</span>
<input placeholder="Price" type="text" name="price"><br>
<span style="color: red;font-size: 18px;">
@error('playlegth')
	{{$message}}
@enderror
</span>
<input placeholder="playlength" type="text" name="playlength" ><br>
<span style="color: red;font-size: 18px;">
@error('imagecd')
	{{$message}}
@enderror
</span>
<input class="imagesbrowser" type="file" accept="images/*" name="imagecd"/><br>
<input class="button" type="submit" name="store_cd" value="Add New"><br>

</form>
</div>
</div>

@endsection