@extends('blog/app')

@section('main-content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.10&appId=1615197548555082";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Page Title -->
<div class="page-title-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 page-title wow fadeIn">
			
				<img src="{{Storage::disk('local')->url($post->image)}}">
				<br>
				<br>
				<br>
				<div class="row">
				<h1>{{$post->title}}</h1>
				<h4>Rp. {{$post->price}}</h4>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- About Us Text -->
<div class="about-us-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 about-us-text wow fadeInLeft">
			<small class="pull-right" style="margin-right: 20px;">Created at {{ $post->created_at->diffForHumans() }}</small>
				<h3>{{$post->title}}</h3>
				<p>
					{!! htmlspecialchars_decode($post->body) !!}
				</p>
				{{-- Tag clouds --}}
				<h3>Tag Clouds</h3>
				@foreach ($post->tags as $tag)
				<a href="{{ route('tag',$tag->slug) }}"><small class="pull-left" style="margin-right: 20px;border-radius: 5px;border: 1px solid gray;padding: 5px;">  
					{{ $tag->name }}
				</small></a>
				@endforeach    
				<br>
				<br>
				<br>
				<br>
				<div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5"></div>
				<br>
			</div>
		</div>
	</div>
</div>
@endsection