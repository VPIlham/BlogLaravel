@extends('blog/app')

@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
	.fa-thumbs-up:hover{
		color:#f41115;
	}
</style>

@endsection
@section('main-content')

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
<nav class="navbar" role="navigation">

	<!-- Page Title -->
	<div class="page-title-container">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 page-title wow fadeIn">
					<span aria-hidden="true" class="icon_camera"></span>
					<h3>Ingin foto motor mu di di pasang iklan?</h3>
					<p>Segera Hubungi admin.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Portfolio -->
	<div class="portfolio-container">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 portfolio-filters wow fadeInLeft">
					{{-- @foreach($tags as $tag)		
					<a href=""> {{$tag->name}}</a>
					@endforeach --}}
				</div>
			</div>
		</div>
	</div>
	<?php $count=1?>
	<div class="container">
		@if($count==0 )
		<div class="row">
			@endif

			@foreach($posts as $post)
			@if( ($count % 4) == 1 )
			<div class="row">
				@endif
				<div class="col-sm-3 portfolio-masonry">
					<div class="portfolio-box web-design">
						<div class="portfolio-box-container">
							<img src="{{Storage::disk('local')->url($post->image)}}">
							<div class="portfolio-box-text">
								<a href="{{route('post',$post->slug)}}">
									<h1>{{$post->title}} <a class="big-link-2 view-work" href="{{Storage::disk('local')->url($post->image)}}"><span class="icon_search"></span></a></h1>

								</a>
								<p class="glyphicon glyphicon-shopping-cart"> <i>Rp.{{$post->price}}</i></p>
								<p class="glyphicon glyphicon-map-marker"> <i>{{$post->subtitle}}</i></p>
								<p class="glyphicon glyphicon-calendar"> <i>{{$post->created_at->diffForHumans()}}</i></p>

								<br>

								<a href="{{route('post',$post->slug)}}">
									<button type="button" class="btn btn-default">
										Lihat</button>
									</a>
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php $count++ ?>
				@if( ($count % 4) == 1 )
			</div>
			@endif
			@endforeach
			@if($count==1)
		</div>
		@endif


		<!-- Pager -->
		<ul class="pager">
			<li class="next">
				{{$posts->links()}}	            
			</li>
		</ul>	
	</div>

	<!-- Call To Action -->
	<div class="call-to-action-container">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 call-to-action-text wow fadeInLeftBig">
					<p>
						Masih bingung untuk <span class="colored-text">pembayaran</span>?
						<p>Metode pembayaran kami adalah datang langsung ke dealer kami, mudah, cepat dan aman.</p>
					</p>
				</div>
			</div>
		</div>
	</div>
</nav>
@endsection