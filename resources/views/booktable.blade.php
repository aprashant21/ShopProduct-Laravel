@extends('layouts.masterlayout')
@section('title','BOOK TABLE')
@section('content')
<div class="row">
    <div class="col-3">
        @include('adminSidebar')
    </div>
    <div class="col-9">
<div class="table-responsive table--no-card m-b-30">
    <div class="col-lg-9">
    @if(Session::get('msg'))
        <span class="msg">{{Session::get('msg')}}</span>
    @endif
   <span class="spantitle">BOOK TABLE</span>
	<table class="table table-borderless table-striped table-product">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>FirstName</th>
        <th>MainName</th>
        <th>Price(Rs.)</th>
        <th>Pages</th>
        <th>Images</th>
        <th>Action</th>
    </tr>
    @foreach($bookArr as $book)
        <tr>
        <td>{{$book->id}}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->firstname}}</td>
        <td>{{$book->mainname}}</td>
        <td>{{$book->price}}</td>
        <td>{{$book->numpages}}</td>
        <td><img src="book_image/{{$book->id}}" style="height:auto;"></td>

        <td>
            <a href="book_edit/{{$book->id}}" >SELECT</a>
        </td>
        </tr>
    @endforeach
    </table>
</div>
</div>
    <br><span style="float:right;">{{$bookArr->links()}}</span>
</div>
</div>
</div>
@endsection