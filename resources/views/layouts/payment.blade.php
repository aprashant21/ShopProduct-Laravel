<!DOCTYPE html>
<html>
	<head>
		<title>@section('title')@show</title>
		<!-- css -->
	 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	 <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
	 <link href="{{ asset('css/content.css') }}" rel="stylesheet">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	 <!-- meta -->
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">

	 <!-- icon -->
	 <link rel="icon" href="/images/logo.png">

	 <!-- js -->
	 <script src="{{ asset('js/script.js') }}" defer></script>
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous" defer></script>
     <script src="{{ asset('js/app.js') }}" defer></script>


	</head>
		<body>
			<div class="row2">
				<div class="col-12">
				@include('header')
			</div>
			<div class="container">@section('content')
			@show
		</div>
		<div class="col-12">
		@include('footer')
	</div>
		</body>
	</html>