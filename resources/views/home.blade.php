@extends('layouts.masterlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <span style="color:green;font-size: 16px;">{{ __('You are logged in!') }}</span><br>
                    @if(Auth::user()->id==1)
                            <form class="" method="post" action="/admin">
                                @csrf
                                @method('get')
                                <h4>Click 'Admin Panel' button to go to your Admin Panel :</h4>
                                <p> In admin panel, you can create , read, update and delete products like books, cds</p>
                                <input class="button" name="add" type="submit" value="ADMIN PANEL">
                            </form>
                    @else
                    <h4>{{'Here You can find Amazing Products like Books, Cds and many more :'}}</h4>
                    @include('categories')
                    @endif

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
