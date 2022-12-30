@extends('layouts.masterlayout')
@section('title','Contact TABLE')
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
       <br>
       <span class="spantitle">CONTACT TABLE</span>
	<table class="table table-borderless table-striped table-product" >
    <tr>
        <th>Id</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Action</th>
    </tr>
    @foreach($contactArr as $contact)
        <tr>
        <td>{{$contact->id}}</td>
        <td>{{$contact->fullName}}</td>
        <td>{{$contact->email}}</td>
        <td>{{$contact->message}}</td>

        <td>
            <a href="contact_delete/{{$contact->id}}">Delete</a>
        </td>
        </td>
        </tr>
     @endforeach
    </table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection