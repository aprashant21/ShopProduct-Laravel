@extends('layouts.masterlayout')
@section('title','HOME')
@Section('content')
 @if(Session::get('contact'))
        <span style="color:green;">{{Session::get('contact')}}</span>
 @endif

<div class="row">
<sidebar class="col-3">
	<ul class="menuul">
		<h5> Products Categories</h5>
		<a class="menua" href="books"><li class="menuli">BOOKS</li></a>
		<a class="menua" href="cds"><li class="menuli">CD</li></a>
	</ul>
</sidebar>

<div class="col-6">
	<div class="maincontent">
<h2 >How we Work ?</h2>
<p>We have a store of products like Books and Cds. You can find out products like Books and CDs here. you can check product categories to see what or which types of books and cds are available here.</p>
</div>
</div>

<div class="col-3"> <div id="noticediv"><h3>Notice</h3>Due to government imposed mandatory lockdown in various cities including kathmandu due to ongoing COVID crisis, we are unable to give proper services in this time.</div>
</div>
</div>

<div class="col-mid">
<h2 style="text-align: center;">Our Products</h2>
	<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="/images/The_Overstory_(Powers_novel).png" style="width:100%">
  <div class="text">The Overstory</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="/images/What'sThe411_.jpg" style="width:100%">
  <div class="text">What's the 411 ?</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="/images/WhiteTeeth.jpg" style="width:100%">
  <div class="text">White Teeth</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
</div>
@endsection