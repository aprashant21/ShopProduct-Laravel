@extends('layouts.masterlayout')
@section('title','CD TABLE')
@section('content')
<div class="row">
    <div class="col-3">
        @include('adminSidebar')
    </div>
    <div class="col-9">
        <div class="table-responsive table--no-card m-b-30">
                <div class="col-lg-9">
<div class="main">
       @if(Session::get('msg'))
           <span class="msg">{{Session::get('msg')}}</span>
       @endif
       <span class="spantitle">CD TABLE</span>
	<table class="table table-borderless table-striped table-product" >
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>FirstName</th>
        <th>MainName</th>
        <th>Price(Rs.)</th>
        <th>Playlength(min)</th>
        <th>Images</th>
        <th>Action</th>
    </tr>
    @foreach($cdArr as $cd)
        <tr>
        <td>{{$cd->id}}</td>
        <td>{{$cd->title}}</td>
        <td>{{$cd->firstname}}</td>
        <td>{{$cd->mainname}}</td>
        <td>{{$cd->price}}</td>
        <td>{{$cd->playlength}}</td>
        <td><img src="/cd_image/{{$cd->id}}" style="height:auto;"></td>

        <td>
            <a href="cd_edit/{{$cd->id}}">SELECT</a>
        </td>
        </tr>
     @endforeach
    </table>
</div>
</div>
</div>
    <br><span style="float:right;">{{$cdArr->links()}}</span>
</div>
</div>
</div>
@endsection