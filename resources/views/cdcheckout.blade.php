@extends('layouts.payment')
@section('title','Pay with Esewa or Fonepay')
@section('content')
		<div class="container">
			<div class="checkout pt-md-5">
				<div class="col-mod-12">
					<h2> Order Details</h2>
					<div class="row">
						<div class="col-md-4">
							<div class="card" style="width: 18rem;">
								<div class="image_container" style="height: 257px;">
									<img style="width: 100%;height: 90%;" src="cd_image/{{$cd->id}}" class="card-img-top"tyle="width: 100%; height: 100%;">
								</div>
								<div class="card-body">
									<h5 class="card-title">{{$cd->title}}</h5>
									<p class="card-text">Rs. {{$cd->price}}</p>
									<p class="card-text">playlength: {{$cd->playlength}}</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<h3>Pay With </h3>
							<ul class="list-group">
								<li class="list-group-item">
									<form action="https://uat.esewa.com.np/epay/main" method="POST">
										<input value="{{$cd->price}}" name="tAmt" type="hidden">
										<input value="{{$cd->price}}" name="amt" type="hidden">
										<input value="0" name="txAmt" type="hidden">
										<input value="0" name="psc" type="hidden">
										<input value="0" name="pdc" type="hidden">
										<input value="epay_payment" name="scd" type="hidden">
										<input value="{{$order->invoice_no}}" name="pid" type="hidden">
										<input value="{{route('esewa.success')}}" type="hidden" name="su">
										<input value="{{route('esewa.fail')}}" type="hidden" name="fu">
										<input type="image" style="height:100px;max-width: 100%;" src="{{asset('images/esewa.png')}}" alt="Submit">
									</form>
								</li>
								<li class="list-group-item">
									
									<form action="https://dev-merchantapi.fonepay.com/api/merchantRequest" method="POST">
										<input type="hidden"  name="PID" value="{{$fonepay['PID']}}" />
										<input type="hidden" name="MD"  value="{{$fonepay['MD']}}" />
										<input type="hidden" name="PRN" value="{{$fonepay['PRN']}}" />
										<input type="hidden"  name="AMT" value="{{$fonepay['AMT']}}" />
										<input type="hidden"  name="CRN" value="{{$fonepay['CRN']}}" />
										<input type="hidden"  name="DT" value="{{$fonepay['DT']}}" />
										<input type="hidden"  name="R1" value="{{$fonepay['R1']}}" />
										<input type="hidden"  name="R2" value="{{$fonepay['R2']}}" />
										<input type="hidden"  name="DV" value="{{$fonepay['DV']}}" />
										<input type="hidden"  name="RU" value="{{$fonepay['RU']}}" />
										<input type="image" style=" max-width: 100%;height:50px;" src="{{asset('images/fonepay.png')}}" alt="Submit"> 
									</form>
									
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection