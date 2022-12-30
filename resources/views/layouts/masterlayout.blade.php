<!DOCTYPE html>
<html>
<head>
	<!-- css -->
	 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	 <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

	 <link href="{{ asset('css/content.css') }}" rel="stylesheet">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	 <!-- meta -->
     <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">

	 <!-- icon -->
	 <link rel="icon" href="/images/logo.png">

	 <!-- js -->
	 <script src="{{ asset('js/script.js') }}" defer></script>
	 <script src="{{ asset('js/app.js') }}" defer></script>

	  <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

      <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



<title>@section('title')
@show</title>
</head>

<body>
<div class="row2">
	<div class="col-12">
@include('header')
</div>
<div class="container">@section('content')
@show</div>
@include('footer')
</div>

</body>
</html>