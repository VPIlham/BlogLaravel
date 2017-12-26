@extends('blog/app')

@section('main-content')
<!-- Main Content -->
<!-- Latest work -->
<div class="work-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 portfolio-filters wow fadeInLeft">
				{{-- @foreach($tags as $tag)		
					<a href=""> {{$tag->name}}</a>
				@endforeach --}}
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 wow fadeInLeftBig">
				<center><h2>Kami Menjual berbagai macam merek motor ternama</h2></center>
			</div>
		</div>
		<div class="slider-container">
			<div class="slider">
				<div class="flexslider">
					<img src="{{asset('blog/img/portfolio/banner.png')}}" data-at2x="assets/img/portfolio/work1.jpg">
				</div>
			</div>
		</div>
		<br>
		<br>
	</div>
</div>
</div>
@endsection